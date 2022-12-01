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
  </section>
      <section class="home-section">
    <nav>
         <div class="profile-details">
                <i class='bx bx-user-circle'></i>
                <span class="admin-name"><?php echo $_SESSION['fullname']; ?></span> </div>
        <div class="link">
          <a href="../admin/dashboard.php">Home</a>
          <a href="#">About</a>
          <a href="#">Search</a>
          <a href="#">Settings</a>
            <a id="logout-link">
                <a href="../login/logout.php">
                <i class='bx bx-log-out'></i>
                    <span class="links-name">Logout</span>
                </a>  
                </section>
                <div class="home-content">
            <div class="table-container">
                <div class="table-heading form-size">
                    <h3 class="table-title" style="text-align:center">Pixel Art</h3>
                    <a class="back" href="../admin/dashboard.php"><i class='bx bx-caret-right'></i>Back</a>
                </div>
                <td>
                             <div class="action">
                            <a class="back" href="#"><i class="#"></i>Add</a>
                            <a class="action-delete" href="#">Delete</a>
                              </div>
                            </td>
                <table>
                <tr>
                      <td><img src="../images/e11.jpg" width="535"></td>
                        <td><img src="../images/e12.png" width="535"></td>
                      </tr>
  
                        <tr>
                          <td><img src="../images/e13.jfif" width="535" ></td>
                          <td><img src="../images/e14.jpg" width="535"></td>
                        </tr>

                        <tr>
                          <td><img src="../images/e15.jpg" width="535" ></td>
                          <td><img src="../images/e16.png" width="535"></td>
                        </tr>
                        <tr>
                          <td><img src="../images/e17.png" width="535" ></td>
                          <td><img src="../images/e18.jpg" width="535"></td>
                        </tr>
</table>

<footer>

</footer>

</body>
</html>
<?