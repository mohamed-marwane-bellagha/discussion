<?php
include_once('./inc/header.php')
?>
<main class="main">
    <div class="jumbotron">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">Ce site Web conçu en php est un simple forum de discussion avec un module de connexion.</p>
        <hr class="my-4">
        <p>Essayant d'être original et de bien présenter, nous testons un nouveau design.</p>

    </div>
    <div class="cardcontainer">
        <div class="card mb-3">
            <h3 class="card-header">Un module d'inscription</h3>
            <div class="card-body">
                <h5 class="card-title">Pour vous inscrire </h5>
                <h6 class="card-subtitle text-muted">Avec quelques conditions en php</h6>
            </div>
            <img>
            <div class="card-body">
                <p class="card-text">Avant de pouvoir utiliser et converser avec les autres memebres, il est importabt et nécessaire de s'inscrire au site web.</p>
                <a href="inscription.php" class="card-link">Inscrivez-vous</a>
            </div>

        </div>
        <div class="card mb-3">
            <h3 class="card-header">Un module de connexion</h3>
            <div class="card-body">
                <h5 class="card-title">Pour se connecter</h5>
                <h6 class="card-subtitle text-muted">Il faudra tout d'abord s'inscrire</h6>
            </div>
            <img>
            <div class="card-body">
                <p class="card-text">Vous pourrez si vous entrez les bonnes informations vous connectez et accéder au changement des informations de votre profil.</p>
                <a href="connexion.php" class="card-link">Connectez-vous</a>

            </div>
        </div>
        <div class="card mb-3">
            <h3 class="card-header">Forum de discussion</h3>
            <div class="card-body">
                <h5 class="card-title">Le Saint Graal, vous pouvez désormais discuter avec les autres utilisateurs</h5>
                <h6 class="card-subtitle text-muted">Ajouter votre petit grain de sel au débat</h6>
            </div>
            <img>
            <div class="card-body">
                <p class="card-text">Tout est bon, vous discuter, répondez aux autres.</p>
                <a href="discussion.php" class="card-link">Discuter</a>
            </div>
        </div>

    </div>
</main>
<?php
include_once('./inc/footer.php')
?>
