<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>CNI</th>
        <th>Date de demande</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($demandesNonValid as $demande)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$demande->nom}}</td>
            <td>{{$demande->prenom}}</td>
            <td>{{$demande->email}}</td>
            <td>{{$demande->no_cni}}</td>
            <td>{{$demande->created_at->isoFormat('lll')}}</td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                    <form action="{{route('admin.demandes.accepter',[$demande->id])}}" method="post">
                        @csrf
                        <button class="btn btn-success">Approuver</button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
