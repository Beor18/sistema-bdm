@extends('layouts.app')

{{-- Web site Title --}}
@section('title') {!!  trans('site/user.login') !!} :: @parent @endsection

{{-- Content --}}
@section('content')
    <!--<div class="row">
        <div class="page-header">
            <h2>{!! trans('site/user.login_to_account') !!}</h2>
        </div>
    </div>-->

    <div class="container" style="padding-top: 5%">
    <div class="col-md-3"></div>
        <div class="panel panel-default col-md-6" style="padding: 2%;">
           <center><img src="img/bg.png" alt="bdm-bw" width="150px" height="150px"></center>
            {!! Form::open(array('url' => url('auth/login'), 'method' => 'post', 'files'=> true)) !!}
            <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('email', "E-Mail", array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                {!! Form::label('password', "Contraseña", array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Recordar
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12 col-md-offset-4">
                    <button type="submit" class="btn btn-primary btn-lg" style="margin-right: 15px;">
                        Ingresar
                    </button>

                    
                </div>
                <!--<div class="col-md-12">
                    <center><a href="{{ url('/password/email') }}">Olvidaste Contraseña?</a></center>
                </div>-->
            </div>
            {!! Form::close() !!}
            
            <p class="text-muted credit"><span style="width:100%;text-align: center; float: right; padding-top: 2%">&copy; 2017 <a href="#">Desarrollado por Fernando Lopez</a></span></p>
        
    
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection
