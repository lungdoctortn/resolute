<?php
            $args = get_query_var( 'multiVar' );
            
            $featuredArguments = array(
                'post_type' => 'post',
                'posts_per_page' => $args['posts'],
                'orderedby' => "publish_date",
                'order' => "DESC",
                'offset' => $args['offset'],
                'category_name' => $args['category']
            );

            $featured = new WP_Query( $featuredArguments );
            if( $featured->have_posts() ):
                while( $featured->have_posts() ): $featured->the_post();
            ?>

                <div class="img-wrapper">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( '$args["size"]', array( 'class' => 'img' ) ); ?></a>
                </div>
                <div class="topic-one__prose">
                    <div class="topic-one__prose--category">
                        <a href="<?php the_permalink(); ?>"><?php the_category( ', ' ); ?></a>
                        
                    </div>
                    <div class="topic-one__prose--title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="topic-one__prose--excerpt">
                        <p><?php echo wp_trim_words( get_the_excerpt(  ), $args['length'] ); ?></p>
                    </div>
                </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
        ?>