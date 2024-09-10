            <div class="admin-content-right">
                <div class="admin-content-right-category_list">
                    <h1>Danh sách loại sản phẩm</h1>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Loại sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Tùy chỉnh</th>
                        </tr>
                        <?php
                        foreach($brandlist as $brand){
                            extract($brand);
                            $suabrand="index.php?atc=suabrand&id=".$brand_id;
                            $xoabrand="index.php?atc=xoabrand&id=".$brand_id;
                            echo "<tr>
                                    <td>$brand_id</td>
                                    <td>$brand_name</td>
                                    <td>$category_id</td>
                                    <td><a href='$suabrand'><input type='button' value='Sửa' id='button'></a> <a href='$xoabrand'><input id='button' type='button' value='Xóa'></a></td>
                                  </tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
