@extends("templates.admin_dashboard.admin_dashboard_template")
@section("content")
    <h2 class="text-center">Demandes D'adhesion Pas encore validées</h2>
    <hr>

    <div class="card">
        <div class="card-header">
            Listes des demandes pas encore validées
        </div>
        <div class="card-body">
            @include("admin.demandes.includes.refusedTab",['demandesNonValid' => $demandesNonValid])
        </div>
    </div>

@endsection
