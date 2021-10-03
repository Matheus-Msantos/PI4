<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8455a3d02b.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="https://kit.fontawesome.com/4d52201842.js" crossorigin="anonymous"></script>

    <title>Portal ADM</title>
</head>
    @yield('content')
    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <div class="m-4 mb-5">
                    <img class="img-thumbnail" src="{{ asset('image/gnose.png') }}" alt="Brand">
                </div>
                <div class="mt-5 mb-5">
                    <li class="mb-1 p-1">
                        <a class="button pr-5 pl-5 btn btn-light text-primary font-weight-bold" href="{{ Route('product.index') }}" style="border-radius: 30px">EVENTOS</a>
                    </li>
                    <li class="mb-1 p-1">
                        <a class="button pr-5 pl-5 btn btn-light text-primary font-weight-bold" href="{{ Route('category.index') }}" style="border-radius: 30px">CATEGORIAS</a>
                    </li>
                    <li class="mb-1 p-1">
                        <a class="button pr-5 pl-5 btn btn-light text-primary font-weight-bold" href="{{ Route('user.index') }}" style="border-radius: 30px">USUÁRIOS</a>
                    </li>
                </div>
            </ul>
            <div class="p-4 mt-5">
                <a class="pr-5 pl-5 btn btn-secundary text-white font-weight-bold" href="#sair" style="border-radius: 30px">SAIR</a>
            </div>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                     <span class="hamb-top"></span>
                     <span class="hamb-middle"></span>
                     <span class="hamb-bottom"></span>
                 </button>
            <!-- APAGAR ESSA DIV CONTAINER, É O CONTEUDO DO BORY -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
</html>
