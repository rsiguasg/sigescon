<!DOCTYPE html>
<html lang="es">
<head>
	<title> @yield('title') </title>
	@include('includes.head')
	@yield('add_head')
	
</head>
<body>

	<div>
		@include('includes.topbar')
	     <div id="wrapper">
	        @include('includes.sidebarmenu')
	        <!--BEGIN SIDEBAR MENU-->        
	        <!--END SIDEBAR MENU-->
	        @include('includes.chatform')
	        <!--BEGIN CHAT FORM-->            
	        <!--END CHAT FORM-->
	         <!--BEGIN PAGE WRAPPER-->
	        <div id="page-wrapper">
	        	<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
	        		<div class="page-header pull-left">
	        			<div class="page-title">
	        				@yield('titulo_ruta')
	        			</div>
	        		</div>
	        		<ol class="breadcrumb page-breadcrumb pull-right">
	        			<li>
	        				
	        				@yield('icono_ruta')
	        				<i class="fa fa-angle-right"></i>&nbsp;&nbsp;
	        			</li>
	        			<li class="active">@yield('ruta_name')</li>
	        		</ol>
	        		<div class="clearfix">
	        			
	        		</div>
	        	</div>
	            <!--BEGIN TITLE & BREADCRUMB PAGE-->                
	            <!--END TITLE & BREADCRUMB PAGE-->
	            <!--BEGIN CONTENT-->
	            <div class="page-content">
	                <div id="tab-general">   
	                     @yield('add_contenido')              
	                </div>
	            </div>
	            <!--END CONTENT-->
	            @include('includes.footer')
	            <!--BEGIN FOOTER-->
	           
	            <!--END FOOTER-->
	        </div>
	            <!--END PAGE WRAPPER-->
	    </div>
	</div>
	@include('includes.js')	
	@yield('add_js')	
</body>
</html>



	

