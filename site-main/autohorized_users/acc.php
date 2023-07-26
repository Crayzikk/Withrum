<?php
  session_start();

  if(!$_SESSION['user'])
  {
    header("Location: http://localhost/Withrum/site-main/index.html");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla&family=Kaushan+Script&family=Kufam:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/acc_style.css">
    <link rel="icon" href="./img/mini_logo.png">
    <title>Withrum</title>
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="./acc.html"><span id="logo_letter">W</span>ithrum</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Dialogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./error.html">My friends</a>
              </li>
            </div>
            </ul>
          </div>
        </div>
  </nav>
  </header>
  <main>
    <div class="container-fluid wrapper_back" style="background: #E3FDFD;;">
      <div class="d-flex justify-content-evenly">
        <div class="col d-flex justify-content-center flex-column ac_inform" style="background: #FFF;">
          <div class="d-flex p-2 justify-content-center flex-column">
            <div class="d-flex justify-content-center">
              <img src="../img/photo_user.png" alt="User_photo" class="User_photo">
            </div>
            <a href="" class="d-flex p-2 justify-content-center link">Load image</a>
            <div>
              <h2 class="User_name">
                <?= $_SESSION['user'] ['username'] ?>
              </h2>
              <h2>
                E mail:
              </h2>
              <label for="" style="margin-left: 140px;"> <?= $_SESSION['user'] ['email'] ?> </label>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center flex-column ac_inform" style="background: #FFF;">
          <div class="d-flex justify-content-center border border-black flex-column list_online">
            <h2 class="Online_friend justify-content-center p-2">
              Friends online
            </h2>
            <ul class="p-2">
              <li class="d-flex">
                <img src="../img/photo_user.png" alt="photo_user" class="online_usr">
                <p class="Usrname_online">User_name</p>
              </li>
              <li class="d-flex">
                <img src="../img/photo_user.png" alt="photo_user" class="online_usr">
                <p class="Usrname_online">User_name</p>
              </li>
              <li class="d-flex">
                <img src="../img/photo_user.png" alt="photo_user" class="online_usr">
                <p class="Usrname_online">User_name</p>
              </li>
              <li class="d-flex">
                <img src="../img/photo_user.png" alt="photo_user" class="online_usr">
                <p class="Usrname_online">User_name</p>
              </li>
            </ul>
          </div>
      </div>
    </div>
  </main>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>