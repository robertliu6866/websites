<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      
      <p>   <?= htmlspecialchars($note['body'] )?></p>

     <form class="mt-6" method="POST">
      <input type="hidden" name="_method"  value="DELETE">

       <input type="" name="id" value="<?= $note['body'] ?> ">    
       <button class= "text-sm text-red-500">刪除活動！</button>
     </form>

      <?php require base_path('views/partials/footer.php') ?>
    
