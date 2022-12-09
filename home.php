<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
}else {
    $user_id = '';
}

include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- link css -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section -->
<?php include 'components/user_header.php'; ?>
<!-- header ends -->

<!-- home section starts  -->

<div class="home">

   <section class="center">

      <form action="search.php" method="POST">
         <h3>find your perfect home</h3>
         <div class="box">
            <p>property address <span>*</span></p>
            <input type="text" name="h_address" required maxlength="100" placeholder="enter city name" class="input">
         </div>
         <div class="flex">
            <div class="box">
               <p>property type <span>*</span></p>
               <select name="h_type" class="input" required>
                  <option value="flat">flat</option>
                  <option value="house">house</option>
                  <option value="shop">shop</option>
               </select>
            </div>
            <div class="box">
               <p>offer type <span>*</span></p>
               <select name="h_offer" class="input" required>
                  <option value="sale">sale</option>
                  <option value="resale">resale</option>
                  <option value="rent">rent</option>
               </select>
            </div>
            <div class="box">
               <p>manimum budget <span>*</span></p>
               <select name="h_min" class="input" required>
                  <option value="5000">5k</option>
                  <option value="10000">10k</option>
                  <option value="15000">15k</option>
                  <option value="20000">20k</option>
                  <option value="30000">30k</option>
                  <option value="40000">40k</option>
                  <option value="40000">40k</option>
                  <option value="50000">50k</option>
                  <option value="100000">1 lac</option>
                  <option value="500000">5 lac</option>
                  <option value="1000000">10 lac</option>
                  <option value="2000000">20 lac</option>
                  <option value="3000000">30 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="5000000">50 lac</option>
                  <option value="6000000">60 lac</option>
                  <option value="7000000">70 lac</option>
                  <option value="8000000">80 lac</option>
                  <option value="9000000">90 lac</option>
                  <option value="10000000">1 Cr</option>
                  <option value="20000000">2 Cr</option>
                  <option value="30000000">3 Cr</option>
                  <option value="40000000">4 Cr</option>
                  <option value="50000000">5 Cr</option>
                  <option value="60000000">6 Cr</option>
                  <option value="70000000">7 Cr</option>
                  <option value="80000000">8 Cr</option>
                  <option value="90000000">9 Cr</option>
                  <option value="100000000">10 Cr</option>
                  <option value="150000000">15 Cr</option>
                  <option value="200000000">20 Cr</option>
               </select>
            </div>
            <div class="box">
               <p>maximum budget <span>*</span></p>
               <select name="h_max" class="input" required>
                  <option value="5000">5k</option>
                  <option value="10000">10k</option>
                  <option value="15000">15k</option>
                  <option value="20000">20k</option>
                  <option value="30000">30k</option>
                  <option value="40000">40k</option>
                  <option value="40000">40k</option>
                  <option value="50000">50k</option>
                  <option value="100000">1 lac</option>
                  <option value="500000">5 lac</option>
                  <option value="1000000">10 lac</option>
                  <option value="2000000">20 lac</option>
                  <option value="3000000">30 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="5000000">50 lac</option>
                  <option value="6000000">60 lac</option>
                  <option value="7000000">70 lac</option>
                  <option value="8000000">80 lac</option>
                  <option value="9000000">90 lac</option>
                  <option value="10000000">1 Cr</option>
                  <option value="20000000">2 Cr</option>
                  <option value="30000000">3 Cr</option>
                  <option value="40000000">4 Cr</option>
                  <option value="50000000">5 Cr</option>
                  <option value="60000000">6 Cr</option>
                  <option value="70000000">7 Cr</option>
                  <option value="80000000">8 Cr</option>
                  <option value="90000000">9 Cr</option>
                  <option value="100000000">10 Cr</option>
                  <option value="150000000">15 Cr</option>
                  <option value="200000000">20 Cr</option>
               </select>
            </div>
         </div>
         <input type="submit" name="h_search" value="search property" class="btn">
      </form>

   </section>

</div>

<!-- home section ends -->

<!-- services section starts -->

