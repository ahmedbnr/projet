
<?php
include_once("headerAdmin.php");
 
?> 
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">liste des reclamations</strong>
                            </div>
                            <div class="card-body">
                                    <div class="col-sm-8">
                                        <form method="POST">
                                            <input type="text" class="form-control1 input" name="name" placeholder="username">
                                            <input type="submit"class="btn btn-primary" name="search" value="search">
                                                

                                        </form>


                                    </div>

                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id_reclamation</th>     
                                            <th>username</th>
                                            <th>email</th>
                                            <th>sujet</th>
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


                include "../cores/reclamation.php";
                $reclamation1C=new ReclamationC();
                if(isset($_POST['Trier']))
                {
                $listereclamation=$reclamation1C->TrierReclamation($_POST['etat']);

                }
                else if(isset($_POST['search']))
                {
                $listereclamation=$reclamation1C->SearchReclamation($_POST['name']);

                }
                else
                $listereclamation=$reclamation1C->afficherReclamation();

?>
                                          <?PHP
                                            foreach($listereclamation as $row){
                                           ?>

                                        <tr class="gradeX">
                                            <td><?PHP echo $row['id_reclamation']; ?></td>
                                            <td><?PHP echo $row['username']; ?></td>
                                            <td><?PHP echo $row['email']; ?></td>
                                            <td><?PHP echo $row['sujet']; ?></td>
                                            <td><?PHP echo $row['message']; ?></td>
                                            <td><?PHP echo $row['reponse']; ?></td>
                                            <td> 
                                            <a href="repondreReclamation.php?id_reclamation=<?PHP echo $row['id_reclamation']; ?>"
                                                >Répondre</a></td>
                                                <td><?PHP echo $row['etat']; ?></td>
                                                <td><?PHP echo $row['vu']; ?></td>
                                            <td class="actions">
                                                <a href="supprimer_Reclamation.php?id_reclamation=<?PHP echo $row['id_reclamation']; ?>" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>

                                            </td>
                                        </tr>
                                        <?php  } ?>


                                    </tbody>
                                </table>
                                         <form method="POST" action="pdf.php">
                                    
                                      <p style="text-align: center;"><input type="submit"class="btn btn-primary" input-sm" name="generate_pdf" value="Genrer PDF"></input></p>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        <?php 
        include_once("footerAdmin.php");
         ?>
    

       

 

