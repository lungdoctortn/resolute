<?php get_header(); ?>

    
<section class="articles">

    <div class="featured-headline">
        <div class="featured-headline__title"><h1><?php esc_html_e( 'Featured Topics', 'theresolute' ) ?></h1></div>
        <div class="featured-headline__subtitle"><h2><?php esc_html_e( 'Topics of Particular Importance', 'theresolute' ) ?></h2></div>
    </div>

    <div id="container" class="featured">

    <!-- This is the large image on the featured topics section -->
    <article <?php post_class( array( 'class' => 'featured__large' ) ); ?>>

        <?php

            $postsPerPage = '1';
            $offset = 0;
            $thumbnailSize = 'large';
            $excerptLength = 20;

            $arguments = [
                'posts' => $postsPerPage,
                'offset' => $offset,
                'size' => $thumbnailSize,
                'length' => $excerptLength
            ];
            
            set_query_var( 'multiVar', $arguments );
            get_template_part( 'template-parts/content', 'loop', $arguments );

        ?>

    </article>

        <!-- This is the medium image on the featured topics section -->
    <article <?php post_class( array( 'class' => 'featured__medium' ) ); ?>>

        <?php

            $postsPerPage = '1';
            $offset = 1;
            $thumbnailSize = 'large';
            $excerptLength = 20;

            $arguments = [
                'posts' => $postsPerPage,
                'offset' => $offset,
                'size' => $thumbnailSize,
                'length' => $excerptLength
            ];

            set_query_var( 'multiVar', $arguments );
            get_template_part( 'template-parts/content', 'loop', $arguments );

        ?>

    </article>

        <!-- This is the small left image on the featured topics section -->
    <article <?php post_class( array( 'class' => 'featured__small--one' ) ); ?>>

        <?php


            $postsPerPage = '1';
            $offset = 2;
            $thumbnailSize = 'large';
            $excerptLength = 10;

            $arguments = [
                'posts' => $postsPerPage,
                'offset' => $offset,
                'size' => $thumbnailSize,
                'length' => $excerptLength
            ];

            set_query_var( 'multiVar', $arguments );
            get_template_part( 'template-parts/content', 'loop', $arguments );

        ?>

    </article>

        <!-- This is the small right image on the featured topics section -->
    <article <?php post_class( array( 'class' => 'featured__small--two' ) ); ?>>

        <?php


            $postsPerPage = '1';
            $offset = 3;
            $thumbnailSize = 'reasons';
            $excerptLength = 10;

            $arguments = [
                'posts' => $postsPerPage,
                'offset' => $offset,
                'size' => $thumbnailSize,
                'length' => $excerptLength
            ];

            set_query_var( 'multiVar', $arguments );
            get_template_part( 'template-parts/content', 'loop', $arguments );

        ?>

</article>

