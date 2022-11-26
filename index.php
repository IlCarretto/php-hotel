<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="text-center">
        <div class="ms-container">
            <h1>I nostri hotels!</h1>
            <?php
            for ($i = 0; $i < count($hotels); $i++) {
                $single_hotel = $hotels[$i];
            }
            ?>
            <table class="table">
                <thead>
                    <tr class="table-primary">
                        <?php
                        foreach ($single_hotel as $key => $value) {
                            echo "<th scope='col'>" . $key . "<th/>";
                        } ?>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <?php
                        foreach ($single_hotel as $key => $value) {
                            echo "<td scope='col'>" . $value . "<td/>";
                        } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>