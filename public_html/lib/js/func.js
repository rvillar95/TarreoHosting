function checkRut(rut) {
    var valor = rut.value.replace('.','');
    // Despejar Gui�n
    valor = valor.replace('-','');
    //Despejar Punto2 (Quito el punto de los miles que me queda)
    valor = valor.replace('.','');
    
    
    // Aislar Cuerpo y D�gito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv;
    
    // Si no cumple con el m�nimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    
    // Calcular D�gito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada d�gito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el M�ltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar M�ltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular D�gito Verificador en base al M�dulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;

   
    
    // Validar que el Cuerpo coincide con su D�gito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Invalido");  return false; }
   
   
    rut.setCustomValidity('');
}

function formateaRut(rut) {

    var actual = rut.value;
    if (actual != '' && actual.length > 1) {

        var sinPuntos = actual.replace('.', "");
        var actualLimpio = sinPuntos.replace(/-/g, "");
        var inicio = actualLimpio.substring(0, actualLimpio.length - 1);
        var rutPuntos = "";
        var i = 0;
        var j = 1;
        for (i = inicio.length - 1; i >= 0; i--) {
            var letra = inicio.charAt(i);
            rutPuntos = letra + rutPuntos;
            if (j % 3 == 0 && j <= inicio.length - 1) {
                rutPuntos = "." + rutPuntos;
            }
            j++;
        }
        var dv = actualLimpio.substring(actualLimpio.length - 1);
        rutPuntos = rutPuntos + "-" + dv;
     
    }
    rut.value= rutPuntos;
}
