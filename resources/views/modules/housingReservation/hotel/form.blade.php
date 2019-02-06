
<form action="/hotel" method="get">


<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.css" rel="stylesheet"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/locales/bootstrap-datepicker.es.min.js"></script>




<script>
  addEventListener('load',inicio,false);

  function inicio()
  {
    document.getElementById('fecha-entrada').addEventListener('change',cambioSalida,false);
  }

  function cambioSalida()
  {
     var fecha = document.getElementById("fecha-entrada").value;
     var rest = fecha.substr(0,8);
     var dayInt = parseInt(fecha.substr(8,10))+1;
     var day = dayInt.toString();
     if(dayInt < 10)
     {
          day = "0"+day;
     }
     var salida = rest + day;
    document.getElementById('fecha-entrada').innerHTML=document.getElementById('fecha-entrada').value;
    document.getElementById("fecha-salida").setAttribute("min", salida);
  }
</script>  


     <div class="card buy-card flex-fill">
          <div class="card-body buy-card-body">
               <!-- Línea 1 -->
               <div class="row justify-content-center">
                    <div class="col-12">
                         <!-- Input Destino -->
                         <center>
                              <label for="reserva-vehiculo-zona">
                                   <span> 
                                        Destino
                                   </span>
                              </label>
                         </center>
                         <div class="form-group">
                              <select 
                                   id="zona_id" 
                                   name="zona_id" 
                                   class="form-control selectpicker custom-select" 
                                   required>
                                   <option selected disabled>
                                        Seleccione su destino
                                   </option>
                                   @foreach ($hotels as $hotel)
                                   <option value="{{ $hotel->pais }}">
                                        {{ $hotel->pais }}
                                   </option>
                                   @endforeach
                              </select>
                         </div>
                    </div>
               </div>

               <!-- Línea 2 -->
               <div class="row justify-content-center">
                    <div class="col">
                         <center>
                              <!-- Input Entrada -->
                              <label for="fecha-entrada">
                                   <span> 
                                        Entrada
                                   </span>
                              </label>




                         <input type="date" class="form-control" name="fecha" id="fecha-entrada"  placeholder="Introduce una fecha" required min="2019/02/05"/>
                         

                         </center>
                    </div>
                    <div class="col">
                         <center>
                              <!-- Input Salida -->
                              <label for="fecha-salida">
                                   <span> 
                                        Salida
                                   </span>
                              </label>
                              <input 
                                   id="fecha-salida"
                                   name="fecha-salida"
                                   type="date" 
                                   class="form-control"
                                   style="color:black;"
                                   min="2019/02/05"
                                   required>
                         </center>
                        
                    </div>
               </div>
               </br>
               <!-- Línea 3 -->
               <div class="row justify-content-center">
                    <div class="col">
                         <!-- Input Habitaciones -->
                         <center>
                              <label for="habitaciones">
                                   <span> 
                                        Habitaciones 
                                   </span>
                              </label>
                         </center>
                         <input
                              class="form-control"
                              id="habitaciones"
                              name="habitaciones"
                              type="number"
                              min="0"
                              max="8"
                              placeholder="Número de habitaciones"
                              style="width:100%;" 
                              required>
                    </div>
                    <div class="col">
                         <!-- Input Personas -->
                         <center>
                              <label for="personas">
                                   <span> 
                                        Personas 
                                   </span>
                              </label>
                         </center>
                         <input
                              class="form-control"
                              id="personas"
                              name="personas"
                              type="number"
                              min="0"
                              max="8"
                              placeholder="Número de personas"
                              style="width:100%;" 
                              required>
                    </div>
               </div>
               </br>
               <center>
                    <button type="submit" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Encuentra su alojamiento</button> 
               </center>
          </div> 
     </div>
</form>


<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
if(dd<10){
     dd='0'+dd
} 
if(mm<10){
     mm='0'+mm
} 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("fecha-entrada").setAttribute("min", today);
</script>