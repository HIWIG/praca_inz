<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pobieranie teczki</title>




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="text-center">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">System zarządzania dokumentacją technologiczną</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="{{'dashboard'}}">Strona główna</a>
        {{--                <a class="p-2 text-dark" href="#">{{$data->email}}</a>--}}
{{--        <a class="p-2 text-dark" href="#">{{$data->email}}</a>--}}
    </nav>
    <a class="btn btn-outline-danger" href="logout">Wyloguj</a>
</div>
<div class="container">
    <div class="col-12">
        <form action="{{'take-file'}}" method="post" class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal pt-8">Pobieranie teczki</h1>


            <div class="pt-3">




            <div class="pt-3">
                <label class="sr-only" for="rcpNumber">rcpNumber</label>
                <input type="number" id="rcpOsoby" name="rcpNumber" value="" placeholder="Twój Numer Karty RFID " readonly class="form-control">

                <div class="pt-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalRcpOsoba" onclick="focusInput()">Skanuj kartę RFID:
                    </button>

                </div>


                <span class="text-danger">@error('rcpNumber'){{$message}} @enderror</span>
            </div>

            <div class="pt-3">
                <label class="sr-only" for="rcpFileNumber">rcpNumber</label>
                <input type="number" id="rcpTeczki" name="rcpFileNumber" value="" placeholder="Numer Znacznika RFID Dokumentu" readonly class="form-control">

                <div class="pt-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalRcpTeczka" onclick="focusInput()">Skanuj znacznik RFID:
                    </button>

                </div>


                <span class="text-danger">@error('rcpNumber'){{$message}} @enderror</span>
            </div>

            <div id="ModalRcpOsoba" class="modal btn-lg" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button name="close-button" type="button" class="close" data-dismiss="modal">
                                &times;
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Zeskanuj kartę RFID</p>
                            <input onkeyup="rcpRead()" class="form-control" type="text" id="rcpNumber">
                        </div>
                        <div class="modal-footer" >
                            <button id="close-modal" type="button" class="btn btn-default" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div id="ModalRcpTeczka" class="modal btn-lg" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button name="close-button" type="button" class="close" data-dismiss="modal">
                                &times;
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Zeskanuj kartę RFID</p>
                            <input onkeyup="rcpRead2()" class="form-control" type="text" id="rcpNumber2">
                        </div>
                        <div class="modal-footer" >
                            <button id="close-modal" type="button" class="btn btn-default" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="pt-3">
                <label for="description" class="sr-only">name</label>
                <input type="text" name="description" value="" placeholder="Opis"  class="form-control">
                <span class="text-danger">@error('name'){{$message}} @enderror</span>
            </div>

                <div class="pt-3">
                    <select  for="locationId" class="form-control" name="locationId">
                        @foreach($locations as $loc)
                            <option value="{{$loc->id}}">{{$loc->name}}</option>
                        @endforeach
                    </select>
                </div>

            <div class="pt-3">
                <button type="submit" class="btn btn-lg btn-primary btn-block pt-8">Dodaj dokument</button>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/focusInput.js" type="text/javascript"></script>

</body>
</html>
