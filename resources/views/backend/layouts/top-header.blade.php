    <!--start header-->
    <header class="top-header">
      <nav class="navbar navbar-expand justify-content-between">
          <div class="btn-toggle-menu">
            <span class="material-symbols-outlined">menu</span>
          </div>
         
            <ul class="navbar-nav top-right-menu gap-2">
              <li class="nav-item d-lg-none d-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 <a class="nav-link" href="javascript:;"><span class="material-symbols-outlined">
                  search
                  </span></a>
              </li>
              <li class="nav-item dark-mode">
                <a class="nav-link dark-mode-icon" href="javascript:;"><span class="material-symbols-outlined">dark_mode</span></a>
              </li>
              
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                  <div class="position-relative">
                    
                    <span class="material-symbols-outlined">
                    settings
                      </span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end mt-lg-2">
                <form method="post" action="{{route('logout')}}" >
                  @csrf
                  
                    <div class="msg-header">
                      <button style="border: none; width: 100%; text-align: left; background: none;" type="submit" class="msg-header-title">Log Out</button>
                    </div>
                  
                </form> 
                </div>
              </li>
             
            </ul>
       </nav>
     </header>
     <!--end header-->