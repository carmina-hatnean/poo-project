<?php

require_once 'DatabaseInterface.php';

class MysqlDb implements DatabaseInterface
{
    public function getOrders(): array
    {
        echo "Calling method " . __METHOD__ . PHP_EOL;
        return [];
    }
    public function getOrdersById(int $id)
    {
        echo "Calling method " . __METHOD__ . PHP_EOL;
    }
    public function createOrder(array $data): bool
    {
        echo "Calling method " . __METHOD__ . PHP_EOL;
        return true;
    }
    public function updateOrder(int $id, array $data): bool
    {
        echo "Calling method " . __METHOD__ . PHP_EOL;
        return true;
    }
    public function deleteOrder(int $id): bool
    {
        echo "Calling method " . __METHOD__ . PHP_EOL;
    }
}