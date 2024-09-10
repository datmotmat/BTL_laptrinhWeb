<div class="admin-content-right">
                <div class="admin-content-right-category_list">
                    <h1>Danh sách tài khoản</h1>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>VAI TRÒ</th>
                            <th>TÙY CHỈNH</th>
                        </tr>
                        <?php
                        foreach($userlist as $user){
                            extract($user);
                            if($user_role==1){
                                $role="ADMIN";
                            }else{
                                $role="Khách hàng";
                            }
                            $suauser="index.php?atc=suauser&id=".$user_id;
                            $xoauser="index.php?atc=xoauser&id=".$user_id;
                            echo "<tr>
                                    <td>$user_id</td>
                                    <td>$user_email</td>
                                    <td>$user_pass</td>
                                    <td>$role</td>
                                    <td><a href='$suauser'><input type='button' value='Sửa' id='button'></a> <a href='$xoauser'><input id='button' type='button' value='Xóa'></a></td>
                                  </tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
