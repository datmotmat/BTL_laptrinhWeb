<div class="admin-content-right">
                <div class="admin-content-right-category_add">
                    <h1>Thêm Loại Sản Phẩm</h1><br>
                    <form action="index.php?atc=addbrand" method="POST">
                        <label style="font-size:20px">Chọn danh mục</label>
                        <select name="category_id" id="">
                            <?php
                            $category=loadallcate();
                            foreach($category as $cate){
                                extract($cate);
                                echo "<option value='$category_id'>$category_name</option>";
                            }
                            ?>
                        </select><br>
                        <input name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm" />
                        <input type="submit" name="themmoi" value="Thêm" id="button"></input>
                        <?php
                        if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
                        ?>
                    </form>
                </div>
            </div>
