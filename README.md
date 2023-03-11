# WordPress Admin Defense:
Are you tired of hackers brute-forcing your wp-admin? We may have a solution!

---

### login.php

```

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

---

### login_handle.php

```

<?php
session_start();

// Define your 4 hex access color codes
$access_color_1 = "#631C03";
$access_color_2 = "#631C04";
$access_color_3 = "#631C06";
$access_color_4 = "#631C07";

//Retrieve user's entered color codes from the form via POST method
$hex_color_1 = $_POST["pass1"];
$hex_color_2 = $_POST["pass2"];
$hex_color_3 = $_POST["pass3"];
$hex_color_4 = $_POST["pass4"];

//Validate that input colors are valid hex values
if (preg_match('/^#[a-f0-9]{6}$/i', $hex_color_1) &&
    preg_match('/^#[a-f0-9]{6}$/i', $hex_color_2) &&
    preg_match('/^#[a-f0-9]{6}$/i', $hex_color_3) &&
    preg_match('/^#[a-f0-9]{6}$/i', $hex_color_4)) {
    // All input colors are valid

    //Compare input colors to the access color codes and set session variable if correct
    if ($hex_color_1 == $access_color_1 && 
        $hex_color_2 == $access_color_2 && 
        $hex_color_3 == $access_color_3 &&
        $hex_color_4 == $access_color_4) {
        // All input colors match the access color codes - Set session variable
        $_SESSION['authenticated'] = true;

        // Redirect to the secure page
        header("Location: /index.php");
    }
    else {
        // Invalid input color codes
        echo "Invalid login attempt. Please enter the correct keypass.";
    }
}
else {
    // Invalid input color codes
    echo "Invalid login attempt. Please enter valid keypass.";
}
?>

```
