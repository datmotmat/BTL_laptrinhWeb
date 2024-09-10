<?php
include "../model/pdo.php";
include "../model/category.php";
include "../model/brand.php";
include "../model/product.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "header.php";
include "home.php";

//Controller
if(isset($_GET['atc'])){
    $atc = $_GET['atc'];
    switch ($atc){
        // Controller Danh mục
        case 'addcate':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tendanhmuc=$_POST['category_name'];
                insert_cate($tendanhmuc);
                $thongbao='Thêm thành công';
            }
            include "danhmuc/categoryadd.php";
            break;
        case 'catelist':
            $catelist=loadallcate();
            include "danhmuc/categorylist.php";
            break;
        case 'xoacate':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_cate($_GET['id']);
            }
            $catelist=loadallcate();
            include "danhmuc/categorylist.php";
            break;
        case 'suacate':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $cate=loadonecate($_GET['id']);
            }
            include "danhmuc/categoryedit.php";
            break;
        case 'updatecate':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tendanhmuc=$_POST['category_name'];
                $id=$_POST['id'];
                update_cate($tendanhmuc,$id);
                $thongbao='Cập nhật thành công';
            }
            $catelist=loadallcate();
            include "danhmuc/categorylist.php";
            break;
        // Controller Loại sản phẩm
        case 'addbrand':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloaisanpham=$_POST['brand_name'];
                $danhmuc=$_POST['category_id'];
                insert_brand($danhmuc,$tenloaisanpham);
                $thongbao='Thêm thành công';
            }
            include "loaisanpham/brandadd.php";
            break;
        case 'brandlist':
            $brandlist=loadallbrand();
            include "loaisanpham/brandlist.php";
            break;
        case 'xoabrand':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_brand($_GET['id']);
            }
            $brandlist=loadallbrand();
            include "loaisanpham/brandlist.php";
            break;
        case 'suabrand':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $brand=loadonebrand($_GET['id']);
            }
            include "loaisanpham/brandedit.php";
            break;
        case 'updatebrand':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloaisanpham=$_POST['brand_name'];
                $danhmuc=$_POST['category_id'];
                $id=$_POST['id'];
                update_brand($tenloaisanpham,$danhmuc,$id);
                $thongbao='Cập nhật thành công';
            }
            $brandlist=loadallbrand();
            include "loaisanpham/brandlist.php";
            break;
        // Controller Sản phẩm
        case 'addproduct':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tensanpham=$_POST['product_name'];
                $masanpham=$_POST['product_code'];
                $danhmuc=$_POST['category_id'];
                $loaisanpham=$_POST['brand_id'];
                $giasanpham=$_POST['product_price'];
                $giamsanpham=$_POST['product_sale'];
                $motasanpham=$_POST['product_desc'];
                $anh=$_FILES['product_img']['name'];
                $target_dir="../upload/";
                $tartget_file=$target_dir.basename($anh);
                move_uploaded_file($_FILES['product_img']['tmp_name'], $tartget_file);
                insert_product($tensanpham,$masanpham,$danhmuc,$loaisanpham,$giasanpham,$giamsanpham,$motasanpham,$anh);
                $sql="SELECT * FROM tbl_product ORDER BY product_id DESC";
                $product=pdo_query_one($sql);
                extract($product);
                $anhmota=$_FILES['product_img_desc']['name'];
                foreach($anhmota as $anh => $value){
                    $tartget_file=$target_dir.basename($value);
                    move_uploaded_file($_FILES['product_img_desc']['tmp_name'][$anh], $tartget_file);
                    insert_product_img_desc($product_id, $value);
                }
                $thongbao='Thêm thành công';
            }
            include "sanpham/productadd.php";
            break;
        case 'productlist':
            $productlist=loadallproduct();
            include "sanpham/productlist.php";
            break;
        case 'xoaproduct':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_product($_GET['id']);
            }
            $productlist=loadallproduct();
            include "sanpham/productlist.php";
            break;
        case 'suaproduct':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $product=loadoneproduct($_GET['id']);
            }
            include "sanpham/productedit.php";
            break;
        case 'updateproduct':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $tensanpham=$_POST['product_name'];
                $masanpham=$_POST['product_code'];
                $danhmuc=$_POST['category_id'];
                $loaisanpham=$_POST['brand_id'];
                $giasanpham=$_POST['product_price'];
                $giamsanpham=$_POST['product_sale'];
                $motasanpham=$_POST['product_desc'];
                $anh=$_FILES['product_img']['name'];
                $target_dir="../upload/";
                $tartget_file=$target_dir.basename($anh);
                move_uploaded_file($_FILES['product_img']['tmp_name'], $tartget_file);
                update_product($id,$tensanpham,$masanpham,$danhmuc,$loaisanpham,$giasanpham,$giamsanpham,$motasanpham,$anh);
                $anhmota=$_FILES['product_img_desc']['name'];
                foreach($anhmota as $anh => $value){
                    $tartget_file=$target_dir.basename($value);
                    move_uploaded_file($_FILES['product_img_desc']['tmp_name'][$anh], $tartget_file);
                    update_product_img_desc($id, $value);
                }
                $thongbao='Cập nhật thành công';
            }
            $productlist=loadallproduct();
            include "sanpham/productlist.php";
            break;
        // Controller User
        case 'userlist':
            $userlist=loadalluser();
            include "taikhoan/userlist.php";
            break;
        case 'xoauser':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_user($_GET['id']);
            }
            $userlist=loadalluser();
            include "taikhoan/userlist.php";
            break;
        case 'suauser':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $user=loadoneuser($_GET['id']);
            }
            include "taikhoan/useredit.php";
            break;
        case 'updateuser':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $username=$_POST['user_email'];
                $password=$_POST['user_pass'];
                $role=$_POST['user_role'];
                $id=$_POST['id'];
                update_user($username,$password,$role,$id);
                $thongbao='Cập nhật thành công';
            }
            $userlist=loadalluser();
            include "taikhoan/userlist.php";
            break;
        case 'billlist':
            include "bill/billlist.php";
            break;
        case 'xoabill':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_bill($_GET['id']);
            }
            include "bill/billlist.php";
            break;
        default:
            include "bill/billlist.php";
            break;
    }
}else{
    include "bill/billlist.php";
}
include "footer.php";
?>