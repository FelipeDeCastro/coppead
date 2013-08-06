<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <?php if(is_post_type_archive( 'depoimento' )) { ?>

            <title>MBA COPPEAD - Depoimentos de empresários e ex-alunos </title>
            <meta name="description" content="Veja o que empresários e ex alunos dizem sobre a COPPEAD e o seu MBA."> 

            <meta property="og:title" content="MBA COPPEAD - Depoimentos de empresários e ex-alunos ">
            <meta property="og:description" content="Veja o que empresários e ex alunos dizem sobre a COPPEAD e o seu MBA.">
            <meta property="og:url" content="<?php echo get_post_type_archive_link( 'depoimento' ); ?>">
            <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/Logo-Coppead.jpg">
            <meta property="og:type" content="article">

        <?php } else if( 'perfil_narrativo' == get_post_type() || 'perfil_curricular' == get_post_type() ) { ?>

            <?php $turmas = get_the_terms( $post->ID, 'turma' ); ?>
            <?php $areas_de_atuacao = get_the_terms( $post->ID, 'area_de_atuacao' ); ?>
            <title>Perfil - <?php the_title(); ?> - <?php foreach ( $turmas as $turma ) { echo $turma->name; ?> / <?php } ?></title>
            <meta name="description" content="<?php the_title(); ?> - Mestre em Administração de empresas pela COPPEAD/UFRJ, com especialização em <?php foreach ( $areas_de_atuacao as $area_de_atuacao ) { echo $area_de_atuacao->name; ?>, <?php } ?>">   

            <meta property="og:title" content="Perfil - <?php the_title(); ?> - <?php foreach ( $turmas as $turma ) { echo $turma->name; ?> / <?php } ?>">
            <meta property="og:description" content="<?php the_title(); ?> - Mestre em Administração de empresas pela COPPEAD/UFRJ, com especialização em <?php foreach ( $areas_de_atuacao as $area_de_atuacao ) { echo $area_de_atuacao->name; ?>, <?php } ?>">
            <meta property="og:url" content="<?php echo the_permalink(); ?>">
            <meta property="og:image" content="<?php  echo get('foto_resumo'); ?>">
            <meta property="og:type" content="article">

        <?php } else if(is_page('areas-de-enfase')) { ?>

            <title>MBA COPPEAD - Áreas de Ênfase</title>
            <meta name="description" content="Especialização nas áreas de Finanças, Controladoria, Logística, Operações, Tecnologia, Marketing, Negócios Internacionais, Estratégia, Recursos Humanos.">  

            <meta property="og:title" content="MBA COPPEAD - Áreas de Ênfase">
            <meta property="og:description" content="Especialização nas áreas de Finanças, Controladoria, Logística, Operações, Tecnologia, Marketing, Negócios Internacionais, Estratégia, Recursos Humanos.">
            <meta property="og:url" content="<?php echo the_permalink(); ?>">
            <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/Logo-Coppead.jpg">
            <meta property="og:type" content="article">

        <?php } else if(is_page('programa-de-intercambio')) { ?>

            <title>MBA COPPEAD - Intercâmbios Internacionais</title>
            <meta name="description" content="Convênios bilaterais com 37 escolas de alto nível, espalhadas pelos seis continentes, garantem experiência internacional aos alunos.">     

            <meta property="og:title" content="MBA COPPEAD - Intercâmbios Internacionais">
            <meta property="og:description" content="Convênios bilaterais com 37 escolas de alto nível, espalhadas pelos seis continentes, garantem experiência internacional aos alunos.">
            <meta property="og:url" content="<?php echo the_permalink(); ?>">
            <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/Logo-Coppead.jpg">
            <meta property="og:type" content="article">

        <?php } else if(is_page('catedras')) { ?>

            <title>MBA COPPEAD - Integração com a Iniciativa Privada</title>
            <meta name="description" content="O MBA COPPEAD conta com diversas cátedras de pesquisa, contribuindo para aprimoramento de técnicas gerenciais e para a formação dos seus alunos.">   

            <meta property="og:title" content="MBA COPPEAD - Integração com a Iniciativa Privada">
            <meta property="og:description" content="O MBA COPPEAD conta com diversas cátedras de pesquisa, contribuindo para aprimoramento de técnicas gerenciais e para a formação dos seus alunos.">
            <meta property="og:url" content="<?php echo the_permalink(); ?>">
            <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/Logo-Coppead.jpg">
            <meta property="og:type" content="article">

        <?php } else if(is_page('extra-classe')) { ?>

            <title>MBA COPPEAD - Muito além da sala de aula</title>
            <meta name="description" content="Programas de sustentabilidade ambiental e social. Participação em prémios de inovação e programas de integração com escolas de negócios Latino Americanas.">  

            <meta property="og:title" content="MBA COPPEAD - Muito além da sala de aula">
            <meta property="og:description" content="Programas de sustentabilidade ambiental e social. Participação em prémios de inovação e programas de integração com escolas de negócios Latino Americanas.">
            <meta property="og:url" content="<?php echo the_permalink(); ?>">
            <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/Logo-Coppead.jpg">
            <meta property="og:type" content="article">

        <?php } else if(is_page('sobre-a-coppead')) { ?>

            <title>MBA COPPEAD - A Instituição e o Curso</title>
            <meta name="description" content="Oferecendo a mesma qualidade e metodologias que os melhores MBA's do mundo o COPPEAD vêm formando profissionais de alta qualidade há quarto décadas."> 

            <meta property="og:title" content="MBA COPPEAD - A Instituição e o Curso">
            <meta property="og:description" content="Oferecendo a mesma qualidade e metodologias que os melhores MBA's do mundo o COPPEAD vêm formando profissionais de alta qualidade há quarto décadas.">
            <meta property="og:url" content="<?php echo the_permalink(); ?>">
            <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/Logo-Coppead.jpg">
            <meta property="og:type" content="article">

        <?php } else if(is_page('contato')) { ?>

            <title>MBA COPPEAD - Entre em contato</title>
            <meta name="description" content="Entre em contato com as turmas de MBA para receber mais informações e saber como participar de eventos de recolocação dos profissionais formados."> 

            <meta property="og:title" content="MBA COPPEAD - Entre em contato">
            <meta property="og:description" content="Entre em contato com as turmas de MBA para receber mais informações e saber como participar de eventos de recolocação dos profissionais formados.">
            <meta property="og:url" content="<?php echo the_permalink(); ?>">
            <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/Logo-Coppead.jpg">
            <meta property="og:type" content="article">

        <?php } else { ?>

            <title>MBA COPPEAD - O melhor Full Time MBA da América Latina</title>
            <meta name="description" content="<?php bloginfo('description'); ?>">  

            <meta property="og:title" content="MBA COPPEAD - O melhor Full Time MBA da América Latina">
            <meta property="og:description" content="<?php bloginfo('description'); ?>">
            <meta property="og:url" content="<?php bloginfo('url'); ?>">
            <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/Logo-Coppead.jpg">
            <meta property="og:type" content="article">

        <?php } ?>



        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <?php wp_head(); ?>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <?php include (TEMPLATEPATH . '/topo.php'); ?>