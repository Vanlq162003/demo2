<?php
require_once 'pdo.php';
function binh_luan_insert($content, $commodity_id, $customer_id, $date_comment)
{
    $sql = "INSERT INTO comments(content, commodity_id,customer_id,date_comment) 
    values(?,?,?,?) ";
    pdo_excute($sql, $content, $commodity_id, $customer_id, $date_comment);
}
function binh_luan_update($id, $content, $commodity_id, $customer_id, $date_comment)
{
    $sql = "UPDATE comments SET content=?,commodity_id=?,customer_id=?,date_comment=? WHERE id=?";
    pdo_excute($sql, $content, $commodity_id, $customer_id, $date_comment, $id);
}
function binh_luan_delete($id)
{
    $sql = "delete from comments where id=?";
    if (is_array($id)) {
        foreach ($id as $value) {
            pdo_excute($sql, $value);
        }
    } else {
        pdo_excute($sql, $id);
    }
}
function binh_luan_select_all()
{
    $sql = "select * from comments cm 
    order by date_comment DESC
     ";
    return pdo_query($sql);
}
function binh_luan_select_by_id($id)
{
    $sql = "select * from comments where id=?";
    return pdo_query_one($sql, $id);
}
function binh_luan_exist($id)
{
    $sql = "select count(*) from comments where id=?";
    return pdo_query_value($sql, $id) > 0;
}
function binh_luan_select_by_hang_hoa($commodity_id)
{
    $sql = "select b.*,h.name from comments b join commodities h on h.id=b.commodity_id
    where b.commodity_id=? ORDER BY date_comment";
    return pdo_query($sql, $commodity_id);
}
function binh_luan_select_by_customer($commodity_id)
{
    
    $sql = "select comments.*,customer.name as name_person_comment from comments join customer  on comments.customer_id=customer.id  WHERE commodity_id =? ORDER BY date_comment";
    return pdo_query($sql, $commodity_id);
}
