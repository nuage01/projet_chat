
<?php
include_once('DBConnexion.class.php');
function fill_data(){
  session_start();
  // if(isset($_POST['author']) && isset($_POST['message'])){
    if(isset($_SESSION['pseudo']) && isset($_POST['message'])){
    // $auteur = $_POST['author'];
    $auteur = $_SESSION['pseudo'];
    $message = $_POST['message'];
    $empty = '';
    if ($message != $empty){
    $base = DBConnexion::getInstance();
    $sql = $base->vars_query("INSERT INTO chat (author, chat) VALUES (?,?)", array($auteur,$message));
    }
  }
else{
  echo('NO MESSAGE SENT');
}
}
    fill_data();
?>

