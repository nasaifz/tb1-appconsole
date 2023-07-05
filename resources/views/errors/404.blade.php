<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Fito - Laravel Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-5">
                <div class="form-input-content text-center error-page">
                    <h1><i class="fa fa-exclamation-triangle text-warning"></i></h1>
                    <h1 class="error-text font-weight-bold">404</h1>
                    <i class="fa fa-exclamation-triangle text-warning"></i>
                    <h4> The page you were looking for is not found!</h4>
                    <p>You may have mistyped the address or the page may have moved.</p>
                    <div>
                        <a class="btn btn-primary" href="{!! url('/index'); !!}">Back to Home</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<script src="{{ asset('vendor/global/global.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/deznav-init.js') }}" type="text/javascript"></script>
</body>

</html>
