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
                        <a class="button pr-5 pl-5 btn btn-light text-primary font-weight-bold" href="#about" style="border-radius: 30px">CATEGORIAS</a>
                    </li>
                    <li class="mb-1 p-1">
                        <a class="button pr-5 pl-5 btn btn-light text-primary font-weight-bold" href="#events" style="border-radius: 30px">USUÁRIOS</a>
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
            <!-- APAGAR ESSA DIV CONTAINDER, É O CONTEUDO DO BORY -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1>Fancy Toggle Sidebar Navigation</h1>
                        <p>Bacon ipsum dolor sit amet tri-tip shoulder tenderloin shankle. Bresaola tail pancetta ball tip doner meatloaf corned beef. Kevin pastrami tri-tip prosciutto ham hock pork belly bacon pork loin salami pork chop shank corned beef
                            tenderloin meatball cow. Pork bresaola meatloaf tongue, landjaeger tail andouille strip steak tenderloin sausage chicken tri-tip. Pastrami tri-tip kielbasa sausage porchetta pig sirloin boudin rump meatball andouille chuck
                            tenderloin biltong shank </p>
                        <p>Pig meatloaf bresaola, spare ribs venison short loin rump pork loin drumstick jowl meatball brisket. Landjaeger chicken fatback pork loin doner sirloin cow short ribs hamburger shoulder salami pastrami. Pork swine beef ribs t-bone
                            flank filet mignon, ground round tongue. Tri-tip cow turducken shank beef shoulder bresaola tongue flank leberkas ball tip.</p>
                        <p>Filet mignon brisket pancetta fatback short ribs short loin prosciutto jowl turducken biltong kevin pork chop pork beef ribs bresaola. Tongue beef ribs pastrami boudin. Chicken bresaola kielbasa strip steak biltong. Corned beef
                            pork loin cow pig short ribs boudin bacon pork belly chicken andouille. Filet mignon flank turkey tongue. Turkey ball tip kielbasa pastrami flank tri-tip t-bone kevin landjaeger capicola tail fatback pork loin beef jerky.</p>
                        <p>Chicken ham hock shankle, strip steak ground round meatball pork belly jowl pancetta sausage spare ribs. Pork loin cow salami pork belly. Tri-tip pork loin sausage jerky prosciutto t-bone bresaola frankfurter sirloin pork chop
                            ribeye corned beef chuck. Short loin hamburger tenderloin, landjaeger venison porchetta strip steak turducken pancetta beef cow leberkas sausage beef ribs. Shoulder ham jerky kielbasa. Pig doner short loin pork chop. Short
                            ribs frankfurter rump meatloaf.</p>
                        <p>Filet mignon biltong chuck pork belly, corned beef ground round ribeye short loin rump swine. Hamburger drumstick turkey, shank rump biltong pork loin jowl sausage chicken. Rump pork belly fatback ball tip swine doner pig. Salami
                            jerky cow, boudin pork chop sausage tongue andouille turkey.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>

</html>