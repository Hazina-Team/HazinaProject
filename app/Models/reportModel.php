<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reportModel extends Model
{
    use HasFactory;
    protected $table = 'report';
    
    // Disable automatic timestamps
    public $timestamps = false;

    static public function getSera() 
    {
        $return = reportModel::select('report.*')
        ->where('is_delete', '=', 0)
        ->paginate(20);  
        return $return;
    }

    static public function getTotalreport() 
    {
        return reportModel::select('report.id')
        ->where('is_delete','=',0)
        ->count(); 
      
    }
    static public function getSingle($id)
    {
        return self::find($id);
    }
}
