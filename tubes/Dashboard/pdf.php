<?php
require("../functions.php");
session_start();
checkAuthorization('admin');

$datauser = query("SELECT * FROM user");
$obat = query("SELECT * FROM obat");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="js/main.js"></script>
</head>


<body>

    <div class="recent--patients">
        <div class="title">
            <h2 class="section--title">Data user</h2>
            <button class="add" onclick="generatePDF()"><i class="ri-file-pdf-fill"></i>Reporting PDF</button>
        </div>
        <div class="table">
            <table id="invoice">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>alamat</th>
                        <th>email</th>
                        <th>nomor_telepon</th>
                        <th>Status</th>
                        <th>Settings</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datauser as $user) : ?>
                        <tr>
                            <td><?= $user["username"]; ?></td>
                            <td><?= $user["alamat"]; ?></td>
                            <td><?= $user["email"]; ?></td>
                            <td><?= $user["nomor_telepon"]; ?></td>

                            <td class="pending">pending</td>
                            <td>
                                <span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
<script>
    function generatePDF() {
        const element = document.getElementById("invoice");

        html2pdf().from(element).save();
    }
</script>

</html>