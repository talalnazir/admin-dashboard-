

<div class="row">
		<div class="col-12 " class="bg-image" 
     style="background-image: url('{{asset('backend/assets/images/background_img.png')}}');
            height: 25vh">  
			<div class="logo-icon mt-4">
                 <img class="rounded mx-auto d-block" src="{{asset('backend/assets/images/logo.png')}}" class="logo-img" alt="">
				<h5 class="text-white text-center mt-3"><u> Bangladesh Institute of Nuclear Agriculutre (BINA) </u></h5>
             </div>
					
				
</div>
		</div>
	
	</div>
  <style>
    .navbar {
  width: 100%;
 
  overflow: auto;
}
    </style>
<div class="row"> 
	<div class="col-12">
		<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  
  <div class="collapse navbar-collapse  justify-content-end " id="navbarNav">
   
    <ul class="navbar-nav " >
      <li class="nav-item active " >
        <a class="nav-link p-3 mr-3 card border-right font-weight-bold"  href=" {{url('design')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-dark p-3 mr-3 card border-right   font-weight-bold" href="{{url('expermientlist')}}" >Experiment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark p-3 mr-3 card border-right font-weight-bold" href="{{url('FieldDaylist')}}">Field Day</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-dark  p-3 mr-3 card border-right font-weight-bold" href="{{url('FarmerTraininglist')}}">Farmar Training</a>
      </li>
		<li class="nav-item">
        <a class="nav-link  text-dark  p-3 mr-3 card border-right font-weight-bold" href="{{url('BlockDemonstrationlist')}}">Block Demonstration</a>
      </li>
    </ul>
  
  </div>
</nav>
	</div>
  