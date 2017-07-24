<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Curso de HTML5 - UpInside Treinamentos</title>
        <meta name="description" content="Está página web está sendo construida no curso de HMTL5 da UpInside Treinamentos." />
        <meta name="viewport" content="width=device-width, initia-scale=1.0" />

        <link rel="shortcut icon" href="img/favicon.png"/>
        <link rel="stylesheet" href="style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"/> 
        
    </head>
    
    <body>
        
        <p class="j_back backtop">Topo</p>
        
        <header class="main_header container home">
            <div class="content">
                <img class="main_logo" title="Curso de HTML5" alt="[Curso de HTML5]" src="img/_logo.png"/>
                <h1 class="fontzero">Curso de HTML5 - UpInside Treinamentos</h1>

                <ul class="main_menu">
                    <li><a href="#home" title="Curso de HTML5">Home</a></li>
                    <li><a href="#curso" title="Sobre o Curos de HTML5">O Curso</a></li>
                    <li><a class="special" target="_blank" href="//www.upinside.com.br/curso/html5-do-jeito-certo" title="Curos Work Series - HTML5 do Jeito Certo">Work Series</a></li>
                    <li><a href="#videoaulas" title="Confira Video Aulas do Curos de HTML5">Video Aulas</a></li>
                    <li><a href="#contato" title="Contato sobre o Curso de HTML5">Fale Conosco</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </header>
        <!--FECHA CABEÇALHO-->

        <main class="container">
            <div class="border_bottom border_bottom_destaque">
                 <article class="destaque container">

                    <div class="content">
                        <header>
                            <h1>Bem-vindo(a) ao Curso Gratuito de HTML5</h1>
                            <p class="tagline">Você está pronto para aprender HTML5, CSS e JQuery de formo descomplicada, gratuita e do jeito certo? Confira o nosso curso gratuito de HTML5! </p>
                            <div>
                                <div class="fb-like" data-href="https://www.facebook.com/upinside" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                                <div class="fb-share-button" data-href="https://www.upinside.com.br/oferta/html5-do-jeito-certo/" data-layout="button_count"></div>
                            </div>
                        </header>

                        <div class="destaque_video">
                            <div class="ratio">
                                <iframe class="media" src="https://www.youtube.com/embed/EXubviU0cLQ?list=PLi_gvjv-JgXrLwm2AUhN3nc815D-aWmsI" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </article>
            </div>
            <!--DESTAQUE DO SITE-->

            <section class="container curso">

                <div class="content">

                    <header class="big_title">
                        <h1>Curso de HTML5 </h1>
                        <p class="tagline">Confira o que você vai aprender no curso de HTML5!</p>
                    </header>

                    <article class="curso_item">
                        <img title="Curso de HTML5 - HTML e CSS!" alt="[Curso de HTML5 - HTML e CSS!]" src="img/01.jpg"/>
                        <h1>HTML e HTML5!</h1>
                        <p>Aprenda a utilizar o HTML5 do jeito certo! Segmentando seu site e distribuindo o conteúdo de forma otimizada e de ponta a ponta!</p>
                        <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y \à\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
                    </article>

                    <article class="curso_item">
                        <img title="Curso de HTML5 - CSS e CSS3!" alt="[Curso de HTML5 - CSS e CSS3!]" src="img/02.jpg"/>
                        <h1>CSS e CSS3!</h1>
                        <p>Trabalhe com produtividade e qualidade o seu CSS. Aplicando classes coesas e focando no que realmente importa. O conteúdo do site!</p>
                        <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y \à\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
                    </article>

                    <article class="curso_item">
                        <img title="Curso de HTML5 - jQUERY!" alt="[Curso de HTML5 - jQUERY!]" src="img/03.jpg"/>
                        <h1>jQUERY!</h1>
                        <p>JavaScript? Claro! Contudo, aqui vamos trabalhar com jQuery. Entender a biblioteca e seu uso padrão. Produtividade é essencial!</p>
                        <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y \à\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
                    </article>

                    <article class="curso_item">
                        <img title="Curso Work Series - HTML5 do Jeito Certo!" alt="[Curso Work Series - HTML5 do Jeito Certo!]" src="img/04.jpg"/>
                        <h1>WORK SERIES</h1>
                        <p>Terminou o curso de HTML5? Então é hora de se tornar um ninja com a linguagem e aprender técnicas avançadas de otimização!</p>
                        <span><time datetime="<?= date('Y-m-d'); ?>"><?= date('d/m/Y \à\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
                    </article>
                    <div class="clear"></div>
                </div>

                <footer class="container curso_footer">
                    <div class="content">
                        <img title="Confira o curso Completo de HTML5 do jeito certo" alt="[Confira o curso Completo de HTML5 do jeito certo]" src="img/05.png"/>
                        <h1>Curso HTML5 do Jeito Certo!</h1>
                        <p>Aprenda a Ultizar Todo o Poder do HTML5 Semântico a Avançadas Técnicas de SEO para Criar Sites Altamente Lucrativos e que Geram Resultados Rápidos e Eficientes!</p>
                        <a class="btn" target="_blank" title="Conheça o curso de HTML5 do Jeito Certo" href="//www.upinside.com.br/curso/html5-do-jeito-certo">Cocheça Agora!</a>
                        <div class="clear"></div>
                    </div>
                </footer>


            </section>
            <!--O CURSO-->

            <section class="container videoaulas">
                <div class="content">
                    <header class="big_title">
                        <h1>Vídeo Aulas do Curso:</h1>
                        <p class="tagline">confira algumas aulas do curso de HTML5</p>
                    </header>

                    <div class="videoaulas_videos">
                        <article>
                            <img title="Curso de HTML5 - HTML e CSS!" alt="[Curso de HTML5 - HTML e CSS!]" src="img/01.jpg"/>
                            <h1>HTML e HTML5!</h1>
                            <p>Aprenda a utilizar o HTML5 do jeito certo! </p>
                        </article>

                        <article>
                            <img title="Curso de HTML5 - CSS e CSS3!" alt="[Curso de HTML5 - CSS e CSS3!]" src="img/02.jpg"/>
                            <h1>CSS e CSS3!</h1>
                            <p>Trabalhe com produtividade e qualidade o seu CSS.</p>
                        </article>

                        <article>
                            <img title="Curso de HTML5 - jQUERY!" alt="[Curso de HTML5 - jQUERY!]" src="img/03.jpg"/>
                            <h1>jQUERY!</h1>
                            <p>JavaScript? Claro! Contudo, aqui vamos trabalhar com jQuery.</p>
                        </article>

                        <article>
                            <img title="Curso de HTML5 - HTML e CSS!" alt="[Curso de HTML5 - HTML e CSS!]" src="img/01.jpg"/>
                            <h1>HTML e HTML5!</h1>
                            <p>Aprenda a utilizar o HTML5 do jeito certo! </p>
                        </article>

                        <article>
                            <img title="Curso de HTML5 - CSS e CSS3!" alt="[Curso de HTML5 - CSS e CSS3!]" src="img/02.jpg"/>
                            <h1>CSS e CSS3!</h1>
                            <p>Trabalhe com produtividade e qualidade o seu CSS.</p>
                        </article>

                        <article>
                            <img title="Curso de HTML5 - jQUERY!" alt="[Curso de HTML5 - jQUERY!]" src="img/03.jpg"/>
                            <h1>jQUERY!</h1>
                            <p>JavaScript? Claro! Contudo, aqui vamos trabalhar com jQuery.</p>
                        </article>

                    </div>

                    <aside class="videoaulas_sidebar">
                        <div class="border_bottom">
                            <div class="content">
                                <header> 
                                    <h1  class="title">Comentários:</h1>
                                </header>

                                <article class="videoaulas_sidebar_comment">
                                    <img title="Comentário de Robson V. Leite" alt="[Comentário de Robson V. Leite]" src="img/foto.jpg"/>
                                    <h1><span class="fontzero">Comentário de </span>Robson V. Leite</h1>
                                    <p>O curso foi pensado para levar o aluno do zero ao ninja não somente em HTML!</p>
                                </article>

                                <article class="videoaulas_sidebar_comment">
                                    <img title="Comentário de Fabricio Lopes" alt="[Comentário de Fabricio Lopes]" src="img/foto.jpg"/>
                                    <h1><span class="fontzero">Comentário de </span>Fabricio Lopes</h1>
                                    <p>O curso foi pensado para levar o aluno do zero ao ninja não somente em HTML!</p>
                                </article>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </aside>

                    <div class="clear"></div>
                </div>
            </section>
            <!--VIDEO AULAS-->

            <article class="container contato">
                <div class="content">
                    <header>
                        <h1>Entre em Contato:</h1>
                        <p>Este Formulário está aqui apenas para estudos do curso de HTML5</p>
                    </header>
                    <form class="contato_form j_formsubmit" action="" method="post">

                        <label class="medium">
                            <span>Nome:</span>
                            <input type="text" name="nome" title="Informe seu Nome!" placeholder="Informe seu Nome:" required/>
                        </label>

                        <label class="medium">
                            <span>E-mail:</span>
                            <input type="email" name="email" title="Informe seu E-mail!" placeholder="Informe seu E-mail:" required/>
                        </label>

                        <label>
                            <span>Mensagem:</span>
                            <textarea rows="3" name="mensagem" title="Deixe sua Mensagem!" placeholder="Deixe sua Mensagem:" required></textarea>
                        </label>

                        <img class="form_load" title="Aguarde, Enviando Contato!" alt="[Aguarde, Enviando Contato!]" src="img/ajax-loader.gif"/>                    
                        <button class="btn">Enviar Contato</button>
                    </form>

                    <div class="clear"></div>
                </div>
            </article>
        </main>
        <!--FECHA CONTEUDO-->

        <footer class="container main_footer">
            <div class="border_bottom">
                <div class="ftcontent">                
                    <h1 class="title">Curos de HTML5</h1>
                    <nav>
                        <h1 class="subtitle">UpInside Treinamentos</h1>                    
                        <ul class="main_footer_social">
                            <li><a target="_blank" title="UpInside Treinamentos" href="//www.upinside.com.br">UpInside</a></li>
                            <li>|</li>
                            <li><a target="_blank" title="UpInside Treinamentos no YouTube" href="//www.youtube.com/channel/UCw6vF0DoeshwUcmBnjUe2ZQ">YouTube</a></li>
                            <li>|</li>
                            <li><a target="_blank" title="UpInside Treinamentos no FaceBook" href="//www.facebook.com/upinside/">FaceBook</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>
        <!--FECHA RADAPÉ-->
        
        <script src="js/jquery.js"></script>
        <script src="js/scripts.js"></script>
        
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>



