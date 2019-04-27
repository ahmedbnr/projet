<?php 
                         
                         include "../entities/reclamation.php";
include "../cores/reclamation.php";
    // if (isset($_POST['Envoyer'])){
                $id_reclamation=$_POST['id_reclamation'];

              
              $reclamation=new reclamation("","","","","","",$_POST['reponse']);
              $reclamation1C=new ReclamationC();
              
              $reclamation1C->modifierReclamation($reclamation,$id_reclamation);
              echo $_POST['Envoyer'];
              echo "<script> window.location.href='reclamation%20back.php'</script>";

    
//}         
             ?> 