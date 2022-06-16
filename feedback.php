<?php include 'inc/header.php'; ?>
<?php
 $sql = "SELECT * FROM `wishme`";
 $result = mysqli_query($conn, $sql);
 $feedback = mysqli_fetch_all($result);

?>
    <h2>Wishes</h2>
    <?php if(empty($feedback)){
      echo "No feedback";
    } ?>

    <?php foreach($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item[2]; ?>

       <!-- <div class="user-college">
         <?php echo $item[3]; ?>
       </div> -->
       
       <div class="user-name">
        by <?php echo $item[1]; ?>
       </div>

       
     </div>
   </div>
   <?php endforeach; ?>

   <!-- <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div> -->
<?php include 'inc/footer.php'; ?>

