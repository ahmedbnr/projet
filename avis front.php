
<?php
include "../cores/avis.php";
include_once("header.php");

?>
      <?php

    

    if(isset($_SESSION["id"]))
    {
        $serviceUser= new UserC();
        $avis=new avisc();
        $user= $serviceUser->connected($_SESSION["id"]);
        //var_dump($user);

        if ($user['id'] ==$_SESSION["id"])
        {
         echo "<script>window.open('avis front.php','_ self')</script>";
        }
    }
else
{

        echo "<script>window.open('index.php','_self')</script>";
    
}
?>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">liste des avis</strong>
                            </div>
                            <div class="card-body">
                                    <div class="col-sm-8">
                                         


                                    </div>

                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr> 
                                              
                                            <th>username</th>
                                            <th>note</th>
                                            <th>message</th>
                                           
                                        
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php 
                
                $reclamation1C=new avisc();
                if(isset($_POST['Trier']))
                {
                $listereclamation=$reclamation1C->TrierReclamation($_POST['etat']);

                }
                else if(isset($_POST['search']))
                {
                $listereclamation=$reclamation1C->SearchReclamation($_POST['name']);

                }
                else
                $listereclamation=$reclamation1C->afficheravis();

?>
                                          <?PHP
                                            foreach($listereclamation as $row){
                                           ?>

                                        <tr class="gradeX">
                                            
                                            <td><?PHP echo $row['username']; ?></td>
                                              <td><?PHP for($i = 0; $i < 5; $i++) { if($row['note']>0){ $row['note']--; echo "&#9733;"; }else { echo "&#9734;"; } } ?></td>
                                            <td><?PHP echo $row['message']; ?></td>
                                           
                                                
                                           
                                        </tr>
                                        <?php  } ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
       <div class="clearfix"></div>

        <?php
    include_once('footer.php');
?>
