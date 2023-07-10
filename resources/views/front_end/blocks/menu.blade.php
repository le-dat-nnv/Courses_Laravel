<div class="collapse navbar-collapse row justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav me-0 mb-2 mb-lg-0 justify-content-center col-8 mr-0">
        @foreach($list_menu as $item)
        <li class="nav-item me-4">
            <a class="nav-link text-white" href="#">{{ $item->name }}</a>
        </li>
        @endforeach
    </ul>
</div>
