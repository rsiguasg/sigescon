@extends('layouts.default')
@section('add_head')

@stop
@section('title')
Login .:Sistema de Gestion de Condominios:.
@stop
@section('content')
<div class="page-form">
        <div class="panel panel-blue">
            <div class="panel-body pan">
                @if (Session::has('mensaje_login'))
                <span>{{ Session::get('mensaje_login') }}</span>
                @endif
                {{ Form::open(array('url' => 'login','class'=>'form-horizontal')) }}
                
                <div class="form-body pal">
                    <div class="col-md-12 text-center">
                        <h1 style="margin-top: -90px; font-size: 48px;">
                            SIGECON</h1>
                        <br />
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <img src="images/avatar/profile-pic.png" class="img-responsive" style="margin-top: -35px;" />
                        </div>
                        <div class="col-md-9 text-center">
                            <h1>
                                Espera, por favor.</h1>
                            <br />
                            <p>
                                Solo debes loguearte para Ingresar</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-md-3 control-label">
                            Usuario:</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <i class="fa fa-user"></i>
                                {{Form::text('name','',array('class'=>'form-control','id'=>'inputName','placeholder'=>'')) }}              
                                </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-md-3 control-label">
                            Contraseña:</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <i class="fa fa-lock"></i>
                                 {{Form::password('password',array('class'=>'form-control ','id'=>'inputPassword','placeholder'=>'')) }}
                                </div>
                        </div>
                    </div>
                    <div class="form-group mbn">
                        <div class="col-lg-12" align="right">
                            <div class="form-group mbn">
                                <div class="col-lg-3">
                                    &nbsp;
                                </div>
                                <div class="col-lg-9">
                                
                                   
                                         {{ Form::submit('Registrar',array('class'=>'btn btn-default')); }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        @if(Session::has('mensaje_error'))
{{ Session::get('mensaje_error') }}
@endif
        <div class="col-lg-12 text-center">
            <p>
                ¿Olvido su Contraseña?
            </p>
        </div>
    </div>
@stop