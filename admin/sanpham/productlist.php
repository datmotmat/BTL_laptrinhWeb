            <div class="admin-content-right">
                <div class="admin-content-right-category_list">
                    <h1>Danh sách loại sản phẩm</h1>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Loại sản phẩm</th>
                            <th>Giá bán</th>
                            <th>Giá giảm</th>
                            <th>Tùy chỉnh</th>
                        </tr>
                        <?php
                        foreach($productlist as $product){
                            extract($product);
                            $suaproduct="index.php?atc=suaproduct&id=".$product_id;
                            $xoaproduct="index.php?atc=xoaproduct&id=".$product_id;
                            $hinhpath="../upload/".$product_img;
                            if(is_file($hinhpath)){
                                $hinh="<img src='".$hinhpath."' style='width:100px; height:100px' >";
                            }else{
                                $hinh="no photo";
                            }
                            echo "<tr>
                                    <td>$product_id</td>
                                    <td>$hinh</td>
                                    <td>$product_name</td>
                                    <td>$category_id</td>
                                    <td>$brand_id</td>
                                    <td>$product_price</td>
                                    <td>$product_sale</td>
                                    <td><a href='$suaproduct'><input type='button' value='Sửa' id='button'></a> <a href='$xoaproduct'><input id='button' type='button' value='Xóa'></a></td>
                                  </tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
