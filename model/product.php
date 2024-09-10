<?php
function insert_product($tensanpham,$masanpham,$danhmuc,$loaisanpham,$giasanpham,$giamsanpham,$motasanpham,$filename){
    $sql = "INSERT into tbl_product(product_name, product_code, category_id, brand_id, product_price, product_sale, product_desc, product_img)
    VALUES ('$tensanpham','$masanpham','$danhmuc','$loaisanpham','$giasanpham','$giamsanpham','$motasanpham','$filename')";
    pdo_execute($sql);
}
function insert_product_img_desc($product_id, $anh){
    $sql = "INSERT into tbl_product_img_desc(product_id, product_img_desc) VALUES ('$product_id','$anh')";
    pdo_execute($sql);
}
function loadallproduct(){
    $sql="select * from tbl_product order by product_id desc";
    $productlist=pdo_query($sql);
    return $productlist;
}
function loadallproduct_cate($category_id){
    $sql="select * from tbl_product where category_id='".$category_id."' order by product_id desc limit 0,8";
    $productlist=pdo_query($sql);
    return $productlist;
}
function loadallproduct_brand($brand_id){
    $sql="select * from tbl_product where brand_id='".$brand_id."' order by product_id desc limit 0,8";
    $productlist=pdo_query($sql);
    return $productlist;
}
function loadallproduct_home_best(){
    $sql="select * from tbl_product order by rand() limit 0,5";
    $productlist=pdo_query($sql);
    return $productlist;
}
function loadallproduct_home_sale(){
    $sql="select * from tbl_product group by product_sale order by product_sale asc limit 0,4";
    $productlist=pdo_query($sql);
    return $productlist;
}   
function delete_product($id){
    $sql="delete from tbl_product_img_desc where product_id=".$id;
    pdo_execute($sql);
    $sql="delete from tbl_product where product_id=".$id;
    pdo_execute($sql);
}
function loadoneproduct($id){
    $sql="select * from tbl_product where product_id=".$id;
    $product=pdo_query_one($sql);
    return $product;
}
function loadproduct_img_desc($id){
    $sql="select * from tbl_product_img_desc where product_id=".$id;
    $product=pdo_query($sql);
    return $product;
}
function update_product($id,$tensanpham,$masanpham,$danhmuc,$loaisanpham,$giasanpham,$giamsanpham,$motasanpham,$anh){
    if($anh!="")
        $sql = "update tbl_product 
                set product_name='".$tensanpham."', product_code='".$masanpham."', category_id='".$danhmuc."', 
                brand_id='".$loaisanpham."', product_price='".$giasanpham."', product_sale='".$giamsanpham."', 
                product_desc='".$motasanpham."' , product_img='".$anh."'
                where product_id=".$id;
    else
        $sql = "update tbl_product 
                set product_name='".$tensanpham."', product_code='".$masanpham."', category_id='".$danhmuc."', 
                brand_id='".$loaisanpham."', product_price='".$giasanpham."', product_sale='".$giamsanpham."',  
                product_desc='".$motasanpham."' 
                where product_id=".$id;

    pdo_execute($sql);
}
function update_product_img_desc($product_id, $anh){
    if($anh!=""){
        $sql = "update tbl_product_img_desc set product_img_desc='".$anh."' where product_id=".$product_id;
        pdo_execute($sql);
    }
}
function show_brand_ajax($category_id){
    $sql = "SELECT * FROM tbl_brand WHERE category_id = '$category_id'";
    $brand=pdo_query($sql);
    return $brand;
}
?>