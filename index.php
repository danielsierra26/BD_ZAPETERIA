<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapateria</title>
    <style>
        /* Para centrar todo en la página */
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, purple, blue);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        h1 {
            font-size: 3rem;
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }

        #div_inicio_sesion {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }

        input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            padding: 10px 20px;
            font-size: 1.2rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div>
        <h1>Zapateria la Sangileña</h1>
        <div id="div_inicio_sesion">
            <form action="modelo/loguear.php" method="post">
                <input type="text" name="usuario" placeholder="Usuario" required>
                <br>
                <input type="password" name="clave" placeholder="Contraseña" required>
                <br>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>

