<?php
// Khai báo các biến lỗi
$emailErr = $passwordErr = "";
$email = $password = "";

// Kiểm tra khi form được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Kiểm tra email và mật khẩu
    if (empty($email) || $email !== "dat@gmail.com") {
        $emailErr = "Email không chính xác.";
    }

    if (empty($password) || $password !== "123123") {
        $passwordErr = "Mật khẩu không chính xác.";
    }

    // Nếu không có lỗi, chuyển hướng người dùng đến trang index
    if (empty($emailErr) && empty($passwordErr)) {
        header("Location: index.php");
        exit();
    }
}

// Hàm làm sạch dữ liệu đầu vào (bảo mật)
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="login.css" />
        <link rel="icon" href="images/logoShop.jpg" type="image/x-icon" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <title>Đăng nhập</title>
    </head>
    <body>
        <div class="modal">
            <div class="modal__overlay"></div>
            <div class="modal__body">
                <div class="modal__inner">
                    <div class="auth-form">
                        <div class="auth-form__container">
                            <div class="auth-form__header">
                                <h3 class="auth-form__heading">Đăng nhập</h3>
                                <span onclick="window.location.href='login.php'" class="auth-form__switch-btn">Đăng ký</span>
                            </div>

                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="auth-form__form">
                                    <div class="auth-form__group">
                                        <input type="text" class="auth-form__input" name="email" placeholder="Email của bạn" value="<?php echo $email; ?>" />
                                        <span style="color: red;"><?php echo $emailErr; ?></span>
                                    </div>
                                    <div class="auth-form__group">
                                        <input type="password" class="auth-form__input" name="password" placeholder="Mật khẩu của bạn" />
                                        <span style="color: red;"><?php echo $passwordErr; ?></span>
                                    </div>
                                </div>
                                <div class="auth-form__aside">
                                    <p class="auth-form__policy-text">
                                        Bằng việc đăng nhập, bạn đã đồng ý về <br />
                                        <a href="" class="auth-form__policy-link">Điều khoản dịch vụ</a> &
                                        <a href="" class="auth-form__policy-link">Chính sách bảo mật</a>
                                    </p>
                                </div>
                                <div class="auth-form__controls">
                                    <button
                                        onclick="window.location.href='index.php'"
                                        class="btn btn-normal auth-form__controls-back"
                                    >
                                        TRỞ LẠI
                                    </button>
                                    <button type="submit" class="btn btn--primary">ĐĂNG NHẬP</button>
                                </div>
                            </form>

                            <div class="auth-form__socials">
                                <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                                    <i class="auth-form__socials-icon fa-brands fa-facebook"></i>
                                    <span class="auth-form__socials-title">Kết nối với Facebook</span>
                                </a>
                                <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                                    <i class="auth-form__socials-icon fa-brands fa-google"></i>
                                    <span class="auth-form__socials-title">Kết nối với Google</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
