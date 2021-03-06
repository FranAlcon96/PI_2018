<?php
include '../../../php/connection.php';

// Esta query recogerá 6 tipos de actividades desde la tabla ofertas (surf, buceo, ...etc) de forma aleatoria, y sin repetirse.
$sql_tipo_actividades = "SELECT DISTINCT tipo_actividad from oferta ORDER BY RAND() LIMIT 20;";
$result = $conexion->query($sql_tipo_actividades);
?>

<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="./components/index/filtroBusqueda/css/style.css">
      <script type="text/javascript" src="./js/filters.js"></script>
</head>
<body>
<div id="filters">

      <h2>Filtrar actividades</h2><hr/>
      <form method="post" id="myform" class="form-group">
            <label>Tipo de actividad</label><br>
            <?php
            while($row = $result->fetch_assoc()) {
                $tipo_actividad = $row['tipo_actividad'];
                echo "<input type='radio' class='tipoact' name='tipo_actividad' value={$tipo_actividad}>  <span id={$tipo_actividad} style='text-transform: capitalize'>{$tipo_actividad}</span><br>";
            }
            ?>
            <label>Precio máximo</label>

        <div class="input-box">
                <input class="form-control" id="number" name="rangoprecio" min="10" max="200" disabled onkeyup="changeRangeValue(this.value)"/>
            <span class="euros">€</span>
        </div>
            <input class="form-control-range" type="range" min="10" max="200" id="range" name="barraprecio" value="0" step="10" oninput="changeInputValue(this.value)" />

            <br><label>Provincia</label><br>
        <select name="prov-filter" class="prov-filter form-control"style="color: black">
            <option value='alava' selected>Álava</option>
            <option value='albacete'>Albacete</option>
            <option value='alicante'>Alicante/Alacant</option>
            <option value='almeria'>Almería</option>
            <option value='asturias'>Asturias</option>
            <option value='avila'>Ávila</option>
            <option value='badajoz'>Badajoz</option>
            <option value='barcelona'>Barcelona</option>
            <option value='burgos'>Burgos</option>
            <option value='caceres'>Cáceres</option>
            <option value='cadiz'>Cádiz</option>
            <option value='cantabria'>Cantabria</option>
            <option value='castellon'>Castellón/Castelló</option>
            <option value='ceuta'>Ceuta</option>
            <option value='ciudadreal'>Ciudad Real</option>
            <option value='cordoba'>Córdoba</option>
            <option value='cuenca'>Cuenca</option>
            <option value='girona'>Girona</option>
            <option value='laspalmas'>Las Palmas</option>
            <option value='granada'>Granada</option>
            <option value='guadalajara'>Guadalajara</option>
            <option value='guipuzcoa'>Guipúzcoa</option>
            <option value='huelva'>Huelva</option>
            <option value='huesca'>Huesca</option>
            <option value='illesbalears'>Illes Balears</option>
            <option value='jaen'>Jaén</option>
            <option value='acoruña'>A Coruña</option>
            <option value='larioja'>La Rioja</option>
            <option value='leon'>León</option>
            <option value='lleida'>Lleida</option>
            <option value='lugo'>Lugo</option>
            <option value='madrid'>Madrid</option>
            <option value='malaga'>Málaga</option>
            <option value='melilla'>Melilla</option>
            <option value='murcia'>Murcia</option>
            <option value='navarra'>Navarra</option>
            <option value='ourense'>Ourense</option>
            <option value='palencia'>Palencia</option>
            <option value='pontevedra'>Pontevedra</option>
            <option value='salamanca'>Salamanca</option>
            <option value='segovia'>Segovia</option>
            <option value='sevilla'>Sevilla</option>
            <option value='soria'>Soria</option>
            <option value='tarragona'>Tarragona</option>
            <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
            <option value='teruel'>Teruel</option>
            <option value='toledo'>Toledo</option>
            <option value='valencia'>Valencia/Valéncia</option>
            <option value='valladolid'>Valladolid</option>
            <option value='vizcaya'>Vizcaya</option>
            <option value='zamora'>Zamora</option>
            <option value='zaragoza'>Zaragoza</option>
        </select><br>
            <button class="form-control btn-5" id="quitarfiltros">Quitar filtros</button>
      </form>
</div>


</body>
</html>