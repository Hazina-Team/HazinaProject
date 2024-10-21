<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SheriaModel;
class SheriaController extends Controller
{
    public function list() 
     {
        $data['getRecord'] = SheriaModel::getSheria();
        $data['header_title'] = "Idadi Za Sheria";
        return view('admin.sheria', $data);
    }

    public function add() 
     {
        $data['header_title'] = "Wasilisha Sheria";
        return view('admin.sheriaadd', $data);
    }
    public function insert(Request $request)
     {
        {
            request()->validate([
                'document' => 'mimes:pdf', 
            ]);
            $user = new SheriaModel;
            $user->name = trim($request->name);
            $user->discription = trim($request->discription);
            $user->mwaka = trim($request->mwaka);
            $user->vistion = trim($request->vistion);
            $document = $request->file('document');
            $nama_document = 'FT'.date('Ymdhis').'.'.$request->file('document')->getClientOriginalExtension();
            $document->move('document/',$nama_document);
            $user->document = $nama_document;
                
                $user->save();
                return redirect('admin/sheria')->with('success', "HONGERA! UMEFANIKIWA KUWASILISHA SHERIA");
    }
}

public function delete($id)
{
   $model = new SheriaModel();
   $save = $model->getSingle($id); 
   $save->is_delete = 1;
   $save->save();
   return redirect()->back()->with('success', "UMEFANIKIWA KUFUTA");
}
}
