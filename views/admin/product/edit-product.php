<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:49 GMT -->

<head>
    <?php include_once "views/admin/layout/linkCss.php" ?>
</head>

<body>
    <main class="wrapper sb-default">
        <!-- Loader -->
        <div id="cr-overlay">
            <div class="loader"></div>
        </div>
        <!-- Header -->
        <header class="cr-header">
            <?php include_once "views/admin/layout/header.php" ?>
        </header>
        <!-- sidebar -->
        <?php include_once "views/admin/layout/sidebar.php" ?>


        <!-- main content -->
        <div class="cr-main-content">
            <div class="container-fluid">
                <!-- Page title & breadcrumb -->
                <div class="cr-page-title cr-page-title-2">
                    <div class="cr-breadcrumb">
                        <h5 style="text-align:center; font-size: 30px; color:green;">Edit Product</h5>
                        <ul>
                        <li><a href="index.html" style="color: green">SHOE SHOP</a></li>

                            <li>Edit-Product</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="cr-card card-default">
                            <div class="cr-card-content">
                                <div class="row cr-product-uploads">
                                    <div class="col-lg-4 mb-991">
                                        <div class="cr-vendor-img-upload">
                                            <div class="cr-vendor-main-img">
                                                <div class="avatar-upload">
                                                    <!-- <div class="avatar-edit">
                                                        <input type='file' id="product_main" class="cr-image-upload"
                                                            accept=".png, .jpg, .jpeg">
                                                        <label><i class="ri-pencil-line"></i></label>
                                                    </div> -->
                                                    <!-- <div class="avatar-preview cr-preview">
                                                        <div class="imagePreview cr-div-preview">
                                                            <img class="cr-image-preview"
                                                                src="assets/admin/layout//img/product/preview.jpg"
                                                                alt="edit" name="anh_sp">
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="cr-vendor-upload-detail">
                                        <form class="row g-3" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="id_sp" value="<?= $product['id_sp'] ?>">
                                            <div class="col-md-6">
                                                <label class="form-label">Danh mục </label> <br>
                                                <select name="id_dm" class="form-control form-select">
                                                    <?php foreach ($danh_muc as $dm) : ?>
                                                        <option value="<?= $dm['id_dm'] ?>" <?= (isset($product['id_dm']) && $dm['id_dm'] == $product['id_dm']) ? 'selected' : '' ?>>
                                                            <?= $dm['ten_dm'] ?>
                                                        </option>

                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="ten_sp" class="form-label">Tên sản phẩm</label>
                                                <input type="text" class="form-control slug-title" id="ten_sp" name="ten_sp" value="<?= $product['ten_sp'] ?>">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Giá tiền <span>
                                                    </span></label>
                                                <input type="number" class="form-control" id="gia_tien" name="gia_tien" value="<?= $product['gia_tien'] ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="soluong_ton" class="form-label">Số lượng tồn</label>
                                                <input type="number" class="form-control slug-title" id="soluong_ton" name="soluong_ton" value="<?= $product['soluong_ton'] ?>">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="mo_ta">Mô tả</label>
                                                <textarea class="form-control" rows="4" name="mo_ta"><?= $product['mo_ta'] ?></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="anh_sp" class="form-label">Ảnh sản phẩm</label>
                                                <input type="file" class="form-control slug-title" id="anh_sp" name="anh_sp">
                                                <img src="<?= $product['anh_sp'] ?>" width="170px" style="margin-top: 10px">
                                            </div>
                                            <input type="hidden" name="id_sp" value="<?= $product['id_sp'] ?>">

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success" value="Cập nhập">Cập nhập</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Footer -->
        <footer>
            <?php include_once "views/admin/layout/footer.php" ?>
        </footer>
        <!-- Feature tools -->
        <?php include_once "views/admin/layout/feature-tools.php" ?>
    </main>
    <!-- Vendor Custom -->
    <?php include_once "views/admin/layout/script.php" ?>
</body>
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:50 GMT -->

</html>