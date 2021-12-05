toastr.options.preventDuplicates = true

llenarTabla();

function llenarTabla() {
    $.ajax({
        url: "http://127.0.0.1:9200/Servidor/tabla.php",
        data: {},
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        success: res => {
            //console.log(res)
            try {
                $("#tablaContactos > tr").remove()
                $("#tablaContactos").append(res)
            } catch (error) {
                toastr.error(error, "Algo ha salido mal")
            }
        }
    });
}