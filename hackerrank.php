<?php
// Warmup
// Solve me first
function solveMeFirst($a, $b)
{
    // Hint: Type return $a + $b; below  
    return $a + $b;
}

$handle = fopen("php://stdin", "r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a, (int)$_b);
print($sum);
fclose($handle);
echo "\n";

// Time Conversion
/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s)
{
    // Write your code here
    $time = date_create_from_format('h:i:sA', $s);

    if ($time) {
        return date_format($time, 'H:i:s');
    } else {
        return "Invalid input";
    }

    // Alternatif
    // return date('H:i:s', strtotime($s));
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$s = rtrim(fgets(STDIN), "\r\n");
$result = timeConversion($s);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Simple array sum
/*
 * Complete the 'simpleArraySum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY ar as parameter.
 */

function simpleArraySum($ar)
{
    // Write your code here
    return array_sum($ar);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$ar_count = intval(trim(fgets(STDIN)));
$ar_temp = rtrim(fgets(STDIN));
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
$result = simpleArraySum($ar);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Diagonal difference
/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr)
{
    // Write your code here
    $n = count($arr);
    $primarySum = 0;
    $secondarySum = 0;

    for ($i = 0; $i < $n; $i++) {
        $primarySum += $arr[$i][$i];
        $secondarySum += $arr[$i][$n - $i - 1];
    }

    return abs($primarySum - $secondarySum);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$n = intval(trim(fgets(STDIN)));
$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Plus minus
/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr)
{
    // Write your code here
    $n = count($arr);
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;

    // Count positive, negative, and zero
    // Alternatif
    // for ($i = 0; $i < $n; $i++) {
    //     $number = $arr[$i];
    //     if ($number > 0) {
    //         $positiveCount++;
    //     } elseif ($number < 0) {
    //         $negativeCount++;
    //     } else {
    //         $zeroCount++;
    //     }
    // }
    foreach ($arr as $number) {
        if ($number > 0) {
            $positiveCount++;
        } elseif ($number < 0) {
            $negativeCount++;
        } else {
            $zeroCount++;
        }
    }

    // Calculate fractions
    $positiveFraction = $positiveCount / $n;
    $negativeFraction = $negativeCount / $n;
    $zeroFraction = $zeroCount / $n;

    // Print the fractions
    echo number_format($positiveFraction, 6) . "\n";
    echo number_format($negativeFraction, 6) . "\n";
    echo number_format($zeroFraction, 6) . "\n";
}

$n = intval(trim(fgets(STDIN)));
$arr_temp = rtrim(fgets(STDIN));
$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
plusMinus($arr);
echo "\n";

// Staircase
/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n)
{
    // Write your code here
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i) . str_repeat("#", $i) . "\n";
    }
}

$n = intval(trim(fgets(STDIN)));
staircase($n);
echo "\n";

// Mini-max sum
/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr)
{
    // Write your code here
    $minValue = min($arr);
    $maxValue = max($arr);
    $totalValue = array_sum($arr);

    $minSum = $totalValue - $minValue;
    $maxSum = $totalValue - $maxValue;

    echo $maxSum . " " . $minSum;
}

$arr_temp = rtrim(fgets(STDIN));
$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
miniMaxSum($arr);
echo "\n";

// Birthday cake candles
/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles)
{
    // Write your code here
    // Find the maximum candle height
    $maxHeight = max($candles);

    // Count the number of candles with the maximum height
    $count = array_count_values($candles)[$maxHeight];

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$candles_count = intval(trim(fgets(STDIN)));
$candles_temp = rtrim(fgets(STDIN));
$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));
$result = birthdayCakeCandles($candles);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// A very big sum
/*
 * Complete the 'aVeryBigSum' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 */

