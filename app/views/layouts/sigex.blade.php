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
	        	@include('includes.rutapagina')
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



	

