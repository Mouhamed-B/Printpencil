<? if (isset($_POST['submit'])):
  	$nom = $_POST['nom'].' '.$_POST['pnom'];
    $email = $_POST['email'];
    if(isset($_POST['org'])):$org = $_POST['org'];else : $org = "\b\b";endif;
    $message = $_POST['msg'];
    $date =date("d/m/Y");
    $time=date("H:i:s");
    $monfichier = fopen("fichier.txt","a+");
    fputs($monfichier,"$date à $time : $nom, $email, $org,\"$message\"\n");
   endif;
header("Location: ./contact.php");
?>