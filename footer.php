<?php
$page_name = basename($_SERVER['PHP_SELF']);
// Get the current domain URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$domain = $_SERVER['HTTP_HOST'];
$current_url = $protocol . "://" . $domain;

// Check if the script is running on localhost
if ($domain === 'localhost' || $domain === '127.0.0.1') {
    $full_url = $current_url . '/cancervax/';
} else {
    $full_url = $current_url . '/';
}
if ($page_name !== "prep.php") {
    if ($page_name != "index.php" && $page_name != "regainvest.php" && $page_name != "regainvest") {
?>
        <section class="newsletter">
            <div class="container">
                <div class="newsletter-wrap">
                    <p>Keep up with our progress by subscribing to our email newsletter!</p>
                    <form action="https://submit.jotform.com/submit/242775392698071/" method="POST">
                        <input type="hidden" name="formID" value="242775392698071" />
                        <input type="email" id="input_3" name="q3_email" class="form-control" placeholder="Your email address...">
                        <button type="submit">Subscribe</button>
                    </form>
                    <!-- <div id="icontactSignupFormWrapper956">
                        <script type="text/javascript" async src="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/automatic?id=956&cid=1868283&lid=5400&divid=icontactSignupFormWrapper956"></script>
                    </div> -->
                </div>
            </div>
        </section>

    <?php } ?>
    <!-- <div class="invest-footer">
    <div class="container">
        <p>This Reg A+ offering is made available through StartEngine Primary, LLC, member FINRA/SIPC. This investment is speculative, illiquid, and involves a high degree of risk, including the possible loss of your entire investment. You should read the <a href="https://www.sec.gov/Archives/edgar/data/1905495/000149315223013677/partiiandiii.htm#A_003" target="_blank" rel="noopener noreferrer">Selected Risks</a>, the <a href="https://www.sec.gov/Archives/edgar/data/1905495/000149315223013677/partiiandiii.htm" target="_blank" rel="noopener noreferrer">Offering Circular</a>, and <a href="https://www.sec.gov/edgar/browse/?CIK=1905495" target="_blank" rel="noopener noreferrer">Sec Edgar</a> Page before investing.</p>
    </div>
</div> -->
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="footer-logo">
                            <a href="/">
                                <img src="<?php echo  $full_url; ?>./assets/img/C-01-1.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-linkhead d-none d-sm-block">
                            <div class="row">
                                <div class="col-6 col-sm-4">
                                    <h6>COMPANY</h6>
                                </div>
                                <div class="col-6 col-sm-4">
                                </div>
                                <div class="col-6 col-sm-4">
                                    <h6>CONTACT US</h6>
                                </div>
                            </div>
                        </div>
                        <div class="footer-linkbody">
                            <div class="row">
                                <div class="col-6 col-sm-4">
                                    <div class="footer-link">
                                        <h6 class="d-sm-none">COMPANY</h6>
                                        <ul class="links">
                                            <li>
                                                <a href="/about">About Us</a>
                                            </li>
                                            <li>
                                                <a href="/progress">Progress</a>
                                            </li>
                                            <li>
                                                <a href="/market">Market</a>
                                            </li>
                                            <li>
                                                <a href="/news">Newsroom</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="footer-link">
                                        <ul class="links no-head">
                                            <li>
                                                <a href="/videos">Videos</a>
                                            </li>
                                            <li>
                                                <a href="/invest">Investors</a>
                                            </li>
                                            <li>
                                                <a href="/contact">Contact</a>
                                            </li>
                                            <li>
                                                <a href="/privacy-policy">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="/terms-of-use">Terms of Use</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-sm-4">
                                    <div class="footer-info">
                                        <h6 class="d-sm-none">CONTACT US</h6>
                                        <a href="tel:8053561810">(805) 356-1810</a>
                                        <a href="mailto:info@cancervax.com">info@cancervax.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 CancerVax. All rights reserved</p>
            </div>
        </div>
    </footer>


<?php } ?>

<!-- Team popup -->
<div class="modal fade" id="team">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teamLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="pipeline-img-preview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header text-end pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <img src="./assets/img/pipeline-virus-2-large.png" class="modal_img" alt="pipeline-virus-2">
            </div>
        </div>
    </div>
</div>



<script src="<?php echo  $full_url; ?>/assets/js/jquery-3.1.1.min.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo  $full_url; ?>/assets/js/slick.min.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo  $full_url; ?>/assets/js/jquery.magnific-popup.min.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo  $full_url; ?>/assets/js/particles.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo  $full_url; ?>/assets/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo  $full_url; ?>/assets/js/typed.min.js?v=<?php echo time(); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/main.js?v=<?php echo time(); ?>"></script>

</body>

</html>