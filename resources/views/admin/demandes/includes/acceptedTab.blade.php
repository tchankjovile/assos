<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>CNI</th>
        <th>Date de demande</th>
        <th>Approuve le</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($demandesValid as $demande)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$demande->nom}}</td>
            <td>{{$demande->prenom}}</td>
            <td>{{$demande->email}}</td>
            <td>{{$demande->no_cni}}</td>
            <td>{{$demande->created_at->isoFormat('ll')}}</td>
            <td>{{$demande->updated_at->isoFormat('ll')}}</td>
            <td>
                <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
