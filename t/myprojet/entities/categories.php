<?PHP
class Categories{
	private $code_cat;
	private $nom_cat;
	private $description;
	function __construct($code_cat,$nom_cat,$description){
		$this->code_cat=$code_cat;
		$this->nom_cat=$nom_cat;
		$this->description=$description;
	}
	
	function getCode_cat(){
		return $this->code_cat;
	}
	function getNom_cat(){
		return $this->nom_cat;
	}
	function getDescription(){
		return $this->description;
	}

	function setNom_cat($nom_cat){
		$this->nom_cat=$nom_cat;
	}
	function setDescription($description){
		$this->description;
	}
	
}

?>