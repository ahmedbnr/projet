<?PHP
include "../core/produitsC.php";
$produits1C=new ProduitsC();
$listeProduits=$produits1C->afficherProduits();

//var_dump($listeProduits->fetchAll());
?>
<table border="1">
<tr>
<td>Ref_produit</td>
<td>Nom</td>
<td>Quantite</td>
<td>Prix</td>
<td>Disponible</td>
<td>Code_cat</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeProduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['ref_produit']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['disponible']; ?></td>
	<td><?PHP echo $row['code_cat']; ?> </td>
	<td>
		<form method="POST" action="supprimerProduits.php">
			<input type="submit" name="supprimer" value="supprimer">
			<input type="hidden" value="<?PHP echo $row['ref_produit']; ?>" name="ref_produit">
		</form>
	</td>
	<td>
		<a href="modifierProduits.php?ref_produit=<?PHP echo $row['ref_produit']; ?>">Modifier</a>
	</td>
	</tr>
	<?PHP
}
?>


</table>