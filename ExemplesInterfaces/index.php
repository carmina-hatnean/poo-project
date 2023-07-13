<?php

require_once 'Application.php';
require_once 'MysqlDb.php';
require_once 'SqliteDb.php';
require_once 'RESTDb.php';

$app = new Application(

    new SqliteDb()
);

$app->db->getOrders();
$app->db->getOrdersById(1);
$app->db->createOrder([]);
$app->db->updateOrder(1,[]);
$app->db->deleteOrder(1);