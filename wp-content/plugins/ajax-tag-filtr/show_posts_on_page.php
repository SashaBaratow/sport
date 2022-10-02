<div class="col-md-12">
    <div class="item">
        <div class="post-img">
            <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
            <div class="date">
                <a href="<?php the_permalink(); ?>"> <i class="flaticon-star"></i> </a>
            </div>
        </div>
        <div class="post-cont"><a href="<?php the_permalink(); ?>"><span class="tag">Тур</span></a>
            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p> <?php the_excerpt(); ?></p>
            <div class="butn-dark"><a href="<?php the_permalink(); ?>"><span>Подробнее</span></a></div>
        </div>
    </div>
</div>

