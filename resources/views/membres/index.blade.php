<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF_8">
    <title> ASSOS crud membre</title>
    <link rel="stylesheet" href="https://stackpath.bootsstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>ASSOSiation APDTA</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{route('membres.create)}}> Create Membre </a>
                </div>
            </div>
        </div>
        @if ($message = sesseion::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>nom Membre</th>
                    <th>email Membre</th>
                    <th width="280px">Action<.th>
                </tr>
            </thead>
            <tbody>
                @foreach ($membres as $membre)
                    <tr>
                        <td>{{ $membre->id}}</td>
                        <td>{{ $membre->nom}}</td>
                        <td>{{ $membre->prenom}}</td>
                        <td>{{ $membre->email}}</td>
                        <td>{{ $membre->profession}}</td>
                        <td>{{ $membre->telephone}}</td>
                        <td>
                            <form action="{{ route('membres.destroy' , $membre->id)}}" method= "post">
                                <a class="btn btn-primary" href="{{ route('membres.edit' ,$membre->id) }}>Edit</a>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $memebres->links() !!}
    </div>
</body>
</html>
