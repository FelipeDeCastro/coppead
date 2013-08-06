<?php
    get_header();

    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
?>

            <!-- HEADER Inicio -->
            <div id="header" class="programa-intercambio">
                <div class="wrap">
                    <div id="info">
                        <h2>PROGRAMA DE INTERCÂMBIO</h2>
                    </div>
                </div>
            </div>
            <!-- HEADER Fim -->  

            <!-- NAVEGAÇÃO Inicio -->
            <div id="navegacao">
                <div class="wrap">
                    <p>Explore a lista de universidade pelo mapa acima, ou navegue pelo menu abaixo:</p>
                    <ul id="abas">
                        <li><a href="#conteudo1" class="active">Sobre o Programa</a></li>
                        <li><a href="#conteudo2">Américas</a></li>
                        <li><a href="#conteudo3">Europa</a></li>
                        <li><a href="#conteudo4" class="last">Ásia, África e Oceania</a></li>
                    </ul>
                </div>
            </div>
            <!-- NAVEGAÇÃO Fim -->

            <!-- DETALHES Início -->
            <div id="detalhes" class="programa-intercambio">
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