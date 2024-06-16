<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NeoBoreal Store - A sua marca de roupas</title>
        <link rel="stylesheet" href="/assets/css/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tiny5&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="a-img">
                <a href="#">
                    <img src="/assets/icons/bhs.jpg" alt="">
                </a>
            </div>
            <form action="#" method="#">
                <input type="text" placeholder="Pesquisar:">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button>
            </form>
            <div class="rnav">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                </a>
                <a href="#">Entrar</a>
                <a href="#">Cadastrar</a>
            </div>
        </header>
        <nav>
            <?php foreach(["Camisas", "Calças", "Casacos", "Bermudas", "Bones", "Perfumes", "Relogios", "Outros"] as $key){
                echo("
                    <a href='#'>$key</a>
                ");} ?>

        </nav>

        <div class="cards">
            <a href="#" class="card">
                <img class="ct" src="https://www.insiderstore.com.br/cdn/shop/files/Sportee-01.jpg">
                <div>
                    <span class="ct" >Camisa branca com gola careca</span>
                </div>
                <div>
                    <span class="ct" >Nota 7/10</span>
                    <span class="ct" >Avaliaçoes: 15</span>
                </div>
                <div>
                    <span class="ct c-preco" >R$ 199,90</span>
                </div>
                <button class="ct c-button" >Adicionar ao carrinho</button>
            </a>
        </div>

        <footer>
            <div>
                <img src="#" alt="#">
                <img src="#" alt="#">
                <img src="#" alt="#">
            </div>
            <div>
                <a href="#">Sobre-nos</a>
                <a href="#">Contato</a>
                <a href="#">Endereço</a>
                <a href="#">Sustentabilidade</a>
                <a href="#">Garantias</a>
            </div>
            <div>
                <a href="#">Bandeiras aceitas</a>
            </div>
        </footer>
    </body>
</html>