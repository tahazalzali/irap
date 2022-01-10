
<footer style="background-image: url('{{asset('media/footerBack (3).png')}}'); color:white;" class="bg-light pt-5 mt-5 text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          {{-- <h5 class="text-uppercase">Footer text</h5> --}}

          <p>
            RUE 6, IMMEUBLE 169<br>
            B.P. 15, 1207 AIN AAR, METN-NORD, LIBAN<br>
            T+9614 910 866 |M+ 9613 271 881<br>
           <a href="" style="color: white"> <i class="fab fa-facebook"> </i></a>
           <a href="" style="color: white"> <i class="fab fa-instagram"></i></a>
           <a href="" style="color: white"> <i class="fab fa-twitter"></i></a>
                      RAPLB IRAP@IRAPLBORG
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-center">
          {{-- <h5 class="text-uppercase">Footer text</h5> --}}

       <img src="{{ asset('media/white (2).png') }}" style="max-height: 65px; max-width: 90px; " alt="" class="img-fluid">
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="{{asset('vendor/isotope-layout/isotope.pkgd.js')}}"></script>



<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@section('js')
@endsection


</body>
</html>
