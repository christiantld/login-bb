<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php
//session_start();
include_once('../includes/verify_login.php');
include_once('../includes/data.php');
//exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Perfil
  </title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
        aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="#">
        <img src="../assets/img/brand/black.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right"
            aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <?php if ($_SESSION['email'] === 'admin@admin.com') {
                  echo '<img alt="Image placeholder" src="../assets/img/theme/dwight.png">';
                } else {
                  echo '<img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg">';
                };
                ?>
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Bem vindo!</h6>
            </div>
            <a href="./views/profile.php" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>Meu Perfil</span>
            </a>
            <a href="./views/profile.php" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./views/profile.php" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./views/profile.php" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <a href="../includes/logout.php"><span>Logout</span></span>
              </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../index.php">
                <img src="../assets/img/brand/black.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended"
              placeholder="Pesquisar" aria-label="Pesquisar">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  class=" active" ">
          <a class=" nav-link " href=" #"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="ni ni-planet text-blue"></i> Adicionar Item
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="ni ni-pin-3 text-orange"></i> Retirar Item
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active " href="#">
              <i class="ni ni-single-02 text-yellow"></i> Histórico
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="ni ni-bullet-list-67 text-red"></i> Categorias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-key-25 text-info"></i> Gerenciar Alertas
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link active" href="profile.php">
              <i class="ni ni-circle-08"></i> Perfil do Usuário
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.php">
              <i class="ni ni-palette"></i> Usuários do Sistema
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-ui-04"></i> Configurações
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-headset"></i> Suporte
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">Perfil do
          Usuário</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Pesquisar" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <?php if ($_SESSION['email'] === 'admin@admin.com') {
                    echo '<img alt="Image placeholder" src="../assets/img/theme/dwight.png">';
                  } else {
                    echo '<img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg">';
                  };
                  ?>
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['email']; ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bem Vindo!</h6>
              </div>
              <a href="../views/profile.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Meu Perfil</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Configurações</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Atividade</span>
              </a>
              <a href="../views/profile.php" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Estoque</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="../includes/logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Sair</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px;">
      <!-- Mask -->
      <span class="mask bg-gradient-success opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Olá<?php if (isset($_SESSION['email'])) : $name = explode(' ', $nome);
                                                  echo ', ' . $name[0];
                                                endif; ?></h1>
            <p class="text-white mt-0 mb-5">Bem-vindo a sua pagina de perfil do Blackbook. Aqui você pode
              visualizar os
              seus dados e alteralos quando quiser </p>
            <a href="profile_edit.php" class="btn btn-info">Editar perfil</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <?php if ($_SESSION['email'] === 'admin@admin.com') {
                      echo '<img alt="Image placeholder" class="rounded-circle" src="../assets/img/theme/dwight.png">';
                    } else {
                      echo '<img alt="Image placeholder" class="rounded-circle" src="../assets/img/theme/team-4-800x800.jpg">';
                    };
                    ?>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  <?php echo $nome; ?>
                </h3>
                <div class="h5 mt-4"> <?php if ($_SESSION['email'] === 'admin@admin.com') {
                                        echo ' <i class="ni business_briefcase-24 mr-2"></i> Assistant to the regional manager';
                                      } else {
                                        echo '<i class="ni business_briefcase-24 mr-2"></i> Cargo na empresa';
                                      };
                                      ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center"></div>
              <div class="col-12 d-flex justify-content-between">
                <h3 class="mb-0 d-inline">Meu perfil</h3>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form>
              <h6 class="heading-small text-muted mt-4 mb-4">Informações Pessoais</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Nome</label>
                      <input type="text" id="input-name" class="form-control form-control-alternative"
                        placeholder="Nome" value="<?php echo $nome ?>" disabled>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Email</label>
                      <input type="email" id="input-email" class="form-control form-control-alternative"
                        placeholder="email@example.com" value="<?php echo $email ?>" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">CPF</label>
                      <input type="text" id="input-CPF" class="form-control form-control-alternative" placeholder="CPF"
                        value="<?php echo $cpf ?>" disabled> </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">Telefone</label>
                      <input type="text" id="input-telefone" class="form-control form-control-alternative"
                        placeholder="Telefone" value="<?php echo $telefone ?>" disabled>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <!-- Address -->
              <h6 class="heading-small text-muted mb-4">Informações de Acesso</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-address">Senha</label>
                      <input id="input-password" class="form-control form-control-alternative"
                        placeholder="Home Address" value="senha123" type="password" disabled>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <!-- Description -->
              <h6 class="heading-small text-muted mb-4">Permissões</h6>
              <div class="pl-lg-4">
                <div class="form-group">
                  <label>Cargo</label>
                  <?php if ($_SESSION['email'] === 'admin@admin.com') {
                    $cargo = 'Assistant to the regional manager';
                  } else {
                    $cargo = 'Funcionario';
                  };
                  ?>
                  <input id="input-cargo" class="form-control form-control-alternative" placeholder="Cargo"
                    value="<?php echo $cargo; ?>" type="text" disabled>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
  window.TrackJS &&
    TrackJS.install({
      token: "ee6fab19c5a04ac1a32a645abde4613a",
      application: "argon-dashboard-free"
    });
  </script>
</body>

</html>