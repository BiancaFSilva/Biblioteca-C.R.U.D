<?php
    include '../conecta.php';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Área Administrativa</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
        <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">

        <link rel="stylesheet" href="assets/css/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo_novo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>
                </div>
                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Painel de Controle </a>
                        </li>
                        <h3 class="menu-title">Menu de Opções</h3>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Alunos</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-puzzle-piece"></i><a href="form_cad_aluno.php">Cadastrar Aluno</a></li>                                
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Livros</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="form_cad_livro.php">Cadastrar Livro</a></li>                                
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="emprestimos.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Empréstimos</a>                            
                        </li>                        
                    </ul>
                </div>
            </nav>
        </aside>

        <div id="right-panel" class="right-panel">
            <header id="header" class="header">
                <div class="header-menu">
                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                            </a>
                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="perfil.php"><i class="fa fa-user"></i> Perfil </a>
                                <a class="nav-link" href="sair.php"><i class="fa fa-power-off"></i> Sair </a>
                            </div>
                        </div>                      
                    </div>
                </div>
            </header>

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Atualização de Aluno</h1>
                            <?php
                                $ra = $_GET['ra'];
                                echo "RA: ".$ra;

                                $consulta = "SELECT * FROM aluno WHERE ra = '$ra'";

                                foreach ($conexao -> query($consulta) as $linha) {
                                
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">Painel de Controle</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content mt-3">
                <div class="col-sm-12">
                    <div class="card-body card-block">
                        <form action="atualiza_aluno.php?ra=<?php echo $ra; ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nome</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="nome" value= "<?php echo $linha['nome']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">Email</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="email" id="email-input" name="email" value= "<?php echo $linha['email']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Telefone</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="telefone" value= "<?php echo $linha['tel']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Celular</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="celular" value= "<?php echo $linha['celular']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Data de Nascimento</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="date" id="text-input" name="nascimento" value= "<?php echo $linha['dataNascimento']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Turma</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="select" id="select" class="form-control">
                                        <option value="1A">1ºA - NovoTec ADM</option>
                                        <option value="2A">2ºA - ETIM ADM</option>
                                        <option value="3A">3ºA - ETIM ADM</option>

                                        <option value="1B">1ºB - NovoTec RH</option>
                                        <option value="2B">2ºB - Ensino Médio</option>
                                        <option value="3B">3ºB - Ensino Médio</option>

                                        <option value="1C">1ºC - NovoTec INFO</option>
                                        <option value="2C">2ºC - ETIM INFO</option>
                                        <option value="3C">3ºC - ETIM INFO</option>

                                        <option value="1D">1ºD - Administração</option>
                                        <option value="2D">2ºD - Administração</option>
                                        <option value="3D">3ºD - Administração</option>

                                        <option value="1F">1°F - NovoTec INFO</option>
                                        <option value="2F">2ºF - MTec BD</option>
                                        <option value="3F">3ºF - MTec BD</option>

                                        <option value="1G">1ºG - Contabilidade</option>
                                        <option value="2G">2ºG - Contabilidade</option>
                                        <option value="3G">3ºG - Contabilidade</option>

                                        <option value="1H">1ºH - Química</option>
                                        <option value="2H">2ºH - Química</option>
                                        <option value="3H">3ºH - Química</option>
                                        <option value="4H">4ºH - Química</option>

                                        <option value="1I">1ºI - NovoTec ADM</option>
                                        <option value="2I">2ºI - MTec RH</option>
                                        <option value="3I">3ºI - MTec RH</option>

                                        <option value="1K">1ºK - Logística</option>
                                        <option value="2K">2ºK - Logística</option>
                                        <option value="3K">3ºK - Logística</option>
                                    </select>
                                </div>
                            </div>
                            <?php 
                                }
                            ?>
                            <div class="row form-group">
                                <div class="col col-md-1">
                                    <input type="submit" class="btn btn-primary btn-sm" value="Atualizar">                                    
                                </div>
                                <div class="col col-md-1">                               
                                </div>
                                <div class="col col-md-1">
                                    <input type="reset" class="btn btn-danger btn-sm" value="Limpar">
                                </div>                            
                            </div>
                        </form>
                    </div>                                            
                </div>          
            </div>
        </div>

        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>

        <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/widgets.js"></script>
        <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script>
            (function($) {
                "use strict";

                jQuery('#vmap').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#1de9b6', '#03a9f5'],
                    normalizeFunction: 'polynomial'
                });
            })(jQuery);
        </script>
    </body>
</html>
