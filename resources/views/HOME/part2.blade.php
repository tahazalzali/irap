<div class="container mt-4 mb-4"  style="background-color: #212B59">


<style>
    .aa {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

.aa:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

</style>
    <div class="row  m-5">
        {{-- IMG 1 --}}

        <div>
            <a href="#" class="previous aa">&laquo; Previous</a>
        </div>
        <div class="col-lg-3  col-md-4 d-flex mt-4 mb-4 align-items-stretch" style=" max-height: 100%">
            <div class="icon-box">
                <div>
                    <img style="" class="img-fluid w-100" src="{{ asset('media/services/service1.png') }}" alt="">

                </div>
            </div>
        </div>

           {{-- IMG 2 --}}
        <div class="col-lg-3  col-md-4 d-flex mt-4 mb-4 align-items-stretch" style=" max-height: 100%">
            <div class="icon-box">
                <div>
                    <img style="" class="img-fluid w-100" src="{{ asset('media/services/service2.png') }}" alt="">

                </div>
            </div>
        </div>

           {{-- IMG 3 --}}
        <div class="col-lg-3  col-md-4 d-flex mt-4 mb-4 align-items-stretch" style=" max-height: 100%">
            <div class="icon-box">
                <div>
                    <img style="" class="img-fluid w-100" src="{{ asset('media/services/service3.png') }}" alt="">

                </div>
            </div>
        </div>
           {{-- IMG 4 --}}
        <div class="col-lg-3  col-md-4 d-flex mt-4 mb-4 align-items-stretch" style=" max-height: 100%">
            <div class="icon-box">
                <div>
                    <img style="" class="img-fluid w-100" src="{{ asset('media/services/service4.png') }}" alt="">

                </div>
            </div>
        </div>


        <div>
            <a href="#" class="next aa">Next &raquo;</a>
        </div>
    </div>
</div>
