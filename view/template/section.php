

<!-- <section>

  <?php
    /*
  if (isset($_GET['page'])){
    if($_GET['page'] == 'home'){
      include './template/pages/home.php';
    }else if ($_GET['page'] == 'news'){
        include './template/pages/news.php';
    }else if ($_GET['page'] == 'about'){
      include './template/pages/about.php';
    }else if ($_GET['page'] == 'contact'){
        include './template/pages/contact.php';
      }
  }else{
    include './template/pages/home.php';
  }
     */
   ?>
-->

 <!-- </section> -->



 <section>
   <?php
   // la meme chose qu'en haut mais en une seule ligne
   //isset = ci elle est attribué alors

   // on inclu le fichier php correspondant a la valeur passer dans l'url
   //si la cle page existe dans le tableau $_GET
   if (isset($_GET['page'])){
       include '../view/pages/'.$_GET['page'].'.php';
     }else{
       include './template/pages/home.php';
   }
    ?>
  </section>
