<?php
require_once 'database/function.php';

class CategoryModels
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // Danh mục:
    // lấy ra tất cả danh mục
    public function all()
    {
        $sql = "SELECT * FROM danh_muc";
        $stmt = $this->db->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //phương thức lấy ra 1 bản ghi theo id danh mục
    public function find_one($id_dm)
    {
        $sql = "SELECT * FROM danh_muc WHERE id_dm = :id_dm";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_dm', $id_dm);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //Thêm dữ liệu
    public function insert($data)
    {
        $sql = "INSERT INTO danh_muc(ten_dm) VALUES(:ten_dm)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':ten_dm', $ten_dm);
        $stmt->execute($data);
    }
    //Cập nhật dữ liệu
    public function update($data)
    {
        $sql = "UPDATE danh_muc SET ten_dm = :ten_dm WHERE id_dm = :id_dm";
        $stmt = $this->db->pdo->prepare($sql);

        $stmt->bindParam(':id_dm', $id_dm);
        $stmt->bindParam(':ten_dm', $ten_dm);
        // debug($data);
        $stmt->execute($data);
    }
    //Xóa dữ liệu
    public function delete($id_dm)
    {
        $sql = "DELETE FROM danh_muc WHERE id_dm = :id_dm";

        $stmt = $this->db->pdo->prepare($sql);

        $stmt->bindParam(':id_dm', $id_dm);

        $stmt->execute();
    }


    // XỬ LÝ TRANG HOME:

    // Lấy ra sản phẩm theo id danh mục:
    public function productByCategory($id_dm)
    {
        $sql = "SELECT `id_sp`, `ten_sp`, `gia_tien`, `gia_km`, `anh_sp`, `mo_ta`, `luot_xem`, `soluong_ton`, danh_muc.ten_dm 
            FROM `san_pham` JOIN danh_muc ON san_pham.id_dm = danh_muc.id_dm WHERE danh_muc.id_dm = :id_dm ORDER BY id_sp DESC";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_dm', $id_dm);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về tất cả sản phẩm trong danh mục
    }


    // Lấy ra tên danh mục cho trang chi tiết:
    public function cateNameByProductId($id_sp)
    {
        $sql = "SELECT danh_muc.ten_dm FROM `danh_muc` JOIN san_pham ON san_pham.id_dm = danh_muc.id_dm WHERE san_pham.id_sp = :id_sp";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_sp', $id_sp);
        $stmt->execute();
       return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
