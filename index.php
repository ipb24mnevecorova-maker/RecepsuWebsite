
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

   <div class="main">
     <div class="header">
       <div class="header-buttons">
         <div class="logo">logo</div>
         <div class="buttons">
           <div class="home">about us</div>
          


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
</body>

</html>