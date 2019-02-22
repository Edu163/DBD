<form action="/vehicle" method="get">
<script src="js/funciones.js"></script>
     <div class="card buy-card flex-fill">
          <div class="card-body buy-card-body">
               <div class="form-group form-row align-items-end">
                <div class="col-3 form-check form-check-inline">
                    <input onclick="aparecer()" type="radio" class="form-check-input" name="tipo_vuelo" id="vuelo_ida_vuelta" value="1" checked>
                    <label for="vuelo_ida_vuelta" class="form-check-label">Ida y vuelta</label>
                </div>

                <div class="col-3 form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="tipo_vuelo" id="vuelo_solo_ida" value="0">
                    <label for="vuelo_solo_ida" class="form-check-label">Solo ida</label>
                </div>
            </div>

            <div class="form-group form-row align-items-end fechas-pareadas">
                <div class="col">
                    <label for="fecha_ida">Fecha Ida</label>
                    <div class="input-group">
                        <input type="text" id="fecha_ida" name="fecha_ida" class="form-control text-center datepicker fecha-inicio" readonly="readonly">
                        <span class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </span>
                    </div>
                </div>

                <div class="col-1 text-center">
                    <i class="fas fa-arrow-right fa-2x vuelo-vuelta"></i>
                </div>

                <div class="col">
                    <label for="fecha_vuelta" class="vuelo-vuelta">Fecha Vuelta</label>
                    <div class="input-group vuelo-vuelta">
                        <input type="text" id="fecha_vuelta" name="fecha_vuelta" class="form-control text-center datepicker fecha-termino" readonly="readonly" value="">
                        <span class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </span>
                    </div>
                </div>
            </div>

            <script> aparecer(); </script>
          </div> 
     </div>

</form>

<script>
  addEventListener('load',inicio,false);

  function inicio()
  {
    document.getElementById('fecha-recogida').addEventListener('change',cambioDevolucion,false);
  }

  function cambioDevolucion()
  {
     var fecha = document.getElementById("fecha-recogida").value;
     
    document.getElementById('fecha-recogida').innerHTML=document.getElementById('fecha-recogida').value;
    document.getElementById("fecha-devolucion").setAttribute("min", fecha);
  }
</script>  

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
     document.getElementById("fecha-recogida").setAttribute("min", today);
     document.getElementById("fecha-devolucion").setAttribute("min", today);
</script>
