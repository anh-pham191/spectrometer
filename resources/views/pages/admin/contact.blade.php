@extends('layouts.admin.application',['menu' => 'dashboard'] )

@section('metadata')
@stop

@section('styles')
    <style>
        table {
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
    <h1>All contact enquiry</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        @foreach($contacts as $contact)
            <tr>
                <td>{!! $contact->name !!}</td>
                <td>{!! $contact->email !!}</td>
                <td>{!! $contact->phone !!}</td>
                <td>{!! $contact->subject !!}</td>
                <td>{!! $contact->message !!}</td>
            </tr>
        @endforeach
    </table>

@stop
