<!DOCTYPE html>
<html lang="pt-BR">
<meta name="viewport" content="width=device-width, initial-scale=1">


<body>
    <header>
        <link rel="shortcut icon" href="../images/senai.ico" type="image/x-icon">

        <a href="/">
            <img src="../images/Senai.png" alt="Logo SENAI" class="logo-senai" />
        </a>
        <link rel="stylesheet" href="../styles/creditos.css" />
        <h1>Créditos</h1>
    </header>

    <div class="titulo">
    </div>
    <div class="containerBody">
        <div class="card-body">
            <h5 class="card-text">Desenvolvedores:</h5>
            <ul>
                <li> <a rel="noopener" href="https://github.com/brendaluizaf" target="_blank">Brenda Luiza</a></li>
                <li><a rel="noopener" href="https://github.com/Diogosrsr" target="_blank">Diogo Rodrigues</a></li>
                <li><a rel="noopener" href="https://github.com/Douglas097" target="_blank">Douglas Silva</a></li>
                <li><a rel="noopener" href="https://github.com/IsaacArauj0" target="_blank">Isaac Araujo</a></li>
                <li><a rel="noopener" href="https://github.com/BatataRaiz" target="_blank">João Victor Deamo</a></li>
                <li><a rel="noopener" href="https://github.com/JoaoVictor897" target="_blank">João Victor Vendramini</a>
                </li>
                <li><a rel="noopener" href="https://github.com/LeandroOlv" target="_blank">Leandro de Oliveira</a></li>
                <li><a rel="noopener" href="https://github.com/dudafgg" target="_blank">Maria Eduarda Fernandes</a></li>
                <li><a rel="noopener" href="https://github.com/kaosbor" target="_blank">Rodrigo Borges</a></li>
                <li><a rel="noopener" href="https://github.com/kratts9988" target="_blank">Roger Magalhães</a></li>
                <li><a rel="noopener" href="https://github.com/Desvazio" target="_blank">Tarcísio Marques</a></li>
            </ul>
            <h5 class="card-text">Orientador Responsável:</h5>
            <ul>
                <li><a href="https://github.com/LYuri26">Lenon Yuri Silva</a></li>
            </ul>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Define a função toggleDropdown
            function toggleDropdown() {
                $("#menu-list").slideToggle(); // Mostra ou oculta a lista suspensa
            }

            // Adiciona um evento de clique ao elemento com o id "menu-icon"
            $("#menu-icon").click(toggleDropdown);

            // Adiciona um evento de redimensionamento ao documento
            $(window).on("resize", function() {
                // Verifica se a largura da janela é maior que 768 pixels
                if ($(window).width() > 768) {
                    // Mostra a lista suspensa
                    $("#menu-list").show();
                } else {
                    // Oculta a lista suspensa
                    $("#menu-list").hide();
                }
            });
        });
        // Obtenha o botão do menu e o elemento navbar
        const menuBtn = document.getElementById('menu-icon');
        const navbar = document.querySelector('.navbar');

        // Manipule o evento de clique do botão
        menuBtn.addEventListener('click', function() {
            // Adicione a classe "rounded" ao elemento navbar
            navbar.classList.remove('rounded');
        });
    </script>
    <footer>
        Jogo desenvolvido pela turma de Desenvolvimento de Sistemas Trilhas de Futuro 02/2022.
    </footer>
</body>

</html>