# WordPress Admin Defense:
Are you tired of hackers brute-forcing your wp-admin? We may have a solution!

```login.php

  <head>
    <title>WordPress Admin Defense</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
      <form method="post" action="login_handle.php">
          <input class="form-control" type="text" name="pass1" maxlength="7" placeholder="1"><br>
          <input class="form-control" type="text" name="pass2" maxlength="7" placeholder="2"><br>
          <input class="form-control" type="text" name="pass3" maxlength="7" placeholder="3"><br>
          <input class="form-control" type="text" name="pass4" maxlength="7" placeholder="4"><br><br>
          <input type="submit" value="Login" class="btn btn-primary">
      </form> 
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>

```
