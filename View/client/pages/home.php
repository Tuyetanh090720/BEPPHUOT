<!-- start of news feed area -->
<section class="container">
    <div class="bg-body-color ml-15 pr-15 mb-10 mt-10">
        <div class="row no-gutters d-flex align-items-center">
            <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                <div class="topic-box">Bài viết Nổi bật</div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-7">
                <div class="feeding-text-light2">
                    <ol id="sample" class="ticker">
                        
                    <?php 
                    $row = new UserModel();
                    $slideTopHome = $row->slideTopHome();
                    foreach ($slideTopHome as $slrel){
                    ?>
                        <li>
                            <a href="?controller=singlePost&PostId=<?php echo $slrel['PostId']?>"><?php echo $slrel['Title']?></a>
                        </li>
                    <?php }?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of news feed area  -->
<!-- start of slider area  -->
<section class="section-space-bottom">
    <div class="container ">
        <div class="row no-gutters">
            <div class="col-xl-8 col-lg-12">
                <div class="main-slider1 img-overlay-slider">
                    <div class="bend niceties preview-1">
                        <div id="ensign-nivoslider-3" class="slides" >
                            <?php 
                                    $row= new UserModel();
                                    $slideHome = $row->slideHome();
                                    foreach ($slideHome as $sliderel){
                                ?>
                            <img  src="Public/admin/assets/img/<?php echo $sliderel['Img'] ?>" alt="slider" title="#slider-direction-1" />
                            <?php }?>
                        </div>
                        <!-- direction 1 -->
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 scrollbar-right" id="scroll-style">
                <div class="item-box-light-md-less30 ie-full-width ">
                    <div class="row">
                    <?php 
                                    $row= new UserModel();
                                    $rightSlide = $row->rightSlide();
                                    foreach ($rightSlide as $rightslrel){
                                ?>
                        <div class="media mb-30 col-xl-12 col-lg-6 col-md-6 col-sm-12">
                            <a class="img-opacity-hover col-xl-7" href="?controller=singlePost&PostId=<?php echo $rightslrel['PostId']?>">
                                <img src="Public/admin/assets/img/<?php echo $rightslrel['Img'] ?>" alt="news" class="img-fluid">
                            </a>
                            <div class="media-body media-padding5">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span><?php echo $rightslrel['DatePost'] ?>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark size-md mb-none">
                                    <a href="?controller=singlePost&PostId=<?php echo $rightslrel['PostId']?>"><?php echo $rightslrel['Title'] ?></a>
                                </h3>
                            </div>
                        </div>
                        <?php }?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider Area End Here -->
