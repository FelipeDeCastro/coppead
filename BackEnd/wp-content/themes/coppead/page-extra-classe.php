<?php
    get_header();

    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
?>

            <!-- HEADER Inicio -->
            <div id="header" class="extra-classe">
                <div class="wrap">
                    <div id="info">
                        <h2>MUITO ALÉM DA SALA DE AULA </h2>
                    </div>
                </div>
            </div>
            <!-- HEADER Fim -->  

            <!-- NAVEGAÇÃO Inicio -->
            <div id="navegacao" class="extra-classe">
                <div class="wrap">
                    <ul id="abas">
                        <li><a href="#conteudo1" class="active">Sustentabilidade</a></li>
                        <li><a href="#conteudo2">Projeto Social</a></li>
                    </ul>
                </div>
            </div>
            <!-- NAVEGAÇÃO Fim --> 

            <!-- DETALHES Início -->
            <div id="detalhes" class="extra-classe">
                <div class="wrap">

                    <?php the_content(); ?>

                </div>
            </div>
            <!-- DETALHES Fim -->

<?php
        } // end while
    } // end if
    get_footer();
?>