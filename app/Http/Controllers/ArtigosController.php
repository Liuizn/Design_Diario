<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtigosController extends Controller
{
        /**
         * Exibe a página de artigo com informações fixas.
         */
        public function artigo1_show()
        {
            return view('artigos.show-artigo1');
        }

        public function artigo2_show()
        {
            return view('artigos.show-artigo2');
        }

        public function artigo3_show()
        {
            return view('artigos.show-artigo3');
        }

        public function artigo4_show()
        {
            return view('artigos.show-artigo4');
        }

        public function artigo5_show()
        {
            return view('artigos.show-artigo5');
        }

}
