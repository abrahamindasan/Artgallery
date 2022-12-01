<?php


    session_start();
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Art Gallery
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    
    <section class="homepage">
        <h2>EXPLORE</h2>
        <h3>THE</h3>
        <h4>COLLECTION</h4>
    </section>
      <section class="home-section">
    <nav>
         <div class="profile-details">
                <i class='bx bx-user-circle'></i>
                <span class="admin-name"><?php echo $_SESSION['fullname']; ?></span> </div>
        <div class="link">
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Search</a>
            <a id="logout-link">
                <a href="../login/logout.php">
                <i class='bx bx-log-out'></i>
                    <span class="links-name">Logout</span>
                </a>  
    </nav>
      
    <section class="page2">

      <div class="container">
        <div class="box" id="box-1" href = "explore1.php"><button>Explore</button></div>
        <div class="box" id="box-2"><button>Explore</button></div>
        <div class="box" id="box-3"><button>Explore</button></div>
        <div class="box" id="box-4"><button>Explore</button></div>
        <div class="box" id="box-5"><button>Explore</button></div>
        <div class="box" id="box-6"><button>Explore</button></div>
        <div class="action">
      </div>
    </section>
    <section class="page3">
  
        <h1>
          Contact us below!!
          <br />
        </h1>

    
      <div class="contact-container">
        <div class="contact-item">
            <div class="cimg-1"></div>
            <p class="chatboxall">Let's have a Chat</p>
            <a href="#" class="chatbox">Start a Live Chat</a>
        </div>
        <div class="contact-item">
            <div class="cimg-2"></div>
            <p class="chatboxall">Email Us</p>
            <a href="#" class="chatbox">Submit a Request</a>
        </div>
        <div class="contact-item">
            <div class="cimg-3"></div>
            <p class="chatboxall">Get Connected</p>
            <a href="#" class="chatbox">Visit Us</a>
        </div>
      </div>     
    </section>

    <footer>

    </footer>
   
  </body>
</html>
<?