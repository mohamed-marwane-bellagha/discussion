<?php
include_once('./inc/header.php')
?>
<main class="main">
    <?php
    if(!isset($_SESSION['login'])){
        header("Location:connexion.php");
    }
    $req="SELECT `message`,`date`,utilisateurs.login,`id_utilisateur` FROM `messages` JOIN `utilisateurs` ON messages.id_utilisateur=utilisateurs.id ";
    $query=mysqli_query($db,$req);
    $all_results=mysqli_fetch_all($query);
    $id=0;
    $x=0;
    echo "<div>";
    for($i=0;isset($all_results[$i]);$i++){

            if($id != $all_results[$i][3]){
                $id=$all_results[$i][3];
            $x=$x+1;
            }
            if($x%2==0){
            echo "<div class='card border-info mb-3 mycard' style='max-width: 20rem;'>
  <div class='card-header'>"."Posté le :".$all_results[$i][1]." par ".$all_results[$i][2]."</div>
  <div class='card-body'>
    <p class='card-text'>".$all_results[$i][0]."</p>
  </div>
</div>";
            }else{
                echo "<div class='card border-dark mb-3' style='max-width: 20rem;'>
  <div class='card-header'>"."Posté le :".$all_results[$i][1]." par ".$all_results[$i][2]."</div>
  <div class='card-body'>
    <p class='card-text'>".$all_results[$i][0]."</p>
  </div>
</div>";
    }
    }
    echo "<div>";
    echo "<form action='discussion.php' method='get' class='styleform1'><fieldset class='stylefieldset'>";
    echo "<label for='commentaire'>Lache un msg sur le chat:</label><textarea id='commentaire' name='commentaire' placeholder='Envoie ton msg'></textarea>";
    echo "<input type='submit' id='submit' name='submit' value='Envoyer le msg' class='btn btn-primary'>";
    echo "</fieldset></form>";
    if(isset($_GET['submit'])){
        $db=mysqli_connect('localhost','root','','discussion');
        $commentaire=mysqli_real_escape_string($db,htmlspecialchars(trim($_GET['commentaire'])));
        if(strlen($commentaire)>0){
            $date=date("Y/m/d H:i:s");
            $req2="INSERT INTO `messages`(`message`,`id_utilisateur`,`date`) VALUES ('{$commentaire}','{$_SESSION['id']}','{$date}')  ";
            $query2=mysqli_query($db,$req2);
            header("Location:discussion.php");

        }

    }

    ?>


</main>
<?php
include_once('./inc/footer.php')
?>