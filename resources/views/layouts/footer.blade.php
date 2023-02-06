<!-- Footer  -->

<div class="container-fluid  px-0">




    <!-- Footer -->
    <footer class="text-lg-start text-white pt-2 px-md-0 ps-3 pe-2" style="background-color: #424242">

        <div class="px-md-5">


            <!-- Section: Links  -->
            <section class="">
                <div class="  text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold"><img src="{{asset('assets/images/logo.png')}}"
                                    class="img-fluid" /></h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: white; height: 2px" />
                            <p>
                                Here you can use rows and columns to organize your footer
                                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Products</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: white; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">Kitchen</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Bathrooms</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">BedRooms</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Office Rooms</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Useful links</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: white; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: white; height: 2px" />
                            @isset($footerdetail[0])
                            <div class="row py-1">
                                <div class="col-2"><i class="fa fa-home mr-3"></i></div>
                                @if($footerdetail[0]->address!=null) <div class="col">{{$footerdetail[0]->address}} </div>
                                @endif()
                            </div>

                            <div class="row py-1">
                                <div class="col-2"><i class="fa fa-envelope mr-3"></i></div>
                                @if($footerdetail[0]->mail!=null) <div class="col-10">{{$footerdetail[0]->mail}} </div>
                                @endif()
                            </div>


                            <div class="row py-1">
                                <div class="col-2"><i class="fa fa-phone mr-3"></i></div>
                                @if($footerdetail[0]->number!=null) <div class="col">{{$footerdetail[0]->number}} </div>
                                @endif()
                            </div>


                            <div class="row py-1">
                                <div class="col-2"><i class="fa fa-print mr-3"></i></div> @if($footerdetail[0]->ptcl!=null)
                                <div class="col">{{$footerdetail[0]->ptcl}} </div> @endif()
                            </div>





                            @endisset()
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Section: Social media -->
            <section class="d-flex justify-content-between p-4 copyrightfooter" style="background-color: #424242">



                <!-- Left -->
                <div class="me-md-5">
                    <span>© 2023 Copyright: Renovation</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div class="footerrightsocial pe-md-5">
                    @isset($footerdetail[0])
                    @if($footerdetail[0]->facebook!=null)
                    <a href="{{$footerdetail[0]->facebook}}" class="text-white me-md-4 me-2">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    @endif()
                    @if($footerdetail[0]->twitter!=null)
                    <a href="{{$footerdetail[0]->twitter}}" class="text-white me-md-4 me-2">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    @endif()

                    @if($footerdetail[0]->instagram!=null)
                    <a href="{{$footerdetail[0]->instagram}}" class="text-white me-md-4 me-2">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    @endif()
                    @if($footerdetail[0]->linkedin!=null)
                    <a href="{{$footerdetail[0]->linkedin}}" class="text-white me-md-4 me-2">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    @endif()

                    @endisset()
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->







        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</div>

<!-- Footer Sticky  bottom  -->
<div class="container-fluid   footerstickybottom">

    <div class="row">
        <div class="col-md-6   d-flex align-items-center justify-content-md-start justify-content-center left">
            <ul class="d-flex list-inline mb-0">

                <li class="mx-lg-3 mx-2"> <i class="fa-regular fa-envelope"></i><span>
                        @isset($footerdetail[0]) @if($footerdetail[0]->mail!=null) {{$footerdetail[0]->mail}}

                        @endif
                        @endisset()
                    </span></li>
                <li> <i class="bi bi-telephone"></i><span>
                        @isset($footerdetail[0]) @if($footerdetail[0]->number!=null) {{$footerdetail[0]->number}}

                        @endif
                        @endisset()</span></li>
            </ul>

        </div>
        <div class="col-md-6 right  d-flex align-items-center justify-content-md-end justify-content-center">
            <ul class="d-flex list-inline justify-content-center  mb-0 ">
                @isset($footerdetail[0])
                @if($footerdetail[0]->twitter!=null)
                <a href="{{$footerdetail[0]->twitter}}" target="_blank">
                    <li class="mx-2">
                        <i class="fa-brands fa-twitter"></i>
                        <!-- <img src="{{asset('assets/images/index/twitter.svg')}}" class="img-fluid me-2" /> -->
                        <!-- <span style="color: #03A9F4;">Twitter</span> -->
                    </li>
                </a>
                @endif()
                @endisset()

                @isset($footerdetail[0])
                @if($footerdetail[0]->facebook!=null)
                <a href="{{$footerdetail[0]->facebook}}" target="_blank">
                    <li class="mx-2">
                        <i class="fa-brands fa-facebook"></i>
                        <!-- <img src="{{asset('assets/images/index/facebook.svg')}}" class="img-fluid me-2" /> -->
                        <!-- <span style="color: #1877F2;">Facebook</span> -->
                    </li>
                </a>

                @endif()
                @endisset()

                @isset($footerdetail[0])
                @if($footerdetail[0]->instagram!=null)
                <a href="{{$footerdetail[0]->instagram}}" target="_blank">

                    <li class="mx-2">
                        <i class="fa-brands fa-instagram"></i>
                        <!-- <img src="{{asset('assets/images/index/instagram.svg')}}" class="img-fluid me-2" /> -->
                        <!-- <span style="color: #E36B82;">Instagram</span> -->
                    </li>

                    @endif()
                    @endisset()



                    @isset($footerdetail[0])
                    @if($footerdetail[0]->linedin!=null)
                    <a href="{{$footerdetail[0]->linkedin}}" target="_blank">




                        <li class="mx-2">
                            <i class="fa-brands fa-linkedin"></i>
                            <!-- <img src="{{asset('assets/images/index/linkedin.svg')}}" class="img-fluid me-2" /> -->
                            <!-- <span style="color: #6563FF;">Linkedin</span> -->
                        </li>
                        @endif()
                        @endisset()

                        @isset($footerdetail[0])
                        @if($footerdetail[0]->github!=null)

                        <a href="{{$footerdetail[0]->github}}" target="_blank">

                            <li class="mx-2">
                                <i class="fa-brands fa-github"></i>
                                <!-- <img src="{{asset('assets/images/index/github.svg')}}" class="img-fluid me-2" /> -->
                                <!-- <span style="color: #343A40;">Github</span> -->
                            </li>
                            @endif()
                            @endisset()


            </ul>
        </div>
    </div>

</div>



<!-- Jquery  -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Animated text  -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<!-- Swiper js  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- -------------------------  -->
<script src="{{asset('build/assets/app-a86d8438.js')}}"></script>
<script src="{{asset('assets/js/file.js')}}"></script>
<!-- JavaScript Bundle with Popper -->

@livewireScripts
</body>

</html>