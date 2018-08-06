<?php

include('connection.php');

//Récuper les données de la BDD message et la couleur de la bdd users
$req = $bdd->prepare('SELECT m.pseudo, m.message, m.date, u.color 
                    FROM messages m
                    LEFT JOIN users u ON u.pseudo = m.pseudo
                    ORDER BY id DESC  LIMIT 0, 10');
$req->execute(array());


//afficher les messages avec le pseudo en couleur
$messages = array_reverse($req->fetchAll());

foreach($messages as $message) { ?>
<div class="card mb-0 message"> 
    <div class="card-body">
        <p class="my-0">
            <strong style="color:<?= $message['color'] ?>;">
                <?= $message['pseudo']?>
            </strong>
            : <?= $message['message']?>
            <span class="badge badge-secondary float-right created_at"> <?= $message['date']?></span>
        </p>
    </div>
</div>
<?php } ?>


