<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "scripts/head.php";
    ?>
    <link rel="stylesheet" href="css/style_galeria.css">
</head>

<body>
    <?php
    require_once "scripts/header.php";
    require_once "admin/admin/db_connection.php";
    ?>
    <div class="container9">
        <div class="hero">
            <img src="img/galeria.png">
        </div>
    </div>
    <div class="container_gallery">
        <div class="heading">
            <h3>Galeria <span>DON PIZZA</span></h3>
        </div>
        <div class="box_gallery">
            <?php
            $sql = "SELECT imagem FROM imagem";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                $imagens = array();
                while ($row = $result->fetch_assoc()) {
                    $imagens[] = "img/" . $row['imagem'];
                }
            } else {
                echo "0 resultados";
            }
            ?>

            <div class="dream">
                <img src="<?php echo isset($imagens[0]) ? $imagens[0] : ''; ?>">
                <img src="<?php echo isset($imagens[1]) ? $imagens[1] : ''; ?>">
                <img src="<?php echo isset($imagens[2]) ? $imagens[2] : ''; ?>">
                <img src="<?php echo isset($imagens[3]) ? $imagens[3] : ''; ?>">
                <img src="<?php echo isset($imagens[4]) ? $imagens[4] : ''; ?>">
            </div>
            <div class="dream">
                <img src="<?php echo isset($imagens[5]) ? $imagens[5] : ''; ?>">
                <img src="<?php echo isset($imagens[6]) ? $imagens[6] : ''; ?>">
                <img src="<?php echo isset($imagens[7]) ? $imagens[7] : ''; ?>">
                <img src="<?php echo isset($imagens[8]) ? $imagens[8] : ''; ?>">
                <img src="<?php echo isset($imagens[9]) ? $imagens[9] : ''; ?>">
            </div>
            <div class="dream">
                <img src="<?php echo isset($imagens[10]) ? $imagens[10] : ''; ?>">
                <img src="<?php echo isset($imagens[11]) ? $imagens[11] : ''; ?>">
                <img src="<?php echo isset($imagens[12]) ? $imagens[12] : ''; ?>">
                <img src="<?php echo isset($imagens[13]) ? $imagens[13] : ''; ?>">
                <img src="<?php echo isset($imagens[14]) ? $imagens[14] : ''; ?>">
            </div>
        </div>
    </div>
    <div class="trailer">
        <div class="heading">
            <h3>Trailer<span>DON PIZZA</span></h3>
        </div>
    </div>
    <div class="container_video">
    <?php
            $sql = "SELECT vid FROM video";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                $videos = array();
                while ($row = $result->fetch_assoc()) {
                    $videos[] = "vid/" . $row['vid'];
                }
            } else {
                echo "0 resultados";
            }
            $conn->close();
            ?>
        <div class="cheese">
            <video src="<?php echo isset($videos[0]) ? $videos[0] : '';?>" type="video/mp4" controls></video>
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
<script defer src="js/galeria.js"></script>

</html>