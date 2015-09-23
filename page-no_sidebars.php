<?php
/*
Template Name: No Sidebars
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                                <header class="article-header">

                                    <h1 class="page-title"><?php the_title(); ?></h1>


                                </header> <!-- end article header -->

                                <section class="entry-content clearfix" itemprop="articleBody">
                                    <?php the_content(); ?>
                                </section> <!-- end article section -->

                                <footer class="article-footer">
                                    <p class="clearfix"><?php the_tags('<span class="tags">' . __('Tags:', 'johannatheme') . '</span> ', ', ', ''); ?></p>

                                </footer> <!-- end article footer -->

                                <?php comments_template(); ?>

                            </article> <!-- end article -->

                            <?php endwhile; else : ?>

                                    <article id="post-not-found" class="hentry clearfix">
                                            <header class="article-header">
                                                <h1><?php _e("Oops, Post Not Found!", "johannatheme"); ?></h1>
                                        </header>
                                            <section class="entry-content">
                                                <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "johannatheme"); ?></p>
                                        </section>
                                        <footer class="article-footer">
                                                <p><?php _e("This is the error message in the page-nosidebars.php template.", "johannatheme"); ?></p>
                                        </footer>
                                    </article>

                            <?php endif; ?>

					</main>

				</div>

			</div>


<?php get_footer(); ?>
