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
    <h1>Lamb</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Link download</th>
                <th>View online</th>
            </tr>
            @foreach($tempLambs as $tempLamb)

            <tr>
                <td>{!! $tempLamb->name !!}</td>
                <td><a href="{{ $tempLamb->excel_file }}">Download</a></td>
                <td><a href="{{ asset($tempLamb->view_online) }}">View online</a></td>
            </tr>
            @endforeach

        </table>

    <h1>Milk Biscuits</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Link download</th>
            <th>View online</th>
        </tr>
        @foreach($tempMilkBiscuits as $tempMilkBiscuit)

            <tr>
                <td>{!! $tempMilkBiscuit->name !!}</td>
                <td><a href="{{ $tempMilkBiscuit->excel_file }}">Download</a></td>
                <td><a href="{{ asset($tempMilkBiscuit->view_online) }}">View online</a></td>
            </tr>
        @endforeach

    </table>

    <h1>Milk Powder</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Link download</th>
            <th>View online</th>
        </tr>
        @foreach($tempMilkPowders as $tempMilkPowder)

            <tr>
                <td>{!! $tempMilkPowder->name !!}</td>
                <td><a href="{{ $tempMilkPowder->excel_file }}">Download</a></td>
                <td><a href="{{ asset($tempMilkPowder->view_online) }}">View online</a></td>
            </tr>
        @endforeach

    </table>
@stop
