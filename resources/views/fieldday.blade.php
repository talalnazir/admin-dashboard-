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
										
				 						
										<th> crop name</th>
										<th> variety name</th>
                                        <th> date</th>
				 						<th>field_day_no</th>
										<th> area name </th>
										<th> action </th>
										<th> action </th>
				 					</tr>
								</thead>
                                <tbody>
                                @foreach($data as $data)
                                <tr>
                                <td>{{$data->id}}  </td>
<td>{{$data-> crop_name}}  </td>

<td>{{$data->variety_name}}  </td>

<td> {{$data->date}}  </td>
<td>{{$data->field_day_no}}  </td>
<td>{{$data->area_name}}  </td>


<td> <button type="submit" class="btn btn-primary"> <a class="text-decoration-none text-white" href="{{url('/deletefiled',$data->id)}}"> delete </a> </button> </td>
<td> <button type="submit" class="btn btn-primary"> <a class="text-decoration-none text-white" href="{{url('/updfieldday',$data->id)}}"> update </a> </button></td>
</tr>
@endforeach
												
                                <tbody>
                              

                                        
										
										
							
									
								
				
							</table>
						</div>
					</div>
				</div>


                   <!-- Modal -->
            <div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
                
@endsection
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
