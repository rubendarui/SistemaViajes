<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;
use DB;

class UrlController extends Controller
{
 
   public $error=array();
    public function __construct() {
        $this->titulo = DB::table('objeto')->select('nombre', 'font', 'id')->where('tipoobjeto', 'Titulo')->get();
        $this->subtitulo = DB::table('objeto')->select('nombre', 'url', 'padre')->where('padre', '>', 0)->get();
    }

    public function BackofficeAdminkatoo() {

        $titulo= $this->titulo;
        $subtitulo=  $this->subtitulo;
        return view('Templates/TemplateBackend', compact('titulo','subtitulo'));
    }

}
 
