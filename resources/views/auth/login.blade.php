@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('messages.login') }}</div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'login', 'method' => 'POST', 'class' => 'form-horizontal']) }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{ Form::label('email', trans('messages.email'), ['class' => 'col-md-4 control-label']) }}
                            
                            <div class="col-md-6">
                                {{ Form::email('email', old('email'), ['class' => 'form-control', 'required', 'autofocus']) }}
                                
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{ Form::label('password', trans('messages.password'), ['class' => 'col-md-4 control-label']) }}
                            
                            <div class="col-md-6">
                                {{ Form::password('password', ['class' => 'form-control', 'required']) }}
                                
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        {{ Form::checkbox('remember', old('remember') ? 'checked' : '') }} {{ trans('messages.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {{ Form::submit(trans('messages.login'), ['class' => 'btn btn-primary']) }}

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ trans('messages.forgot_pass') }}
                                </a>
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
