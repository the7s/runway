<!-- Content -->
<div class="col-md-9">
    <div class="row main">
        <article class="post_article" itemscope itemtype="https://schema.org/Article">
            <?php if (have_posts()) while (have_posts()) {
                the_post();
                the_content();
            }; ?>
        </article>
        <ul class="tags">
            <?php the_tags('<li>', '</li><li>', '</li>') ?>
        </ul>
        <nav class="nearbypost">
            <div class="alignleft"><?php previous_post_link('%link'); ?></div>
            <div class="alignright"><?php next_post_link('%link'); ?></div>
        </nav>
    </div>