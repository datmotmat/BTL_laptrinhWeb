<?php
if(is_array($product)){
    extract($product);
    $cate_current=$category_id;
    $brand=loadonebrand($brand_id);
}

$hinhpath="../upload/".$product_img;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' style='width:100px; height:100px' >";
}else{
    $hinh="no photo";
}
?>
<div class="admin-content-right">
                <div class="admin-content-right-product_add">
                    <h1>Sửa loại sản phẩm</h1>
                    <form action="index.php?atc=updateproduct" method="POST" enctype="multipart/form-data">
                        <label for="">Nhập tên sản phẩm <span style="color: red">*</span></label>
                        <input name="product_name" required type="text" value="<?=$product_name?>" />
                        <label for="">Nhập mã sản phẩm <span style="color: red">*</span></label>
                        <input required name="product_code" type="text" value="<?=$product_code?>"  />
                        <label for="">Chọn danh mục <span style="color: red">*</span></label>
                        <select name="category_id" id="category_id">
                            <?php
                            $category=loadallcate();
                            foreach($category as $cate){
                                extract($cate);

                            ?>
                                <option <?php if($category_id==$cate_current) echo "selected"?> value='<?php echo $category_id?>'><?php echo $category_name ?></option>;
                            <?php
                            }
                            ?>
                        </select><br>
                        <label for="">Chọn loại sản phẩm<span style="color: red">*</span></label>
                        <select name="brand_id" id="brand_id">
                            <option value="<?=$brand_id?>"><?=$brand['brand_name']?></option>
                        </select>
                        <label for="">Giá sản phẩm <span style="color: red">*</span></label>
                        <input name="product_price" type="text" value="<?=$product_price?>"  required  />
                        <label for="">Giá khuyến mãi <span style="color: red">*</span></label>
                        <input name="product_sale" type="text" value="<?=$product_sale?>"  required />
                        <label for="">Mô tả sản phẩm <span style="color: red">*</span></label>
                        <textarea name="product_desc" id="" cols="30" rows="10" required ><?=$product_desc?></textarea>
                        <label for="">Ảnh sản phẩm <span style="color: red">*</span></label><br>
                        <?php echo $hinh ?>
                        <input name="product_img" type="file" id="imageFile" accept="image/*"/>
                        <label for="">Ảnh Mô tả <span style="color: red">*</span></label>
                        <input name="product_img_desc[]" multiple type="file" id="imageFile" accept="image/*" />
                        <input type="hidden" name="id" value="<?php if(isset($product_id)&&($product_id>0)) echo $product_id;?>">
                        <input type="submit" name="capnhat" value="Sửa" id="button"></input>
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
                            var selected = '';
                            if(value.brand_id == "<?php echo $brand_id; ?>") {
                                selected = 'selected';
                            }
                            $('#brand_id').append('<option value="'+ value.brand_id +'" '+ selected +'>'+ value.brand_name +'</option>');
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