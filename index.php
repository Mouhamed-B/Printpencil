<? $title = 'Printpencil - Acceuil'; ?> 
<?require 'header.php'; ?>


<div class="content">   
    <div id="exemple-carrousel" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators"> 
          <li data-target="#exemple-carrousel" data-slide-to="0" class="active"></li> 
          <li data-target="#exemple-carrousel" data-slide-to="1"></li>
          <li data-target="#exemple-carrousel" data-slide-to="2"></li>
          <li data-target="#exemple-carrousel" data-slide-to="3"></li>  
      </ol>
      <div class="carousel-inner">
        <div class="item active">
            <img class="img-responsive" src="./images/cvis2.png" alt="carte de visite printpencil">
            <div class="carousel-caption">
                <h3>Cartes de visites</h3>
                <p>Choisissez ou dessinez vos modèles, nous nous chargeons du reste</p>
                <p><a href="./activites.php#cvis"><button class="btn btn-primary">Plus d’informations</button></a></p>
            </div>
        </div>
        <div class="item">
            <img src="./images/fly1.jpg" class="img-responsive" alt="flyer printpencil">
            <div class="carousel-caption">
                <h3>Flyers</h3>
                <p>Donnez une image positive a votre organisation</p> 
                <p><a href="./activites.php#fly"><button class="btn btn-primary">Plus d’informations</button></a></p> 
            </div>
        </div>
        <div class="item">
            <img src="./images/band.jpg" class="img-responsive" alt="banniere printpencil">
            <div class="carousel-caption">
                <h3>Banderoles</h3>
                <p>Mettez en exergue votre marque et optez pour la visibilite de vos annonces</p> 
                <p><a href="./activites.php#band"><button class="btn btn-primary">Plus d’informations</button></a></p>
            </div>
        </div>
        <div class="item">
        	<img class="img-responsive" src="./images/floc.jpg" alt="flocage printpencil">
        	<div class="carousel-caption">
        		<h3>Flocage</h3>
        		<p>Impregnez avec des motifs ou du texte le support de votre choix</p>
        		<p><a href="./activites.php#floc"><button class="btn btn-primary">Plus d’informations</button></a></p>     
        	</div>
        </div>
       </div>
      <a class="left carousel-control" href="#exemple-carrousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#exemple-carrousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div><br>
    <div class="row">
        <div class="col-md-4 col-md-offset-1 well">
            <h3 align="center">Passer une commande</h3>
            <p align="center">
                Si, parmi notre gamme de service vous connaissez celle qui vous intéresse, passer une commande <br>
                <a href="./contact.php#cmd"><form action="./contact.php#cmd" method="post"><button class="btn btn-primary center-block" type="submit" name="cmd" value="cmd">Commander Maintenant</button></form></a>
            </p>
        </div>
        <div  class=" col-md-4 col-md-offset-2 well">
            <h3 align="center">Prenez rendez vous</h3>
            <p align="center">
                Prenez Rendez-vous avec selon vos besoins <br>
                <a href="./contact.php#mail"><form action="./contact.php#cmd" method="post"><button class="btn btn-primary center-block" type="submit" name="cmd" value="cmd">Commander Maintenant</button></form></a>
            </p>
        </div>
    </div>
</div>
<?php require 'footer.php' ?>