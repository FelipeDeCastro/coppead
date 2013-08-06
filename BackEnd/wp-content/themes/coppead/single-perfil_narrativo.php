<?php

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();

        $turmas = get_the_terms( $post->ID, 'turma' );
        $areas_de_atuacao = get_the_terms( $post->ID, 'area_de_atuacao' );
        $interesses = get_field('informacoes_adicionais_interesses');
        $competencias = get_field('informacoes_adicionais_competencias');
        $formacoes = get_field('info_complementares_formacao');
        $experiencias = get_field('info_complementares_experiencia');
?>
        <!-- HEADER Inicio -->
                <div id="header" class="aluno perfil-narrativo">
                    <div class="wrap">
                        <div id="info">
                            <h2><?php the_title(); ?></h2>
                            <p><span>Turma </span><?php foreach ( $turmas as $turma ) { ?> <span><?php echo $turma->name; ?></span> <?php } ?>
                                <img src="<?php bloginfo('template_url'); ?>/img/turma-linkedin.png" height="23" width="23">
                            </p>
                            <p><?php foreach ( $areas_de_atuacao as $area_de_atuacao ) { ?> <span><?php echo $area_de_atuacao->name; ?></span> <?php } ?></p>
                            <ul>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/img/email.png" height="37" width="37">
                                    <a href="mailto:<?php  echo get('contatos_email'); ?>"><?php  echo get('contatos_email'); ?></a>
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/img/linkedin.png" height="37" width="37">
                                    <a href="http://<?php  echo get('contatos_linkedin'); ?>"><?php  echo get('contatos_linkedin'); ?></a>
                                </li>
                            </ul>
                        </div>
                        <?php  echo get_image('foto_pagina_perfil'); ?>
                    </div>
                </div>
                <!-- HEADER Fim -->
                
                <!-- DETALHES Início -->
                <div id="detalhes" class="turma-nova">
                    <div class="wrap"> 
                        <div id="conteudo">
                            <h3>“<?php  echo get_the_excerpt(); ?>”</h3>
                            
                            <?php the_content() ?>

                            <h4>Interesses</h4>
                            <ul>
                                <?php foreach ($interesses as $interesse){ ?>
                                    <li>- <?php echo $interesse; ?></li>
                                <?php } ?>
                            </ul>

                            <h4>Competências</h4>
                            <ul>
                                <?php foreach ($competencias as $competencia){ ?>
                                    <li>- <?php echo $competencia; ?></li>
                                <?php } ?>
                            </ul>

                        </div>              

                        <div id="resumo">
                            <h4>Nascimento</h4>
                            <ul>
                                <li><?php  echo get('info_complementares_nascimento'); ?></li> 
                            </ul>
                            <h4>Formação</h4>
                            <ul>
                                <?php foreach ($formacoes as $formacao){ ?>
                                    <li><?php echo $formacao; ?></li>
                                <?php } ?>
                            </ul>
                            <h4>Experiência Profissional Pré-MBA</h4>
                            <ul>
                                <?php foreach ($experiencias as $experiencia){ ?>
                                    <li><?php echo $experiencia; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- DETALHES Fim -->
<?php

    }
}

get_footer();

?>
