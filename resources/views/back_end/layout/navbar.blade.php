    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Manager
        </div>

        @php
            $i = 0;
        @endphp
        @foreach($menuList as $key=>$listMenuAdmin)
            @php
                $i++;
            @endphp
        @if($listMenuAdmin->parent_id == 0)
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="{{'#collapseUtilities_'.$i}}"
               aria-expanded="true" aria-controls="collapseUtilities">
                @if(empty($listMenuAdmin->icon_menu))
                    <i class="fa fa-bars" aria-hidden="true"></i>
                @else
                    {!! $listMenuAdmin->icon_menu !!}
                @endif
                <span class="text-capitalize">{{ $listMenuAdmin->name }}</span>
            </a>
            <div id="{{'collapseUtilities_'.$i}}" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">{{ $listMenuAdmin->name }}:</h6>
                    @foreach($menuList as $submenu)
                        @if($submenu->parent_id == $listMenuAdmin->id)
                            <a class="collapse-item" href="{{route($submenu->slug)}}">{{$submenu->name}}</a>
                        @endif
                    @endforeach
                    @if($listMenuAdmin->id == 1)
                        <h6 class="collapse-header">Danh mục menu:</h6>
                        <a class="collapse-item" href="{{route('categoriesMenu.create')}}">Add Category Menu</a>
                        <a class="collapse-item" href="{{route('categoriesMenu.index')}}">List Category Menu</a>
                    @endif
                </div>
            </div>
        </li>
        @endif
        @endforeach
    </ul>


