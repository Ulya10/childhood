<?php
/*
Template Name: Наша история
*/
?>

<?php
get_header();
?>

<div class="aboutus" id="aboutus">
            <div class="container">
                <h1 class="title"><?php the_field('history_header');?></h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('history_title_left');?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('history_descr_left');?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        $image = get_field('history_img_right');

                        if (!empty($image)):
                        ?>
                        <img class="aboutus__img" src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
                        <?php endif;
                    ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('history_img_left');?>" alt="мир детства">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('history_title_right');?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('history_descr_right');?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('history_title_left2');?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('history_descr_left2');?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('history_img_right2');?>" alt="мир детства">
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();
?>