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
            <h1 class="font-bold text-lg text-gray-400 pb-1 mt-4">Login system</h1>
        </div>
        <div class="pt-6">
            <form class="text-center row d-flex justify-content-center login_form" action="{{ route('checklogin') }}" method="POST" >
                @csrf
                <div class="form-group col-10 row mb-3">
                    <input type="text" name="name" class="form-control block border p-2" placeholder="Display name*" required>
                </div>
                <div class="form-group col-10 mb-3">
                    <input type="email" name="email" class="form-control block border p-2 " placeholder="E-mail*" required>
                </div>
                <div class="form-group col-10 mb-3">
                    <input type="password" name="password" class="form-control block border p-2" placeholder="Password*" required>
                </div>
                <div class="form-group col-7">
                    <div class="col-12 text-center">
                        <p class="text-gray-600 font-semibold pt-2" style="font-size: 11.5px;">By clicking Agree & Join, you agree to the Website User Agreement, Privacy Policy, and Cookie Policy.</p>
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-2 text-center">
                        <input type="submit" class="btn btn-danger" value="Login"/>
                    </div>
                </div>
            </form>
        </div>
        <div class="pt-3 text-center">
            <span class="text-gray-600 text-xs w-2/3">Already have an account? <a href="{{ route('register') }}" class="text-gray-700 text-xs font-bold">Register</a></span>
        </div>
        <div class="d-flex mt-1 mr-5 mx-5">
            <hr class="w-100 border-gray-300">
            <span class="px-2 text-gray-400 text-xs">OR</span>
            <hr class="w-100 border-gray-300">
        </div>
        <div class="pt-2 mr-5 mx-5">
            <p class="text-gray-700 font-bold pb-2 pl-1" style="font-size: 14px;">You can also login with:</p>
            <div class="flex justify-between items-center mb-3">
                <button type="button" class="btn btn-danger bg-blue-800 text-white px-4 py-2 font-semibold text-xs rounded-sm hover:bg-blue-900 focus:outline-none">Facebook</button>
                <button type="button" class="btn btn-primary bg-red-600 text-white px-4 py-2 font-semibold text-xs rounded-sm hover:bg-red-800 focus:outline-none">Google</button>
                <button type="button" class="btn btn-danger bg-blue-800 text-white px-4 py-2 font-semibold text-xs rounded-sm hover:bg-blue-900 focus:outline-none">LinkedIn</button>
                <button type="button" class="btn btn-primary bg-blue-500 text-white px-4 py-2 font-semibold text-xs rounded-sm hover:bg-blue-900 focus:outline-none">Twitter</button>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
