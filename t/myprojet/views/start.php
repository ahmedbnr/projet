<?PHP
include "../entities/produits.php";
include "../core/produitsC.php";
$produits=new produits(757575,'Glaces',50,70,1,3);
$produitsC=new produitsC();
$produitsC->afficherProduits($produits);
echo "****************";
echo "<br>";
echo "ref_produit:".$produits->getRef_produit();
echo "<br>";
echo "nom:".$produits->getNom();
echo "<br>";
echo "quantite:".$produits->getQuantite();
echo "<br>";
echo "prix:".$produits->getPrix();
echo "<br>";
echo "disponible:".$produits->getDisponible();
echo "<br>";
echo "code_cat:".$produits->getCode_cat();
echo "<br>";


?>