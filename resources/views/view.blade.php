@extends('backend.layouts.master')
   
@section('content')
<style>
table, th, td {
  /* border: 1px solid black ; 
  border-collapse: collapse;  */
}
th, td {
  padding: 17px;
  text-align: left;
}
img {
  /* border-radius: 50%; */
}
</style>
</head>
<body class="card" >



<h2 class="text-center">{{$data2->title}}</h2>

<table style="width:100%"  class="table table-striped table-bordered">
  <tr>
    <th>objectives:</th>
    <td> {{$data2->objectives}} </td>
  </tr>
  <tr>
    <th>Lattitude:</th>
    <td> {{$data2->location_lattitude}} </td>
  </tr>
  <tr>
    <th>Longitude:</th>
    <td> {{$data2->location_longitude}}</td>
    
  </tr>
  <tr>
    <th>Investigator:</th>
    <td>{{$data2->investigator_name}}</td>
  </tr>
  <tr>
    <th>Starting Date:</th>
    <td> {{$data2->starting_date}} </td>
  </tr>
  <tr>
    <th>Treatment:</th>
    <td> {{$data2->treatment}} </td>
  </tr>
  <tr>
    <th>Experimental material:</th>
    <td> {{$data2->experimental_material}} </td>
  </tr>
  <tr>
    <th>Output:</th>
    <td>  {{$data2->expected_output}}</td>
  </tr>
</table>

<div class="container  mt-4  ">
  <div class="row">
    <div class="col-3  ">
    <img height="200px" width="200px" src= "/image/{{$data2->picture_1}}"/> 
</div>
    <div class="col-3 ">    <img height="200px" width="200px" src= "/image/{{$data2->picture_2}}"/> </div>
  
    <div class="col-3 ">    <img height="200px" width="200px" src= "/image/{{$data2->picture_3}}"/> </div>
    <div class="col-3 ">    <img height="200px" width="200px" src= "/image/{{$data2->picture_4}}"/> </div>
  </div>
</div>

@endsection