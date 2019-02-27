<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todos;
use Illuminate\Support\Facades\Auth;
class examenController extends Controller
{
    //
    $id = Auth::user()->id;
    $nombres = todos::find($id);
	//$nombres = formulario::orderBy('nombre','asc')->get();
	return view('resultado', compact('nombres'));
        public function formulariocrear()
    {
        return view('crear');
    }
    public function store(Request $request)
    {
        $ex = new todos();
        $actual = date("Y m d h:i:s");
        $usuario = $request->date;

        //Si le quitas el if else funciona el registro.

        if($usuario > $actual){
        	$ex->title = $request->title;
        	$ex->description = $request->description;
        	$ex->date = $actual;
        	$ex->user_id = Auth::user()->id;
        	$ex->save();
        	return view('welcome');
        }else{
        	$ex->title = $request->title;
        	$ex->description = $request->description;
        	$ex->date = $request->date;
        	$ex->user_id = Auth::user()->id;
        	$ex->save();
        	return view('welcome');
        }


//o el de abajo(el de arriba es mejor)
    	//return view("resultado", array('name' => $nombre));
        //formulario::create(Request::all());
    }
}