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

        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 15px;
        }

        th {
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr {
            margin: 10px;
        }

        th {
            background-color: #4CAF50;
            color: white;
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
        <div class="title">NIR file Data for {!! \App\ScannedItem::find($scanned_item_id)->name !!}</div>
        <table style="margin: 0 auto">
            <tr>
                <th>Scan ID</th>
                <th>Study Name</th>
                <th>Scan description</th>
                <th>Download Link</th>
            </tr>
            @foreach(\App\ScannedItem::find($scanned_item_id)->items as $item)
                <tr>
                    <td>{!! $scanned_item_id !!}</td>
                    <td>{!! \App\ScannedItem::find($scanned_item_id)->name !!}</td>
                    <td>{!! $item->name !!}</td>
                    <td><a href="{!! $item->excel_file !!}">Download link</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@stop
