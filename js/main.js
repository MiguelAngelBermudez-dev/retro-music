
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
  alert("Eliminar: " + tmpId);
  let confirmar = confirm(`esta seguro que desea borrar ${tmpId}`);
  if(confirmar){
    document.recogeId.idBorrar.value = tmpId;
    document.recogeId.submit();
  }else{
    alert("Eliminado correctamente");
  }
 
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
function orderConsult(){
  let orden = prompt("como desea ordenar la tabla:");
  let confirmarcion = confirm(`Esta seguro que desea hacer la consulta en orden de ${orden}`);
  if(confirmarcion){

  document.formConsultaOrden.ConsultaOrden.value = orden;
  document.formConsultaOrden.submit();
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

function consultName() {
  const name = prompt("Introduzca el nombre del artículo a consultar:");

  // Verificar si el usuario hizo clic en "Cancelar"
  if (name === null) {
      console.log("Operación cancelada por el usuario.");
      return;
  }

  const preguntar = confirm(`¿Está seguro de que desea consultar ${name}?`);
  
  if (preguntar) {
      document.formConsulta.nameConsulta.value = name;
      document.formConsulta.submit();
  }
}
function Ordenado(){
  let bool;
  document.forOrdenado.ordenarId.value = bool;
  document.forOrdenado.submit();
}
function carrito(){
  alert("Se ha añadido al carrito correctamente");
}
function ordenLimit(){
 let orden;
    document.formLimit.ConsultaLimit.value = orden;
    document.formLimit.submit();
}
function masVendidos(){
  alert("funciona");
  let masvendido;
  document.formMasVendido.masvendido.value = masvendido;
  document.formMasVendido.submit();
}
function datosCliente(){
  let articulo = prompt("Introduzca el nombre del producto:");
  document.formCliente.consultaCliente.value = articulo;
  document.formCliente.submit();
}
function precioTotalVentas(){
  let ventas;
  document.formPrecioTotal.PrecioTotal.value = ventas;
  document.formPrecioTotal.submit();
}
function productoxCliente(){
  let cliente = prompt("Ingrese el nombre del cliente:");
  document.formProductosxClien.clientes.value = cliente;
  document.formProductosxClien.submit();
} 
function mayorVenta(){
  let venta;
  document.formMayorventa.mayorventa.value = venta;
  document.formMayorventa.submit();
}
document.addEventListener("DOMContentLoaded", () => {
  const boton1 = document.querySelector("#boton1");
  const boton2 = document.querySelector("#boton2");
  const boton3 = document.querySelector("#boton3");
  const boton4 = document.querySelector("#boton4");
  const boton5 = document.querySelector("#boton5");
  const boton6 = document.querySelector("#boton6");

  boton1.addEventListener("click", (event) => {
    event.preventDefault();
    alert("se ha realizado la compra correctamente");
    let valorDcompra = "michael";
   document.formcompra.compra.value = valorDcompra;
   document.formcompra.submit();
  });
  boton2.addEventListener("click", (event) => {
    event.preventDefault();
    alert("se ha realizado la compra correctamente");
    let valorDcompra = "queen";
    document.formcompra.compra.value = valorDcompra;
    document.formcompra.submit();
  });
  boton3.addEventListener("click", (event) => {
    event.preventDefault();
    alert("se ha realizado la compra correctamente");
    let valorDcompra = "fortunate";
    document.formcompra.compra.value = valorDcompra;
    document.formcompra.submit();
  });
  boton4.addEventListener("click", (event) => {
    
    alert("se ha realizado la compra correctamente");
    let valorDcompra = "dire";
    document.formcompra.compra.value = valorDcompra;
    document.formcompra.submit();
  });
  boton5.addEventListener("click", (event) => {
    event.preventDefault();
    let valorDcompra = "beatles";
    let nombreComprador = prompt("ingrese su nombre completo");
    let datosComprador = prompt("ingrese su correo electronido y numero de telefono para realizar la transaccion");
    document.formcompra.nombrecomprador.value = nombreComprador;
    document.formcompra.datoscomprador.value = datosComprador;
    document.formcompra.compra.value = valorDcompra;
    document.formcompra.submit();
    alert("se ha realizado la compra correctamente");
  });
  boton6.addEventListener("click", (event) => {
    event.preventDefault();
    let valorDcompra = "free";
    let nombreComprador = prompt("ingrese su nombre completo");
    let datosComprador = prompt("ingrese su correo electronido y numero de telefono para realizar la transaccion");
    document.formcompra.nombrecomprador.value = nombreComprador;
    document.formcompra.datoscomprador.value = datosComprador;
    document.formcompra.compra.value = valorDcompra;
    document.formcompra.submit();
    alert("se ha realizado la compra correctamente");
    });
});



