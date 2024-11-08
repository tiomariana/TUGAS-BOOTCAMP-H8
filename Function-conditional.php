<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function Conditional Alternatif</title>
</head>
<body>
    <h1>Function & Conditional dengan Pendekatan Alternatif</h1>

    <?php
    echo "<h3>Soal No 1 Greetings (Alternatif)</h3>";

    function greetings($name) {
        echo "Halo $name, Selamat Datang di Garuda Cyber Institute!<br>";
    }
    greetings("Bagas");
    greetings("Wahyu");
    greetings("Nama Peserta");

    echo "<h3>Soal No 2 Reverse String (Alternatif)</h3>";

    function reverseString($str) {
        $chars = str_split($str);
        return implode(array_reverse($chars));
    }
    echo reverseString("abdul") . "<br>";
    echo reverseString("Garuda Cyber Institute") . "<br>";
    echo reverseString("We Are GC-InsDeveloper") . "<br>";

    echo "<h3>Soal No 3 Palindrome (Alternatif)</h3>";

    function isPalindrome($str) {
        return reverseString($str) === $str;
    }
    echo isPalindrome("civic") ? "true" : "false", "<br>";
    echo isPalindrome("nababan") ? "true" : "false", "<br>";
    echo isPalindrome("jambaban") ? "true" : "false", "<br>";
    echo isPalindrome("racecar") ? "true" : "false", "<br>";

    echo "<h3>Soal No 4 Tentukan Nilai (Alternatif)</h3>";

    function tentukan_nilai($nilai) {
        return match (true) {
            $nilai >= 85 => "Sangat Baik",
            $nilai >= 70 => "Baik",
            $nilai >= 60 => "Cukup",
            default => "Kurang",
        };
    }
    echo tentukan_nilai(98) . "<br>";
    echo tentukan_nilai(76) . "<br>";
    echo tentukan_nilai(67) . "<br>";
    echo tentukan_nilai(43) . "<br>";
    ?>

</body>
</html>
