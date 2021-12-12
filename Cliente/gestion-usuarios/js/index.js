toastr.options.preventDuplicates = true

function inicioS(){
    let usua=document.getElementById("nombre_usuario1");
    let contr=document.getElementById("Contrasena1");
    let data=new FormData()
    if(usua.value=="" || contr.value==""){
        alert("Ingrese Usuario y Contraseña");

    }else{
    data.append("usu", usua.value)
    data.append("contra", contr.value)
    $.ajax({
        url: "http://127.0.0.1:9200/Servidor/inicio.php",
        data,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        success: res => {
            if(res != 0){
                alert("Sesion Iniciada");
                window.location.href="http://127.0.0.1:9200/Servidor/sesion.php"


            }else{
                alert("Usuario o Contraseña Incorrecta");
            }
        }
    })
    }

}
function moddatos(){
    let nombre=document.getElementById("nombre1");
    let apelli=document.getElementById("apellido1");
    let telef=document.getElementById("telefono1");

    let data=new FormData()
    data.append("nombre", nombre.value)
    data.append("apelli", apelli.value)
    data.append("telef", telef.value)
    $.ajax({
        url: "http://127.0.0.1:9200/Servidor/moddatos.php",
        data,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        success: res => {
            if(res != 0){
                alert("Datos Modificados");
                window.location.href="http://127.0.0.1:9200/Servidor/sesion.php"


            }else{
                alert("Error al modificar los Datos");
            }
        }
    })

}
function modificarD(){
  
    window.location.href="http://127.0.0.1:9200/Servidor/mdatos.php";
}
function Cerrar(){
    alert("Se Cerrara la Sesion");
    window.location.href="http://127.0.0.1:9200/Servidor/cerrarC.php";
}
function EliminarC(){
    alert("Se Elimino la Cuenta");
    window.location.href="http://127.0.0.1:9200/Servidor/Eliminar.php";
}

function EliminarU(cedula){
    let data=new FormData()
    data.append("cedula", cedula)
    
    $.ajax({
        url: "http://127.0.0.1:9200/Servidor/eliminaru.php",
        data,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        success: res => {
            if(res != 0){
                alert("EL Usuario Fue Eliminado");
                window.location.href="http://127.0.0.1:9200/Servidor/sesion.php"


            }else{
                alert("Error al modificar los Datos");
            }
        }
    })
}

function Registrar(){
    let nom=document.getElementById("nombre1");
    let cedu=document.getElementById("cedula1");
    let tele=document.getElementById("telefono1");
    let apelli=document.getElementById("apellido1");
    let emai=document.getElementById("email1");
    let contra=document.getElementById("contrasena1");

    if(nom.value=="" || cedu.value=="" || tele.value=="" || apelli=="" || emai.value=="" || contra.value==""){
        alert("Digite todos los Campos");
    }else{

    let data=new FormData()
    data.append("nomb",nom.value)
    data.append("cedu",cedu.value)
    data.append("tele",tele.value)
    data.append("apelli",apelli.value)
    data.append("emai",emai.value)
    data.append("contra",contra.value)
    $.ajax({
        url: "http://127.0.0.1:9200/Servidor/registro.php",
        data,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        success: res => {
            if(res != 0){
                alert("Cuenta registrada Correcta mente");
                window.location.href="http://127.0.0.1:9200/Servidor/sesion.php";


            }else{
                if(res == 0){
                    alert("Error la cuenta ya existe");
                }else{
                    alert("Error al Crear la Cuenta");
                }
                
            }
        }

    })
    }

}