<?php
function insert_brand($danhmuc,$tenloaisanpham){
    $sql = "INSERT into tbl_brand(category_id,brand_name) VALUES ('$danhmuc','$tenloaisanpham')";
    pdo_execute($sql);
}
function loadallbrand(){
    $sql="select * from tbl_brand order by brand_id desc";
    $brandlist=pdo_query($sql);
    return $brandlist;
}
function loadallbrand_cate($category_id){
    $sql="select * from tbl_brand where category_id='".$category_id."' order by brand_id asc";
    $brandlist=pdo_query($sql);
    return $brandlist;
}
function delete_brand($id){
    $sql="delete from tbl_brand where brand_id=".$id;
    pdo_execute($sql);
}
function loadonebrand($id){
    $sql="select * from tbl_brand where brand_id=".$id;
    $brand=pdo_query_one($sql);
    return $brand;
}
function update_brand($tenloaisanpham,$danhmuc,$id){
    $sql = "update tbl_brand set brand_name='".$tenloaisanpham."', category_id='".$danhmuc."' where brand_id=".$id;
    pdo_execute($sql);
}
?>