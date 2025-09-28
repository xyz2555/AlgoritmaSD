<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="window">
      <div class="overlay"></div>
      <div class="content">

        <h1 class="welcome">Welcome</h1>
        <p class="subtitle">Your Profile</p>

        <div class="input-fields">
          <div class="spacing">
            <span class="highlight">Name:</span><br>
            <span>
              <?php 
                echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Guest';
              ?>
            </span>
          </div>

          <div class="spacing">
            <span class="highlight">Email:</span><br>
            <span>
              <?php 
                echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'example@mail.com';
              ?>
            </span>
          </div>
        </div>

        <div>
          <a href="logout.php">
            <button class="ghost-round full-width">Logout</button>
          </a>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
