<?php get_header(); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


        <!-- TOPO Inicio -->
        <div id="topo">
            <div id="menu-superior">
                <div class="wrap">
                    <h1 id="logo">
                        <a href="index.html" title="Mestrado Coppead">
                            <img src="<?php bloginfo('template_url'); ?>/img/Logo-Coppead.jpg" width="167" height="136" />
                        </a>
                    </h1>                   
                    <ul>             
                        <li>
                            <a href="areas-enfase.html">Mestrado</a>
                            <ul class="submenu">
                                <li><a href="areas-enfase.html">Áreas de ênfase</a></li>
                                <li><a href="programa-intercambio.html">Programa de intercâmbio</a></li>
                                <li><a href="catedras.html">Cátedras</a></li>
                                <li><a href="extra-classe.html">Extra-classe</a></li>
                            </ul>                    
                        </li>
                        <li>
                            <a href="sobre.html">Coppead</a>
                            <ul class="submenu">
                                <li><a href="sobre.html">Sobre o Coppead</a></li>
                                <li><a href="depoimentos.html">Depoimentos</a></li>
                            </ul>                    
                        </li>
                        <li><a href="contato.html" class="contato">Contato</a></li>
                        <li>
                            <form method="get" id="searchform" action="resultado-busca.html">
                                <input type="text" id="busca" name="s" value="Procure por termo ou aluno" onblur="if(this.value == '') { this.value='Procure por termo ou aluno'}" onfocus="if (this.value == 'Procure por termo ou aluno') {this.value=''}">
                                <input type="submit" id="searchsubmit" name="" class="submit" value="">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- TOPO Fim -->
<!-- DESTAQUES Inicio -->
        <div id="destaques">
            <div class="wrap">
                <div id="container">
                    <div class="destaque">
                        <h2><a href="#">melhor full-time MBA da América Latina apresenta seus profissionais ao mercado</a></h2>
                        <img src="<?php bloginfo('template_url'); ?>/img/destaque-01.jpg" width="690px" height="376px"/>
                        <span><iframe src="http://player.vimeo.com/video/65976376?title=0&amp;byline=0&amp;portrait=0&amp;color=8d1a13&amp;autoplay=1" width="690" height="376" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></span>
                        <a href="#" class="video botao"></a>
                    </div>
                    <div class="destaque">
                        <h2><a href="#">melhor full-time MBA da América Latina apresenta seus profissionais ao mercado</a></h2>
                        <img src="<?php bloginfo('template_url'); ?>/img/destaque-01.jpg" width="690px" height="376px"/>
                        <a href="#" class="botao"></a>
                    </div>
                    <div class="destaque">
                        <h2><a href="#">melhor full-time MBA da América Latina apresenta seus profissionais ao mercado</a></h2>
                        <img src="<?php bloginfo('template_url'); ?>/img/destaque-01.jpg" width="690px" height="376px"/>
                        <span><iframe src="http://player.vimeo.com/video/66146084?title=0&amp;byline=0&amp;portrait=0&amp;color=8d1a13&amp;autoplay=1" width="690" height="376" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></span>
                        <a href="#" class="video botao"></a>
                    </div>
                    <div class="destaque">
                        <h2><a href="#">melhor full-time MBA da América Latina apresenta seus profissionais ao mercado</a></h2>
                        <img src="<?php bloginfo('template_url'); ?>/img/destaque-01.jpg" width="690px" height="376px"/>
                        <a href="#" class="botao"></a>
                    </div>
                </div>
                <ul>
                    <li><a id="destaque-anterior" href="#"></a></li>
                    <li><a id="proximo-destaque" href="#"></a></li>
                </ul>                    
            </div>
        </div>
        <!-- DESTAQUES Fim -->
        
        <!-- LISTA DE ALUNOS Início -->
        <div id="lista-alunos">
            <div class="wrap">
                <h3>Conheça nossos alunos</h3>
                <p class="descricao">Adicione os filtros desejados e pressione “Filtrar Resultados”:</p>
                

                <!-- SIDEBAR Início -->
                <ul id="sidebar">
                    <li><a class="select" href="#" title="Escolher turmas">Escolher turmas<span class="seta"></span></a>
                        <ul class="selecionados">
                            <li><a href="#" title="">Ítem selecionado</a></li>
                            <li><a href="#" title="">Ítem selecionado</a></li>
                        </ul>
                        <ul class="tudo">
                            <li><a href="#" title=""  class="selecionados">Ítem de menu</a></li>
                            <li><a href="#" title="">Ítem de menu</a></li>
                            <li><a href="#" title="">Ítem de menu</a></li>
                            <li><a href="#" title="" class="selecionados">Ítem de menu</a></li>
                            <li><a href="#" title="">Ítem de menu</a></li>
                        </ul>
                    </li>
                    <li><a class="select" href="#" title="Selecionar área">Selecionar áreas<span class="seta"></span></a>
                        <ul class="selecionados">
                            <li><a href="#" title="">Ítem selecionado</a></li>
                            <li><a href="#" title="">Ítem selecionado</a></li>
                            <li><a href="#" title="">Ítem selecionado</a></li>
                            <li><a href="#" title="">Ítem selecionado</a></li>
                            <li><a href="#" title="">Ítem selecionado</a></li>
                        </ul>
                        <ul class="tudo">
                            <li><a href="#" title="">Ítem de menu</a></li>
                            <li><a href="#" title="">Ítem de menu</a></li>
                            <li><a href="#" title="" class="selecionados">Ítem de menu</a></li>
                            <li><a href="#" title="">Ítem de menu</a></li>
                            <li><a href="#" title="">Ítem de menu</a></li>
                            <li><a href="#" title="">Ítem de menu</a></li>
                            <li><a href="#" title="">Ítem de menu</a></li>
                            <li><a href="#" title="">Ítem de menu</a></li>
                            <li><a href="#" title="" class="selecionados">Ítem de menu</a></li>
                            <li><a href="#" title="" class="selecionados">Ítem de menu</a></li>
                            <li><a href="#" title="">Ítem de menu</a></li>
                            <li><a href="#" title="">Ítem de menu</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="" class="submit">Filtrar resultados</a></li>
                </ul>
                <!-- SIDEBAR Fim -->

                <!-- CONTEÚDO Início -->
                <ul id="conteudo">
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                    <li class="resumo-aluno">
                        <a href="#" title="Nome do aluno">
                            <img src="<?php bloginfo('template_url'); ?>/img/aluno.jpg" height="162" width="210">
                            <h4>Joana Prado</h4>
                            <div class="info">
                                <p>josephabel@gmail.com</p>
                                <span>Áreas de interesse</span>
                                <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                                <span>Experiência Profissional</span>
                                <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- CONTEÚDO Fim -->

            </div>
        </div>
        <!-- LISTA DE ALUNOS Fim -->
        
    <?php get_footer(); ?>

