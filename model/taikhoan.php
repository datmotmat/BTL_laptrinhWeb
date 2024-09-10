<?php
function insert_taikhoan($email,$pass){
    $sql = "INSERT into tbl_user(user_email, user_pass) VALUES ('$email','$pass')";
    pdo_execute($sql);
}
function checkuser($email,$pass){
    $sql="select * from tbl_user where user_email='".$email."' AND user_pass='".$pass."'";
    $product=pdo_query_one($sql);
    return $product;
}
function loadalluser(){
    $sql="select * from tbl_user order by user_id desc";
    $productlist=pdo_query($sql);
    return $productlist;
}
function delete_user($id){
    $sql="delete from tbl_user where user_id=".$id;
    pdo_execute($sql);
}
function loadoneuser($id){
    $sql="select * from tbl_user where user_id=".$id;
    $cate=pdo_query_one($sql);
    return $cate;
}
function update_user($username,$password,$role,$id){
    $sql = "update tbl_user set user_email='$username', user_pass='$password', user_role=$role where user_id=".$id;
    pdo_execute($sql);
}
?>