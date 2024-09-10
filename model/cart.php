<?php
function insert_bill($name,$phone,$noinhanhang,$payment,$ngaydathang,$tongdonhang){
    $sql="insert into tbl_bill(bill_name,bill_phone,bill_noinhanhang,bill_payment,bill_ngaydathang,bill_tongdonhang) values('$name','$phone','$noinhanhang','$payment','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($user_id,$pro_id,$cart_img,$cart_name,$cart_price,$cart_soluong,$cart_thanhtien,$bill_id){
    $sql="insert into tbl_cart(user_id,pro_name,cart_img,cart_name,cart_price,cart_soluong,cart_thanhtien,bill_id) values('$user_id','$pro_id','$cart_img','$cart_name','$cart_price','$cart_soluong','$cart_thanhtien','$bill_id')";
    return pdo_execute($sql);
}
function loadonebill($id){
    $sql="select * from tbl_bill where bill_id=".$id;
    $cate=pdo_query_one($sql);
    return $cate;
}
function onebill(){
    $sql="select * from tbl_bill order by bill_id desc";
    return pdo_execute_return_lastInsertId($sql);
}
function loadallbill(){
    $sql="select * from tbl_bill order by bill_id desc";
    $productlist=pdo_query($sql);
    return $productlist;
}
function an_bill($id){
    $sql = "update tbl_bill set hidden=1 where bill_id=".$id;
    pdo_execute($sql);
}
function hien_bill($id){
    $sql = "update tbl_bill set hidden=0 where bill_id=".$id;
    pdo_execute($sql);
}
function delete_bill($id){
    $sql="delete from tbl_bill where bill_id=".$id;
    pdo_execute($sql);
}
?>