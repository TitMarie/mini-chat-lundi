<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/minichat.css">

    <title>🐱 Mini-chat</title>
</head>
<body>

<nav class="navbar fixed-top navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">🐱 Bienvenue dans le mini-chat !</a>
</nav>

<main>
    <div class="container mt-5">

        <!-- Affichage de chaque message (toutes les données sont protégées par htmlspecialchars) -->
        <section class="row mb-5 my-5">
            <div class="col-12" id="messages">
                <div class="col-12" id="messages-container">
                    <div class="card mb-0 message">
                        <div class="card-body">
                            <p class="my-0">
                                <strong>
                                    ExemplePseudo
                                </strong>
                                : ExempleMessage
                                <span class="badge badge-secondary float-right created_at">2018-01-01 00:00:00</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<div id="talkBar" class="bg-primary">
    <form action="pdo/store.php" method="post">
        <div class="input-group">
            <input type="text"
                   id="pseudo"
                   class="form-control input-group-addon col-2"
                   name="pseudo"
                   placeholder="Pseudo"
                   minlength="2"
                   required>
            <input type="text"
                   id="message"
                   class="form-control col-8"
                   name="message"
                   placeholder="Tape ton message ici"
                   minlength="1"
                   maxlength="255"
                   required>
            <button type="submit" class="btn btn-success col-2">Envoyer</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<script src="js/minichat.js"></script>
</body>
</html>