<!-- Top Sale -->
<?php
    shuffle($product_shuffle);
    //request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['top_sale_submit'])){
            //ask for login
            header("location: login.php");
        }
    }
?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>
        <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item){?>
            <div class="item py-2">
                <div class="product font-rale">
                    <div class="d-flex flex-column">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "./img/Shop/a1.png"; ?>" alt="product1" style="height:270px;width:auto;"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2 font-rubik">
                                <span> &#8377;<?php echo $item['item_price'] ?? '0'; ?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ??'1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid'] ??'1'; ?>">
                                
                                <?php
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                ?>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php } //closing foreach function?>
        </div>
        <!-- !Owl Carousel -->
    </div>
</section>
<!-- !Top Sale -->