<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================

	Required external files

	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================

	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme

	======================================================================================================================== */

	add_theme_support('post-thumbnails');

	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================

	Actions and Filters

	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================

	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

	======================================================================================================================== */



	/* ========================================================================================================================

	Scripts

	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	/* function starkers_script_enqueuer() {

		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );


		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );


        if ( !is_admin() ) wp_deregister_script('jquery');


	}


	/**
	 * Add scripts via wp_footer()
	 *
	 * @author AntonioHG
	 */
	function starkers_script_enqueuer() {
		if (!is_admin()) {
		  	wp_deregister_script('jquery');
		  	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2', true);
		  	wp_enqueue_script('jquery');
			}

		}
	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	/* ========================================================================================================================

	Comments

	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<h4><?php comment_author_link() ?></h4>

				<?php comment_text() ?>
			</article>
		<?php endif;
	}



	/* ========================================================================================================================

    Register our sidebars and widgetized areas.

	======================================================================================================================== */

	function arphabet_widgets_init() {
		register_sidebar( array(
			'name' => 'Banner',
			'id' => 'banner',
			'before_widget' => '<div class="banner">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => '',
		) );
	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );



	/* ========================================================================================================================

   Register Custom Post Type Authors

	======================================================================================================================== */



	function custom_post_type_authors() {
		$labels = array(
			'name'                => 'Autores', 'Post Type General Name',
			'singular_name'       => 'Autor', 'Post Type Singular Name',
			'menu_name'           => 'Autores',
			'parent_item_colon'   => 'Autor Padre',
			'all_items'           => 'Todos los Autores',
			'view_item'           => 'Ver Autor',
			'add_new_item'        => 'Añadir nuevo Autor',
			'add_new'             => 'Anadir nuevo Autor',
			'edit_item'           => 'Editar Autor',
			'update_item'         => 'Actualizar Autor',
			'search_items'        => 'Buscar Autor',
			'not_found'           => 'No se encuentran Autores',
			'not_found_in_trash'  => 'No se encuentran Autores en la papelera',
		);

		$args = array(
			'label'               => 'autores',
			'description'         => 'Los autores',
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
			//'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 20,
			'menu_icon'           => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);

		register_post_type( 'autores', $args );
	}

	// Hook into the 'init' action
	add_action( 'init', 'custom_post_type_authors', 0 );


	/* ========================================================================================================================

	Otras funciones variadas

	======================================================================================================================== */

	//añadir tamaños de thumbnails
	add_image_size('avatar-autor', 50, 50, true);
	add_image_size('avatar-autor-large', 200, 200, true);

	add_image_size( 'featured-post-thumb', 277, 387, true );
	//add_image_size( 'featured-post-thumb_2x', 554, 774, true );

