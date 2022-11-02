<?php

function pdo_get_connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
        $connect = new PDO("mysql:host=$servername;dbname=sample_project", $username, $password);
    
        $connect->setAttribute(\PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       return $connect;
    } catch (PDOException $e) {
        echo "connection failed" . $e->getMessage();
    } 
}

// $sql là 1 mảng 
// thêm sưa xóa dữ liệu 
// hàm thực thi csdl
function pdo_excute($sql)
{
    $sql_args= array_slice(func_get_args(),1);
    try {
        $connect=pdo_get_connection();
        $stmt=$connect->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    }
    finally {
        unset($connect);
    }
}


// truy vấn nhiều dữ liệu 
function pdo_query($sql)
{
    $sql_args= array_slice(func_get_args(),1);
    try {
        $connect=pdo_get_connection();
        $stmt=$connect->prepare($sql);
        $stmt->execute($sql_args);
        $rows=$stmt->fetchAll();
        return $rows;
        
    } catch (PDOException $e) {
        throw $e;
    }
    finally {
        unset($connect);
    }
}

// truy vấn 1 dữ liệu 
function pdo_query_one($sql)
{
    $sql_args= array_slice(func_get_args(),1);
    try {
        $connect=pdo_get_connection();
        $stmt=$connect->prepare($sql);
        $stmt->execute($sql_args);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        return $row;

    } catch (PDOException $e) {
        throw $e;
    }
    finally {
        unset($connect);
    }
}

function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($sql_args);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return array_values($row)[0];
    }
    catch(PDOException $e){
    throw $e;
    }
    finally{
    unset($conn);
    }
    }