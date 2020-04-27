
<?php
$civilites = array(
		 "Monsieur" => "M." ,
		  "Madame" => "Mme" ,
		"Mademoiselle" => "mlle"
	) ;
	
$framworksphp = array(
		"1" => "Symfony " ,
		"2" => "CodeIgniter",
		"3" => "FuelPHP",
		"4" => "CakePHP",
		"5" => "Laravel"
	) ;
$frame=$_GET['framworks'] ;

$niveauphp = array (
		"deb" => "Débutant",
		"moy" => "Moyen" ,
		"bon" => "Bon",
		"ex" => "Exellent"
	);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice 8</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
	<h2>	
		Votre candidature:<br/>
	
	</h2> 
	<table >
			
			<tr> 
				<td> Civilité </td>
				<td> <?php echo $civilites[$_GET['civilite']]?></td>
			</tr>
			<tr> 
				<td> Nom </td>
				<td> <?php echo strtoupper($_GET["nom"] )?> </td>
			</tr>
			<tr> 
				<td><?php if (empty($_GET["prenom"]))
							{
								echo "<font color=red>Prénom<br/></font>" ;
								}
								
						  else {
								echo "Prénom";
						  }
								 ?> 
								 </td>
				<td><?php echo ucfirst($_GET["prenom"]) ?></td>
					
			<tr>
				<td> Date de naissance </td>
				<td> <?php echo $_GET["date"] ?> </td>
			</tr>
			<tr>
				<td> Téléphone </td>
				<td> <?php echo $_GET["telephone"] ?> </td>
			</tr>
			<tr>
				<td> <?php if (empty($_GET["email"]))
							{
								echo "<font color=red>Adresse électronique<br/></font>";
								}
							else {
								echo "Adresse électronique";
							}
								 ?>
								 </td>
				<td> <?php echo $_GET["email"] ?> </td>
			</tr>
			<tr>
				<td> Niveau en PHP </td>
				<td> <?php echo $niveauphp[$_GET['niveau']] ?> </td>
			</tr>
			<tr>
				<td> Frameworks PHP </td>
				<td> <?php foreach($frame as $unframes)
							{
								echo "<li>".$framworksphp[$unframes]."</li>" ; 
								
							}
							?> 
								</td>
								
			</tr>
			<tr>
				<td> Moi </td>
				<td> <?php echo $_GET["moi"] ?> </td>
			</tr>
		</table>
 
  <br/>
  <br/>
		<a href="saisieCandidature.html">
				<?php
				echo "Retour au formulaire";
				?>
		</a>
		
	</body>
</html>
