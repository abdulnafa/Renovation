
<!-- Footer  -->

<div class="container-fluid  px-0">

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #424242"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: #363636"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        @isset($footerdetail)
        @if($footerdetail->facebook!=null)
        <a href="{{$footerdetail->facebook}}" class="text-white me-4">
          <i class="fa fa-facebook-f"></i>
        </a>
        @endif()
        @if($footerdetail->twitter!=null)
        <a href="{{$footerdetail->twitter}}" class="text-white me-4">
          <i class="fa fa-twitter"></i>
        </a>
        @endif()
        @if($footerdetail->google!=null)
        <a href="{{$footerdetail->google}}" class="text-white me-4">
          <i class="fa fa-google"></i>
        </a>
        @endif()
        @if($footerdetail->instagram!=null)
        <a href="{{$footerdetail->instagram}}" class="text-white me-4">
          <i class="fa fa-instagram"></i>
        </a>
        @endif()
        @if($footerdetail->linkedin!=null)
        <a href="{{$footerdetail->linkedin}}" class="text-white me-4">
          <i class="fa fa-linkedin"></i>
        </a>
        @endif()
        @if($footerdetail->github!=null)
        <a href="{{$footerdetail->github}}" class="text-white me-4">
          <i class="fa fa-github"></i>
        </a>
        @endif()
        @endisset()
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold"><img src="{{asset('assets/images/logo.png')}}" class="img-fluid"/></h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: white; height: 2px"
                />
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
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: white; height: 2px"
                />
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
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: white; height: 2px"
                />
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
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: white; height: 2px"
                />
                @isset($footerdetail)
            <p><i class="fa fa-home mr-3"></i>  @if($footerdetail->address!=null) {{$footerdetail->address}}  @endif()</p>
            <p><i class="fa fa-envelope mr-3"></i> @if($footerdetail->mail!=null) {{$footerdetail->mail}}  @endif()</p>
            <p><i class="fa fa-phone mr-3"></i> @if($footerdetail->number!=null) {{$footerdetail->number}}  @endif()</p>
            <p><i class="fa fa-print mr-3"></i> @if($footerdetail->ptcl!=null) {{$footerdetail->ptcl}}  @endif()</p>
            @endisset()
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2023 Copyright:
      <a class="text-white" href="{{Route('front.index')}}"
         >Renovation</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</div>




<!-- Jquery  -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> 
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Animated text  -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="{{asset('build/assets/app-a86d8438.js')}}"></script>
<script src="{{asset('assets/js/file.js')}}"></script>
<!-- JavaScript Bundle with Popper -->

   @livewireScripts
</body>
</html>