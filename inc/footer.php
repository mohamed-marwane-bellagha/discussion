
<footer class="footer">
    <div class="list-group">
        <a href="index.php" class="list-group-item list-group-item-action active">Accueil</a>
        <?php
        if(isset($_SESSION['login'])){
            echo "<a class='list-group-item'><form class='form-inline my-2 my-lg-0' method='post' action='index.php'><button class='btn btn-secondary my-2 my-sm-0 mybtn' type='submit' name='submit'>Deconnexion</button></form></a>";
            echo "<a class='list-group-item' href='discussion.php'>Discussion</a><a class='list-group-item' href='profil.php'>Mon Profil</a></li>";
        }else{
            echo "<a class='list-group-item' href='inscription.php'>Inscription</a><a class='list-group-item' href='connexion.php'>Connexion</a></li>";
        }
        if(isset($_POST['submit'])){
            session_destroy();
            header("Location:index.php");
        }

        ?>
    </div>
</footer>
</body>
</html>