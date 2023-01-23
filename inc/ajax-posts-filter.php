<?php
/**
 * AJAX filter posts by taxonomy term
 */
function vb_filter_posts() {

    if( !isset( $_POST['nonce'] ) || !wp_verify_nonce( $_POST['nonce'], 'bobz' ) )
        die('Permission denied');

    /**
     * Default response
     */
    $response = [
        'status'  => 500,
        'message' => 'Algo salió mal, inténtelo más tarde...',
        'content' => false,
        'found'   => 0
    ];

    $tax  = sanitize_text_field($_POST['params']['tax']);
    $term = sanitize_text_field($_POST['params']['term']);
    $page = intval($_POST['params']['page']);
    $qty  = intval($_POST['params']['qty']);

    /**
     * Check if term exists
     */
    if (!term_exists( $term, $tax) && $term != 'all-terms') :
        $response = [
            'status'  => 501,
            'message' => 'La categoría no existe.',
            'content' => 0
        ];

        die(json_encode($response));
    endif;

    if ($term == 'all-terms') : 

        $tax_qry[] = [
            'taxonomy' => $tax,
            'field'    => 'slug',
            'terms'    => $term,
            'operator' => 'NOT IN'
        ];

    else :

        $tax_qry[] = [
            'taxonomy' => $tax,
            'field'    => 'slug',
            'terms'    => $term,
        ];

    endif;

    /**
     * Setup query
     */
    $args = [
        'paged'          => $page,
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => $qty,
        'tax_query'      => $tax_qry
    ];

    $qry = new WP_Query($args);

    ob_start();
        if ($qry->have_posts()) : ?>
            <div class="blog-posts-container">
            <?php while ($qry->have_posts()) : $qry->the_post(); ?>
                <div class="card" data-cat="<?php echo get_the_category()[0]->name; ?>">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid rounded" alt="<?php echo get_the_title(); ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="fw-extrabold text-uppercase"><?php echo get_the_title(); ?></h5>
                        <p><?php echo get_the_excerpt(); ?></p>
                    </div>
                    <div class="card-footer text-end mb-3">
                        <a href="<?php echo get_the_permalink(); ?>" class="btn-leer">Leer más</a>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>

            <?php
            /**
             * Pagination
             */
            vb_ajax_pager($qry,$page);

            $response = [
                'status'=> 200,
                'found' => $qry->found_posts
            ];

            
        else :

            $response = [
                'status'  => 201,
                'message' => 'No se encontraron artículos'
            ];

        endif;

    $response['content'] = ob_get_clean();

    die(json_encode($response));

}
add_action('wp_ajax_do_filter_posts', 'vb_filter_posts');
add_action('wp_ajax_nopriv_do_filter_posts', 'vb_filter_posts');


/**
 * Shortocde for displaying terms filter and results on page
 */
/* 
function vb_filter_posts_sc($atts) {

    $a = shortcode_atts( array(
        'tax'      => 'category', // Taxonomy
        'terms'    => false, // Get specific taxonomy terms only
        'active'   => false, // Set active term by ID
        'per_page' => 12 // How many posts per page
    ), $atts );

    $result = NULL;
    $terms  = get_terms($a['tax']);

    if (count($terms)) :
        ob_start(); ?>
            <div id="container-async" data-paged="<?php echo $a['per_page']; ?>" class="sc-ajax-filter">
                <ul class="nav-filter">
                    <?php foreach ($terms as $term) : ?>
                        <li<?php if ($term->term_id == $a['active']) :?> class="active"<?php endif; ?>>
                            <a href="<?php echo get_term_link( $term, $term->taxonomy ); ?>" data-filter="<?php echo $term->taxonomy; ?>" data-term="<?php echo $term->slug; ?>" data-page="1">
                                <?php echo $term->name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="status"></div>
                <div class="content"></div>
            </div>
        
        <?php $result = ob_get_clean();
    endif;

    return $result;
}
add_shortcode( 'ajax_filter_posts', 'vb_filter_posts_sc'); 
/*


/**
 * Pagination
 */
function vb_ajax_pager( $query = null, $paged = 1 ) {

    if (!$query)
        return;

    $paginate = paginate_links([
        'base'      => '%_%',
        'type'      => 'array',
        'total'     => $query->max_num_pages,
        'format'    => '#page=%#%',
        'current'   => max( 1, $paged ),
        'prev_text'    => __('<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.60254 1.35938L1.2432 7.71871L7.60254 14.0781" stroke="#3C3C3C" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        '),
        'next_text'    => __('<svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.626404 14.0781L6.98574 7.71879L0.626403 1.35945" stroke="#3C3C3C" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        '),
    ]);

    if ($query->max_num_pages > 1) : ?>
        <ul class="blog-pagination my-4">
            <?php foreach ( $paginate as $page ) :?>
                <li><?php echo $page; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;
}