<?php register_nav_menus(
    array('primary-menu'=>'Top Menu')
)
?>
<?php
add_theme_support('post-thumbnails');



function create_posttype() {
  
    register_post_type( 'newss',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'News' ),
                'singular_name' => __( 'newss' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'newss'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );



function createprogramss_posttype() {
  
    register_post_type( 'programss',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Program' ),
                'singular_name' => __( 'programss' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'programss'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createprogramss_posttype' );



function createpartner_posttype() {
  
    register_post_type( 'partner',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Partner' ),
                'singular_name' => __( 'Partner' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'partner'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createpartner_posttype' );

function createteams_posttype() {
  
    register_post_type( 'teams',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'teams'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createteams_posttype' );



function createreportss_posttype() {
  
    register_post_type( 'reportss',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Report' ),
                'singular_name' => __( 'reportss' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'reportss'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createreportss_posttype' );

function createpublicationss_posttype() {
  
    register_post_type( 'publicationss',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Publication' ),
                'singular_name' => __( 'publicationss' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'publicationss'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createpublicationss_posttype' );

function createprocess_posttype() {
  
    register_post_type( 'process',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Our Process' ),
                'singular_name' => __( 'process' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'process'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createprocess_posttype' );


function createvacancies_posttype() {
  
    register_post_type( 'vacancies',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Vacancy' ),
                'singular_name' => __( 'vacancies' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'vacancies'),
            'supports' => array( 'title', 'editor','thumbnail','expire_date' ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createvacancies_posttype' );

function createvideoss_posttype() {
  
    register_post_type( 'videoss',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Videos' ),
                'singular_name' => __( 'videoss' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'videoss'),
            'supports' => array( 'title', 'editor','thumbnail','expire_date' ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createvideoss_posttype' );


