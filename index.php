
<?php 
$data = file_get_contents("https://dummyjson.com/recipes");
$Data = json_decode($data, true);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <script src="script.js"></script>
  
  </form>
   <div class="main">
     <div class="header">
       <div class="header-top">
         <div class="logo">logo</div>
         <div class="search">
           <input type="text" placeholder="Search..">
           <button type="submit"><i class="fa fa-search"><img src="images/search.png" alt="search image" height="20" width="20"></i></button>
         </div>
         <div class="favorites"><i class="fa fa-favorite"><img src="images/star.png" alt="search image" height="20" width="20"></i>favorites</div>
         <div class="profile"><i class="fa fa-profile"><img src="images/signin.png" alt="search image" height="30" width="30"></i></div>
       </div>
       <div class="header-bottom">
         <div class="recipes">recipes</div>
         <div class="tags">tags</div>
         <div class="difficulty">difficulty</div>
       </div>
     </div>
     <div class="block">
       <div class="recipeblocks">
         <div class="mealtest">
            
         </div>
       </div>
     </div>
   </div>
   </div>
     <!-- Sign up design -->
     <form>
       <div class="signup_container"> 
         <div class="test"> </div>
       </div>
     </form>


  
</body>

</html>