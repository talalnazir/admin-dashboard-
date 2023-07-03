     <!--start sidebar-->
     <aside class="sidebar-wrapper">
         <div class="sidebar-header">
             <div class="logo-icon">
                 <img src="{{asset('backend/assets/images/logo.png')}}" class="logo-img" alt="">
             </div>
             <div class="logo-name flex-grow-1">
                 <h5 class="mb-0">BINA</h5>
             </div>
             <div class="sidebar-close ">
                 <span class="material-symbols-outlined">close</span>
             </div>
         </div>
         <div class="sidebar-nav" data-simplebar="true">

             <!--navigation-->
             <ul class="metismenu" id="menu">
                 <li>
                     <a href="{{url('dashboard')}}">
                         <div class="parent-icon"><span class="material-symbols-outlined">home</span>
                         </div>
                         <div class="menu-title">Dashboard</div>
                     </a>
                 </li>

                 <li>
                     <a href="javascript:;" class="has-arrow">
                         <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                         </div>
                         <div class="menu-title">Experiment</div>
                     </a>

                     <ul>

                         <li> <a href="{{url('/AddExperiment')}}"><span
                                     class="material-symbols-outlined">arrow_right</span>Experiment Add</a>
                         </li>
                      
                         <li> <a href="{{url('/Experiment')}}"><span
                                     class="material-symbols-outlined">arrow_right</span>Experiment List</a>
                         </li>
                         
                        
                     </ul>
                 </li>

                 <li>
                     <a href="javascript:;" class="has-arrow">
                         <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                         </div>
                         <div class="menu-title">Field Day</div>
                     </a>

                     <ul>

                         <li> <a href="{{url('/addfieldday')}}"><span
                                     class="material-symbols-outlined">arrow_right</span>Field Day Add</a>
                         </li>
                      
                         <li> <a href="{{url('/fieldday')}}"><span
                                     class="material-symbols-outlined">arrow_right</span>Field Day List</a>
                         </li>
                         
                        
                     </ul>
                 </li>

                 <li>
                     <a href="javascript:;" class="has-arrow">
                         <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                         </div>
                         <div class="menu-title">Farmer's Training</div>
                     </a>

                     <ul>

                         <li> <a href="{{url('/Addfarmar')}}"><span
                                     class="material-symbols-outlined">arrow_right</span>Farmer's Training Add</a>
                         </li>
                      
                         <li> <a href="{{url('/FarmerTraining')}}"><span
                                     class="material-symbols-outlined">arrow_right</span>Farmer's Training List</a>
                         </li>
                         
                        
                     </ul>
                 </li>

                 <li>
                     <a href="javascript:;" class="has-arrow">
                         <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                         </div>
                         <div class="menu-title">Block Demonstration</div>
                     </a>

                     <ul>

                         <li> <a href="{{url('/Addblock')}}"><span
                                     class="material-symbols-outlined">arrow_right</span>Block Demonstration Add</a>
                         </li>
                      
                         <li> <a href="{{url('/BlockDemonstration')}}"><span
                                     class="material-symbols-outlined">arrow_right</span>Block Demonstration List</a>
                         </li>
                         
                        
                     </ul>
                 </li>

                 
                 
             </ul>
             <!--end navigation-->


         </div>
         <div class="sidebar-bottom dropdown dropup-center dropup">
             <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100" data-bs-toggle="dropdown">
                 <div class="user-img">
                     <img src="{{asset('backend/assets/images/avatars/01.png') }}" alt="">
                 </div>
                 <div class="user-info">
                     <h5 class="mb-0 user-name">Abdul Hadit</h5>
                     <p class="mb-0 user-designation">Software Engineer</p>
                 </div>
             </div>
             <ul class="dropdown-menu dropdown-menu-end">
                 <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                             account_circle
                         </span><span>Profile</span></a>
                 </li>
                 <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                             tune
                         </span><span>Settings</span></a>
                 </li>
                 <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                             dashboard
                         </span><span>Dashboard</span></a>
                 </li>
                 <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                             account_balance
                         </span><span>Earnings</span></a>
                 </li>
                 <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                             cloud_download
                         </span><span>Downloads</span></a>
                 </li>
                 <li>
                     <div class="dropdown-divider mb-0"></div>
                 </li>
                 <li>
                    <form method="post" action="{{route('logout')}}" >
                        @csrf
                    <!-- <a class="dropdown-item" href=""><span class="material-symbols-outlined me-2">
                             logout
                         </span><span>Logout</span></a> -->
                         <button class="material-symbols-outlined me-2"> logout </button>
                         </form>
                 </li>
             </ul>
         </div>
     </aside>
     <!--end sidebar-->