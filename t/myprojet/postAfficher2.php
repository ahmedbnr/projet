<?php 
include_once 'core/produitsC.php';
include_once 'entities/produits.php';

if (isset($_POST['search']) && !empty($_POST['search'])) {

	$search = $_POST['search'];
    $db = Config::getConnexion();
    $sql = "SELECT * FROM  produits where nom LIKE '%$search%'";
    $products=$db->query($sql);
    while($row=$products->fetch()):
    echo '
<br />
<tr>';
                            echo'

<td>' . $row['ref_produit'] . '</td>
<p>
';
                            echo'

<td>' . $row['nom'] . '</td>
<p>
';
                            echo'

<td>' . $row['quantite'] . '</td>
<p>
';
                            echo'

<td>' . $row['prix'] . '</td>
<p>
';
                            echo'

<td>' . $row['disponible'] . '</td>
<p>
';
                            echo'

<td>' . $row['code_cat'] . '</td>
<p>
';
                            echo '<td> <a class="btn" href="edit.php?ref_produit=' . $row['ref_produit'] . '">Read</a>';// un autre td pour le bouton d'edition
                            echo '</td>
<p>
';
                            echo '

<td>';
                            echo '<a class="btn btn-success" href="modifierProduits.php?ref_produit=' . $row['ref_produit'] . '">Update</a>';// un autre td pour le bouton d'update
                            echo '</td>
<p>
';
                            echo'

<td>';
                            echo '<a class="btn btn-danger" href="supprimerProduits.php?ref_produit=' . $row['ref_produit'] . ' ">Delete</a>';// un autre td pour le bouton de suppression
                            echo '</td>
<p>
';
                            echo '</tr>
<p>
';
    endwhile;
}
else{
    echo "Produit introuvable.....";
    //header("Location: .php");
		exit;
}
?>