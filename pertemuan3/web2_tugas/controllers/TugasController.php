<?php
require_once __DIR__ . '/../models/Tugas.php';

class TugasController {
    private $model;

    public function __construct($db) {
        $this->model = new Tugas($db);
    }

    public function index() {
        $data = $this->model->getAll();
        include __DIR__ . '/../views/tugas/index.php';
    }

    public function tambah() {
        include __DIR__ . '/../views/tugas/create.php';
    }

    public function simpan() {
        if ($this->model->create($_POST['judul'], $_POST['deskripsi'], $_POST['deadline'])) {
            header("Location: index.php?page=tugas");
            exit;
        }
    }

    public function edit() {
        $data = $this->model->getById($_GET['id']);
        include __DIR__ . '/../views/tugas/edit.php';
    }

    public function update() {
        if ($this->model->update($_POST['id'], $_POST['judul'], $_POST['deskripsi'], $_POST['deadline'])) {
            header("Location: index.php?page=tugas");
            exit;
        }
    }

    public function hapus() {
        if ($this->model->delete($_GET['id'])) {
            header("Location: index.php?page=tugas");
            exit;
        }
    }
}