<!-- Công thức Start Here -->
<section class="section-space-bottom">
    <div class="container">
        <div class="item-box-light-md-less10">
            <div class="ne-isotope-all">
                <div class="topic-border color-cinnabar mb-30">
                    <div class="topic-box-lg color-cinnabar">Công thức phổ biến</div>
                </div>
                <div class="row tab-space5 featuredContainer">
                <?php
                    $row= new UserModel();
                    $recipeHome = $row->recipeHome();
                    foreach ($recipeHome as $reciperel){
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                        <div class="img-overlay-70 img-scale-animate mb-10">
                          <a href="?controller=singlePost&PostId=<?php echo $reciperel['PostId']?>">
                            <img src="Public/admin/assets/img/<?php echo $reciperel['Img'] ?>" alt="news" class="img-fluid width-100">
                          </a>
                            <div class="mask-content-xs">
                                <div class="post-date-light d-none d-md-block">
                                    <ul>
                                        <li>
                                            <a href="?controller=singlePost&PostId=<?php echo $reciperel['PostId']?>"></a>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="title-semibold-light fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                            <?php echo $reciperel['DatePost'] ?>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="title-semibold-light title-medium-light size-lg">
                                    <a href="?controller=singlePost&PostId=<?php echo $reciperel['PostId']?>"><?php echo $reciperel['Title'] ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>   
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Công thức nổi tiếng End here-->
<!-- Quán ngon Start here-->
<section class="section-space-bottom-less30">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-12 mb-30 scrollbar" id="scroll-style">
                <div class="item-box-light-md-less30 ie-full-width">
                    <div class="topic-border color-cinnabar mb-30">
                        <div class="topic-box-lg color-cinnabar">Cẩm nang nhà bếp</div>
                    </div>
                    <div class="row">
                    <?php
                    $row= new UserModel();
                    $bookHome = $row->bookHome();
                    foreach ($bookHome as $bokrel){
                     ?>                        
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="media media-none--md mb-30">
                                <div class="position-relative width-40">
                                    <a href="?controller=singlePost&PostId=<?php echo $bokrel['PostId']?>" class="img-opacity-hover">
                                        <img src="Public/admin/assets/img/<?php echo $bokrel['Img'] ?>" alt="news" style="width:100%" >
                                    </a>
                                </div>
                                <div class="media-body p-mb-none-child media-margin30">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span><?php echo $bokrel['DatePost'] ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="title-semibold-dark size-lg mb-15">
                                        <a href="?controller=singlePost&PostId=<?php echo $bokrel['PostId']?>"><?php echo $bokrel['Title'] ?></a>
                                    </h3>
                                        <a href="?controller=singlePost&PostId=<?php echo $bokrel['PostId']?>">
                                           <p style="color:black;"><?php echo $bokrel['Summary'] ?>...</p>
                                        </a>
                                </div>
                            </div>
                        </div>
                       <?php } ?>
                    </div>
                </div>
            </div>
            <div class="ne-sidebar sidebar-break-lg col-xl-4 col-lg-12 scrollbar" id="scroll-style">
                <div class="sidebar-box item-box-light-md">
                <a href="/bepphuot" > <img src="Public/client/img/logo1.png"></a>
                </div>
                <div class="sidebar-box item-box-light-md-less30">
                    <div class="topic-border color-cinnabar mb-30">
                        <div class="topic-box-lg color-cinnabar" style:{color="black" }>Bài viết khác</div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show" id="recent">
                            <div class="row">
                                <?php 
                                    $row= new UserModel();
                                    $rightHome = $row->rightHome();
                                    foreach ($rightHome as $rightrel){
                                ?>
                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-6 mb-25">
                                    <div class="position-relative">
                                        <a href="?controller=singlePost&PostId=<?php echo $rightrel['PostId']?>" class="img-opacity-hover">
                                            <img src="Public/admin/assets/img/<?php echo $rightrel['Img'] ?>" alt="news"
                                                class="img-fluid width-100 mb-10">
                                        </a>
                                        <h3 class="title-medium-dark size-sm mb-none">
                                            <a href="?controller=singlePost&PostId=<?php echo $rightrel['PostId']?>"><?php echo $rightrel['Title'] ?></a>
                                        </h3>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- Quán ngon End Here -->
<!-- Ẩm thực Start Here -->
<section class="section-space-bottom">
    <div class="container">
        <div class="item-box-light-md-less10">
            <div class="ne-isotope-all">
                <div class="topic-border color-cinnabar mb-30">
                    <div class="topic-box-lg color-cinnabar">Ẩm thực</div>
                </div>
                <div class="row tab-space5 featuredContainer">
                <?php
                    $row= new UserModel();
                    $foodHome = $row->foodHome();
                    foreach ($foodHome as $foodrel){
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="img-overlay-70 img-scale-animate mb-10">
                          <a href="?controller=singlePost&PostId=<?php echo $foodrel['PostId']?>">
                            <img src="Public/admin/assets/img/<?php echo $foodrel['Img'] ?>" alt="news" class="img-fluid width-100">
                          </a>
                            <div class="mask-content-xs">
                                <div class="post-date-light d-none d-md-block">
                                    <ul>
                                        <li>
                                            <a href="?controller=singlePost&PostId=<?php echo $foodrel['PostId']?>"></a>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="title-semibold-light fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                            <?php echo $foodrel['DatePost'] ?>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="title-semibold-light title-medium-light size-lg">
                                    <a href="?controller=singlePost&PostId=<?php echo $foodrel['PostId']?>"><?php echo $foodrel['Title'] ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ẩm thực nổi tiếng End here-->
<!-- Latest Articles Area End Here -->