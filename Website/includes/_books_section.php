<div class="our_loyers">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-60">
                    <h3>My Books</h3>
                    <p>Many variations of passages of Lorem Ipsum available, but the majority have <br> suffered
                        alteration in some.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $b_query = "SELECT * FROM books";
                $b_statement = $con->prepare($b_query);
                $b_statement->execute();

                $b_count = $b_statement->rowCount();
                $b_row = $b_statement->fetchAll(PDO::FETCH_ASSOC);

                if($b_count > 0 && !empty($b_row)){
                    foreach($b_row as $b_result){?>
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_loyers text-center">
                    <div class="thumb">
                        <img src="<?=$book_images_url.fetchFirstBookImage($con, $b_result['id'])?>"
                            style="object-fit: contain" alt="">
                    </div>
                    <h3><?= $b_result['title']?></h3>
                    <span>Changing mindset</span>
                    <div class="social_links">
                        <ul>
                            <li><a
                                    href="<?= $b_result['amazon_link']?>">
                                    <i class="fa fa-amazon"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</div>