<?php
/**
 * Child functions.php
 *
 * @package Unbound Child
 */

/**
 * Enqueue child theme css.
 */
function unbound_child_enqueue_styles() {
	wp_enqueue_style(
		'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'unbound_child_enqueue_styles' );


if ( ! function_exists( 'unbound_pagination' ) ) {



	/**

	 * Displays pagination on archive pages
	 */

	function unbound_pagination() {

		global $wp_query;

		$big = 999999999; // need an unlikely integer.

		$paginate_links = paginate_links(

			array(

				'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),

				'format'    => '?paged=%#%',

				'current'   => max( 1, get_query_var( 'paged' ) ),

				'total'     => $wp_query->max_num_pages,

				'next_text' => esc_html__( 'Seguinte &raquo;', 'unbound' ),

				'prev_text' => esc_html__( '&laquo; Anterior', 'unbound' ),

				'end_size'  => 5,

				'mid_size'  => 5,

				'add_args'  => false,

			)
		);

		// Display the pagination if more than one page is found.
		if ( $paginate_links ) :

			?>



			<div class="pagination clearfix">

				<?php echo wp_kses_post( $paginate_links ); ?>

			</div>



			<?php

		endif;

	}
}



if ( ! function_exists( 'unbound_pagination' ) ) {



	/**

	 * Displays pagination on archive pages
	 */

	function unbound_pagination() {

		global $wp_query;

		$big = 999999999; // need an unlikely integer.

		$paginate_links = paginate_links(

			array(

				'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),

				'format'    => '?paged=%#%',

				'current'   => max( 1, get_query_var( 'paged' ) ),

				'total'     => $wp_query->max_num_pages,

				'next_text' => esc_html__( 'seguinte &raquo;', 'unbound' ),

				'prev_text' => esc_html__( '&laquo; Anterior', 'unbound' ),

				'end_size'  => 5,

				'mid_size'  => 5,

				'add_args'  => false,

			)
		);

		// Display the pagination if more than one page is found.
		if ( $paginate_links ) :

			?>



			<div class="pagination clearfix">

				<?php echo wp_kses_post( $paginate_links ); ?>

			</div>



			<?php

		endif;

	}
}




$comments_args = array(
        // Change the title of send button 
        'label_submit' => __( 'Enviar', 'textdomain' ),
        // Change the title of the reply section
        'title_reply' => __( 'Leave a Reply', 'textdomain' ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        // Redefine your own textarea (the comment body).
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);
comment_form( $comments_args );

	register_sidebar(

		array(

			'name'          => esc_html__( 'Sidebar blog post', 'unbound' ),

			'id'            => 'sidebar-singleblogpost',

			'description'   => esc_html__( 'Add widgets here.', 'unbound' ),

			'before_widget' => '<section id="%1$s" class="widget %2$s">',

			'after_widget'  => '</section>',

			'before_title'  => '<h2 class="widget-title">',

			'after_title'   => '</h2>',

		)
	);
	
	add_action( 'wp_footer', 'mycustom_wp_footer' );
	
	function mycustom_wp_footer() {
	    
	?>
	<script type="text/javascript">
	document.addEventListener( 'wpcf7mailsent', function( event ) {
	    var map_url = '<?php  the_field('upload_pdf_file' , '9502'); ?>';
	    
	    	   if ( '8072' == event.detail.contactFormId ) { 
	    	       window.location.href= map_url;




		} 
		if ( '9918' == event.detail.contactFormId ) { 
			document.getElementById('myModal').style.display = "block";


		} 
		
		
	}, false );
	


	</script>
	<?php
	}





	function company_customlogo() {
		add_theme_support( 'custom-logo', array(
			 'width'       => 400,
			'height'      => 400,
		) );
	}
	add_action( 'after_setup_theme', 'company_customlogo', 11 );