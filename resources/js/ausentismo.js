function sumar() {
    var diasAusencia = document.getElementById('tiempo_ausencia').value;
    var costoAusencia = document.getElementById('costo_ausencia').value;
    var totalPago = ((parseFloat(costoAusencia)/30) * parseInt(diasAusencia) * 0.666);

    //total = parseInt(diasAusencia) * parseInt(costoAusencia);
    document.getElementById('costo_ausencia').value = totalPago;

}

$("#examen").change(function(event){
    $.get('/prueba3/'+event.target.value+"",function(response,state){
        $("#institucion").empty();
        for(i=0; i<response.length; i++) {
            $("#institucion").append("<option value='"+response[i].id+"'> "+response[i].nameInstitucion+"</option>");
        }
    });
});

// function getMessage(){
//     var codigo = document.getElementById('codigo')
//     product_id = parseInt(codigo.value);
//     $.ajax({
//         //headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//         type:'GET',
//         url:'/prueba/'+product_id,
//         dataType: 'json',
//         success:function(data){
//             //console.log(data.name)
//             $('#id_emple').val(data.name + " " + data.apellido);
//             /*$('#id_emple').prop('disabled', true);*/
//             $('#costo_ausencia').val(data.salario);
//             /*$('#costo_ausencia').prop('disabled', true);*/
//         }
//     });
// }

// function dateCompare () { 
//     var fecha_aux = document.getElementById("fecha").value.split("-");
//      var Fecha1 = new Date(parseInt(fecha_aux[0]),parseInt(fecha_aux[1]-1),parseInt(fecha_aux[2]));
//      Hoy = new Date();//Fecha actual del sistema
//      var AnyoFecha = Fecha1.getFullYear();
//      var MesFecha = Fecha1.getMonth();
//      var DiaFecha = Fecha1.getDate();

//      var AnyoHoy = Hoy.getFullYear();
//      var MesHoy = Hoy.getMonth();
//      var DiaHoy = Hoy.getDate();

//      var producto1 = document.getElementById('botonProrroga');
//                  if (AnyoFecha >= AnyoHoy && MesFecha >= MesHoy && DiaFecha >= DiaHoy){
//                     producto1.style.display = 'inline';
//                  }
//                  else{
//                     producto1.style.display = 'none';
//                  }
//     }





// $(document).ready(function() {
//     $('#btn-edi').click(function() {
//         alert("documento listo");
//     });

// })

// $("#institucion").change(function(event){
//     var exa = document.getElementById('examen').value;
//     console.log(exa);
//     $.get('/prueba4/'+event.target.value+""+'/'+exa,function(response,state){
//         $("#costoExamen").empty();
//         for(i=0; i<response.length; i++) {
//             $("#costoExamen").append("<option value='"+response[i].id+"'> "+response[i].costoExamen+"</option>");
//         }
//     });
// });