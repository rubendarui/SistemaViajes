<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class objeto extends Model
{
    protected $table ='objeto';
    protected $fillable =["nombre", "url", "tipoobjeto", "idmodulo", "eliminar", "habilitado", "padre", "font"];
      public $timestamps = false;
 


}
