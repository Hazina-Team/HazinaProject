<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeraModel extends Model
{
    use HasFactory;
    protected $table = 'sera';
    
    // Disable automatic timestamps
    public $timestamps = false;

    static function getTotalSera() 
    {
        return SeraModel::select('sera.*')
        ->where('is_delete','=',0)
        ->count();  
        
    }
    static public function getSera() 
    {
        $return = SeraModel::select('sera.*')
        ->where('is_delete', '=', 0)
        ->paginate(10);  
        return $return;
    }
    static public function getSingle($id)
    {
        return self::find($id);
    }
}
