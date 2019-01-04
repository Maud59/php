<!--/**
 * Created by PhpStorm.
 * User: dev
 * Date: 04/01/19
 * Time: 09:44
 *
 * EXERCICE : Créer une page avec div de couleur et le background doit changer de couleurs en fonction
 * du lien. La préférence de couleur doit être enregistrée dans le cookie.
 */-->
<?php
if (isset($_GET['couleur']) && $_GET['couleur'] !== null){
    $color = $_GET['couleur'];
    setcookie('couleur', $color);
}  else {
    $color='white';
}

/* CORRECTION : (avec sécurisation du cookie pour éviter n'importe quelle entrée)


$colors = ['yellow','red','royalblue', 'green'];
$color = $_GET['color']??'';

if($color !==''){
    if(in_array($color,$colors)){
        setcookie(name:'color',$color);
        header(string:'Location:cookie.php'); // Evite le rechargement de la page(fait en auto)
    }
}
if(isset($_COOKIE['color])&& in_array($_COOKIE['color'],$colors)){ // On vérifie que nos données sont dans le tableau
    $bgColor=$_COOKIE['color'];
}*/
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Préférences cookies</title>
</head>
<body style="background-color:<?php echo $_COOKIE['couleur'] ?>;">

 <a href="?couleur=cadetblue">
     <div class="carre" id="bleu" style="background-color: cadetblue; height : 100px; width :100px; display :inline-block; border : 2px solid white;">
     </div>
 </a>
 <a href="?couleur=gold">
     <div class="carre" id="jaune" style="background-color:gold; height : 100px; width :100px; display :inline-block; border : 2px solid white;">
     </div>
 </a>
 <a href="?couleur=indianred">
     <div class="carre" id="rouge" style="background-color:indianred; height : 100px; width :100px; display :inline-block; border : 2px solid white;">
     </div>
 </a>
 <a href="?couleur=yellowgreen">
     <div class="carre" id="vert" style="background-color:yellowgreen; height : 100px; width :100px; display :inline-block; border : 2px solid white;">
     </div>
 </a>

</body>
</html>

