<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historia zmian</title>


    <link rel="stylesheet" href="css/style.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet" >



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.3/bootstrap-table.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.3/bootstrap-table.min.js"></script>

</head>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">System zarządzania dokumentacją technologiczną</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="{{'dashboard'}}">Strona główna</a>
        {{--                <a class="p-2 text-dark" href="#">{{$data->email}}</a>--}}
    </nav>
    <a class="btn btn-outline-danger" href="logout">Wyloguj</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-2 pb-md-2 mx-auto text-center">

    <p class="lead">Sprawdź historię dokumentu</p>
</div>





<div class="container">
    <table class="table" id="changesTable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Wyrób</th>
            <th>Użytkownik</th>
            <th>Typ</th>
            <th>Data zmiany</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($changes as $change)
            <tr>
                <td>{{ $change->changeId }}</td>
                <td>{{ $change->fileName }}</td>
                <td>{{ $change->userName }}</td>
                <td>{{ $change->type }}</td>
                <td>{{ $change->changeTime }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="js/paginate2.js"></script>




</body>
</html>
