<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        table {
            border-collapse: collapse;
            width: 700px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>

<?php

function rupiah($harga)
{
    return "Rp " . number_format($harga, 0, ",", ".");
}

$produk = [
    [
        "nama" => "Laptop Lenovo LOQ",
        "kategori" => "Elektronik",
        "harga" => 12500000,
        "stok" => 10
    ],
    [
        "nama" => "Mouse Logitech",
        "kategori" => "Aksesoris",
        "harga" => 250000,
        "stok" => 25
    ],
    [
        "nama" => "Keyboard Mechanical",
        "kategori" => "Aksesoris",
        "harga" => 650000,
        "stok" => 15
    ],
    [
        "nama" => "Monitor 24 Inch",
        "kategori" => "Elektronik",
        "harga" => 2200000,
        "stok" => 8
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "Audio",
        "harga" => 450000,
        "stok" => 20
    ]
];

?>

<h2>Daftar Produk</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    <?php
    $no = 1;

    foreach ($produk as $item) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $item["nama"] . "</td>";
        echo "<td>" . $item["kategori"] . "</td>";
        echo "<td>" . rupiah($item["harga"]) . "</td>";
        echo "<td>" . $item["stok"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>