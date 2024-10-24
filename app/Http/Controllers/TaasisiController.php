<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaasisiModel;
use Str;

class TaasisiController extends Controller
{
    public function list()
     {
        {
            $data['getRecord'] = TaasisiModel::getTaasisi();
            $data['header_title'] = "Idadi Za Taasisi Za Uwekezaji Za Umma";
            return view('admin.taasisi', $data);
        }
    }

    public function add()
     {
        $data['header_title'] = "Sajili Taasisi Za Uwekezaji Za Umma";
        return view('admin.taasisiaadd', $data);
    }

    public function insert(Request $request)
     {
        
            $user = new TaasisiModel;
            $user->name = trim($request->name);
            $user->hati_ya_uwanzishaji = trim($request->hati_ya_uwanzishaji);
            $user->mwaka = trim($request->mwaka);
            if(!empty($request->file('profile_pic')))
        {
      
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = date('Ymdhis').Str::random(20);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move('upload/profile', $filename);
            $user->profile_pic = $filename;
        }
            $user->lengo = trim($request->lengo);
            $user->aina_ya_tasisi = trim($request->aina_ya_tasisi);
            $user->makao_makuu = trim($request->makao_makuu);
            $user->jina_la_mkurugenzi = trim($request->jina_la_mkurugenzi);
            $user->mtaji = trim($request->mtaji);
            $user->mtaji = trim($request->jina_la_wizara);
            $user->mtaji = trim($request->jina_la_mwenyekiti);
            $user->save();
      
            return redirect('admin/taasisi')->with('success', "UMEFANIKIWA KUSAJILI TAASISI ZA UWEKEJAZI ZA UMMA");
      
    }
                    public function delete($id)
                {
                $model = new TaasisiModel();
                $save = $model->getSingle($id); 
                $save->is_delete = 1;
                $save->save();
                return redirect()->back()->with('success', "UMEFANIKIWA KUFUTA");
                }

                public function edit($id)
                {
                $data['getRecord'] = TaasisiModel::getSingle($id);
                if(!empty($data['getRecord'])){
                    $data['header_title'] = "BADILISHA TAARIFA";
                    return view('admin.taasisiajili', $data);
                }
                    else {
                    abort(404);
                    }
                }

                public function update($id, Request $request) 
                 {
                    $user = TaasisiModel::getSingle($id);
            $user->name = trim($request->name);
            $user->hati_ya_uwanzishaji = trim($request->hati_ya_uwanzishaji);
            $user->mwaka = trim($request->mwaka);
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
            $user->lengo = trim($request->lengo);
            $user->aina_ya_tasisi = trim($request->aina_ya_tasisi);
            $user->makao_makuu = trim($request->makao_makuu);
            $user->jina_la_mkurugenzi = trim($request->jina_la_mkurugenzi);
            $user->mtaji = trim($request->mtaji);
            $user->mtaji = trim($request->jina_la_wizara);
            $user->mtaji = trim($request->jina_la_mwenyekiti);
            $user->save();
            return redirect('admin/taasisi')->with('success', "UMEFANIKIWA KUSAJILI TAASISI ZA UWEKEJAZI ZA UMMA");
                }
}
