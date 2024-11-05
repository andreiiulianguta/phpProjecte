<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clients</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Clients</h1>
    <a href="/client-create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Client</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Nombre</th>
            <th class="py-3 px-6 text-left">Apellido</th>
            <th class="py-3 px-6 text-left">Telefono</th>
            <th class="py-3 px-6 text-center">Direccion</th>
            <th class="py-3 px-6 text-center">Actions</th>

        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        <?php if (empty($clients)): ?>
        <tr>
            <td colspan="5" class="py-3 px-6 text-center">No hi ha pelis disponibles.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($clients as $client): ?>
        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6"><?=$client['id'] ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($client['nombre']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($client['apellidos']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($client['telefono']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($client['direccion']) ?></td>

            <td class="py-3 px-6 text-center">
                <a href="/client-edit/<?= $client['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                <a href="/client-delete/<?= $client['id'] ?>" class="text-red-500 hover:text-red-700 ">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>

        </tbody>
    </table>
</div>
</body>
</html>