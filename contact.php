<?php
$GLOBALS['title'] = "Contact - CancerVax";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('header.php'); ?>

<section class="contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-title">
                    <span>CancerVax is a pre-clinical biotech company developing a novel Universal Cancer Treatment platform that will be customizable, as an injection, to treat many types of cancer. Our innovative approach DETECTS, MARKS, and KILLS only cancer cells. By making cancer cells look like well-immunized common diseases such as measles or chickenpox, we intend to use the body’s natural immune system to easily kill the cancer cells. We look forward to the day when treating cancer will be as simple as getting a shot – a better way to fight cancer. </span>
                    <h1>Contact us</h1>
                    <p>We would love to hear from you</p>
                </div>
                <div class="contact-info">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="contact-info-item">
                                <h3>UTAH</h3>
                                <p><a href="https://goo.gl/maps/5xZJ6Byy4tZt2P7AA" target="_blank" rel="noopener noreferrer">

                                        1633 W Innovation Way <br> 4th floor, Lehi, UT 84043
                                    </a></p>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="contact-info-item">
                                <h3>CONTACT</h3>
                                <p><a href="tel:8053561810">(805) 356-1810</a> <br>
                                    <a href="mailto:info@cancervax.com">info@cancervax.com</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <h2>Send a message</h2>
                    <form action="https://submit.jotform.com/submit/241326885940059/" method="POST">
                        <input type="hidden" name="formID" value="241326885940059" />
                        <div class="mb-3">
                            <label for="input_3" class="form-label">Your name</label>
                            <input type="text" name="q3_typeA" class="form-control" id="input_3">
                        </div>
                        <div class="mb-3">
                            <label for="input_4" class="form-label">Your email</label>
                            <input type="email" name="q4_email" class="form-control" id="input_4">
                        </div>
                        <div class="mb-3">
                            <label for="input_5" class="form-label">Subject</label>
                            <input type="text" name="q5_typeA5" class="form-control" id="input_5">
                        </div>
                        <div class="mb-3">
                            <label for="input_6" class="form-label">Your message (optional)</label>
                            <textarea class="form-control" id="input_6" name="q6_typeA6" rows="10"></textarea>
                        </div>
                        <div class="form-line mb-5 jf-required" data-type="control_captcha" id="id_7"><label class="form-label form-label-top form-label-auto" id="label_7" for="input_7" aria-hidden="false"> Please verify that you are human<span class="form-required">*</span> </label>
                            <div id="cid_7" class="form-input-wide jf-required" data-layout="full">
                                <section data-wrapper-react="true">
                                    <div id="hcaptcha_input_7" class="h-captcha" data-siteKey="772f4a50-7161-425e-8cd5-4d7e361ab765" data-callback="hcaptchaCallbackinput_7" data-expired-callback="hcaptchaExpiredCallbackinput_7"></div><input type="hidden" id="input_7" class="hidden validate[required]" name="hcaptcha_visible" required="" />
                                    <script type="text/javascript" src="https://hcaptcha.com/1/api.js"></script>
                                </section>
                            </div>
                        </div>
                        <button type="submit" id="submitButton" >Submit</button>
                    </form>
                    <script>
                const submitButton = document.getElementById('submitButton');

                function onCaptchaSuccess(token) {
                    document.getElementById('input_7').value = token;
                    submitButton.disabled = false; 
                }

                // Callback function when hCaptcha expires
                function onCaptchaExpired() {
                    document.getElementById('input_7').value = '';
                    submitButton.disabled = true;
                }
            </script>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include('footer.php'); ?>