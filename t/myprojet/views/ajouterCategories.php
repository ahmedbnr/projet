<?PHP
include "../core/categoriesC.php";
include "../entities/categories.php";

if (isset($_POST['code_cat']) && isset($_POST['nom_cat']) && isset($_POST['description']))
{
    if (!empty($_POST['code_cat']) && !empty($_POST['nom_cat']) && !empty($_POST['description']))
    {
        $categories1=new Categories($_POST['code_cat'],$_POST['nom_cat'],$_POST['description']);
        $categoriesC=new CategoriesC();
        $categoriesC->ajouterCategories($categories1);
        header('Location: afficherCategories.php');

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