function aVeryBigSum($ar)
{
    // Write your code here
    return array_sum($ar);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$ar_count = intval(trim(fgets(STDIN)));
$ar_temp = rtrim(fgets(STDIN));
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
$result = aVeryBigSum($ar);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Compare the triplets
/*
 * Complete the 'compareTriplets' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function compareTriplets($a, $b)
{
    $alice = 0;
    $bob = 0;
    for ($i = 0; $i < 3; $i++) {
        if ($a[$i] > $b[$i]) {
            $alice++;
        }
        if ($a[$i] < $b[$i]) {
            $bob++;
        }
    }

    return [$alice, $bob];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$a_temp = rtrim(fgets(STDIN));
$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));
$b_temp = rtrim(fgets(STDIN));
$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));
$result = compareTriplets($a, $b);
fwrite($fptr, implode(" ", $result) . "\n");
fclose($fptr);
echo "\n";

// Strings
// CamelCase
/*
 * Complete the 'camelcase' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function camelcase($s)
{
    // Write your code here
    return preg_match_all('/[A-Z]/', $s) + 1;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$s = rtrim(fgets(STDIN), "\r\n");
$result = camelcase($s);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Strong password
/*
 * Complete the 'minimumNumber' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. STRING password
 */

function minimumNumber($n, $password)
{
    // Return the minimum number of characters to make the password strong
    $req = 0;

    // Memeriksa huruf kecil
    if (preg_match('/[a-z]/', $password)) {
        $req++;
    }

    // Memeriksa huruf besar
    if (preg_match('/[A-Z]/', $password)) {
        $req++;
    }

    // Memeriksa angka
    if (preg_match('/[0-9]/', $password)) {
        $req++;
    }

    // Memeriksa karakter khusus
    if (preg_match('/[!@#$%^&*()\-+]/', $password)) {
        $req++;
    }

    // Menghitung jumlah karakter minimum yang dibutuhkan untuk memenuhi persyaratan
    $missingConditions = 4 - $req;

    // Memeriksa kebutuhan panjang minimum
    $lengthToAdd = max(6 - $n, 0);

    // Mengembalikan nilai maksimum antara kondisi yang belum terpenuhi dan karakter yang harus ditambahkan
    return max($missingConditions, $lengthToAdd);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$n = intval(trim(fgets(STDIN)));
$password = rtrim(fgets(STDIN), "\r\n");
$answer = minimumNumber($n, $password);
fwrite($fptr, $answer . "\n");
fclose($fptr);
echo "\n";

// Caesar cipher
/*
 * Complete the 'caesarCipher' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. STRING s
 *  2. INTEGER k
 */

function caesarCipher($s, $k)
{
    // Write your code here
    $result = '';

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];

        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $isUpperCase = ctype_upper($char);

            $baseAscii = ord('A');
            if (!$isUpperCase) {
                $baseAscii = ord('a');
            }

            $newAscii = ($ascii - $baseAscii + $k) % 26;
            $newChar = chr($newAscii + $baseAscii);

            $result .= $newChar;
        } else {
            $result .= $char;
        }
    }

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$n = intval(trim(fgets(STDIN)));
$s = rtrim(fgets(STDIN), "\r\n");
$k = intval(trim(fgets(STDIN)));
$result = caesarCipher($s, $k);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Mars exploration
/*
 * Complete the 'marsExploration' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function marsExploration($s)
{
    // Write your code here
    $str = 'SOS';
    $count = 0;
    $len = strlen($s);

    // Membuat pola yang diharapkan dengan panjang yang sesuai
    $strPattern = str_repeat($str, $len / 3);

    for ($i = 0; $i < $len; $i++) {
        if ($s[$i] !== $strPattern[$i]) {
            $count++;
        }
    }

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$s = rtrim(fgets(STDIN), "\r\n");
$result = marsExploration($s);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// HackerRank in a String!Page!
/*
 * Complete the 'hackerrankInString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function hackerrankInString($s)
{
    // Write your code here
    $hackerrank = "hackerrank";
    $j = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        // Jika karakter saat ini sama dengan karakter pada urutan yang diharapkan
        if ($s[$i] === $hackerrank[$j]) {
            $j++; // Pindahkan ke karakter berikutnya di "hackerrank"
        }

        // Jika kita telah mencapai akhir dari "hackerrank," kita tahu kita telah menemukannya
        if ($j === strlen($hackerrank)) {
            return "YES";
        }
    }

    return "NO";
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");
    $result = hackerrankInString($s);
    fwrite($fptr, $result . "\n");
}
fclose($fptr);
echo "\n";

// Pangrams
/*
 * Complete the 'pangrams' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function pangrams($s)
{
    // Write your code here
    $s = strtolower($s); // Ubah string ke huruf kecil untuk memudahkan perbandingan
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';

    for ($i = 0; $i < strlen($alphabet); $i++) {
        $char = $alphabet[$i];

        // Jika karakter dalam alfabet tidak ada dalam string, maka bukan pangram
        if (strpos($s, $char) === false) {
            return "not pangram";
        }
    }

    // Jika kita mencapai titik ini, berarti string adalah pangram
    return "pangram";
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$s = rtrim(fgets(STDIN), "\r\n");
$result = pangrams($s);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Seperate the number
/*
 * Complete the 'separateNumbers' function below.
 *
 * The function accepts STRING s as parameter.
 */

