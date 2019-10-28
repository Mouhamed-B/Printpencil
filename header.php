<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?if (isset($title)): echo $title;else :echo "Printpencil";endif;?>
</title>
<meta name="description" content="<?php echo $description ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link rel="apple-touch-icon" sizes="57x57" href="./apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="./apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="./apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="./apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="./apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="./apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="./apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="./apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="./apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="./android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="./favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
<link rel="manifest" href="./manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="./ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<?if ($title!=='Printpencil - Acceuil'):include 'functions.php';endif;?>

  </head>
  <body>
    <div id="header" class=" navbar-static-top container-fluid ">
        <nav class="navbar navbar-inverse row mgb ">
            <div class="navbar-header row hidden-md hidden-lg ">
                <div id="img" class="col-md-2 col-lg-2 col-xs-4">
                    <a href="."><img alt="printpencil" class="img-responsive" src="./images/téléchargement1.jpg"></a>
                </div>
                <button class="navbar-toggle " data-toggle="collapse" data-target="#menu" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="img" class="col-md-2 col-lg-2 hidden-xs">
                <a href="."><img class="img-responsive" alt="printpencil" src="./images/téléchargement1.jpg"></a>
            </div>
            <div id="menu" class="collapse navbar-collapse container">
                <ul id="ind_ul" class=" nav navbar-nav navbar-right ">
                <!-- <li class="col-md-2 col-lg-2">
                             <div><img class="img-responsive" src="./images/téléchargement.jpg"></div>
                         </li> -->
                         <li class=""><a href="./index.php"><span class="glyphicon glyphicon-home"></span>  Acceuil</a></li>
                         <li class=""><a href="./apropos.php"><span class="glyphicon glyphicon-info-sign"></span>  A propos</a></li>
                         <li class=""><a href="./activites.php"><span class="glyphicon glyphicon-briefcase"></span>  Activités</a></li>
                         <li class=""><a href="./contact.php"><span class="glyphicon glyphicon-envelope"></span>  Contact</a></li>
                     </ul>
                 </div>
             </nav>
         </div>
