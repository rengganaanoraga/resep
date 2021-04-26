<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Resep</title>

    <!-- fontawesome-css -->
    <script src="https://use.fontawesome.com/ed84325819.js"></script>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <?php
        include 'page/header.php';
    ?>

    <?php
        @$page = $_GET['page'];
        if (isset($page)) {
            switch ($page) {
                case 'home':
                    include 'page/home.php';
                    break;

                case 'detail-product':
                    include 'page/detail-product.php';
                    break;
                
                case 'login':
                    include 'page/login.php';
                    break;
                
                case 'register':
                    include 'page/register.php';
                    break;
                
                default:
                    include 'page/home.php';
                    break;
            }
        }else{
            include 'page/home.php';   
        }
    ?>
    



    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>