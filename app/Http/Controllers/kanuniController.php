<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KanuniModel;

class kanuniController extends Controller
{
    public function list() 
    {
        $data['getRecord'] = KanuniModel::getSera();
        $data['header_title'] = "Idadi Za Kanuni";
        return view('admin.kanuni', $data);
   }

   public function add() 
    {
       $data['header_title'] = "Wasilisha Kanuni";
       return view('admin.kanuniaaadd', $data);
   }
   public function insert(Request $request)
    {
       {
           request()->validate([
               'document' => 'mimes:pdf', 
           ]);
           $user = new KanuniModel;
           $user->name = trim($request->name);
           $user->discription = trim($request->discription);
           $user->mwaka = trim($request->mwaka);
           $user->vistion = trim($request->vistion);
           $document = $request->file('document');
           $nama_document = 'FT'.date('Ymdhis').'.'.$request->file('document')->getClientOriginalExtension();
           $document->move('document/',$nama_document);
           $user->document = $nama_document;
               
               $user->save();
               return redirect('admin/kanuni')->with('success', "HONGERA! UMEFANIKIWA KUWASILISHA KANUNI");
   }
}

public function delete($id)
{
  $model = new KanuniModel();
  $save = $model->getSingle($id); 
  $save->is_delete = 1;
  $save->save();
  return redirect()->back()->with('success', "UMEFANIKIWA KUFUTA");
}
}
