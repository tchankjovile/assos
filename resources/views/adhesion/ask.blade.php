@extends("layouts.frontLayout")
@section("content")
<div class="container my-4" id="main">
    <h4>Page de Demande d'adhesion</h4>
<hr>
<div class="card">
    <div class="card-header">Remplir le formulaire</div>
    <div class="card-body">
        <form action="{{route('adhesion.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label for="nom">Nom</label>
                <input required type="text" name="nom" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="prenom">Prenom</label>
                <input required type="text" name="prenom" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="email">email</label>
                <input required type="email" name="email" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="no_cni">Numero Cni</label>
                <input required type="text" minlength="11" maxlength="11" required name="no_cni" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="ville">Ville</label>
                <input required type="text" name="ville" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="pays">Pays</label>
                <input required type="text" name="pays" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="profession">Profession</label>
                <input required type="text" name="profession" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="date_naissance">Date de naissance</label>
                <input required type="date" name="date_naissance" class="flatpickr form-control">
            </div>
            <div class="form-group mb-2">
                <label for="photo">Photo</label>
                <input required type="file" accept="image/*" id="photo" name="photo" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="photo_cni">Photo de la Cni </label>
                <input type="file" required accept="image/*" id="photo_cni" name="photo_cni" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="sexe">Sexe</label>
                <select name="sexe" required class="form-control form-select" id="sexe">
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>
            </div>
            <hr>
            <div class="mt-3 d-flex justify-content-between">
                <button type="button" class="btn btn-danger">
                    <i class="fas fa-trash"></i> Reset
                </button>
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Demander
                </button>

            </div>
        </form>
    </div>
</div>

</div>
@endsection

@push("scripts")
    <script>
        $('.flatpickr').flatpickr()
    </script>
@endpush
