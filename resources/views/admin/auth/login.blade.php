<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Raffles - Login</title>
    <meta name="robots" content="noindex" />

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
        rel="stylesheet">

    <link type="text/css" href="{{ getAdminAsset('vendor/spinkit.css') }}" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ getAdminAsset('vendor/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ getAdminAsset('css/material-icons.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{ getAdminAsset('css/fontawesome.css') }}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{ getAdminAsset('css/app.css') }}" rel="stylesheet">


    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ getAdminAsset('css/sweetalert.css') }}">

</head>

<body class="layout-compact layout-compact"
    style="background-image: url({{ getAdminAsset('images/bg.jpg') }}); background-size: cover; ">

    <div class="pt-32pt pt-sm-64pt pb-32pt m-auto w-100" >
        <div class="container page__container">
            <form action="{{ route('login') }}" method="POST" class="col-md-5 p-0 mx-auto bg-white p-5 border-rounded20 ">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="email">Email:</label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Your email address ..." value="admin@raffles.com">
                </div>
                <x-form.error name='email'/>
                <div class="form-group">
                    <label class="form-label" for="password">Password:</label>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Password" value="password">
                </div>
                <x-form.error name='password'/>
                <div class="text-center">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>


    <div class="bg-white border-top-2 mt-auto">
        <div class="container page__container page-section d-flex flex-column">
            <p class="text-70 brand mb-24pt">
                <img class="brand-icon" src="{{ getAdminAsset('images/logo/logo.png') }}" width="150" alt="Raffles">
            </p>
            <p class="text-50 small mt-n1 mb-0">Copyright {{ date('Y') }} © All rights reserved.</p>
        </div>
    </div>

    <script src="{{ getAdminAsset('vendor/jquery.min.js') }}"></script>
    <script src="{{ getAdminAsset('vendor/popper.min.js') }}"></script>
    <script src="{{ getAdminAsset('vendor/bootstrap.min.js') }}"></script>
</body>

</html>
