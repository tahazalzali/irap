<!-- Jumbotron -->
@section('content')
    <!-- Background image -->
    @if ($message = Session::get('success'))
        <div class="container">
            <div class="alert alert-primary" role="alert">
                {{ $message }}
            </div>
        </div>
    @endif
    {{-- DIV 1 --}}

    <div class="row" style="background: url('{{ asset('media/quesan/Repeat Grid 2.png') }}') no-repeat ; min-height:700px;width:100%
                 -webkit-background-size: cover;

                  background-size: cover; ">
        <div class="col-sm-5 col-10 offset-lg-2 mt-auto mb-auto pb-4 ">
            <div class="pt-3 pb-3 mt-4 mb-4">
                <h1 style="color: #212B59"> L’ aventure prend
                    naissance sous<strong> L’œil
                        vigilant</strong> d’une mère incomparable:
                    la vierge Marie</h1>
            </div>
            <div>
                <p style="color: #787F79">Lors du pèlerinage d’un groupe de handicapés du Liban à Lourdes en 1960, deux
                    jeunes
                    filles promettent de vivre l’expérience d’une fraternité réelle solidaires sous un même toit.
                    L’ aventure prend naissance sous l’œil vigilant d’une mère incomparable : la vierge Marie.

                    Dès le premier jour, tout est placé sous le signe du partage, et cela continue jusqu’à maintenant.
                    Les handicapés deviennent plus nombreux, les bénévoles aussi, et les amis se pressent pour soutenir,
                    aider
                    et renforcer l’équipe. Les enfants arrivent, bousculant prévisions et programmes établis. Très vite, les
                    enfants sourds réclament leur droit à la ‘reconnaissance’ à l’écoute et à la communication.

                    En 1963, s’ouvre la première classe spécialisée pour sourds, d’avant-garde à l’époque.
                </p>
            </div>
                <div style="color: #212B59">
                    <a class="btn text-white btn-lg" style=" background-color: #EE7548 ;">VOIR PLUS</a>
                </div>
        </div>

    </div>

    {{-- END DIV 1 --}}



    {{-- DIV 2 --}}
    <div class="row" style="background :  url('{{ asset('media/blueback (2).png') }}')   ; min-height:700px;width:100%
             ">
        <div class="col-8 m-auto text-center ">
            <h1 style="color: #ffffff"> <strong>MISSION ET </strong> VALEURS</h1>

            <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of
                type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software .

                Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
    <!-- Background image -->
    <!-- Background image -->
    <!-- Jumbotron -->
@stop
