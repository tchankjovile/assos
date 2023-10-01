@extends("layouts.frontLayout")
@section("content")
<div class="section sec-services">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
                <h2 class="heading text-primary">Nos Différentes prestations</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. </p>
            </div>
        </div>

        <div class="row">
            @foreach ($prestations as $prestation)

            <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up">
                <div class="service text-center">
                    <span class="bi-cash-coin"></span>
                    <div>
                        <h3>{{$prestation->nom}}</h3>
                        <p class="mb-4">{!! $prestation->description !!}. </p>
                        <p><a href="#" class="btn btn-outline-primary py-2 px-3">Read more</a></p>
                    </div>
                </div>

            </div>
            @endforeach


        </div>
    </div>
</div>
@endsection
