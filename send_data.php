
<?php

function fill_data(){
  try{
    $base = new PDO(
        'mysql:host=172.28.100.76;dbname=storage','lyes_remote','frik33dz');
  } catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  session_start();
  if(isset($_POST['author']) && isset($_POST['message'])){
    $auteur = $_POST['author'];
    $message = $_POST['message'];
    $sql = $base ->prepare("INSERT INTO chat (author, chat) VALUES (?,?)");
    $sql->execute(
        array($auteur,$message));
    }
else{
  echo('NO POST DATA');
}
}

    fill_data();
?>

