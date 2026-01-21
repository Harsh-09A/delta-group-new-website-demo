 <!-- start contact popup -->
 <div id="popup-contact-form" class="container p-0 contact-form-style-01 position-relative text-center mfp-hide">
     <div class="row g-0">
         <div class="col-lg-5 cover-background md-h-600px xs-h-400px" style="background-image:url('https://placehold.co/800x770');"></div>
         <div class="col-lg-7">
             <div class="p-10 lg-p-10 bg-white">
                 <span class="fs-18 mb-10px">Looking for a finance agent?</span>
                 <h3 class="d-inline-block fw-600 text-dark-gray mb-10 ls-minus-1px">How we can help you?</h3>
                 <form action="email-templates/contact-form.php" method="post">
                     <div class="position-relative form-group mb-20px">
                         <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                         <input type="text" name="name" class="form-control required" placeholder="Enter Your Name*" />
                     </div>
                     <div class="position-relative form-group mb-20px">
                         <span class="form-icon"><i class="bi bi-envelope"></i></span>
                         <input type="email" name="email" class="form-control" placeholder="Enter Your Email" />
                     </div>
                     <div class="position-relative form-group mb-20px">
                         <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                         <input type="tel" name="phone" class="form-control required" placeholder="Enter Your Phone*" />
                     </div>
                     <div class="position-relative form-group form-textarea">
                         <!-- <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span> -->
                         <!-- <textarea placeholder="Your message" name="comment" class="form-control" rows="3"></textarea> -->
                         <!-- <input type="hidden" name="redirect" value=""> -->
                         <button class="btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge w-100 mt-20px submit" type="submit">Send message</button>
                         <div class="form-results mt-20px d-none"></div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- end contact popup -->