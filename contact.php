<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>BetHorse</title>
    <link rel="icon" href="img/icone_chev.png">
    <link href="pricing.css" rel="stylesheet" type="text/css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">
    <script type="text/javascript" src="calcul.js"></script>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!--<script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/popper.js"></script>-->
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://pagecdn.io/lib/mathjs/10.4.0/math.min.js" crossorigin="anonymous"  ></script>
  

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head><header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">BetHorse</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html">Parier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="repartiteur.html">Répartir sa mise</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="optimisation.html">Choisir son gain</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tarif.html">Tarifs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fonctionnement.html">Comment ça marche ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <body class="container">
  <form method="post">
    <table class="table">
        <tr>
          <td><label>Votre email</label></td>
          <td><input type="email" name="email" required placeholder='exemple@gmail.com'><br></td>
        </tr>
        <tr>
          <th><label>Message</label></th>
          <td><textarea name="message" required placeholder='Bonjour ! Merci votre service est top ! Ma question est ...'></textarea><br></td>
        </tr>
    </table>
    <td textalign="center"><input type="Envoyer"></td>
    </form>
    <?php
    if (isset($_POST['message'])) {
        $retour = mail('contact@bethorse.eu', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>