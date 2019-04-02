<?PHP
include "../core/produitsC.php";
$produitsC=new ProduitsC();
if (isset($_POST["ref_produit"]))
{
    $produitsC->supprimerProduits($_POST["ref_produit"]);
    header('Location: afficherProduits.php');
}

?>
