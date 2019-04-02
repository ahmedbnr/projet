<?PHP
include "core/categoriesC.php";
$categoriesC=new CategoriesC();
if (isset($_GET["code_cat"]))
{
    $categoriesC->supprimerCategories($_GET["code_cat"]);
    header('Location: categories-Admin.php');
}
else{echo "string";}

?>