<section class="services">

     <h1 class="heading">our services</h1> 

     <div class="box-container">

         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>buy house</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat autem quasi ex ratione cum possimus incidunt.</p>
         </div>

         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>rent house</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat autem quasi ex ratione cum possimus incidunt.</p>
         </div>

         <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>sell house</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat autem quasi ex ratione cum possimus incidunt.</p>
         </div>

         <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>flats and buildings</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat autem quasi ex ratione cum possimus incidunt.</p>
         </div>

         <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>shops and malls</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat autem quasi ex ratione cum possimus incidunt.</p>
         </div>

         <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>24/7 service</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat autem quasi ex ratione cum possimus incidunt.</p>
         </div>

     </div> 

</section>

<!-- services section ends -->

<!-- listings section starts -->

<section class="listings">

   <h1 class="heading">last listings</h1>

   <div class="box-container">

   <?php
      $select_listings = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
      $select_listings->execute();
      if($select_listings->rowCount() > 0){
         while($fetch_listing = $select_listings->fetch(PDO::FETCH_ASSOC)){

         $property_id = $fetch_listing['id'];

         $select_users = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_users->execute([$fetch_listing['user_id']]);
         $fetch_users = $select_users->fetch(PDO::FETCH_ASSOC);

         if(!empty($fetch_listing['image_02'])){
            $count_image_02 = 1;
         }else{
            $count_image_02 = 0;
         } 

         if(!empty($fetch_listing['image_03'])){
            $count_image_03 = 1;
         }else{
            $count_image_03 = 0;
         } 

         if(!empty($fetch_listing['image_04'])){
            $count_image_04 = 1;
         }else{
            $count_image_04 = 0;
         } 

         if(!empty($fetch_listing['image_05'])){
            $count_image_05 = 1;
         }else{
            $count_image_05 = 0;
         }

         $total_images = (1 + $count_image_02 + $count_image_03 + $count_image_04 + $count_image_05);

         $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? AND user_id = ?");

         $select_saved->execute([$property_id, $user_id]);

   ?>
   <form action="" method="POST">
      <div class="box">
            <input type="hidden" name="property_id" value="<?= $property_id; ?>">
            <?php if($select_saved->rowCount() > 0){ ?>
            <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>saved</span></button>   
            <?php }else{ ?>
            <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>save</span></button>   
            <?php } ?>
            <div class="thumb">
               <p><i class="fas fa-image"></i><span><?= $total_images; ?></span></p>
               <img src="uploaded_files/<?= $fetch_listing['image_01']; ?>" alt="">
            </div>
            <div class="admin">
                <h3><?= substr($fetch_users['name'], 0, 1); ?></h3>
                <div>
                   <p><?= $fetch_users['name']; ?></p>
                   <!-- <span><?= $fetch_listing['date']; ?></span> -->
                </div>
            </div>
         </div>
         <div class="box">
             <p class="price"><i class="fas fa-indian-rupee-sign"></i><span><?= $fetch_listing['price']; ?></span></p>
             <h3 class="name"><?= $fetch_listing['property_name']; ?></h3>
             <p class="address"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_listing['address']; ?></span></p>
             <div class="flex">
                 <p><i class="fas fa-house"></i><span><?= $fetch_listing['type']; ?></span></p>
                 <p><i class="fas fa-tag"></i><span><?= $fetch_listing['offer']; ?></span></p>
                 <p><i class="fas fa-bed"></i><span><?= $fetch_listing['bhk']; ?> BHK</span></p>
                 <p><i class="fas fa-trowel"></i><span><?= $fetch_listing['status']; ?></span></p>
                 <p><i class="fas fa-couch"></i><span><?= $fetch_listing['furnished']; ?></span></p>
                 <p><i class="fas fa-maximize"></i><span><?= $fetch_listing['carpet']; ?></span></p>
             </div>
             <div class="flex-btn">
                <a href="view_property.php?get_id=<?= $property_id; ?>" class="btn">view property</a>
                <input type="submit" value="send enquiry" name="send" class="btn">
             </div>
         </div>
   </form>
   <?php 
     }
   }else{
       echo '<p class="empty">no property listed yet!</p>';
   }
   ?>         

   </div>

   <div style="margin-top: 2rem; text-align: center;"> 
      <a href="listings.php" class="inline-btn">view all</a>
   </div>

</section>

<!-- listings section ends -->











<!-- footer section starts -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->


<!-- sewwtalert cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>
    
</body>
</html>