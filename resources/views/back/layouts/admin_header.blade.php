
@section('css.import')
  <style>



  </style>
@stop


        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
           
              
          

              <div class="nav toggle hidden-xs hidden-sm">
                  <h3>Experience Claims Management</h3>
              </div>

              <div class="nav toggle hidden-md hidden-lg hidden-xl">
                  <h3>EMC</h3>
              </div>



              
              <ul class="nav navbar-nav navbar-right">


              
               <li class="hidden-md hidden-lg hidden-xl"><a href="{{ url('/logout') }}"><i class="fa fa-sign-out "></i> Log Out</a></li>

                <li class="hidden-xs hidden-sm">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                    <img src="{{ asset('upload/avatars/' .  auth::user()->avatar) }}" alt=""> {{ ucwords(auth::user()->claimName) }}
                   
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li>
                      <a href="{{ url('help') }}">
                        <span>Help</span> 
                      </a>
                    </li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>


              </ul>

            </nav>
          </div>
        </div>