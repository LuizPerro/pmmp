<?php
// recebendo o id
$postId = $_GET['id'];

// simulando estrutura dos dados
$posts = [
    1 => [
        "titulo" => "Miguel Pereira ganha uma base para as aeronaves do Corpo de Bombeiros",
        "imagem" => "./galeria/noticias/simulado.jpg",
        "texto"  => "A assinatura para a construção do hangar aconteceu nesta quinta-feira (05/03), durante uma reunião entre o governador Wilson Witzel, o prefeito André Português, o secretário estadual de Defesa Civil, Comandante Roberto Robadey, o Comandante Neiva, Comandante Vinicius e o Secretário do Estado de Saúde, Edmar Santos. A nossa base área atuará no atendimento das 22 cidades do Centro-Sul fluminense. As equipes das aeronaves do atuam em salvamento e resgates aquáticos, altura e montanha, além de transferências hospitalares, combate a incêndios.",
        "data"   => "19/06/2020"
    ],
    2 => [
        "titulo" => "Iluminação pública",
        "imagem" => "./galeria/noticias/simulado2.jpg",
        "texto" => "O novo canal tem como proposta facilitar a comunicação entre o consórcio e os munícipes mantendo assim um serviço de qualidade e atendendo as necessidades da população que passará a ter ruas e avenidas mais iluminadas garantindo maior segurança e melhor visibilidade. O serviço de troca de lâmpada deve ser solicitado pelo telefone: 0800-6061535.",
        "data"   => "06/01/2020"
    ]
];

// encontrando o post correspondente
foreach ($posts as $key => $value) {
    if ($key == $postId) {
        $post = $value;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{Título da notícia}}</title>
    <link rel="shortcut icon" href="/galeria/logo/pmmp.ico" type="image/x-icon">
    
    <!-- libs css -->
    <?php include('includes/libs/css_libs.php'); ?>
    <?php include('includes/libs/fonts_libs.php'); ?>

    <!-- css da página -->
    <link rel="stylesheet" href="./assets/css/noticia.css">
</head>

<body>
    <!-- menu padrao -->
    <?php include('includes/templates/menu.php') ?>

    <!-- btn-top -->
    <a href="javascript:;" id="btn-top"><i class="fas fa-arrow-alt-circle-up"></i></a>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <p class="noticia-data"><?php echo $post['data'] ?></p>
                    <div class="noticia-text">
                        <h1><?php echo $post['titulo']?></h1>
                        <p><?php echo $post['texto']?></p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="noticia-img">
                        <img src="<?php echo $post['imagem'] ?>" alt="<?php echo $post['titulo']?>">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- modal comunicados -->
    <?php include('includes/templates/modal.php') ?>
    
    <!-- footer -->
    <?php include('includes/templates/footer.php') ?>

    <!-- js libs -->
    <?php include('includes/libs/js_libs.php'); ?>
</body>

</html>