<?php 
/*
	Sistema de Gestion de Condominios
	@rsiguasg
	SISOH 2015
	//// Pagina Principal

 */?>

@extends('layouts.sigex')
@section('add_head')
{{ HTML::style('styles/zabuto_calendar.min.css"') }}
{{ HTML::style('styles/pace.css"') }}
@stop
@section('title')
.:Sistema de Gestion de Condominios:.
@stop
@section('add_contenido')



<div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="panel panel-blue" style="background:#fff;">
                                            <div class="panel-heading">
                                                Condominios</div>
                                            <div class="panel-body pan">
                                                <form action="#" class="form-horizontal">
                                                <div class="form-body pal">
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Name</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input id="inputName" type="text" placeholder="" class="form-control" /></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword" class="col-md-3 control-label">
                                                            Password</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-lock"></i>
                                                                <input id="inputPassword" type="text" placeholder="" class="form-control" /></div>
                                                            <span class="help-block mbn"><a href="#"><small>Forgot password?</small> </a></span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>



@stop