//FIXME PUT THE CORRECT IMAGE SIZES
	add_image_size( 'post-thumb', 139, 200, true );
	//add_image_size( 'post-thumb_2x', 554, 774, true );

	// Logo personalizado en login
	add_action("login_head", "my_login_head");
	function my_login_head() {
		echo "
		<style>
		body.login #login h1 a {
			background: url('".get_bloginfo('template_url')."/images/logo-login.png') no-repeat center center;
			margin-bottom:0;
			width:300px;
			height:255px;
			margin-top: -100px;
		}
	  	</style>
		";
	}

	// personalizar url logo acceso
	add_action( 'login_headerurl', 'my_custom_login_url' );
	function my_custom_login_url() {
		return 'http://revista-exegesis.com';
	}

	//Cambiar texto alt del logo de login
	add_action("login_headertitle","my_custom_login_title");
	function my_custom_login_title() {
		return 'Revista Exégesis - Un mundo de cómics';
	}

	//Elimina basura de head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

	/* ========================================================================================================================

	Paginación

	======================================================================================================================== */

	// Paginación para la home
	function home_pagination() {
	    global $wp_query, $wp_rewrite;
	    $current = $wp_query->query_vars['paged'] > 1 ?  $wp_query->query_vars['paged'] : 1;

		// Obtenemos todas las categorias implicadas en la paginación y sumamos todos los post que contienen
		$categories = explode(',', $wp_query->query['cat']);
		$total_post = 0;
		foreach ($categories as $category) {
			$total_post += get_category($category)->category_count;
		}
		// Dividimos el total de post implicadas en la paginación más 1 (porque en la página principal sólo mostramos 9 elementos) entre 10 elementos por página, redondeando hacia arriba
		$total_pages = ceil(($total_post+1) / 10);

	    $pagination = array(
	        'base' => @add_query_arg('page','%#%'),
	        'format' => '',
	        'total' => $total_pages,
	        'current' => $current,
	        'show_all' => true,
	        'type' => 'list',
	        'next_text' => 'Siguiente &raquo;',
	        'prev_text' => '&laquo; Anterior'
	        );

	    if( $wp_rewrite->using_permalinks() )
	        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

	    if( !empty($wp_query->query_vars['s']) )
	        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

	    echo paginate_links( $pagination );
	}

	function exe_get_posts_count() {
	    global $wp_query;
	    return $wp_query->post_count;
	}

	function home_pagination_allpost() {
	    global $wp_query, $wp_rewrite;
	    $current = $wp_query->query_vars['paged'] > 1 ?  $wp_query->query_vars['paged'] : 1;

	    //get the total of post in the database
		$total_post = $wp_query->found_posts;

		// Dividimos el total de post implicadas en la paginación más 1 (porque en la página principal sólo mostramos 9 elementos) entre 10 elementos por página, redondeando hacia arriba
		$total_pages = ceil(($total_post+1) / 10);

	    $pagination = array(
	        'base' => @add_query_arg('page','%#%'),
	        'format' => '',
	        'total' => $total_pages,
	        'current' => $current,
	        //'show_all' => true,
	        'type' => 'list',
	        'next_text' => 'Siguiente &raquo;',
	        'prev_text' => '&laquo; Anterior',
	        'mid_size'  => 2
	        );

	    if( $wp_rewrite->using_permalinks() )
	        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

	    if( !empty($wp_query->query_vars['s']) )
	        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

	    echo paginate_links( $pagination );
	}

	// Paginación para todas las demás páginas
	function exe_pagination() {
	    global $wp_query, $wp_rewrite;
	    $current = $wp_query->query_vars['paged'] > 1 ?  $wp_query->query_vars['paged'] : 1;

	    $pagination = array(
	        'base' => @add_query_arg('page','%#%'),
	        'format' => '',
	        'total' => $wp_query->max_num_pages,
	        'current' => $current,
	        //'show_all' => true,
	        'type' => 'list',
	        'next_text' => 'Siguiente &raquo;',
	        'prev_text' => '&laquo; Anterior',
	        'mid_size'  => 2
	        );

	    if( $wp_rewrite->using_permalinks() )
	        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

	    if( !empty($wp_query->query_vars['s']) )
	        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

	    echo paginate_links( $pagination );
	}





//Cargar disqus solo donde es necesario
add_action( 'wp_head', 'tgm_tame_disqus_comments' );
/**
 * Evita que se carguen los comentarios Disqus donde no haga falta
 */
function tgm_tame_disqus_comments() {

	/** Si estás visitando una entrada o página con los comentarios abiertos es necesario el código */
	if ( is_singular( array( 'post', 'page' ) ) && comments_open() )
		return;

	/** Y se frena a Disqus donde no estén abiertos los comentarios */
	remove_action( 'loop_end', 'dsq_loop_end' );
	remove_action( 'wp_footer', 'dsq_output_footer_comment_js' );

}


//Elimina form allowed tags del formulario de comentarios
add_filter( 'comment_form_defaults', 'remove_comment_form_allowed_tags' );
function remove_comment_form_allowed_tags( $defaults ) {

$defaults['comment_notes_after'] = '';
return $defaults;

}
