<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/categories.php";
include "../core/categoriesC.php";
if (isset($_GET['code_cat'])){
	$categoriesC1=new CategoriesC();
    $result=$categoriesC1->recupererCategories($_GET['code_cat']);
	foreach($result as $row){
		$code_cat=$row['code_cat'];
		$nom_cat=$row['nom_cat'];
		$description=$row['description'];
?>
<form method="POST">
<table>
<caption>Modifier Categories</caption>
<tr>
<td>Code_cat</td>
<td><input type="number" name="code_cat" value="<?PHP echo $code_cat ?>"></td>
</tr>
<tr>
<td>Nom_cat</td>
<td><input type="text" name="nom_cat" value="<?PHP echo $nom_cat ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="code_cat_ini" value="<?PHP echo $_GET['code_cat'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$categories=new categories($_POST['code_cat'],$_POST['nom_cat'],$_POST['description']);
	$categoriesC1->modifierCategories($categories,$_POST['code_cat_ini']);
	echo $_POST['code_cat_ini'];
	header('Location: afficherCategories.php');
}
?>
</body>
</HTMl>