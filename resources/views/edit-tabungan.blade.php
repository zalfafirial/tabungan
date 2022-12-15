<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="">
            <label for="fname">NIS</label>
            <input type="text" id="fname" name="firstname" placeholder="Masukkan nis disini">

            <label for="lname">Nama Lengkap</label>
            <input type="text" id="lname" name="lastname" placeholder="Masukkan nama disini">

            <label for="rayon">Rayon</label>
            <select id="rayon" name="rayon">
                <option value="Cic 1">Cic 1</option>
                <option value="Cic 2">Cic 2</option>
                <option value="Cic 3">Cic 3</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
