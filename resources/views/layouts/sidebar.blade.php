 

  <nav class="sidebar sidebar-bunker">
                <div class="sidebar-header">
             
                   <a href="{{URL::to('/home')}}" class="logo"><img src="{{asset('public/images/logo1.jpg')}}" style="width: 112px;height: 74px;" alt=""></a> 
                </div><!--/.sidebar header-->
                <form class="search sidebar-form" action="{{URL::to('/get/order')}}" method="get" >
                    @csrf
                    <div class="search__inner">
                        <input type="text" name="order_no" class="search__text" placeholder="Search...">
                        <i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>
                    </div>
                </form><!--/.search-->
                <div class="sidebar-body">
                    <nav class="sidebar-nav">
                        <ul class="metismenu">
                            <li class="nav-label">Main Menu</li>
                            <li><a href="{{URL::to('/home')}}"><i class="typcn typcn-home-outline mr-2"></i>Dashboard</a></li>
                             
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-book mr-2"></i>
                                    Febric
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="{{ route('febrics') }}"> Mange Febric </a></li>
                                    <li><a href="{{ route('febric.create') }}">Add Febric </a></li>
                                </ul>
                            </li> 
                           
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-book mr-2"></i>
                                    Supplier
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="{{ route('suppliers') }}"> Mange Supplier </a></li>
                                    <li><a href="{{ route('supplier.create') }}">Add Supplier </a></li>
                                </ul>
                            </li>

                             <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-book mr-2"></i>
                                    Purchase
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="{{ route('purchase.new') }}">Add Purchase </a></li>
                                </ul>
                            </li>


                            <li >
                                <a class="has-arrow material-ripple" href = "#">
                                    <i class="typcn typcn-book mr-2"></i>
                                    Cutting
                                </a>
                                <ul class="nav-second-level">
                                    <li> <a href="{{ route('cutting.new') }}">Add Cutting</a></li>
                                </ul>
                            </li>

                            
                        <ul class="metismenu">
                            <li class="nav-label">ইউজার </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-user-outline mr-2"></i>
                                    ইউজার                                 </a>
                                <ul class="nav-second-level">
                                    <li><a href="{{URL::to('/user')}}"> ইউজার যুক্ত করুন  </a></li>
                                </ul>
                                <ul class="nav-second-level">
                                    <li><a href="{{URL::to('/user/list')}}">ইউজার লিস্ট </a></li>
                                </ul>
                            </li>
                        </ul>
                       
                    </nav>
                </div><!-- sidebar-body -->
            </nav>