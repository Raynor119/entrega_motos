toastr.options.preventDuplicates = true

function inicioS(){
    let usua=document.getElementById("nombre_usuario1");
    let contr=document.getElementById("Contrasena1");
    let data=new FormData()
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
function Cerrar(){
    alert("Se Cerrara la Sesion");
    window.location.href="http://127.0.0.1:9200/Servidor/cerrarC.php";
}
function EliminarC(){
    alert("Se Elimino la Cuenta");
    window.location.href="http://127.0.0.1:9200/Servidor/Eliminar.php";
}

function Registrar(){
    let nom=document.getElementById("nombre1");
    let cedu=document.getElementById("cedula1");
    let tele=document.getElementById("telefono1");
    let apelli=document.getElementById("apellido1");
    let emai=document.getElementById("email1");
    let contra=document.getElementById("contrasena1");
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
                alert("Error al crear la cuenta");
            }
        }

    })


}