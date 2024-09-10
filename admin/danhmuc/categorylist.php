            <div class="admin-content-right">
                <div class="admin-content-right-category_list">
                    <h1>Danh sách danh mục</h1>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Danh mục</th>
                            <th>Tùy chỉnh</th>
                        </tr>
                        <?php
                        foreach($catelist as $cate){
                            extract($cate);
                            $suacate="index.php?atc=suacate&id=".$category_id;
                            $xoacate="index.php?atc=xoacate&id=".$category_id;
                            echo "<tr>
                                    <td>$category_id</td>
                                    <td>$category_name</td>
                                    <td><a href='$suacate'><input type='button' value='Sửa' id='button'></a> <a href='$xoacate'><input id='button' type='button' value='Xóa'></a></td>
                                  </tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
