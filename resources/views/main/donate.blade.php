@extends('layout.app')
@section('content')
<div>
    <div style="text-align: -webkit-center">
        <div class="mt-5 mt-lg-0">
          <div class="text-center"><h4>MERCI POUR VOTRE SUPPORT! </h4></div>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form m-auto row">
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
                        <label style="text-align: initial;"  for="email"> Prénom</label>

                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>
                    <div class=" row form-group mt-3">
                        <label style="text-align: initial;"  for="subject">Montant de Donation /$</label>

                        <input type="text" class="form-control" name="subject" id="subject"
                            placeholder="Subject" required>
                    </div>
                </div>

                <div style="text-align: initial;"  class=" form-group p-0 col-md-6 mt-3">
                    <label  for="message">Message</label>

                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"
                        required></textarea>
                        <div class="pt-3 pb-3"><button class="btn btn-warning" type="submit">ENVOYER </button></div>
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

@endsection
