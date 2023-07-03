@extends('backend.layouts.master')
   
@section('content')

<div  class="row">
    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    
							
                                
                              

                                        
										
										
							
									
								
				


                   <!-- Modal -->
            <div class="card" id="" tabindex="-1" aria-hidden="">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title "> block demoenstration </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="{{url('/updateblock',$data->id)}}" method="POST" enctype= "multipart/form-data">  
                            @csrf
                        <div class="row g-3 p-2">
                       
                                                            <div class="row g-3 p-2">

                                                            <div class="col-12 col-lg-4">
                                                                    <label for="InputCountry"
                                                                        class="form-label">crop_name</label>
                                                                    <select class="form-select" id="InputCountry"
                                                                        aria-label="Default select example" name="crop_name" value="{{$data-> crop_name}}">
                                                                        <option value="Rice">Rice</option>
                                                                        <option value="jute">jute</option>
                                                                        <option value="wheat">wheat</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="InputCountry"
                                                                        class="form-label">verity </label>
                                                                    <select class="form-select" id="InputCountry"
                                                                        aria-label="Default select example" name="variety_name" value="{{$data->variety_name}}" >
                                                                        <option value="hyprosola">hyprosola</option>
                                                                        <option value="binasola">binasola</option>
                                                                        <option value="binamashur">binamashur</option>
                                                                    </select>
                                                                </div>
                                                              
                                                               
                                                               
                                                              
                                                        
                                                            
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="InputEmail" class="form-label">demonstration no</label>
                                                                    <input type="text" class="form-control"
                                                                        id="InputEmail"
                                                                        placeholder="demonstration_no" name="demonstration_no" value="{{$data->demonstration_no}}">
                                                                </div>

                                                              
                                                               
                                                               
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="Village"
                                                                        class="form-label">area name</label>
                                                                        <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="location_lattitude" name="area_name" value="{{$data->area_name}}">
                                                                </div>
                                                               
                                                           
                                                               
			
                            <div class="modal-footer">
							
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary m-2">submit</button>
                                
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>







</div>
</div>
@endsection