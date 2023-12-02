<?php include('../secciones/participantes.php'); ?>
<?php include('../templates/cabecera.php'); ?>


    <style>
        body {
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-size: 18px; /* Tamaño más grande para los títulos */
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .btn {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class = "row">
    <div class = "col-md-2"></div>
    
    <div class = "col-md-10">
    <div class = "row">
        <div class = "col-md-12">
        <table>
            <thead>
                <tr>
                <br><br><br>
                    <th>Nombre</th>
                    <th>Caballo</th>
                    <th>Derribos</th>
                    <th>Desobediencias</th>
                    <th>Puntos</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $consulta = $conexionBD ->prepare("SELECT * FROM  participantes ORDER BY participantes.puntos asc");
            $consulta->execute();
            $listaParticipantes = $consulta->fetchAll();
            ?>

                <?php foreach ($listaParticipantes as $participantes) { ?>
                    <tr>
                        <td><?php echo $participantes['nombre']; ?></td>
                        <td><?php echo $participantes['caballo']; ?></td>
                        <td><?php echo $participantes['derribos']; ?></td>
                        <td><?php echo $participantes['desobediencias']; ?></td>
                        <td><?php echo $participantes['puntos']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>
