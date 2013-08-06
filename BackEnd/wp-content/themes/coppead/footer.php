        <?php if (!is_post_type_archive( 'depoimento' )) { ?>

            <!-- DEPOIMENTOS Início -->
            <div id="depoimentos">
                <div class="wrap">

                    <?php 
                    $depoimentos = new WP_Query(); 
                    $depoimentos->query(array(
                        'post_type' => 'depoimento',
                        'orderby' => 'rand',
                        'posts_per_page' => 1
                    )); ?>
                                                                
                    <?php while($depoimentos->have_posts()) { ?>
                        <?php $depoimentos->the_post(); ?>

                        <div class="depoimento">
                            <?php the_content(); ?>
                            <br/><br/><span class="autor"><?php the_title(); ?>,</span>
                            <br/><span class="autor-info"><?php echo get_the_excerpt(); ?></span>
                        </div>
                        <?php $logo = get('logo_da_empresa_rodape'); ?>
                        <?php if (!empty( $logo )) { ?>
                            <img src="<?php echo $logo; ?>" height="213" width="213">                    
                        <?php } ?>

                    <?php } ?>

                    <?php wp_reset_postdata(); ?>

                </div>
            </div>
            <!-- DEPOIMENTOS Fim -->

        <?php } ?>


        <!-- RODAPÉ Início -->
        <div id="rodape">
            <div class="wrap">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/Logo-Coppead-Rodape.jpg" height="191" width="192"></a>
            <ul class="primeiro">
                <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                <li><a href="http://www.coppead.ufrj.br/">Site Coppead</a></li>
                <li><a href="http://www.ufrj.br/">Site UFRJ</a></li>
            </ul>
            <ul class="mestrado">
                <li><a href="<?php echo $permalink = get_permalink( get_page_by_path( 'areas-de-enfase' ) ); ?>">Mestrado</a>
                    <ul>
                        <li><a href="<?php echo $permalink = get_permalink( get_page_by_path( 'areas-de-enfase' ) ); ?>">Áreas de ênfase</a></li>
                        <li><a href="<?php echo $permalink = get_permalink( get_page_by_path( 'experiencia-multicultural' ) ); ?>">Experiência Multicultural</a></li>
                        <li><a href="<?php echo $permalink = get_permalink( get_page_by_path( 'catedras' ) ); ?>">Cátedras</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="coppead">
                <li><a href="<?php echo $permalink = get_permalink( get_page_by_path( 'sobre-a-coppead' ) ); ?>">Coppead</a>
                    <ul>
                        <li><a href="<?php echo $permalink = get_permalink( get_page_by_path( 'sobre-a-coppead' ) ); ?>">Sobre a Coppead</a></li>
                        <li><a href="<?php echo get_post_type_archive_link( 'depoimento' ); ?>">Depoimentos</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="contato">
                <li><a href="<?php echo $permalink = get_permalink( get_page_by_path( 'contato' ) ); ?>">Contato</a></li>
            </ul>
            </div>
        </div>
        <!-- RODAPÉ Fim -->

        <?php wp_footer(); ?>

    </body>
</html>
