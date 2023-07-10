<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('front_end/css/home.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js" integrity="sha512-0N/5ZOjfsh3niel+5dRD40HQkFOWaxoVzqMVAHnmAO2DC3nY/TFB7OYTaPRAFJ571IRS/XRsXGb2XyiFLFeu1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
    <body>
        <div class="container-fuild">
            <section class="nav_web">
                <nav class="navbar navbar-expand-lg mt-4">
                    <div class="container-fluid">
                        <a class="navbar-brand mx-5" href="#">
                            <img style="width: 145px;height: auto;" src="{{asset('storage/'.config('tb_config.img_logo'))}}" alt="Image Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        @include('front_end.blocks.menu')

                        <div class="d-flex col-2 justify-content-end mx-5">
                            <div class="group_phone d-flex align-items-center">
                                {!! config('tb_config.svg_phone') !!}

                                <div class="form_group mx-2">
                                    <p class="mb-0 text-white">{{ config('tb_config.phone_home') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </section>
            <section class="" id="slide_show_banner">
                @include('front_end.blocks.banner')
            </section>

            <section id="intro_source">
                <div class="container p-5">
                    <div class="row">
                        <div class="col-8 d-flex align-items-center">
                            <div class="icon_one d-flex flex-column align-items-center">
                                <h2>01</h2>
                                <span>
                                    <svg fill="#000000" width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M5.293,16.707a1,1,0,0,1,1.414-1.414L11,19.586V2a1,1,0,0,1,2,0V19.586l4.293-4.293a1,1,0,0,1,1.414,1.414l-6,6a1,1,0,0,1-1.414,0Z"></path></g>
                                    </svg>
                                </span>
                            </div>
                            <div class="title_heading p-5">
                                <h2>The Whole Purpose Of Education Is To Turn Mirrors Into Windows</h2>
                                <p class="mt-4">Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit.
                                    Nulla viverra pharetra sem, eget pulvinar neque pharetra ac.</p>
                                <button type="button" class="btn btn-danger">Read more</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="https://p.w3layouts.com/demos_new/09-02-2017/edifying-demo_Free/162609851/web/images/2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section id="resister_source">
                <div class="back_img_resister_source">
                    <div class="container p-5">
                        <div class="row d-flex align-items-center">
                            <div class="col-4 bg-light shadow-sm bg-body rounded">
                                <h2 class="text-center mt-3">Register Source</h2>
                                <form class="p-5 pt-2 px-3">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="First Name" >
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Last Name" >
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" >
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleCheck1" placeholder="Subjects">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </form>
                            </div>
                            <div class="col-8 px-5">
                                <h2 class="text-white px-5"><span class="register_right text-primary">Register </span>now</h2>
                                <p class="text-white px-5">Aliquam sit amet sapien felis. Proin vel dolor sed risus maximus gravida. Ut suscipit orci sem, eget lobortis sem dictum eu. Etiam congue ex sed volutpat fringilla.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="category_source" class=" shadow-lg bg-body rounded">
                <div class="container">
                    <h2 class="text-center mb-5 pt-5">Danh mục nổi bật</h2>
                    <div class="row d-flex justify-content-center flex-nowrap categories_source_col">
                        <div class="card col-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 justify-content-center pb-5">
                        <button type="submit" class="btn btn-danger col-1 text-center">Read More</button>
                    </div>

                </div>
            </section>

            <section id="product_source" class=" shadow-lg bg-body rounded">
                <div class="container">
                    <h2 class="text-center mb-5 pt-5 text-center mb-5 pt-5">Khóa học được sales</h2>
                    <div class="row d-flex justify-content-center flex-nowrap categories_source_col">
                        <div class="card col-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 justify-content-center pb-5">
                        <button type="submit" class="btn btn-danger col-1 text-center">Read More</button>
                    </div>
                </div>
            </section>

            <section id="customer_reviews">
                <div class="container">
                    <div class="row">
                        <h2 class="text-center mb-5 pt-5 text-center mb-5 pt-5">Clients Review</h2>
                    </div>
                </div>
            </section>

            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-3">

                        </div>
                        <div class="col-3">

                        </div>
                        <div class="col-3">

                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
