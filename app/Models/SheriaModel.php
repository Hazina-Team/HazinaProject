<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheriaModel extends Model
{
    use HasFactory;
    protected $table = 'sheria';
    
    // Disable automatic timestamps
    public $timestamps = false;

    static function getTotalSheria()
    {
        return  SheriaModel::select('sheria.id')
        ->where('is_delete','=',0)
                    ->count();  
    }
    static public function getSheria() 
    {
        $return = SheriaModel::select('sheria.*')
            ->where('is_delete', '=', 0)
            ->paginate(20);  
            return $return;
    }
    static public function getSingle($id)
    {
        return self::find($id);
    }
}
