<!-- Tabla productos -->

<?php
$nombre_archivo = basename(__FILE__);

?>

<?php
require_once('../bd/conection.php');
$conexion = new ConexionBD('localhost', 'root', '', 'proyecto');
$conexion->conectar();


$sql = "SELECT * FROM usuarios";
$resultados = $conexion->ejecutar($sql);


?>

<header class="mx-7">
    <h1 class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Usuarios</h1>
</header>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    username
                </th>
                <th scope="col" class="px-6 py-3">
                    Password
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha de registro
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php while ($columna = $conexion->obtener_fila($resultados, 0)) : ?>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $columna['nombre'] ?> <?= $columna['apellido'] ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $columna['username'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $columna['password'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $columna['email'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $columna['fecha_registro'] ?>
                    </td>

                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>