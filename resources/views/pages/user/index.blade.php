@extends('layouts.user.application')

@section('metadata')
@stop

@section('styles')
    @parent
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
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

    {{--<div class="container">--}}
    {{--@if(\Illuminate\Support\Facades\Auth::check())--}}
    {{--<h1>Hello {!! \Illuminate\Support\Facades\Auth::user()->email !!}</h1>--}}
    {{--            <a href="{!! \Illuminate\Support\Facades\Auth::logout() !!}">Log out</a>--}}

    {{--<p class="content">--}}
    {{--@if(count($kiwifruits) + count($scannedItems) > 0 )--}}
    {{--<div class="title">Spectrometer Data</div>--}}
    {{--@foreach($kiwifruits as $kiwifruit)--}}
    {{--<h1>{!! $kiwifruit->name !!}</h1>--}}
    {{--<table>--}}
    {{--<tr>--}}
    {{--<th>Sample</th>--}}
    {{--<th>Area</th>--}}
    {{--<th>Scan</th>--}}
    {{--<th>Calories</th>--}}
    {{--<th>Carbs</th>--}}
    {{--<th>Water</th>--}}
    {{--</tr>--}}
    {{--@foreach($kiwifruit->kiwifruitscanned as $scan)--}}
    {{--<tr>--}}
    {{--<td>{!! $scan->sample !!}</td>--}}
    {{--<td>{!! $scan->area !!}</td>--}}
    {{--<td>{!! $scan->scan !!}</td>--}}
    {{--<td>{!! $scan->calories !!}</td>--}}
    {{--<td>{!! $scan->carbs !!}</td>--}}
    {{--<td>{!! $scan->water !!}</td>--}}
    {{--</tr>--}}
    {{--@endforeach--}}
    {{--</table>--}}
    {{--@endforeach--}}
    {{--<h1>NIRScan product</h1>--}}
    {{--<p>Do you want to start a new NIR study?</p>--}}
    {{--<p><a href="/upload">Upload</a></p>--}}
    {{--<p>Do you want to upload new spectroscopy data files?</p>--}}
    {{--<p><a href="/uploadfile">Upload Files</a></p>--}}
    {{--<div style="width: 100%; height: 100%">--}}
    {{--<table style="margin: 0 auto">--}}
    {{--<tr>--}}
    {{--<th>No</th>--}}
    {{--<th>Name</th>--}}
    {{--<th>Image</th>--}}
    {{--<th>Cut Location</th>--}}
    {{--<th>Other Information</th>--}}
    {{--</tr>--}}
    {{--@foreach($scannedItems as $key => $scannedItem)--}}
    {{--<tr>--}}
    {{--<td>{!! $key+1 !!}</td>--}}
    {{--<td>{!! $scannedItem->name !!}</td>--}}
    {{--<td><img src="{!! $scannedItem->image !!}"></td>--}}
    {{--<td>{!! $scannedItem->cut_location !!}</td>--}}
    {{--<td>{!! $scannedItem->other_information !!}</td>--}}
    {{--</tr>--}}
    {{--@endforeach--}}
    {{--</table>--}}
    {{--</div>--}}

    {{--@else--}}
    {{--<p>Oops, seems like you haven't uploaded any scanned yet, would you like to start uploading it?</p>--}}
    {{--<p><a href="/upload">Upload</a></p>--}}
    {{--@endif--}}
    {{--@else--}}
    {{--<div class="title">Spectrometer Data</div>--}}
    {{--<p><a href="/signin">Log in</a></p>--}}
    {{--@endif--}}
    {{--</div>--}}


    @if(\Illuminate\Support\Facades\Auth::check())
        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1>Spectrometer Data</h1>
                    <p>Do you want to start a new NIR study ?</p>
                    <a href="/upload" class="btn btn-primary btn-lg">Upload Now</a>

                </div>
            </div>
        </header>
        <section class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <span class="glyphicon glyphicon-apple" style="font-size: 60px"></span>
                        <h2 class="section-heading">Do you want to upload new spectroscopy data files?</h2>
                        <a href="/uploadfile" class="btn btn-primary btn-lg">Upload Files</a>

                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container">
                @if(count($kiwifruits) + count($scannedItems) > 0 )
                    <table style="margin: 0 auto; ">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Cut Location</th>
                            <th>Other Information</th>
                        </tr>
                        @foreach($scannedItems as $key => $scannedItem)
                            <tr>
                                <td>{!! $key+1 !!}</td>
                                <td><a href="/upload/{{$scannedItem->id}}">{!! $scannedItem->name !!}</a></td>
                                <td><img src="{!! $scannedItem->image !!}"></td>
                                <td>{!! $scannedItem->cut_location !!}</td>
                                <td>{!! $scannedItem->other_information !!}</td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p>Oops, seems like you haven't uploaded any scanned yet, would you like to start uploading it?</p>
                    <p><a href="/upload">Upload</a></p>
                @endif

            </div>
        </section>
    @else
        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1>Spectrometer Data</h1>
                    <p>Do you want to start a new NIR study ?</p>
                    <a href="/signup" class="btn btn-primary btn-lg">Register</a>
                    <a href="/signin" class="btn btn-primary btn-lg">Login</a>
                </div>
            </div>
        </header>
        <!-- Intro Section -->
        <section class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <span class="glyphicon glyphicon-apple" style="font-size: 60px"></span>
                        <h2 class="section-heading">Register to upload and see your own study</h2>

                    </div>
                </div>
            </div>
        </section>
        <!-- Content 1 -->
        <section class="content">

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img class="img-responsive img-circle center-block" src="../../../images/microphone.jpg" alt="">
                    </div>
                    <div class="col-sm-6">
                        <h2 class="section-header">Upload your own study</h2>
                        <p class="lead text-muted">Click here to upload your own NIR study</p>
                        <a href="#" class="btn btn-primary btn-lg">Upload now</a>
                    </div>

                </div>
            </div>
        </section>


        <!-- Content 2 -->
        <section class="content content-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="section-header">Adding files to your NIR study</h2>
                        <p class="lead text-light">Each study has dozen of files to be inspected, upload now to start
                            studying</p>
                        <a href="#" class="btn btn-default btn-lg">Upload your files</a>
                    </div>
                    <div class="col-sm-6">
                        <img class="img-responsive img-circle center-block" src="../../../images/iphone.jpg" alt="">
                    </div>

                </div>
            </div>
        </section>
    @endif




@stop