function separateNumbers($s)
{
    // Write your code here
    $length = strlen($s);

    // Jika panjang string kurang dari 2, tidak mungkin membentuk urutan bertambah
    if ($length < 2) {
        echo "NO\n";
        return;
    }

    $possible = false;

    for ($i = 1; $i <= $length / 2; $i++) {
        $firstNum = substr($s, 0, $i);
        $remaining = substr($s, $i);
        $nextNum = (int)$firstNum + 1;

        while (!empty($remaining)) {
            $nextStr = (string)$nextNum;
            $nextLen = strlen($nextStr);

            if (strpos($remaining, $nextStr) === 0) {
                $remaining = substr($remaining, $nextLen);
                $nextNum++;
            } else {
                break;
            }
        }

        if (empty($remaining)) {
            $possible = true;
            break;
        }
    }

    if ($possible) {
        echo "YES $firstNum\n";
    } else {
        echo "NO\n";
    }
}

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");
    separateNumbers($s);
}

echo "\n";

/*
Penjelasan logic nya:

1. Pertama, memeriksa jika panjang string input $s kurang dari 2 karakter, maka langsung 
mengeluarkan "NO". Karena dengan kurang dari 2 karakter, tidak mungkin membentuk urutan bertambah.
2. Selanjutnya, inisialisasi variabel $possible sebagai false yang akan digunakan untuk menandai 
apakah urutan yang diharapkan ditemukan.
3. Buat loop yang akan mencoba panjang urutan yang berbeda, dimulai dari 1 hingga setengah panjang 
string. Ini dilakukan dengan mengambil substring pertama dari panjang yang sesuai.
4. Setiap iterasi loop, mengambil substring pertama dari string input sebagai $firstNum dan sisa string 
sebagai $remaining. Kemudian inisialisasi $nextNum dengan angka berikutnya yang diasumsikan.
5. Kemudian, memulai loop dalam loop yang mencoba mencocokkan urutan angka di dalam sisa string. 
Ini dilakukan dengan mengambil angka berikutnya dalam bentuk string dan mencoba mencarinya di 
sisa string menggunakan strpos.
6. Jika ditemukan, potong substring tersebut dari sisa string dan inkrementasi angka berikutnya. 
Ini dilakukan hingga sisa string habis atau tidak ada lagi angka berikutnya yang cocok.
7. Jika semua angka berhasil diproses dan sisa string menjadi kosong, maka menandai $possible sebagai 
true yang berarti urutan yang diharapkan ditemukan.
8. Setelah loop selesai, periksa apakah $possible adalah true atau false. Jika $possible adalah true, 
maka akan mencetak "YES" diikuti dengan angka awal urutan yang ditemukan. Jika $possible adalah false, 
maka mencetak "NO" untuk menandai bahwa urutan yang diharapkan tidak ditemukan.
*/

// Gemstone
/*
 * Complete the 'gemstones' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING_ARRAY arr as parameter.
 */

function gemstones($arr)
{
    // Write your code here
    $gemstoneCount = 0;

    // Menghapus karakter duplikat dari setiap string
    $arr = array_map('str_split', $arr);
    $arr = array_map('array_unique', $arr);

    // Intersect semua array karakter
    $gemstones = call_user_func_array('array_intersect', $arr);

    // Jumlah karakter batu permata
    $gemstoneCount = count($gemstones);

    return $gemstoneCount;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$n = intval(trim(fgets(STDIN)));
$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_item = rtrim(fgets(STDIN), "\r\n");
    $arr[] = $arr_item;
}

$result = gemstones($arr);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

