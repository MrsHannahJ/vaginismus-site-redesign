<?php
  $pagetitle = 'Vaginal Dilator Set';
  $pagedescription = 'These dilators are smooth and comfortable, easy to control, light-weight, latex-free, washable and safe.';
  $pagecanonical = 'https://www.vaginismus.com/treatment/products/vaginal-dilator-set/';
  $pageimagepath ="https://www.vaginismus.com/img/products/products-dilator-set.jpg";
  include('../../../config.php');
  include(ROOT_PATH.'/includes/header.php');
?>


<!-------------------------------->
<!--Need to replace # with links-->
<!-------------------------------->

<!--   MAIN SECTION   -->
    <main class="product-page-english">
 
<!--   HERO SECTION   -->
      <section class="hero">
        <div class="wrapper">
          <h1>Vaginal Dilator Set</h1>
          <p>Simply a better product: These dilators are smooth and comfortable, easy to control, light-weight, latex-free, washable and safe.</p>
<!--          <a href="#">Watch the Animation</a>-->
          <a href="#buy-product">Buy Now<i class="icon-angle-double-right"></i></a>
        </div>
        <video id="my_video_1" class="video-js vjs-default-skin"
      controls preload="none" poster='/img/products/hero-dilators.jpg'
      data-setup='{ "aspectRatio":"16:9", "playbackRates": [1, 1.5, 2] }'>
          <source src="/media/animation.mp4" type='video/mp4' />
        </video>
      </section>
            
            
<!--   PRODUCT DESCRIPTION SECTION   -->
      <section class="product-description">
        
<!-- dilators         -->
        <div class="wrapper graduated">
          <div class="large-6 medium-6">
            <h3>Graduated Dilators</h3>
            <h4>Medically Safe &amp; Convenient</h4>
             <p>Each set includes six graduated dilators, universal easy-grip handle, lubricant, and soft cotton carrying pouch with care instructions. A silky-smooth finish ensures maximum comfort while the gently curved shape eases entry and transition up in size.</p>
            <p>Our new, smallest dilator is narrower than a tampon. This size is particularly suited for women who have difficulty with tampon insertion and also helps to assist with a smooth transition to larger sizes.</p>
            <a href="#sizing">See Set Sizes<i class="icon-angle-double-right"></i></a>
          </div>
          <div class="large-6 medium-6">
            <img src="/img/products/dilators.jpg" alt="Dilators">
          </div>
        </div>

<!--   PRODUCT DESCRIPTION SECTION-->
<!--dilators       -->
        <div class="wrapper handle">
          <div class="large-6 medium-6">
            <h3>Easy Grip Handle</h3>
            <h4>Universal Handle Fitting 6 Graduated Sizes-Clean and Comfortable</h4>
            <p>Convenient handle improves insertion control while keeping lubricant off one&#8217;s hands. The product is medically safe for individual use (see your doctor for more information) and easy to clean with soapy water. For storage portability and privacy, dilators fit one inside another forming a convenient, small package.</p>
          </div>
          <div class="large-6 medium-6">
          <img src="/img/products/handle.jpg" alt="Universal Dilator Handle">
          </div>
        </div>
        <div class="wrapper" id="sizing">
          <div class="large-12">
            <img src="/img/products/dilator-sizes-with-measurements.jpg" alt="6 dilator set. Dilator A: diameter up to 0.6 inches (15mm) and length of 3.48 inches (88mm). Dilator B: diameter up to .88 inches (22mm) and length of 3.97 inches (101mm). Dilator C: diameter up to 1.04 inches (26mm) and length of 4.46 inches (113mm). Dilator D: diameter up to 1.19 inches (30mm) and length of 4.95 inches (126mm). Dilator E: diameter up to 1.35 inches (34mm) and length of 5.45 inches (138mm). Dilator F: diameter up to 1.5 inches (38mm) and length of 5.96 inches (151mm). Universal handle fits all sizes.">
          </div>
        </div>
      </section>
<?php
  include(ROOT_PATH.'/includes/products-bonus-banner.php');
?>
      
