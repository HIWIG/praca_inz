<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="text-center">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">System zarządzania dokumentacją technologiczną</h5>

</div>
<div class="container">
    <div class="col-12">

    <h1 class="h3 mb-3 font-weight-normal pt-8">Rejestracja</h1>
    <form action="{{route('register-user')}}" method="post" class="form-signin">
        @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf
        <div>
            <label for="name" class="sr-only ">Name</label>
            <input type="text" name="name" value="{{old('name')}}" placeholder="Imię"  class="form-control">
            <span class="text-danger">@error('name'){{$message}} @enderror</span>
        </div>
        <div class="pt-3">
            <label for="name" class="sr-only ">LastName</label>
            <input type="text" name="lastName" value="{{old('lastName')}}" placeholder="Nazwisko"  class="form-control">
            <span class="text-danger">@error('lastName'){{$message}} @enderror</span>
        </div>
        <div class="pt-3">
            <label for="email" class="sr-only ">email</label>
            <input type="text" name="email" value="{{old('email')}}" placeholder="Adres E-mail"  class="form-control">
            <span class="text-danger">@error('email'){{$message}} @enderror</span>
        </div>
        <div class="pt-3">
            <label for="password" class="sr-only ">pass</label>
            <input type="password" name="password" value="{{old('password')}}" placeholder="Hasło"  class="form-control">
            <span class="text-danger">@error('password'){{$message}} @enderror</span>
        </div>
        <div class="pt-3">
            <label  for="rcpNumber" class="sr-only ">rcp number</label>
            <input  type="number" id="rcpOsoby" name="rcpNumber" value="{{old('rcpNumber')}}" placeholder="Numer Karty RFID" readonly class="form-control">
            <span class="text-danger">@error('rcpNumber'){{$message}} @enderror</span>
            <div class="pt-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalRcpOsoba" onclick="focusInput()">Skanuj kartę RCP:
                </button>

            </div>
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
                            <p>Zeskanuj kartę RCP</p>
                            <input onkeyup="rcpRead()" class="form-control" type="text" id="rcpNumber">
                        </div>
                        <div class="modal-footer" >
                            <button id="close-modal" type="button" class="btn btn-default" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        <div class="pt-3">
            <button  class="btn btn-lg btn-primary btn-block " type="submit">Zarejestruj</button>
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
