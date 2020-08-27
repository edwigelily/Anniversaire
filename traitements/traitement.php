<?php

    /*****************************************
  *  Vérification du formulaire
  *****************************************/
  // Si le tableau $_POST existe alors le formulaire a été envoyé
  if(!empty($_POST) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["sexe"]) && !empty($_POST["tel"]) && !empty($_POST["invite"])){
    
    echo("Les champs ne sont vides");
      
}else{
    //récupérer le nom
    $nom = strip_tags($_POST['nom']) ;

    //récupérer le prénom
    $prenom = strip_tags($_POST['prenom']);

    //récupérer le sexe
    $sexe = strip_tags($_POST['sexe']);

    //récupérer le numéro de téléphone 
    $numTel = strip_tags($_POST['tel']);

    //récupérer le nombre d'invité
    $nombreInvite = strip_tags($_POST['invite']);

    echo ("Tous les champs sont remplis");
    
}

?>