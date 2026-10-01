<?php
session_start();
    
$quiz = [
    [
        "pytanie" => "W którym roku odbył się Chrzest Polski?",
        "odpowiedzi" => ["966 r.", "1000 r.", "1410 r."],
        "poprawna" => "966 r."
    ],
    [
        "pytanie" => "Kto był pierwszym królem Polski?",
        "odpowiedzi" => ["Mieszko I", "Bolesław Chrobry", "Kazimierz Wielki"],
        "poprawna" => "Bolesław Chrobry"
    ],
    [
        "pytanie" => "W którym roku była bitwa pod Grunwaldem?",
        "odpowiedzi" => ["1410 r.", "1525 r.", "1683 r."],
        "poprawna" => "1410 r."
    ],
    [
        "pytanie" => "Jakie barwy ma flaga Polski?",
        "odpowiedzi" => ["Czerwono-białe", "Biało-czerwone", "Niebiesko-białe"],
        "poprawna" => "Biało-czerwone"
    ],
    [
        "pytanie" => "Jakie jest obecne miasto będące stolicą Polski?",
        "odpowiedzi" => ["Kraków", "Warszawa", "Poznań"],
        "poprawna" => "Warszawa"
    ],
    [
        "pytanie" => "Jak nazywa się polski hymn narodowy?",
        "odpowiedzi" => ["Rota", "Mazurek Dąbrowskiego", "Bogurodzica"],
        "poprawna" => "Mazurek Dąbrowskiego"
    ],
    [
        "pytanie" => "Które zwierzę jest symbolem w godle Polski?",
        "odpowiedzi" => ["Orzeł", "Żubr", "Wilk"],
        "poprawna" => "Orzeł"
    ],
    [
        "pytanie" => "W którym roku Polska odzyskała niepodległość po I wojnie światowej?",
        "odpowiedzi" => ["1918 r.", "1939 r.", "1945 r."],
        "poprawna" => "1918 r."
    ],
    [
        "pytanie" => "Kiedy wybuchła II wojna światowa?",
        "odpowiedzi" => ["1 września 1939 r.", "11 listopada 1918 r.", "1 sierpnia 1944 r."],
        "poprawna" => "1 września 1939 r."
    ],
    [
        "pytanie" => "Kto był słynnym polskim astronomem, który 'wstrzymał Słońce, ruszył Ziemię'?",
        "odpowiedzi" => ["Adam Mickiewicz", "Mikołaj Kopernik", "Fryderyk Chopin"],
        "poprawna" => "Mikołaj Kopernik"
    ],
    [
        "pytanie" => "W którym roku Polska wstąpiła do Unii Europejskiej?",
        "odpowiedzi" => ["1999 r.", "2004 r.", "2010 r."],
        "poprawna" => "2004 r."
    ],
    [
        "pytanie" => "Który król 'zastał Polskę drewnianą, a zostawił murowaną'?",
        "odpowiedzi" => ["Kazimierz Wielki", "Zygmunt Stary", "Stanisław August Poniatowski"],
        "poprawna" => "Kazimierz Wielki"
    ],
    [
        "pytanie" => "Jak nazywał się polski papież wybrany w 1978 roku?",
        "odpowiedzi" => ["Jan Paweł II", "Benedykt XVI", "Franciszek"],
        "poprawna" => "Jan Paweł II"
    ],
    [
        "pytanie" => "W którym roku wybuchło Powstanie Warszawskie?",
        "odpowiedzi" => ["1944 r.", "1939 r.", "1945 r."],
        "poprawna" => "1944 r."
    ],
    [
        "pytanie" => "Kto napisał 'Pan Tadeusz'?",
        "odpowiedzi" => ["Henryk Sienkiewicz", "Adam Mickiewicz", "Juliusz Słowacki"],
        "poprawna" => "Adam Mickiewicz"
    ],
    [
        "pytanie" => "Nad jaką rzeką leży Warszawa?",
        "odpowiedzi" => ["Odra", "Wisła", "Warta"],
        "poprawna" => "Wisła"
    ],
    [
        "pytanie" => "W którym roku uchwalono Konstytucję 3 Maja?",
        "odpowiedzi" => ["1791 r.", "1918 r.", "1410 r."],
        "poprawna" => "1791 r."
    ],
    [
        "pytanie" => "Jaką walutą płaci się w Polsce?",
        "odpowiedzi" => ["Euro", "Złoty", "Dolar"],
        "poprawna" => "Złoty"
    ],
    [
        "pytanie" => "Kto był pierwszym dowódcą odrodzonego Wojska Polskiego w 1918 roku (Naczelnik Państwa)?",
        "odpowiedzi" => ["Józef Piłsudski", "Lech Wałęsa", "Tadeusz Kościuszko"],
        "poprawna" => "Józef Piłsudski"
    ],
    [
        "pytanie" => "Z jakim krajem Polska NIE graniczy?",
        "odpowiedzi" => ["Niemcy", "Włochy", "Ukraina"],
        "poprawna" => "Włochy"
    ],
    [
        "pytanie" => "Która polska arystokratka odkryła polon i rad oraz dwukrotnie dostała Nagrodę Nobla?",
        "odpowiedzi" => ["Maria Skłodowska-Curie", "Wisława Szymborska", "Olga Tokarczuk"],
        "poprawna" => "Maria Skłodowska-Curie"
    ],
    [
        "pytanie" => "Jakie morze znajduje się na północy Polski?",
        "odpowiedzi" => ["Morze Bałtyckie", "Morze Czarne", "Morze Śródziemne"],
        "poprawna" => "Morze Bałtyckie"
    ],
    [
        "pytanie" => "W którym roku miała miejsce bitwa pod Cedynią (jedna z najstarszych dat)?",
        "odpowiedzi" => ["972 r.", "1234 r.", "1500 r."],
        "poprawna" => "972 r."
    ],
    [
        "pytanie" => "Kto uratował Wiedeń przed Turkami w 1683 roku?",
        "odpowiedzi" => ["Jan III Sobieski", "Stefan Batory", "Władysław Jagiełło"],
        "poprawna" => "Jan III Sobieski"
    ],
    [
        "pytanie" => "Jak nazywał się niezależny związek zawodowy założony w 1980 roku w Gdańsku?",
        "odpowiedzi" => ["Solidarność", "Ruch", "Jedność"],
        "poprawna" => "Solidarność"
    ]
];  
$wynik = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz: Jak dobrze znasz Polske!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Witaj w quizie o Polsce! Czy uda Ci się zdobyć maksymalną liczbę punktów? Sprawdź swoją wiedzę o przełomowych momentach Polski!</p>
</body>
</html>
