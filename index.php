<?php 
session_start();
include 'model/pdo.php';
include 'global.php';
include 'model/product.php';
include 'model/category.php';
include 'model/brand.php';
include 'model/taikhoan.php';
include 'model/cart.php';
$spbest=loadallproduct_home_best();
$spsale=loadallproduct_home_sale();
$danhmuc=loadallcate();
include 'view/header.php';
if(isset($_GET['atc'])&&($_GET['atc']!="")){
    switch ($_GET['atc']) {
        case 'gioithieu':
            include 'view/gioithieu.php';
            break;
        case 'giohang':
            include 'view/cart/cart.php';
            break;
        case 'danhmucsp':
            if(isset($_GET['cateid'])&&($_GET['cateid']>0)){
                $cate_id=$_GET['cateid'];
                $product_cate=loadallproduct_cate($cate_id);
            }
            if(isset($_GET['brandid'])&&($_GET['brandid']>0)){
                $brand_id=$_GET['brandid'];
                $product_brand=loadallproduct_brand($brand_id);
            }
            include 'view/category.php';
            break;
        case 'chitietsp':
            if(isset($_GET['proid'])&&($_GET['proid']>0)){
                $pro_id=$_GET['proid'];
            }
            include 'view/product.php';
            break;
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $email=$_POST['email'];
                $pass=$_POST['password'];
            }
            include 'view/login.php';
            break;
        case 'dangnhap':
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $email=$_POST['email'];
                $pass=$_POST['password'];
                $checkuser=checkuser($email,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user']=$checkuser;
                    extract($checkuser);
                    if($user_role==1){
                        header('Location: admin');
                    }else{
                    header('Location: index.php');
                    }
                }
                else{
                    $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký!";
                }
            }
            include 'view/dangnhap.php';
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
        case 'cart':
            include 'view/cart/cart.php';
            break; 
        case 'delivery':
            include 'view/cart/delivery.php';
            break;
        case 'bill':
            if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                $name=$_POST['name'];
                $phone=$_POST['phone'];
                $city=$_POST['city'];
                $distr=$_POST['district'];
                $addr=$_POST['address'];
                $noinhanhang = $addr . ", " . $distr . ", " . $city;
                $payment=$_POST['payment-sl'];
                $ngaydathang=date('h:i:sa d/m/Y');
                $tongdonhang = array_sum(array_map(function($item) {
                    return $item['product_price'] * $item['product_quantity'];
                }, $_SESSION['cart']));
                $idbill=insert_bill($name,$phone,$noinhanhang,$payment,$ngaydathang,$tongdonhang);
                $_POST['dongydathang']=null;
            }

            foreach($_SESSION['cart'] as $cart){
                $cart_thanhtien=(int)$cart['product_price']*(int)$cart['product_quantity'];
                if(!isset($idbill)){
                    $idbill=onebill();
                }
                insert_cart($_SESSION['user']['user_id'],$cart['product_name'],$cart['product_image'],$cart['product_name'],$cart['product_price'],$cart['product_quantity'],$cart_thanhtien,$idbill);
            }
            $listbill1=loadonebill($idbill);
            include 'view/cart/donhang.php';
            break;  
        default:
            include 'view/home.php';
            break;
    
    }
}else{
    include 'view/home.php';
}
if(isset($_GET['atc'])&&($_GET['atc']!="")){
    switch ($_GET['atc']) {
        case 'dangky':
            break;
        case 'dangnhap':
            break;
        default:
        include 'view/footer.php';
        break;
    }
}else{
    include 'view/footer.php';
}
 ?>

