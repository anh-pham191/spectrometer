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
            -webkit-filter: blur(50px);
            filter: blur(50px);
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



        #loading-gif {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(51, 51, 51, 0.59);
            z-index: 99;
        }

        .loading-img {

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
        <div id="loading-gif" style="display:none; position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;">
            <img src="/images/reload.gif"

                 alt="" class="loading-img"/></div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload your file</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        <form id="upload-nir" action="{!! action('User\IndexController@postUpload') !!}"  enctype="multipart/form-data" method="post" class="form-horizontal" role="form" >
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{!! old('name') !!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Food Type</label>
                                <div class="col-md-6">
                                    @if($meat)
                                        <select class="form-control" name="type" value="{!! old('type') !!}">
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
                                <label class="col-md-4 control-label">Sample location</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="location" value="{!! old('location') !!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Image</label>
                                <div class="col-md-6">
                                    <input type="file" name="image" value="{!! old('image') !!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Other Informations</label>
                                <div class="col-md-6">
                                    <input type="textarea" class="form-control" name="information" value="{!! old('information') !!}">
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
    <script>
        $('#upload-nir').submit(function() {
            $('#loading-gif').show(); // show animation
            $('.panel-default').css('-webkit-filter', 'blur(50px').css('filter', 'blur(50px)');
            return true; // allow regular form submission
        });
    </script>
@stop


