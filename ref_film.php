<!DOCTYPE html>
<html>

<head>
  <meta charset="latin1">
  <meta name="viewport" content="width=device-width">
  <title>Films</title>
</head>
<body>
  <h1>Films</h1>
  <table>
  <thead>
    <tr>
      <th>Titre</th>
      <th>Annee</th>
      <th>Genre</th>
      <th>Realisateur</th>
    </tr>
  </thead>
    <?php
		
		//Plusieurs fichiers : +0.5		
		//Fonctionnement : +1
		//Code Clair : +1
		//Plusieurs commits : +0.5
		
		//4/4
		
		
$link=mysqli_connect("dwarves.iut-fbleau.fr","nguyen","080382Alex","nguyen");
  if(!$link){
    die("<p>connexion impossible</p>");
  }
  $resultat=mysqli_query($link,"SELECT idFilm,titre,annee,genre,nom FROM Film f JOIN Artiste a ON f.idMes = a.idArtiste");
  if($resultat){
    $i = 1;
    while($film=mysqli_fetch_assoc($resultat)){
      echo "<tr>";
	    echo "<td><a href=\"./fiche.php?film=$i\">".$film['titre']."</a></td>";
	    echo "<td>".$film['annee']."</td>";
    	echo "<td>".$film['genre']."</td>";
	    echo "<td>".$film['nom']."</td>";
	    echo "</tr>";
      $i = $i + 1;
    }
  }
   else{
        die("<p>Erreur dans l'éxécution de la requête. </p>");
   }
    mysqli_close($link);
?>
  </table>
</body>

</html>