<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soluções em Energia Solar</title>
    <style>
        /* ESTILO GERAL - Um design moderno e limpo */
        :root {
            --primary: #ff9900;     /* Laranja Solar */
            --secondary: #28a745;   /* Verde Eco */
            --dark: #333;
            --light: #f8f9fa;
            --white: #ffffff;
            --shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-color: #f0f2f5; color: #444; }
        
        /* Header */
        header { background: linear-gradient(135deg, #ff9900, #ffcc00); color: white; padding: 20px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.2); }
        header h1 { margin: 0; font-size: 1.8rem; text-transform: uppercase; }
        header p { margin: 5px 0 0; opacity: 0.9; }

        /* Container Principal */
        .container { max-width: 1000px; margin: 20px auto; background: var(--white); padding: 30px; border-radius: 8px; box-shadow: var(--shadow); min-height: 400px;}

        /* Menu de Navegação */
        nav { background-color: #343a40; padding: 10px 0; margin-bottom: 20px; border-radius: 5px; }
        nav ul { list-style: none; padding: 0; margin: 0; text-align: center; }
        nav ul li { display: inline-block; margin: 0 10px; }
        nav ul li a { color: var(--white); text-decoration: none; font-weight: bold; padding: 8px 15px; border-radius: 4px; transition: 0.3s; }
        nav ul li a:hover { background-color: var(--primary); color: white; }

        /* Formulários */
        form { background: #fafafa; padding: 20px; border: 1px solid #eee; border-radius: 8px; max-width: 600px; margin: 0 auto; }
        label { display: block; margin-top: 15px; font-weight: bold; color: #555; }
        input[type="text"], input[type="email"], input[type="tel"], textarea, select {
            width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 1em;
        }
        input[type="submit"] {
            background-color: var(--secondary); color: white; border: none; padding: 12px 20px; font-size: 1em; border-radius: 4px; cursor: pointer; margin-top: 20px; width: 100%; transition: background 0.3s;
        }
        input[type="submit"]:hover { background-color: #218838; }

        /* Cards e Grids */
        .grid-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 20px; }
        .card { background: var(--white); border: 1px solid #e1e4e8; border-radius: 8px; padding: 20px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.05); transition: transform 0.2s; }
        .card:hover { transform: translateY(-5px); box-shadow: 0 8px 15px rgba(0,0,0,0.1); }
        
        /* Tabelas */
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table th, table td { padding: 12px; border-bottom: 1px solid #ddd; text-align: left; }
        table th { background-color: #f1f1f1; }

        /* Mensagens de Feedback */
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 4px; text-align: center; font-weight: bold; }
        .success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }

        /* Botões Gerais */
        .btn { display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; margin: 5px; transition: 0.3s; }
        .btn:hover { background-color: #0056b3; }
        
        /* Animação */
        .fade-in { animation: fadeIn 0.5s ease-in; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        
        /* Footer */
        footer { text-align: center; padding: 20px; margin-top: 20px; color: #777; border-top: 1px solid #ddd; font-size: 0.9em; }
    </style>
</head>
<body>
    <header>
        <h1>⚡ Soluções Solares</h1>
        <p>Economia inteligente para sua casa e empresa</p>
    </header>
    <main>
        <div class="container">
