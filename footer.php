<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<div class="wrapper" id="wrapper-footer">
    <footer class="p-2 bg-dark wow bounceInUp">
        <div class="<?php echo esc_attr( $container ); ?>">
            <div class="row">
                <div class="col-md-3 small">
                    <div class="text-center text-light">Why Video?</div>
                    <div class="text-center italics"><a href="tel://801-748-2281" title="Let's Talk!">"It's <span class="thin">Time</span> We Talk..."</a> </div>
                    <div class="text-center"><i class="fa fa-phone text-light"></i> <br/>
                        <span><a href="tel://801-748-2281" title="Give us a call." >801-748-2281</a></span> </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center small text-light"><a href="http://talkingheads.com/affiliate/">Powered by Talking Heads<sup class="smaller"><i class="fal fa-registered"></i></sup></a> </div>
                    <div class="quotes">
                        <p id="changeQuote" class="text-center text-capitalize text-info"></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center small text-light">Navigation</div>
                    <?php
                    $crumbs = explode( "/", $_SERVER[ "REQUEST_URI" ] );
                    $crumbs = array_filter( $crumbs );
                    array_unshift( $crumbs, "home" );
                    $linkBase = strtolower( substr( $_SERVER[ "SERVER_PROTOCOL" ], 0, 5 ) ) == 'https' ? 'https' : 'http';
                    $linkBase = $linkBase . "://";
                    $linkPath = $linkBase . $_SERVER[ 'HTTP_HOST' ];
                    $word = "";
                    $crumbCounter = 0;
                    ?>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <?php
                            foreach ( $crumbs as $crumb ) {
                                $word = $crumb;
                                if ( $crumbCounter === 0 ) {
                                    echo '<li class="breadcrumb-item"><a href="' . $linkPath . '" >Home</a></li>';
                                    $linkPath = $linkPath . '/';
                                } else {
                                    $linkPath = $linkPath . $word . '/';
                                    echo '<li class="breadcrumb-item"><a href="' . $linkPath . '" >' . $word . '</a></li>';
                                }
                                $crumbCounter++;
                            }
                            ?>
                        </ol>
                    </nav>
                    <div class="text-info text-center"><a href="https://www.websitetalkingheads.com/sitemap.html" title="Sitemap">Sitemap</a> </div>
                </div>
            </div>
            <!-- row end --> 
            
        </div>
        <!-- container end --> 
    </footer>
</div>
<!-- wrapper end -->

</div>
<!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
</body></html>