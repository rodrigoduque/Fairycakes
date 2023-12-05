<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fairycakes</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
    <style>
    
</style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light  sticky-top" style="background-color: #2c0a03;">
        <div class="container-fluid"><img src="<?php echo base_url().'public/front/img/slogan.png';?>" width=150px height=90px style="opacity: 0.7;">
            <a class="navbar-brand" href="<?php echo base_url().'home/index';?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRes" style="background-color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarRes">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url().'home/index';?>" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" style="color: white;">Sobre Nós</a>
                    </li>
                    <?php $user = $this->session->userdata('user'); 
                    if(empty($user)) {
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url().'login';?>" style="color: white;">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url().'singup/index'?>" style="color: white;">Registre-se</a>
                    </li>
                    <?php } else {?>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                            <?php echo ucfirst($user['username']); ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url().'profile';?>"><i
                                    class="fas fa-user-circle"></i> Meu Perfil</a>
                            <hr>
                            <a class="dropdown-item" href="<?php echo base_url().'orders/';?>"><i class="fas fa-shopping-bag"></i> Pedidos</a>
                            <hr>
                            <a class="dropdown-item" href="<?php echo base_url().'login/logout';?>"><i class="fas fa-power-off"></i> Sair</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url().'cart';?>" style="color: white;"><i class="fas fa-cart-arrow-down" style="color: white;"></i> Meu Carrinho</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    
    <script>
    $(document).ready(function() {
        $(".dropdown").hover(function() {
            var dropdownMenu = $(this).children(".dropdown-menu");
            if (dropdownMenu.is(":visible")) {
                dropdownMenu.parent().toggleClass("open");
            }
        })
    });
    </script>