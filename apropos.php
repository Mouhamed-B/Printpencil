<? 
  $title = 'Printpencil - A propos';
  require 'header.php'; 
?>

<div class="content container-fluid">
   <h1 align="center">A propos de Printpencil</h1><hr>
   <div class="row">
      <? $table =[
        'hist' => 'Historique',
        'obj' => 'Objectifs',
        'siege' => 'Siège Social'
      ];
      nav_stacked_menu($table);?>
      <div class="tab-content col-md-10">
        <div class="tab-content">
         <div class="tab-pane active" id="hist">
           <h2>Notre historique</h2><br>
           <p>
               Printpencil est une entreprise fondée en Avril 2016. D'abord installé dans des locaux provisoires, nous avons pu gagner la confiance des sénégalais et nous imposer en tant que concurrent sérieux sur le marché, ainsi jusqu'en obtenir un siège social et de plus grands moyens de production. <br>
               <ul id ="hist_list" class="list-unstyled well">
                   <li><b>Avril 2014 :</b> Fondation en tant que Société Anonyme</li>
                   <li><b>Janvier 2015 :</b> Entrée en fonction du premier PDG : Mouhamed Bakhoum</li>
                   <li><b>Juin 2016 :</b> Etablissement du Siège social</li>
                   <li><b>Octobre 2018 :</b> Mise en place d'une usine d'impression à grande echelle</li>
                   <li><b>Novembre 2018 :</b> Améliorations des  moyens de production : commande de bannières disponible</li>
               </ul> 
           </p>
         </div>
         <div class="tab-pane" id="obj">
           <h2>Nos Objectifs</h2>
           <p>
               <ul id="obj_list" class="list-unstyled well">
                   <li><b>Productivite : </b>Livraison de commandes en tout genres et echelles</li>
                   <li><b>Elargissement : </b>Ouverture a l'international, dans la sous-region africaine</li>
                   <li><b>Cotation de titre de Capital : </b>Entree en Bourse</li>
               </ul>
           </p>
         </div>
         <div class="tab-pane" id="siege">
             <h2 align="">Siege Social</h2><br>
             <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="900" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=sup%20de%20co%20point%20e&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                    Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                </div>
             </div>
         </div>
        </div>
       </div>
    </div>
</div>
<? require 'footer.php'; ?>