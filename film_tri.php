<!DOCTYPE html>
<html>

<head>
  <meta charset="latin1">
  <meta name="viewport" content="width=device-width">
  <title>Films</title>
</head>
<body>
  <h1>Films</h1>
    <FORM>
    <SELECT name="Réalisateur" size="1">
        <?php
$link=mysqli_connect("dwarves.iut-fbleau.fr","nguyen","080382Alex","nguyen");
  if(!$link){
    die("<p>connexion impossible</p>");
  }
  $resultat=mysqli_query($link,"SELECT DISTINCT nom FROM Film f JOIN Artiste a ON f.idMes = a.idArtiste");
  if($resultat){
    while($film=mysqli_fetch_assoc($resultat)){
	    echo "<Option>".$film['nom'];
    }
  }
   else{
        die("<p>Erreur dans l'éxécution de la requête. </p>");
   }
    mysqli_close($link);
?>
    </SELECT>
    </FORM>
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
$link=mysqli_connect("dwarves.iut-fbleau.fr","nguyen","080382Alex","nguyen");
  if(!$link){
    die("<p>connexion impossible</p>");
  }
  $resultat=mysqli_query($link,"SELECT titre,annee,genre,nom FROM Film f JOIN Artiste a ON f.idMes = a.idArtiste");
  if($resultat){
    while($film=mysqli_fetch_assoc($resultat)){
      echo "<tr>";
	    echo "<td>".$film['titre']."</td>";
	    echo "<td>".$film['annee']."</td>";
    	echo "<td>".$film['genre']."</td>";
	    echo "<td>".$film['nom']."</td>";
	    echo "</tr>";
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