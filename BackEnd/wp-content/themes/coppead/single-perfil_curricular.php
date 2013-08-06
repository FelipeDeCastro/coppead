<?php

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();

        $turmas = get_the_terms( $post->ID, 'turma' );
        $areas_de_atuacao = get_the_terms( $post->ID, 'area_de_atuacao' );
        $interesses = get_field('informacoes_adicionais_interesses');
        $competencias = get_field('informacoes_adicionais_competencias');
?>
        <!-- HEADER Inicio -->
                <div id="header" class="aluno perfil-curricular">
                    <div class="wrap">
                        <div id="info">
                            <h2><?php the_title(); ?></h2>
                            <p><span>Turma </span><?php foreach ( $turmas as $turma ) { ?> <span><?php echo $turma->name; ?></span> <?php } ?>
                                <img src="<?php bloginfo('template_url'); ?>/img/turma-linkedin.png" height="23" width="23">
                            </p>

                            <ul>
                                <li>
                                    <img src="<?php bloginfo('template_url'); ?>/img/phone.png" height="37" width="37"><?php  echo get('contatos_telefone'); ?></li>
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
                <div id="detalhes" class="turma-antiga">
                    <div class="wrap"> 
                        <div id="conteudo">
                            <ul id="abas">
                                <li><a href="#conteudo1" class="active">Formação acadêmica</a></li>
                                <li><a href="#conteudo2">Experiência profissional</a></li>
                                <li><a href="#conteudo3">Informações adicionais</a></li>
                            </ul>
                            <div id="conteudo1" class="container">
                                    <?php  echo get('formacao_academica_formacao'); ?>            
                            </div>

                            <div id="conteudo2" class="container">
                                    <?php  echo get('experiencia_profissional_experiencia'); ?>            
                            </div>

                            <div id="conteudo3" class="container">
                                    <?php  echo get('informacoes_adicionais_informacoes'); ?>            
                            </div>

                        </div>              

                        <div id="resumo">
                            <h4>Interesses</h4>
                            <ul>
                                <?php foreach ($interesses as $interesse){ ?>
                                    <li><?php echo $interesse; ?></li>
                                <?php } ?>
                            </ul>
                            <h4>Competências</h4>
                            <ul>
                                <?php foreach ($competencias as $competencia){ ?>
                                    <li><?php echo $competencia; ?></li>
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
