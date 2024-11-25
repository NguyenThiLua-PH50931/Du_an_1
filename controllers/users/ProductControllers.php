<?php
class ProductControllers
{
    public function shop()
    {
        // Lấy danh mục sản phẩm
        $category = (new CategoryModels)->all();

        // Lấy giá trị `sort` từ URL hoặc mặc định
        $sort = isset($_GET['sort']) ? $_GET['sort'] : '';

        if (!empty($sort)) {
            // Nếu có tham số `sort`, lọc sản phẩm theo giá
            $products = (new ProductModel)->getProductsBySort($sort);
        } else {
            // Nếu không có tham số `sort`, lấy toàn bộ sản phẩm
            $products = (new ProductModels)->getAllProducts();
        }

        if (isset($_POST['addWishlist'])) {
            $id_tk = $_SESSION['id_tk'];
            $id_sp = $_POST['id_sp'];
            $result = (new WishlistModel)->addWishlist($id_tk, $id_sp);
            if (!empty($result)) {
                $_SESSION['thongBao'] = '<div class="cr-cart-notify"><p class="compare-note">Đã có sản phẩm trong<a href="index.php?user=wishlist"> Wishlist</a> Successfully!</p></div>';
                header('Location: index.php?user=shop');
                exit();
            } else {
                $_SESSION['successWishlist'] = '<div class="cr-cart-notify"><p class="compare-note">Add product in <a href="index.php?user=wishlist"> Wishlist</a> Successfully!</p></div>';
                header('Location: index.php?user=shop');
                exit();
            }
        }
    // var_dump($products);
    // exit;

        view("users/shop", ['products' => $products, 'category' => $category]);
    }
}
