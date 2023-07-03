<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rigestration;
use App\Models\Experiment;
use App\Models\Verity;
use App\Models\Field_day;
use App\Models\Crop;
use App\Models\Block_demonstration;
use App\Models\Farmer_trainning;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class Admincontroller extends Controller
{
    // login and logout process
    function admininsert(Request $req){
        $data=new Rigestration;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=$req->password;
        $data->save();
        return redirect('/');
    }
    function adminlogin(Request $request){
        $data=Rigestration::where('email',$request->email)->where('password',$request->password)->get()->toArray();
        if($data){
         $request->session()->put('user',$data[0]['id']);
         return redirect('/dashboard');
        }else{
         session::flash('user','username passowrd not match');
       
         return redirect('/')->withinput();
        }
 }
 function distroy(){
    Session::flush();
    Auth::logout();
    return redirect('/');
 }

//  dashboard get
function dashboardget(){
    $data1=Experiment::count();
    $data2=Field_day::count();
    $data3=Block_demonstration::count();
    $data4=Farmer_trainning::count();
   
    return view('dashboard',compact('data1','data2','data3','data4'));
   
   
}



function getview($id){
    $data2=Experiment::find($id);
   
    return view('view',compact('data2'));
    
} 
//  experment registration 
function expreg(Request $req){
    $data=new  Experiment;
    $data->title=$req->int_title;
    $data->objectives=$req->int_obj;
    $data->experimental_material=$req->experimental_material;
    $data->treatment=$req->treatment;
    $data->location_lattitude=$req->location_lattitude;
    $data->location_longitude=$req->location_longitude;
    $data->recorded_date=$req->recorded_date;
    $data->investigator_name=$req->investigator_name;
    $data->starting_date=$req->starting_date;
    // $data->completion_date=$req->completion_date;
    $data->expected_output=$req->int_discription;
    $image1=$req->img1;
        $imagename1=time(). '.' .$image1->getClientOriginalExtension();
        $req->img1->move('image',$imagename1);
        $data->picture_1=$imagename1;
$image2=$req->img2;
        $imagename2=time(). '.' .$image2->getClientOriginalExtension();
        $req->img2->move('image',$imagename2);
        $data->picture_2=$imagename2;
 $image3=$req->img3;
        $imagename3=time(). '.' .$image3->getClientOriginalExtension();
        $req->img3->move('image',$imagename3);
        $data->picture_3=$imagename3;
 $image4=$req->img4;
        $imagename4=time(). '.' .$image4->getClientOriginalExtension();
        $req->img4->move('image',$imagename4);
        $data->picture_4=$imagename4;
    $data->save();
    return redirect('/Experiment');
}
function exp_get(){
    $data=Experiment::all();
    return view('experiment',compact('data'));
}
function deletexp($id){
    $data=Experiment::find($id);
    $data->delete();
    return redirect()->back();

}
function updateexperimentget($id)
{
  $data=Experiment::find($id);
  return view('updateexpermint',['data'=>$data]);
}
function updateexperiment(Request $req,$id){
    $data=Experiment::find($id);
$data->title=$req->int_title;
$data->objectives=$req->int_obj;
$data->experimental_material=$req->experimental_material;
$data->treatment=$req->treatment;
$data->location_lattitude=$req->location_lattitude;
$data->location_longitude=$req->location_longitude;
$data->recorded_date=$req->recorded_date;
$data->investigator_name=$req->investigator_name;
$data->starting_date=$req->starting_date;
// $data->completion_date=$req->completion_date;
$data->expected_output=$req->int_discription;
$image1=$req->img1;
    $imagename1=time(). '.' .$image1->getClientOriginalExtension();
    $req->img1->move('image',$imagename1);
    $data->picture_1=$imagename1;
$image2=$req->img2;
    $imagename2=time(). '.' .$image2->getClientOriginalExtension();
    $req->img2->move('image',$imagename2);
    $data->picture_2=$imagename2;
$image3=$req->img3;
    $imagename3=time(). '.' .$image3->getClientOriginalExtension();
    $req->img3->move('image',$imagename3);
    $data->picture_3=$imagename3;
$image4=$req->img4;
    $imagename4=time(). '.' .$image4->getClientOriginalExtension();
    $req->img4->move('image',$imagename4);
    $data->picture_4=$imagename4;
$data->save();
return redirect('/Experiment');
}

// field day methodology

function addfieldday (Request $req){
    $data=new  Field_day;
    $data->crop_name=$req->crop_name;
    $data->variety_name=$req->variety_name;
    $data->date=$req->date;
    $data->field_day_no=$req->field_day_no;
    $data->area_name=$req->area_name;
    $data->save();
    return redirect('/fieldday');
}
function fieldday_get(){
    $data=Field_day::all();
    
    return view('fieldday',compact('data'));
}
 

   
function deletfiled($id){
    $data=Field_day::find($id);
    $data->delete();
    return redirect()->back();

}
function updfieldday(Request $req,$id){
    $data=Field_day::find($id);
$data->crop_name=$req->crop_name;
$data->variety_name=$req->variety_name;
$data->date=$req->date;
$data->field_day_no=$req->field_day_no;
$data->area_name=$req->area_name;
$data->save();
return redirect('/fieldday');
}

function updfielddayget($id)
{
  $data=Field_day::find($id);
  return view('updatefieldday',['data'=>$data]);
}


//  block demonstartion process
function add_demonstartion (Request $req){
    $data=new  Block_demonstration ;
    $data->crop_name=$req->crop_name;
    $data->variety_name=$req->variety_name;
    $data->demonstration_no=$req->demonstration_no;
    $data->area_name=$req->area_name;
    $data->save();
    return redirect('/BlockDemonstration');
}
function getdata(){
    $data=Block_demonstration::all();
    return view('block_demonstrations',compact('data'));
}
function deletdemo($id){
    $data=Block_demonstration::find($id);
    $data->delete();
    return redirect()->back();

}
function updateblockget($id)
{
  $data=Block_demonstration::find($id);
  return view('updateblockdemo',['data'=>$data]);
}
function updateblock(Request $req,$id){
    $data=Block_demonstration::find($id);
$data->crop_name=$req->crop_name;
$data->variety_name=$req->variety_name;
$data->demonstration_no=$req->demonstration_no;
$data->area_name=$req->area_name;
$data->save();
return redirect('/BlockDemonstration');
}


// farmar traing process
function add_FarmerTraining (Request $req){
    $data=new  Farmer_trainning ;
    $data->title=$req->title;
    $data->farmer_trainning_no=$req->farmer_trainning_no;
    $data->participant_no=$req->participant_no;
    $data->training_date=$req->training_date;
    $data->location_lattitude=$req->location_lattitude;
    $data->location_longitude=$req->location_longitude;
    $data->save();
    return redirect('/FarmerTraining');
}
function getFarmerTraining(){
    $data=Farmer_trainning::all();
    return view('FarmerTraining',compact('data'));
}
function deletFarmerTraining($id){
    $data=Farmer_trainning::find($id);
    $data->delete();
    return redirect()->back();

}
function updateFarmerTrainingget($id)
{
  $data=Farmer_trainning::find($id);
  return view('updatefarmartraining',['data'=>$data]);
}

function updatefarmertraing(Request $req,$id){
    $data=Farmer_trainning::find($id);
    $data->title=$req->title;
    $data->farmer_trainning_no=$req->farmer_trainning_no;
    $data->participant_no=$req->participant_no;
    $data->training_date=$req->training_date;
    $data->location_lattitude=$req->location_lattitude;
    $data->location_longitude=$req->location_longitude;
    $data->save();
    return redirect('/FarmerTraining');

}
}
