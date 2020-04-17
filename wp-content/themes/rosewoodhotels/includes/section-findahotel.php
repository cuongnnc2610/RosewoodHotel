<?php 
    /*Template Name: Find A Hotel */
     get_header('secondary');
?>

<div class="rw-main-container container">
    <nav class="bolder">
        <div class="wrapper">
            <?php $navigation = get_field('navigation');?>
            <h1 class="nav-item"><?php echo $navigation['title_1'];?></h1>
            <a class="nav-item" title="<?php echo $navigation['title_2'];?>" href="<?php echo $navigation['link_2'];?>"><?php echo $navigation['title_2'];?></a>
        </div>
    </nav>
    <div class="section" id="main-content">

        <?php if( have_rows('region') ): ?>
            <div class="selection-list" id="content">
            <?php while( have_rows('region') ): the_row();                 
                $name_region = get_sub_field('name');
                $sub_region = get_sub_field('sub_region');
            ?>
                <div class="group">
                    <div class="s f-title"><?php echo $name_region;?><span></span></div>
                    <?php while( have_rows('sub_region') ): the_row();                 
                        $name_sub_region = get_sub_field('name');
                        $href = get_sub_field('id');
                    ?>
                    <a class="" href="#<?php echo $href;?>"><?php echo $name_sub_region;?></a>
                    <?php endwhile;?>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <div class="details-wrapper">
            <?php 
                if( have_rows('region') ):
                    while( have_rows('region') ): the_row(); ?>
                        <div class="detail-block">
            <?php       while( have_rows('sub_region') ): the_row();                 
                            $name_sub_region = get_sub_field('name');
                            $href = get_sub_field('id');
            ?>
                        
                            <section id="<?php echo $href;?>">
                                <div class="bold l title-h5"><?php echo $name_sub_region;?></div>
                                <div class="table">
                                    <div class="row">
                                        <?php $counter = 0;?>
                                        <?php while( have_rows('hotel') ): the_row();                 
                                            $name_hotel = get_sub_field('name');
                                            $location = get_sub_field('location');
                                            $link = get_sub_field('link');
                                            $counter++;
                                        ?>
                                            <div class="cell" data-exist="true" data-destination="in_the_city,&#xD;&#xA;" data-experience="spa,&#xD;&#xA;health,&#xD;&#xA;wine_and_cuisine,&#xD;&#xA;business,&#xD;&#xA;">
                                                <a href="<?php echo $link;?>"><?php echo $name_hotel;?></a>
                                                <p class="subtitle"><?php echo $location;?></p>
                                            </div>
                                            <?php if ($counter %2 == 0): ?>
                                            <div class="clearfix"></div>
                                            <?php endif;?>
                                        <?php endwhile;?>
                                    </div>
                                </div>
                            </section>                        
                        <?php endwhile; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer();?>
