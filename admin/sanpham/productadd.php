            <div class="admin-content-right">
                <div class="admin-content-right-product_add">
                    <h1>Thêm Sản Phẩm</h1>
                    <form action="index.php?atc=addproduct" method="POST" enctype="multipart/form-data">
                        <label for="">Nhập tên sản phẩm <span style="color: red">*</span></label>
                        <input name="product_name" required type="text" placeholder="Nhập tên sản phẩm" />
                        <label for="">Nhập mã sản phẩm <span style="color: red">*</span></label>
                        <input required name="product_code" type="text" placeholder="Nhập mã sản phẩm" />
                        <label for="">Chọn danh mục <span style="color: red">*</span></label>
                        <select name="category_id" id="category_id">
                            <option value="#">--Chọn--</option>
                            <?php
                            $category=loadallcate();
                            foreach($category as $cate){
                                extract($cate);
                                echo "<option value='".$category_id."'>$category_name</option>";
                            }
                            ?>
                        </select>
                        <label for="">Chọn loại sản phẩm<span style="color: red">*</span></label>
                        <select name="brand_id" id="brand_id">
                            <option value="">--Chọn--</option>

                        </select>
                        <label for="">Giá sản phẩm <span style="color: red">*</span></label>
                        <input name="product_price" required type="text" placeholder="Giá sản phẩm" />
                        <label for="">Giá khuyến mãi <span style="color: red">*</span></label>
                        <input name="product_sale" required type="text" placeholder="Giá khuyến mãi" />
                        <label for="">Mô tả sản phẩm <span style="color: red">*</span></label>
                        <textarea required name="product_desc" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm"></textarea>
                        <label for="">Ảnh sản phẩm <span style="color: red">*</span></label>
                        <input name="product_img" required type="file" id="imageFile" accept="image/*"/>
                        <label for="">Ảnh Mô tả <span style="color: red">*</span></label>
                        <input name="product_img_desc[]" required multiple type="file" id="imageFile" accept="image/*" />
                        <input type="submit" name="themmoi" value="Thêm" id="button"></input>
                        <?php
                        if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
                        ?>
                    </form>
                </div>
            </div>

<script>
    $(document).ready(function(){
        $('#category_id').change(function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: 'sanpham/productadd_ajax.php',
                    type: 'POST',
                    data: {category_id: category_id},
                    dataType: 'json',
                    success: function(data) {
                        $('#brand_id').empty(); // Xóa các tùy chọn hiện tại
                        $('#brand_id').append('<option value="#">--Chọn--</option>'); // Tùy chọn mặc định
                        $.each(data, function(key, value) {
                            $('#brand_id').append('<option value="'+ value.brand_id +'">'+ value.brand_name +'</option>');
                        });
                    }
                });
            } else {
                $('#brand_id').empty(); // Xóa nếu không có danh mục nào được chọn
                $('#brand_id').append('<option value="#">--Chọn--</option>');
            }
        });
    });
</script>
