<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

    public function searchWithRegex(Request $request) {
        $pattern ="/([?<article])/";
        //$subject = "view-source:https://www.questmultimarcas.com.br/estoque?termo={$request['search']}";
        $subject = "https://www.questmultimarcas.com.br/estoque?termo={$request['search']}";
        $result= preg_match($pattern, $subject);

        echo "<pre>"; print_r($pattern); echo "</pre>";
        echo "<br>";
        echo "<pre>"; print_r($subject); echo "</pre>";
        echo "<br>";
        var_dump($result);
        echo "<br>";
        echo "<a href='{$subject}' target='_blank'>Ir para:</a>";


        /*   // INICIA O CURL
        $curl = curl_init();

        // SETA AS CONFIGURAÇÕES
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://www.questmultimarcas.com.br/estoque?termo={$request['search']}",
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_RETURNTRANSFER => false
        ]);


        //EXECUTA A REQUISIÇÃO
        $result = curl_exec($curl);

        //FECHA A CONEXÃO
        curl_close($curl);*/

        echo "Foi realizado com sucesso";
    }
}
