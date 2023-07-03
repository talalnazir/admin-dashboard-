
@extends('backend.layouts.master')
   
@section('content')


<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

<div  class="row">
    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
   
										
										
							
									
								
				
					


                   <!-- Modal -->
            <div class=" card" id="" tabindex="-1" aria-hidden="">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title p-2"> Expermient Registration </h5>
                            <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="{{url('/updateexperiment',$data->id)}}" method="POST" enctype= "multipart/form-data">  
                            @csrf
                        <div class="row g-3 p-2">
                       
                                                            <div class="row g-3 p-2">
                                                            
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="MotherName" class="form-label">Title
                                                                        </label>
                                                                    <input type="text" class="form-control"
                                                                        id="MotherName" placeholder="title" name="int_title" value="{{$data-> title}}">
                                                                </div>
                                                                
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="PhoneNumber" class="form-label">Objectives
                                                                        </label>
                                                                    <input type="text" class="form-control"
                                                                        id="PhoneNumber" placeholder="objectivs" name="int_obj" value="{{$data->objectives}}" >
                                                                </div>
                                                               
                                                               
                                                              
                                                                <div class="row mt-2"> 
                                                                <div class="col-12 col-lg-12">
                                                                    <label for="InputEmail" class="form-label">Experimental Material</label>
                                                                    <input type="text" class="form-control"
                                                                        id="InputEmail"
                                                                        placeholder="experimental material" name="experimental_material" value="{{$data->experimental_material}}" height="148">
                                                                </div>
                                                                </div> 
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="InputEmail" class="form-label">Treatment</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        placeholder="treatment" name="treatment" value="{{$data->treatment}}"  >
                                                                </div>
                                                               
                                                                <script>
                        ClassicEditor
                                .create( document.querySelector( '#InputEmail' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

                                                              
                                                               
                                                               
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="Village"
                                                                        class="form-label">	Location Lattitude</label>
                                                                        <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="location_lattitude" name="location_lattitude" value="{{$data->location_lattitude}}">
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="Village"
                                                                        class="form-label">Location Longitude</label>
                                                                        <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="location longitude" name="location_longitude" value="{{$data->location_longitude}} ">
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="Village"
                                                                        class="form-label">Recorded Date</label>
                                                                        <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="recorded_date" name="recorded_date" value="{{$data->recorded_date}} ">
                                                                </div>
                                                     
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="House" class="form-label">Investigator Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="investigator_name" name="investigator_name" value="{{$data->investigator_name}} ">
                                                                </div>
                                                           
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="House" class="form-label">Starting Date</label>
                                                                    <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="starting_date" name="starting_date" value="{{$data->starting_date}} ">
                                                                </div>
                                                                <div class="row mt-2">
																<div class="col-12 col-lg-12">
                                                                    <label for="Description"
                                                                        class="form-label">Expected Output</label>
                                                                    <textarea class="form-control" id="Description" name="int_discription"
                                                                         placeholder=" " value="{{$data->expected_output}}" rows="14" cols="50" ></textarea>
                                                                </div>
                                                                </div>
                                                                <script>
                        ClassicEditor
                                .create( document.querySelector( '#Description' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
                                                               

                                                                </div>
      
                                                               

                                                                
         
                                                   <div class="col-12 col-lg-3">
                                                                    <label for="nid" class="form-label"> Old Picture 1</label><br>
																	    <div class="user-img">
                                                                        <img height="100px" width="120px" src= "/image/{{$data->picture_1}}"/>
																		</div><br>
																		
                                                                </div> 
                                                                <div class="col-12 col-lg-3">
                                                                    <label for="nid" class="form-label"> Old Picture 2</label><br>
																	    <div class="user-img">
                                                                        <img height="100px" width="120px" src= "/image/{{$data->picture_2}}"/>
																		</div><br>
																		
                                                                </div> 
                                                                <div class="col-12 col-lg-3">
                                                                    <label for="nid" class="form-label"> Old Picture 3</label><br>
																	    <div class="user-img">
                                                                        <img height="100px" width="120px" src= "/image/{{$data->picture_3}}"/>
																		</div><br>
																		
                                                                </div> 
                                                                <div class="col-12 col-lg-3">
                                                                    <label for="nid" class="form-label"> Old Picture 4</label><br>
																	    <div class="user-img">
                                                                        <img height="100px" width="120px" src= "/image/{{$data->picture_4}}"/>
																		</div><br>

                                                                </div> 
																 <div class="col-12 col-lg-3">
                                                                    <label for="nid" class="form-label">Picture 1</label><br>
																	    <div class="user-img">
                                                                        <input type="file" class="form-control text-white" name="img1" value="{{$data->expected_output}} "  >
																		</div><br>
																		
                                                                </div> 
                                                                <div class="col-12 col-lg-3">
                                                                    <label for="nid" class="form-label">Picture 2</label><br>
																	    <div class="user-img">
                                                                        <input type="file" class="form-control text-white" name="img2">
																		</div><br>
																		
                                                                </div> 
                                                                <div class="col-12 col-lg-3">
                                                                    <label for="nid" class="form-label">Picture 3</label><br>
																	    <div class="user-img">
                                                                        <input type="file" class="form-control text-white" name="img3">
																		</div><br>

                                                                </div> 
                                                                <div class="col-12 col-lg-3">
                                                                    <label for="nid" class="form-label">Picture 4</label><br>
																	    <div class="user-img">
                                                                        <input type="file" class="form-control text-white" name="img4">
																		</div><br>

                                                                </div> 
															
															
																
																
                                                         
                                           </div>

                            

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