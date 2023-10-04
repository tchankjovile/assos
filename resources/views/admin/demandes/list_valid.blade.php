@extends("templates.admin_dashboard.admin_dashboard_template")
@section("content")
    <h2 class="text-center">Demandes D'adhesion validées</h2>
    <hr>

    <div class="card">
        <div class="card-header">
            Listes des demandes
        </div>
        <div class="card-body">
            @include("admin.demandes.includes.acceptedTab",['demandesValid' => $demandesValid])
        </div>
    </div>

@endsection
