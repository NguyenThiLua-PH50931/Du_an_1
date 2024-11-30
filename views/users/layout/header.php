<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="top-header">
                <a href="index.html" class="cr-logo">
                    <img src="assets/users/img/logo/logo.png" alt="logo" class="logo">
                    <img src="assets/users/img/logo/dark-logo.png" alt="logo" class="dark-logo">
                </a>
                <form action="index.php?user=shop" method="post" class="cr-search">
                    <input class="search-input" type="text" placeholder="Search For items..." name="keyword">
                    <button class="search-btn border-0">
                        <i class="ri-search-line"></i>
                    </button>
                </form>
                <div class="cr-right-bar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <?php if (empty($_SESSION['nameAccount']) && empty($_SESSION['emailAccount'])) { ?>
                                <a class="nav-link dropdown-toggle cr-right-bar-item" href="index.php?user=login-user" class="cr-mode">
                                    <i class="ri-user-3-line">
                                        <span>Account</span>
                                    </i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="index.php?user=register-user">Register</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="index.php?user=login-user">Login</a>
                                    </li>
                                </ul>
                            <?php } else { ?>
                                <a class="nav-link dropdown-toggle cr-right-bar-item" href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <i class="ri-user-3-line"></i><span><?php echo $_SESSION['nameAccount']; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="index.php?user=logout-user">Logout</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="index.php?user=checkout">Checkout</a>
                                    </li>
                                </ul>
                            <?php } ?>
                        </li>
                    </ul>
                    <a href="index.php?user=wishlist" class="cr-right-bar-item">
                        <i class="ri-heart-3-line"></i>
                        <span>Wishlist</span>
                    </a>
                    <a href="index.php?user=cart" class="cr-right-bar-item">
                        <i class="ri-shopping-cart-line"></i>
                        <span>Cart</span>
                    </a>
                    <!-- <a href="index.php?admin=login" class="cr-right-bar-item">
                        <i class="ri-user-3-line"></i>
                        <span>Đăng nhập Admin</span>
                    </a> -->

                    <?php
                    if (isset($_SESSION['vai_tro']) && $_SESSION['vai_tro'] == 1) {
                        echo '<a href="index.php?admin=list-product" class="cr-right-bar-item"><i class="ri-user-3-line"></i><span>Đăng nhập Admin</span></a>';
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
</div>
<div class="cr-fix" id="cr-main-menu-desk">
    <div class="container">
        <div class="cr-menu-list">
            <div class="cr-category-icon-block">
                <div class="cr-cat-dropdown">
                    <div class="cr-cat-block">
                        <div class="cr-cat-tab">
                            <div class="cr-tab-list nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true">
                                    Dairy &amp; Bakery</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false" tabindex="-1">
                                    Fruits &amp; Vegetable</button>
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false" tabindex="-1">
                                    Snack &amp; Spice</button>
                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false" tabindex="-1">
                                    Juice &amp; Drinks </button>
                                <a class="nav-link" href="shop-left-sidebar.html">
                                    View All </a>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="tab-list row">
                                        <div class="col">
                                            <h6 class="cr-col-title">Dairy</h6>
                                            <ul class="cat-list">
                                                <li><a href="shop-left-sidebar.html">Milk</a></li>
                                                <li><a href="shop-left-sidebar.html">Ice cream</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Cheese</a></li>
                                                <li><a href="shop-left-sidebar.html">Frozen
                                                        custard</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Frozen
                                                        yogurt</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <h6 class="cr-col-title">Bakery</h6>
                                            <ul class="cat-list">
                                                <li><a href="shop-left-sidebar.html">Cake and
                                                        Pastry</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Rusk Toast</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Bread &amp;
                                                        Buns</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Chocolate
                                                        Brownie</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Cream Roll</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div class="tab-list row">
                                        <div class="col">
                                            <h6 class="cr-col-title">Fruits</h6>
                                            <ul class="cat-list">
                                                <li><a href="shop-left-sidebar.html">Cauliflower</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Bell
                                                        Peppers</a></li>
                                                <li><a href="shop-left-sidebar.html">Broccoli</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Cabbage</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Tomato</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <h6 class="cr-col-title">Vegetable</h6>
                                            <ul class="cat-list">
                                                <li><a href="shop-left-sidebar.html">Cauliflower</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Bell
                                                        Peppers</a></li>
                                                <li><a href="shop-left-sidebar.html">Broccoli</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Cabbage</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Tomato</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    <div class="tab-list row">
                                        <div class="col">
                                            <h6 class="cr-col-title">Snacks</h6>
                                            <ul class="cat-list">
                                                <li><a href="shop-left-sidebar.html">French
                                                        fries</a></li>
                                                <li><a href="shop-left-sidebar.html">potato
                                                        chips</a></li>
                                                <li><a href="shop-left-sidebar.html">Biscuits &amp;
                                                        Cookies</a></li>
                                                <li><a href="shop-left-sidebar.html">Popcorn</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Rice Cakes</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <h6 class="cr-col-title">Spice</h6>
                                            <ul class="cat-list">
                                                <li><a href="shop-left-sidebar.html">Cinnamon
                                                        Powder</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Cumin
                                                        Powder</a></li>
                                                <li><a href="shop-left-sidebar.html">Fenugreek
                                                        Powder</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Pepper
                                                        Powder</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Long Pepper</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab">
                                    <div class="tab-list row">
                                        <div class="col">
                                            <h6 class="cr-col-title">Juice</h6>
                                            <ul class="cat-list">
                                                <li><a href="shop-left-sidebar.html">Mango Juice</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Coconut
                                                        Water</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Tetra Pack</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Apple
                                                        Juices</a></li>
                                                <li><a href="shop-left-sidebar.html">Lychee
                                                        Juice</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <h6 class="cr-col-title">soft drink</h6>
                                            <ul class="cat-list">
                                                <li><a href="shop-left-sidebar.html">Breizh Cola</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Green Cola</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Jolt Cola</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Mecca Cola</a>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Topsia Cola</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg">
                <a href="javascript:void(0)" class="navbar-toggler shadow-none">
                    <i class="ri-menu-3-line"></i>
                </a>
                <div class="cr-header-buttons">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="ri-user-3-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="register.html">Register</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="login.html">Login</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <a href="wishlist.html" class="cr-right-bar-item">
                        <i class="ri-heart-line"></i>
                    </a>
                    <a href="javascript:void(0)" class="cr-right-bar-item Shopping-toggle">
                        <i class="ri-shopping-cart-line"></i>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?user=home">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="index.php?user=shop">
                                Products
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($category as $cate): ?>
                                    <li>
                                        <a class="dropdown-item" href="index.php?user=shop&id_dm=<?= $cate['id_dm'] ?>"><?= $cate['ten_dm'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="track-order.html">Track Order</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="faq.html">Faq</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="login.html">Login</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="register.html">Register</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="policy.html">Policy</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                Blog
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="blog-left-sidebar.html">Left
                                        Sidebar</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-right-sidebar.html">Right
                                        Sidebar</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-full-width.html">Full
                                        Width</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-detail-left-sidebar.html">Detail
                                        Left
                                        Sidebar</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-detail-right-sidebar.html">Detail
                                        Right
                                        Sidebar</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-detail-full-width.html">Detail
                                        Full
                                        Width</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                Elements
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="elements-products.html">Products</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="elements-typography.html">Typography</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="elements-buttons.html">Buttons</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="cr-calling">
                <i class="ri-phone-line"></i>
                <a href="javascript:void(0)">+123 ( 456 ) ( 7890 )</a>
            </div>
        </div>
    </div>
</div>