</div>

    <!-- Topic One -->
    <?php $socialism = "socialism"; ?>
    
    <div class="topic-one-headline">
        <div class="topic-one-headline__title"><h1><?php esc_html_e ( $socialism, 'theresolute' ) ?></h1>
        </div>
        <div class="topic-one-headline__subtitle"><h2><?php esc_html_e(  'The Government Controls Your Life', 'theresolute' ) ?></h2></div>
        <div class="topic-one-banner">
            <div class="topic-one-banner__title"><h5><?php esc_html_e ( $socialism, 'theresolute' ) ?></h5>
        </div>
            <hr class="topic-one-banner__line" >
        </div>
    </div>

    <!-- Topic One Large Left Post of Topic One -->

    <div id="container" class="topic-one">
        <div class="topic-one__medium one">
        
            <?php

                $postsPerPage = '1';
                $offset = 0;
                $thumbnailSize = 'large';
                $excerptLength = 20;
                $categoryType = 'socialism';

                $arguments = [
                    'posts' => $postsPerPage,
                    'offset' => $offset,
                    'size' => $thumbnailSize,
                    'length' => $excerptLength,
                    'category' => $categoryType
                ];

                set_query_var( 'multiVar', $arguments );
                get_template_part( 'template-parts/content', 'loop', $arguments );

            ?>
        
        </div>

    
        <div class="topic-one__medium two">

            <?php

                $postsPerPage = '1';
                $offset = 1;
                $thumbnailSize = 'large';
                $excerptLength = 20;
                $categoryType = 'socialism';

                $arguments = [
                    'posts' => $postsPerPage,
                    'offset' => $offset,
                    'size' => $thumbnailSize,
                    'length' => $excerptLength,
                    'category' => $categoryType
                ];

                set_query_var( 'multiVar', $arguments );
                get_template_part( 'template-parts/content', 'loop', $arguments );

            ?>

        </div>
        <div class="topic-one__small one">

            <?php

                $postsPerPage = '1';
                $offset = 2;
                $thumbnailSize = 'blog-image';
                $excerptLength = 10;
                $categoryType = 'socialism';

                $arguments = [
                    'posts' => $postsPerPage,
                    'offset' => $offset,
                    'size' => $thumbnailSize,
                    'length' => $excerptLength,
                    'category' => $categoryType
                ];

                set_query_var( 'multiVar', $arguments );
                get_template_part( 'template-parts/content', 'loopTopicOne', $arguments );

            ?>

        </div>
        <div class="topic-one__small two">

            <?php

                $postsPerPage = '1';
                $offset = 2;
                $thumbnailSize = 'blog-image';
                $excerptLength = 10;
                $categoryType = 'socialism';

                $arguments = [
                    'posts' => $postsPerPage,
                    'offset' => $offset,
                    'size' => $thumbnailSize,
                    'length' => $excerptLength,
                    'category' => $categoryType
                ];

                set_query_var( 'multiVar', $arguments );
                get_template_part( 'template-parts/content', 'loopTopicOne', $arguments );

            ?>

        </div>
        <div class="topic-one__small three">small three</div>
        <div class="topic-one__small four">small four</div>
    </div>

    <!-- Topic Two -->

    <div class="topic-two-headline">
        <div class="topic-two-headline__title"><h1>Topic Two</h1></div>
        <div class="topic-two-headline__subtitle"><h2>It's Back!</h2></div>
        <div class="topic-two-banner">
            <div class="topic-two-banner__title"><h5>topic two</h5></div>
            <hr class="topic-two-banner__line" >
        </div>
    </div>

    <div id="container" class="topic-two">
        <div class="topic-two__post1">post one</div>
        <div class="topic-two__post2">post two</div>
        <div class="topic-two__post3">post three</div>
    </div>

    <!-- Topic Three -->
    
    <div class="topic-three-headline">
        <div class="topic-three-headline__title"><h1>Topic Three</h1></div>
        <div class="topic-three-headline__subtitle"><h2>Better Dead Than Red</h2></div>
        <div class="topic-three-banner">
            <div class="topic-three-banner__title"><h5>topic three</h5></div>
            <hr class="topic-three-banner__line" >
        </div>
    </div>

    <div id="container" class="topic-three">
        <div class="topic-three__large">post large one</div>
        <div class="topic-three__small1">post small1</div>
        <div class="topic-three__small2">post small2</div>
        <div class="topic-three__small3">post small3</div>
        <div class="topic-three__small4">post small4</div>
    </div>

    <!-- Topic Four -->

    <div class="topic-four-headline">
        <div class="topic-four-headline__title"><h1>Topic Four</h1></div>
        <div class="topic-four-headline__subtitle"><h2>All Lives Matter</h2></div>
        <div class="topic-four-banner">
            <div class="topic-four-banner__title"><h5>topic four</h5></div>
            <hr class="topic-four-banner__line" >
        </div>
    </div>

    <div id="container" class="topic-four">
        <div class="topic-four__small1">post four-small1</div>
        <div class="topic-four__small2">post four-small2</div>
        <div class="topic-four__small3">post four-small3</div>
        <div class="topic-four__small4">post four-small4</div>
    </div>

    <!-- Topic Five -->

    <div class="topic-five-headline">
        <div class="topic-five-headline__title"><h1>Topic Five</h1></div>
        <div class="topic-five-headline__subtitle"><h2>All Lives Matter</h2></div>
        <div class="topic-five-banner">
            <div class="topic-five-banner__title"><h5>topic five</h5></div>
            <hr class="topic-five-banner__line" >
        </div>
    </div>

    <div id="container" class="topic-five">
        <div class="topic-five__small1r">post five-small1r</div>
        <div class="topic-five__small1l">post five-small1l</div>
        <div class="topic-five__small2r">post five-small2r</div>
        <div class="topic-five__small2l">post five-small2l</div>
        <div class="topic-five__small3r">post five-small3r</div>
        <div class="topic-five__small3l">post five-small3l</div>
        <div class="topic-five__small4r">post five-small4r</div>
        <div class="topic-five__small4l">post five-small4l</div>
    </div>

</section>

<div class="space"></div>

<?php get_footer(); ?>
