<?PHP
include "../entities/avis.php";
include "../cores/avis.php";





if (isset($_POST['reponse']))
{

				//$id_reclamation=$_SESSION['reclamation']['id_reclamation'];
							$id_reclamation=$_POST['id_avis'];
							$reclamation=new avis("","","","","","",$_POST['reponse']);
							$reclamation1C=new avisc();
							$reclamation1C->modifieravis($avis,$id_avis);
                            echo "<script> window.location.href='avisBack.php'</script>";
    							//header('Location: forms-validation client.php');
							//session_destroy();
							
				 //session_start();
							/*
                $username=$_SESSION['client']['username'];
                $clientkC=new ClientC();
                $clientk =$clientkC->checkL($username);
                foreach ($clientk as $client):
                $username=$client->getUsername();
                endforeach;
                if (!$clientk)
                {          

                		$_SESSION['client']['username']=$username; 
                		   $a=$_SESSION['client']['username'];
                         echo "$a";

							//session_start();
							//header('Location: home-6.php');
				


	        	}
	        	*/


	
}

else
{
	echo "vérifier les champs";
}




?>