<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experiment;
use App\Models\Field_day;
use App\Models\Farmer_trainning;
use App\Models\Block_demonstration;



class secondcontroller extends Controller
{
    function explist_get(){
        $data=Experiment::all();
        return view('frontpage.expermeintlist',compact('data'));
    }
    function getviewlist($id){
        $data2=Experiment::find($id);
       
        return view('frontpage.expview',compact('data2'));
        
    } 
   

    function fielddaylist_get(){
        $data=Field_day::all();
        
        return view('frontpage.fielddaylist',compact('data'));
    }
     
    function getFarmerTraininglistall(){
        $data=Farmer_trainning::all();
        return view('frontpage.farmerlist',compact('data'));
    }

    function getdemo(){
        $data=Block_demonstration::all();
        return view('frontpage.blockdemolist',compact('data'));
    }
}
