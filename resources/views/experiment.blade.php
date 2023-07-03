@extends('backend.layouts.master')
   
@section('content')

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
                                        <th> Edit</th>
                                        <th> Delete</th>
										
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

<td> <button type="submit" class="btn btn-sm btn-primary"> <a class="text-decoration-none text-white" href="{{url('view',$data->id)}}"> view </a> </button> </td>
<td> <button type="submit" class="btn btn-sm btn-warning"> <a class="text-decoration-none text-white" href="{{url('/updateexperiment',$data->id)}}"> edit </a> </button></td>
<td> <button type="submit" class="btn btn-sm btn-danger"> <a class="text-decoration-none text-white" href="{{url('/deleteexp',$data->id)}}"> delete </a> </button> </td>
</tr>
@endforeach
												
                                <tbody>

                                        
										
										
							
									
								
				
							</table>
						</div>
					</div>
				</div>


                   <!-- Modal -->
            <div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
               
</div>
@endsection