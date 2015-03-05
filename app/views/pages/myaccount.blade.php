<?php 
/*
 *	Company: Shuman Produce Peru
 * 	Author: @rsiguas
 * 	Created_at: 30/07/2014
 */ 
?>
@extends('layouts.default')
@section('add_head')
{{ HTML::style('css/main4.css') }}
{{ HTML::style('css/my_account.css') }}
@stop
@section('title')
Extranet .:Shuman Produce Perú:.
@stop
@section('header')
@include('includes.header_home')
@stop

@section('content')
@foreach ($contactos as $con) 
	<div class="col-md-12" id="my_account">
		<figure>
			<img class="img-circle" src="img/risg.jpg" alt="Roxana Siguas Guerrero" title="Roxana Siguas Guerrero">
			<figcaption class="fig_avatar">
				{{ $con->nomContacto}} {{ $con->apeContacto}}
			</figcaption>
		</figure>
	</div>
	<div class="row">		
		<div class="col-md-12" >
			
				<div class="col-md-2" >
				</div>
				<div class="col-md-4" >
					<article>
						<header class="head_datos">			DATOS PERSONALES
						</header>
						<div class="title_datos">
							Nombres
						</div>
						<div class="def_datos">			
							{{ $con->nomContacto}}
						</div>

						<div class="title_datos">
							Apellidos
						</div>
						<div class="def_datos">			
							{{ $con->apeContacto}}
						</div>
						<div class="title_datos">
							Fecha Nacimiento
						</div>
						<div class="def_datos">			
							{{ $con->fechaNac}}
						</div>
						<div class="title_datos">
							Sexo
						</div>
						<div class="def_datos">			
							{{ $con->genero}}
						</div>

						<div class="title_datos">
							Teléfono
						</div>
						<div class="def_datos">			
							{{ $con->fonoContacto}}
						</div>

						<div class="title_datos">
							Email
						</div>
						<div class="def_datos">			
							{{ $con->emailContacto}}
						</div>
						<a href="ContactosController@editContacto">Editar</a>
					</article>

				</div>
				<div class="col-md-4">
					<article class="article_2">
						<header class="head_datos">			DATOS EN LA EMPRESA
						</header>
						<div class="title_datos">
							Cargo
						</div>
						<div class="def_datos">			
							{{ $con->cargoContacto}}
						</div>

						<div class="title_datos">
							Email Corporativo
						</div>
						<div class="def_datos">			
							{{ $con->emailContacto}}
						</div>
						<div class="title_datos">
							Telefono Empresa
						</div>
						<div class="def_datos">			
							{{ $con->emailContacto}}
						</div>
						<a href="">Editar</a>
					</article>
				</div>

				<div class="col-md-2">
				</div>
			
		</div>
	</div>	
	@endforeach
@stop					

