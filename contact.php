<? 
if (!empty($_POST['cmd'])) {
  $title = "Printpencil - Commande";
  $table=[
    'form'=>'Commande',
    'mail'=>'Prendre Rendez-Vous'
  ]; 
}
else { 
  $table=[
    'form'=>'Message',
    'media'=>'Réseaux Sociaux',
    'mail'=>'Mail'
  ]; 
  $title = "Printpencil - Contact";
}

require 'header.php';
?>
<div class="content container-fluid">
  <h1 align="center"><?if (isset($_POST['cmd'])):echo "Commander sur Printprencil";else :echo "Contacter Printprencil";endif; ?></h1><hr>
  <div class="row">
    <?nav_stacked_menu($table);?>
    <div class="tab-content col-md-10">
      <div class="tab-pane active" id="form">
        <form  action="form.php" method="post">
          <div class="form-group">
            <label for="a">Nom :</label>
            <input id="a" required="required" class="form-control" type="text" name="nom">  
          </div>
          <div class="form-group">
            <label for="b">Prénom :</label>
            <input id="b" required="required" class="form-control" type="text" name="pnom">  
          </div>
          <div class="form-group">
            <label for="e">Entreprise ou Organisation :</label>
            <input id="e" class="form-control" type="text" name="org">
          </div>
          <div class="form-group">
            <label for="c">Courriel :</label>
            <input id="c" required="required" class="form-control" type="email" name="email">  
          </div>
          <div class="form-group">
            <label for="d"><?if (isset($_POST['cmd'])):echo "Description de la Commande"; else :echo "Message";endif; ?></label>
            <textarea rows="6" required="required" id="d" class="form-control" name="msg"></textarea>  
          </div>
          <a href="#"><button id="btn" class="btn btn-primary" name ="submit" type="submit"><?if (isset($_POST['cmd'])):echo "Passer la commande";else :echo "Envoyer";endif; ?></button><br><br></a>
        </form> 
      </div>
      <? if (empty($_POST['cmd'])): ?>
        <div class="tab-pane" id="media">
          <div class="box">
           <div class="container">
            <div class="row">          
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 timeline">
                <div class="box-part text-center">
                  <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                  <div class="title">
                    <h3>Twitter</h3>
                  </div>
                  <a rel="nofollow" class="twitter-timeline" data-height="550" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> 
                </div>
              </div>   
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="box-part text-center">
                  <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                  <div class="title">
                    <h3>Facebook</h3>
                  </div>
                  <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">
                      <a rel="nofollow" href="https://www.facebook.com/facebook">Facebook</a>
                    </blockquote>
                  </div>
                </div>
              </div> 
            </div>    
          </div>
        </div>
      </div>
    <? endif ?>
    <div class="tab-pane" id="mail">
      <div class="container">
        <p><h2><?if (isset($_POST['cmd'])):echo "Prenez rendez-vous"; else :echo "Joignez nous";endif; ?> selon vos besoins</h2><br>
          <h4>Donnez les modalités du rendez vous par mail, nous y donnerons suite dans les meilleures délais</h4>
          <b>Service après vente : </b> <a rel="nofollow" href="mailto:sav@printpencil.yn.fr">sav@printpencil.yn.fr</a><br><br>
          <b>Service commercial : </b><a rel="nofollow" href="mailto:contact@printpencil.yn.fr">contact@printpencil.yn.fr</a>
          <h4> </h4>
        </p>
      </div>
    </div>
  </div>
</div>
</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?  require 'footer.php'; ?>