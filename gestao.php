<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão Atual - Miguel Pereira</title>
    <link rel="shortcut icon" href="/galeria/logo/pmmp.ico" type="image/x-icon">

    <!-- libs css -->
    <?php include('includes/libs/css_libs.php'); ?>
    <?php include('includes/libs/fonts_libs.php'); ?>

    <link rel="stylesheet" href="/assets/css/gestao.css">
</head>
<body>
    <!-- menu padrao -->
    <?php include('includes/templates/menu.php') ?>
    
    <!-- btn-top -->
    <a href="javascript:;" id="btn-top"><i class="fas fa-arrow-alt-circle-up"></i></a>
    
    <main id="gestao">
        <div class="gestao-wrapper">
            <div class="gestao-item">
                <h4>Prefeito</h4>
                <p>André Português</p>
            </div>
            <div class="gestao-item">
                <h4>Vice Prefeito</h4>
                <p>Pedro Paulo Quinzinho</p>
            </div>
            <div class="gestao-item">
                <h4>Gestão</h4>
                <p>2017-2020</p>
            </div>
        </div>
    </main>

    <!-- modal comunicados -->
    <?php include('includes/templates/modal.php') ?>
    
    <!-- footer -->
    <?php include('includes/templates/footer.php'); ?>

    <!-- js libs -->
    <?php include('includes/libs/js_libs.php'); ?>
</body>
</html>