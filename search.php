<?php
/**
 * The template for Search result
 */
    get_header();
?>
    <section id="body_area">
        <div class="container">
            <div class="row">
               <div id="search_title">
                 <h1 class="title">
                     <?php printf(__('Search result for: %s','procode'), get_search_query()); ?>
                 </h1>
               </div>
                <div class="col-md-9">
                    <?php get_template_part('template_part/blog_setup'); ?>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>