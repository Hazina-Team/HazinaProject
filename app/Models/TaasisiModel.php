<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaasisiModel extends Model
{
    use HasFactory;

    protected $table = 'taasisi_za_umma';
    
    // Disable automatic timestamps
    public $timestamps = false;

    static public function getTaasisi() 
     {
        $return = TaasisiModel::select('taasisi_za_umma.*')
            ->where('is_delete', '=', 0)
            ->paginate(10);  
            return $return;
    }

    public function getProfile() 
    {
        if(!empty($this->profile_pic) && file_exists('upload/profile/' .$this->profile_pic))
        {
            return url('upload/profile/'.$this->profile_pic);
        }
        else {
            return "";
        }
    }

    static public function getSingle($id)
    {
        return self::find($id);
    }
}
