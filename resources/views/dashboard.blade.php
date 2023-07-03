@extends('backend.layouts.master')

@section('content')

   <!--start main content-->
   

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-4 row-cols-xxl-4">
  <div class="col">
    <div class="card radius-10 border-0 border-start border-primary border-4">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="">
            <p class="mb-1">Total Experiment</p>
           
            <h4 class="mb-0 text-primary">{{$data1}}</h4>
          
          </div>
          
        </div>
        
      </div>
    </div>
   </div>
   <div class="col">
    <div class="card radius-10 border-0 border-start border-success border-4">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="">
            <p class="mb-1">Total Field Day</p>
            <h4 class="mb-0 text-success">{{$data2}}</h4>
          </div>
          
        </div>
        
      </div>
    </div>
   </div>
   <div class="col">
    <div class="card radius-10 border-0 border-start border-danger border-4">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="">
            <p class="mb-1">Total Farmer's Tranning</p>
            <h4 class="mb-0 text-danger">{{$data3}}</h4>
          </div>
          
        </div>
        
      </div>
    </div>
   </div>
   <div class="col">
    <div class="card radius-10 border-0 border-start border-warning border-4">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="">
            <p class="mb-1">Total Block Demonstration</p>
            <h4 class="mb-0 text-warning">{{$data4}}</h4>
          </div>
          
        </div>
        
      </div>
    </div>
   </div>
</div><!--end row-->


 

  

<!--end main content-->

@endsection