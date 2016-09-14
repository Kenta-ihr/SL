@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Whether UV index</h1>
        {!! Form::model($post, [
    'method' => 'PATCH',
    'url' => ['/posts', $post->id],
    'class' => 'form-horizontal',
    'files' => true
]) !!}
        <div class="form-group">
            {!! Form::label('latitude', 'Latitude', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
                {!! $errors->first('latitude', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            {!! Form::label('longitude', 'Longitude', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('Longitude', null, ['class' => 'form-control']) !!}
                {!! $errors->first('Longitude', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="table">
            <table class="table table-bordered table-striped table-hover text-center">
                <thead>
                <tr>
                    <th>Exposure Category</th>
                    <th> Index Number</th>
                    <th> You are here</th>
                </tr>
                <tr style="background-color: #55d755">
                    <th>Low</th>
                    <th> 1 ~ 2</th>
                    <th> <?= isset($uvIndex['low']) ? "<button type=\"button\" class=\"btn btn-info\">Good</button>" : ''; ?> </th>
                </tr>
                <tr style="background-color: #cbd70f">
                    <th>Moderate</th>
                    <th> 3 ~ 5</th>
                    <th> <?= isset($uvIndex['moderate']) ? "<button type=\"button\" class=\"btn btn-info\">Safe</button>" : ''; ?> </th>
                </tr>
                <tr style="background-color: #d7902b">
                    <th>High</th>
                    <th> 6 ~ 7</th>
                    <th> <?= isset($uvIndex['high']) ? "<button type=\"button\" class=\"btn btn-warning\">Warning</button>" : ''; ?> </th>
                </tr>
                <tr style="background-color: #d7382a">
                    <th>Very High</th>
                    <th> 8 ~ 10</th>
                    <th> <?= isset($uvIndex['veryhigh']) ? "<button type=\"button\" class=\"btn btn-warning\">Danger</button>" : ''; ?> </th>
                </tr>
                <tr style="background-color: #d7068c">
                    <th>Extreme</th>
                    <th> 11+</th>
                    <th> <?= isset($uvIndex['extreme']) ? "<button type=\"button\" class=\"btn btn-danger\">Very Danger</button>" : ''; ?> </th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

    </div>
@endsection
