<?php

get_header();


?>

<!-- DESTAQUES Inicio -->
        <div id="destaques">
            <div class="wrap">
                <div id="container">

                    <div class="destaque">
                        <h2><a href="http://vimeo.com/44215515">O MELHOR FULL-TIME MBA DA AMÉRICA LATINA APRESENTA SEUS PROFISSIONAIS AO MERCADO</a></h2>
                        <img src="<?php bloginfo('template_url'); ?>/img/destaque02.jpg" width="690px" height="376px"/>
                        <span><iframe src="http://player.vimeo.com/video/44215515?title=0&amp;byline=0&amp;portrait=0&amp;color=8d1a13&amp;autoplay=1" width="690" height="376" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></span>
                        <a href="#" class="video botao"></a>
                    </div>


                </div>
                <ul>
                    <!--<li><a id="destaque-anterior" href="#"></a></li>
                    <li><a id="proximo-destaque" href="#"></a></li>-->
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
                    <li class='turmas taxonomia'><a class="select" href="#" title="Escolher turmas">Escolher turmas<span class="seta"></span></a>
                        <ul class="selecionados">
                        </ul>
                        <ul class="tudo">
                            <?php
                                $args = array(
                                    'orderby'            => 'name',
                                    'order'              => 'ASC',
                                    'taxonomy'           => 'turma'
                                ); 
                              
                                $categories = get_categories($args);
                                foreach($categories as $category) { 
                                    echo '<li><a href="' . $category->slug . '">' . $category->name.'</a></li> ';
                                } 
                            ?>
                        </ul>
                    </li>
                    <li class='areas taxonomia'><a class="select" href="#" title="Selecionar área">Selecionar áreas<span class="seta"></span></a>
                        <ul class="selecionados">
                        </ul>
                        <ul class="tudo">
                            <?php
                                $args2 = array(
                                    'orderby'            => 'name',
                                    'order'              => 'ASC',
                                    'taxonomy'           => 'area_de_atuacao'
                                ); 
                              
                                $categories = get_categories($args2);
                                foreach($categories as $category) { 
                                    echo '<li><a href="' . $category->slug . '">' . $category->name.'</a></li> ';
                                } 
                            ?>                        </ul>
                    </li>
                    <li><a href="#" title="" class="submit">Filtrar resultados</a></li>
                </ul>
                <!-- SIDEBAR Fim -->

                <!-- CONTEÚDO Início -->
                <ul id="conteudo">

                    <?php 
                    $perfis = new WP_Query(); 
                    $perfis->query(array(
                        'post_type' => array('perfil_narrativo', 'perfil_curricular'),
                        'orderby' => 'name',
                        'order' => 'asc',
                        'turma' => '2012',
                        'posts_per_page' => 38
                    )); ?>
                                                                
                    <?php while($perfis->have_posts()) { ?>
                        <?php $perfis->the_post(); ?>
                        
                        <li class="resumo-aluno">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php  echo get_image('foto_resumo'); ?>
                                <h4><?php the_title(); ?></h4>
                                <div class="info">
                                    <p><?php echo get('contatos_email'); ?></p>
                                    <span>Áreas de interesse</span>
                                    <p> 
                                        <?php $interesses = get_field('informacoes_adicionais_interesses');
                                            foreach($interesses as $interesse){ echo $interesse.", "; } ?>                                   
                                    </p>
                                    <span>Competências</span>
                                    <p>
                                        <?php $competencias = get_field('informacoes_adicionais_competencias');
                                            foreach($competencias as $competencia){ echo $competencia.", "; } ?> 
                                    </p>
                                </div>
                            </a>
                        </li>

                    <?php } ?>

                    <?php wp_reset_postdata(); ?>

                </ul>
                <!-- CONTEÚDO Fim -->

            </div>
        </div>
        <!-- LISTA DE ALUNOS Fim -->
        
    <?php get_footer(); ?>

