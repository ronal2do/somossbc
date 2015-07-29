<?php

namespace App\Http\Controllers;
use DB;




class InscritosController extends Controller
{
  	public function getIndex(){
		$inscritos = DB::table('news')->get();
		dd($inscritos);
  		return view('inscritos.listagem');
  	}

  	public function getAdicionar(){
  		return view('inscritos.cadastro');
  	}

  	public function getEditar($id){
  		return view('inscritos.editar', ['id' => $id]);
  	}

  	public function postEditar($array = array()){
  		return "Editando o inscrito...";
  	}

  	public function getDeletar($id){
  		return "Deletando o inscrito {$id}";
  	}

  	public function getListaInscritosSaopaulo(){
  		return 'listando os caras de Sampa';
  	}

  	public function missingMethod($params = array()){
  		return 'Erro 404, página não encontrada';
  	}

}
