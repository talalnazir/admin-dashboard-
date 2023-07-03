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

<div  class="row">
    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    
    <div class="card">
					<div class="card-body">
				 		<div class="able-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead class="table-success">
				 					<tr>
										<th>S/L</th>
										
				 						
										<th> Title</th>
										<th> Objectives</th>
										<th> Lattitude</th>
										<th> Longitude</th>
                                        <th> Record Date</th>
										<th> Investigator</th>
				 						<th> Starting Date</th>
										<th>  Output</th>
                                        <th> View</th>
                                        <!-- <th> Edit</th>
                                        <th> Delete</th> -->
										
				 					</tr>
								</thead>

                                <tbody>
                                @foreach($data as $data)
                                <tr>
                                <td>{{$data->id}}  </td>
<td>{{$data-> title}}  </td>

<td>{{$data->objectives}}  </td>



<td>{{$data->location_lattitude}}  </td>
<td>{{$data->location_longitude}}  </td>
<td>{{$data->recorded_date}}  </td>
<td>{{$data->investigator_name}}  </td>
<td>{{$data->starting_date}}  </td>
<td>{{$data->expected_output}}  </td>

<td> <button type="submit" class="btn btn-sm btn-primary"> <a class="text-decoration-none text-white" href="{{url('viewlist',$data->id)}}"> view </a> </button> </td>
<!-- <td> <button type="submit" class="btn btn-sm btn-warning"> <a class="text-decoration-none text-white" href="{{url('/updateexperiment',$data->id)}}"> edit </a> </button></td>
<td> <button type="submit" class="btn btn-sm btn-danger"> <a class="text-decoration-none text-white" href="{{url('/deleteexp',$data->id)}}"> delete </a> </button> </td> -->
</tr>
@endforeach
												
                                <tbody>
