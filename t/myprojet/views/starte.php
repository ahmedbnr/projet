<?PHP
include "../entities/categories.php";
include "../core/categoriesC.php";
$categories=new categories(7575,'Gateaux','La meilleure patisserie sur le marche');
$categoriesC=new categoriesC();
$categoriesC->afficherCategories($categories);
echo "****************";
echo "<br>";
echo "code_cat:".$categories->getCode_cat();
echo "<br>";
echo "nom_cat:".$categories->getNom_cat();
echo "<br>";
echo "description:".$categories->getDescription();
echo "<br>";

?>