<div class="container w-25">
    <h5>digitar los numero par o impar</h5>

    <?php
        echo "<hr>"
        ?>

    <form action="" method="get">
        <div class="mb-3">
            <label for="">Ingrese un numero par o impar</label>
            <input type="text" name="pi" class="form-control">
        </div>

        <div class="mb-3">
            <button class="btn btn-primary">Resultado</button>
        </div>
    </form>

    <?php
        $num = $_GET['pi'];
        if (($num % 2) == 0) {
        echo 'Es un numero par';
        } else {
        echo 'Es un numero impar';
        }
        ?>
</div>
</body>

</html>