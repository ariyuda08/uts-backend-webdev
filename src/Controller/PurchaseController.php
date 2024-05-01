<?php
require_once __DIR__ . '/../Model/Purchases.php';

class PurchaseController {
    private $purchaseModel;

    public function __construct() {
        $this->purchaseModel = new Purchases();
    }

    public function getAllPurchases() {
        $purchases = $this->purchaseModel->getAllPurchases();
        header('Content-Type: application/json');
        echo json_encode($purchases);
    }

    public function getPurchaseById($id) {
        $purchase = $this->purchaseModel->getPurchaseById($id);
        header('Content-Type: application/json');
        echo json_encode($purchase);
    }

    public function addPurchase($data) {
        $this->purchaseModel->addPurchase($data);
        echo "Pembelian berhasil ditambahkan";
    }

    public function updatePurchase($id, $data) {
        $this->purchaseModel->updatePurchase($id, $data);
        echo "Pembelian berhasil diperbarui";
    }

    public function deletePurchase($id) {
        $this->purchaseModel->deletePurchase($id);
        echo "Pembelian berhasil dihapus";
    }
}
?>
