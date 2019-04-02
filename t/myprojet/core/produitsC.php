<?PHP
include_once "config.php";
class produitsC {
  function afficherProduit ($produits){
		echo "Ref_produit: ".$produits->getRef_produit()."<br>";
		echo "Nom: ".$produits->getNom()."<br>";
		echo "Quantite: ".$produits->getQuantite()."<br>";
		echo "Prix: ".$produits->getPrix()."<br>";
		echo "Disponible: ".$produits->getDisponible()."<br>";
		echo "Code_cat: ".$produits->getCode_cat()."<br>";
	}
	
	function ajouterProduits($produits){
		$sql="INSERT into produits (ref_produit,nom,quantite,prix,disponible,code_cat) values (:ref_produit, :nom,:quantite,:prix,:disponible,:code_cat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $ref_produit=$produits->getRef_produit();
        $nom=$produits->getNom();
        $quantite=$produits->getQuantite();
        $prix=$produits->getPrix();
        $disponible=$produits->getDisponible();
        $code_cat=$produits->getCode_cat();
		$req->bindValue(':ref_produit',$ref_produit);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':disponible',$disponible);
		$req->bindValue(':code_cat',$code_cat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
		
	
	function afficherProduits(){
		//$sql="SElECT * From produits p inner join formationphp.produits a on p.ref_produit= a.ref_produit";
		$sql="SELECT * From produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	

	function supprimerProduits($ref_produit){
		$sql="DELETE FROM produits where ref_produit= :ref_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref_produit',$ref_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduits($produits,$ref_produit){
		$sql="UPDATE produits SET ref_produit=:refe_produit, nom=:nom,quantite=:quantite,prix=:prix,disponible=:disponible,code_cat=:code_cat WHERE ref_produit=:refe_produit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);*/
try{		
        $req=$db->prepare($sql);
		$refe_produit=$produits->getRef_produit();
        $nom=$produits->getNom();
        $quantite=$produits->getQuantite();
        $prix=$produits->getPrix();
        $disponible=$produits->getDisponible();
        $code_cat=$produits->getCode_cat();
		$datas = array(':refe_produit'=>$refe_produit, ':ref_produit'=>$ref_produit, ':nom'=>$nom,':quantite'=>$quantite,':prix'=>$prix,':disponible'=>$disponible, ':code_cat'=>$code_cat);
		$req->bindValue(':refe_produit',$refe_produit);
		$req->bindValue(':ref_produit',$ref_produit);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':disponible',$disponible);
		$req->bindValue(':code_cat',$code_cat);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererProduits($ref_produit){
		$sql="SELECT * from produits where ref_produit =  '".$ref_produit."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProduits($ref_produit){
		$sql="SELECT * from produits where ref_produit= '".$ref_produit."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>


