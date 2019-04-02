<?PHP
include "../core/categoriesC.php";
$categories1C=new CategoriesC();
$listeCategories=$categories1C->afficherCategories();

//var_dump($listeProduits->fetchAll());
?>
<table border="1">
<tr>
<td>Code_cat</td>
<td>Nom_cat</td>
<td>Description</td>
</tr>

<?PHP
foreach($listeCategories as $row){
	?>
	<tr>
	<td><?PHP echo $row['code_cat']; ?></td>
	<td><?PHP echo $row['nom_cat']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><form method="POST" action="supprimerCategories.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['code_cat']; ?>" name="code_cat">
	</form>
	</td>
	<td><a href="modifierCategories.php?code_cat=<?PHP echo $row['code_cat']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>