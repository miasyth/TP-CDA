<html>




<body>
  <?php

  ?>
  <br>
  <br>

  <div >
    <div>
      <h1>Creation Client</h1>
    </div>
    <br>

    <div>
      <form method="POST" action="./faireCreationClient.php">
        <div>Nom : <input required type="text" name="nom" placeholder="Nom"></div>
        <div>Prenom : <input required type="text" name="prenom" placeholder="Prenom"></div>
        <div>Date de naissance : <input required type="date" name="date_naissance"></div>
        <div>Telephone : <input required type="tel" pattern="0[0-9]{9}" name="telephone" placeholder="Telephone"></div>
        <div>Email : <input required type="email" name="email" placeholder="Email"></div>
        <div>Adresse : <input required type="text" name="adresse" placeholder="Adresse"></div>
        <div><button>Envoyer</button></div>
      </form>
    </div>
  </div>
</body>

</html>