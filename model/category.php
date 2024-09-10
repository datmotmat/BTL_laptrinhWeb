<?php
function insert_cate($tendanhmuc){
    $sql = "INSERT into tbl_category(category_name) VALUES ('$tendanhmuc')";
    pdo_execute($sql);
}
function loadallcate(){
    $sql="select * from tbl_category order by category_id asc";
    $catelist=pdo_query($sql);
    return $catelist;
}
function delete_cate($id){
    $sql="delete from tbl_category where category_id=".$id;
    pdo_execute($sql);
}
function loadonecate($id){
    $sql="select * from tbl_category where category_id=".$id;
    $cate=pdo_query_one($sql);
    return $cate;
}
function update_cate($tendanhmuc,$id){
    $sql = "update tbl_category set category_name='".$tendanhmuc."' where category_id=".$id;
    pdo_execute($sql);
}
?>