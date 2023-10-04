@extends("templates.admin_dashboard.admin_dashboard_template")
@section("content")
    <h2 class="text-center">Toutes les Demandes d'adhesion du systeme</h2>
    <hr>

    <div class="card">
        <div class="card-header">
            toutes les demandes du systeme
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="accepted-tab" data-bs-toggle="tab" data-bs-target="#accepted" type="button" role="tab" aria-controls="home" aria-selected="true">Les démandes déja acceptées</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="rejected-tab" data-bs-toggle="tab" data-bs-target="#refused" type="button" role="tab" aria-controls="profile" aria-selected="false">Les démandes pas encore acceptées</button>
                </li>
            </ul>
            <hr class="text-danger"/>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="accepted" role="tabpanel" aria-labelledby="home-tab">
                    @include("admin.demandes.includes.acceptedTab")
                </div>
                <div class="tab-pane fade" id="refused" role="tabpanel" aria-labelledby="profile-tab">
                    @include("admin.demandes.includes.refusedTab")
                </div>

            </div>
        </div>
    </div>

@endsection
