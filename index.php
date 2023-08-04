<?php require_once "./db/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workflow</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
<header class="header">
            <div class="header__container">
                <img src="./img/Pic.jpg" alt="" class="header__img">

                <a href="#" class="header__logo">Workflow</a>
    
          
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header><div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bx-task nav__icon'></i>
                        <span class="nav__logo-name">Workflow</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Tasks</h3>
                            <a href="?task=add" class="nav__link">
                                <i class='bx bx-plus nav__icon' ></i>
                                <span class="nav__name">Add</span>
                            </a>
                    
                            <a href="?task=web" class="nav__link ">
                                <i class='bx bx-world nav__icon' ></i>
                                <span class="nav__name">Web</span>
                            </a>
                            <a href="?task=ios" class="nav__link">
                                <i class='bx bxl-apple nav__icon' ></i>
                                <span class="nav__name">IOS</span>
                            </a>
                         

                            <a href="?task=android" class="nav__link">
                            <i class='bx bxl-android nav__icon' ></i>
                                <span class="nav__name">Android</span>
                            </a>
                        </div>
    
                    
                    </div>
                </div>

           
            </nav>
        </div>
        <main>
            <section>
              <?php if (isset($_REQUEST["task"])) {
                  if (empty($_REQUEST["task"])) {
                      echo "<script>location.href='?task=web'</script>";
                  } else {
                      if (
                          $_REQUEST["task"] == "web" or
                          $_REQUEST["task"] == "ios" or
                          $_REQUEST["task"] == "android"  or $_REQUEST['task'] == 'add' or  $_REQUEST['task'] == 'view'
                      ) {
                        if($_REQUEST["task"] == 'web'){
                            include("./pages/web.php");
                        }if($_REQUEST["task"] == 'ios'){
                            include("./pages/ios.php");
                        }if($_REQUEST["task"] == 'android'){
                            include("./pages/android.php");
                        }if($_REQUEST["task"] == 'add'){
                            include("./pages/Add.php");
                        }if($_REQUEST["task"] == 'view'){
                            if(isset($_REQUEST["id"])){
                            include("./pages/view.php");}
                        }
                      } else {
                          echo "<script>location.href='?task=web'</script>";
                      }
                  }
              } else {
                  echo "<script>location.href='?task=web'</script>";
              } ?>
            </section>
        </main>
        <script src="assets/js/main.js"></script>
</body>
</html>
