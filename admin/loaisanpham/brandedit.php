<?php
if(is_array($brand)){
    extract($brand);
    $cate_current=$category_id;
}
?>
<div class="admin-content-right">
                <div class="admin-content-right-category_add">
                    <h1>Sửa loại sản phẩm</h1>
                    <form action="index.php?atc=updatebrand" method="POST">
                        <select name="category_id">
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
                        <input name="brand_name" type="text" value="<?php if(isset($brand_name)&&($brand_name!="")) echo $brand_name;?>" required />
                        <input type="hidden" name="id" value="<?php if(isset($brand_id)&&($brand_id>0)) echo $brand_id;?>">
                        <input type="submit" name="capnhat" value="Sửa" id="button"></input>
                        <?php
                        if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
                        ?>
                    </form>
                </div>
            </div>