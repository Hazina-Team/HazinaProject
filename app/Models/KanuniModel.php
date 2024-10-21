<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanuniModel extends Model
{
    use HasFactory;
    protected $table = 'kanuni';
    
    // Disable automatic timestamps
    public $timestamps = false;
static function getTotalKanuni() 
{
    return  KanuniModel::select('kanuni.id')
    ->where('is_delete','=',0)
    ->count();  
       
}
    static public function getSera() 
    {
        $return = KanuniModel::select('kanuni.*')
        ->where('is_delete', '=', 0)
        ->paginate(20);  
        return $return;
    }
    static public function getSingle($id)
    {
        return self::find($id);
    }
}
