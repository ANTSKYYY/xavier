<!DOCTYPE html>
<html lang="fr" class="rwd">
<head>
  <meta name="google-site-verification" content="0MmnmokV7l4T3PWOean_-8JM10J4Qm_Cyn5MG9Lt7wc" />
  <meta charset="UTF-8">
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
  <meta name="robots" content="noindex">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="style/main.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/jpeg" href="utils/img/favicon.jpg">
  <meta meta name="viewport" content="width=device-width, user-scalable=no" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a706e65759.js" crossorigin="anonymous"></script>
  <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css”>


  <title>Xavier Legall | Accueil</title>
</head>
<body id="bodyy" class="light">

  <?php
    include("utils/structure/header.html")
  ?>



<input type="checkbox" id="toggle">

    <label class="toggle" for="toggle">
        <i class="bx bxs-sun"></i>
        <i class="bx bx-moon"></i>
        <span class="ball"></span>
    </label>

    <!-- JS File -->
    <script type="text/javascript" src="script.js"></script>


<div id="desktop-only">
 <div id="popup-bg" class="desktop-only">
    <div id="popup-content" class="desktop-only">

        <img id="popup-img" class="desktop-only" src="#" alt="" />
    </div>
  
 </div>
</div>
<div id="grille">
  <div class="image-grid" id="img-container">
    

    <?php
      function lister_images($repertoire){
      if(is_dir($repertoire)){
	$repertoire = count($repertoire);
        if($iteration = opendir($repertoire)){
          while(($fichier = readdir($iteration)) !== false){
            if($fichier != "." && $fichier != ".."){
	    
                $fichier_info = finfo_open(FILEINFO_MIME_TYPE);
                $mime_type = finfo_file($fichier_info, $repertoire.$fichier);
                if(strpos($mime_type, 'image/') === 0){
                  echo '<img id="img" class="testtt" src="'.$repertoire.$fichier.'" alt="architecture"> ';
                }
              }
          }
          closedir($iteration);
        }
      }
      }
      lister_images("utils/upload/horizontal/");


      function lister_imagess($repertoire){
        if(is_dir($repertoire)){
            if($iteration = opendir($repertoire)){
	      $i = 0;
	     $num = count($repertoire);
	     while($i < $num){
            while(($fichier = readdir($iteration)) !== false){
              if($fichier != "." && $fichier != ".."){
                  $fichier_info = finfo_open(FILEINFO_MIME_TYPE);
                  $mime_type = finfo_file($fichier_info, $repertoire.$fichier);
                  if(strpos($mime_type, 'image/') === 0){
                    echo '<img id="img" class="image-grid-col-2 image-grid-row-2" src="'.$repertoire.$fichier.'" alt="architecture">';
		      $i++;
                  }
		}
                }
            }
            closedir($iteration);
          }
        }
        }
        lister_imagess("utils/upload/vertical/");
    ?>
  </div>

</div>
<?php
    include("utils/structure/footer.php")
  ?>

<script src="./app.js"></script>
<script src="./mobile.js"></script>
<script src="./dark.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
