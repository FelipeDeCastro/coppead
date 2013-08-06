<?php

get_header();


?>

<!-- HEADER Inicio -->
        <div id="header" class="depoimentos">
            <div class="wrap">
                <div id="info">
                    <h2>RECONHECIMENTO DO MERCADO</h2>
                </div>
            </div>
        </div>
        <!-- HEADER Fim -->  
        
        <!-- DETALHES Início -->
        <div id="detalhes" class="depoimentos">
            <ul>
                <?php 
                $depoimentos = new WP_Query(); 
                $depoimentos->query(array(
                    'post_type' => 'depoimento',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'desc'
                )); ?>
                                                            
                <?php while($depoimentos->have_posts()) { ?>
                    <?php $depoimentos->the_post(); ?>

                    <li class="depoimento" rel1="<?php echo get('logo_da_empresa_lista'); ?>" rel2="<?php echo get('logo_da_empresa_lista_hover'); ?>" rel3="<?php echo get('logo_da_empresa_lista_selecionado'); ?>">
                        <div class="wrap">
                            <?php the_content(); ?>
                            <h4><?php the_title(); ?></h5>
                            <h5><?php echo get_the_excerpt(); ?></h5>
                        </div>
                    </li>

                <?php } ?>

                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
        <!-- DETALHES Fim -->


<?php get_footer(); ?>