<?php
    get_header();

    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
?>

            <!-- HEADER Inicio -->
            <div id="header" class="contato">
                <div class="wrap">
                    <div id="info">
                        <h2>FAÇA PARTE DA NOSSA REDE</h2>
                    </div>
                </div>
            </div>
            <!-- HEADER Fim -->

            <!-- DETALHES Início -->
            <div id="detalhes" class="contato">
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