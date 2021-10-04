<!DOCTYPE html>
<html lang="en-US">
<?php
    include 'head.php';

    // url로 직접 초대
    $pin = isset($pin_id)?$pin_id:'';
    $lat = isset($lat)?$lat:'';
    $lng = isset($lng)?$lng:'';

    // 등록 후
    $key = isset($key)?$key:'';

?>
  <body>
    <div class="m-scene" id="main"> <!-- Main Container -->

      <!-- Sidebars -->
      <!-- Right Sidebar -->
      <ul id="slide-out" class="side-nav">
        <li class="sidenav-header">
          <!-- Srearch bar -->
          <nav class="transparent no-shadow">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input id="search" type="search" required>
                  <label for="search"><i class="ion-android-search"></i></label>
                  <i class="ion-android-close"></i>
                </div>
              </form>
            </div>
          </nav>
        </li>
        <!-- Tabs -->
        <li>
          <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#sidebar1">Social</a></li>
            <li class="tab col s3"><a href="#sidebar2">Chat</a></li>
          </ul>
        </li>
        <li id="sidebar1" class="p-20">
          <!-- Twitter -->
          <div class="twitter">
            <h6 class="follow-us"><i class="ion-social-twitter"></i> Follow us on Twitter</h6>
            <div class="tweet">
              <h3>@Codnauts</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <a href="#">#tempor</a>.</p>
            </div>
            <div class="tweet">
              <h3>@Codnauts</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in <a href="#">#voluptate</a> culpa qui officia deserunt mollit anim.</p>
            </div>
            <div class="tweet">
              <h3>@Codnauts</h3>
              <p>At vero eos et accusamus et iusto odio <a href="#">#dignissimos</a> <a href="#">#ducimus</a> qui blanditiis praesentium.</p>
            </div>
          </div>
          <!-- Facebook -->
          <div class="facebook">
            <h6 class="follow-us">Notifications</h6>
            <div class="face-notification">
              <img src="<?=url()?>/assets/mobile/img/user2.jpg" alt="" class="cricle">
              <div>
                <p>Mike Green</p>
                <span>Sent you a message</span>
                <span class="small">Today at 16:48</span>
              </div>
            </div>
            <div class="face-notification">
              <img src="<?=url()?>/assets/mobile/img/user.jpg" alt="" class="cricle">
              <div>
                <p>Lara Connors</p>
                <span>Post a photo with you</span>
                <span class="small">Today at 14:26</span>
              </div>
            </div>
            <div class="face-notification">
              <img src="<?=url()?>/assets/mobile/img/user3.jpg" alt="" class="cricle">
              <div>
                <p>Mike Green</p>
                <span>Post something...</span>
                <span class="small">Yesterday at 03:19</span>
              </div>
            </div>
          </div>

        </li>
        <li id="sidebar2" class="p-20">
          <!-- Chat -->
          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="<?=url()?>/assets/mobile/img/user.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>Mike Green</p>
              <span>Sent you a message</span>
              <span class="small">online</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="<?=url()?>/assets/mobile/img/user2.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>Lora Bell</p>
              <span>6 New messages</span>
              <span class="small">online</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="<?=url()?>/assets/mobile/img/user3.jpg" alt="" class="cricle">
              <span class="dot orange"></span>
            </div>
            <div class="chat-message">
              <p>Tony Lee</p>
              <span>Away from keyboard.</span>
              <span class="small">Away</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="<?=url()?>/assets/mobile/img/user4.jpg" alt="" class="cricle">
              <span class="dot grey"></span>
            </div>
            <div class="chat-message">
              <p>Jim Connor</p>
              <span>Is offline.</span>
              <span class="small">offline</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="<?=url()?>/assets/mobile/img/user5.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>Sara Lower</p>
              <span>Sent you a message</span>
              <span class="small">online</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="<?=url()?>/assets/mobile/img/user.jpg" alt="" class="cricle">
              <span class="dot grey"></span>
            </div>
            <div class="chat-message">
              <p>Mick Pole</p>
              <span>Is offline.</span>
              <span class="small">offline</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="<?=url()?>/assets/mobile/img/user3.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>James Tree</p>
              <span>Awaiting your reply.</span>
              <span class="small">online</span>
            </div>
          </div>
        </li>
      </ul>
      <!-- Left Sidebar -->
      <ul id="slide-out-left" class="side-nav collapsible">
        <li>
          <div class="sidenav-header primary-color">
            <div class="nav-social">
              <i class="ion-social-facebook"></i>
              <i class="ion-social-twitter"></i>
              <i class="ion-social-tumblr"></i>
            </div>
            <div class="nav-avatar">
              <img class="circle avatar" src="<?=url()?>/assets/mobile/img/user.jpg" alt="">
              <div class="avatar-body">
                <h3>Halo</h3>
                <p>Material Mobile</p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="ion-android-home"></i> Home <span class="badge blue lighten-2">5</span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="index.html">Classic</a>
                <a href="index-sliced.html">Sliced</a>
                <a href="index-slider.html">Slider</a>
                <a href="index-drawer.html">Drawer</a>
                <a href="index-walkthrough.html">Walkthrough</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="ion-android-exit"></i> Layout <span class="badge blue lighten-2">5</span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="material.html">Material</a>
                <a href="left-sidebar.html">Left</a>
                <a href="right-sidebar.html">Right</a>
                <a href="dual-sidebar.html">Dual</a>
                <a href="blank.html">Blank</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="ion-android-document"></i> Pages <span class="badge blue lighten-2">12</span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="article.html">Article</a>
                <a href="event.html">Event</a>
                <a href="project.html">Project</a>
                <a href="player.html">Music Player</a>
                <a href="todo.html">ToDo</a>
                <a href="category.html">Category</a>
                <a href="product.html">Product</a>
                <a href="checkout.html">Checkout</a>
                <a href="search.html">Search</a>
                <a href="faq.html">Faq</a>
                <a href="coming-soon.html">Coming Soon</a>
                <a href="404.html">404</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="ion-android-apps"></i> App <span class="badge blue lighten-2">11</span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="calendar.html">Calendar</a>
                <a href="profile.html">Profile</a>
                <a href="chat.html">Chat</a>
                <a href="login.html">Login</a>
                <a href="signup.html">Sign Up</a>
                <a href="lockscreen.html">Lockscreen</a>
                <a href="forgot.html">Password</a>
                <a href="notification.html">Notification</a>
                <a href="chart.html">Chart</a>
                <a href="timeline.html">Timeline</a>
                <a href="activity.html">Activity</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="ion-android-list"></i> Blog <span class="badge blue lighten-2">2</span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="blog.html">Classic</a>
                <a href="blog-card.html">Card</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="ion-android-image"></i> Gallery <span class="badge blue lighten-2">3</span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="gallery-filter.html">Filter</a>
                <a href="gallery-masonry.html">Masonry</a>
                <a href="gallery-card.html">Card</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="ion-android-camera"></i> Portfolio <span class="badge blue lighten-2">3</span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="portfolio-filter.html">Filter</a>
                <a href="portfolio-masonry.html">Masonry</a>
                <a href="portfolio-card.html">Card</a>
              </li>
            </ul>
          </div>
        </li>
        <li><a href="shop.html" class="no-child"><i class="ion-android-playstore"></i> Shop</a></li>
        <li><a href="video.html" class="no-child"><i class="ion-ios-videocam"></i> Video</a></li>
        <li><a href="news.html" class="no-child"><i class="ion-social-rss"></i> News</a></li>
        <li><a href="contact.html" class="no-child"><i class="ion-android-map"></i> Contact</a></li>
      </ul>
      <!-- End of Sidebars -->

      <!-- Page Content -->
      <div id="content">

        <!-- Toolbar -->
        <div id="toolbar" class="halo-nav box-shad-none">
          <div class="open-left" id="open-left" data-activates="slide-out-left">
            <i class="ion-android-menu"></i>
          </div>
          <span class="title none">Halo</span>
          <div class="open-right" id="open-right" data-activates="slide-out">
            <i class="ion-android-person"></i>
          </div>
        </div>

        <div class="h-banner animated fadeindown">
          <div class="parallax">
            <!-- Slider -->
            <div class="swiper-container slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?=url()?>/assets/mobile/img/5.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?=url()?>/assets/mobile/img/8.jpg" alt="">
                </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>
            <!-- End of Slider -->
            <div class="banner-title">Halo</div>
          </div>
         </div>

        <!-- Main Content -->
        <div class="animated fadeinup">

          <!-- Heading -->
          <div class="heading-container">
            <h2 class="heading">Welcome to Halo.<br>
            Mobile & App Template.</h2>
            <p class="flow-text">Create a mobile expirience that you are gonna be proud of. With Halo you can create Mobile Websites ans Apps.</p>
          </div>

          <!-- Features -->
          <div class="features p-20 grey-blue">
            <div class="center promo">
              <i class="ion-flash primary-text"></i>
              <h6 class="promo-caption">Speeds up development</h6>
              <p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
            </div>
            <div class="center promo">
              <i class="ion-android-contacts primary-text"></i>
              <h6 class="promo-caption">User Experience Focused</h6>
              <p class="light center">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
            </div>
            <div class="center promo">
              <i class="ion-android-settings primary-text"></i>
              <h6 class="promo-caption">Easy to work with</h6>
              <p class="light center">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
            </div>
          </div>

          <!-- More Features -->
          <div class="p-20">
            <!-- Heading -->
            <div class="heading-container">
              <h2 class="heading">Tons of more features</h2>
              <p class="flow-text">A wonderful serenity has taken possession of my entire soul like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <!-- Features List -->
            <div class="feature-list">
              <i class="ion-android-phone-portrait primary-color"></i>
              <div class="feature-list-title">
                <h6>Fluid Layout</h6>
                <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </div>
            </div>

            <div class="feature-list">
              <i class="ion-load-a primary-color"></i>
              <div class="feature-list-title">
                <h6>Ajax Loading</h6>
                <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </div>
            </div>

            <div class="feature-list">
              <i class="ion-shuffle primary-color"></i>
              <div class="feature-list-title">
                <h6>Animations</h6>
                <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </div>
            </div>

            <div class="feature-list">
              <i class="ion-images primary-color"></i>
              <div class="feature-list-title">
                <h6>Images Filter</h6>
                <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </div>
            </div>

            <div class="feature-list">
              <i class="ion-stats-bars primary-color"></i>
              <div class="feature-list-title">
                <h6>Chart Support</h6>
                <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </div>
            </div>

            <div class="feature-list">
              <i class="ion-android-add-circle primary-color"></i>
              <div class="feature-list-title">
                <h6>And Even More</h6>
                <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </div>
            </div>
          </div>

          <!-- Blog -->
          <div class="grey-blue overflow">
            <div class="heading-container">
              <h2 class="heading">Latest from Blog</h2>
              <p class="flow-text">A wonderful serenity has taken possession of my entire soul like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="blog-card animated fadein delay-1">
              <div class="blog-header">
                <img class="avatar circle" src="<?=url()?>/assets/mobile/img/user4.jpg" alt="">
                <div class="blog-author">
                  <span>Jassie North</span>
                  <span class="small">1hour ago - 62 Share</span>
                </div>
              </div>
              <div class="blog-image">
                <img src="<?=url()?>/assets/mobile/img/1.jpg" alt="">
              </div>
              <div class="blog-preview p-20">
                <h4 class="uppercase">It really makes no sense</h4>
                <p>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</p>
                <a href="article.html" class="waves-effect waves-light btn primary-color">Read</a>
              </div>
            </div>
          </div>

          <!-- Footer -->
          <footer class="page-footer primary-color">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <p class="center-align grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                <div class="center-align">
                  <i class="ion-social-facebook m-10 white-text"></i>
                  <i class="ion-social-twitter m-10 white-text"></i>
                  <i class="ion-social-pinterest m-10 white-text"></i>
                  <i class="ion-social-dribbble m-10 white-text"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-copyright blue darken-1">
            <div class="container">
            2016 Codnauts
            <a class="grey-text text-lighten-4 right" href="#!">Privacy Policy</a>
            </div>
          </div>
        </footer>
        </div> <!-- End of Main Contents -->


      </div> <!-- End of Page Content -->

    </div> <!-- End of Page Container -->


    
  </body>
</html>