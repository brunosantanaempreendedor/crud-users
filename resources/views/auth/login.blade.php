<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="{{ env('APP_SYSTEM') }}">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:image" content="https://w3crm.dexignzone.com/xhtml/social-image.png') }}">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>{{ env('APP_NAME') }} - {{ env('APP_SYSTEM') }}</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('app/assets/images/favicon.png') }}">
    <link href="{{ asset('app/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app/assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                    <div class="login-form">
                        <div class="text-center">
                            <h3 class="title">Autenticação</h3>
                            <p>Conecte-se para fazer gestão do seu negócio com {{ firstLetter(env('APP_NAME')) }}3CRM
                            </p>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="mb-1 text-dark">E-mail</label>
                                <input type="email" class="form-control form-control" name="email">
                            </div>
                            <div class="mb-4 position-relative">
                                <label class="mb-1 text-dark">Password</label>
                                <input type="password" id="dz-password" class="form-control" name="password">
                                <span class="show-pass eye">
                                    <i class="fa fa-eye-slash"></i>
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-primary btn-block">Conectar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="pages-left h-100">
                        <div class="login-content">
                            <a href="{{route('login')}}"><span class="logo-abbr"
                                    style="font-size: 2em; font-weight: bold; color: var(--primary);">
                                    {{ firstLetter(env('APP_NAME')) }}3<span class="text-dark"
                                        style="font-size: 1.2em;">CRM</span>
                                </span>
                            </a>

                            <p>O painel do CRM exibe métricas e tendências de clientes ao longo do tempo.</p>
                        </div>
                        <div class="login-media text-center">
                            <img src="{{ asset('app/assets/images/login.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
 Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('app/assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('app/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('app/assets/js/deznav-init.js') }}"></script>

    <script src="{{ asset('app/assets/js/custom.js') }}"></script>


</body>

</html>
