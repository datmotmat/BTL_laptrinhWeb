<?php
if(is_array($cate)){
    extract($cate);
}
?>
<div class="admin-content-right">
                <div class="admin-content-right-category_add">
                    <h1>Sửa Danh Mục</h1>
                    <form action="index.php?atc=updatecate" method="POST">
                        <input name="category_name" type="text" value="<?php if(isset($category_name)&&($category_name!="")) echo $category_name;?>" required />
                        <input type="hidden" name="id" value="<?php if(isset($category_id)&&($category_id>0)) echo $category_id;?>">
                        <input type="submit" name="capnhat" value="Sửa" id="button"></input>
                        <?php
                        if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
                        ?>
                    </form>
                </div>
            </div>