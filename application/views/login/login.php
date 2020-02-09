
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Login Burger King</title>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/')?>css/login.css" rel="stylesheet" />
  </head>

  <body class="text-center">
    <div class="wrapper fadeInDown">
      <div id="formContent">

        <!-- Icon -->
        <div class="fadeIn first">
          <img src="<?php echo base_url('assets/img/logo.png'); ?>" width="110" height="110" style="margin:30px"/>
        </div>

        <!-- Login Form -->
        <form action="<?php echo site_url('Login/Login')?>" method="POST">
          <input type="text" class="fadeIn second" name="username" placeholder="username"  autocomplete="off">
          <input type="password" class="fadeIn third input" name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In" style="margin:20px" name="login">
        </form>

      </div>
    </div>
  </body>
</html>
