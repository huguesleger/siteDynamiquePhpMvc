<nav>
<ul>
<?php
/*
chercher dans le dossier : template/pages tous mes fichiers php
on va recup de maniere recurcive les noms des fichiers
on va fabriquer les balises en affectants pour chaque balise la valeur correspondant au nom du fichiers

$sortie = '<li><a href="./index.php?page='.$nomdufichier.'">'.$nomdufichier.'</a></li>';
*/


$repertoirepage = opendir('../view');
if($repertoirepage){
  while(false!==($fichier = readdir($repertoirepage))){
/*
        echo $fichier.'<br>'.
        strpos($fichier,'.php').'<br>'.
        substr($fichier,0,strpos($fichier,'.php')).'<br>';
        */
        $nomdufichier = substr($fichier,0,strpos($fichier,'.php'));
        // si il ya bien un nom de fichier
        if(!empty($nomdufichier)){
          //on fabrique notre lien de page
          $sortie = '<li><a href="./app.php?view='.$nomdufichier.'">'.$nomdufichier.'</a>';
          echo $sortie;
        }
        elseif(!empty($nomdufichier)){
          //on fabrique notre lien de page
          $sortie = '<li><a href="./app.php?view='.$nomdufichier.'">'.$nomdufichier.'</a>';
          echo $sortie;
        }
    }

}else{
  echo 'erreur dans le dossier, ceci est un echo';
}

closedir($repertoirepage);

?>
<!-- <li><a href="./index.php?page=home">home</a></li>
<li><a href="./index.php?page=news">news</a></li>
<li><a href="./index.php?page=contact">contact</a></li>
<li><a href="./index.php?page=about">about</a></li>
</ul> -->
</nav>
