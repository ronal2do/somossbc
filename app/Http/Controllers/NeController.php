<?php

namespace App\Http\Controllers;

class NeController extends Controller
{
	public function getIndex(){
		return 'Listagem de news';
	}

	public function getAdicionar(){
		return 'Formulário';
	}
}