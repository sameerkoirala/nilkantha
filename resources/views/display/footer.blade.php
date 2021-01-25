<!-- footer -->

<footer class="footer abtUsFooter" >

    <!-- top footer starts: navigation links and contact  -->
    <div class="container-fluid">

        <div class="row footer_content">

            <div class="col-sm-12 col-md-6  ">
                <h4 >Nilkantha School</h4>
                <p class="mt-3 "> Nilkantha Numuna Secondary School, located in Dhading, is the government desinated school of Nepal.</p>
            </div>
<!--Multiple Column LG-->
            <div class="col-6 col-md-3 mb-4 mx-auto pc-only ">
                <h6  >Common Links</h6>
                <div class="row">

                  <div class="col-md-5 col-sm-3">
                    <ul class="footer-links">
                        <li ><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/view/about_us') }}">About Us</a></li>
                        <li><a href="{{ url('/view/courses') }}">Courses</a></li>
                        <li><a href="{{ url('/view/news') }}">News</a></li>
                        <li><a href="{{ url('/view/events') }}">Events</a></li>
                        <li><a href="{{ url('/view/notices') }}">Notices</a></li>

                      </ul>
                  </div>
                  <div class="col-md-5 col-sm-3">
                    <ul class="footer-links">
                      <li><a href="{{ url('/view/community') }}">Community</a></li>
                      <li><a href="{{ url('/view/nccs') }}">NCCS</a></li>
                      <li><a href="{{ url('/students/alumni') }}">Alumni</a></li>
                      <li><a href="{{ url('/view/admission') }}">Admission</a></li>
                      <li><a href="{{ url('/view/galleries') }}">Gallery</a></li>
                      <li><a href="{{ url('/contacts') }}">Contact Us</a></li>
                  </ul>
              </div>

                </div>

          </div>
<!--Multiple Column-->

<!--Multiple Column SM Screen-->
            <div class="col-6 col-md-3 mb-4 mx-auto sm-only ">
                <h6  >Common Links</h6>



                    <ul class="footer-links">
                        <li ><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/view/about_us') }}">About Us</a></li>
                        <li><a href="{{ url('/view/courses') }}">Courses</a></li>
                        <li><a href="{{ url('/view/news') }}">News</a></li>
                        <li><a href="{{ url('/view/events') }}">Events</a></li>
                        <li><a href="{{ url('/view/notices') }}">Notices</a></li>
                        <li><a href="{{ url('/view/community') }}">Community</a></li>

                      <li><a href="{{ url('/view/nccs') }}">NCCS</a></li>
                      <li><a href="{{ url('/students/alumni') }}">Alumni</a></li>
                      <li><a href="{{ url('/view/admission') }}">Admission</a></li>
                      <li><a href="{{ url('/view/galleries') }}">Gallery</a></li>
                      <li><a href="{{ url('/contacts') }}">Contact Us</a></li>
                  </ul>




          </div>
<!--Multiple Column-->
            <div class="col-6 col-md-3 ">
                <h6 >Contact Us</h6>
                <ul class="footer-links">
                    <li><span aria-hidden="true" class="fas fa-map-marker-alt fa-sm mr-2"></span>
                        {{ !empty(Illuminate\Support\Facades\Config::get('contact')->address) ? Illuminate\Support\Facades\Config::get('contact')->address : 'Nilkantha, Dhading, Nepal' }}
                    </li>
                    <li><span aria-hidden="true" class="fas fa-phone fa-sm mr-2" ></span>
                        {{ !empty(Illuminate\Support\Facades\Config::get('contact')->phone) ? Illuminate\Support\Facades\Config::get('contact')->phone : '01-0520106' }}
                    </li>
                    <li><span aria-hidden="true" class="far fa-envelope fa-sm mr-2"></span>
                        {{ !empty(Illuminate\Support\Facades\Config::get('contact')->email) ? Illuminate\Support\Facades\Config::get('contact')->email : 'info@nilkantha.com' }}
                    </li>
                </ul>
            </div>

        </div>
        <hr class="small"><!-- underline -->

    </div>
    <!-- end of top footer -->


    <!-- start of bottom part of the footer -->
    <div class="container-fluid" >

        <div class="row footer_content">

            <div class="col-md-8 col-sm-6 col-xs-12 " >
                <p class="copyright-text">Copyright &copy; 2020 Nilkantha School, All Rights Reserved</p>
            </div>

            <div class="col-md-4 col-sm-6 col-12 inline ">
                <ul class="social-icons ">
                    <li ><a class="facebook"
                            href="{{ !empty(Illuminate\Support\Facades\Config::get('contact')->facebookPage) ? Illuminate\Support\Facades\Config::get('contact')->facebookPage : 'https://www.facebook.com/' }}">
                            <i class="fab fa-facebook-f "></i></a></li>
                    <li ><a class="youtube"
                            href="{{ !empty(Illuminate\Support\Facades\Config::get('contact')->youtubeLink) ? Illuminate\Support\Facades\Config::get('contact')->youtubeLink : 'https://www.youtube.com/' }}">
                            <i class="fab fa-youtube "></i></a></li>
                </ul>
            </div>

        </div>

    </div>
    <!--  end of bottom part of footer -->

</footer>

</body>
</html>
