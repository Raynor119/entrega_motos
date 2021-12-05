toastr.options.preventDuplicates = true

llenarcuadros();

function llenarcuadros(){
    let nombre=document.getElementById("nombre1");
    let cedula=document.getElementById("cedula1");
    let email=document.getElementById("email1");
    let apelli=document.getElementById("apellido1");
    let telef=document.getElementById("telefono1");

        $.ajax({
            url: "http://127.0.0.1:9200/Servidor/imprimirDU.php",
            data: {},
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: res => {
                
                try {
                    let vect=["","","","",""];
                    x=0;
                    for (i=0;i<res.length;i++){
                        if(res.charAt(i)!="/"){
                            vect[x]=vect[x]+res.charAt(i);
                        }
                        else{
                            x=x+1
                        }

                    }
                    nombre.value=vect[1]
                    cedula.value=vect[0]
                    email.value=vect[4]
                    apelli.value=vect[2]
                    telef.value=vect[3]
                    
                   
                } catch (error) {
                    alert("Algo ha salido mal")
                }
            }
        });

}