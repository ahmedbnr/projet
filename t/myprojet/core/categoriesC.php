<?PHP
include_once "config.php";
class categoriesC {
  /*function afficherCategories ($categories){
		echo "Code_cat: ".$categories->getCode_cat()."<br>";
		echo "Nom_cat: ".$categories->getNom_cat()."<br>";
		echo "Description: ".$categories->getDescription()."<br>";
	}*/
	
	function ajouterCategories($categories){
		$sql="INSERT into categories (code_cat,nom_cat,description) values (:code_cat,:nom_cat,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$code_cat=$categories->getCode_cat();
        $nom_cat=$categories->getNom_cat();
        $description=$categories->getDescription();
        
        $req->bindValue(':code_cat',$code_cat);
        $req->bindValue(':nom_cat',$nom_cat);
		$req->bindValue(':description',$description);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
		
	
	function afficherCategories(){
		//$sql="SElECT * From categories c inner join formationphp.categories a on c.code_cat= a.code_cat";
		$sql="SELECT * From categories";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	

	function supprimerCategories($code_cat){
		$sql="DELETE FROM categories where code_cat= :code_cat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code_cat',$code_cat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCategories($categories,$code_cat){
		$sql="UPDATE categories SET code_cat=:code_cate, nom_cat=:nom_cat,description=:description WHERE code_cat=:code_cate";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);*/
try{		
        $req=$db->prepare($sql);
		$code_cate=$categories->getCode_cat();
        $nom_cat=$categories->getNom_cat();
        $description=$categories->getDescription();
		$datas = array(':code_cate'=>$code_cate, ':code_cat'=>$code_cat, ':nom_cat'=>$nom_cat,':description'=>$description);
		$req->bindValue(':code_cate',$code_cate);
		$req->bindValue(':code_cat',$code_cat);
		$req->bindValue(':nom_cat',$nom_cat);
		$req->bindValue(':description',$description);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategories($code_cat){
		$sql="SELECT * from categories where code_cat =  '".$code_cat."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCategories($code_cat){
		$sql="SELECT * from categories where code_cat= '".$code_cat."'";
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


