<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping Alternatif</title>
</head>
<body>
    <h1>Looping dengan Pendekatan Alternatif</h1>

    <?php
    echo "<h3>Soal No 1 Looping I Love PHP (Alternatif)</h3>";

    $results = [];
    for ($i = 2; $i <= 20; $i += 2) {
        $results[] = "$i - I Love PHP";
    }
    echo "LOOPING PERTAMA<br>" . implode("<br>", $results) . "<br><br>";

    echo "LOOPING KEDUA<br>";
    foreach (array_reverse($results) as $result) {
        echo "$result<br>";
    }

    echo "<h3>Soal No 2 Looping Array Modulo (Alternatif)</h3>";
    $numbers = [18, 45, 29, 61, 47, 34];
    $rest = array_map(fn($num) => $num % 5, $numbers);
    echo "Array sisa baginya adalah: ";
    print_r($rest);
    echo "<br>";

    echo "<h3>Soal No 3 Loop Associative Array (Alternatif)</h3>";
    $assocItems = array_map(fn($item) => [
        "id" => $item[0],
        "name" => $item[1],
        "price" => $item[2],
        "description" => $item[3],
        "source" => $item[4]
    ], $items);
    echo "<pre>";
    print_r($assocItems);
    echo "</pre>";

    echo "<h3>Soal No 4 Asterix (Alternatif)</h3>";
    for ($i = 1; $i <= 5; $i++) {
        echo str_repeat("* ", $i) . "<br>";
    }
    ?>

</body>
</html>
