<html>
    <head>
        <title>Superlux</title>

        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-theme.css">
        <link rel="stylesheet" href="assets/css/owl/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate/animate.css">
        <link rel="stylesheet" href="assets/css/hoverImage/set1.css">
        <link rel="stylesheet" href="assets/css/hoverImage/normalize.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/estilo.css">
        <link rel="stylesheet" href="assets/css/fullpage/jquery.fullpage.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300i,400,500,700,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i" rel="stylesheet">
    </head>

    <body>

        <!-- SESSAO DO TOPO -->
        <div class="row bg-topo" id="topo" style="margin: 0px; padding: 0px;">
            <div class="container">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-5 menu-right">
                        <ul>
                            <li><a href="#">NOSSOS SERVIÇOS</a></li>
                            <li><a href="#">DISPONIBILIDADE</a></li>
                            <li><a href="#">CLIENTES</a></li>
                        </ul>
                    </div>
                    <div class="col-md-1 logo" ><img src="assets/img/logo-menu.png"></div>
                    <div class="col-md-5 menu-left">
                        <ul>
                            <li><a href="#">BLOG</a></li>
                            <li><a href="#">A EMPRESA</a></li>
                            <li><a href="#">CONTATO</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"><img src="assets/img/logo.png" class="imagem-center"></div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"><img src="assets/img/seta.png" class="imagem-seta wow pulse animated" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-delay: 300ms; animation-iteration-count: infinite; animation-name: pulse;"></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <!-- SESSAO DO TOPO -->

        <div class="row bg-branco">
            <div class="container">

                <div class="row">
                    <div class="col-md-12"><h1>NOSSOS SERVIÇOS</h1></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><p>Confira todos os nossos servios, e entre em contato com a superlux</p></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" style="padding: 0px; margin: 0px;">

            <div class="owl-carousel owl-theme">
                <?php for ($i = 1; $i <= 10; $i++) : ?>
                    <div class="item">
                        <div class="grid">
                            <figure class="effect-bubba">
                                <img src="assets/img/hoverImage/<?= $i ?>.jpg" alt="img02"/>
                                <figcaption>
                                    <h2>Superlux <span></span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#">View more</a>
                                </figcaption>			
                            </figure>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="row bg-branco">
            <div class="container">

                <div class="row">
                    <div class="col-md-12"><h1>NOSSAS PLACAS</h1></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><p>Confira todas as s nossos disponibilidades, e entre em contato com a superlux</p></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row" id="mapa" ></div>


        <div class="row bg-branco">
            <div class="container">

                <div class="row">
                    <div class="col-md-12"><h1>NOSSAS CLIENTES</h1></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><p>Confira todos os nossos servios, e entre em contato com a superlux</p></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row bg-cliente">
            <div class="container">


            </div>
        </div>


        <div class="row bg-branco">
            <div class="container">

                <div class="row">
                    <div class="col-md-12"><h1>BLOG</h1></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><p>Fique por dentro de nossas novidades</p></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" style="padding: 0px; margin: 0px;">

            <div class="owl-carousel owl-theme">
                <?php for ($i = 1; $i <= 10; $i++) : ?>
                    <div class="item">
                        <div class="grid">
                            <figure class="effect-bubba">
                                <img src="assets/img/hoverImage/<?= $i ?>.jpg" alt="img02"/>
                                <figcaption>
                                    <h2>Blog <span></span></h2>
                                    <p>Nossas notícias</p>
                                    <a href="#">View more</a>
                                </figcaption>			
                            </figure>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="row bg-branco">
            <div class="container">

                <div class="row">
                    <div class="col-md-12"><h1>A EMPRESA</h1></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><p>Conheça nossa história, e saíba como prezamos pela sua satisfação</p></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>

            </div>
        </div>


        <div class="row bg-empresa">
            <div class="container">


            </div>
        </div>

        <div class="row bg-branco">
            <div class="container">

                <div class="row">
                    <div class="col-md-12"><h1>CONTATOS</h1></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><p>Conheça nossa história, e saíba como prezamos pela sua satisfação</p></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row bg-branco">
            <div class="col-md-5 bg-form-rodape">

                <div class="col-md-4"></div>
                <div class="col-md-8">

                    <form method="post">
                        <input class="form-control form-rodape" placeholder="Seu nome..." type="text" style="margin-top: 32px;">
                        <input class="form-control form-rodape" placeholder="Seu e-mail..." type="email">
                        <input class="form-control form-rodape" placeholder="Seu telefone." type="text">
                        <textarea class="form-control form-rodape" placeholder="Sua mensagem." ></textarea> 
                        <input class="btn-rodape" type="submit" value="ENVIAR">
                    </form>
                </div>


            </div>
            <div class="col-md-2 logo-rodape">
                <div class="col-md-12"><img class="img-responsive" src="assets/img/logo-rodape.jpg"></div>
                <div class="col-md-12" style="padding: 0px;">
                    <p>(79) <span>3249-3334</span><br>
                        <a href="#">comercial@superlux.com.br</a></p>

                    <p>RUA ELIZETE ARAGÃO CABRAL. 166</p>
                    <p>INÁCIO BARBOSA - ARACAJU-SE, - </p>
                    <p>CEP: 49041-149</p>

                    <p>
                        <a href="#" class="social"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    </p>

                    <p>2017 | SUPERLUX </p>

                    <p>TODOS DIREITOS RESERVADOS</p>

                </div>	


            </div>
            <div class="col-md-5" style="padding: 0px;" >
                <div class="iframe-rwd">
                    <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Seattle,+WA&amp;aq=0&amp;oq=seattle&amp;sll=37.822293,-85.76824&amp;sspn=6.628688,16.907959&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Seattle,+King,+Washington&amp;z=11&amp;ll=47.60621,-122.332071&amp;output=embed"></iframe>
                </div>
            </div>


        </div>

        <script type="text/javascript" src="assets/js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/owl/owl.carousel.js"></script>
        <script type="text/javascript" src="assets/js/wow/wow.js"></script>
        <script type="text/javascript" src="assets/js/fullpage/jquery.fullpage.js"></script>
        <script type="text/javascript" src="assets/js/fullpage/scrolloverflow.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIXs5ODM7HpOW6fr9IjVwmqSTaYV8KL10&callback=initMap"
        type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/googleMaps/mapa.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>

        <script type="text/javascript">
            new WOW().init();

            $('.owl-carousel').owlCarousel({
                items: 5,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })

        </script>

    </body>
</html>