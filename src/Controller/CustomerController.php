<?php
require_once __DIR__ . '/../Model/Customers.php';

class CustomerController {
    private $customerModel;

    public function __construct() {
        $this->customerModel = new Customers();
    }

    public function getAllCustomers() {
        $customers = $this->customerModel->getAllCustomers();
        header('Content-Type: application/json');
        echo json_encode($customers);
    }

    public function getCustomerById($customerId) {
        $customer = $this->customerModel->getCustomerById($customerId);
        header('Content-Type: application/json');
        echo json_encode($customer);
    }

    public function addCustomer($data) {
        $this->customerModel->addCustomer($data);
        echo "Customer berhasil ditambahkan";
    }

    public function updateCustomer($customerId, $data) {
        $this->customerModel->updateCustomer($customerId, $data);
        echo "Customer berhasil diperbarui";
    }

    public function deleteCustomer($customerId) {
        $this->customerModel->deleteCustomer($customerId);
        echo "Customer berhasil dihapus";
    }
}
?>
