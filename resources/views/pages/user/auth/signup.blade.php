@extends('layouts.user.application', ['noFrame' => true, 'bodyClasses' => ''])

@section('metadata')
@stop

@section('styles')
@stop

@section('scripts')
@stop

@section('title')
    Sign In
@stop

@section('header')
    Sign In
@stop

@section('content')
    {{--<form action="{!! action('User\AuthController@postSignUp') !!}" method="post">--}}
        {{--{!! csrf_field() !!}--}}
        {{--<input type="email" name="email" placeholder="@lang('user.pages.auth.messages.email')">--}}
        {{--<input type="password" name="password" placeholder="@lang('user.pages.auth.messages.password')">--}}
        {{--<input type="checkbox" name="remember_me" value="1"> @lang('user.pages.auth.messages.remember_me')--}}
        {{--<button type="submit">@lang('user.pages.auth.buttons.sign_up')</button>--}}
    {{--</form>--}}
    <br>

    <div class="container" style="padding-top:100px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
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
                        <form action="{!! action('User\AuthController@postSignUp') !!}" method="post" class="form-horizontal" role="form" >
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">User Type</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="type">
                                        @foreach($types as $type)
                                            <option value="{!! $type->id !!}">{!! $type->name !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Register</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
