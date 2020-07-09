<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<!--  menu -->
  <div class="overlay" id="overlay">
      <nav class="overlay-menu">
        <ul>
          <li ><a href="index.html">Home</a></li>
          <li><a href="About_us.html">About us</a></li>
          <li><a href="career.html">Career</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
  </div>
<!--  menu end -->

<!-- top sec -->
<section class="blog_top_sec">
        
        <div class="container">
              <div class="about_top_title main_title">
                  <h1 class="">OUR  <span>BLOG</span></h1>
                  <p>Welcome to Alphawizz!</p>
              </div>
        </div>
</section>
<!-- top sec end -->

<!--   blog section end -->

<section class="blog_area section-margin-large">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">
                      <?php foreach ($data as $row)
                        { ?>
                      <article class="blog_item">
                        <div class="blog_item_img">
                          <img class="card-img rounded-0" src="<?php echo base_url('assets/img/blog1.jpg'); ?>"  alt="">
                          <div class="blog_item_date">
                            <h3><?php echo $row->date; ?></h3>
                            <p><?php echo $row->date; ?></p>
                          </div>
                        </div>
                        
                        <div class="blog_details">
                            <a class="d-inline-block" href="<?php echo base_url('blog_detail') ?>">
                                <h2> <?php echo $row->title; ?> </h2>
                            </a>
                            <p class="des"><?php echo $row->description; ?></p>                          
                        </div>
                      </article>
                      <?php
                      } ?>
                      <nav class="blog-pagination justify-content-center d-flex">
                          <ul class="pagination">
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Previous">
                                      <span aria-hidden="true">
                                          <i class="fa fa-angle-left" aria-hidden="true"></i>
                                      </span>
                                  </a>
                              </li>
                              <li class="page-item active">
                                  <a href="#" class="page-link">1</a>
                              </li>
                              <li class="page-item ">
                                  <a href="#" class="page-link">2</a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Next">
                                      <span aria-hidden="true">
                                          <i class="fa fa-angle-right" aria-hidden="true"></i>
                                      </span>
                                  </a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Recent Post</h3>
                            <?php foreach ($data as $row)
                                 { ?>  
                          <div class="media post_item">
                              <div class="blog_right_img">
                                <img src="<?php echo base_url('assets/img/blog1.jpg'); ?>" alt="post">
                              </div>
                              
                              <div class="media-body">
                                  <a href="<?php echo base_url('blog_detail') ?>">
                                      <h3> <?php echo $row->title; ?></h3>
                                  </a>
                              <!--     <p><?php $date = $row->date;

                              echo date_format($date, 'm-d'); ?></p> -->
                                 <p><?php echo $row->date; ?></p>

                              </div>
                          </div>
                       
                         <?php
                      } ?>
                      </aside>
                      <aside class="single_sidebar_widget tag_cloud_widget">
                          <h4 class="widget_title">Tag Clouds</h4>
                          <ul class="list">
                              <li>
                                  <a href="#">project</a>
                              </li>
                              <li>
                                  <a href="#">technology</a>
                              </li>
                              <li>
                                  <a href="#">travel</a>
                              </li>
                              <li>
                                  <a href="#">restaurant</a>
                              </li>
                              <li>
                                  <a href="#">design</a>
                              </li>
                          </ul>
                      </aside>
                      <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <form action="#">
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email" required="">
                          </div>
                          <button class="button rounded-0" type="submit">Subscribe</button>
                        </form>
                      </aside>
                  </div>
              </div>
          </div>
      </div>
</section>
<!--   blog section end -->

</body>
</html>
