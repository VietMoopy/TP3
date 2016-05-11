<!DOCTYPE html>
<html>

<head>
  <meta charset="latin1">
  <meta name="viewport" content="width=device-width">
  <title>Films</title>
</head>
<body>
  </thead>
    <?php
$link=mysqli_connect("dwarves.iut-fbleau.fr","nguyen","080382Alex","nguyen");
  if(!$link){
    die("<p>connexion impossible</p>");
  }
  $idFilm = extract($_GET);
  $resultat=mysqli_query($link,"SELECT idFilm,titre,annee,genre,nom FROM Film f JOIN Artiste a ON f.idMes = a.idArtiste WHERE idFilm = \"$film\"");
  if($resultat){
    while($film=mysqli_fetch_assoc($resultat)){
	    echo "<h1>".$film['titre']."</h1>";
      echo "<br>";
	    echo "<a>Annee ".$film['annee']."</a>";
      echo "<br>";  
    	echo "<a>Genre ".$film['genre']."</a>";
    }
  }
   else{
        die("<p>Erreur dans l'éxécution de la requête. </p>");
   }
    mysqli_close($link);
?>
</body>

</html>