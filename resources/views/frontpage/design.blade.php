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

<div class="row container" style="margin-top: 80px;">
  <div class="col-3 d-flex justify-content-center ">
	<div class="card  " style="width: 180px; height:100px ; border-radius: 25px; border-bottom: 4px #000000  outset; border-left: 4px #000000 outset ; ">
  <div class="card-body">
    <h5 class="card-title pl-3 pt-3"> <a  href="{{url('expermientlist')}}" class="text-dark"> Experiment </a></h5>
    
  </div>
</div>
	</div>
  <div class="col-3 d-flex justify-content-center"><div class="card" style="width: 180px; height:100px ;  border-radius: 25px; border-bottom: 4px #000000  outset; border-left: 4px #000000 outset ; ">
  <div class="card-body">
    <h5 class="card-title pl-4 pt-3" > <a  href="{{url('FieldDaylist')}}" class="text-dark"> Field Day </a> </h5>
    
  </div>
</div></div>
  <div class="col-3 d-flex justify-content-center"><div class="card" style="width: 180px; height:100px ; border-radius: 25px; border-bottom: 4px #000000  outset; border-left: 4px #000000 outset ; ">
  <div class="card-body">
    <h5 class="card-title pl-4 ">
    <a  href="{{url('FarmerTraininglist')}}" class="text-dark">Farmer's tranning </a> 
    </h5>
    
  </div>
</div></div>
	 <div class="col-3 d-flex justify-content-center"><div class="card" style="width:185px; height:100px ;  border-radius: 25px; border-bottom: 4px #000000  outset; border-left: 4px #000000 outset ; ">
  <div class="card-body">
    <h5 class="card-title "> <p class="text-center"> <a  href="{{url('BlockDemonstrationlist')}}" class="text-dark">Block Demonstration </a> </p></h5>
    
  </div>
</div></div>
</div>

<body>
    
</body>
</html>