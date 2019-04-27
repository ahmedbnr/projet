<?php
	include_once 'header.php';



?>
<link type="text/css" rel="stylesheet" href="note.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<h1 style="text-align:center; color:#fff; margin:50px; margin-bottom:10px; font-size:36px">Star Rating System Using PHP,Ajax</h1>
<p style="text-align:center; color:#fff;font-size:20px; margin:0px">Including Update Rating</p>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/avis.jpg);">
		<h2 class="">
			
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images//icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					     
						<h4 class="m-text26 p-b-36 p-t-15">
							donner votre avis
						</h4>
                        <form method="POST" action="ajouteravis.php">
						  <div class="bo4 of-hidden size15 m-b-20">
							<input class="form-control "type="text" name="username" placeholder="votre nom"required/>
						</div>


					

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="form-control" type="text" name="prenom" placeholder="prenom"required/>
						</div>
						
					

                      
                    
        

							  <textarea name="message" rows="5" class="form-control" placeholder="message" required></textarea>
				<?php  
				
	
                $post_id = '1'; // yor page ID or Article ID
?>

<div class="container">
	<div class="rate">
		<div id="1" class="btn-1 rate-btn"></div>
        <div id="2" class="btn-2 rate-btn"></div>
        <div id="3" class="btn-3 rate-btn"></div>
        <div id="4" class="btn-4 rate-btn"></div>
        <div id="5" class="btn-5 rate-btn"></div>
	</div>
<br>
    <div class="box-result">
    	<?php
    		$sql="SELECT * FROM star";
    		$db=config::getCnx();
        	//$query = mysql_query("SELECT * FROM star"); 
            	//while($data = mysqli_fetch_assoc($query)){
    			$liste=$db->query($sql);
    			foreach ($liste as $key) {
    				# code...
                  $rate_db[] = $liste;
                  $sum_rates[] = $key['rate'];
                }
                if(@count($rate_db)){
                    $rate_times = count($rate_db);
                    $sum_rates = array_sum($sum_rates);
                    $rate_value = $sum_rates/$rate_times;
                    $rate_bg = (($rate_value)/5)*100;
                }else{
                    $rate_times = 0;
                    $rate_value = 0;
                    $rate_bg = 0;
                }
        ?>
    <div class="result-container">
    	<div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
        <div class="rate-stars"></div>
    </div>
        <p style="margin:5px 0px; font-size:16px; text-align:center">Rated <strong><?php echo substr($rate_value,0,3); ?></strong> out of <?php echo $rate_times; ?> Review(s)</p>
    </div>
</div>

<script>
$(function(){ 
   $('.rate-btn').hover(function(){
   $('.rate-btn').removeClass('rate-btn-hover');
      var therate = $(this).attr('id');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-hover');
       };
     });
                           
   $('.rate-btn').click(function(){    
      var therate = $(this).attr('id');
      var dataRate = 'act=rate&post_id=<?php echo $post_id; ?>&rate='+therate; //
   $('.rate-btn').removeClass('rate-btn-active');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-active');
      };
   $.ajax({
      type : "POST",
      url : "ajax.php",
      data: dataRate,
      success:function(){}
    });
  });
});
</script>
						
       	



						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								envoyer
					      </form>
							</button>
						</div>
					
				</div>
			</div>
		</div>
	</section>


	<?php
	include_once("footer.php")
	?>

