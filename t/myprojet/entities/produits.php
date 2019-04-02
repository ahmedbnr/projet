<?PHP
class Produits{
	private $ref_produit;
	private $nom;
	private $quantite;
	private $prix;
	private $disponible;
	private $code_cat;
	function __construct($ref_produit,$nom,$quantite,$prix,$disponible,$code_cat){
		$this->ref_produit=$ref_produit;
		$this->nom=$nom;
		$this->quantite=$quantite;
		$this->prix=$prix;
		$this->disponible=$disponible;
		$this->code_cat=$code_cat;
	}
	
	function getRef_produit(){
		return $this->ref_produit;
	}
	function getNom(){
		return $this->nom;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getPrix(){
		return $this->prix;
	}
	function getDisponible(){
		return $this->disponible;
	}
	function getCode_cat(){
		return $this->code_cat;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($quantite){
		$this->quantite;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setDisponible($disponible){
		$this->disponible=$disponible;
	}
	function setCode_cat($code_cat){
		$this->code_cat=$code_cat;
	}
	
}

?>