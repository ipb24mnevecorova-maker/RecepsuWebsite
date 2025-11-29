
<?php 
$data = file_get_contents("https://dummyjson.com/recipes");
$Data = json_decode($data, true);

$allTags = [];
foreach ($Data['recipes'] as $recipe) {
    if (!empty($recipe['tags'])) {
        $allTags = array_merge($allTags, $recipe['tags']);
    }
}
$uniqueTags = array_unique($allTags);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Cozy Kitchen</title>
  <link href="style.css" rel="stylesheet">
  <script src="script.js"></script>
</head>

<body>
   <div class="main">
    <div class="sidebar">
        <div class="stickysidebar">
            <div class="logo">
              <div class="cozy">𝗖𝗼𝘇𝘆</div>
              <div class="kitchen">Ｋｉｔｃｈｅｎ</div>
            </div>
            <div class="type">
              <p>Tags</p>
              <div class="typestag">
              <?php foreach ($uniqueTags as $tag) {echo "<span class='tag' data-tag='$tag'>$tag</span><br>";} ?>
            </div>
          </div>
        </div>

      </div>
    <div class="mainblock">
     <div class="header">
       <div class="header-top">
         <div class="search">
              <input type="text" id="recipeSearch" placeholder="Search..">
              <button type="submit"><i class="fa fa-search"><img src="images/search.png" alt="search image" height="20" width="20"></i></button>
          </div>
         
       </div>
       <div class="header-bottom">
          <div class="home" onclick="home()">Home</div>
          
       </div>
     </div>
     <div class="block">
       
        <div class="recipeblock" onclick="fullrecipe(this)" data-id="0">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][0]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][0]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][0]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="1">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][1]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][1]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][1]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="2">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][2]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][2]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][2]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="3">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][3]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][3]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][3]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="4">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][4]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][4]['ingredients']); ?></div>
            <div class="tags "><?php echo implode(" ", $Data['recipes'][4]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="5">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][5]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][5]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][5]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="6">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][6]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][6]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][6]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="7">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][7]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][7]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][7]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="8">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][8]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][8]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][8]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="9">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][9]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][9]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][9]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="10">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][10]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][10]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][10]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="11">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][11]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][11]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][11]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="12">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][12]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][12]['ingredients']); ?></div>
            <div class="tags "><?php echo implode(" ", $Data['recipes'][12]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="13">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][13]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][13]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][13]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="14">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][14]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][14]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][14]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="15">
          <div class="recipe">
            <div class="name"><?php echo $Data['recipes'][15]['name']; ?></div>
            <p>Ingredients</p>
            <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][15]['ingredients']); ?></div>
            <div class="tags"><?php echo implode(" ", $Data['recipes'][15]['tags']); ?></div>
          </div>
        </div>

        <div class="recipeblock" onclick="fullrecipe(this)" data-id="16">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][16]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][16]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][16]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="17">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][17]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][17]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][17]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="18">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][18]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][18]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][18]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="19">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][19]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][19]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][19]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="20">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][20]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][20]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][20]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="21">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][21]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][21]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][21]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="22">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][22]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][22]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][22]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="23">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][23]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][23]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][23]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="24">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][24]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][24]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][24]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="25">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][25]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][25]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][25]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="26">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][26]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][26]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][26]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="27">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][27]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][27]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][27]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="28">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][28]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][28]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][28]['tags']); ?></div>
  </div>
</div>

<div class="recipeblock" onclick="fullrecipe(this)" data-id="29">
  <div class="recipe">
    <div class="name"><?php echo $Data['recipes'][29]['name']; ?></div>
    <p>Ingredients</p>
    <div class="ingredients"><?php echo implode("<br> \n", $Data['recipes'][29]['ingredients']); ?></div>
    <div class="tags"><?php echo implode(" ", $Data['recipes'][29]['tags']); ?></div>
  </div>
