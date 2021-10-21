   <!--
        ===================
           FOOTER 3
        ===================
        -->
        <footer class="mh-footer mh-footer-3">
            <div class="container-fluid">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>Contact Me</h3>
                    </div>
                    <div class="map-image image-bg col-sm-12">
                        <div class="container mt-30">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mh-footer-address">
                                    <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item dark-bg shadow-1 media wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                            <div class="each-icon">
                                                <i class="fa fa-location-arrow"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Address</h4>
                                                <a>
                                                @foreach ($users->contactme as $contactme)
                                                
                                                    {{$contactme->contact_address}} <br> 
                                                    {{$contactme->contact_city}}
                                                
                                                @endforeach
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                            <div class="each-icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Email</h4>
                                                @foreach ($users->contactme as $contactme)
                                                <a href="mailto:yourmail@email.com">{{$contactme->contact_email}}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                            <div class="each-icon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Phone</h4>
                                                @foreach ($users->contactme as $contactme)
                                                <a href="callto:(880)-8976-987">{{$contactme->contact_phone}}</a><br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <form id="contactForm" class="single-form quate-form wow fadeInUp" data-toggle="validator">
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input name="name" class="contact-name form-control" id="name" type="text" placeholder="First Name" required>
                                            </div>
                
                                            <div class="col-sm-12">
                                                <input name="name" class="contact-email form-control" id="L_name" type="text" placeholder="Last Name" required>
                                            </div>
                
                                            <div class="col-sm-12">
                                                <input name="name" class="contact-subject form-control" id="email" type="email" placeholder="Your Email" required>
                                            </div>
                
                                            <div class="col-sm-12">
                                                <textarea class="contact-message" id="message" rows="6" placeholder="Your Message" required></textarea>
                                            </div>
                                            
                                            <!-- Subject Button -->
                                            <div class="btn-form col-sm-12">
                                                <button type="submit" class="btn btn-fill btn-block" id="form-submit">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="text-left text-xs-center">
                                                <p><a href="templateshub.net">Templates Hub</a></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="social-icon">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    <!--
    ==============
    * JS Files *
    ==============
    -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <!-- jQuery -->
    <script src="{{asset('assets/plugins/js/jquery.min.js')}}"></script>
    <!-- popper -->
    <script src="{{asset('assets/plugins/js/popper.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('assets/plugins/js/bootstrap.min.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('assets/plugins/js/owl.carousel.js')}}"></script>
    <!-- validator -->
    <script src="{{asset('assets/plugins/js/validator.min.js')}}"></script>
    <!-- wow -->
    <script src="{{asset('assets/plugins/js/wow.min.js')}}"></script>
    <!-- mixin js-->
    <script src="{{asset('assets/plugins/js/jquery.mixitup.min.js')}}"></script>
    <!-- circle progress-->
    <script src="{{asset('assets/plugins/js/circle-progress.js')}}"></script>
    <!-- jquery nav -->
    <script src="{{asset('assets/plugins/js/jquery.nav.js')}}"></script>
    <!-- Fancybox js-->
    <script src="{{asset('assets/plugins/js/jquery.fancybox.min.js')}}"></script>
    <!-- Map api -->
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCRP2E3BhaVKYs7BvNytBNumU0MBmjhhxc"></script>
    <!-- isotope js-->
    <script src="{{asset('assets/plugins/js/isotope.pkgd.js')}}"></script>
    <script src="{{asset('assets/plugins/js/packery-mode.pkgd.js')}}"></script>
    <!-- Custom Scripts-->
    <script src="{{asset('assets/js/map-init.js')}}"></script>
    <script src="{{asset('assets/js/custom-scripts.js')}}"></script>


    <!-- ****************
      After neccessary customization/modification, Please minify 
      JavaScript/jQuery according to http://browserdiet.com/en/ for better performance
    **************** -->
    <!-- STYLE SWITCH STYLESHEET ONLY FOR DEMO -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
    <script type="text/javascript" src="{{asset('assets/js/styleswitcher.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/demo.js')}}"></script>
        <div class="demo-style-switch" id="switch-style">
    <a id="toggle-switcher" class="switch-button"><i class="fa fa-snowflake-o fa-spin"></i></a>
    <div class="switched-options">
    <ul>
        <li class="mh-demo-styles"> 
            <h4>Style One </h4>
            <ul>
                <li>
                    <a href="home-one.html"> <img src="{{asset('assets/images/h1w.png')}}" alt="" class="img-fluid"></a>
                </li>
                <li>
                    <a href="home-one-w.html"> <img src="{{asset('assets/images/h1.png')}}" alt="" class="img-fluid"></a>
                </li>
            </ul>
        </li>
        <li class="mh-demo-styles"> 
            <h4>Style Two </h4>
            <ul>
                <li>
                    <a href="home-two.html"> <img src="{{asset('assets/images/h2w.png')}}" alt="" class="img-fluid"></a>
                </li>
                <li>
                    <a href="home-two-w.html"> <img src="{{asset('assets/images/h2.png')}}" alt="" class="img-fluid"></a>
                </li>
            </ul>
        </li>                 
        
        <li class="mh-demo-styles"> 
            <h4>RTl</h4>
            <ul>
                <li>
                    <a href="home-rtl.html"> <img src="{{asset('assets/images/h3w.png')}}" alt="" class="img-fluid"></a>
                </li>
                <li>
                    <a href="home-rtl-w.html"> <img src="{{asset('assets/images/h3.png')}}" alt="" class="img-fluid"></a>
                </li>
            </ul>
        </li>                
    </ul>
    <div class="config-title">
        Colors :
    </div>
    <ul class="styles">
        <li><a href="#" onclick="setActiveStyleSheet('blue'); return false;" title="Blue">
            <div class="blue"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('purple'); return false;" title="Purple">
            <div class="purple"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('blue-munsell'); return false;" title="Blue Munsell">
            <div class="blue-munsell"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('orange'); return false;" title="Orange">
            <div class="orange"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('slate'); return false;" title="Slate">
            <div class="slate"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('green'); return false;" title="Green">
            <div class="green"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('yellow'); return false;" title="Yellow">
            <div class="yellow"></div></a>
        </li>
        <li><a href="#" onclick="setActiveStyleSheet('red'); return false;" title="Red">
            <div class="red"></div></a>
        </li>
    </ul>
    </div>
    </div>
</body>

</html>