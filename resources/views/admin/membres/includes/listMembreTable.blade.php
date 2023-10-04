<table class="table table-bordered datatable">
    <thead>
    <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Cni</th>
        <th>Role</th>
        <th>Demande le</th>
        <th>Adherer le</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($membres as $membre)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$membre->nom}}</td>
            <td>{{$membre->prenom}}</td>
            <td>{{$membre->email}}</td>
            <td>{{$membre->no_cni}}</td>
            <td>{{$membre->role->libelle}}</td>
            <td>{{$membre->created_at->isoFormat('ll')}}</td>
            <td>{{$membre->updated_at->isoFormat('ll')}}</td>
            <td>
                <div class="btn-group btn-group-sm">
                    <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                    <button class="btn btn-success"><i class="fa fa-pen"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
