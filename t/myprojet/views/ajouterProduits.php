<?PHP
include "../core/produitsC.php";
include "../entities/produits.php";

if (isset($_POST['ref_produit']) && isset($_POST['nom']) && isset($_POST['quantite']) && isset($_POST['prix']) && isset($_POST['disponible']) && isset($_POST['code_cat']))
{
    if (!empty($_POST['ref_produit']) && !empty($_POST['nom']) && !empty($_POST['quantite']) && !empty($_POST['prix']) && !empty($_POST['disponible']) && !empty($_POST['code_cat']))
    {
        $produits1=new Produits($_POST['ref_produit'],$_POST['nom'],$_POST['quantite'],$_POST['prix'],$_POST['disponible'],$_POST['code_cat']);
        $produitsC=new ProduitsC();
        $produitsC->ajouterProduits($produits1);
        header('Location: afficherProduits.php');

    }
    else
    {
        echo "champs vides";
    }
}
//Partie2
/*
var_dump($prosuit1);
}
*/
//Partie3

//*/
else
{
    echo "vérifier les champs";
}

?>
