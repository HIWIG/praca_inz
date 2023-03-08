<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="fontawesome/css/all.css" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>

<body>

<div class="container">
    <div class="row pt-5">
        <h3>Pobieranie teczki</h3>
    </div>
    <div class="row pt-5">
        <form action="take_doc_form.php" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="form-group row">
                        <div class="row">
                            <div class="col-12">
                                <h5>Karta RPC Osoby:</h5>
                            </div>
                            <div class="col-12">
                                <i class="fas fa-id-card fa-10x color-blue-primary"></i>
                            </div>
                        </div>
                        <input name="rcpOsoby" id="rcpOsoby" type="text" readonly class="form-control" value="" placeholder="Zbliż kartę RCP do czytnika">
                        <div class="pt-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalRcpOsoba" onclick="focusInput()">Skanuj kartę RCP:
                            </button>
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
                                        <input onkeyup="barcodeRead()" class="form-control" type="text" id="rcpNumber">
                                    </div>
                                    <div class="modal-footer">
                                        <button id="close-modal" type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 pl-5">

                    <div class="form-group row">
                        <div class="row">

                            <div class="col-12">
                                <h5>Numer RFID Teczki:</h5>

                            </div>
                            <div class="col-12">
                                <i class="far fa-folder-open fa-10x color-blue-primary"></i>
                            </div>
                        </div>

                        <input name="rcpTeczki" id="rcpTeczki" type="text" readonly class="form-control" value="" placeholder="Zbliż kartę RCP do czytnika">

                        <div class="pt-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalRcpTeczka" onclick="focusInput2()">Skanuj RFID:
                            </button>
                        </div>
                        <div id="ModalRcpTeczka" class="modal btn-lg" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button name="close-button" type="button" class="close" data-dismiss="modal">
                                            &times;
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Zeskanuj kartę RCP</p>
                                        <input onkeyup="barcodeRead2()" class="form-control" type="text" id="rcpNumber2">
                                    </div>
                                    <div class="modal-footer">
                                        <button id="close-modal" type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <label>Lokalizacja</label>


            <div class="pt-5">
                <button type="submit " name="submit " class="btn btn-outline-primary ">Pobierz teczkę</button>
            </div>
        </form>

    </div>
</div>

<footer class="footer bg-light ">
    <div class="container ">
        <span class="text-footer center">System zarządzania dokumentacją technologiczną</span>
    </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
<script src="js/modal_close.js" type="text/javascript"></script>
<script src="js/focusInput.js" type="text/javascript"></script>


</body>

</html>
