<?php
    get_header();

    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
?>

            <!-- HEADER Inicio -->
            <div id="header" class="sobre">
                <div class="wrap">
                    <div id="info">
                        <h2>SOBRE O COPPEAD</h2>
                    </div>
                </div>
            </div>
            <!-- HEADER Fim -->   

            <!-- DETALHES Início -->
            <div id="detalhes" class="sobre">
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