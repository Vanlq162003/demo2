<?php

require_once "pdo.php";
function orders_list()
{
    $sql = "select orders.*, customer.name
    from orders 
    join customer on customer.id=orders.customer_id";
    return pdo_query($sql);
}

function orders_insert($customer_id, $name_receiver, $phone_receiver, $address_receiver, $status, $total_price)
{
    $sql = "insert into orders( customer_id, name_receiver, phone_receiver, address_receiver, status, total_price)
values (?,?,?,?,?,?)
";
    pdo_excute($sql, $customer_id, $name_receiver, $phone_receiver, $address_receiver, $status, $total_price);
}

function order_select_maxId($customer_id)
{
    $sql = "select max(id) as id_product from orders where customer_id=?";
    return pdo_query($sql, $customer_id);
}
function order_product_($order_id_, $id, $quantity)
{
    $sql = "insert into order_product(order_id,product_id,quantity) values(?,?,?)";
    return pdo_query($sql, $order_id_, $id, $quantity);
    // var_dump($sql);
    // die;
}

function update_order($status, $id)
{
    $sql = "update orders set 
status =? where id =?";
    pdo_excute($sql, $status, $id);
}
function orders_select_by_product($id)
{
    $sql = "select *
    from order_product 
    join commodities on commodities.id=order_product.product_id
    where order_id =?";
    return pdo_query($sql, $id);
}
