<!DOCTYPE html>
<html data-wf-page="656b4f32f24843aea602bc5c" data-wf-site="656b4f32f24843aea602bc57" class=" w-mod-js">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <style>.wf-force-outline-none[tabindex="-1"]:focus{outline:none;}</style>
        <meta charset="utf-8">
        <title>Login</title>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Webflow" name="generator">
        <link href="<?php echo base_url().'application/views/front/assets/style.css'; ?>" rel="stylesheet" type="text/css">
        <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
        <link href="https://assets-global.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link href="https://assets-global.website-files.com/img/webclip.png" rel="apple-touch-icon">
    
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/profile.css');?>">
    
    </head>
    <body class="body">

    <?php
        if (!empty($this->session->flashdata('success'))) {
          echo "<div class='alert alert-success m-3 mx-auto'>".$this->session->flashdata('success')."</div>";
        }
        ?>
        <?php
        if (!empty($this->session->flashdata('msg'))) {
          echo "<div class='alert alert-danger m-3 mx-auto'>".$this->session->flashdata('msg')."</div>";
        }
        ?>

        <div class="div-block"></div>
        <img src="<?php echo base_url().'application/views/front/assets/slogan.png'; ?>" loading="lazy" alt="" class="image-3">
        <div class="w-form">
            <form action="<?php echo base_url().'login/authenticate' ;?>" id="email-form" name="email-form" data-name="Email Form" method="POST" data-wf-page-id="656b4f32f24843aea602bc5c" data-wf-element-id="d5f32393-b1a2-8ccb-ab43-15c90dcc0001" aria-label="Email Form">
                
                <input type="text" class="text-field w-input" autofocus="true" maxlength="256" name="username" data-name="email" placeholder="Usuário" id="email-2" required="">
                <input type="password" class="text-field-2 w-input" autofocus="true" maxlength="256" name="password" data-name="senha" placeholder="Senha" id="senha" required="">
                <input type="submit" value="ENTRAR" data-wait="Please wait..." class="btn-success mr-3 submit-button" style="background-color: #ff5fbe;">
            
            </form>
            <div class="w-form-done" tabindex="-1" role="region" aria-label="Email Form success">
            </div>
            <div class="w-form-fail" tabindex="-1" role="region" aria-label="Email Form failure">
            </div>
        </div>
   
        <script>
    const form = document.getElementById('loginform');
    const username = document.getElementById('username');
    const password = document.getElementById('password');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        validate();
    })

    const sendData = (sRate, count) => {
        if(sRate === count) {
            event.currentTarget.submit();
        }
    }

    const successMsg = (usernameVal) => {
        let formCon = document.getElementsByClassName('form-control');
        var count = formCon.length - 1; 
        for (var i = 0; i < formCon.length; i++) {
            if (formCon[i].className === "form-control bg-light success") {
                var sRate = 0 + i;
                sendData(sRate, count);
            } else {
                return false;
            }
        }
    }

    const validate = () => {
        const usernameVal = username.value.trim();
        const passwordVal = password.value.trim();

        if (usernameVal === "") {
            setErrorMsg(username, 'username can be blank');
        } else {
            setSuccessMsg(username);
        }

        if (passwordVal === "") {
            setErrorMsg(password, 'password can not be blank');
        } else {
            setSuccessMsg(password);
        }

        successMsg();
    }

    function setErrorMsg(ele, msg) {
        const formCon = ele.parentElement;
        const formInput = formCon.querySelector('.form-control');
        const span = formCon.querySelector('span');
        span.innerText = msg;
        formInput.className = "form-control bg-light is-invalid";
        span.className = "invalid-feedback font-weight-bold";
    }

    function setSuccessMsg(ele) {
        const formCon = ele.parentElement;
        const formInput = formCon.querySelector('.form-control');
        formInput.className = "form-control bg-light success";
    }
    </script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
   
   
   
    </body>
    </html>