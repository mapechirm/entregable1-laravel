<?php

namespace App\Http\Controllers;

use App\Mail\MailManager;
use App\Models\Videogame;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VideogameController extends Controller
{
    public function index()
    {
        return view('consultaVideojuegos', [
            "videojuegos" => Videogame::orderBy('nombre') -> get()
        ]);
    }

    public function create()
    {
        return view('registroVideojuegos');
    }

    public function store(Request $request)
    {
        try {
            $videogame = new Videogame();
            $name = $request -> get('nombrevideojuego');
            $precioAdq = $request -> get('precio');
            $videogame -> nombre = $name;
            $videogame -> slug = strtolower(str_replace(' ', '-', $name));
            $videogame -> clasificacion = $request -> get('clasificacion');
            $videogame -> consola = $request -> get('consola');
            $videogame -> precioAdq = $precioAdq;
            $videogame -> precioVent = $precioAdq * 1.4;
            
            if ($videogame -> save()) {
                Mail::to('pechir68@hotmail.com') -> send(new MailManager($videogame));
                return back() -> with('success', "El videojuego fue registrado correctamente.");
            } 
        } catch (Exception $ex) {
            return back() -> with('danger', "El videojuego no pudo ser registrado correctamente.");
        }    
    }

    /* public function show(Videogame $videojuego)
    {
        return view('verVideojuego', ["videogame" => $videojuego]);
    } */

    public function update(Request $request, Videogame $videojuego)
    {
        try {
            $name = $request -> get('nombrevideojuego');
            $precioAdq = $request -> get('precio');
            $videojuego -> nombre = $name;
            $videojuego -> slug = strtolower(str_replace(' ', '-', $name));
            $videojuego -> clasificacion = $request -> get('clasificacion');
            $videojuego -> consola = $request -> get('consola');
            $videojuego -> precioAdq = $precioAdq;
            $videojuego -> precioVent = $precioAdq * 1.4;

            if ($videojuego -> save()) {
                return back() -> with('success', "El videojuego fue actualizado correctamente.");
            }
        } catch (Exception $ex) {
            return back() -> with('danger', "El videojuego no pudo ser actualizado correctamente.");
        } 
    }

    public function destroy(Videogame $videojuego)
    {
        if ($videojuego -> delete()) {
            return back() -> with('success', "El videojuego fue eliminado correctamente.");
        }
        else {
            return back() -> with('danger', "El videojuego no pudo ser eliminado correctamente.");
        }
    }
}
