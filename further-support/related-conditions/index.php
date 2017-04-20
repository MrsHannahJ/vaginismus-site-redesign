<?php
  $pagetitle = 'Related Sexual Pain Conditions';
  $pagedescription = 'Sexual pain conditions related to vaginismus.';
  $pagecanonical = 'https://www.vaginismus.com/further-support/related-conditions/';
  $pageimagepath ="https://www.vaginismus.com/img/twitter-card.png";
  include('../../config.php');
  include(ROOT_PATH.'/includes/header.php');
?>

  <!--   MAIN SECTION   -->
  <main class="related-conditions">
    <section id="hero-english">
      <div class="wrapper">
        <div class="large-8 medium-8">
          <h1>Related Sexual Pain Conditions</h1>
          <p>Select any of the following related sexual pain conditions from the list below for more information and resources for that coniditon.</p>
        </div>
      </div>
    </section>
    <div class="wrapper">
      <!--   MAIN SECTION   -->

      <!--   SIDEBAR   -->
      <?php
  $active = 'cancer';
  include(ROOT_PATH.'/includes/sidebar-related.php');
?>

        <section class="large-9">
          <h1>Cancer</h1>

          <p>Cancer, and associated symptoms and treatments, may contribute to temporary pain during sex. Like other pain causing conditions, cancer may cause or contribute to problems with vaginismus.</p>

          <h3>Links of Interest</h3>
          <ol>
            <li><a href="http://www.wcn.org" target="_blank">Women&#8217;s Cancer Network</a></li>
            <li><a href="http://www.mayoclinic.com/health/cancer-treatment/SA00071" target="_blank">&#8220;Sexuality after cancer treatment&#58; What women can expect&#8221;</a> &#8211; Mayo Clinic</li>
            <li><a href="https://www.oncolink.org/support/sexuality-fertility/sexuality/women-s-guide-to-sexuality-during-after-cancer-treatment" target="_blank">Women&#39;s Guide to Sexuality During and After Cancer Treatment</a></li>
            <li><a href="https://www.mdanderson.org/patients-family/diagnosis-treatment/emotional-physical-effects/sexuality-cancer.html" target="_blank">Sexuality and Cancer </a></li>
            <li><a href="https://www.oncolink.org/support/sexuality-fertility/sexuality/vaginal-dilators-for-radiation-therapy " target="_blank">Vaginal Dilators for Radiation Therapy</a></li>
            <li><a href="http://www.cancer.org/treatment/treatmentsandsideeffects/physicalsideeffects/sexualsideeffectsinwomen/sexualityforthewoman/sexuality-for-women-with-cancer-keeping-sex-life-despite-cancer-treatment" target="_blank">Keeping your sex life going despite cancer treatment</a></li>
            <li><a href="http://www.huffingtonpost.ca/sunnybrook-health-sciences-centre/women-sex-after-cancer_b_12119668.html" target="_blank">Sex And Intimacy After Cancer&#58; A Guide For Women</a></li>
          </ol>
          <hr />

          <h3>See Also</h3>
          <ul>
            <li><a href="/further-support/general-questions/dyspareunia-diagnosis-treatment/index.html">What is dyspareunia? What is the connection between dyspareunia and vaginismus?</a></li>
            <li><a href="/further-support/general-questions/primary-and-secondary-vaginismus-differences/index.html">What is the difference between primary vaginismus and secondary vaginismus?</a></li>
            <li><a href="/further-support/treatment-questions/treatment-for-primary-and-secondary-vaginismus/index.html">Is there a difference between the treatment for primary and secondary vaginismus?</a></li>
            <li><a href="/further-support/treatment-questions/recommend-vaginismus-treatment-professionals/index.html">Do you recommend working with treatment professionals?</a></li>
          </ul>

        </section>

    </div>
    <!--      PRE-FOOTER-NAV SECTION      -->

    <?php
  $pagebacklink = '/further-support/general-questions/index.php';
  $pageback = 'Common Questions';
  $pageforwardlink = '/further-support/professional-assistance/index.php';
  $pageforward = 'Professional Assistance';
  include(ROOT_PATH.'/includes/pre-footer.php');
?>
  </main>

  <?php
include(ROOT_PATH.'/includes/footer.php');
?>
