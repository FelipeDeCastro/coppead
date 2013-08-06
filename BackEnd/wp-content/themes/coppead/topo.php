<!-- TOPO Inicio -->
<div id="topo">
    <div id="menu-superior">
        <div class="wrap">
            <h1 id="logo">
                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/img/Logo-Coppead.jpg" width="167" height="136" />
                </a>
            </h1>                   
            <ul>             
                <li>
                    <a class="<?php if (is_page('areas-de-enfase')) { echo active ;} ?>" href="<?php echo $permalink = get_permalink( get_page_by_path( 'areas-de-enfase' ) ); ?>">Mestrado</a>
                    <ul class="submenu">
                        <!--<li><a class="<?php if (is_page('areas-de-enfase')) { echo active ;} ?>" href="<?php echo $permalink = get_permalink( get_page_by_path( 'areas-de-enfase' ) ); ?>">Áreas de ênfase</a></li>-->
                        <li><a class="<?php if (is_page('programa-de-intercambio')) { echo active ;} ?>" href="<?php echo $permalink = get_permalink( get_page_by_path( 'programa-de-intercambio' ) ); ?>">Programa de intercâmbio</a></li>
                        <li><a class="<?php if (is_page('catedras')) { echo active ;} ?>" href="<?php echo $permalink = get_permalink( get_page_by_path( 'catedras' ) ); ?>">Cátedras</a></li>
                        <!--<li><a class="<?php if (is_page('extra-classe')) { echo active ;} ?>" href="<?php echo $permalink = get_permalink( get_page_by_path( 'extra-classe' ) ); ?>">Extra-classe</a></li>-->
                    </ul>                    
                </li>
                <li>
                    <a class="<?php if (is_page('sobre-a-coppead')) { echo active ;} ?>" href="<?php echo $permalink = get_permalink( get_page_by_path( 'sobre-a-coppead' ) ); ?>">Coppead</a>
                    <ul class="submenu">
                        <li><a class="<?php if (is_page('sobre-a-coppead')) { echo active ;} ?>" href="<?php echo $permalink = get_permalink( get_page_by_path( 'sobre-a-coppead' ) ); ?>">Sobre o Coppead</a></li>
                        <li><a class="<?php if (is_post_type_archive( 'depoimento' )) { echo active ;} ?>" href="<?php echo get_post_type_archive_link( 'depoimento' ); ?>">Depoimentos</a></li>
                    </ul>                    
                </li>
                <li><a class="<?php if (is_page('contato')) { echo active ;} ?>" href="<?php echo $permalink = get_permalink( get_page_by_path( 'contato' ) ); ?>" class="contato">Contato</a></li>
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