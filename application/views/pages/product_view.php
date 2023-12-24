    <!-- Similar Brands -->
    <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
        <div class="container">
            <h3>Similar Products</h3>
            <div class="w3ls_w3l_banner_nav_right_grid1">
                <?php $products = $this->model->MOD_GET_SIMILAR_PRODUCTS($product_category_id, $product_id) ?>
                <?php if ($products) : ?>
                    <?php foreach ($products as $product) : ?>
                        <!-- Product 1 -->
                        <div class="col-md-3 w3ls_w3l_banner_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="product?category=<?= $product_category_id ?>&item_id=<?= $product->id ?>" title="View Product Details">
                                                        <img src="./dist/images/uploads/<?= $product->image ?>" style="width: 140px; height: 140px;" />
                                                    </a>
                                                    <p class="text-truncate"><?= $product->name ?></p>
                                                    <strong>Price:</strong> <span>₱<?= $product->price ?></span>
                                                </div>
                                                <div class="snipcart-details">
                                                    <input type="submit" value="Add to cart" class="button <?= $this->session->userdata("id") ? null : "login_or_register" ?>" />
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>