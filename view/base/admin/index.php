<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Note: khai báo đường dẫn tới components của admin -->
    <?php $COMPONENT_URL = "view/base/admin/components/" ?>
    <?php global $APP_URL; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link href="public/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="public/backend/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
        <?php include "{$COMPONENT_URL}/sidebar.php"; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include "{$COMPONENT_URL}/topnav.php"; ?>
                <!-- Note: Nội dung được đổ ra ở đây -->
                <?php echo $this->content; ?>
            </div>
            <?php include "{$COMPONENT_URL}/footer.php"; ?>
        </div>
    </div>
    <?php include "{$COMPONENT_URL}/scroll-button.php"; ?>
    <?php include "{$COMPONENT_URL}/logout-modal.php"; ?>
    
    <script src="public/backend/vendor/jquery/jquery.min.js"></script>
    <script src="public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/backend/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="public/backend/js/sb-admin-2.min.js"></script>
    <script src="public/backend/vendor/chart.js/Chart.min.js"></script>
    <script src="public/backend/js/demo/chart-area-demo.js"></script>
    <script src="public/backend/js/demo/chart-pie-demo.js"></script>
</body>

</html>