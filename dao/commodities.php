<?php
require_once 'pdo.php';
function commodities_insert($name, $price, $sell, $forder_img, $date_add, $description, $special, $view, $category_id)
{
    $sql =  "iNSERT INTO commodities(name, price, sell, image, date_add, description, special, view, category_id) VALUES (?,?,?,?,?,?,?,?,?)";
    return pdo_excute($sql, $name, $price, $sell, $forder_img, $date_add, $description, $special, $view, $category_id);
}
function commodities_update($id, $name, $price, $sell, $image, $date_add, $description, $special, $view, $category_id)
{
    $sql = "uPDATE commodities 
    SET name=?,
    price=?,sell=?,image=?,date_add=?,description=?,special=?,view=?,category_id=? WHERE id=?";
    return pdo_excute($sql, $name, $price, $sell, $image, $date_add, $description, $special, $view, $category_id, $id);
}
function commodities_delete($id)
{
    $sql = "dELETE FROM commodities WHERE id=?";
    if (is_array($id)) {
        foreach ($id as $value) {
            
            pdo_excute($sql, $value);
        }
    } else {
        pdo_excute($sql, $id);
        // var_dump($sql);
        // die;
    }
}
function commodities_select_all()
{
    $sql = "sELECT * FROM commodities";
    return pdo_query($sql);
}
function commodities_count()
{
    $sql = "sELECT count(*) as sl FROM commodities ";
    return pdo_query($sql);
}
function commodities_select_by_id($id)
{
    $sql = "SELECT * FROM commodities WHERE id=?";
    return pdo_query_one($sql, $id);
}
function commodities_exist($id)
{
    $sql = "SELECT count(*) FROM commodities WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}
function commodities_tang_so_luot_xem($id)
{
    $sql = "update commodities set view=view +1 where id=?";
    return pdo_excute($sql, $id);
}
function commodities_select_top10()
{
    $sql = "select * from commodities where view >0 order by view desc limit 0, 10";
    return pdo_query($sql);
}
function commodities_select_dac_biet()
{
    $sql = "select * from commodities where special= 1";
    return pdo_query($sql);
}
function commodities_select_by_loai($id)
{
    $sql = "select * from commodities where category_id=?";
    return pdo_query($sql, $id);
}
function commodities_select_keyword($keywords)
{
    $sql = "select hh.*,lo.* from commodities hh join categories lo on lo.id= hh.category_id where lo.name like ? or hh.name like ? ";
    // echo $sql;
    // die;
    return pdo_query($sql, "%$keywords%", "%$keywords%");
}


function category_id_commodities()
{
    $sql = "select c.name as commodity_id,b.* from categories c join commodities b on b.category_id = c.id";
    return pdo_query($sql);
}


function commodities_select_all_home()
{
    $sql = "select * from commodities order by id desc limit 9";
    return pdo_query($sql);
}
function commodities_select_customize_category($category_id)
{
    $sql = "select * from commodities where category_id=?  order by id desc limit 0, 6";
    return pdo_query($sql,$category_id);
}

function commodities_select_page()
{
    global $SL_PER_PAGE;
    if (!isset($_SESSION["page_no"])) {
        $_SESSION['page_no'] = 0;
    }

    if (!isset($_SESSION["page_count"])) {
        $row_count = pdo_query_value("SELECT count(*) FROM commodities");
        $_SESSION['page_count'] = ceil($row_count / 10.0);
    }
}
