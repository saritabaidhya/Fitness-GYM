<!-- footer area -->
<footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box about-us">
                        <a href="#" class="footer-logo">

                            <img src="{{ asset('storage/images/'. $settings->first()->path) }}" alt="">
                        </a>
                        <p class="mb-20">
                            {!! $settings->first()->detail !!}
                        </p>
                        <ul class="footer-social">
                            <li><a href="{{ $settings->first()->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $settings->first()->instagram }}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $settings->first()->youtube }}"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box">
                        <h4 class="footer-widget-title">Get Connected</h4>
                        <ul class="footer-contact">
                            <li><i class="far fa-map-marker-alt"></i>{{ $settings->first()->address }}</li>
                            <li><a href="tel:+21236547898"><i class="far fa-phone"></i>{{ $settings->first()->phone }}</a></li>
                            <li><a href=""><i class="far fa-envelope"></i>{{ $settings->first()->email }}</a>
                            </li>
                            <li><i class="far fa-clock"></i>{{ $settings->first()->time }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="/whyus"><i class="fas fa-chevron-right"></i> About Us</a></li>
                            <li><a href="/faqs"><i class="fas fa-chevron-right"></i> FAQ's</a></li>
                            <li><a href="/termsandconditions"><i class="fas fa-chevron-right"></i> Terms Of Service</a></li>
                            <li><a href="/privacypolicy"><i class="fas fa-chevron-right"></i> Privacy Policy</a></li>
                            <li><a href="/training"><i class="fas fa-chevron-right"></i> Our Classes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Newsletter</h4>
                        <div class="footer-newsletter">
                            <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                            <div class="subscribe-form">
                                <form action="{{ route('subscribe.store') }}" method="post">
                                    @csrf
                                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                                    <button class="theme-btn" type="submit">
                                        <i class="far fa-paper-plane"></i> Subscribe Now
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <p class="copyright-text">
                        &copy; Copyright <span id="date"></span> <a href="#"> Zenith Fitness</a> All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-6 align-self-center">
                    <ul class="footer-menu">
                        <li><a href="/contacts">Support</a></li>
                        <li><a href="/termsandconditions">Terms Of Services</a></li>
                        <li><a href="/privacypolicy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->