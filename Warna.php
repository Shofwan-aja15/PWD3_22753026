<!Doctype html>
<html>

<head>
   <title>Cntoh Perulangan Foreach dalam HTML untuk Select</title>
</head>

<body>
    <h1>Pilih Warna</h1>
    <form action="#" method="post">
        <select name="warna">
            <?php
            // Daftar warna dalam bentuk Array
            $daftarWarna = array("merah", "hijau", "Biru", "kuning", "jingga");

            // Menggunakan perulangan foreach
            foreach ($daftarWarna as $warna) {
                echo "<option value='$warna'>$warna</option>";
            }
            ?>
            </select>
            <input type="submit" value="Pilih">
        </form>
        </body>

        </html>