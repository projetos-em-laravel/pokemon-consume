<?php

namespace App\Http\Controllers;

class PokemonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $url = "https://www.canalti.com.br/api/pokemons.json";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //Evitar erros de autenticação
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //Transformando em objeto ajax
        $pokemons = json_decode(curl_exec($ch));
        return view('pokemons.index', compact('pokemons'));
    }

}
