// BOTON HAMBURGUESA
/**  Vamos a registrar un listener y vamos a escuchar mediante el DOM cargado y vamos a ejecutar una funcion (callback) **/
document.addEventListener('DOMContentLoaded',function() {
    eventListener(); 
    darkMode();
} ); 

// Funcion para el modo oscuro
function darkMode(){
    //logica para leer las preferencias del sistema
    const preferenciasDark = window.matchMedia('(prefers-color-scheme: dark)'); 
    if(preferenciasDark.matches){
        document.body.classList.add('dark');
    }else{
        document.body.classList.remove('dark');
    }
    preferenciasDark.addEventListener('change', function(){
        if(preferenciasDark.matches){
            document.body.classList.add('dark');
        }else{
            document.body.classList.remove('dark');
        }
    })

    //habilitar modo oscuro mediante el click en el icono
    const btnDarkMode = document.querySelector('.dark-mode');
    btnDarkMode.addEventListener('click', modoOscuro);

}

function eventListener(){
    //seleccionamos el div del menu mediante su clase y lo asignamos a una variable
    const mobileMenu = document.querySelector('.mobile-menu'); 
    // registramos un evento click y manda a llamar la funcion que posee la funcionalidad
    mobileMenu.addEventListener('click', navegacionResp); 
}



/*** FUNCIONES DE SISTEMA****/

//FUNCION QUE POSEE LA LOGICA DEL MENU HAMBURGUESA
function navegacionResp(){
    // seleccionamos la navegacion mediante su clase
    const navegacion = document.querySelector('.navegacion'); 
    //si el nav "navegacion" contiene la clase de mostrar...
    if(navegacion.classList.contains('mostrar')){
        //removemos la clase 'mostrar'
        navegacion.classList.remove('mostrar');
    } else{ 
        // se la agregamos
        navegacion.classList.add('mostrar'); 
    }

}

//FUNCION QUE POSEE LA LOGICA DEL DARK MODE
function modoOscuro(){
    const cuerpo = document.body;
    if(cuerpo.classList.contains('dark')){
        cuerpo.classList.remove('dark');
    }else{
        cuerpo.classList.add('dark');
    }
}