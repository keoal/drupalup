<?php
/**
 * @file
 * Contains \Drupal\mymodule\Controller\FirstController.
 */

 namespace Drupal\mymodule\Controller;

 use Drupal\Core\Controller\ControllerBase;

 class FirstController extends ControllerBase {
     public function content(){
         return array(
             '#type' => 'markup',
             '#markup' => t('<div class="content clearfix">
             <h1 class="life-quote-title">
                 Life Insurance Quote 2</h1>
             <div class="content clearfix">	
             <div id="quote-screen-1">
                 <div class="life-quote-outer-block">
                     <div class="life-quote-block-header">
                         <p class="life-quote-block-intro term-life-intro">Get a quote for life insurance to cover you for a specific term. The cost of life<br />
                             insurance options depends on age, health, term and the amount of life insurance sought.</p>
                             
                         <p class="life-quote-block-intro mortgage-protection-intro">Mortgage Life Insurance, (Mortgage Protection) is a form of life insurance that ensures your mortgage will be paid off in cases of death or illness.</p>
                             
                         <p class="life-quote-block-intro whole-life-intro">Get a quote for life insurance that covers your whole life. The cost of life insurance depends on age, health, and amount of life insurance sought.</p>
                     </div>
                     <div class="life-quote-block-main">
                         <h2 class="introducing-il">
                             In 3 simple steps&nbsp;<i aria-hidden="true" class="fa fa-chevron-down">&nbsp;</i></h2>
                         <ol class="rounded-list">
                             <li>
                                 Fill out our short form regarding your life insurance details.</li>
                             <li>
                                 Review your quote and select the appropriate policy for you.</li>
                             <li>
                                 Request a call back from one of our experienced financial advisors to discuss your policy.</li>
                         </ol>
                         <button class="views-field-field-basic-web-page-url-label term-start-button" id="term-start-button">Start</button>
                         </div>
                 </div>
             </div>
             </div>
         </div>
         <!--####################################### Screen 2  Start ####################################################-->
         <div class="content clearfix">
             <div id="progress-bar">
                 <div class="content clearfix">
                     <ol class="rounded-list-2">
                         <li>
                             <a href="#home" id="progress-details">Your Details</a></li>
                         <li>
                             <a href="#quote" id="progress-quote">Quote</a></li>
                         <li>
                             <a href="#contact" id="progress-contact">Contact</a></li>
                     </ol>
                 </div>
             </div>
             <div id="quote-screen-2">
                 <div class="content clearfix">
                     <div class="views-field-field-basic-web-page-url-label choose-people" id="just-you">
                         Just You</div>
                     <button id="add-person"><i aria-hidden="true" class="fa fa-user-plus">&nbsp;</i>Add Person</button></div>
                 <div class="content clearfix">
                     <div class="views-field-field-basic-web-page-url-label choose-people" id="two-people">
                         Two People</div>
                     <button id="remove-person"><i aria-hidden="true" class="fa fa-user-times">&nbsp;</i>Remove Person</button></div>
                 <div class="content clearfix">
                     <div class="life-quote-outer-block-narrow">
                         <div class="life-quote-block-header">
                             <h2 style="float: left">
                                 Cover Required</h2>
                             <h2 class="term-header">
                                 Term</h2>
                         </div>
                         <div class="content clearfix">
                             <div class="life-quote-block-main-narrow">
                                 <div id="range-slider">
                                     <input data-rangeslider="" name="rangeslider" max="500000" min="1000" step="1000" type="range" value="50000" />
                                     
                                 </div>
                                 <output id="cover-required-output" val=""></output>
                                 <div class="term-input">
                                     <select id="number" name="term-length" val="">
                                     <option value="5">5 years</option>
                                     <option value="10">10 years</option>
                                     <option value="15">15 years</option>
                                     <option value="20" selected="selected">20 years</option>
                                     <option value="25">25 years</option>
                                     <option value="30">30 years</option>
                                     <option value="35">35 years</option>
                                     <option value="40">40 years</option>
                                     </select></div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="life-quote-outer-block-narrow">
                     <div class="life-quote-block-header">
                         <h2>
                             1st Person&nbsp;<i aria-hidden="true" class="fa fa-user">&nbsp;</i><i aria-hidden="true" class="fa fa-plus-circle" id="new-user">&nbsp;</i></h2>
                     </div>
                     <div class="life-quote-block-main-narrow">
                         <div class="content clearfix">
                             <div class="age-field">
                                 <label class="label-text" for="age">Age</label><input  id="person-1-age" val="" class="age-input" name="age" type="text" />
                                 <br /><span class="age-1-warning hidden">Please enter your age</span>
                                 
                             </div>
                             <div class="smoker person-1">
                                 <label class="label-text" for="age">Smoker</label>
                                 <button id="smoker-yes-p1" val="" class="smoker-button smoker-yes" name="" type="button">Yes</button>
                                 <button id="smoker-no-p1" val="" class="smoker-button smoker-no" name="" type="button">No</button>
                                 <br /><span class="smoker-1-warning hidden">Please select smoker Yes/No</span>
                             </div>
                             
                         </div>
                         <span class="term-length-warning-1 hidden">The maximum term is 40 years or up to age 80. Please reduce the term and try again.</span>
                     </div>
                 </div>
                 <div class="life-quote-outer-block-narrow" id="second-person">
                     <div class="life-quote-block-header">
                         <h2>
                             2nd Person&nbsp;<i aria-hidden="true" class="fa fa-user">&nbsp;</i><i aria-hidden="true" class="fa fa-times-circle" id="close-user">&nbsp;</i></h2>
                     </div>
                     <div class="life-quote-block-main-narrow">
                         <div class="content clearfix">
                             <div class="age-field">
                                 <label class="label-text" for="age">Age</label><input  id="person-2-age" val="" class="age-input" name="age" type="text" />
                                 <br /><span class="age-2-warning hidden">Please enter your age</span>
                                 
                             </div>
                             <div class="smoker person-2">
                                 <label class="label-text" for="age">Smoker</label>
                                 <button id="smoker-yes-p2" val="yes" class="smoker-button" name="smoker-yes" type="button">Yes</button>
                                 <button id="smoker-no-p2" val="no" class="smoker-button smoker-no" name="smoker-no" type="button">No</button>
                                 <br /><span class="smoker-2-warning hidden">Please select smoker Yes/No</span>
                             </div>
                             
                         </div>
                         <span class="term-length-warning-2 hidden">The maximum term is 40 years or up to age 80. Please reduce the term and try again.</span>
                     </div>
                 </div>
                 
                 
                 
                 <div class="get-quote">
                     <div class="content clearfix">
                         <button id="get-quote-button">Get Quote</button></div>
                     <div>
                         <br />
                         <p class="quote-warning">This indicative quotation is for a <span class="product-name"></span> protection policy which is provided by Irish Life Assurance plc. You may have other protection needs and we always recommend that you should discuss your overall insurance needs with a Financial Advisor.</p>
                     </div>
                 </div>
             </div>
         </div>
         <!--####################################### Screen 2  END####################################################-->
         <!--####################################### Screen 3  START####################################################-->
         
         <!--jQuery Modal for breakdown 1 -->
         <div id="breakdown-1" style="display:none;">
              <h3>First Quote Breakdown</h3>
               <ul id="quote-breakdown-1" class="quote-breakdown">
                     <!- quote premium will be inserted here ->
               </ul>
         </div>
         <!--jQuery Modal for breakdown 1 -->
         
         <!--jQuery Modal for breakdown 2 -->
         <div id="breakdown-2" style="display:none;">
              <h3>Second Quote Breakdown</h3>
               <ul id="quote-breakdown-2" class="quote-breakdown">
                     <!- quote premium will be inserted here ->
               </ul>
         </div>
         <!--jQuery Modal for breakdown 2 -->
         
         <!--jQuery Modal for breakdown 3 -->
         <div id="breakdown-3" style="display:none;">
              <h3>Third Quote Breakdown</h3>
               <ul id="quote-breakdown-3" class="quote-breakdown">
                     
               </ul>
         </div>
         <!--jQuery Modal for breakdown 3 -->
         
         
         
         
         <div id="quote-screen-3">
             <div class="content clearfix">
                 <div class="your-quote-outer-block your-quote-left">
                     <div class="life-quote-block-header">
                         <h2>Your Quote<div id="edit-quote" class="edit-quote-options">Edit&nbsp;<i aria-hidden="true" class="fa fa-pencil-square-o">&nbsp;</i></div></h2>
                     </div>
                     <div class="content clearfix">
                         <div class="life-quote-block-main-narrow">
                             <div style="float: left; width: 40%">
                                 <h2 id="quote-1-amount"><!- quote premium will be inserted here -></h2>
                                 <p id="quote-1-premium"><!- quote premium will be inserted here -></p>
                                     <p><a href="#breakdown-1" rel="modal:open">View Breakdown</a></p>
                                 <button id="quote-button-1" class="quote-button-selected">Select</button></div>
                             <div style="float: right; width: 50%;">
                                 <ul>
                                     <li id="quote-1-value"></li>
                                     <li id="quote-1-premium-years"></li>
                                     <li id="quote-1-premium-person-1"></li>
                                     <li id="quote-1-premium-person-2"></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="your-quote-outer-block">
                     <div class="life-quote-block-header">
                         <h2>Or you might like to consider</h2>
                     </div>
                     <div class="content clearfix">
                         <div class="life-quote-block-main-narrow">
                             <div style="float: left; width: 40%">
                                 <h2 id="quote-2-amount"><!- quote premium will be inserted here -></h2>
                                 <p id="quote-2-premium"><!- quote premium 2 will be inserted here -></p>
                                     <p><a href="#breakdown-2" rel="modal:open">View Breakdown</a></p>
                                 <button id="quote-button-2" class="quote-button-selected">Select</button></div>
                             <div style="float: right; width: 40%; margin-right: 5%; margin-bottom: 16px;">
                                 <h2 id="quote-3-amount"><!- quote premium will be inserted here -></h2>
                                 <p id="quote-3-premium"><!- quote premium 3 will be inserted here -></p>
                                     <p><a href="#breakdown-3" rel="modal:open">View Breakdown</a></p>
                                 <button id="quote-button-3" class="quote-button-selected">Select</button></div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="life-quote-outer-block-narrow life-quote-outer-block-narrow-last">
                 <div class="life-quote-block-header-narrow">
                     <h3>
                         Please Note</h3>
                 </div>
                 <div class="life-quote-block-main-narrow">
                     <p>This indicative quotation is for a <span class="product-name"></span> policy which is provided by Irish Life Assurance plc. and is subject to assessment. It can provide a cash sum in the event of death (life cover). No cash will be returned if you cancel your plan or stop making regular payments on your plan. If this happens you will no longer be covered.</p>
                     <p>The quote is valid either for 7 days or to your next birthday, whichever is sooner. This is subject to no changes to the regulatory or tax rules applying to the product within that period.</p>
                     <p>For the online quote we assume that your contributions do not increase in line with inflation. You can update these over the phone to receive a different quote.</p>
                     <p>€15.15 is our minimum premium so you may be able to get more cover for this amount.</p>
                     <div class="views-field-field-basic-web-page-url-label" style="
             width: 26%;
         ">
                         &nbsp;</div>
                 </div>
             </div>
         </div>
         <!--####################################### Screen 3  END####################################################-->
         <!--####################################### Screen 4 START####################################################-->
         <div id="quote-screen-4">
             <div class="life-quote-outer-block-narrow life-quote-outer-block-narrow-last">
                 <div class="life-quote-block-header-narrow">
                     <h3>
                         Talk to us&nbsp;<i aria-hidden="true" class="fa fa-volume-control-phone">&nbsp;</i><div id="edit-quote" class="edit-quote-callback">Edit&nbsp;Quote&nbsp;<i aria-hidden="true" class="fa fa-pencil-square-o">&nbsp;</i></div></h3>
                 </div>
                 <div class="life-quote-block-main-narrow">
                     <p>Now that you’ve completed a quote a Financial Advisor can call you back to look at all your options, answer your questions and see what protection plan may suit your life cover needs.</p>
                     <div class="content clearfix">
                         <div class="contact-details">
                             <form>
                                 <h3>
                                     Contact Details</h3>
                                 <label for="name">Name</label><input id="contactName" class="contact-input" name="name" type="text" />
                                 <span id="contactNameError" class="contact-warning" style="display:none">Please enter your name</span>
                                 <br />
                                 <label for="phone">Phone</label> <input id="contactPhone" class="contact-input" name="phone" type="text" />
                                 <span id="contactPhoneError" class="contact-warning" style="display:none">Please enter your phone number</span>
                                 <br />
                                 <label for="email">Email</label> <input id="contactEmail" class="contact-input" name="email" type="text" />
                                 <span id="contactEmailError" class="contact-warning" style="display:none">Please enter a valid email</span>
                                 <br />
                                 <br />
                                 <h3>Best time to call</h3>
                                 <span>
                                     <button id="contactBefore12" class="call-time-button" name="before-12pm" type="button">Before 12pm</button>
                                     <button id="contact12-5" class="call-time-button" name="12-5pm" type="button">12pm to 5pm</button>
                                     <button id="contactAfter5" class="call-time-button" name="after-5pm" type="button">After 5pm</button>
                                 </span>
                                 <span id="contactTimeError" class="contact-warning" style="display:none">Please select a time<br/></span>
                                 <div class="call-time-request">
                                     <button id="request-callback-button" name="request-callback" type="button">Request Callback</button></div>
                                 <div class="call-time-output">
                                     <output class="total-cost-output">&euro;</output>
                                     <output class="monthly-cost-output"></output>
                                 </div>
                             </form>
                         </div>
                         <div class="life-quote-outer-block-privacy">
                             <div class="life-quote-block-header-privacy">
                                 Privacy<i aria-hidden="true" class="fa fa-lock">&nbsp;</i></div>
                             <div class="life-quote-block-main-privacy">
                                 <p>In the interest of customer service we will record and monitor calls. We will only use your personal details for the purpose of dealing with your request. Your privacy is important to us. By completing your contact details above, you authorise us to contact you by telephone, mobile and/or email.</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--####################################### Screen 4  END####################################################-->
         <!--####################################### Screen 5  START####################################################-->
         <div id="quote-screen-5">
             <div class="life-quote-outer-block-narrow">
                 <div class="life-quote-block-header-narrow">
                     <h3>
                         Thank you for getting in touch&nbsp;<i aria-hidden="true" class="fa fa-check">&nbsp;</i></h3>
                 </div>
                 <div class="life-quote-block-main-narrow">
                     <p>You have been assigned an advisor who will contact you with more information about your quote.</p>
                 </div>
             </div>
             <div class="life-quote-outer-block-narrow">
                 <div class="life-quote-block-header-narrow">
                     <h3>
                         Your advisor&nbsp;<i aria-hidden="true" class="fa fa-phone">&nbsp;</i></h3>
                 </div>
                 <div class="life-quote-block-main-narrow">
                     <p><img class="logoImg" src="https://www.irishlife.ie/sites/retail/files/quote-end-logo.jpg">
                      One of our advisors will call you tomorrow between <strong><span id="callTime"></span></strong>.
                             <br/>
                             We look forward to talking to you then.
                     </p>
                     <p>A reminder has been emailed to you.</p>
                     <h3>
                         What will be discussed?</h3>
                     <div class="content clearfix">
                         <div class="thank-you-bullets">
                             <ul>
                                 <li>
                                     Our policy terms</li>
                                 <li>
                                     Additional health information</li>
                             </ul>
                         </div>
                         <div class="thank-you-bullets">
                             <ul>
                                 <li>
                                     Your lifestyle</li>
                                 <li>
                                     Irish Life customer benefits</li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="life-quote-outer-block-narrow life-quote-outer-block-narrow-last">
                 <div class="life-quote-block-header-narrow">
                     <h3>
                         Additional Information</h3>
                 </div>
                 <div class="content clearfix">
                     <div class="life-quote-block-main-narrow">
                         <div class="use-life-planner">
                             <p>Want to make your call as short as possible? Visit our Life Planner tool to tell us more about you.</p>
                             <div class="views-field-field-basic-web-page-url-label">
                                 <a class="button-life-planner" href="/life-insurance/life-insurance-calculator/family-protection-planner" target="_blank">Use Life Planner</a></div>
                         </div>
                         <div class="compare-benefits">
                             <h3>Compare Benefits</h3>
                             <p>See how the National Consumer Agency rated our benefits</p>
                             <div class="views-field-field-basic-web-page-url-label">
                                 <a class="button-benefits" href="/life-insurance/product-comparison" target="_blank">Find out more</a></div>
                         </div>
                         <div class="simple-life-insurance">
                             <h3>
                                 Simple Life Insurance</h3>
                             <p>Find out about our online Simple Life Insurance today</p>
                             <div class="views-field-field-basic-web-page-url-label">
                                 <a class="button-find-out-more" href="/life-insurance/protect-my-family/buy-online/simple-life-insurance-online" target="_blank">Find out more</a></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--####################################### SAVE BAR STUFF ####################################################-->
           <div class="full-width-container" id="quote-saved-bar">
           <div id="quote-saved-container">
           <div id="quote-is-saved">Results Saved!</div>
           <a class="mos-go-saved" href="/myonlineservices/ClientB2C/Home" target="_blank">
           Go to my account
           </a>
           </div>
           </div>
           
           <div class="full-width-container" id="need-login-bar">
           <div id="need-login-container">
           <div id="need-login">Save Results?</div>
           <a class="mos-go" id="login-register" href="#login-modal" rel="modal:open">
           Log in
           </a>
           <a class="mos-go" id="login-mobile" href="#login-modal" rel="modal:open">
           Log in
           </a>
           <a class="sign-go" id="sign-up" href="/myonlineservices/AccountRegister/Register1">
           Sign Up
           </a>
           <a class="sign-go" id="signup-mobile" href="#login-modal" rel="modal:open">
           Sign Up
           </a>
           </div>
           </div>
           
           <div class="full-width-container" id="save-bar">
           <div id="save-btn-container">
           <div id="save-go">
           Save
           </div>
           </div>
           </div>
         
           <!-- ########################### --><!-- End of page content --><!--####################################### -->
           
           ')
         );
     }
 }