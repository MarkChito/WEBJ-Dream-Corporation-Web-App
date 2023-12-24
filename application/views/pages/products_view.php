<!-- Latest Brands -->
<div class="top-brands">
    <div class="container">
        <?php if (!$this->input->get("category")) : ?>
            <h3>All Products</h3>
            <?php $categories = $this->model->MOD_GET_PRODUCT_CATEGORIES() ?>
            <?php if ($categories) : ?>
                <?php foreach ($categories as $category) : ?>
                    <div class="agile_top_brands_grids">
                        <div class="col-md-6">
                            <a href="products?category=<?= $category->id ?>"><?= $category->name ?></a> 
                        </div>
                        <div style="height: 30px;"></div>
                        <?php $products = $this->model->MOD_GET_PRODUCTS($category->id) ?>
                        <?php if ($products) : ?>
                            <?php foreach ($products as $product) : ?>
                                <div class="col-md-3 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block">
                                                        <div class="snipcart-thumb">
                                                            <a href="product?category=<?= $category->id ?>&item_id=<?= $product->id ?>" title="View Product Details">
                                                                <img src="./dist/images/uploads/<?= $product->image ?>" style="width: 140px; height: 140px;" />
                                                            </a>
                                                            <p class="text-truncate"><?= $product->name ?></p>
                                                            <strong>Price:</strong> <span>₱<?= $product->price ?></span>
                                                        </div>
                                                        <div class="snipcart-details top_brand_home_details">
                                                            <input type="button" value="Add to cart" class="button <?= $this->session->userdata("id") ? null : "login_or_register" ?>" />
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php else : ?>
                            <h1 class="text-center text-muted">No Items Yet</h1>
                        <?php endif ?>
                        <div class="clearfix"></div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        <?php else : ?>
            <h3><?= $category_name ?></h3>

            <div class="agile_top_brands_grids">
                <?php $products = $this->model->MOD_GET_ALL_PRODUCTS_BY_CATEGORY($category_id) ?>
                <?php if ($products) : ?>
                    <?php foreach ($products as $product) : ?>
                        <div class="col-md-3 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="product?category=<?= $category_id ?>&item_id=<?= $product->id ?>" title="View Product Details">
                                                        <img src="./dist/images/uploads/<?= $product->image ?>" style="width: 140px; height: 140px;" />
                                                    </a>
                                                    <p class="text-truncate"><?= $product->name ?></p>
                                                    <strong>Price:</strong> <span>₱<?= $product->price ?></span>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <input type="button" value="Add to cart" class="button <?= $this->session->userdata("id") ? null : "login_or_register" ?>" />
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else : ?>
                    <h1 class="text-center text-muted">No Items Yet</h1>
                <?php endif ?>
            </div>
            <div class="clearfix"></div>
        <?php endif ?>
    </div>
</div>