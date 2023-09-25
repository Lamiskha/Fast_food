<header class="header">

   <div class="flex">

      <a href="#" class="logo">Casa Food Menu Cammande</a>

      <nav class="navbar">
        
          <a href="pizzas.php">Pizza</a>
         <a href="tacos.php">Tacos</a>
         <a href="plats.php">Plat</a>
         <a href="salads.php">Salade</a>
         <a href="deserts.php">Desert</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>