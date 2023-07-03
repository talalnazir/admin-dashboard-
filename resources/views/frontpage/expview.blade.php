<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>BINA</title>
</head>
@include('frontpage.header');
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

<table style="width:100%"  class="table table-striped table-bordered container">
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