<!--     REVIEWS SECTION----->
      <section id="reviews">
        <div class="wrapper">
          <h2>Product Reviews</h2>
          <div class="medium-6 large-6">
             <div class="testimonial outer-shadow-dark">
               <img src="/img/icons/quotations.png" alt="" aria-hidden="true" class="quotes">
               <div class="testimonial-text">
                 <p>The dilators were a god-send!  After a few months of going through each size of dilators we were finally ready to put all of the frustration behind us, and truly attempt to have sexual intercourse.  We <strong>successfully consummated out marriage</strong> after a year of failed attempts, and are now having the sex life we had once only dreamed of.  Thank you so much!</p><br>
                 <p><strong>Anonymous</strong><br>Treatment Kit Customer</p>
              </div>
            </div>
          </div>

          <div class="medium-6 large-6">
             <div class="testimonial outer-shadow-dark">
              <img src="/img/icons/quotations.png" alt="" aria-hidden="true" class="quotes">
                <div class="testimonial-text">
                  <p>The dilators arrived today, thank you very much. All my staff are very impressed with both the product and the price. I will start recommending them to our patients and in the new year will probably purchase some sets so that we can give them to patients who cannot afford them or who cannot access/use the internet to obtain a set directly from you...well done on a great product which is well presented.</p>
                  <p><strong>Gae Lindsay, Nurse Manager</strong><br>TPerth Radiation Oncology, Royal Perth Hospital, Western Australia</p>
                </div>
            </div>
          </div>
        </div>
      </section>
<!--     REVIEWS BANNER-->
      <div class="banner-solid-gray">
        <a href="/treatment/products/vaginal-dilator-set/dilator-reviews/index.php" class="gray-btn">Read More Customer Reviews</a>
      </div>

<!--   FEATURED PRODUCT SECTION   -->
<?php
  $productimgpath = '/img/products/dilators-display.jpg';
  $productimgalt = 'Vaginal Dilator Set: 6 dilators, universal handle and carrying pouch.';
  $productimgclass = 'max-400';
  $producth3 = 'Order Your Set Today!';
  $producth4 ="Start Treatment Tomorrow";
  $productp ="Simply a better product: These dilators are smooth and comfortable, easy to control, light-weight, latex-free, washable and safe.";
  $productprice ="$44.95";
  include(ROOT_PATH.'/includes/products-buy-section.php');
?>
<!--
      <section id="buy-product">
        <div class="wrapper purchase">
          <div class="large-7 medium-6">
            <img src="/img/products/dilators-display.jpg" alt="Vaginal Dilator Set: 6 dilators, universal handle and carrying pouch.">
          </div>
          <div class="large-5 medium-6">
            <h3>Order Your Set Today!</h3>
            <h4>Start Treatment Tomorrow</h4>
            <p>Simply a better product: These dilators are smooth and comfortable, easy to control, light-weight, latex-free, washable and safe.</p>
            <p class="product-price">$44.95<sup><span>USD</span></sup></p>
            <p class="product-price-caption">*Plus Shipping &amp; Handling</p>
            <img src="#" alt="">
            <a class="buy-btn" href="#">Add to Cart</a>
            <img src="#" alt="">
          </div>
        </div>
      PRE-FOOTER-BADGES SECTION      
     
        <div class="product-pre-footer">
          <div class="wrapper">
            <div class="large-8 medium-6">
              <div class="badge-box ordering">
               <h3>Don't Want to Order Online?</h3>
                <hr>
                <ul>
                  <li>Call Toll Free in the USA: <a href="tel:+1-888-426-9900">1.888.426.9900</a></li>
                  <li>International, Outside the USA: <a href="tel:+1-619-449-1200">1.619.449.1200</a></li>
                  <li>Email Us: <a href="mailto:care@vaginismus.com" target="_blank">care@vaginismus.com</a></li>
                  <li>Fax/Mail Order Form: <a href="/downloads/fax-mail-order-form.pdf" target="_blank">Download PDF</a></li>
                </ul>
                <p>*If you would like to ship using Fedex or UPS please <a href="/contact-us/index.php">contact us</a> directly for accomodations.</p>
              </div>
            </div>
            <div class="large-4 medium-6">
              <div class="badge-box service">
                <h3>Common Questions</h3>
                <hr>
                <ul>
                  <li>Guaranteed Lowest Prices</li>
                  <li>Ships World-Wide</li>
                  <li>Safe &amp; Secure</li>
                  <li>Private &amp; Confidential</li>
                </ul>
                <a href="/customer-service-questions/index.php" class="gray-btn">Customer Service FAQs</a>
              </div>
            </div>
          </div>
        </div>
      </section>
-->
      
<!--   TREATMENT BANNER   -->
      <div class="banner-solid">
        <div class="wrapper">
          <h2>Have Questions About Dilators?</h2>
          <a href="/further-support/dilator-questions/index.php" class="white-btn">Dilator FAQs</a>
        </div>
      </div>
      
    </main>
                    
<?php
  include(ROOT_PATH.'/includes/footer.php');
?>