<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Katalog proizvoda</title>



</head>

<body>


    <table>
        <thead>
            <th>Naziv proizvoda</th>
            <th>Cena proizvoda</th>
        </thead>
        <tbody>

            <?php
                foreach($proizvodi as $pr):
            ?>

            <tr>
                <td><?php echo $pr['naziv'];?></td>
                <td><?php echo $pr['cena'];?></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $pr['id'];?>">
                        <input class="kupi" type="submit" name="submit" value="Kupi">
                    </form>
                </td>
            </tr>

            <?php
                endforeach;
            ?>
        </tbody>
    </table>

    <div class="dugmad">
        <p>Vasa korpa sadrzi: <?php echo count($_SESSION['korpa']);?></p>
        <a href="?vidi_korpu">Vidi korpu</a>

    </div>

</body>

</html>