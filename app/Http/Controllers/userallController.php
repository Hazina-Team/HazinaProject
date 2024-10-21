<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SheriaModel;
use App\Models\SeraModel;
use App\Models\KanuniModel;
use App\Models\miongozoModel;
use App\Models\reportModel;




class userallController extends Controller
{
    
    public function list()
     {
        {
            $data['getRecord'] = SheriaModel::getSheria();
            $data['header_title'] = "Idadi Za Sheria";
            return view('user.sheria', $data);
        }
    }

    public function sera()
    {
       {
        $data['getRecord'] = SeraModel::getSera();
        $data['header_title'] = "Idadi Za Sera";
        return view('user.sera', $data);
       }
   }

   public function kanuni()
    {
        $data['getRecord'] = KanuniModel::getSera();
        $data['header_title'] = "Idadi Za Kanuni";
        return view('user.kanuni', $data);
   }

   public function miongozo() 
    {
       $data['getRecord'] = miongozoModel::getSera();
       $data['header_title'] = "Idadi Za Miongozo";
       return view('user.miongozo', $data);
   }

   public function report()
    {
        $data['getRecord'] = reportModel::getSera();
        $data['header_title'] = "Idadi Za Report";
        return view('user.report', $data);
   }

   public function dashboard() {
    $data['header_title'] = "DASHIBODI";
    $data['TotalSheria'] = SheriaModel::getTotalSheria();
    $data['TotalSera'] = SeraModel::getTotalSera();
    $data['Totalkanuni'] = KanuniModel::getTotalKanuni();
    $data['Totalmiongozo'] = miongozoModel::getTotalmiongozo();
    $data['Totalripoti'] = reportModel::getTotalreport();
       return view('dashboard', $data);
   } 
}
