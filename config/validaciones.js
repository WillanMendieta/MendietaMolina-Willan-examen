/*
autor: Willian Mendieta y Darwin León
fecha: 25/05/2021
*/



// Funcion Validar Solo 10 Numeros
function validarNumeros(elemento){
    if(elemento.value.length>0){
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1)
        console.log(miAscii)
        if(miAscii >=48 && miAscii <= 57){ //valida solo numeros entre 0 y 9
            return true
        }else{
            elemento.value = elemento.value.substring(0, elemento.value.length-1)
            return false
        }
    }else{
        return false
    }
}

