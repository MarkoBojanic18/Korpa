<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vasa korpa</title>


</head>

<body>


    <table>
        <thead>
            <th>Naziv proizvoda</th>
            <th>Cena proizvoda</th>
            <th>Kolicina proizvoda</th>
        </thead>
        <tbody>

            <?php 
                foreach($korpa as $korpa_item):
            ?>

            <tr>
                <td><?php echo $korpa_item['naziv'];?></td>
                <td><?php echo $korpa_item['cena']; ?></td>
                <td><?php switch($korpa_item['id']){
                    case 1: {
                        echo $kolicinaProizvodaLaptop;
                        break;
                    }
                    case 2: {
                        echo  $kolicinaProizvodaMis;
                        break;
                    }
                    case 3: {
                        echo $kolicinaProizvodaSlusalice;
                        break;
                    }
                    case 4: {
                        echo $kolicinaProizvodaTastatura;
                        break;
                    }
                }?></td>
            </tr>

            <?php 
                endforeach;
            ?>

        </tbody>
        <tfoot>
            <tr>
                <td>Ukupno:</td>
                <td><?php echo $ukupno; ?></td>
                <td><?php echo $ukupno_proizvoda?></td>
            </tr>
        </tfoot>
    </table>
    <br><br>
    <form action="" class="dugmici" method="post">
        <a href="?"> Nastavi sa kupovinom</a>
        <input class="button" type="submit" name="submit" value="Odustani">
        <input class="button" type="submit" name="submit" value="Plati">
    </form>






</body>

</html>