</div>


      </div>

      <div class="fullrecipe" data-id="0">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][0]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][0]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][0]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][0]['tags']); ?>
            </div>
          </div>
        </div>
      </div>  

      <div class="fullrecipe" data-id="1">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][1]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][1]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][1]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][1]['tags']); ?>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="fullrecipe" data-id="2">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][2]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][2]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][2]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][2]['tags']); ?>
            </div>
          </div>
        </div>
      </div>  

      <div class="fullrecipe" data-id="3">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][3]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][3]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][3]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][3]['tags']); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="fullrecipe" data-id="4">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][4]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][4]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][4]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][4]['tags']); ?>
            </div>
          </div>
        </div>
      </div>  

      <div class="fullrecipe" data-id="5">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][5]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][5]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][5]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][5]['tags']); ?>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="fullrecipe" data-id="6">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][6]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][6]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][6]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][6]['tags']); ?>
            </div>
          </div>
        </div>
      </div>  

      <div class="fullrecipe" data-id="7">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][7]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][7]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][7]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][7]['tags']); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="fullrecipe" data-id="8">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][8]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][8]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][8]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][8]['tags']); ?>
            </div>
          </div>
        </div>
      </div>  

      <div class="fullrecipe" data-id="9">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][9]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][9]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][9]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][9]['tags']); ?>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="fullrecipe" data-id="10">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][10]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][10]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][10]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][10]['tags']); ?>
            </div>
          </div>
        </div>
      </div>  

      <div class="fullrecipe" data-id="11">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][11]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][11]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][11]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][11]['tags']); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="fullrecipe" data-id="12">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][12]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][12]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][12]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][12]['tags']); ?>
            </div>
          </div>
        </div>
      </div>  

      <div class="fullrecipe" data-id="13">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][13]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][13]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][13]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][13]['tags']); ?>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="fullrecipe" data-id="14">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][14]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][14]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][14]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][14]['tags']); ?>
            </div>
          </div>
        </div>
      </div>  

      <div class="fullrecipe" data-id="15">
        <div class="fullblock">
          <div class="fullname">
            <?php echo $Data['recipes'][15]['name']; ?>
          </div>
          <div class="ingandins">
            <div class="ingred">
              <p>Ingredients</p>
              <?php echo implode("<br> \n", $Data['recipes'][15]['ingredients']); ?>
            </div>
            <div class="instructions">
              <p>Instructions</p>
              <?php echo implode("<br> \n", $Data['recipes'][15]['instructions']); ?>
            </div>
            <div class="fulltags">
                <?php echo implode(" ", $Data['recipes'][15]['tags']); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="fullrecipe" data-id="16">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][16]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][16]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][16]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][16]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="17">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][17]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][17]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][17]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][17]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="18">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][18]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][18]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][18]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][18]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="19">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][19]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][19]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][19]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][19]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="20">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][20]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][20]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][20]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][20]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="21">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][21]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][21]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][21]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][21]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="22">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][22]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][22]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][22]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][22]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="23">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][23]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][23]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][23]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][23]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="24">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][24]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][24]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][24]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][24]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="25">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][25]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][25]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][25]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][25]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="26">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][26]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][26]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][26]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][26]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="27">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][27]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][27]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][27]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][27]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="28">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][28]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][28]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][28]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][28]['tags']); ?>
      </div>
    </div>
  </div>
</div>

<div class="fullrecipe" data-id="29">
  <div class="fullblock">
    <div class="fullname">
      <?php echo $Data['recipes'][29]['name']; ?>
    </div>
    <div class="ingandins">
      <div class="ingred">
        <p>Ingredients</p>
        <?php echo implode("<br> \n", $Data['recipes'][29]['ingredients']); ?>
      </div>
      <div class="instructions">
        <p>Instructions</p>
        <?php echo implode("<br> \n", $Data['recipes'][29]['instructions']); ?>
      </div>
      <div class="fulltags">
          <?php echo implode(" ", $Data['recipes'][29]['tags']); ?>
      </div>
    </div>
  </div>
</div>
        
       
      
      
     </div>
      
   </div>
  
     


  
</body>

</html>