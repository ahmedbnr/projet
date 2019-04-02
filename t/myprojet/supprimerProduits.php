<?PHP
include "core/produitsC.php";
$produitsC=new ProduitsC();
if (isset($_GET["ref_produit"]))
{
    $produitsC->supprimerProduits($_GET["ref_produit"]);
    header('Location: produits-Admin.php');
}

?>

