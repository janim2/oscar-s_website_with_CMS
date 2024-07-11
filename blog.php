<?php
    include_once 'partials/blog_header.php'; 
    require_once 'database/config.php';
    require_once 'helpers/functions.php'; 
    require_once 'helpers/constants.php'; 
?>

<!-- bradcam_area_start  -->
<div class="bradcam_area">
    <div class="bradcam_inner bradcam_bg_2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Blog </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->

<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php
                        $bl_query = "SELECT * FROM blogs";
                        $bl_statement = $con->prepare($bl_query);
                        $bl_statement->execute();

                        $bl_count = $bl_statement->rowCount();
                        $bl_row = $bl_statement->fetchAll(PDO::FETCH_ASSOC);

                        if($bl_count > 0 && !empty($bl_row)){
                            foreach($bl_row as $bl_result){?>
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="<?=$blog_images_url.fetchFirstBlogImage($con, $bl_result['id'])?>" style="object-fit: cover;" alt="">
                                        <a href="#" class="blog_item_date">
                                            <h3><?= dateFormat($bl_result['date_added']); ?></h3>
                                            <!-- <p>Jan</p> -->
                                        </a>
                                    </div>

                                    <div class="blog_details">
                                        <a class="d-inline-block" href="blog_details.php?ref=<?= $bl_result['id'];?>">
                                            <h2><?= $bl_result['title'];?></h2>
                                        </a>
                                        <p><?= strlen($bl_result['content']) <= 210 ? $bl_result['content']  : substr($bl_result['content'] , 0, 210) . "...";?></p>
                                        <ul class="blog-info-link">
                                            <li><a href="#"><i class="fa fa-user"></i> Inspiration</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i> <?= countFromAnyTableUsingColumn($con, "comments", "blog_id", $bl_result['id']);?> Comments</a></li>
                                        </ul>
                                    </div>
                                </article>
                    <?php
                            }
                        }

                    ?>

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <!-- <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li> -->
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- right side bar starts here -->
            <?php include_once 'includes/_right_bar.php'; ?>
            <!-- right side bar ends here -->

        </div>
    </div>
</section>
<!--================Blog Area =================-->

<?php
    include_once 'partials/footer.php'; 
?>