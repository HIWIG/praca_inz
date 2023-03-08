<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>




    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">System zarządzania dokumentacją technologiczną</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Strona główna</a>
            <a class="p-2 text-dark" href="#">{{auth()->user()->email}}</a>
        </nav>
        <a class="btn btn-outline-danger" href="logout">Wyloguj</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-2 pb-md-2 mx-auto text-center">
        <h1 class="">Strona główna</h1>
{{--        <p class="lead">Zadania, które możesz wykonać</p>--}}
    </div>

    <div class="container">
        <div class="row">
            <div class="card-deck mb-2 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Nowy dokument</h4>
                    </div>
                    <div class="card-body">
                        <i class="fas fa-folder-plus fa-10x color-blue-primary"></i>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Zakładanie dokumentacji dla nowego wyrobu</li>
                        </ul>
                        <a href="{{'addfile'}}"> <button type="button" class="btn btn-lg btn-block btn-outline-primary">Dodaj teczkę</button></a>
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Pobierz dokument</h4>
                    </div>
                    <div class="card-body">
                        <i class="fas fa-file-export fa-10x color-blue-primary"></i>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Pobranie dokumentu i przypisanie go do osoby, która pobiera</li>
                        </ul>
                        <a href="{{'takefile'}}"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Pobierz dokument</button></a>
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Zwrot dokumentu</h4>
                    </div>
                    <div class="card-body">
                        <i class="fas fa-file-import fa-10x color-blue-primary"></i>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Zwracanie dokumentu i przypisanie lokalizacji do szafy</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Zwróć dokument</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="card-deck mb-2 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Sprawdź lokalizację</h4>
                    </div>
                    <div class="card-body">
{{--                        <h1 class="card-title pricing-card-title">Obrazek </h1>--}}
                         <i class="fas fa-magnifying-glass fa-10x color-blue-primary"></i>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Sprawdzanie lokalizacji wybranego dokumentu</li>
                        </ul>
                        <a href="{{'files'}}"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Sprawdź lokalizację</button></a>
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Historia dokumentu</h4>
                    </div>
                    <div class="card-body">
                        <i class="fas fa-clock-rotate-left fa-10x color-blue-primary"></i>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Sprawdzanie historii dokumentu o wskazanym numerze</li>
                        </ul>
                        <a href="{{'changes'}}"> <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sprawdź historię</button> </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>
</html>
