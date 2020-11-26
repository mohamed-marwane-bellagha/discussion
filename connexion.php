<?php
include_once('./inc/header.php')
?>
<main class="main">
    <form action="connexion.php" method="get"  class="styleform">
        <fieldset class="stylefieldset">

            <?php
            if(!isset($_SESSION['login'])){
              echo  " <label for='login'>Login:</label>
            <input type='text' id='login' name='login'>
            <label for='password'>Password:</label>
            <input type='password' id='password' name='password'>
            <button type='submit' name='submit' class='btn btn-primary mybtn'>Connexion</button>";
            }else{
                echo "<button type='submit' name='profil' class='btn btn-primary'>Modifie ton profil</button>";
                echo "<input type='submit' name='discussion' value='Viens discuter' class='btn btn-primary mybtn'>";
                echo "<input type='submit' name='disconnect' value='Deco' class='btn btn-primary mybtn'>";
                    if(isset($_GET['profil'])){
                        header("Location:profil.php");
                    }
                    if(isset($_GET['discussion'])){
                        header("Location:discussion.php");
                    }
                    if(isset($_GET['disconnect'])){
                    session_destroy();
                    header("Location:connexion.php");
                }
            }

            if(isset($_GET['submit'])){
                foreach ($_GET as $key=>$value){
                    if($key=="login"){
                        $login=$value;
                    }
                    if($key=="password"){
                        $password=$value;
                    }
                }
                $req="SELECT * FROM `utilisateurs`";
                $query=mysqli_query($db,$req);
                $all_results=mysqli_fetch_all($query);
                for($i=0;isset($all_results[$i]);$i++){
                    if($all_results[$i][1]==$login && password_verify($password, $all_results[$i][2])){
                        $_SESSION['id']=$all_results[$i][0];
                        $_SESSION['login']=$login;
                        header("Location:connexion.php");
                        ;
                    }
                }
            }

            ?>
        </fieldset>
    </form>
</main>
<?php
include_once('./inc/footer.php')
?>