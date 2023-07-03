@extends('backend.layouts.master')
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
@section('content')
<div class="modal-dialog modal-xl card">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title p-2"> Expermient Registration </h5>
                            <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="/Experiment" method="POST" enctype= "multipart/form-data">  
                            @csrf
                        <div class="row g-3 p-2">
                       
                                                            <div class="row g-3 p-2">
                                                            
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="MotherName" class="form-label">Title
                                                                        </label>
                                                                    <input type="text" class="form-control"
                                                                        id="MotherName" placeholder="title" name="int_title">
                                                                </div>
                                                                
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="PhoneNumber" class="form-label">0bjectives
                                                                        </label>
                                                                    <input type="text" class="form-control"
                                                                        id="PhoneNumber" placeholder="objectivs" name="int_obj">
                                                                </div>
                                                               
                                                               
                                                              
                                                        <div class="row mt-2"> 
                                                                <div class="col-12 col-lg-12">
                                                                    <label for="InputEmail" class="form-label">Experimental Material</label>
                                                                    <input type="text" class="form-control"
                                                                        id="InputEmail"
                                                                        placeholder="experimental material" name="experimental_material">
                                                                </div>
                                                                </div> 
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="InputEmail" class="form-label">Treatment</label>
                                                                    <input type="text" class="form-control"
                                                                        id=""
                                                                        placeholder="treatment" name="treatment"  >
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
                                                                        id="FatherName" placeholder="location_lattitude" name="location_lattitude">
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="Village"
                                                                        class="form-label">Location Longitude</label>
                                                                        <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="location longitude" name="location_longitude">
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="Village"
                                                                        class="form-label">Recorded Date</label>
                                                                        <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="recorded_date" name="recorded_date">
                                                                </div>
                                                     
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="House" class="form-label">Investigator Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="investigator_name" name="investigator_name">
                                                                </div>
                                                           
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="House" class="form-label">Starting Date</label>
                                                                    <input type="date" class="form-control"
                                                                        id="FatherName" placeholder="starting_date" name="starting_date">
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="House" class="form-label">Completion Date</label>
                                                                    <input type="date" class="form-control"
                                                                        id="FatherName" placeholder="completion_date" name="completion_date">
</div>
                                                               	<div class="row mt-2">
																<div class="col-12 col-lg-12">
                                                                    <label for="Description"
                                                                        class="form-label">Expected Output</label>
                                                                    <textarea class="form-control" id="Description" name="int_discription"
                                                                        rows="3" placeholder="Expected Output " rows="4" cols="50"></textarea>
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
                                                                    <label for="nid" class="form-label">Picture 1</label><br>
																	    <div class="user-img">
                                                                        <input type="file" class="form-control text-white" name="img1">
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
                            <div class="modal-footer mt-2">
							
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary m-2">submit</button>
                                
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>







</div>
@endsection