<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clients</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Add New client</h1>
    <form action="/client-store" method="POST">
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">nombre:</label>
            <input type="text" name="nombre" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter client nombre">
        </div>

        <div class="mb-4">
            <label for="apellidos" class="block text-sm font-medium text-gray-700">apellidos:</label>
            <input type="text" name="apellidos" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter director's apellidos">
        </div>

        <div class="mb-4">
            <label for="telefono" class="block text-sm font-medium text-gray-700">Release telefono:</label>
            <input type="number" name="telefono" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter release telefono">
        </div>

        <div class="mb-4">
            <label for="direccion" class="block text-sm font-medium text-gray-700">direccion:</label>
            <input type="text" name="direccion" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter director's direccion">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add client</button>
    </form>
</div>
</body>
</html>