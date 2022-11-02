<?php
function loai_selecAll()
{
  $sql = "sELECT * FROM categories";
  return pdo_query($sql);
}
// thêm
function loai_insert($name)
{
  $sql = "insert into categories(name) values(?)";
  pdo_excute($sql, $name);
}
// delete
function loai_delete($id)
{
  $sql = "delete from categories where id=?";
  if (is_array($id)) {
    foreach ($id as $value) {

      pdo_excute($sql, $value);
    }
  } else {
    pdo_excute($sql, $id);
  }
}
// lấy thông tin 1 mã loại 
function loai_getInfo($id)
{
  $sql = "select * from categories where id=?";
  return  pdo_query_one($sql, $id);
}
// // cập nhập thông tin 1 mã loại 
function loai_update($id, $name)
{
  $sql = "update categories set name=? where id=?";
  return  pdo_excute($sql, $name, $id);
}
function loai_select_by_id($ma_loai)
{
  $sql = "SELECT * FROM categories WHERE id=?";
  return pdo_query_one($sql, $ma_loai);
}
function loai_exist($ma_loai)
{
  $sql = "SELECT count(*) FROM categories WHERE id=?";
  return pdo_query_value($sql, $ma_loai) > 0;
}
