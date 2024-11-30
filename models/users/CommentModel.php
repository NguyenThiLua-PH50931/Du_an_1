<?php
require_once 'database/function.php';

class CommentModel
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // Thêm bình luận
    public function insert_comment($noi_dung_bl, $ngay_bl, $id_sp, $id_tk)
    {
        $sql = "INSERT INTO binh_luan (noi_dung_bl, ngay_bl, id_sp, id_tk) 
                VALUES (:noi_dung_bl, :ngay_bl, :id_sp, :id_tk)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute([
            ':noi_dung_bl' => $noi_dung_bl,
            ':ngay_bl' => $ngay_bl,
            ':id_sp' => $id_sp,
            ':id_tk' => $id_tk
        ]);
    }
    

    // Danh sách bình luận:

    public function getCommentsByProductId($id_sp)
    {
        $sql = "SELECT binh_luan.noi_dung_bl, binh_luan.ngay_bl, tai_khoan.ho_ten
                FROM binh_luan
                JOIN tai_khoan ON binh_luan.id_tk = tai_khoan.id_tk
                WHERE binh_luan.id_sp = :id_sp
                ORDER BY binh_luan.ngay_bl DESC";
        
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute([':id_sp' => $id_sp]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    

    // Xóa bình luận
    public function deleteComment($id_bl){
        $sql = "DELETE FROM binh_luan WHERE id_bl = :id_bl";

        $stmt = $this->db->pdo->prepare($sql);

        $stmt->bindParam(':id_bl', $id_bl);

        $stmt->execute();
    }
}