{{-- Vuelo + Alojamiento --}}
<form action="/package" method="get">
    <div class="row justify-content-center">
        <div class="col">
                <center>
                    <!-- Input Origen -->
                    <label for="origen-packageOne">
                        <span> 
                            Origen
                        </span>
                    </label>
                </center>
                <div class="form-group">
                    <select 
                        id="origen-packageOne" 
                        name="origen-packageOne" 
                        class="form-control selectpicker custom-select" 
                        required>
                        <option selected disabled> 
                            Seleccione el origen de su vuelo 
                        </option>
                        @foreach ($airports as $airport)
                        <option value="{{ $airport->id }}">
                            {{ $airport->ciudad }}
                        </option>
                        @endforeach
                    </select>
                </div>
        </div>

        <div class="col">
                <center>
                    <!-- Input Destino -->
                    <label for="destino-packageOne">
                        <span> 
                            Destino
                        </span>
                    </label>
                </center>
                <div class="form-group">
                    <select 
                        id="destino-packageOne" 
                        name="destino-packageOne" 
                        class="form-control selectpicker custom-select" 
                        required>
                        <option selected disabled> 
                            Seleccione el destino de su vuelo 
                        </option>
                        @foreach ($airports as $airport)
                        <option value="{{ $airport->id }}">
                            {{ $airport->ciudad }}
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
                    <!-- Input Ida -->
                    <label for="fecha-ida-packageOne">
                        <span> 
                            Fecha de ida
                        </span>
                    </label>
                    <div class="input-group">
                        <input 
                        id="fecha-ida-packageOne" 
                        name="fecha-ida-packageOne" 
                        type="date"
                        class="form-control"
                        style="color:black;"
                        required>
                        <span class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </span>
                    </div>
                </center>
        </div>
        <div class="col">
                <center>
                    <!-- Input Vuelta -->
                    <label for="fecha-vuelta-packageOne">
                        <span> 
                            Fecha de vuelta
                        </span>
                    </label>
                    <div class="input-group">
                        <input 
                        id="fecha-vuelta-packageOne"
                        name="fecha-vuelta-packageOne"
                        type="date" 
                        class="form-control"
                        style="color:black;"
                        required>
                        <span class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </span>
                    </div>
                </center>
        </div>
    </div>
    </br>
    <!-- Línea 3 -->
    <div class="row justify-content-center">
        <div class="col">
                <!-- Input Pasajeros -->
                <center>
                    <label for="pasajeros">
                        <span> 
                            Pasajeros 
                        </span>
                    </label>
                </center>
                <input
                    class="form-control"
                    id="pasajeros"
                    name="pasajeros"
                    type="number"
                    min="1"
                    max="8"
                    placeholder="Número de pasajeros"
                    style="width: 100%; color: black !important;" 
                    required>
        </div>

        <div class="col">
                <!-- Input Cabina -->
                <center>
                    <label for="cabina">
                        <span> 
                            Tipo de cabina 
                        </span>
                    </label>
                </center>
                <select 
                id="cabina" 
                name="cabina" 
                class="form-control selectpicker custom-select" 
                data-live-search="true" 
                required>
                    <option value="" selected disabled hidden>
                        Seleccione el tipo de cabina
                    </option>
                    <option value="1">
                        First Class
                    </option>
                    <option value="2">
                        Bussiness
                    </option>
                    <option value="3">
                        Economy
                    </option>
                </select>
        </div>
    </div>
    </br>
    <!-- Línea 4 -->
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
            min="1"
            max="3"
            placeholder="Número de habitaciones"
            style="width: 100%; color: black !important;" 
            required>
        </div>
    </div>
    </br>
    <center>
        <button type="submit" class="btn btn-galaxy wow fadeInUp">Encuentre su paquete</button> 
    </center>
</form>

<script>
  addEventListener('load',inicioPackageOne,false);

  function inicioPackageOne()
  {
    document.getElementById('fecha-ida-packageOne').addEventListener('change',cambioVueltaPackageOne,false);
  }

  function cambioVueltaPackageOne()
  {
     var fecha = document.getElementById("fecha-ida-packageOne").value;
     
    document.getElementById('fecha-ida-packageOne').innerHTML=document.getElementById('fecha-ida-packageOne').value;
    document.getElementById("fecha-vuelta-packageOne").setAttribute("min", fecha);
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
     document.getElementById("fecha-ida-packageOne").setAttribute("min", today);
     document.getElementById("fecha-vuelta-packageOne").setAttribute("min", today);
</script>