<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="{{asset('back_end/css/style.css')}}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row row_header_admin">
            <div class="col-2 alert alert-primary nav-admin">
                <div class="alert alert-success clear-bor" role="alert">
                    Admin web laravel
                </div>
                <hr>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
                           aria-expanded="true" aria-controls="collapseUtilities">
                            <span>Khóa Học</span>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Caret_Down_SM"> <path id="Vector" d="M15 11L12 14L9 11" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                        </a>
                        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
                             data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header px-4 pt-2 pb-2">Quản lý Khóa Học :</h6>
                                <div class="row">
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('listProduct') }}">Lists</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('addProduct') }}">Add</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('payList') }}">Đơn thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
                           aria-expanded="true" aria-controls="collapseUtilities">
                            <span>Danh Mục</span>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Caret_Down_SM"> <path id="Vector" d="M15 11L12 14L9 11" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                        </a>
                        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                             data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header px-4 pt-2 pb-2">Quản lý Danh Mục :</h6>
                                <div class="row">
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('addCategories') }}">Add</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('listCategories') }}">List</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseUtilities3"
                           aria-expanded="true" aria-controls="collapseUtilities">
                            <span>Lớp</span>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Caret_Down_SM"> <path id="Vector" d="M15 11L12 14L9 11" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                        </a>
                        <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities"
                             data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header px-4 pt-2 pb-2">Quản lý lớp học :</h6>
                                <div class="row">
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('classCourses.index') }}">Danh sách</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('classCourses.create') }}">Thêm mới</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseUtilities4"
                           aria-expanded="true" aria-controls="collapseUtilities">
                            <span>Giảng viên</span>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Caret_Down_SM"> <path id="Vector" d="M15 11L12 14L9 11" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                        </a>
                        <div id="collapseUtilities4" class="collapse" aria-labelledby="headingUtilities"
                             data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header px-4 pt-2 pb-2">Quản lý giảng viên :</h6>
                                <div class="row">
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('Lectures.index') }}">Danh Sách</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('Lectures.create') }}">Thêm Mới</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseUtilities5"
                           aria-expanded="true" aria-controls="collapseUtilities">
                            <span>Khuyến mại</span>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Caret_Down_SM"> <path id="Vector" d="M15 11L12 14L9 11" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                        </a>
                        <div id="collapseUtilities5" class="collapse" aria-labelledby="headingUtilities"
                             data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header px-4 pt-2 pb-2">Quản lý khuyến mại :</h6>
                                <div class="row">
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('promotion.index') }}">Danh sách khuyến mại</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('promotion.create') }}">Thêm mới khuyến mãi</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('promotion.statistical') }}">Thống kê khuyến mãi</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseUtilities6"
                           aria-expanded="true" aria-controls="collapseUtilities">
                            <span>Configs</span>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Caret_Down_SM"> <path id="Vector" d="M15 11L12 14L9 11" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                        </a>
                        <div id="collapseUtilities6" class="collapse" aria-labelledby="headingUtilities"
                             data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header px-4 pt-2 pb-2">Quản lý cấu hình :</h6>
                                <div class="row">
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('config.index') }}">List Config</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('config.create') }}">Thêm Config</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('promotion.statistical') }}">Thống kê khuyến mãi</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseUtilities7"
                           aria-expanded="true" aria-controls="collapseUtilities">
                            <span>Menu</span>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Caret_Down_SM"> <path id="Vector" d="M15 11L12 14L9 11" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                        </a>
                        <div id="collapseUtilities7" class="collapse" aria-labelledby="headingUtilities"
                             data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header px-4 pt-2 pb-2">Quản lý Menu :</h6>
                                <div class="row">
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('menu.index') }}">Danh Sách</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('menu.create') }}">Thêm Mới</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseUtilities8"
                           aria-expanded="true" aria-controls="collapseUtilities">
                            <span>Banner Marketing</span>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Caret_Down_SM"> <path id="Vector" d="M15 11L12 14L9 11" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                        </a>
                        <div id="collapseUtilities8" class="collapse" aria-labelledby="headingUtilities"
                             data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header px-4 pt-2 pb-2">Quản lý Banner Marketing :</h6>
                                <div class="row">
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('banner.index') }}">Danh Sách</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('banner.create') }}">Thêm Mới</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseUtilities9"
                           aria-expanded="true" aria-controls="collapseUtilities">
                            <span>Đánh giá</span>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Caret_Down_SM"> <path id="Vector" d="M15 11L12 14L9 11" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                        </a>
                        <div id="collapseUtilities9" class="collapse" aria-labelledby="headingUtilities"
                             data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header px-4 pt-2 pb-2">Quản lý Đánh giá :</h6>
                                <div class="row">
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('rate.index') }}">Danh Sách</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('rate.create') }}">Thêm Mới</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" data-target="#collapseUtilities10"
                           aria-expanded="true" aria-controls="collapseUtilities">
                            <span>Hóa Đơn</span>
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Caret_Down_SM"> <path id="Vector" d="M15 11L12 14L9 11" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                        </a>
                        <div id="collapseUtilities10" class="collapse" aria-labelledby="headingUtilities"
                             data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header px-4 pt-2 pb-2">Quản lý Hóa Đơn :</h6>
                                <div class="row">
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('bill.index') }}">Danh Sách</a>
                                    <a class="px-5 pb-2 text-danger text-decoration-none" href="{{ route('bill.create') }}">Thêm Mới</a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-10 clear-padding right_clear">
                <div class="alert alert-success clear-bor" role="alert">
                    Admin web laravel
                </div>
                <div class="container row">
                    <div class="row_col shadow-lg p-3 bg-body-tertiary rounded main_list">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    <script src="{{asset('back_end/js/main.js')}}">

    </script>
</body>
</html>
