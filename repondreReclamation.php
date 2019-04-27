

 

<?PHP
include_once("headerAdmin.php");
include "../entities/reclamation.php";
include "../cores/reclamation.php";



if (isset($_GET['id_reclamation'])){
  $reclamationC=new ReclamationC();
    $result=$reclamationC->recupererReclamation($_GET['id_reclamation']);
  foreach($result as $row){
    $id_reclamation=$row['id_reclamation'];
    $email=$row['email'];
    $message=$row['message'];
  }

?>

  <div class="container"> 
	  <div class="row">



              <form id="form" method="POST"class="form-horizontal" action="modifierReclamation.php">
                <section class="panel">
                  <header class="panel-heading">
                   
                    </div>

                    <h2 class="panel-title">Réponse à des réclamations</h2>
                  </header>
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Id_reclamation<span class="required">*</span></label>
                      <div class="col-sm-9">
                        <input type="text"  name="id_reclamation" value="<?PHP echo $id_reclamation ?>" class="form-control" placeholder="id" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Email <span class="required">*</span></label>
                      <div class="col-sm-9">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                          </span>
                          <input type="email" name="email" class="form-control" placeholder="eg.: email@email.com"value="<?PHP echo $email ?>" required/>
                        </div>
                      </div>
                      <div class="col-sm-9">

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">message de client <span class="required">*</span></label>
                      <div class="col-sm-9">
                        <input name="message" rows="5" class="form-control" value="<?PHP echo $message ?>" placeholder="message client" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Répondre <span class="required">*</span></label>
                      <div class="col-sm-9">
                        <textarea name="reponse" rows="5" class="form-control" placeholder="la reponse svp" required></textarea>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-sm-9 col-sm-offset-3">
                      
                        
                        <p style="text-align: center;"><input type="submit"class="btn btn-primary" name="Envoyer"></p>
                  <footer class="panel-footer">
                   
                        
                      </div>
                    </div>
                  </footer>
           <?php 
                         
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