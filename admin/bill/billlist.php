<div class="admin-content-right">
                <div class="admin-content-right-category_list">
                    <h1>Danh sách đơn đặt hàng</h1>
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
                            <th>TÙY CHỈNH</th>
                        </tr>
                        <?php
                                    $billlist=loadallbill();
                        foreach($billlist as $bill){
                            extract($bill);
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
                            $xoabill="index.php?atc=xoabill&id=".$bill_id;
                            echo   "</tr><td>".$bill_id."</td>
                            <td>".$bill_name."</td>
                            <td>".$bill_phone."</td>
                            <td>".$bill_noinhanhang."</td>
                            <td>".$pay."</td>
                            <td>".$bill_ngaydathang."</td>
                            <td>".$bill_tongdonhang."</td>
                            <td>".$status."</td>
                            <td><a href='$xoabill'><input type='button' value='Xóa' id='button'></a></td> </tr>";
                        }
                        ?>
                         

                    </table>
                </div>
            </div>
