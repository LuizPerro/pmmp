<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prefeitura Municipal de Miguel Pereira</title>
    <!-- <link rel="shortcut icon" href="/galeria/logo/pmmp.ico" type="image/x-icon"> -->
    <link rel="shortcut icon" href="/galeria/logo/new.ico" type="image/x-icon">
    <!-- libs css -->
    <?php include('includes/libs/css_libs.php'); ?>
    <?php include('includes/libs/fonts_libs.php'); ?>
    <!-- slick theme -->
    <link rel="stylesheet" href="assets/css/slick-theme.min.css">
    <!-- css da pag -->
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
    <!-- facebook plugin -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0">
    </script>

    <!-- btn-top -->
    <a href="javascript:;" id="btn-top"><i class="fas fa-arrow-alt-circle-up"></i></a>

    <!-- header -->
    <header id="home-header">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-md-12 col-xl-5">
                    <img class="logo-header" src="galeria/logo/logoNew.png"
                        alt="Logo Marca Prefeitura Municipal de Miguel Pereira">
                </div>
                <!-- widgets section -->
                <div class="col-md-12 col-xl-7">
                    <div class="row">
                        <div class="col-md-8 col-xl-6">
                            <a class="btn-trasparencia" href="http://transparencia.pmmp.rj.gov.br" target="_blank" rel="noopener">
                                <i class="fas fa-info-circle"></i>
                                <p>Portal da Transparência</p>
                            </a>
                        </div>
                        <!-- tempo -->
                        <div class="col-md-4 col-xl-6">
                            <script type='application/javascript'
                                src='https://darksky.net/widget/default-small/-22.4543,-43.4704/uk12/en.js?width=100%&height=70&title=Full Forecast&textColor=333333&bgColor=transparent&transparency=true&skyColor=undefined&fontFamily=Sans-Serif&customFont=&units=uk'>
                            </script>
                        </div>
                    </div>
                    <!-- accesso rápido -->
                    <div class="row">
                        <div class="col-md-10 col-xl-10">
                            <h5 class="acesso-rapido-title">Acesso rápido</h5>
                            <div class="acesso-rapido-links">
                                <ul>
                                    <li>
                                        <a href="http://transparencia.pmmp.rj.gov.br/?serv=106"
                                            target="_blank"  rel="noopener">Licitações</a>
                                    </li>
                                    <li>
                                        <a href="http://transparencia.pmmp.rj.gov.br/?serv=113" target="_blank" rel="noopener">Boletim
                                            Informativo</a>
                                    </li>
                                    <li>
                                        <a href="http://transparencia.pmmp.rj.gov.br/?serv=703"
                                            target="_blank" rel="noopener">Concursos</a>
                                    </li>
                                    <li>
                                        <a href="https://200.199.142.250/mail/" target="_blank" rel="noopener">WebMail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- media liks -->
                        <div class="col-md-2 col-xl-2">
                            <div class="header-media-links">
                                <a href="https://www.facebook.com/prefeituramiguelpereira" target="_blank" rel="noopener">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a href="https://www.instagram.com/prefeiturademiguelpereira" target="_blank" rel="noopener">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- menu padrao -->
    <?php include('includes/templates/menu.php') ?>

    <!-- slides -->
    <section id="slides">
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/galeria/slides/slide-lago.jpeg"
                        alt="Lago de Javary - Miguel Pereira">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/galeria/slides/slide-gruta.jpg"
                        alt="Gruta dos escravos - Miguel Pereira">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/galeria/slides/slide-ponte.jpg"
                        alt="Ponte Férrea - Miguel Pereira">
                </div>
            </div>
        </div>
    </section>

    <!-- acesso rapido moblie -->
    <section id="acesso-rapido-moblie">
        <div class="acesso-rapido-divide"></div>
        <div class="acesso-rapido-moblie-wrapper">
            <ul>
                <li>
                    <a href="http://transparencia.pmmp.rj.gov.br" target="_blank" rel="noopener"><i class="fas fa-info-circle"></i> Portal da Transparência</a>
                </li>
                <li>
                    <a href="javascript:;" class="comunicado-link"><i class="fas fa-bell"></i> Comunicados</a>
                </li>
                <li>
                    <a href="http://transparencia.pmmp.rj.gov.br/?serv=106" target="_blank" rel="noopener"><i class="fas fa-file-alt"></i> Licitações</a>
                </li>
                <li>
                    <a href="http://transparencia.pmmp.rj.gov.br/?serv=113" target="_blank" rel="noopener"><i class="fas fa-file-invoice"></i> Boletim Informativo</a>
                </li>
                <li>
                    <a href="http://transparencia.pmmp.rj.gov.br/?serv=703" target="_blank" rel="noopener"><i class="fas fa-file-signature"></i> Concursos</a>
                </li>
                <li>
                    <a href="https://200.199.142.250/mail/" target="_blank" rel="noopener"><i class="fas fa-envelope"></i> WebMail</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- historia e publicidade -->
    <section id="historia-publicidade">
        <div class="container mt-5">
            <!-- hist -->
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="hist-wrapper">
                        <h4 class="hist-sub-title">Conheça</h4>
                        <h1 class="hist-title display-4">MIGUEL PEREIRA</h1>
                        <p class="hist-text">
                            Miguel Pereira carrega muita cultura, história, pontos turísticos e um clima perfeito para
                            bons passeios e muito descanso.
                        </p>
                        <div class="hist-btn">
                            <a href="/historia.php">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="hist-img" data-aos="fade-up" data-aos-duration="1500">
                        <img src="/galeria/resources/portico_de_entrada.jpg" alt="historia de miguel pereira">
                    </div>
                </div>
            </div>
            <hr>
            <!-- revista -->
            <div class="row mt-4">
                <div class="col-md-6 col-xl-6">
                    <div class="revista-img" data-aos="fade-up" data-aos-duration="1500">
                        <img src="/galeria/resources/revista.jpeg" alt="revista miguel pereira">
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <h4 class="revista-sub-title">Baixe nossa</h4>
                    <h1 class="revista-title display-4">REVISTA</h1>
                    <p class="revista-text">A revista no formato PDF traz informações sobre o perfil da cidade, guias para o turismo e alguns dos projetos futuros que a cidade receberá.</p>
                    <div class="revista-btn">
                        <!-- <a href="/files/Revista.pdf">Download</a> -->
                        <a href="javascript:;">Download</a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!-- servicos -->
    <section id="servicos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="servicos-title-section">SERVIÇOS</h1>
                </div>
                <div class="col-md-12">
                    <div class="servicos-wrapper" data-aos="fade-up" data-aos-duration="1500">
                        <div class="servicos-item">
                            <div class="servicos-item-header">
                                <i class="fas fa-money-check"></i>
                                <p>Contracheque</p>
                            </div>
                            <ul class="servicos-item-list">
                                <li>
                                    <a href="http://170.233.105.99:8131/portal/form.jsp?sys=PSP&action=openform&formID=8274"
                                        target="_blank" rel="noopener">
                                        Visualizar Contracheque
                                    </a>
                                </li>
                                <li>
                                    <a href="http://170.233.105.99:8142/portal/Login/Login.aspx" target="_blank" rel="noopener">
                                        Contracheque FAPEMP
                                    </a>
                                </li>
                                <li>
                                    <a href="http://170.233.105.99:8131/portal/form.jsp?sys=PSP&action=openform&formID=8745"
                                        target="_blank" rel="noopener">
                                        Validador de Contracheque
                                    </a>
                                </li>
                                <li>
                                    <a href="http://170.233.105.99:8131/portal/form.jsp?sys=PSP&action=openform&formID=8274"
                                        target="_blank" rel="noopener">
                                        Informe Rendimentos
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="servicos-item">
                            <div class="servicos-item-header">
                                <i class="fas fa-home"></i>
                                <p>Arrecadação</p>
                            </div>
                            <ul class="servicos-item-list">
                                <li>
                                    <a href="http://170.233.105.99:8086/webrunstudio/form.jsp?sys=TR2&action=openform&formID=7589&align=0&mode=-1&goto=-1&filter=&scrolling=no"
                                        target="_blank" rel="noopener">
                                        Emissão de IPTU
                                    </a>
                                </li>
                                <li>
                                    <a href="http://170.233.105.99:8086/webrunstudio/open.do?action=open&sys=TR2"
                                        target="_blank" rel="noopener">
                                        Sistema de Arrecadação
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="servicos-item">
                            <div class="servicos-item-header">
                                <i class="fas fa-users-cog"></i>
                                <p>Outros Serviços</p>
                            </div>
                            <ul class="servicos-item-list">
                                <li>
                                    <a href="http://170.233.105.99:8080/adm/open.do?action=open&sys=PRO"
                                        target="_blank" rel="noopener">
                                        Sistema de Protocolo
                                    </a>
                                </li>
                                <li>
                                    <a href="http://170.233.105.99:8080/adm/open.do?action=open&sys=LIC"
                                        target="_blank" rel="noopener">
                                        Sistema de Licitações e Contratos
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.colabore.rb1.online/mp" target="_blank" rel="noopener">
                                        Denúncia Anônima
                                    </a>
                                </li>
                                <li>
                                    <a href="https://miguelpereirarj.webiss.com.br" target="_blank" rel="noopener">
                                        Nota fiscal de serviço eletrônica
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- noticias -->
    <section id="noticias">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="noticias-title-section">NOTÍCIAS</h1>
                </div>
                <div class="col-xl-8">
                    <div class="noticias-wrapper d-flex" data-aos="fade-up" data-aos-duration="1500">
                        
                        <!-- dinamico -->
                        <div class="noticias-box">
                            <div class="noticias-box-img">
                                <img src="/galeria/noticias/simulado.jpg" alt="{{titulo da noticia}}">
                            </div>
                            <p class="noticias-box-data">27/07/2020</p>
                            <h4 class="noticias-box-title">Miguel Pereira ganha uma base para as aeronaves do Corpo de Bombeiros</h4>
                            <p class="noticias-box-text">Miguel Pereira ganha uma base para as aeronaves do Corpo de
                                Bombeiros Militar do Rio de Janeiro.</p>
                            <a href="noticia.php?id=1" class="noticias-box-link">Ler mais</a>
                        </div>

                        <div class="noticias-box">
                            <div class="noticias-box-img">
                                <img src="/galeria/noticias/simulado2.jpg" alt="{{titulo da noticia}}">
                            </div>
                            <p class="noticias-box-data">27/07/2020</p>
                            <h4 class="noticias-box-title">Iluminação pública</h4>
                            <p class="noticias-box-text">A população já pode utilizar o serviço gratuito de call center
                                para solicitação de reparos de iluminação pública.</p>
                            <a href="noticia.php?id=2" class="noticias-box-link">Ler mais</a>
                        </div>

                        <div class="noticias-box">
                            <div class="noticias-box-img">
                                <img src="/galeria/resources/revista.jpeg" alt="{{titulo da noticia}}">
                            </div>
                            <p class="noticias-box-data">{{data da noticia}}</p>
                            <h4 class="noticias-box-title">{{titulo da noticia}}</h4>
                            <p class="noticias-box-text">{{noticia descricao}}</p>
                            <a href="{{noticia.php?(id da noticia)}}" class="noticias-box-link">Ler mais</a>
                        </div>
                        <!-- /dinamico -->
                    
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="fb-page" data-href="https://www.facebook.com/prefeituramiguelpereira/"
                        data-tabs="timeline" data-width="" data-height="" data-small-header="true"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/prefeituramiguelpereira/"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/prefeituramiguelpereira/">Prefeitura de Miguel
                                Pereira</a></blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- turismo -->
    <section id="turismo">
        <div class="turismo-container">
            <div class="turismo-box-link">
                <a href="/ondeir.php"><i class="fas fa-map-marker-alt"></i> Onde ir</a>
            </div>
            <div class="turismo-box-link">
                <a href="/ondecomer.php"><i class="fas fa-utensils"></i> Onde comer</a>
            </div>
            <div class="turismo-box-link">
                <a href="/ondeficar.php"><i class="fas fa-concierge-bell"></i> Onde ficar</a>
            </div>
        </div>
        <img src="/galeria/resources/slogan.png" class="turismo-img" alt="3° Melhor Clima do Mundo - Miguel Pereira">
    </section>

    <!-- eventos -->
    <section id="eventos">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="eventos-title-section">EVENTOS</h1>
                </div>
                <div class="col-xl-12">
                    <div class="eventos-wrapper" data-aos="fade-up" data-aos-duration="1500">
                        
                        <!-- dinamico -->
                        <div class="eventos-box">
                            <a href="/galeria/eventos/evento1.jpg">
                                <img src="/galeria/eventos/evento1.jpg">
                            </a>
                        </div>
                        <div class="eventos-box">
                            <a href="/galeria/eventos/event2.jpg">
                                <img src="/galeria/eventos/event2.jpg">
                            </a>
                        </div>
                        <div class="eventos-box">
                            <a href="/galeria/eventos/event3.jpg">
                                <img src="/galeria/eventos/event3.jpg">
                            </a>
                        </div>
                        <!-- /dinamico -->
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- modal comunicados -->
    <?php include('includes/templates/modal.php') ?>

    <!-- footer -->
    <?php include('includes/templates/footer.php'); ?>

    <!-- js libs -->
    <?php include('includes/libs/js_libs.php'); ?>

    <!-- js assets -->
    <script src="/assets/js/noticias.js"></script>
    <script src="/assets/js/eventos.js"></script>
</body>

</html>