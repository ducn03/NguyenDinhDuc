<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Đổi tiền</title>
    <style>
        div {
            margin-bottom: 10px;
        }

        div span {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>
    <?php if (isset($_POST['form_submitted'])) : ?>
        <!--
phần này sẽ thi hành khi form submitted -->
        <?php
        function d2v($dollar)
        {
            return $dollar * 22000;
        }
        $dollar = intval($_POST["dollar"]);
        echo "<h3> $dollar $ = " . d2v($dollar) . " vnd</h3>";
        ?>
    <?php else : ?>
        <h2>Đổi tiền</h2>
        <form action="dollar2vnd.php" method="POST">
            <div><span>Dollar:</span> <input type="text" name="dollar"></div>
            <input type="hidden" name="form_submitted" value="1" />
            <div><input type="submit" value="Submit"></div>
        </form>
    <?php endif; ?>
</body>

</html>