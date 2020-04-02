<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>WebTrânsito - AIT</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" >
        <link rel="stylesheet" href="{{url('assets/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="shortcut icon" href="assets/Imagens/LogoSistema.png">
    </head>
    <body>
        <div class="container-fluid text-center bg-light p-2 position-static vw-100 h-auto min-vh-100 flex-column d-flex" id="site">
            <header class="text-center bg-info shadow-sm w-100 align-content-center p-auto d-block" id="header">
                <h1 class="text-center text-capitalize"><b>WebTrânsito</b></h1>
            </header>
            <div class="container-fluid h-auto w-100 flex-column min-vh-100" id="content">
                
                @yield('login')

                @yield('layout')

                @yield('form')

                <div class="container-fluid" id="footer">
                    <p>Copyright &copy; 2020 by Leonardo Veloso Neves.<br>All right reserved</p>
                </div>
            </div>
        </div>   
    </body>
</html>