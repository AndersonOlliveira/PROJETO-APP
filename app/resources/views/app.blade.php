<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>PDV Simples</title>
</head>
<body>
    <h1>PDV Simples</h1>
    <p>Pressione F2 para abrir o modal de venda</p>

    <script>
        document.addEventListener('keydown', function(event) {
            console.warn(event);
            if (event.key === 'Dead') {
                event.preventDefault();

                
                alert('F2 pressionado - abrir tela de venda');
                // Aqui você pode abrir modal, focar input, etc.
            }
        });
    </script>
</body>
</html>
