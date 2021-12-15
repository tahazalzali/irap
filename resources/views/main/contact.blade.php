@extends('layout.app')
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="container">
                <section class="border p-4 text-center mb-4">
                    <section class="text-center">
                        <div class="m-3 p-3">
                            <h3> <strong> COORDONNÉES </strong>DE LIRAP</h3>
                        </div>









                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4">
                                <h5 class="text-warning">Addresse</h5>






                                <p>
                                    Ain Aar- B.P 15, Metn Nord, Liban<br>
                                    https://googl/maps/NPjBRWBZ19n
                                </p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <h5 class="text-warning">Contact</h5>



                                <p>
                                    Phone + 961 4 925 025<br>
                                    Phone +961 4 910 866<br>
                                    Fax:+ 9614 910 867<br>
                                    Email irap@iraplb.com<br>
                                </p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <h5 class="text-warning">Horaires d'ouvertures</h5>


                                <p>Lundi - Vendredi: 08:30 - 0500 <br>
                                </p>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                    </section>
                </section>
            </div>
            <div>
                <div style="text-align: -webkit-center">
                    <div class="mt-5 mt-lg-0">
                      <div class="text-center"><h4>ENVOYEZ UN MESSAGE / LAISSEZ VOS COORDONNÉES</h4></div>
                        <form action="{{route('contact.store')}}" method="post" role="form" class="php-email-form m-auto row">
                            @csrf
                            @method('POST')
                            <div class="row col-md-6">
                                <div class="row form-group  mb-3">
                                    <label style="text-align: initial;"  for="name">Nom</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                        required>
                                </div>
                                <br>
                                <div class="row form-group mt-3 mt-md-0">
                                    <label style="text-align: initial;"  for="lastname">Prénom</label>

                                    <input type="text" class="form-control" name="lastname" id="lastname"
                                        placeholder="Prenom" required>
                                </div>
                                <div class=" row form-group mt-3">
                                    <label style="text-align: initial;"  for="subject">Sujet</label>

                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                            </div>

                            <div style="text-align: initial;"  class=" form-group p-0 col-md-6 mt-3">
                                <label  for="message">Message</label>

                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                                    <div class="pt-3 pb-3 text-end "><button class="btn" style="background-color: #EE7548;" type="submit">ENVOYER </button></div>
                            </div>
                            {{-- <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> --}}

                        </form>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </section><!-- End Contact Section -->
@endsection
