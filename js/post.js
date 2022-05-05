function Registrar_Datos() {
    let titulo = document.getElementById('txt_titulo').value;
    let descripcion = document.getElementById('txt_descripcion').value;
    let lugar = document.getElementById('select_region').value;
    let imguno = document.getElementById('txt_foto1').value;
    let imgdos = document.getElementById('txt_foto2').value;
    let imgtres = document.getElementById('txt_foto3').value;
    let imgcuatro = document.getElementById('txt_foto4').value;
    if (titulo.length == 0 || descripcion.length == 0 || lugar.length == 0) {
        return Swal.fire("Mensaje de advertencia", "Tiene algunos campos vacios", "warning");
    }
    $.ajax({
        url: 'controller/controlador_post.php',
        type: 'POST',
        data: {
            titulo: titulo,
            descripcion: descripcion,
            lugar: lugar,
            imguno: imguno,
            imgdos: imgdos,
            imgtres: imgtres,
            imgcuatro: imgcuatro,
        }
    }).done(function (resp) {
        if (resp > 0) {
            if (resp == 1) {
                document.getElementById('txt_titulo').value = "";
                document.getElementById('txt_descripcion').value = "";
                document.getElementById('select_region').value = "";
                document.getElementById('txt_foto1').value = "";
                document.getElementById('txt_foto2').value = "";
                document.getElementById('txt_foto3').value = "";
                document.getElementById('txt_foto4').value = "";
                Swal.fire("Mensaje de Confirmacion", "Post Registrado", "success").then((value) => {
                });
            } else {
                Swal.fire("Mensaje de Error", "No se pudo registrar el Post", "error");
            }
        }
    });
    return false;
}

