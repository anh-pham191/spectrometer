@extends('layouts.admin.application',['menu' => 'dashboard'] )

@section('metadata')
@stop

@section('styles')
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }

    </style>
@stop

@section('scripts')
@stop

@section('title')
{{ config('site.name') }} | Admin | Dashboard
@stop

@section('header')
Dashboard
@stop

@section('content')
    @foreach($kiwifruits as $kiwifruit)
        <h1>{!! $kiwifruit->name !!}</h1>
        <table >
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
@stop
