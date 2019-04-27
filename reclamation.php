<?php
	include_once ('header.php');
	?>
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/1.jpg);">
		<h2 class="l-text2 t-center">
			Merci pour votre visite
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					     
						<h4 class="m-text26 p-b-36 p-t-15">
							passer une reclamation
						</h4>
                        <form method="POST" action="ajoutreclamation.php">
						  <div class="bo4 of-hidden size15 m-b-20">
						 <input type="text" name="username"placeholder="Nom" class="form-control" required/>
						</div>

					

						<div class="bo4 of-hidden size15 m-b-20">
						 <input type="email" name="email" class="form-control" placeholder="eg.: email@email.com"required/>
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
							 <input name="sujet" rows="5" class="form-control" placeholder="sujet" required>
						</div>

					  <textarea name="message" rows="5" class="form-control" placeholder="message" required></textarea>

						<div class="w-size25">
							<!-- Button -->
						<p style="text-align: center;"></p><button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								envoyer
					      </form>
							</button></p>
						</div>
					
				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	
	<?php
	include_once("footer.php")
	?>
