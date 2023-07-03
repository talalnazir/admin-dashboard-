@extends('backend.layouts.master')
   
@section('content')

<div  class="row">
    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    
    

                                        
										
										
							
									
								
				
							
				


                   <!-- Modal -->
                   <div class="" id="" tabindex="-1" >
                <div class="modal-dialog modal-xl card">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title p-2"> filed day </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        
                        <form action="{{url('/updfieldday',$data->id)}}" method="POST" enctype= "multipart/form-data">  
                            @csrf
                        <div class="row g-3 p-2">
                       
                                                            <div class="row g-3">
                                                            
                                                            <div class="col-12 col-lg-4">
                                                                    <label for="InputCountry"
                                                                        class="form-label">Crop Name</label>
                                                                    <select class="form-select" id="InputCountry"
                                                                        aria-label="Default select example" name="crop_name" value="{{$data-> crop_name}} ">
                                                                        <option value="Rice">Rice</option>
                                                                        <option value="jute">jute</option>
                                                                        <option value="wheat">wheat</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="InputCountry"
                                                                        class="form-label">Verity </label>
                                                                    <select class="form-select" id="InputCountry"
                                                                        aria-label="Default select example" name="variety_name" value="{{$data->variety_name}} ">
                                                                        <option value="hyprosola">hyprosola</option>
                                                                        <option value="binasola">binasola</option>
                                                                        <option value="binamashur">binamashur</option>
                                                                    </select>
                                                                </div>
                                                               
                                                              
                                                        
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="InputEmail" class="form-label">Date</label>
                                                                    <input type="text" class="form-control"
                                                                        id="InputEmail"
                                                                        placeholder="experimental material" name="date" value="{{$data->date}} ">
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="InputEmail" class="form-label">Field Day No</label>
                                                                    <input type="text" class="form-control"
                                                                        id="InputEmail"
                                                                        placeholder="treatment" name="field_day_no" value="{{$data-> field_day_no}} ">
                                                                </div>

                                                              
                                                               
                                                               
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="Village"
                                                                        class="form-label">Area Name</label>
                                                                        <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="location_lattitude" name="area_name" value="{{$data->area_name}} ">
                                                                </div>
                                                               
                                                           
                                                               
			
                            <div class="modal-footer">
							
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary m-2" >submit</button>
                                
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>







</div>
</div>
@endsection