    <!-- Latest Brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Latest Products</h3>
            <div class="agile_top_brands_grids">
                <?php $products = $this->model->MOD_GET_PRODUCTS("0") ?>
                <?php if ($products) : ?>
                    <?php foreach ($products as $product) : ?>
                        <div class="col-md-3 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="product?category=<?= $product->category_id ?>&item_id=<?= $product->id ?>" title="<?= $product->name ?>">
                                                        <img src="./dist/images/uploads/<?= $product->image ?>" style="width: 140px; height: 140px;" />
                                                    </a>
                                                    <p class="text-truncate"><?= $product->name ?></p>
                                                    <strong>Price:</strong> <span>₱<?= $product->price ?></span>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <input type="button" value="Add to cart" class="button <?= $this->session->userdata("id") ? "add_to_cart" : "login_or_register" ?>" product_id="<?= $product->id ?>" product_name="<?= $product->name ?>" product_price="<?= $product->price ?>" product_image="<?= $product->image ?>" login_location="<?= $this->session->userdata("current_tab") ?>" />
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else : ?>
                    <h2 class="text-center">No Items Yet</h2>
                <?php endif ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- Hot Offers -->
    <div class="fresh-vegetables">
        <div class="container">
            <h3>Hot Offers</h3>
            <div class="w3l_fresh_vegetables_grids">
                <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
                    <div class="w3l_fresh_vegetables_grid2">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products">All Products</a></li>
                            <?php $categories = $this->model->MOD_GET_PRODUCT_CATEGORIES() ?>
                            <?php if ($categories) : ?>
                                <?php $category_count = 0; ?>
                                <?php foreach ($categories as $category) : ?>
                                    <?php if ($category_count < 7) : ?>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <a href="products?category=<?= $category->id ?>"><?= $category->name ?></a>
                                        </li>
                                    <?php endif ?>

                                    <?php $category_count++; ?>
                                <?php endforeach ?>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 w3l_fresh_vegetables_grid_right">
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="./dist/images/8.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <div class="w3l_fresh_vegetables_grid1_rel">
                                <img src="./dist/images/7.jpg" alt=" " class="img-responsive" />
                                <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                    <div class="more m1">
                                        <a href="products" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="./dist/images/10.jpg" alt=" " class="img-responsive" />
                            <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                                <h5>Special Offers</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="./dist/images/9.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="./dist/images/11.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="agileinfo_move_text">
                        <div class="agileinfo_marquee">
                            <h4>get <span class="blink_me">25% off</span> on some products and also get gift voucher</h4>
                        </div>
                        <div class="agileinfo_breaking_news">
                            <span> </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>