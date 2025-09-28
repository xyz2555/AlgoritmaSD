<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class='bold-line'></div>
<div class='container'>
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
      <div class='welcome'>Hello There!</div>
      <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div>
      <div class='input-fields'>
        <form action="landing.php" method="post">
        <input type='text' placeholder='Username' class='input-line full-width' name='name'></input>
        <input type='email' placeholder='Email' class='input-line full-width' name='email'></input>
        <input type='password' placeholder='Password' class='input-line full-width' name='password'></input>
        <div>
  <input type="submit" value="Create Account" class="ghost-round full-width">
</div>  
      </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>