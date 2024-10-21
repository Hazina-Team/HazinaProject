<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Str;


class AdminController extends Controller
{
    public function list()
    {
        $data['getRecord'] = User::getmashirika();
        $data['header_title'] = "Idadi Ya Watumiaji";
        return view('admin.admin.list', $data);
   }

   public function add() 
   {
       $data['header_title'] = "Sajili Watumiaji";
       return view('admin.admin.add', $data);
  }
  public function insert(Request $request)
  {
      request()->validate([
          'email' => 'required|email|unique:users',
          'phone' => 'max:14|min:10',
          'password' => 'required|max:12|min:8|string' 
      ]);

      $user = new User;
      $user->name = trim($request->name);
      $user->gender = trim($request->gender);
      $user->email = trim($request->email);
      if(!empty($request->file('profile_pic')))
  {

      $ext = $request->file('profile_pic')->getClientOriginalExtension();
      $file = $request->file('profile_pic');
      $randomStr = date('Ymdhis').Str::random(20);
      $filename = strtolower($randomStr).'.'.$ext;
      $file->move('upload/profile', $filename);
      $user->profile_pic = $filename;
  }
      $user->password = hash::make($request->password);
      $user->status = trim($request->status);
      $user->phone = trim($request->phone);
      $user->age = trim($request->age);
      $user->address = trim($request->address);
      $user->user_type = 1;
      $user->save();

      return redirect('admin/admin/list')->with('success', "UMEFANIKIWA KUSAJILI WATUMIAJI");
 }

 public function edit($id)
 {
  $data['getRecord'] = User::getSingle($id);
  if(!empty($data['getRecord'])){
      $data['header_title'] = "Edit Auth";
      return view('admin.admin.edit', $data);
  }
    else {
      abort(404);
    }
 }

 public function update($id, Request $request)
 {
    request()->validate([
        'email' => 'required|email|unique:users,email,'.$id
    ]);

   $user = User::getSingle($id);
   $user->name = trim($request->name);
       $user->gender = trim($request->gender);
       $user->email = trim($request->email);
       if(!empty($request->file('profile_pic')))
       {
           if(!empty($user->getProfile()))
           {
               unlink('upload/profile/'.$user->profile_pic);
           }
           $ext = $request->file('profile_pic')->getClientOriginalExtension();
           $file = $request->file('profile_pic');
           $randomStr = date('Ymdhis').Str::random(20);
           $filename = strtolower($randomStr).'.'.$ext;
           $file->move('upload/profile', $filename);
           $user->profile_pic = $filename;
       }
       $user->status = trim($request->status);
       $user->phone = trim($request->phone);
       $user->age = trim($request->age);
       $user->address = trim($request->address);
       if(!empty($request->password))
       {
           $user->password = hash::make($request->password);
       }
       $user->save();
       return redirect('admin/admin/list')->with('success', "UMEFANIKIWA KUBADILISHA TARIFA");
 }

 public function delete($id)
 {
  $user = User::getSingle($id);
  $user->is_delete = 1;
  $user->save();
  return redirect('admin/admin/list')->with('success', "UMEFANIKIWA KUFUTA");
}

}
