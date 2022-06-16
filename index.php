<?php include 'inc/header.php'; ?>
<?php
 $name = $body = '';
 $nameErr= $bodyErr = '';

 // form submit
if(isset($_POST['submit'])){
    // VALIDATE THE NAME 
   if(empty($_POST['name'])){
    $nameErr = "Name is required";
   }else{
    $name = filter_input(INPUT_POST, 'name');
   }

   // VALIDATE THE feedback
   if(empty($_POST['body'])){
    $bodyErr = "message is required";
   }else{
    $body = filter_input(INPUT_POST, 'body');
   }

   // insert data into database
   if(empty($nameErr) && empty($bodyErr)){
    $query = "INSERT INTO `wishMe` (`name`, `message`) VALUES ('$name', '$body');";
    $result = mysqli_query($conn, $query);

    if($result){
      header('Location: feedback.php');
    }else{
      echo "Connection has failed";
    }
   }

}

//  echo $nameErr;
//  echo $name;
?>
    <section id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-bs-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2 class="testimonial-text">Hey I am Tahir Ahmed, celebrating my 19th birhtday</h2>
          <img class="testimonials-image" src="images/logo.jpeg" alt="">
        </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

  </section>
      
    <h2>Happy birthday to me 🎂</h2>
    <p class="lead text-center">Wish me</p>
    <form action="index.php" method="post" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
          <?php echo $nameErr; ?>
        </div>
      </div>

      <div class="mb-3">
        <label for="body" class="form-label">Message</label>
        <textarea class="form-control <?php echo $bodyErr ? 'is-invalid' : null; ?>" id="body" name="body" placeholder="Enter your message"></textarea>
        <div class="invalid-feedback">
          <?php echo $bodyErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>

<?php include 'inc/footer.php'; ?>
<!--<?php echo htmlspecialchars($_SERVER['PHP-SELF']); ?>  -->
 
