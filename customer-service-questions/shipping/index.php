<?php
  $pagetitle = 'Shipping';
  $pagedescription = 'Answers to your questions about shipping';
  $pagecanonical = 'https://www.vaginismus.com/customer-service-questions/shipping/';
  $pageimagepath ="https://www.vaginismus.com/img/twitter-card.png";
  include('../../config.php');
  include(ROOT_PATH.'/includes/header.php');
?>


  <main class="cust-serv">
    <div class="wrapper">
      <!--   MAIN SECTION   -->
      <?php
  $active = 'shipping';  include(ROOT_PATH.'/includes/sidebar-customer-service.php');
?>
        <section class="large-9" id="section-question">
          <hr class="hidden-desktop" />
          <h1>Shipping FAQs</h1>

          <h4>What shipping methods are available?</h4>
          <p>At the time of ordering, when you choose the shipping destination online, the shipping options available for your country will appear. Typical options include United States Postal Service (USPS) and DHL. If you desire other options than what is offered during this process, please <a href="/contact-us/index.php">contact us</a> directly before completing the transaction.</p>

          <h4>Where do your products ship from?</h4>
          <p>All products are shipped from California, U.S.A.</p>

          <h4>What appears on the packaging? What will it say on the shipping waybills and/or customs declaration form?</h4>
          <p>Our mission is to help couples with sexual pain issues. For this reason, we go to great lengths to ensure our customers’ privacy and confidentiality. Your order will arrive in plain packaging. The words vaginismus, vaginismus.com nor any other related term will not appear on the box or waybill. A generic shipping company name is used as sender. For customs declaration forms, the names of products will be indicated as educational kit, plastic parts, or other similar variant to protect privacy.</p>

          <h4>Do you ship internationally?</h4>
          <p>Yes, we ship worldwide. As our mandate is to help as many women with vaginismus as possible, we make every attempt get the products to any country. For some countries, a “letter of necessity” from a physician can be helpful. We have successfully shipped to some of the remotest destinations in the world.</p>

          <h4>Will there be any customs charges or duties?</h4>
          <p>On international orders (outside the U.S.), every country has their own individual rules for determining applicable customs charges, taxes, or duties. The customer is responsible for all such charges and any applicable courier customs processing fees. Each country collects its own customs fees.</p>

          <h4>When can I expect my order to arrive?</h4>

          <!--
          <table class="shipping-rates">
            <thead>
              <tr>
                <th></th>
                <th>Priority Mail</th>
                <th>Priority Mail Express</th>
                <th>Priority Mail International</th>
                <th>Priority Mail Express<br /> International</th>
                <th>DHL Express Worldwide</th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td class="country-name">USA</td>
                <td>2-3 Business Days<br/><br/></td>
                <td>1-2 Business Days<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
              </tr>
              <tr>
                <td class="country-name">Canada</td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>1-2 Weeks (plus 1-2 weeks for Customs)</td>
                <td>5-8 Business Days (plus 1-2 weeks for Customs)</td>
                <td>1-5 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Mexico</td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>4-7 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">United Kingdom</td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>1-3 Weeks (plus 1-2 weeks for Customs)</td>
                <td>1-2 Weeks (plus 1-2 weeks for Customs)</td>
                <td>2-4 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Europe</td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>2-4 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Australia</td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>1-3 Weeks (plus 1-2 weeks for Customs)</td>
                <td>1-2 Weeks (plus 1-2 weeks for Customs)</td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">New Zealand</td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">South America</td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Africa</td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Middle East</td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Asia (India, China)</td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>

              <tr>
                <td class="country-name">Russia</td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>4-5 Business Days (plus 1-2 weeks for Customs)</td>
                <td><br/>&#8211;<br/><br/></td>
              </tr>
            </tbody>
          </table>
-->
          <table class="shipping-rates">
            <thead>
              <tr>
                <th></th>
                <th>Priority Mail</th>
                <th>Priority Mail Express</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="country-name">USA</td>
                <td>2-3 Business Days<br/><br/></td>
                <td>1-2 Business Days<br/><br/></td>
              </tr>
            </tbody>
          </table>


          <table class="shipping-rates">
            <thead>
              <tr>
                <th></th>

                <th>Priority Mail International</th>
                <th>Priority Mail Express<br /> International</th>
                <th>DHL Express Worldwide</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td class="country-name">Canada</td>

                <td>1-2 Weeks (plus 1-2 weeks for Customs)</td>
                <td>5-8 Business Days (plus 1-2 weeks for Customs)</td>
                <td>1-5 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Mexico</td>

                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>4-7 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">United Kingdom</td>

                <td>1-3 Weeks (plus 1-2 weeks for Customs)</td>
                <td>1-2 Weeks (plus 1-2 weeks for Customs)</td>
                <td>2-4 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Europe</td>

                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>2-4 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Australia</td>

                <td>1-3 Weeks (plus 1-2 weeks for Customs)</td>
                <td>1-2 Weeks (plus 1-2 weeks for Customs)</td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">New Zealand</td>

                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">South America</td>

                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Africa</td>

                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Middle East</td>

                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>
              <tr>
                <td class="country-name">Asia (India, China)</td>

                <td><br/>&#8211;<br/><br/></td>
                <td><br/>&#8211;<br/><br/></td>
                <td>3-6 Weekdays (plus 1-2 weeks for Customs)</td>
              </tr>

              <tr>
                <td class="country-name">Russia</td>

                <td><br/>&#8211;<br/><br/></td>
                <td>4-5 Business Days (plus 1-2 weeks for Customs)</td>
                <td><br/>&#8211;<br/><br/></td>
              </tr>
            </tbody>
          </table>

          <p>*All USPS shipping days include Saturday<br /> *Cannot ship to Egypt due to Customs restrictions.<br /> *DHL cannot ships to Russian residential addresses.<br /> *All costs in USD.</p>
          <a href="#" class="hidden-tablet hidden-desktop">Back to Top<i class="icon-angle-double-right"></i></a>
        </section>
    </div>
  </main>
  <?php
  include(ROOT_PATH.'/includes/footer.php');
?>
