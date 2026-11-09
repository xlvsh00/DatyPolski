
<?php
session_start();

if (isset($_SESSION["numer"])) {
    $_SESSION["numer"] = 0;
    $_SESSION["punkty"] = 0;
}





?>

<?php
$pytania = [
    [
        "pytanie" => "W którym roku odbył się chrzest Polski?",
        "odpowiedzi" => ["A" => "966", "B" => "1000", "C" => "1410"],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "Kto był pierwszym królem Polski?",
        "odpowiedzi" => ["A" => "Mieszko I", "B" => "Bolesław Chrobry", "C" => "Kazimierz Wielki"],
        "poprawna" => "B"
    ],
    [
        "pytanie" => "W którym roku miała miejsce bitwa pod Grunwaldem?",
        "odpowiedzi" => ["A" => "1410", "B" => "1525", "C" => "1683"],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "Jakie barwy ma flaga Polski?",
        "odpowiedzi" => ["A" => "Czerwono-białe", "B" => "Biało-czerwone", "C" => "Niebiesko-białe"],
        "poprawna" => "B"
    ],
    [
        "pytanie" => "Jakie miasto jest stolicą Polski?",
        "odpowiedzi" => ["A" => "Kraków", "B" => "Warszawa", "C" => "Poznań"],
        "poprawna" => "B"
    ],
    [
        "pytanie" => "Jak nazywa się polski hymn narodowy?",
        "odpowiedzi" => ["A" => "Rota", "B" => "Mazurek Dąbrowskiego", "C" => "Bogurodzica"],
        "poprawna" => "B"
    ],
    [
        "pytanie" => "Które zwierzę jest symbolem w godle Polski?",
        "odpowiedzi" => ["A" => "Orzeł", "B" => "Żubr", "C" => "Wilk"],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "W którym roku Polska odzyskała niepodległość?",
        "odpowiedzi" => ["A" => "1918", "B" => "1939", "C" => "1945"],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "Kiedy wybuchła II wojna światowa?",
        "odpowiedzi" => [
            "A" => "1 września 1939",
            "B" => "11 listopada 1918",
            "C" => "1 sierpnia 1944"
        ],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "Kto był słynnym polskim astronomem?",
        "odpowiedzi" => [
            "A" => "Adam Mickiewicz",
            "B" => "Mikołaj Kopernik",
            "C" => "Fryderyk Chopin"
        ],
        "poprawna" => "B"
    ],
    [
        "pytanie" => "W którym roku Polska wstąpiła do Unii Europejskiej?",
        "odpowiedzi" => ["A" => "1999", "B" => "2004", "C" => "2010"],
        "poprawna" => "B"
    ],
    [
        "pytanie" => "Który król zastał Polskę drewnianą, a zostawił murowaną?",
        "odpowiedzi" => [
            "A" => "Kazimierz Wielki",
            "B" => "Zygmunt Stary",
            "C" => "Stanisław August Poniatowski"
        ],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "Jak nazywał się polski papież wybrany w 1978 roku?",
        "odpowiedzi" => ["A" => "Jan Paweł II", "B" => "Benedykt XVI", "C" => "Franciszek"],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "W którym roku wybuchło Powstanie Warszawskie?",
        "odpowiedzi" => ["A" => "1944", "B" => "1939", "C" => "1945"],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "Kto napisał „Pana Tadeusza”?",
        "odpowiedzi" => [
            "A" => "Henryk Sienkiewicz",
            "B" => "Adam Mickiewicz",
            "C" => "Juliusz Słowacki"
        ],
        "poprawna" => "B"
    ],
    [
        "pytanie" => "Nad jaką rzeką leży Warszawa?",
        "odpowiedzi" => ["A" => "Odra", "B" => "Wisła", "C" => "Warta"],
        "poprawna" => "B"
    ],
    [
        "pytanie" => "W którym roku uchwalono Konstytucję 3 Maja?",
        "odpowiedzi" => ["A" => "1791", "B" => "1918", "C" => "1410"],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "Jaką walutą płaci się w Polsce?",
        "odpowiedzi" => ["A" => "Euro", "B" => "Złoty", "C" => "Dolar"],
        "poprawna" => "B"
    ],
    [
        "pytanie" => "Kto był Naczelnikiem Państwa w 1918 roku?",
        "odpowiedzi" => [
            "A" => "Józef Piłsudski",
            "B" => "Lech Wałęsa",
            "C" => "Tadeusz Kościuszko"
        ],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "Z jakim krajem Polska nie graniczy?",
        "odpowiedzi" => ["A" => "Niemcy", "B" => "Włochy", "C" => "Ukraina"],
        "poprawna" => "B"
    ],
    [
        "pytanie" => "Która Polka odkryła polon i rad oraz dwukrotnie otrzymała Nagrodę Nobla?",
        "odpowiedzi" => [
            "A" => "Maria Skłodowska-Curie",
            "B" => "Wisława Szymborska",
            "C" => "Olga Tokarczuk"
        ],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "Jakie morze znajduje się na północy Polski?",
        "odpowiedzi" => [
            "A" => "Morze Bałtyckie",
            "B" => "Morze Czarne",
            "C" => "Morze Śródziemne"
        ],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "W którym roku miała miejsce bitwa pod Cedynią?",
        "odpowiedzi" => ["A" => "972", "B" => "1234", "C" => "1500"],
        "poprawna" => "A"
    ],
    [
        "pytanie" => "Kto uratował Wiedeń przed Turkami w 1683 roku?",
        "odpowiedzi" => [
            "A" => "Jan III Sobieski",
            "B" => "Stefan Batory",
            "C" => "Władysław Jagiełło"
        ],
        "poprawna" => "A"
    ],






    [
        "pytanie" => "Jak nazywał się niezależny związek zawodowy założony w 1980 roku?",
        "odpowiedzi" => ["A" => "Solidarność", "B" => "Ruch", "C" => "Jedność"],
        "poprawna" => "A"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Witaj w quizie o Polsce! Czy uda Ci się zdobyć maksymalną liczbę punktów?</p>
    <p>Sprawdź swoją wiedzę o przełomowych momentach Polski!</p>
    
    <?php
        for($p=0; $p< count($pytania); $p++){
            $pytanie = array_keys($pytania[$p])[0];
            $wartosc_pytanie = $pytania[$p][$pytanie];

            $odpowiedzi = array_keys($pytania[$p])[1];
            $wartosc_odpowiedzi = $pytania[$p][$odpowiedzi];

            $poprawna = array_keys($pytania[$p])[2];
            $wartosc_poprawna = $pytania[$p][$poprawna];
            
            echo "<h3>$wartosc_pytanie</h3><hr>";
            foreach($wartosc_odpowiedzi as $key => $value){
                echo "$key -> $value  ";
            }
            echo "<mark>POPRAWNA: $wartosc_poprawna</mark>";
        }  
    ?>
</body>
</html>
