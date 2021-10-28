<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="menu.css">
    <script src="menu.js"></script>
</head>

<body>
    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <div class="m-4 mb-5">
                    <img class="img-thumbnail" src="./gnose.png" alt="Brand" style="border-radius: 100%;">
                </div>
                <div class="mt-5 mb-5">
                    <li class="mb-1 p-1">
                        <a class="button pr-5 pl-5 btn btn-light text-primary font-weight-bold" href="#home" style="border-radius: 30px">EVENTOS</a>
                    </li>
                    <li class="mb-1 p-1">
                        <a class="button pr-5 pl-5 btn btn-light text-primary font-weight-bold" href="{{ Route('category.index') }}" style="border-radius: 30px">CATEGORIAS</a>
                    </li>
                    <li class="mb-1 p-1">
                        <a class="button pr-5 pl-5 btn btn-light text-primary font-weight-bold" href="#events" style="border-radius: 30px">USUÁRIOS</a>
                    </li>
                    <li class="mb-1 p-1">
                        <a class="button pr-5 pl-5 btn btn-light text-primary font-weight-bold" href="{{Route('order.index')}}" style="border-radius: 30px">PEDIDOS</a>
                    </li>
                </div>
            </ul>
            <div class="p-4 mt-5">
                <a class="pr-5 pl-5 btn btn-secundary font-weight-bold" href="#sair" style="border-radius: 30px">SAIR</a>
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
    </div>
    <!-- /#wrapper -->
</body>

</html>
