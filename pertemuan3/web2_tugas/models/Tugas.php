<?php
class Tugas {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM tugas");
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM tugas WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($judul, $deskripsi, $deadline) {
        $stmt = $this->db->prepare("INSERT INTO tugas (judul, deskripsi, deadline) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $judul, $deskripsi, $deadline);
        return $stmt->execute();
    }

    public function update($id, $judul, $deskripsi, $deadline) {
        $stmt = $this->db->prepare("UPDATE tugas SET judul=?, deskripsi=?, deadline=? WHERE id=?");
        $stmt->bind_param("sssi", $judul, $deskripsi, $deadline, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM tugas WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}