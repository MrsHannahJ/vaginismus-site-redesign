<?php
  $pagetitle = 'General FAQ';
  $pagedescription = 'Answers to your questions about vaginismus.';
  $pagecanonical = 'https://www.vaginismus.com/further-support/general-questions/';
  $pageimagepath ="https://www.vaginismus.com/img/twitter-card.png";
  include('../../config.php');
  include(ROOT_PATH.'/includes/header.php');
?>


  <!--   MAIN SECTION   -->
  <?php
      $opened = 'general'; include(ROOT_PATH.'/includes/faq-header-temp.php');
    ?>
    <!--   FAQ BODY   -->
    <div class="wrapper faq-body">

      <?php
        $active = 'how';
        include(ROOT_PATH.'/includes/sidebar-general-faq.php');
      ?>
        <section class="" id="question-answered">
          <h1>How do I know if I have vaginismus?</h1>
          <h3>Women often suspect they have vaginismus simply from their symptoms.</h3>
          <p>Strong indicators of vaginismus include any of the following <a href="/what-is-vaginismus/vaginismus-symptoms/index.php">symptoms</a>:</p>
          <ul>
            <li>Difficult or impossible penetration, entry pain, uncomfortable insertion of penis</li>
            <li>Unconsummated marriage</li>
            <li>Burning or stinging with tightness during sex</li>
            <li>Ongoing sexual discomfort or pain following childbirth, yeast/urinary infections, STDs, IC, hysterectomy, cancer and surgeries, rape, menopause, or other <a href="/what-is-vaginismus/vaginismus-causes/index.php#non-physical-causes">problems</a></li>
            <li>Sexual pain of unknown origin or with no apparent cause</li>
            <li>Difficulty inserting tampons or undergoing a pelvic/gynecological exam</li>
            <li>Spasms in other body muscle groups (legs, lower back, etc.) or halted breathing during attempts at intercourse</li>
            <li>Avoidance of sex due to pain and/or failure</li>
          </ul>
          <h3>Medical Diagnosis</h3>
          <p>No definitive medical test exists for the diagnosis of vaginismus so it often takes a number of visits to several physicians or specialists before a medical diagnosis is obtained. <a href="/what-is-vaginismus/vaginismus-diagnosis/index.php">Medical diagnosis</a> is typically determined through patient history and description of problem/pain, <a href="/what-is-vaginismus/vaginismus-diagnosis/index.php#pelvicexam">gynecological examination</a> and the process of ruling out the possibility of other conditions.</p>
          <p>In some cases and locations, a solid medical diagnosis is not always available or possible. Sexual pain disorders like vaginismus are commonly misdiagnosed or left unaddressed, especially in nations with fewer health care options. Often women need to strongly advocate for themselves and be very courageous in persevering until their concerns are given due attention and a reliable medical diagnosis is reached. For tips on how to communicate with your health care professional when seeking a diagnosis for sexual pain, see our <a href="/what-is-vaginismus/vaginismus-diagnosis/index.php#samplescript">sample script</a>.</p>
          <h3>Learning About Vaginismus</h3>
          <p>Our mission is to help as many women as possible with this condition. This website details important information about vaginismus and we invite all those suspecting a possible diagnosis to read through the sections on <a href="/what-is-vaginismus/vaginismus-symptoms/index.php">symptoms</a>, <a href="/what-is-vaginismus//vaginismus-symptoms/vaginismus-stories/index.php">stories</a>, <a href="/what-is-vaginismus/vaginismus-causes/index.php">causes</a>, <a href="/what-is-vaginismus/vaginismus-diagnosis/index.php">diagnosis</a>, <a href="/treatment/index.php">treatment</a> and <a href="/further-support/general-questions/index.php">FAQs</a>, to learn as much as they can about the condition.</p>

          <a href="#" class="hidden-tablet hidden-desktop">Back to Top<i class="icon-angle-double-right"></i></a>
          <hr />
          <h3>See Also</h3>
          <ul>
            <li><a href="/what-is-vaginismus/index.php">What is vaginismus?</a></li>
            <li><a href="/further-support/general-questions/primary-and-secondary-vaginismus-differences/index.php">What is the difference between primary vaginismus and secondary vaginismus?</a></li>
            <li><a href="/further-support/treatment-questions/treatment-for-primary-and-secondary-vaginismus/index.php">Is there a difference between the treatment for primary and secondary vaginismus?</a></li>
            <li><a href="/further-support/general-questions/dyspareunia-diagnosis-treatment/index.php">What is dyspareunia? What is the connection between dyspareunia and vaginismus?</a></li>
            <li><a href="/further-support/treatment-questions/vaginismus-diagnosis-and-treatment-difficulties/index.php">Why is it so difficult to get diagnostic and treatment help for vaginismus?</a></li>
          </ul>
        </section>
    </div>
    <!--      PRE-FOOTER-NAV SECTION      -->

    <?php
  $pagebacklink = '/further-support/index.php';
  $pageback = 'Further Support';
  $pageforwardlink = '/further-support/related-conditions/index.php';
  $pageforward = 'Related Conditions';
  include(ROOT_PATH.'/includes/pre-footer.php');
?>
      </main>
      <?php
  include(ROOT_PATH.'/includes/footer.php');
?>
