<?php

class PageController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Controlador para Enlazar con las Paginas del Menu
	|--------------------------------------------------------------------------	
	|	@rsiguasg	
	|	SISOH 2015
	*/
	public function regUsuarios()
    {        
        return View::make('pages.registroUsuarios');
    }
    public function infoUsuarios()
    {        
        return View::make('pages.informeUsuarios');
    }

    public function regCondominio()
    {        
        return View::make('pages.registroCondominio');
    }

}
?>