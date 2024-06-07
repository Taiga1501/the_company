<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!--Offline-->
  <link rel="stylesheet" href="css/bootstrap.css">
    <!--CDN / Online-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
</head>
<body class="bg-light">
    <div style="height: 100vh:">
       <div class="row h-100 m-0">
           <div class="card w-25 my-auto mx-auto">
              <div class="card-header bg-white border-0 py-3">
                 <h1 class="text-center">LOGIN</h1>
              </div>
              <div class="card-body">
                  <form action="../actions/login.php" method="post">
                     <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" reqired autofocus>
                     <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-5">
                     <button type="submit" value="Log in" name="btn_submit" class="btn btn-primary w-100">Log in</button>
                  </form>

                  <p class="text-center mt-3 small">
                    <a href="register.php">Create Account</a>
                  </p>
              </div>
           </div>
       </div>
    </div>
</body>
</html>