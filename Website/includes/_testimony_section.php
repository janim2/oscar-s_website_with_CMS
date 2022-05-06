<div class="testmonial_area testmonial_bg_1 overlay2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">

                    <?php
                        $t_query = "SELECT * FROM testimony";
                        $t_statement = $con->prepare($t_query);
                        $t_statement->execute();

                        $t_count = $t_statement->rowCount();
                        $t_row = $t_statement->fetchAll(PDO::FETCH_ASSOC);

                        if($t_count > 0 && !empty($t_row)){
                            foreach($t_row as $t_result){?>
                                <div class="single_testmonial text-center">
                                    <i class="flaticon-straight-quotes"></i>
                                    <p><?= $t_result['testimony']; ?></p>
                                    <div class="author_info d-flex justify-content-center align-items-center">
                                        <div class="thumb">
                                            <img class="rounded-circle" src="img/speakers/<?= fetchFirstTestimonyImage($con, $t_result['id'])?>" alt="">
                                        </div>
                                        <span>- <?= $t_result['speaker']?> (<?= $t_result['position']?>)
                                        </span>
                                    </div>

                                </div>
                        <?php
                            }
                        }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>