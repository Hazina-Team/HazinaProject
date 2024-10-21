<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\SheriaModel;
use App\Models\SeraModel;
use App\Models\KanuniModel;
use App\Models\reportModel;
use App\Models\miongozoModel;

class DashboardController extends Controller
{
    public function dashboard() {
        $data['header_title'] = 'Dashboard';
        if(Auth::user() -> user_type == 1)
                {
                    $data['TotalAdmin'] = User::getTotalAdmin(1);
                    $data['TotalSheria'] = SheriaModel::getTotalSheria();
                    $data['TotalSera'] = SeraModel::getTotalSera();
                    $data['Totalkanuni'] = KanuniModel::getTotalKanuni();
                    $data['Totalmiongozo'] = miongozoModel::getTotalmiongozo();
                    $data['Totalripoti'] = reportModel::getTotalreport();


                    return view('admin.dashboard', $data);
                }
                else if(Auth::user() -> user_type == 2)
                {
                    return view('mashirika.dashboard', $data);
                }
                else if(Auth::user() -> user_type == 3)
                {
                    return view('mali.dashboard', $data);
                }
               
      }
}
