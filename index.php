<?php

include "header.php";


$bayar1 = 9000000 * 3;
$bayar2 = 850000 * 4;
$bayar3 = 500000 * 6;
$bayar4 = 3000000 * 7;

$TOTAL = $bayar1 + $bayar2 + $bayar3 + $bayar4;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Sub Total</th>
        </tr>

        <?php

        $desk = array(
            array("no" => 1, "kode" => "B001", "Nama" => "Laptop Asus", "harga" => number_format(9000000), "Jumlah" => 3, "bayar" => number_format($bayar1)),
            array("no" => 2, "kode" => "B002", "Nama" => "Keyboard logitech", "harga" => number_format(850000), "Jumlah" => 4, "bayar" => number_format($bayar2)),
            array("no" => 3, "kode" => "B003", "Nama" => "Speaker", "harga" => number_format(500000), "Jumlah" => 6, "bayar" => number_format($bayar3)),
            array("no" => 7, "kode" => "B004", "Nama" => "Printer Espon", "harga" => number_format(3000000), "Jumlah" => 7, "bayar" => number_format($bayar4)),
        );

        $number = 0;

        foreach ($desk as $subAray) {
            ?>
            <tr>
                <td align="center">
                    <?php echo ++$number; ?>
                </td>
                <td align="center">
                    <?php echo $subAray['kode']; ?>
                </td>
                <td align="center">
                    <?php echo $subAray['Nama']; ?>
                </td>
                <td align="right">
                    Rp.
                    <?php echo $subAray['harga']; ?>
                </td>
                <td align="center">
                    <?php echo $subAray['Jumlah']; ?>
                </td>
                <td align="right">
                    Rp.
                    <?php echo $subAray['bayar']; ?>
                </td>
            </tr>
        <?php } ?>
        <tr>
            <th colspan="5" align="right">TOTAL</th>
            <td align="right">
                Rp.
                <?= number_format($TOTAL) ?>
            </td>
        </tr>
        

</body>

</html>


