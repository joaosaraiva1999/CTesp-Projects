<?php
if (isset($_POST['nome'])) {
    include_once('admin/admin/db_connection.php');

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $erro = [];

    if (empty($nome) || strlen($nome) < 3 || strlen($nome) > 70) {
        $erro[] = 'O nome é Inválido';
    }

    if (empty($telefone) || strlen($telefone) != 9) {
        $erro[] = 'Número Inválido';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro[] = 'Email Inválido';
    }

    if (empty($erro)) {
        $stmt = $conn->prepare("INSERT INTO programa_socio (nome, email, telefone) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $telefone);
        if ($stmt->execute()) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erro ao inserir no banco de dados']);
        }
        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'errors' => $erro]);
    }

    $conn->close();
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "scripts/head.php";
    ?>
    <link rel="stylesheet" href="css/style_socio.css">
</head>

<body>
    <?php
    require_once "scripts/header.php"
    ?>
    <div class="container9">
        <div class="hero">
            <img src="img/socio.png">
        </div>
    </div>
    <div class="banner_vantagens">
        <h3 class='h3_vantagem'>Cartão Sócio</h3>
        <h1 class='h1_vantagem'>Descubra as vantagens de ser Sócio</h1>
        <img class='bannerimg' src="img\vant.png">
    </div>
    <div class='container_cards'>
        <div class="card_vantagens">
            <div>
                <i class="fa-sharp fa-solid fa-dollar-sign fa-5x text-white custom"></i>
            </div>
            <div>
                <h4>Promoções</h4>
            </div>
        </div>
        <div class="card_vantagens">
            <div>
                <i class="fa-solid fa-gift fa-5x text-white custom"></i>
            </div>
            <div>
                <h4>Recompensas</h4>
            </div>
        </div>
        <div class="card_vantagens">
            <div>
                <i class="fa-solid fa-person-running fa-5x text-white custom"></i>
            </div>
            <div>
                <h4>Prioridade</h4>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class='promo_info'>
            <h1 class='m-5 text-white'>As Melhores Promoções</h1>
            <h4 class='h4 m-5' style='font-size: 24px;'>As promoções de desconto da Don Pizza são
                imbatíveis, oferecendo pizzas deliciosas a
                preços reduzidos. Aproveite descontos incríveis em várias opções do menu, mantendo sempre a alta
                qualidade. Desfrute da melhor pizza da cidade e economize mais!
            </h4>
            <a href="#" class="btna m-5" id="button">Ver Mais</a>
        </div>
        <div class='image_info'>
            <img src="img/pizzaria.jpg">
        </div>
    </div>
    <div class="container3">
        <div class='image_info'>
            <img src="img/recompensa.jpg">
        </div>
        <div class='promo_info'>
            <h1 class='m-5 text-white'>As Melhores Recompensas</h1>
            <h4 class='h4 m-5' style='font-size: 24px;'>As recompensas da Don Pizza são as melhores,
                oferecendo pontos a cada compra que podem ser trocados por pizzas gratuitas. Quanto mais encomendas
                fizer, mais benefícios acumula, garantindo deliciosas vantagens. Junte-se ao nosso programa de
                recompensas e saboreie a diferença!
            </h4>
            <a href="#" class="btno m-5" id="button">Ver Mais</a>
        </div>
    </div>
    <div class="container6">
        <div class="form6">
            <h1>DonPizza Club</h1>
            <form action="" class='form1' method="POST" id='form_socio'>
                <div class="row mb-3">
                    <div class="col box" id="first-name-container">
                        <label for="utilizador" class="form-label text-dark">Nome</label>
                        <input type="text" name='nome' id="nome" class="form-control" placeholder="Insira o seu Nome">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="col mt-4" id="data_reserva-container">
                    <label for="data_reserva" class="form-label text-dark">Telefone</label>
                    <input type="tel" name='telefone' id="telefone" placeholder='Insira o seu Nº de telefone/telemovel'
                        class="form-control">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col mt-4" id="pessoas-container">
                    <label for="pessoas" class="form-label text-dark">Email</label>
                    <input type="text" name='email' id="email" class="form-control" placeholder="Insira o seu Email">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3 mt-5">
                    <button type="submit" name='submit' id='submit' class="btn btn-danger mb-4">Juntar-se</button>
                </div>
            </form>
        </div>
        <div class="modal fade" id='modalsocio' tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header  bg-warning">
                            <h5 class="modal-title">DON PIZZA</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-warning">
                            <p>Você Juntou-se ao Don Pizza Club com Sucesso</p>
                        </div>
                        <div class="modal-footer bg-warning">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <div class="imagem6">
            <img src="img\bannersocio.png">
        </div>
    </div>
    <div class="logos">
        <div class="logos_slide">
            <img src="img/visa.webp">
            <img src="img/unilever.png">
            <img src="img/cocacola.png">
            <img src="img/nestle.png">
            <img src="img/redbull.png">
            <img src="img/apple.png">
            <img src="img/mastercard.png">
            <img src="img/heineken.png">
            <img src="img/mbway.png">
            <img src="img/recheio.png">
            <img src="img/barilla.png">
            <img src="img/hellmans.png">
            <img src="img/heinz.png">
            <img src="img/tabasco.png">
            <img src="img/uber.png">
        </div>
        <div class="logos_slide">
            <img src="img/visa.webp">
            <img src="img/unilever.png">
            <img src="img/cocacola.png">
            <img src="img/nestle.png">
            <img src="img/redbull.png">
            <img src="img/apple.png">
            <img src="img/mastercard.png">
            <img src="img/heineken.png">
            <img src="img/mbway.png">
            <img src="img/recheio.png">
            <img src="img/barilla.png">
            <img src="img/hellmans.png">
            <img src="img/heinz.png">
            <img src="img/tabasco.png">
            <img src="img/uber.png">
        </div>
    </div>

    <footer>
        <?php
                    require_once "scripts/footer.php"
                ?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<!--JQUERY-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="js/navigation.js"></script>
<script defer src="js/socio.js"></script>

</html>