/*
Penjelasan kode:

1. Inisialisasi variabel $gemstoneCount ke 0. Variabel ini akan digunakan untuk menghitung jumlah 
karakter batu permata.
2. Menggunakan array_map untuk mengubah setiap string dalam array menjadi array karakter dan menghapus 
karakter duplikat dari setiap string. Hasilnya adalah array multidimensi yang berisi array karakter 
unik untuk setiap string.
3. Menggunakan call_user_func_array untuk menjalankan fungsi array_intersect pada array multidimensi 
yang dihasilkan pada langkah sebelumnya. array_intersect adalah fungsi yang digunakan untuk menemukan 
elemen-elemen yang sama (interseksi) di antara satu atau lebih array. Dalam hal ini, kita menggunakan 
call_user_func_array untuk menerapkan array_intersect pada semua array karakter yang dihasilkan 
sebelumnya.
4. Hasil dari array_intersect adalah array karakter yang merupakan karakter batu permata, yaitu 
karakter yang ada di semua string dalam array.
5. Menghitung jumlah karakter batu permata dengan menggunakan count($gemstones).
6. Mengembalikan nilai $gemstoneCount sebagai jumlah karakter batu permata yang sama di antara semua 
string dalam array.
*/

// Making anagrams
/*
 * Complete the 'makingAnagrams' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. STRING s1
 *  2. STRING s2
 */

function makingAnagrams($s1, $s2)
{
    // Write your code here
    // Inisialisasi array untuk menghitung kemunculan karakter dalam s1 dan s2
    $charCount1 = [];
    $charCount2 = [];

    $alphabet = 'abcdefghijklmnopqrstuvwxyz';

    $len1 = strlen($s1);
    $len2 = strlen($s2);

    for ($i = 0; $i < $len1; $i++) {
        $char = $s1[$i];
        $pos = strpos($alphabet, $char);
        if ($pos !== false) {
            $charCount1[$pos]++;
        }
    }

    // Menghitung kemunculan karakter dalam s2 dan mengurangkan dari s1
    for ($i = 0; $i < $len2; $i++) {
        $char = $s2[$i];
        $pos = strpos($alphabet, $char);
        if ($pos !== false) {
            $charCount2[$pos]++;
        }
    }

    // Menghitung total karakter yang perlu dihapus
    $deletions = 0;

    for ($i = 0; $i < 26; $i++) {
        $deletions += abs($charCount1[$i] - $charCount2[$i]);
    }

    return $deletions;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$s1 = rtrim(fgets(STDIN), "\r\n");
$s2 = rtrim(fgets(STDIN), "\r\n");
$result = makingAnagrams($s1, $s2);
fwrite($fptr, $result . "\n");
fclose($fptr);
echo "\n";

// Anagram
/*
 * Complete the 'anagram' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function anagram($s)
{
    // Write your code here
    // Pastikan panjang string genap, jika tidak, maka tidak mungkin bisa menjadi anagram
    if (strlen($s) % 2 !== 0) {
        return -1;
    }

    $mid = strlen($s) / 2;
    $s1 = substr($s, 0, $mid);
    $s2 = substr($s, $mid);

    // Inisialisasi array untuk menghitung kemunculan setiap karakter dalam s1
    $charCount = [];

    // Menginisialisasi array dengan kunci karakter alfabet dan nilai 0
    for ($char = 'a'; $char <= 'z'; $char++) {
        $charCount[$char] = 0;
    }

    // Menghitung kemunculan setiap karakter dalam s1
    for ($i = 0; $i < $mid; $i++) {
        $charCount[$s1[$i]]++;
    }

    // Menghitung operasi yang diperlukan untuk membuat s1 menjadi anagram dari s2
    $operations = 0;

    for ($i = 0; $i < $mid; $i++) {
        $char = $s2[$i];
        if ($charCount[$char] > 0) {
            $charCount[$char]--;
        } else {
            $operations++;
        }
    }

    return $operations;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");
    $result = anagram($s);
    fwrite($fptr, $result . "\n");
}
fclose($fptr);
echo "\n";

// Two string
/*
 * Complete the 'twoStrings' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. STRING s1
 *  2. STRING s2
 */

function twoStrings($s1, $s2)
{
    // Write your code here
    // Konversi kedua string ke array karakter
    $chars1 = str_split($s1);
    $chars2 = str_split($s2);

    // Cek apakah ada karakter yang sama di antara kedua string
    $commonChars = array_intersect($chars1, $chars2);

    // Jika ada karakter yang sama
    if (!empty($commonChars)) {
        return "YES";
    } else {
        return "NO";
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s1 = rtrim(fgets(STDIN), "\r\n");
    $s2 = rtrim(fgets(STDIN), "\r\n");
    $result = twoStrings($s1, $s2);
    fwrite($fptr, $result . "\n");
}
fclose($fptr);
echo "\n";
