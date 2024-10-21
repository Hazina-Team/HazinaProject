<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miongozoModel extends Model
{
    use HasFactory;
    protected $table = 'miongozo';
    
    // Disable automatic timestamps
    public $timestamps = false;

    static public function getSera() 
    {
        $return = miongozoModel::select('miongozo.*')
        ->where('is_delete', '=', 0)
        ->paginate(20);  
        return $return;
    }
    static public function getTotalmiongozo() 
    {
        return miongozoModel::select('miongozo.id')
        ->where('is_delete','=',0)
        ->count();  
       
    }
    static public function getSingle($id)
    {
        return self::find($id);
    }
}
