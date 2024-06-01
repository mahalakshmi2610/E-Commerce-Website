<!--   product  -->
<?php

    //request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['product_submit'])){
            //call method addToCart1
            $Cart->addToCart1($_POST['user_id'],$_POST['item_id']);
        }
    }

    $item_id = $_GET['item_id'] ??1;
    foreach($product->getData() as $item):
        if($item['item_id']==$item_id):
?>
<section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo $item['item_image'] ?? "./img/Shop/a2.png"; ?>" alt="product" class="img-fluid">
                            <div class="form-row pt-4 font-size-16 font-rubik">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                                </div>
                                <div class="col">
                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ??'1'; ?>">
                                        <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                        <?php
                                            if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart'))??[])){
                                                echo '<button type="submit" disabled class="btn btn-success ">In the Cart</button>';
                                            }
                                            else{
                                                echo '<button type="submit" name="product_submit" class="btn btn-warning form-control">Add to Cart</button>';
                                            }
                                        ?>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-sm-6 py-5">
                            <h5 class="font-zillaslab font-size-20"><?php echo $item['item_name'] ??"Unknown"; ?></h5>
                            <small>by <?php echo $item['item_brand'] ??"Brand"; ?></small>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>
                                  <a href="#" class="px-2 font-rubik font-size-14">21,243 ratings</a>
                            </div>
                            <hr class="m-0">

                            <!---    product price       -->
                                <table class="my-3">
                                    <tr class="font-rubik font-size-14">
                                        <td>Price:</td>
                                        <td class="font-size-20 text-danger"><span>&#8377;<?php echo $item['item_price'] ??0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                                    </tr>
                                </table>
                            <!---    !product price       -->
                                <hr>

                            <!-- order-details -->
                                <div id="order-details" class="font-rubik d-flex flex-column text-dark">
                                    <small>Delivery by : Nov 29  - Dec 1</small>
                                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                                </div>
                             <!-- !order-details -->

                             <div class="row">
                                 <div class="col-6">
                                        <!-- color -->
                                            <div class="color my-3">
                                              <div class="d-flex justify-content-between">
                                                <h6 class="font-rubik">Color:</h6>
                                                <div class="p-2 color-orange-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                              </div>
                                            </div>
                                        <!-- !color -->
                                 </div>
                                 <div class="col-6">
                                   <!-- product qty section -->  
                                     <div class="qty d-flex">
                                         <h6 class="font-rubik">Qty</h6>
                                         <div class="px-4 d-flex font-rale">
                                             <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                             <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                             <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                         </div>
                                     </div>
                                    <!-- !product qty section -->  
                                 </div>
                             </div>

                            <!-- size -->
                                <div class="size py-3">
                                    <h6 class="font-rubik">Size :</h6>
                                    <div class="d-flex w-75">
                                        <div class="font-rubik border m-2 p-2">
                                            <button class="btn p-0 font-size-14">S</button>
                                        </div>
                                        <div class="font-rubik border m-2 p-2">
                                            <button class="btn p-0 font-size-14">M</button>
                                        </div>
                                        <div class="font-rubik border m-2 p-2">
                                            <button class="btn p-0 font-size-14">L</button>
                                        </div>
                                    </div>
                                </div>
                            <!-- !size -->


                        </div>
                        <div class="col-12 py-2">
                            <h6 class="font-rubik">Product Description</h6>
                            <hr>
                            <p class="font-rale font-size-14">Discover the perfect blend of style and comfort at our online kurti shop. We offer a diverse range of exquisitely designed kurtis that cater to every fashion preference. From traditional to contemporary, our collection features a variety of colors, fabrics, and patterns to suit all occasions. Whether you're looking for a casual everyday kurti or an elegant piece for a special event, we've got you covered. Explore our curated selection and elevate your wardrobe with trendy, affordable kurtis that showcase your unique style.</p>
                            <p class="font-rale font-size-14">At our online kurti store, we prioritize quality and customer satisfaction. Each kurti is crafted with attention to detail and is available in various sizes to ensure a comfortable and flattering fit for all. With secure online shopping and hassle-free returns, you can shop with confidence. Stay on top of the latest fashion trends by browsing our regularly updated catalog. Experience the convenience of shopping for beautiful kurtis from the comfort of your home, and let your wardrobe reflect your individuality.</p>
                        </div>
                    </div>
                </div>
            </section>
<!--   !product  -->
<?php
    endif;
    endforeach;
?>