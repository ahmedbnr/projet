 

 

<?PHP
include_once("headerAdmin.php");
include "../entities/avis.php";
include "../cores/avis.php";



if (isset($_GET['id_avis'])){
  $avisc=new avisc();
    $result=$avisc->recupereravis($_GET['id_avis']);
  foreach($result as $row){
    $id_reclamation=$row['id_avis'];
    $id_avis=$row['id_avis'];
    $nom=$row['username'];
    $prenom=$row['prenom'];
    $message=$row['message'];
    $etat=$row['etat'];
    $vu=$row['vu'];
    $note=$row['note'];
}

?>

  <div class="container"> 
	  <div class="row">



              <form id="form" method="POST"class="form-horizontal">
                <section class="panel">
                  <header class="panel-heading">
                  
                    </div>

                      <p style="text-align: center;"><h2 class="panel-title">*********Réponse à des avis***********</h2></p>
                  </header>
                  <div class="panel-body">


                     <div class="form-group">
                      <label class="col-sm-3 control-label">id_avis<span class="required">*</span></label>
                      <div class="col-sm-9">
                        <input type="text"  name="id_reclamation" value="<?PHP echo $id_avis ?>" class="form-control" placeholder="id" required/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nom<span class="required">*</span></label>
                      <div class="col-sm-9">
                        <input type="text"  name="id_reclamation" value="<?PHP echo $nom ?>" class="form-control" placeholder="nom" required/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-3 control-label">Prenom<span class="required">*</span></label>
                      <div class="col-sm-9">
                        <input type="text"  name="id_reclamation" value="<?PHP echo $prenom ?>" class="form-control" placeholder="prenom" required/>
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="col-sm-3 control-label">message de client <span class="required">*</span></label>
                      <div class="col-sm-9">
                        <input name="message" rows="5" class="form-control" value="<?PHP echo $message ?>" placeholder="message" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Répondre <span class="required">*</span></label>
                      <div class="col-sm-9">
                        <textarea name="reponse" rows="5" class="form-control" placeholder="" required></textarea>
                      </div>
                    </div>
                  </div>

                  <footer class="panel-footer">
                    <div class="row">
                      <div class="col-sm-9 col-sm-offset-3">
                      
                       <p style="text-align: center;"><input type="submit"class="btn btn-primary" name="Envoyer"></p>
                        
                      </div>
                    </div>
                  
                  </footer>
           <?php 
           var_dump($note);
           if (isset($_POST['Envoyer'])) {
             $avis=new avis($nom,$prenom,$message,$etat,$vu,$_POST['reponse'],$note);
             $avisc = new avisc();
             $avisc->modifieraviss($avis,$id_avis);
             echo "<script> window.location.href='avis back.php'</script>";
             
           }
                         
                         } 

             ?>     
                </section>
              </form>
            </div>
            <!-- col-md-6 -->
          </div>
          <!-- end: page -->
        </section>
      </div> 

     </div>
  </div> 
<?php 
        include_once("footerAdmin.php");
         ?>