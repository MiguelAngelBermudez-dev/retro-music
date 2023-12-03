
function insertar() {
  //recoger los dattos de cada input

  const tmpNombreDVD = document.getElementById("nombre").value;
  const tmpArtista = document.getElementById("artista").value;
  const tmpEstilo = document.getElementById("estilo").value;
  const tmpAnio = document.getElementById("año").value;
  const tmpCanciones = document.getElementById("canciones").value;
  const tmpTitulo = document.getElementById("titulo").value;
  const tmpCantidad = document.getElementById("cantidad").value;
  const tmpPrecio = document.getElementById("precio").value;
  const tmpDescuento = document.getElementById("descuento").value;
  const tmpIva = document.getElementById("IVA").value;

  //mandar los datos al formulario oculto para insertarlos por php

  // envio nombre
  document.insertarDatos.nombreDvd.value = tmpNombreDVD;


  // envio artista nombre
  document.insertarDatos.artistaNombre.value = tmpArtista;


  // envio estilo musical
  document.insertarDatos.estiloMusica.value = tmpEstilo;


  // envio anio creacion
  document.insertarDatos.anioCreacion.value = tmpAnio;


  // envio numero de canciones
  document.insertarDatos.numeroCanciones.value = tmpCanciones;


  // envio titulos
  document.insertarDatos.titulosCanciones.value = tmpTitulo;


  // envio cantidad
  document.insertarDatos.cantidadCanciones.value = tmpCantidad;


  // envio precio
  document.insertarDatos.precioCanciones.value = tmpPrecio;


  // envio descuento
  document.insertarDatos.descuentoPrecio.value = tmpDescuento;


  // envio iva
  document.insertarDatos.ivaPrecio.value = tmpIva;

  document.insertarDatos.submit();
  alert("los datos se han enviado exitosamente");
}

function mostrar() {
  let muestro = true;
  if (muestro) {
    document.muestoDatos.mostrar.value = muestro;
    document.muestoDatos.submit();
  }
}
function borrar(tmpId) {
  alert("Eliminando: " + tmpId);
  document.recogeId.idBorrar.value = tmpId;
  document.recogeId.submit();
}



function modificar(tmpId, tmpNombreDVD, artistaDVD, tmpEstiloMusicalDVD, tmpAñoDVD, tmpNumeroCancionesDVD, tmpTitulosCancionesDVD, tmpCantidadDVD, tmpPrecioDVD, tmpDescuentoDVD, tmpIVADVD) {
  let consult = prompt("que desea modificar");
  let desicion = confirm(`esta seguro que desea modificar ${consult}`);
  //mando la id


  if (desicion) {
    let cambiar = prompt("introduzca el cambio");

    switch (consult.toLocaleLowerCase().trim()) {
      case "nombredvd":
        document.modificarForm.nombreModificar.value = cambiar;

        document.modificarForm.idActual.value = tmpId;
        document.modificarForm.desicion.value = consult;
        document.modificarForm.submit();
        break;
      case "artistadvd":
        document.modificarForm.artistaModificar.value = cambiar;

        document.modificarForm.idActual.value = tmpId;
        document.modificarForm.desicion.value = consult;
        document.modificarForm.submit();
        break;
      case "estilomusicaldvd":
        document.modificarForm.estiloModificar.value = cambiar;

        document.modificarForm.idActual.value = tmpId;
        document.modificarForm.desicion.value = consult;
        document.modificarForm.submit();
        break;
      case "añodvd":
        document.modificarForm.añoModificar.value = cambiar;

        document.modificarForm.idActual.value = tmpId;
        document.modificarForm.desicion.value = consult;
        document.modificarForm.submit();
        break;
      case "numerocancionesdvd":
        cambiarNum = parseInt(cambiar);
        document.modificarForm.numeroCancionesModificar.value = cambiarNum;

        document.modificarForm.idActual.value = tmpId;
        document.modificarForm.desicion.value = consult;
        document.modificarForm.submit();
        break;
      case "tituloscancionesdvd":
        document.modificarForm.titulosModificar.value = cambiar;

        document.modificarForm.idActual.value = tmpId;
        document.modificarForm.desicion.value = consult;
        document.modificarForm.submit();
        break;
      case "cantidaddvd":
        cambiarNum = parseInt(cambiar);
        document.modificarForm.cantidadModificar.value = cambiarNum;

        document.modificarForm.idActual.value = tmpId;
        document.modificarForm.desicion.value = consult;
        document.modificarForm.submit();
        break;
      case "preciodvd":
        document.modificarForm.precioModificar.value = parseFloat(cambiar);

        document.modificarForm.idActual.value = tmpId;
        document.modificarForm.desicion.value = consult;
        document.modificarForm.submit();
        break;
      case "descuentodvd":
        cambiarNum = parseFloat(cambiar);
        document.modificarForm.descuentoModificar.value = cambiarNum;

        document.modificarForm.idActual.value = tmpId;
        document.modificarForm.desicion.value = consult;
        document.modificarForm.submit();
        break;
      case "ivadvd":
        cambiarNum = parseFloat(cambiar);
        document.modificarForm.ivaModificar.value = cambiarNum;
        document.modificarForm.idActual.value = tmpId;
        document.modificarForm.desicion.value = consult;
        document.modificarForm.submit();
        break;
      default:
        alert("Opción de modificación no válida");
    }
  }
}
//alerta esta oculta
window.addEventListener("load", function () {
  const alertaMas8 = document.getElementById("alertaMa8");
  alertaMas8.style.display = "none";
  const alertaNoUser = document.getElementById("alertaNoUser");
  alertaNoUser.style.display = "none";
  const passError = document.getElementById("passError");
  passError.style.display = "none";
});
//reoger usuariologin y contra login 
function reogerLogin() {
  var user = document.getElementById("username").value;
  console.log(user);
  var pass = document.getElementById("password").value;
  console.log(pass);
 
  if ((pass == "admin")) {
    if (user) {
      if (user.length  <= 8) {
        document.recogeLogin.usuariLogin.value = user;
        document.recogeLogin.passLogin.value = pass;
        document.recogeLogin.submit();
        
      } else {
        const alertaMas8 = document.getElementById("alertaMa8");
        alertaMas8.style.display = "block"
        setTimeout(() => {
          alertaMas8.style.display = "none";
        }, 6000);
      }
    }else {
      const alertaNoUser = document.getElementById("alertaNoUser");
      alertaNoUser.style.display = "block"
      setTimeout(() => {
        alertaNoUser.style.display = "none";
      }, 8000);
    }
  }else {
    const passError = document.getElementById("passError");
    passError.style.display = "block";
    setTimeout(() => {
      passError.style.display = "none";
    }, 10000);
  }
}
 









