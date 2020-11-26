<?php
include_once('./inc/header.php')
?>
<main class="main">
    <form action="inscription.php" method="GET" class="styleform">
        <fieldset class="stylefieldset">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" placeholder="Entrez un login">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Entrez un password">
            <label for="password2">Confirmation mot de passe:</label>
            <input type="password" id="password2" name="password2" placeholder="Confirmer le password">
            <input type="submit" id="submit" name="submit" value="Inscrivez-moi" class='btn btn-primary mybtn'>

        <?php
        if(isset($_GET['submit'])){
        foreach($_GET as $key=>$values){
            if($key=="login"){
                $login= mysqli_real_escape_string($db,htmlspecialchars(trim($values)));
            }
            if($key=="password"){
                $password= mysqli_real_escape_string($db,htmlspecialchars(trim($values)));
            }
            if($key=="password2"){
                $password2= mysqli_real_escape_string($db,htmlspecialchars(trim($values)));
            }
        }
        $cryptedpass=password_hash($password,PASSWORD_BCRYPT);
        $test=password_verify($password2,$cryptedpass);
        if( password_verify($password2,$cryptedpass) && strlen($login)>0){
            $req="INSERT INTO `utilisateurs`(`login`,`password`)VALUES ('{$login}','{$cryptedpass}')";
            $query=mysqli_query($db,$req);
            header("Location:connexion.php");
        }else{
            echo "Rentrez des informations correctes";
        }
        }
        ?>
        </fieldset>
    </form>
</main>
<?php
include_once('./inc/footer.php')
?>