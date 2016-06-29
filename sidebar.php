                <div id="sidebar1" class="sidebar d-2of5 t-1of2 m-all last clearfix" role="complementary">

                    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

                        <?php dynamic_sidebar( 'sidebar1' ); ?>

                    <?php else : ?>

                        <!-- This content shows up if there are no widgets defined in the backend. -->

                        <div class="alert alert-help">
                            <p><?php _e("Please activate some Widgets.", "johannatheme");  ?></p>
                        </div>

                    <?php endif; ?>

                </div>
