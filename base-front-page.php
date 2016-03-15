<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    
    <?php get_header( hji_theme_template_base() ); ?>
    
    <body <?php body_class(); ?>>
        
        <!--[if lt IE 9]>
        <div class="alert alert-warning">
            <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'hji-textdomain'); ?>
        </div>
        <![endif]-->
        
        <div id="wrapper" class="body-wrapper">
            
            <?php do_action( 'hji_theme_before_navbar' ); ?>
            
            <?php get_template_part( 'templates/header-navbar' ); ?>
            
            <?php do_action( 'hji_theme_after_navbar' ); ?>
            
            <div class="blvd-slideshow"></div>
            
            <section id="primary" class="primary-wrapper container">
                
                <div class="row">
                   
                    <?php do_action( 'hji_theme_before_content' ); ?>
                    
                    <div id="content" class="<?php echo hji_theme_main_class(); ?>" role="main">
                            
                            <?php do_action( 'hji_theme_before_content_col' ); ?>
                            
                            <?php include hji_theme_template_path(); ?>
                            
                            <?php do_action( 'hji_theme_after_content_col' ); ?>
                    
                    </div>
                
                </div>
            
            </section>
            
            <?php do_action( 'hji_theme_after_primary' ); ?>
            
            <?php if ( is_active_sidebar( 'erba-upper-homewidgets' ) ) : ?>
                
                <section class="container upper-homewidgets-wrapper">
                    
                    <div class="erba-upper-homewidgets">
                        
                        <?php dynamic_sidebar( 'erba-upper-homewidgets'); ?>
                    
                    </div>
                
                </section>
           
            <?php endif; ?>
            
            <?php if( is_active_sidebar( 'erba-homepage-parallax' ) ) : ?>
                
                <div class="homepage-parallax">
                    
                    <div class="container">
                       
                        <div class="erba-homepage-parallax row">
                            
                            <?php dynamic_sidebar( 'erba-homepage-parallax'); ?>
                        
                        </div>
                   
                    </div>
                
                </div>
            
            <?php endif; ?>
            
            <section class="container">
                
                <?php if( is_active_sidebar( 'blvd-homewidgets' ) ) : ?>
                   
                    <div class="blvd-home-widgets row">
                       
                        <?php dynamic_sidebar( 'blvd-homewidgets' ); ?>
                    
                    </div>
                
                <?php endif; ?>
            
            </section>
       
        <?php get_footer( hji_theme_template_base() ); ?>
    
        </div>

    </body>

</html>
