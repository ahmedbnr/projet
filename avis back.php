

<?php
include_once("headerAdmin.php");

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
                                         <input type="text" class="form-control1 input-sm" name="name" placeholder="username">
                                            <input type="submit"class="btn btn-primary" name="search" value="search">


                                    </div>

                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id_avis</th>     
                                            <th>username</th>
                                            <th>note</th>
                                            <th>message</th>
                                            <th> Répondre</th>
                                            <th>réponse</th>
                                            <th>etat</th>
                                            <th> vu</th>
                                            <th>supprimer</th>
                                        
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php 
                include "../cores/avis.php";
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
                                            <td><?PHP echo $row['id_avis']; ?></td>
                                            <td><?PHP echo $row['username']; ?></td>
                                              <td><?PHP for($i = 0; $i < 5; $i++) { if($row['note']>0){ $row['note']--; echo "&#9733;"; }else { echo "&#9734;"; } } ?></td>
                                            <td><?PHP echo $row['message']; ?></td>
                                            <td><?PHP echo $row['reponse']; ?></td>
                                            <td> 
                                            <a href="repondre.php?id_avis=<?PHP echo $row['id_avis']; ?>"
                                                >Répondre</a></td>
                                                <td><?PHP echo $row['etat']; ?></td>
                                                <td><?PHP echo $row['vu']; ?></td>
                                            <td class="actions">
                                                <a href="supprimer_avis.php?id_avis=<?PHP echo $row['id_avis']; ?>" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>

                                            </td>
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
    include_once('footerAdmin.php');
?>
