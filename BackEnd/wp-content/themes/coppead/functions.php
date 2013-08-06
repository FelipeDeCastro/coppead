<?php
	add_action('template_redirect', 'insereMeusScripts');
	add_action('wp_ajax_filtraAlunos', 'filtraAlunos');
	add_action('wp_ajax_nopriv_filtraAlunos', 'filtraAlunos');
	add_action('right_now_content_table_end', 'wph_right_now_content_table_end');


	//registra o main.js para uso mais fácil no futuro
	wp_register_script( 'MeuScriptPrincipal', get_template_directory_uri() . '/js/main.js' );

	//Variáveis enviadas via ajax
	$AjaxData = array(
		'ajaxurl' => admin_url( 'admin-ajax.php' )
	);

	//Convertendo os dados para Json
	$AjaxDataJson = json_encode($AjaxData);

	//Enviando os dados pro main.js
	wp_localize_script( 'MeuScriptPrincipal', 'phpParams', $AjaxData );

	function insereMeusScripts() {
		wp_enqueue_script( 'jquery-1.9.1', get_template_directory_uri() . '/js/vendor/jquery-1.9.1.min.js', array( 'jquery' ), '1.9.1', false );
		wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), '1.0', false );
		wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array( 'jquery' ),'1.3', false );
		wp_enqueue_script( 'cycle', get_template_directory_uri() . '/js/jquery.cycle.all.js', array( 'jquery' ),'3.0.2', false );
		wp_enqueue_script( 'MeuScriptPrincipal', get_template_directory_uri() . '/js/main.js', array( 'jquery' ),'1.0', false );
	}


	function filtraAlunos(){

		//get the submitted parameters
		$turmas = $_POST['turmas'];
	 	$areas = $_POST['areas'];

	    require_once(ABSPATH . 'wp-content/plugins/Magic-Fields-2-master/mf_front_end.php');

	 	if(!empty($turmas) && empty($areas)){
		 	$perfis = new WP_Query(); 
			$perfis->query(array(
			    'post_type' => array('perfil_narrativo', 'perfil_curricular'),
			    'post_status' => 'publish',
			    'orderby' => 'name',
                'order' => 'asc',
                'posts_per_page' => -1,
			    'turma' =>  $turmas
			));

			while($perfis->have_posts()) {

			    $perfis->the_post();
			    $postId = get_the_ID();

?>

	        <li class="resumo-aluno">
	            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	                <?php  echo get_image('foto_resumo',1,1,1,$postId); ?>
	                <h4><?php the_title(); ?></h4>
	                <div class="info">
	                    <p><?php echo get('contatos_email',1,1,$postId); ?></p>
	                    <span>Áreas de interesse</span>
	                    <p><?php $interesses = get_field('informacoes_adicionais_interesses'); foreach($interesses as $interesse){ echo $interesse.", "; } ?></p>
	                    <span>Competências</span>
	                    <p><?php $competencias = get_field('informacoes_adicionais_competencias'); foreach($competencias as $competencia){ echo $competencia.", "; } ?></p>
	                </div>
	            </a>
	        </li>

<?php
		
		 	}
		}

	 	else if(!empty($areas) && empty($turmas)){
		 	$perfis = new WP_Query(); 
			$perfis->query(array(
			    'post_type' => array('perfil_narrativo', 'perfil_curricular'),
			    'post_status' => 'publish',
			    'orderby' => 'name',
                'order' => 'asc',
                'posts_per_page' => -1,
			    'area_de_atuacao' => $areas 
			));

			while($perfis->have_posts()) {

			    $perfis->the_post();
			    $postId = get_the_ID();

?>

	        <li class="resumo-aluno">
	            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	                <?php  echo get_image('foto_resumo',1,1,1,$postId); ?>
	                <h4><?php the_title(); ?></h4>
	                <div class="info">
	                    <p><?php echo get('contatos_email',1,1,$postId); ?></p>
	                    <span>Áreas de interesse</span>
	                    <p><?php $interesses = get_field('informacoes_adicionais_interesses'); foreach($interesses as $interesse){ echo $interesse.", "; } ?></p>
	                    <span>Competências</span>
	                    <p><?php $competencias = get_field('informacoes_adicionais_competencias'); foreach($competencias as $competencia){ echo $competencia.", "; } ?></p>
	                </div>
	            </a>
	        </li>

<?php
		
		 	}
		}

	 	else if(!empty($turmas) && !empty($areas)){
		 	$perfis = new WP_Query(); 
			$perfis->query(array(
			    'post_type' => array('perfil_narrativo', 'perfil_curricular'),
			    'post_status' => 'publish',
			    'orderby' => 'name',
                'order' => 'asc',
                'posts_per_page' => -1,
				'turma' => $turmas,
				'area_de_atuacao' => $areas
			));

			while($perfis->have_posts()) {

			    $perfis->the_post();
			    $postId = get_the_ID();

?>

	        <li class="resumo-aluno">
	            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	                <?php  echo get_image('foto_resumo',1,1,1,$postId); ?>
	                <h4><?php the_title(); ?></h4>
	                <div class="info">
	                    <p><?php echo get('contatos_email',1,1,$postId); ?></p>
	                    <span>Áreas de interesse</span>
	                    <p><?php $interesses = get_field('informacoes_adicionais_interesses'); foreach($interesses as $interesse){ echo $interesse.", "; } ?></p>
	                    <span>Competências</span>
	                    <p><?php $competencias = get_field('informacoes_adicionais_competencias'); foreach($competencias as $competencia){ echo $competencia.", "; } ?></p>
	                </div>
	            </a>
	        </li>

<?php
		
		 	}
		}
	 	
	 	else if(empty($areas) && empty($turmas)){
            $perfis = new WP_Query(); 
            $perfis->query(array(
                'post_type' => array('perfil_narrativo', 'perfil_curricular'),
                'orderby' => 'name',
                'order' => 'asc',
                'turma' => '2012',
                'posts_per_page' => 38

			));

			while($perfis->have_posts()) {

			    $perfis->the_post();
			    $postId = get_the_ID();

?>

	        <li class="resumo-aluno">
	            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	                <?php  echo get_image('foto_resumo',1,1,1,$postId); ?>
	                <h4><?php the_title(); ?></h4>
	                <div class="info">
	                    <p><?php echo get('contatos_email',1,1,$postId); ?></p>
	                    <span>Áreas de interesse</span>
	                    <p><?php $interesses = get_field('informacoes_adicionais_interesses'); foreach($interesses as $interesse){ echo $interesse.", "; } ?></p>
	                    <span>Competências</span>
	                    <p><?php $competencias = get_field('informacoes_adicionais_competencias'); foreach($competencias as $competencia){ echo $competencia.", "; } ?></p>
	                </div>
	            </a>
	        </li>

<?php
		
		 	}	 		
	 	}
		exit;
	}
	function wph_right_now_content_table_end() {

		$args = array(
			'public' => true ,
			'_builtin' => false
		);
		$output = 'object';
		$operator = 'and';

		$post_types = get_post_types( $args , $output , $operator );

		foreach( $post_types as $post_type ) {
			$num_posts = wp_count_posts( $post_type->name );
			$num = number_format_i18n( $num_posts->publish );
			$text = _n( $post_type->labels->singular_name, $post_type->labels->name , intval( $num_posts->publish ) );
			if ( current_user_can( 'edit_posts' ) ) {
					$num = "<a href='edit.php?post_type=$post_type->name'>$num</a>";
					$text = "<a href='edit.php?post_type=$post_type->name'>$text</a>";
			}
			echo '<tr><td class="first b b-' . $post_type->name . '">' . $num . '</td>';
			echo '<td class="t ' . $post_type->name . '">' . $text . '</td></tr>';
		}

		$taxonomies = get_taxonomies( $args , $output , $operator );

		foreach( $taxonomies as $taxonomy ) {
			$num_terms  = wp_count_terms( $taxonomy->name );
			$num = number_format_i18n( $num_terms );
			$text = _n( $taxonomy->labels->singular_name, $taxonomy->labels->name , intval( $num_terms ));
			if ( current_user_can( 'manage_categories' ) ) {
				$num = "<a href='edit-tags.php?taxonomy=$taxonomy->name'>$num</a>";
				$text = "<a href='edit-tags.php?taxonomy=$taxonomy->name'>$text</a>";
			}
			echo '<tr><td class="first b b-' . $taxonomy->name . '">' . $num . '</td>';
			echo '<td class="t ' . $taxonomy->name . '">' . $text . '</td></tr>';
		}
	}

	//Alterar logo da página de login
	function my_custom_login_logo() {
	    echo '<style type="text/css">
	        h1 a { background-image:url('.get_bloginfo('template_directory').'/img/logo-coppead-admin.jpg) !important; background-size: 179px 89px !important; height: 100px !important; }
	        #login { padding-top: 90px !important;}
	    </style>';
	}
	add_action('login_head', 'my_custom_login_logo');

	//hiding discussion from right now dashboard widget
	function wpc_remove_admin_elements() {
	    echo '<style type="text/css">
	        .versions p {display:none !important;}
	        .versions #wp-version-message {display:none !important;}
			.table_discussion {display:none;}
	    </style>';
	}
	add_action('admin_head', 'wpc_remove_admin_elements');
?>