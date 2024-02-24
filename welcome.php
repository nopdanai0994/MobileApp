<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <!-- head -->

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-------- Name ------->
    <title>Mobile App</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossoigin />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    <header>
      <h2 class="logo">LOGO</h2>
      <nav class="navigation">
        <a href="index.php?logout='1'">logout</a>
      </nav>
    </header>
    <div id="overlay">
      <div id="pop-up">
        <div class="wrapper">
          
          <span class="icon-close"
            ><ion-icon name="close-circle"></ion-icon
          ></span>
          <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
              <div class="input-box">
                <span class="icon"
                  ><ion-icon name="person-circle"></ion-icon
                ></span>
                <input type="text" required />
                <label>Username</label>
              </div>
              <div class="input-box">
                <span class="icon"
                  ><ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" required />
                <label>PASSWORD</label>
              </div>
              <div class="remember-forgot">
                <label><input type="checkbox" />Remember me</label>
                <a href="#">Forgot Password?</a>
              </div>
              <button type="submit" class="btn">Login</button>
              <div class="login-register">
                <p>
                  Don't have an account?
                  <a href="#" class="register-link">Register</a>
                </p>
              </div>
            </form>
          </div>

          <div class="form-box register">
            <h2>Register</h2>
            <form action="#">
              <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" required />
                <label>Email</label>
              </div>
              <div class="input-box">
                <span class="icon"
                  ><ion-icon name="person-circle"></ion-icon
                ></span>
                <input type="text" required />
                <label>Username</label>
              </div>
              <div class="input-box">
                <span class="icon"
                  ><ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" required />
                <label>PASSWORD</label>
              </div>
              <div class="input-box">
                <span class="icon"
                  ><ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" required />
                <label>Confirm PASSWORD</label>
              </div>
              <div class="remember-forgot">
                <label
                  ><input type="checkbox" />I agree to the terms &
                  conditions</label
                >
              </div>
              <button type="submit" class="btn">Register</button>
              <div class="login-register">
                <p>
                  already have an account?
                  <a href="#" class="login-link">Login</a>
                </p>
              </div>
            </form>
          </div>
        </div>

      </div>
      <div class="music">
        <iframe style="border-radius:12px" 
          src="https://open.spotify.com/embed/playlist/37i9dQZF1DX8Uebhn9wzrS?utm_source=generator&theme=0" 
          width="90%" 
          height="100" 
          frameBorder="0" 
          allowfullscreen="" 
          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
          loading="lazy"></iframe>
      </div>
    </div>    
    <bottom>
        <div class="toolbars">
            <ul>
              <!------Home------>
              <li class="list">
                <div class="icon-home">
                <a href="#">
                  <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                </a>
                </div>
              </li>
              <!------music------>
              <li class="list">
                <a href="#">
                  <span class="icon"><div class="icon-music"><ion-icon name="musical-notes-outline"></div></ion-icon></ion-icon></span>
                </a>
              </li>
              <!------Theme------>
              <li class="list">
                <a href="#">
                  <span class="icon"><ion-icon name="image-outline"></ion-icon></span>
                </a>
              </li>
              <!------Doc------>
              <li class="list">
                <a href="#">
                  <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                </a>
              </li>
              <!------time------>
              <li class="list">
                <div class="icon-time">
                <a href="#">
                  <span class="icon"><ion-icon name="time-outline"></ion-icon></span>
                </a>
                </div>
              </li>
               <!------stat------>
               <li class="list">
                <div class="icon-stat">
                <a href="#">
                  <span class="icon"><ion-icon name="stats-chart-outline"></ion-icon></ion-icon></span>
                </a>
                 </div>
              </li>
        
            </ul>
          </div>
    </bottom>
    <script src="functionlogin.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>