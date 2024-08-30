<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    </head>
    <body>
        <?php include 'header.php'; 
        switch ($_GET['atc']) {
            case 'gioithieu':
                include 'gioithieu.php';
                break;
            case 'giohang':
                include 'cart.php';
                break;
            case 'dodung':
                include 'category.php';
                break;
            default:
                include 'home.php';
                break;
        
        }

        include 'footer.php'; ?>
    </body>
</html>
