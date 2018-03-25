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
                    <div class="panel-heading">Upload your spectroscopy files (in csv format) </div>
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
                        <form action="{!! action('User\IndexController@postUploadFile') !!}"  enctype="multipart/form-data" method="post" class="form-horizontal" role="form" >
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Find your study here</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="item">
                                        @foreach($scanned_items as $scanned_item)
                                            <option value="{!! $scanned_item->id !!}">{!! $scanned_item->name !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group nameOfFile">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nameOfFile">
                                </div>
                            </div>
                            <div class="form-group uploadFile">
                                <label class="col-md-4 control-label">File Uploaded</label>
                                <div class="col-md-6">
                                    <input type="file" name="fileToUpload[]" multiple>
                                </div>
                            </div>
                            <i style="font-size:26px" class="addFile fa fa-plus-circle"></i>

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

    {{--<script>--}}


        {{--$('.addFile').on('click', function(){--}}
            {{--var leng = $('.uploadFile').length;--}}
            {{--var count = leng + 1;--}}
            {{--if(count < 11){--}}
                {{--$('.uploadFile').last().after("<div class='form-group nameOfFile'>" +--}}
                        {{--"<label class='col-md-4 control-label'>Scanned part "+count+"</label>"+--}}
                        {{--"<div class='col-md-6'>" +--}}
                        {{--"<input type='text' class='form-control' name='nameOfFile[]'>" +--}}
                        {{--" </div> </div>"+--}}
                        {{--"<div class='form-group uploadFile'>" +--}}
                        {{--"<label class='col-md-4 control-label'>File Uploaded "+count+"</label>" +--}}
                        {{--"<div class='col-md-6'>" +--}}
                        {{--"<input type='file' name='fileToUpload[]' id='fileToUpload'>" +--}}
                        {{--" </div> </div>");--}}
            {{--} else {--}}
                {{--$('.addFile').hide();--}}
            {{--}--}}

        {{--})--}}
    {{--</script>--}}


@stop
