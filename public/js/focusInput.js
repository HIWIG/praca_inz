// $('#myModal').on('shown.bs.modal', function() {
//     $('#rcpNumer').trigger('focus')
// })


function focusInput() {
    document.getElementById("rcpNumber").focus();
}
function barcodeRead() {

    let inputStart, inputStop;

    $("#rcpNumber")[0].onpaste = e => e.preventDefault();
    // handle a key value being entered by either keyboard or scanner
    var lastInput

    let checkValidity = () => {
        if ($("#rcpNumber").val().length < 7) {
            $("#rcpNumber").val('')
        } else {
            document.getElementById("rcpOsoby").value = $("#rcpNumber").val();
            modalClose();
        }
        timeout = false
    }

    let timeout = false
    $("#rcpNumber").keypress(function(e) {
        if (performance.now() - lastInput > 1000) {
            $("#rcpNumber").val('')
        }
        lastInput = performance.now();
        if (!timeout) {
            timeout = setTimeout(checkValidity, 200)
        }
        if ($("rcpNumber").val().length > 7) {
        }
    });
}
function modalClose() {
    $('.modal-overlay').hide();
    //hides all modal boxes when escape key pressed
    $('.modal').modal('hide');
}
$('#ModalRcpOsoba').on('shown.bs.modal', function(e) {
    focusInput();
})

function focusInput2() {
    document.getElementById("rcpNumber2").focus();

}

function barcodeRead2() {

    let inputStart, inputStop;

    $("#rcpNumber2")[0].onpaste = e => e.preventDefault();
    // handle a key value being entered by either keyboard or scanner
    var lastInput

    let checkValidity = () => {
        if ($("#rcpNumber2").val().length < 7) {
            $("#rcpNumber2").val('')
        } else {
            document.getElementById("rcpTeczki").value = $("#rcpNumber2").val();
            modalClose();
        }
        timeout = false
    }

    let timeout = false
    $("#rcpNumber2").keypress(function(e) {
        if (performance.now() - lastInput > 1000) {
            $("#rcpNumber2").val('')
         }
         lastInput = performance.now();
         if (!timeout) {
             timeout = setTimeout(checkValidity, 200)
         }
         if ($("rcpNumber2").val().length > 7) {

         }
     });


 }






$('#ModalRcpTeczka').on('shown.bs.modal', function(e) {
    focusInput2();
})
