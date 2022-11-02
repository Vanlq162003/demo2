<?php
require_once "pdo.php";

function customer_selecAll()
{
  $sql = "sELECT * FROM customer";
  return pdo_query($sql);
}

function customer_check_email($email)
{
  $sql = "select * from customer where email = ?";
  return pdo_query_one($sql, $email);
}

function customer_check_email_exits($email)
{
  $sqlCheckEmail = "select  count(*) as total 
  from customer  where email = ?";
  return pdo_query_one($sqlCheckEmail, $email);
}
function customer_check_email_exits_insert($email, $id)
{
  $sqlCheckEmail = "select count(*) from customer
  where email =? and id != ?";
  return pdo_query($sqlCheckEmail, $email, $id);
}



// thêm
function customer_insert($password, $name, $kich_hoat, $avatar, $email, $vai_tro)
{
  $sql = "insert into customer( password, name, kich_hoat, avatar, email, vai_tro) values(?,?,?,?,?,?)";
  pdo_excute($sql, $password, $name, $kich_hoat == 1, $avatar, $email, $vai_tro == 1);
}


// delete
function customer_delete($id)
{
  $sql = "delete from customer where id=?";
  if (is_array($id)) {
    foreach ($id as $value) {

      pdo_excute($sql, $value);
    }
  } else {
    pdo_excute($sql, $id);
  }
}


// lấy thông tin 1 mã loại 
function customer_getInfo($id)
{
  $sql = "select * from customer where id=?";
  return  pdo_query_one($sql, $id);
}

// // cập nhập thông tin 1 mã loại 
function customer_update_admin($id,  $name, $kich_hoat, $avatar, $vai_tro)
{
  $sql = "update customer set  name=?, kich_hoat=?, avatar=?, vai_tro=? where id=?";
  return  pdo_excute($sql, $name, $kich_hoat, $avatar,  $vai_tro, $id);
}
function customer_update($id, $password, $name, $kich_hoat, $avatar, $email, $vai_tro)
{
  $sql = "update customer set password=?, name=?, kich_hoat=?, avatar=?, email=?, vai_tro=? where id=?";
  return  pdo_excute($sql, $password, $name, $kich_hoat, $avatar, $email, $vai_tro, $id);
}
function customer_update_optimize($id,  $name,  $hinh)
{
  $sql = "update customer set name=?, avatar=?  where id=?";
  return  pdo_excute($sql,  $name,  $hinh, $id);
}


function customer_select_by_id($id)
{
  $sql = "select * from customer where id=?";
  return pdo_query_one($sql, $id);
}
function customer_select_by_email($email)
{
  $sql = "select * from customer where email=?";
  return pdo_query_one($sql, $email);
}

function customer_exist($id)
{
  $sql = "select count(*) from customer where id=?";
  return pdo_query_value($sql, $id) > 0;
}


function customer_select_by_role($vai_tro)
{
  $sql = "select * from customer where vai_tro=?";
  return pdo_query($sql, $vai_tro) > 0;
}

function customer_change_password($id, $password)
{
  $sql = "update customer set password=? where id=?";
  return pdo_query($sql, $password, $id);
}
