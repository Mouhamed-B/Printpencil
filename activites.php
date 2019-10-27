<? $title = 'Printpencil - Activités';
require 'header.php'; 
$table = [
    'prod'=>'Produits',
    'serv'=>'Services'
];

?>

<div class="content container-fluid">
    <h1 align="center">Activités de Printpencil</h1><hr>
    <div class="row">
        <h2>Nos services</h2>
        <ul class="list-group-item-info">
           <li class="well" id="cvis">
             <h4>Cartes de visites</h4>
             <p>
                 <img src="./images/cvis2.png" alt="Carte de visites Printpencil" class="img-responsive">
                 Les cartes de visite sont des cartes contenant des informations commerciales sur une entreprise ou un particulier. Ils sont partagés lors des introductions formelles à titre de commodité et d’aide à la mémoire.Prenez rendez-vous avec l'un de nos designers pour soummettre ou créer un modèle et soyez livres dans les temps. <br>
                 <a href="./contact.php#cmd"><form action="./contact.php#cmd" method="post"><button class="btn btn-primary" type="submit" name="cmd" value="cvis">Commander</button></form></a>
             </p>
           </li>
           <li class="well" id="fly">
               <h4>Flyers</h4>
               <p>
                   <img src="./images/fly1.jpg" alt="flyer Printpencil" class="img-responsive">
                   Le tract publicitaire ou flyer est très courants dans le commerce. L’appellation de « tract publicitaire » est un terme générique utilisé pour désigner un feuillet volant imprimé destiné à faire la promotion d’une activité, d’un nouveau produit, d’une offre commerciale, d’une ouverture de magasin et autres. Plus globalement, le tract publicitaire sert à mettre en valeur les qualités d'un produit, d'un appareil ou d'un service à des fins publicitaires.Ainsi donnez une image positive a votre organisation. <br>
                   <a href="./contact.php#cmd"><form action="./contact.php#cmd" method="post"><button class="btn btn-primary" type="submit" name="cmd" value="fly">Commander</button></form></a>
               </p>
           </li>
           <li class="well" id="band">
               <h4>Banderoles</h4>
               <p>
                   <img class="img-responsive" src="./images/band.jpg" alt="Bannière Printpencil">
                   Une banderole peut être utilisée dans différentes situations comme les événements extérieurs (marchés, manifestations, festivals, concerts), les événements intérieurs (foires, salons, expositions) ou à l’occasion d’ouvertures de magasin, pour de la signalisation d’entrepôt ou encore pour recouvrir des façades d’immeubles. <br>
                   <a href="./contact.php#cmd"><form action="./contact.php#cmd" method="post"><button class="btn btn-primary" type="submit" name="cmd" value="band">Commander</button></form></a>
               </p>
           </li>
           <li class="well" id="floc">
               <h4>Flocage</h4>
               <p>
                   <img src="./images/floc.jpg" class="img-responsive" alt="Flocage Printpencil">
                   Le flocage est un processus de dépôt de fibres très fines, le floc, sur une surface préalablement enduite d'une colle. Le terme peut également se référer à la texture produite par le procédé : un effet suédé, feutre ou velours sur la surface floquée. <br>
                   <a href="./contact.php#cmd"><form action="./contact.php#cmd" method="post"><button class="btn btn-primary" type="submit" name="cmd" value="floc">Commander</button></form></a>
               </p>               
           </li>
     </ul>
 </div> 
</div>
<div class="tab-pane" id="serv">

</div>
</div>
</div>
</div>
<? require 'footer.php'; ?>