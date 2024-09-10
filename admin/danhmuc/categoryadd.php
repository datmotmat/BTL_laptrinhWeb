
<div class="admin-content-right">
    <div class="admin-content-right-category_add">
        <h1>Thêm Danh Mục</h1>
        <form action="index.php?atc=addcate" method="POST">
            <input name="category_name" type="text" placeholder="Nhập tên danh mục" required/>
            <input type="submit" name="themmoi" value="Thêm" id="button"></input>
            <?php
            if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
            ?>
        </form>
    </div>
</div>