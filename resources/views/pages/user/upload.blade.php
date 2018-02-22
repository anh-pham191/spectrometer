@extends('layouts.user.application')

@section('metadata')
@stop

@section('styles')
    @parent
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
@stop

@section('title')
@stop

@section('scripts')
    @parent
@stop

@section('content')
    <div class="container" style="padding-top:100px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload your file</div>
                    <div class="panel-body">

                        <form action="{!! action('User\IndexController@postUpload') !!}"  enctype="multipart/form-data" method="post" class="form-horizontal" role="form" >
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Meat Type</label>
                                <div class="col-md-6">
                                    @if($meat)
                                        <select class="form-control" name="type">
                                            @foreach($types as $type)
                                                <option value="{!! $type->id !!}">{!! $type->name !!}</option>
                                                @endforeach
                                        </select>
                                    @else
                                        <select class="form-control" name="type">
                                                <option value="{!! $types->id !!}">{!! $types->name !!}</option>
                                        </select>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Cut location</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="location">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Image</label>
                                <div class="col-md-6">
                                    <input type="file" name="image">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Other Informations</label>
                                <div class="col-md-6">
                                    <input type="textarea" class="form-control" name="information">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Upload</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
