<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clients</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4">Edit Client</h1>
        <form action="/client-update" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($client->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">nombre:</label>
                <input type="text" name="nombre" value="<?= htmlspecialchars($client->nombre) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="apellidos" class="block text-gray-700">apellidos:</label>
                <input type="text" name="apellidos" value="<?= htmlspecialchars($client->apellidos) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="telefono" class="block text-gray-700">telefono:</label>
                <input type="number" name="telefono" value="<?= htmlspecialchars($client->telefono) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="direccion" class="block text-gray-700">direccion:</label>
                <input type="text" name="direccion" value="<?= htmlspecialchars($client->direccion) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
        </form>
        <a href="/clients" class="text-gray-500 hover:underline mt-4 block">Return</a>
    </div>
</body>
</html>