function hacer(){
    var aLetras = new Array('A', 'B', 'C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    var aNumeros = new Array('1', '2', '3','4','5','6','7','8','9','0');
    var cLetra = "";
    var cNumero = "";
    var creado = "";
    
    for (let index = 0; index < 3; index++) {

        cLetra = aLetras[Math.floor(Math.random()*aLetras.length)];
        cNumero = aNumeros[Math.floor(Math.random()*aNumeros.length)];
        creado += cLetra+cNumero;
        
    }
    
    cajaLetra = document.getElementById("campo1");
    cajaLetra.value = cLetra;
    cajaCombinada = document.getElementById("campo2");
    cajaCombinada.value = creado;
    }

hacer();