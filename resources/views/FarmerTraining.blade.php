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
										
				 						
										<th> title</th>
										<th> farmer trainning_no</th>
                                        <th> participant no</th>
				 						
										<th> training date</th>
										<th> lattitude </th>
										<th>longitude </th>
                                        <th>action </th>
                                        <th>action</th>
				 					</tr>
								</thead>
                                <tbody>
                                @foreach($data as $data)
                                <tr>
                                <td>{{$data->id}}  </td>
<td>{{$data->title}}  </td>

<td>{{$data->farmer_trainning_no}}  </td>


<td>{{$data->participant_no}}  </td>
<td>{{$data->training_date}}  </td>
<td>{{$data->location_lattitude}}  </td>
<td>{{$data->location_longitude }}  </td>

<td> <button type="submit" class="btn btn-primary"> <a class="text-decoration-none text-white" href="{{url('/deletefarmer',$data->id)}}"> delete </a> </button> </td>
<td> <button type="submit" class="btn btn-primary"> <a class="text-decoration-none text-white" href="{{url('/updatefarmertraing',$data->id)}}"> update </a> </button></td>
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