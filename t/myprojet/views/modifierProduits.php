<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/produits.php";
include "../core/produitsC.php";
if (isset($_GET['ref_produit'])){
	$produitsC1=new ProduitsC();
    $result=$produitsC1->recupererProduits($_GET['ref_produit']);
	foreach($result as $row){
		$ref_produit=$row['ref_produit'];
		$nom=$row['nom'];
		$quantite=$row['quantite'];
		$prix=$row['prix'];
		$disponible=$row['disponible'];
		$code_cat=$row['code_cat'];
?>
<form method="POST">
<table>
<caption>Modifier Produits</caption>
<tr>
<td>Ref_produit</td>
<td><input type="number" name="ref_produit" value="<?PHP echo $ref_produit ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="number" name="disponible" value="<?PHP echo $disponible ?>"></td>
</tr>
<tr>
<td>Code_cat</td>
<td><input type="number" name="code_cat" value="<?PHP echo $code_cat ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="ref_produit_ini" value="<?PHP echo $_GET['ref_produit'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produits=new produits($_POST['ref_produit'],$_POST['nom'],$_POST['quantite'],$_POST['prix'],$_POST['disponible'],$_POST['code_cat']);
	$produitsC1->modifierProduits($produits,$_POST['ref_produit_ini']);
	echo $_POST['ref_produit_ini'];
	header('Location: afficherProduits.php');
}
?>
</body>
</HTMl>