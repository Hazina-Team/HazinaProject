<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeraModel;
class SeraController extends Controller
{
    public function list() 
    {
       $data['getRecord'] = SeraModel::getSera();
       $data['header_title'] = "Idadi Za Sera";
       return view('admin.sera', $data);
   }

   public function add() 
    {
       $data['header_title'] = "Wasilisha Sera";
       return view('admin.seraaadd', $data);
   }
   public function insert(Request $request)
    {
       {
           request()->validate([
               'document' => 'mimes:pdf', 
           ]);
           $user = new SeraModel;
           $user->name = trim($request->name);
           $user->discription = trim($request->discription);
           $user->mwaka = trim($request->mwaka);
           $user->vistion = trim($request->vistion);
           $document = $request->file('document');
           $nama_document = 'FT'.date('Ymdhis').'.'.$request->file('document')->getClientOriginalExtension();
           $document->move('document/',$nama_document);
           $user->document = $nama_document;
               
               $user->save();
               return redirect('admin/sera')->with('success', "HONGERA! UMEFANIKIWA KUWASILISHA SERA");
   }
}

public function delete($id)
{
  $model = new SeraModel();
  $save = $model->getSingle($id); 
  $save->is_delete = 1;
  $save->save();
  return redirect()->back()->with('success', "UMEFANIKIWA KUFUTA");
}

}
