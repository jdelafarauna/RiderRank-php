
<?php include('../templates/cabecera.php'); ?>
<?php
include_once '../configuraciones/bd.php';

try {
    $conn = BD::crearInstancia();
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

function obtenerEventos($mes, $anio, $conn)
{
    $eventos = array();

    $fecha_inicio = "$anio-$mes-01";
    $fecha_fin = date("Y-m-t", strtotime($fecha_inicio));

    $stmt = $conn->prepare("SELECT id, prueba, fecha FROM concursos WHERE fecha BETWEEN :fecha_inicio AND :fecha_fin");
    $stmt->bindParam(':fecha_inicio', $fecha_inicio);
    $stmt->bindParam(':fecha_fin', $fecha_fin);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $eventos[] = $row;
    }

    return $eventos;
}

function generarCalendario($mes, $anio, $eventos)
{
    $diasEnMes = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
    $primerDia = date("N", strtotime("$anio-$mes-01"));
    $nombreMes = strftime("%B", strtotime("$anio-$mes-01"));

    echo "<h2>$nombreMes $anio</h2>";
    echo "<table class='calendario'>";
    echo "<tr><th class='header'>Lun</th><th class='header'>Mar</th><th class='header'>Mié</th><th class='header'>Jue</th><th class='header'>Vie</th><th class='header'>Sáb</th><th class='header'>Dom</th></tr>";

    // Llenar celdas vacías al principio del mes
    echo "<tr>";
    for ($i = 1; $i < $primerDia; $i++) {
        echo "<td class='empty'></td>";
    }

    // Llenar los días del mes
    $diaActual = 1;
    while ($diaActual <= $diasEnMes) {
        for ($i = $primerDia; $i <= 7 && $diaActual <= $diasEnMes; $i++) {
            $claseDia = "day-cell";
            $contenidoDia = "<div class='day-number'>$diaActual</div>";

            // Lista de pruebas para este día
            $pruebasDia = array_filter($eventos, function ($evento) use ($diaActual) {
                return $diaActual == date("j", strtotime($evento['fecha']));
            });

            if (!empty($pruebasDia)) {
                $contenidoDia .= "<div class='pruebas-container'>";
                foreach ($pruebasDia as $prueba) {
                    $contenidoDia .= "<div class='prueba'>";
                    $contenidoDia .= "<a href='vista_prueba.php?id={$prueba['id']}'>";
                    $contenidoDia .= "<strong>{$prueba['prueba']}</strong>";
                    $contenidoDia .= "</a>";
                    $contenidoDia .= "</div>";
                }
                $contenidoDia .= "</div>";
            }

            echo "<td class='$claseDia'>$contenidoDia</td>";
            $diaActual++;
        }
        if ($diaActual <= $diasEnMes) {
            echo "</tr><tr>";
        }
        $primerDia = 1; // Después de la primera semana, reinicia el primer día de la semana
    }

    // Llenar celdas vacías al final del mes
    while ($i <= 7) {
        echo "<td class='empty'></td>";
        $i++;
    }

    echo "</tr></table>";
}

// Obtener el mes y año actual
$fecha = isset($_GET['fecha']) ? $_GET['fecha'] : date("Y-m");
list($anio, $mes) = explode('-', $fecha);

// Obtener eventos del mes
$eventos = obtenerEventos($mes, $anio, $conn);

// Estilos CSS
echo "
<style>
.calendario {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.calendario th, .calendario td {
    border: 1px solid #ddd;
    padding: 15px; /* Ajusta el padding para el tamaño de las celdas */
    text-align: center;
    width: 100px; /* Ancho fijo para las celdas */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.header {
    background-color: #f2f2f2;
}

.day-cell {
    position: relative;
    height: 100px; /* Ajusta la altura de la celda según sea necesario */
}

.day-number {
    font-size: 18px;
    font-weight: bold;
    position: absolute;
    top: 5px;
    left: 5px;
}

.pruebas-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.prueba {
    background-color:#555;;
    color: white;
    border-radius: 5px;
    padding: 8px; /* Ajusta el padding para el tamaño del recuadro de la prueba */
    margin-bottom: 5px;
    margin-right: 5px;
    margin-left: 5px;
    white-space: nowrap;
}

.prueba a {
    color: white;
    text-decoration: none;
}

.empty {
    background-color: #f2f2f2;
}

.navigation {
    margin-top: 10px;
    text-align: center;
}

.navigation a {
    display: inline-block;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-right: 10px;
    transition: background-color 0.3s;
    background-color: #555;
}

</style>
";

// Generar el calendario para el mes y año actuales
generarCalendario($mes, $anio, $eventos);

// Mostrar la navegación
echo "<div class='navigation'>";
echo "<a href='?fecha=" . date("Y-m", strtotime("$anio-$mes-01 -1 month")) . "'>&lt; Mes Anterior</a>";
echo "<a href='?fecha=" . date("Y-m", strtotime("$anio-$mes-01 +1 month")) . "'>Mes Siguiente &gt;</a>";
echo "</div>";

// Cerrar la conexión con la base de datos
$conn = null;
?>

<?php include('../templates/pie.php'); ?>