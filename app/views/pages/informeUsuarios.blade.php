<?php 
/*
    Sistema de Gestion de Condominios
    @rsiguasg
    SISOH 2015
    //// Pagina para visualizar informacion de los usuarios del sistema

 */?>

@extends('layouts.sigex')
@section('add_head')
{{ HTML::style('styles/zabuto_calendar.min.css"') }}
{{ HTML::style('styles/pace.css"') }}
@stop
@section('title')
.:Sistema de Gestion de Condominios - Informe Usuarios:. 
@stop
@section('titulo_ruta')
Usuarios
@stop
@section('icono_ruta')
<i class="fa fa-users"></i>&nbsp;
<a href="dashboard.html">Usuarios</a>&nbsp;&nbsp;
@stop

@section('ruta_name')
Informe Usuarios
@stop
@section('add_contenido')
    
@stop