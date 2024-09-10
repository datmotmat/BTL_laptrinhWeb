<?php
if(is_array($user)){
    extract($user);
}
?>
<div class="admin-content-right">
                <div class="admin-content-right-category_add">
                    <h1>Sửa Thông tin User</h1>
                    <form action="index.php?atc=updateuser" method="POST">
                        <input name="user_email" type="text" value="<?php if(isset($user_email)&&($user_email!="")) echo $user_email;?>" required />
                        <input name="user_pass" type="text" value="<?php if(isset($user_pass)&&($user_pass!="")) echo $user_pass;?>" required />
                        <input name="user_role" type="number" value="<?php if(isset($user_role)&&($user_role>=0)) echo $user_role;?>" required />
                        <input type="hidden" name="id" value="<?php if(isset($user_id)&&($user_id>0)) echo $user_id;?>">
                        <input type="submit" name="capnhat" value="Sửa" id="button"></input>
                        <?php
                        if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
                        ?>
                    </form>
                </div>
            </div>