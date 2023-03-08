// $('#myModal').on('shown.bs.modal', function() {
//     $('#rcpNumer').trigger('focus')
// })


function focusInput() {
    document.getElementById("rcpNumber").focus();
}
function rcpRead() {

    $("#rcpNumber")[0].onpaste = e => e.preventDefault();
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
    $('.modal').modal('hide');
}
$('#ModalRcpOsoba').on('shown.bs.modal', function(e) {
    focusInput();
})

function focusInput2() {
    document.getElementById("rcpNumber2").focus();

}

function rcpRead2() {


    $("#rcpNumber2")[0].onpaste = e => e.preventDefault();
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
