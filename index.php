
<html>
    <head>
        <meta charset="UTF-8">
        <title>Baze de date </title>
    </head>
    <body>
        <?php
            //include connection file
            include 'connection.php';
            $sql='SELECT * FROM flori ORDER BY pret ASC';
            $query=mysqli_query($con,$sql) or die(mysqli_error($con));
        ?>
        <table width="70" cellpadding="4" cellspace="4">
            <tr>
                <th>Nume</th>
                <th>Culoare</th>
                <th>Marime</th>
                <th>Pret</th>
            </tr>
            <?php while($row=mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $row["nume"];?></td>
                <td><?php echo $row["culoare"];?></td>
                <td><?php echo $row["marime"];?></td>
                <td><?php echo $row["pret"];?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
