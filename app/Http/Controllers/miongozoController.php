<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\miongozoModel;


class miongozoController extends Controller
{
    public function list() 
    {
       $data['getRecord'] = miongozoModel::getSera();
       $data['header_title'] = "Idadi Za Miongozo";
       return view('admin.miongozo', $data);
   }

   public function add() 
    {
       $data['header_title'] = "Wasilisha Miongozo";
       return view('admin.miongozoaaadd', $data);
   }
   public function insert(Request $request)
    {
       {
           request()->validate([
               'document' => 'mimes:pdf', 
           ]);
           $user = new miongozoModel;
           $user->name = trim($request->name);
           $user->discription = trim($request->discription);
           $user->mwaka = trim($request->mwaka);
           $user->vistion = trim($request->vistion);
           $document = $request->file('document');
           $nama_document = 'FT'.date('Ymdhis').'.'.$request->file('document')->getClientOriginalExtension();
           $document->move('document/',$nama_document);
           $user->document = $nama_document;
               
               $user->save();
               return redirect('admin/miongozo')->with('success', "HONGERA! UMEFANIKIWA KUWASILISHA MIONGOZO");
   }
}

public function delete($id)
{
  $model = new miongozoModel();
  $save = $model->getSingle($id); 
  $save->is_delete = 1;
  $save->save();
  return redirect()->back()->with('success', "UMEFANIKIWA KUFUTA");
}
}
