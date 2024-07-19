<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpaChat!</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').slick({
                dots: true, // Mostra indicadores de navegação
                infinite: true, // Rotação infinita
                speed: 500, // Velocidade da transição
                fade: false, // Desativa a transição de desvanecimento (fade)
                cssEase: 'linear', // Tipo de animação da transição
                autoplay: true, // Ativa a rotação automática
                autoplaySpeed: 3000, // Velocidade da rotação automática (em milissegundos)
                arrows: false // Desativa as setas padrão
            });

            // Conecta as setas personalizadas ao Slick Carousel
            $('.carousel-prev').click(function(){
                $('.carousel').slick('slickPrev');
            });

            $('.carousel-next').click(function(){
                $('.carousel').slick('slickNext');
            });
        });
    </script>
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>ChatBot Comunicação Interna e Externa</h1>
        </div>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="#product-description">Descrição do Produto</a></li>
            <li><a href="#features">Funções</a></li>
            <li><a href="#benefits">Benefícios</a></li>
            <li><a href="#screenshots">Visões</a></li>
        </ul>
    </nav>
    
    <!-- Carousel Section -->
    <section class="carousel-container">
        <div class="carousel-prev">&#9664;</div> <!-- Setas personalizadas -->
        <div class="carousel-next">&#9654;</div>
        <div class="carousel">
            <div><img src="images/teste1.png" alt="Screenshot 1"></div>
            <div><img src="images/teste2.png" alt="Screenshot 2"></div>
            <div><img src="images/teste3.png" alt="Screenshot 3"></div>
        </div>
    </section>

    <main class="container">
        <section id="product-description" class="content-section">
            <h2>Descrição do Produto</h2>
            <p>Nosso revolucionário Chatbot Inteligente é uma solução automatizada que foi projetada para interagir com seus clientes de uma maneira eficiente e eficaz. Este chatbot está programado para fornecer informações detalhadas sobre si mesmo, incluindo funcionalidades, vantagens e como ele pode melhorar a experiência de atendimento ao cliente da sua empresa. Em adição à resolução de dúvidas comuns, nosso chatbot fornece em tempo real um protótipo de projeto de como a comunicação interna e a comunicação externa podem fluir de uma forma mais eficiente e eficaz. Amplie a satisfação dos seus clientes com a ajuda de um serviço de atendimento de 24/7 e customize as suas interações com base nas necessidades específicas do seu público.</p>
        </section>
        <section id="features" class="content-section">
            <h2>Funções</h2>
            <ul>
                <li>Mensagens em tempo real</li>
                <li>Interface amigável</li>
                <li>Comunicação segura</li>
                <li>Integração com sistemas já existentes</li>
                <li>Temas customizados</li>
                <li>Compatibilidade com computador e aplicativo mobile</li>
            </ul>
        </section>
        <section id="benefits" class="content-section">
            <h2>Benefícios</h2>
            <ul>
                <li>Integração interna dos colaboradores</li>
                <li>Custumizando seus serviços</li>
                <li>Automação usando Boot</li>
                <li>Segurança e Privacidade</li>
            </ul>
        </section>
        <section id="screenshots" class="content-section">
            <h2>Visões</h2>
            <div class="gallery">
                <img src="images/screenshot1.png" alt="Screenshot 1">
                <img src="images/screenshot2.png" alt="Screenshot 2">
                <img src="images/screenshot3.png" alt="Screenshot 3">
            </div>
        </section>
        <section class="cta">
            <button>Mostrar Mais</button>
            <button>Entre em Contato</button>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Chat Interface Product. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
