function validar() {
    debugger
    var nombre = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    expresion= /\w+@\w+\.+[a-z]]/;


    if(nombre === "" || email === "" || mobile === ""){
        alert("Todos los campos son obligatorios");
        return false;
    } else if(nombre.length > 30){
        alert("El nombre ingresado es muy largo");
        return false;
    } else if(email.length>100){
        alert("El correo ingresado es muy largo");
        return false;
    } else if(expresion.test(email)){
        alert("El correo no es valido");
        return false;
    } else if(mobile.length>12){
        alert("El telefono ingresado es muy largo");
        return false;
    } else if(isNaN(mobile)){
        alert("El telefono ingresado no es numerico");
        return false;
    }
}



function permitirSoloNumeros(imput) {
    $("#" + imput).on('keypress', function (event) {
        //Compatibilidad chrome firefox
        var key = (window.event) ? event.keyCode : event.which;
        if (!(key === 8                   // backspace
            || key === 9                  // tab
            || key === 17                 // ctrl
            || key === 46                 // delete
            || (key >= 48 && key <= 57)  // numbers on keyboard
            || (key === 65 && (event.ctrlKey === true || event.metaKey === true))        // Allow: Ctrl+A, Command+A
            || (key === 65 && prevKey === 17 && prevControl === event.currentTarget.id))    // ctrl + a, on same control
        ) {
            event.preventDefault();     // Prevent character input
        }
        else {
            prevKey = key;
            prevControl = event.currentTarget.id;
        }
    }).bind('keyup paste', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
}