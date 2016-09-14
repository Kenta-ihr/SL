<?php
/**
 * Created by PhpStorm.
 * User: ihara-kenta
 * Date: 2016/09/08
 * Time: 11:38
 */

namespace App\Http\Controllers;

use App\Service\WhetherUvService;
use App\UVIndex;
use League\Flysystem\Exception;

class WhetherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $location = [];
        $dataUV = $this->requestDataUVIndex($location);
        $whetherUv = new WhetherUvService;
        return view('whether', ['uvIndex' => $whetherUv->getUvLevel($dataUV->data)]);
    }

    private function requestDataUVIndex(array $location)
    {

        $client = new \GuzzleHttp\Client();
        try {
            $res = $client->request('GET',
                sprintf("http://api.openweathermap.org/v3/uvi/%d,%d/current.json?appid=%s",
                    $location['latitude'] ?? 10.6,
                    $location['longitude'] ?? 106.6,
                    env('WHETHER_API_KEY', '')
                ));
            $objResponse = json_decode($res->getBody());
        } catch (Exception $e) {
        }

        $dataParse = new UVIndex();
        $dataParse->data = $objResponse->data;
        $dataParse->time = date('Y-m-d', strtotime($objResponse->time));
        $dataParse->latitude = $objResponse->location->latitude;
        $dataParse->longitude = $objResponse->location->longitude;
        return $dataParse;
    }
}