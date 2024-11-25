<?php
require_once 'database/function.php';

class ShippingModel
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getShipping($id_tk)
    {
        $sql = "SELECT * FROM `van_chuyen` WHERE id_tk = :id_tk";

        $stmt = $this->db->pdo->prepare($sql);

        $stmt->bindValue(':id_tk', $id_tk);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function addShipping($id_tk, $diaChi, $soDienThoai, $hoTen, $note)
    {
        $sql = "INSERT INTO `van_chuyen`(`id_tk`, `diaChi`, `soDienThoai`, `hoTen`, `note`) 
                    VALUES (:id_tk, :diaChi, :soDienThoai, :hoTen, :note)";

        $stmt = $this->db->pdo->prepare($sql);

        $stmt->bindValue(':id_tk', $id_tk);
        $stmt->bindValue(':diaChi', $diaChi);
        $stmt->bindValue(':soDienThoai', $soDienThoai);
        $stmt->bindValue(':hoTen', $hoTen);
        $stmt->bindValue(':note', $note);

        $stmt->execute();
    }
    public function updateShipping($id_vanchuyen, $id_tk, $diaChi, $soDienThoai, $hoTen, $note)
    {
        $sql = "UPDATE `van_chuyen` SET `id_vanChuyen`= :id_vanChuyen, `id_tk`= :id_tk, `diaChi`= :diaChi,
                `soDienThoai`= :soDienThoai, `hoTen`=:hoTen,`note`= :note WHERE id_vanChuyen = :id_vanChuyen";

        $stmt = $this->db->pdo->prepare($sql);

        $stmt->bindValue(':id_vanChuyen', $id_vanchuyen);
        $stmt->bindValue(':id_tk', $id_tk);
        $stmt->bindValue(':diaChi', $diaChi);
        $stmt->bindValue(':soDienThoai', $soDienThoai);
        $stmt->bindValue(':hoTen', $hoTen);
        $stmt->bindValue(':note', $note);

        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
