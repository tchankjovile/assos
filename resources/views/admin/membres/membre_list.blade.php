@extends("templates.admin_dashboard.admin_dashboard_template")
@section("content")
    <h2 class="text-center">Listes des Membres de l'application</h2>
    <hr>

    <div class="card">
        <div class="card-header">
            Tous les membres dé l'application
        </div>
        <div class="card-body">
            @include("admin.membres.includes.listMembreTable",['membres' => $membres])
        </div>
    </div>

@endsection
