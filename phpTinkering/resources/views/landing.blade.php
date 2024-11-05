<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte PHP</title>
    <style>
        /* Estils generals */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #333;
            background: linear-gradient(135deg, #ffffff, #fd9200);
        }
        .header {
            background: rgba(255, 255, 255, 0.1);
            padding: 2em 0;
            text-align: center;
            color: #000000;
            font-size: 2em;
            font-weight: bold;
        }
        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            text-align: center;
            padding: 2em;
            color: #000000;
        }
        .main h2 {
            font-size: 2em;
            margin-bottom: 0.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .cta-buttons {
            display: flex;
            gap: 2em;
            margin-top: 1.5em;
        }
        .cta-button {
            display: inline-block;
            padding: 1em 2.5em;
            background-color: #ff5722;
            color: #000000;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2em;
            font-weight: bold;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .cta-button:hover {
            background-color: #e64a19;
            transform: translateY(-5px);
        }
        .footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fd9200;
            text-align: center;
            padding: 1em;
            font-size: 0.9em;
            margin-top: auto;
        }
    </style>
</head>
<body>

<header class="header">
    Projecte PHP
</header>

<main class="main">
    <h2>Selecciona una Secció</h2>
    <div class="cta-buttons">
        <a href="/films" class="cta-button">Pel·lícules</a>
        <a href="/clients" class="cta-button">Clients</a>
    </div>
</main>

<footer class="footer">
    &copy;Andrei Iulian Guta
</footer>

</body>
</html>
