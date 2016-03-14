<div class="top-header">
    
    <div class="container-fluid">
        
        <div class="row">
            
            <div class="col-sm-6 user-signup-header">
                
                <?php do_action( 'hjiUserGetSignUpLink' ); ?>
                
                <?php do_action( 'hjiUserGetWelcomeMessage' ); ?>
                
                <?php do_action( 'hjiUserGetFavoritesLink' ); ?>
                
                <?php do_action( 'hjiUserGetSavedSearchesLink' ); ?>
                
                <?php do_action( 'hjiUserGetLogoutLink' ); ?>
            
            </div>
            
            <div class="col-sm-6">
                
                <div class="socialmedia-header-wrap">
                    
                    <?php hji_social_header_links() ?>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>