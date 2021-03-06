{{--    <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

              <div class="navbar nav_title " style="border: 0;">

               <a href="" class="site_title">
                  <i class="fa fa-home"></i> 
                  <span class="text-center"  style="font-size: 18px;">{{ $settingWebsite }}</span>
               </a>

              </div>

              <div class="clearfix"></div>



              <!-- menu profile quick info -->
              <div class="profile">
                <div class="profile_pic">
                  <img src="{{ asset('upload/avatars/' . auth::user()->avatar)  }}" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Welcome,</span><br>
                  <h2 style="font-size: 13px">{{ ucwords(auth::user()->FullName) }}</h2>
                </div>
              </div>

              <br />



              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">

                     <li {{ Request::is('dashboard') ? 'active' : '' }}><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i> Home</a></li>

                     <li><a><i class="fa fa-share-alt-square"></i> Transaction <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        
                        <li {{ Request::is('purchase') ? 'active' : '' }} >
                           <a href="{{ url('purchase/') }}">Purchases
                            @if ($countPurchases )
                              <span class="label label-success pull-right">{{ $countPurchases  }}</span>
                            @endif
                           </a>
                        </li>
                           
                          <li {{ Request::is('sales') ? 'active' : '' }} >
                           <a href="{{ url('sales/') }}">Sales
                            @if ($countSales )
                              <span class="label label-success pull-right">{{ $countSales  }}</span>
                            @endif
                           </a>
                          </li>


                        <li {{ Request::is('stockIn') ? 'active' : '' }} >
                           <a href="{{ url('stockIn/') }}">Stock In
                            @if ($countSales )
                              <span class="label label-success pull-right">{{ $countStockIn  }}</span>
                            @endif
                           </a>
                        </li>
                        <li {{ Request::is('stockOut') ? 'active' : '' }} >
                           <a href="{{ url('stockOut/') }}">Stock Out
                            @if ($countSales )
                              <span class="label label-success pull-right">{{ $countStockOut  }}</span>
                            @endif
                           </a>
                        </li>

                      </ul>
                    </li>




                    <li><a><i class="fa fa-trophy"></i> Master Files <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                        <li {{ Request::is('item') ? 'active' : '' }}>
                          <a href="{{ url('item/') }}">Item Listing
                            @if ($countItem)
                              <span class="label label-success pull-right">{{ $countItem }}</span>
                            @endif
                          </a></li>




                        <li {{ Request::is('customer') ? 'active' : '' }}>
                          <a href="{{ url('customer/') }}">Customer</a></li>
                        <li {{ Request::is('supplier') ? 'active' : '' }}>
                          <a href="{{ url('supplier/') }}">Supplier</a></li>
                      </ul>
                    </li>

                    <li><a><i class="fa fa-tasks"></i> Other Files <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li {{ Request::is('category') ? 'active' : '' }} >
                           <a href="{{ url('category/') }}">Category</a></li>
                        <li {{ Request::is('units') ? 'active' : '' }}>
                           <a href="{{ url('unit/') }}">Units</a></li>
                      </ul>
                    </li>

                     <li><a><i class="fa fa-slideshare"></i> Users Setup<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                        <li {{ Request::is('user') ? 'active' : '' }} >
                           <a href="{{ url('user/') }}">User List</a></li>

                        <li {{ Request::is('role') ? 'active' : '' }} >
                           <a href="{{ url('role/') }}">Role and Permission</a></li>

                      </ul>
                    </li>


                  </ul>
                </div>
                <div class="menu_section">
                  <h3><span >Reports</span></h3>
                  
                  <ul class="nav side-menu">
                   
                    <li><a><i class="fa fa-bar-chart"></i> Reports <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">Report 1</a></li>
                        <li><a href="#">Report 2</a></li>
                        <li><a href="#">Report 3</a></li>
                      </ul>
                    </li>

                    <li {{ Request::is('messages') ? 'active' : '' }} >
                           <a href="{{ url('messages/') }}"><i class="fa fa-wechat"></i>Message</a></li>



                                  
                  </ul>
                </div>

              </div>
              <!-- /sidebar menu -->

              <!-- /menu footer buttons -->
              <div class="sidebar-footer hidden-small"">
              
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
              
                <a href="{{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Logout">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
              </div>
              <!-- /menu footer buttons -->
            </div>
          </div> --}}