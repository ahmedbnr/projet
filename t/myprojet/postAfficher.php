<?php 
include_once 'core/produitsC.php';
include_once 'entities/produits.php';

if (isset($_POST['search']) && !empty($_POST['search'])) {

	$search = $_POST['search'];
    $db = Config::getConnexion();
    $sql = "SELECT * FROM  produits where nom LIKE '%$search%'";
    $products=$db->query($sql);
    while($row=$products->fetch()):?>
            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <img src="friandise4.jpg" alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="product-detail.php?ref_produit=<?PHP echo $row['ref_produit']; ?>" class="block2-name dis-block s-text3 p-b-5">
                                        <?PHP echo $row['nom']; ?>
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
                                        <?PHP echo $row['prix']; ?>
                                    </span>
                                </div>
                            </div>
            </div>
        <?php endwhile;
}
else{
    echo "Produit introuvable.....";
    //header("Location: .php");
		exit;
}
?>