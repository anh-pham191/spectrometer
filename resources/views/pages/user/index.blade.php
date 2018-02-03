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
    <div class="container">
        @if(\Illuminate\Support\Facades\Auth::check())
            <h1>Hello {!! \Illuminate\Support\Facades\Auth::user()->email !!}</h1>
            <a href="{!! \Illuminate\Support\Facades\Auth::logout() !!}">Log out</a>

        <p class="content">
        @if(count($kiwifruits) + count($scannedItems) > 0 )
            <div class="title">Spectrometer Data</div>
                @foreach($kiwifruits as $kiwifruit)
                    <h1>{!! $kiwifruit->name !!}</h1>
                    <table>
                        <tr>
                            <th>Sample</th>
                            <th>Area</th>
                            <th>Scan</th>
                            <th>Calories</th>
                            <th>Carbs</th>
                            <th>Water</th>
                        </tr>
                        @foreach($kiwifruit->kiwifruitscanned as $scan)
                            <tr>
                                <td>{!! $scan->sample !!}</td>
                                <td>{!! $scan->area !!}</td>
                                <td>{!! $scan->scan !!}</td>
                                <td>{!! $scan->calories !!}</td>
                                <td>{!! $scan->carbs !!}</td>
                                <td>{!! $scan->water !!}</td>
                            </tr>
                        @endforeach
                    </table>
                @endforeach
                @foreach($scannedItems as $scannedItem)
                    <h1>NIRScan product</h1>
                    <h2>{!! $scannedItem->name !!}</h2>
                    <img width="40%" src="{!! $scannedItem->image !!}">
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Link download</th>
                            <th>View online</th>
                        </tr>
                        @foreach($tempLambs as $tempLamb)
                            @foreach($tempLamb as $lamb)
                                <tr>
                                    <td>{!! $lamb->name!!}</td>
                                    {{--                            <td><a href="{{ $tempLamb['excel_file'] }}">Download</a></td>--}}
                                    {{--                            <td><a href="{{ $tempLamb['view_online'] }}">View online</a></td>--}}
                                </tr>
                                @endforeach

                        @endforeach

                    </table>
                @endforeach
        @else
            <p>Oops, seems like you haven't uploaded any scanned yet, would you like to start uploading it?</p>
                <p><a href="/upload">Upload</a></p>
        @endif
        @else
            <div class="title">Spectrometer Data</div>
            <p><a href="/signin">Log in</a></p>
        @endif
    </div>
    </div>
@stop
