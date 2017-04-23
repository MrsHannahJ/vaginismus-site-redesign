<?php
  $pagetitle = 'Home';
  $pagedescription = 'Helping women with resources to overcome vaginismus, painful sex, penetration difficulties, and tightness with intimacy with our home treatment program.';
  $pagecanonical = 'https://www.vaginismus.com/';
  $pageimagepath ="https://www.vaginismus.com/img/twitter-card.png";
  include('config.php');
  include(ROOT_PATH.'/includes/header.php');
?>

  <!--      MAIN      -->

  <main id="home-english">

    <!--     HERO SECTION     -->

    <section id="hero">
      <div class="wrapper">
        <div class="hero-text-box large-6 medium-8">
          <h1>Helping Women Overcome Sexual Pain</h1>
          <ul>
            <li>Why can't I have sex?</li>
            <li>Why does my vagina hurt?</li>
            <li>I used to have sex, but now I can't</li>
            <li>Sex hurts more now that I'm older</li>
            <!--              <li>I just want to have a fulfilling sex life with my partner</li>-->
          </ul>
        </div>
      </div>
    </section>

    <!--     VAGINISMUS BANNER SECTION-->

    <div class="banner-solid">
      <div>
        <h2>What is Vaginismus?</h2>
        <a href="/what-is-vaginismus/understanding-vaginismus/index.php" class="white-btn">Learn More</a>
      </div>
    </div>

    <!--     WHAT IS LINKS SECTION-->
    <section id="what-is-links">

      <div class="wrapper">
        <div class="what-is-symptoms large-6 medium-6">
          <a href="/what-is-vaginismus/vaginismus-symptoms/index.php">
            <h3>Symptoms</h3>
          </a>
        </div>
        <div class="what-is-causes-diagnosis large-6 medium-6">
          <div class="what-is-causes large-12 medium-12">
            <a href="/what-is-vaginismus/vaginismus-causes/index.php">
              <h3>Causes</h3>
            </a>
          </div>
          <div class="what-is-diagnosis large-12 medium-12">
            <a href="/what-is-vaginismus/vaginismus-diagnosis/index.php">
              <h3>Diagnosis</h3>
            </a>
          </div>
        </div>

      </div>

    </section>

    <!--     TREATMENT BANNER SECTION-->

    <div class="banner-solid">
      <div>
        <h2>Full Recovery is Possible...</h2>
        <a href="/treatment/index.php" class="white-btn">Learn More</a>
      </div>
    </div>

    <!--     PRODUCTS SECTION-->
    <section id="products">
      <div class="wrapper">
        <div class="white-box-float">
          <div class="text-box">
            <h3>Treatment Products</h3>
            <p class="hidden-mobile">Our self-treatment products are everything you need to overcome vaginismus in the privacy of your own home &#8211; the most effective resources available.</p>
            <a href="/treatment/products/index.php" class="gray-btn hidden-mobile">View All Products</a>
          </div>
        </div>
        <img src="/img/home/products.jpg" alt="Self-Help Vaginismus Treatment Products">
        <a href="/treatment/products/index.php" class="gray-btn hidden-tablet hidden-desktop">View All Products</a>
      </div>
    </section>

    <!--     FORUM SECTION-->

    <section id="home-forum">
      <div class="wrapper text-box">
        <h3>Get Emotional Support in our Private Forum</h3>
        <p class="hidden-mobile">A network of support for women who are actively working to overcome vaginismus.</p>
      </div>
      <a href="/forum-introduction/index.php">
        <img src="/img/home/forum.jpg" alt="Online Forum" class="hidden-mobile">
        <a href="/forum-introduction/index.php" class="transparent-link hidden-mobile"></a>
        <a href="/forum-introduction/index.php">
          <img src="/img/home/forum-blank.jpg" alt="Online Forum" class="hidden-tablet hidden-desktop">
        </a>
        <a href="/forum-introduction/index.php" class="dark-btn hidden-tablet hidden-desktop">Learn More</a>
    </section>

    <!--     FURTHER SUPPORT BANNER SECTION-->

    <div class="banner-solid">
      <div>
        <h2>Have More Questions?</h2>
        <a href="/further-support/index.php" class="white-btn">Further Support</a>
      </div>
    </div>

    <!--    HIGHLIGHTED CONTENT SECTION-->

    <section id="highlighted-content-english">
      <div class="wrapper">
        <div class="highlighted-content-1 large-4 medium-4">
          <a href="/what-is-vaginismus/vaginismus-symptoms/index.php#unconsummated-marriages">
            <h3>Sexless Relationships</h3>
            <!--            <p>"We can't have sex and its affecting our marriage"</p>-->
          </a>
        </div>
        <div class="highlighted-content-2 large-4 medium-4">
          <a href="/further-support/pregnancy-questions/index.php">
            <h3>Pregnancy &amp; Conception</h3>
            <!--            <p>"My biological clock is ticking!"</p>-->
          </a>
        </div>
        <div class="highlighted-content-3 large-4 medium-4">
          <a href="/further-support/related-conditions/vaginal-atrophy-resources/index.php">
            <h3>Menopause &amp; Vaginal Atrophy</h3>
            <!--            <p>"I used to enjoy comfortable sex, but now it just hurts!"</p>-->
          </a>
        </div>
      </div>

    </section>



  </main>

  <?php
  include(ROOT_PATH.'/includes/footer.php');
?>
