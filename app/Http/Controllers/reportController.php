<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reportModel;

class reportController extends Controller
{
    public function list() 
    {
       $data['getRecord'] = reportModel::getSera();
       $data['header_title'] = "Idadi Za Report";
       return view('admin.report', $data);
   }

   public function add() 
    {
       $data['header_title'] = "Wasilisha Report";
       return view('admin.reportaaadd', $data);
   }
   public function insert(Request $request)
    {
       {
           request()->validate([
               'document' => 'mimes:pdf', 
           ]);
           $user = new reportModel;
           $user->name = trim($request->name);
           $user->discription = trim($request->discription);
           $user->mwaka = trim($request->mwaka);
           $user->vistion = trim($request->vistion);
           $document = $request->file('document');
           $nama_document = 'FT'.date('Ymdhis').'.'.$request->file('document')->getClientOriginalExtension();
           $document->move('document/',$nama_document);
           $user->document = $nama_document;
               
               $user->save();
               return redirect('admin/report')->with('success', "HONGERA! UMEFANIKIWA KUWASILISHA REPORT");
   }
}

public function delete($id)
{
  $model = new reportModel();
  $save = $model->getSingle($id); 
  $save->is_delete = 1;
  $save->save();
  return redirect()->back()->with('success', "UMEFANIKIWA KUFUTA");
}
}
