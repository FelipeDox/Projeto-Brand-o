<?php
// includes/topo.php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Soluções em Energia Solar</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        header { background-color: #ff9900; color: white; padding: 1em; text-align: center; }
        main { padding: 20px; min-height: 70vh; }
        .container { max-width: 1000px; margin: auto; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        /* Estilos básicos para o Formulário */
        form label { display: block; margin-top: 10px; font-weight: bold; }
        form input[type="text"], form input[type="email"], form input[type="tel"], form textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Garante que o padding não aumente o width total */
        }
        form input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            margin-top: 15px;
            transition: background-color 0.2s;
        }
        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Seu Futuro com Sol: Economia Garantida na Conta de Luz.</h1>
    </header>
    <main>
        <div class="container">
