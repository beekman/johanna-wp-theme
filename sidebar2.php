    <?php if ( is_active_sidebar( 'under-posts' ) ) : ?>

                        <?php dynamic_sidebar( 'under-posts' ); ?>

                    <?php else : ?>

                        <!-- This content shows up if there are no widgets defined in the backend. -->

                        <div class="alert alert-help">
                            <p><?php _e("Please activate some Widgets.", "johannatheme");  ?></p>
                        </div>

                    <?php endif; ?>

                </div>
