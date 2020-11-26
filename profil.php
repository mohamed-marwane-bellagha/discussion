<?php
include_once('./inc/header.php')
?>
<main class="main">
    <?php
    if(isset($_SESSION['login'])) {
        echo "<form action='profil.php' method='get' class='styleform'><fieldset class='stylefieldset'>";
        echo "<label for='login'>Nouveau Login: </label>";
        echo "<input type='text' name='login' id='login' value=" . $_SESSION['login'] . ">";
        echo "<label for='password'>Nouveau Password: </label>";
        echo "<input type='password' name='password' id='password'>";
        echo "<input type='submit' name='submit' value='Modifier ton profil' class='btn btn-primary mybtn'>";
        echo "</fieldset></form>";
    }else{
        header("Location:connexion.php");
    }

    if(isset($_GET['submit'])){
        foreach ($_GET as $key=>$value){
            if($key=="login"){
                $login=mysqli_real_escape_string($db,htmlspecialchars(trim($value)));
            }
            if($key=="password"){
                $password=mysqli_real_escape_string($db,htmlspecialchars(trim($value)));
            }
        }

    if(strlen($password)>0){
    $cryptedpass=password_hash($password,PASSWORD_BCRYPT);
    }else{
        echo "Entrez un password valide";
    }

    $req="SELECT * FROM `utilisateurs`";
    $query=mysqli_query($db,$req);
    $all_results=mysqli_fetch_all($query);
    $signal=0;
    for($i=0;isset($all_results[$i]);$i++){
        if($login==$all_results[$i][1]){
            echo "Ce login a deja été pris";
            $signal=1;
        }
    }
    if($signal==0){
        $req2= "UPDATE `utilisateurs` SET `login`='{$login}', `password`='{$cryptedpass}' WHERE `id`='{$_SESSION['id']}'";
        $query2=mysqli_query($db,$req2);
        header("Location:profil.php");
        $_SESSION['login']=$login;
    }
    }

    ?>
</main>
<?php
include_once('./inc/footer.php')
?>