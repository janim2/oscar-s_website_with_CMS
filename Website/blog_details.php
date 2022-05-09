<?php
    include_once 'partials/header.php'; 
    require_once 'database/config.php';
    require_once 'helpers/functions.php'; 
    require_once 'helpers/constants.php'; 

    $ref = $_GET['ref'];

    $query = "SELECT * FROM blogs WHERE id = :ref";
    $statement = $con->prepare($query);

    $statement->execute(
       array(
          ":ref" => $ref,
       )
    );
    $count = $statement->rowCount();
    $result = $statement->fetch();
?>

<!-- bradcam_area_start  -->
<div class="bradcam_area">
   <div class="bradcam_inner bradcam_bg_2 d-flex align-items-center">
       <div class="container">
           <div class="row">
               <div class="col-xl-12">
                   <div class="bradcam_text text-center">
                       <h3>Blog Detials </h3>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- bradcam_area_end  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?=$blog_images_url.fetchFirstBlogImage($con, $ref)?>" style="object-fit: contain;" width="900" height="180" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?= $result['title']; ?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> Inspiration</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> <?= countFromAnyTableUsingColumn($con, "comments", "blog_id", $result['id']); ?> Comments</a></li>
                     </ul>
                     <p class="excert">
                        <?= $result['content']; ?>
                     </p>
                  </div>
               </div>
               <!-- <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="#">
                                 <h4>Space The Final Frontier</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4>Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               <!-- <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="img/blog/author.png" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4>Harvard milan</h4>
                        </a>
                        <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                           our dominion twon Second divided from</p>
                     </div>
                  </div>
               </div> -->
               <div class="comments-area">
                  <h4><?= countFromAnyTableUsingColumn($con, "comments", "blog_id", $result['id']);?> Comments</h4>

                  <?php
                     $c_query = "SELECT * FROM comments WHERE blog_id = :id LIMIT 3";
                     $c_statement = $con->prepare($c_query);

                     $c_statement->execute(
                        array(
                           ":id" => $result['id'],
                        )
                     );
                     $c_rows = $c_statement->fetchAll(PDO::FETCH_ASSOC);
                     $c_count = $c_statement->rowCount();

                     if($c_count > 0 && !empty($c_rows)){
                        foreach($c_rows as $c_result){?>
                           <div class="comment-list">
                              <div class="single-comment justify-content-between d-flex">
                                 <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                       <img src="img/comment/comment_1.png" alt="">
                                    </div>
                                    <div class="desc">
                                       <p class="comment">
                                          <?= $c_result['comment']; ?>
                                       </p>
                                       <div class="d-flex justify-content-between">
                                          <div class="d-flex align-items-center">
                                             <h5>
                                                <a><?= $c_result['name'];?></a>
                                             </h5>
                                             <p class="date"><?= dateFormat($c_result['date_added']);?></p>
                                          </div>
                                          <!-- <div class="reply-btn">
                                             <a href="#" class="btn-reply text-uppercase">reply</a>
                                          </div> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                     <?php
                        }
                     }else{?>
                        <h5>No comments yet</h5>
                    <?php
                     }
                  ?>
               </div>

               <?php
                  if($result['show_comments'] == 1){?>
                     <div class="comment-form">
                        <h4>Leave a Comment</h4>
                        <form class="form-contact comment_form" id="commentForm">
                           <input type="hidden" value="<?= $ref ?>" name="blog_id" id="blog_id"/>
                           <div class="row">
                              <div class="col-12">
                                 <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                       placeholder="Write Comment" required></textarea>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email" required>
                                 </div>
                              </div>
                              <!-- <div class="col-12">
                                 <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                 </div>
                              </div> -->
                           </div>
                           <div class="form-group">
                              <button type="submit" class="button button-contactForm btn_1 boxed-btn loading">Send Message</button>
                           </div>
                        </form>
                     </div>
                  <?php
                  }
               ?>
              


            </div>

            <!-- right side bar starts here -->
            <?php include_once 'includes/_right_bar.php'; ?>
            <!-- right side bar ends here -->


         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
<?php
    include_once 'partials/footer.php'; 
?>
<script>
   $(document).on('submit', '#commentForm', function (event) {
      event.preventDefault();
      submitFormQuery(this, "database/Comments/add_comment.php", ".loading", "Comment Added Successfully", false);
    });
</script>