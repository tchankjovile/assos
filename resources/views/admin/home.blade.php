@extends("templates.admin_dashboard.admin_dashboard_template")
@section("content")
    <h1 class="text-center">Bienvenue , {{auth('admin')->user()->fullname}}</h1>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-primary text-white">
                    <i class="fa fa-user"></i>
                </div>
                <div class="card-body">
                    <h4>Demandes D'adhesion ({{$adhesionsCount}})</h4>
                    <p>Nombre total des adhesions</p>
                    <a href="#" class="card-cta">Gerer les Adhesions <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-primary text-white">
                    <i class="fa fa-check"></i>
                </div>
                <div class="card-body">
                    <h4>Adhesions Validées ({{$validAdhesionsCount}})</h4>
                    <p>Nombre des adhesions déja validés</p>
                    <a href="#" class="card-cta">Gerer les adhesions validés <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-primary text-white">
                    <i class="fa fa-minus"></i>
                </div>
                <div class="card-body">
                    <h4>Adhesions pas encore valides ({{$nonValidadhesionsCount}})</h4>
                    <p>Nombre des adhesions non validés.</p>
                    <a href="#" class="card-cta">Gerer les adhesions non validées <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-primary text-white">
                    <i class="fa fa-user-tie"></i>
                </div>
                <div class="card-body">
                    <h4>Membres ({{$membresCount}})</h4>
                    <p>Listes des membres.</p>
                    <a href="#" class="card-cta">Acceder a la page de gestions des membres <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
