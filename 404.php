<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                        <article id="post-not-found" class="hentry clearfix">

                            <header class="article-header">

                                <h1><?php _e("Epic 404 - Article Not Found", "johannatheme"); ?></h1>

                            </header> <!-- end article header -->

                            <section class="entry-content">

                                <p><?php _e("The article you were looking for was not found, but maybe try looking again!", "johannatheme"); ?></p>

                            </section> <!-- end article section -->

                            <section class="search">

                                    <p><?php get_search_form(); ?></p>

                            </section> <!-- end search section -->

                            <footer class="article-footer">

                                    <p><?php _e("This is the 404.php template.", "johannatheme"); ?></p>

                            </footer> <!-- end article footer -->

                        </article> <!-- end article -->

			</main>

					<?php get_sidebar(); ?>

		</div>

	</div>


<?php get_footer(); ?>

