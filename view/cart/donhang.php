<?php
session_start();
?>
    <!--------------------------------- cart ----------------------------------->
    <section class="cart">
        <h2 class="tt">ĐƠN ĐẶT HÀNG</h2>
        <?php
        if(isset($listbill)&&(is_array($listbill))){
            extract($listbill);
        }
        else{
            $bill_id="";
            $bill_name="";
            $bill_phone="";
            $bill_noinhanhang="";
            $bill_payment="";
            $bill_ngaydathang="";
            $bill_tongdonhang="";
            $bill_status="";

        }
        ?>
        <div class="container">
            <div class="cart-content row">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>TÊN ĐƠN HÀNG</th>
                            <th>ĐIỆN THOẠI</th>
                            <th>ĐỊA CHỈ</th>
                            <th>PT THANH TOÁN</th>
                            <th>NGÀY ĐẶT HÀNG</th>
                            <th>TỔNG ĐƠN HÀNG</th>
                            <th>TRẠNG THÁI</th>
                        </tr>
                        <?php
                        $status="";
                        switch ($bill_status){
                            case '0':
                                $status="Đơn hàng mới";
                                break;
                            case '1':
                                $status="Đang xử lí";
                                break;
                            case '2':
                                $status="Đang giao hàng";
                                break;
                            case '3':
                                $status="Đã giao hàng";
                                break;
                            default:
                                $status="";
                                break;
                        }
                        $pay="";
                        switch ($bill_payment){
                            case 'TienMat':
                                $pay="Tiền Mặt";
                                break;
                            case 'ChuyenKhoan':
                                $pay="Chuyển khoản";
                                break;
                            default:
                            $pay="";
                                break;
                        }
                        echo   '<tr><td>'.$bill_id.'</td>
                                <td>'.$bill_name.'</td>
                                <td>'.$bill_phone.'</td>
                                <td>'.$bill_noinhanhang.'</td>
                                <td>'.$pay.'</td>
                                <td>'.$bill_ngaydathang.'</td>
                                <td>'.$bill_tongdonhang.'</td>
                                <td>'.$status.'</td></tr>'
                        ?>
                    </table>
                </div>
</section>