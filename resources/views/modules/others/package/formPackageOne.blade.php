{{-- Vuelo + Alojamiento --}}
<form action="/flight_detail" method="get">
    <div class="row justify-content-center">
        <div class="col">
                <center>
                    <!-- Input Origen -->
                    <label for="origen">
                        <span> 
                            Origen
                        </span>
                    </label>
                </center>
                <div class="form-group">
                    <select 
                        id="origen" 
                        name="origen" 
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
                    <label for="destino">
                        <span> 
                            Destino
                        </span>
                    </label>
                </center>
                <div class="form-group">
                    <select 
                        id="destino" 
                        name="destino" 
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
                    <label for="fecha-ida-uno">
                        <span> 
                            Fecha de ida
                        </span>
                    </label>
                    <div class="input-group">
                        <input 
                        id="fecha-ida-uno" 
                        name="fecha-ida-uno" 
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
                    <label for="fecha-vuelta-uno">
                        <span> 
                            Fecha de vuelta
                        </span>
                    </label>
                    <div class="input-group">
                        <input 
                        id="fecha-vuelta-uno"
                        name="fecha-vuelta-uno"
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
                    min="0"
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
    <center>
        <button type="submit" class="btn btn-galaxy wow fadeInUp">Encuentra su vuelo</button> 
    </center>
</form>

<script>
  addEventListener('load',inicio,false);

  function inicio()
  {
    document.getElementById('fecha-ida-uno').addEventListener('change',cambioVuelta,false);
  }

  function cambioVuelta()
  {
     var fecha = document.getElementById("fecha-ida-uno").value;
     
    document.getElementById('fecha-ida-uno').innerHTML=document.getElementById('fecha-ida-uno').value;
    document.getElementById("fecha-vuelta-uno").setAttribute("min", fecha);
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
     document.getElementById("fecha-ida-uno").setAttribute("min", today);
     document.getElementById("fecha-vuelta-uno").setAttribute("min", today);
</script>