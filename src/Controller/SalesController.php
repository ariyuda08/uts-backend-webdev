<?php
require_once __DIR__ . '/../Model/Sales.php';

class SalesController {
    private $salesModel;

    public function __construct() {
        $this->salesModel = new Sales();
    }

    public function getAllSales() {
        $sales = $this->salesModel->getAllSales();
        header('Content-Type: application/json');
        echo json_encode($sales);
    }

    public function getSalesById($id) {
        $sales = $this->salesModel->getSalesById($id);
        header('Content-Type: application/json');
        echo json_encode($sales);
    }

    public function addSales() {
        $data = $_POST;
        $this->salesModel->addSales($data);
        echo "Penjualan berhasil ditambahkan";
    }

    public function updateSales($id) {

        $data = $_POST;
        $this->salesModel->updateSales($id, $data);
        echo "Penjualan berhasil diperbarui";
    }

    public function deleteSales($id) {
        $this->salesModel->deleteSales($id);
        echo "Penjualan berhasil dihapus";
    }
}
?>
