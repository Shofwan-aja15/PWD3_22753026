<!DOCTYPE html>
<html>

<head>
    <title>Contoh Perulangan For dalam HTML untuk Select</title>
</head>

<body>
    <h1>Pilih Angka</h1>
    <form action="#" method="post">
        <select name="Angka">
            <?php
            //Menggunakan perulangan for
            for ($i = 1; $i <= 10; $i++) {
                echo"<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <Input type="submit" value="Pilih">
    </form>
</body>
</html>