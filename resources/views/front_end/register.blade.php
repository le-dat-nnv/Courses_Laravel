<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('front_end/css/style.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
    <div class="container max-w-xs mx-auto rounded shadow-lg md:max-w-md my-10 p-6 pb-10 bg-gray-100 mt-5 pb-4" style="width: 768px;">
        <div class="d-flex justify-content-center border-b border-gray-300 mb-3">
            <h1 class="font-bold text-lg text-gray-400 pb-1 mt-4">Register Account</h1>
        </div>
        <div class="pt-6">
            <form class="text-center row d-flex justify-content-center login_form" action="{{ URL::to('register_post') }}" method='POST'>
                @csrf
                <div class="form-group col-10 row mb-3">
                    <input type="text" name="name" class=" form-control border p-2 bg-white w-full h-10 focus:outline-none focus:border-blue-400 rounded text-sm placeholder-gray-600 placeholder-opacity-40 text-gray-600" placeholder="Name" required>
                </div>
                <div class="form-group col-10 mb-3">
                    <input type="email" name="email" class="form-control block border p-2 bg-white w-full h-10 focus:outline-none focus:border-blue-400 rounded text-sm placeholder-gray-600 placeholder-opacity-40 text-gray-600" placeholder="E-mail*" required>
                </div>
                <div class="form-group col-10 mb-3">
                    <input type="password" name="password" class=" form-control block border p-2 bg-white w-full h-10 focus:outline-none focus:border-blue-400 rounded text-sm placeholder-gray-600 placeholder-opacity-40 text-gray-600" placeholder="Password*" required>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-2 text-center">
                        <input type="submit" class="btn btn-danger" value="Register"/>
                    </div>
                    <div class="col-2 text-center">
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
