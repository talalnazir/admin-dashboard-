@extends('backend.layouts.master')
@section('content')
<div class="modal-dialog modal-xl card">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title p-2"> Farmer Training </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="/FarmerTraining" method="POST" enctype= "multipart/form-data">  
                            @csrf
                        <div class="row g-3 p-2">
                       
                                                            <div class="row g-3 p-2">
                                                            
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="MotherName" class="form-label">Title
                                                                        </label>
                                                                    <input type="text" class="form-control"
                                                                        id="MotherName" placeholder="title" name="title">
                                                                </div>
                                                                
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="PhoneNumber" class="form-label">Farmer Trainning No
                                                                        </label>
                                                                    <input type="text" class="form-control"
                                                                        id="PhoneNumber" placeholder="farmer_trainning_no" name="farmer_trainning_no">
                                                                </div>
                                                               
                                                               
                                                              
                                                        
                                                            
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="InputEmail" class="form-label">Participant No</label>
                                                                    <input type="text" class="form-control"
                                                                        id="InputEmail"
                                                                        placeholder="participant_no" name="participant_no">
                                                                </div>

                                                              
                                                               
                                                               
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="Village"
                                                                        class="form-label">Training Date</label>
                                                                        <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="training_date" name="training_date">
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="Village"
                                                                        class="form-label">Location Lattitude</label>
                                                                        <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="location_lattitude" name="location_lattitude">
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label for="Village"
                                                                        class="form-label">Location Longitude</label>
                                                                        <input type="text" class="form-control"
                                                                        id="FatherName" placeholder="location_longitude" name="location_longitude">
                                                                </div>
                                                               
			
                            <div class="modal-footer">
							
                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary m-2">submit</button>
                                
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>







</div>
@endsection