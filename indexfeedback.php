<?php include('feedbackserver.php'); ?>

<html>
<head>
<link rel="stylesheet" href="homestyle1.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="styleregister.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="navbar">
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" width="125px"></a>
      </div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="">Products</a></li>
          <li><a href="">About</a></li>
          <li><a href="indexfeedback.php">Feedback</a></li>

          <?php if(isset($_SESSION["username"])): ?>
            <li><a href="index.php?logout='1'">Logout</a></li>
          <?php else: ?>
            <li><a href="login.php">Login</a></li>
          <?php endif ?>

        </ul>
      </nav>
      <?php if(isset($_SESSION["username"])): ?>
        <a href="cart.php"><img src="images/cart2.png" width="30px" height="30px"></a>
      <?php else: ?>
        <a href="login.php"><img src="images/cart2.png" width="30px" height="30px"></a>
      <?php endif ?>
      </div>

<div class="container">
  <div class="header">
    <h2>Lakin Feedback Form</h2>
  </div>
  
  
  <form class="form" action="indexfeedback.php" method="POST">
    
    <p class="input-group"><label for="name">Name</label>
      <input type="text" name="name" id="name" placeholder="Enter your name" >
      
    </p>
    
    <p class="input-group"><label for="email">Email</label>
      <input type="text" name="email" id="email" placeholder="mail@example.com" >
      
    </p>
    
    <p class="input-group"><label for="contact">Contact</label>
      <input type="text" name="contact" id="contact" placeholder="Contact number" >
      
    </p>    
  
    <p class="input-group"> <label for="text">Feedback</label>
      <textarea name="text" placeholder="Write something to us" ></textarea>
         
    </p>
    
    <p class="usersubmit">
      <input type="submit" name="submit" value="Send" >
    </p>
  </form>

</div>

</body>
</html>