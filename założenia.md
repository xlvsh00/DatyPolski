# Papier kamień nożyce 

Aplikacja webowa typu gry **Papier kamień nożyce **

Główne funkcje i zasady gry: Brak logowania: Gra jest w pełni dostępna od razu po wejściu na stronę (tryb "gościa").

	1. Gracz klika "Nowa gra", a serwer tworzy sesję i zeruje wyniki.
	
	2. W każdej rundzie gracz wybiera: kamień, papier lub nożyce.
	
	3. Komputer losuje swój ruch (random_int()).
	
	4. Serwer porównuje ruchy: kamień pokonuje nożyce, nożyce pokonują papier, papier pokonuje kamień, a takie same ruchy dają remis.
	
	5. Wygrana runda daje 1 punkt, a wynik jest zapisywany w $_SESSION i widoczny na stronie.
	
	6. Gra trwa do 3 wygranych rund, po czym pokazuje, kto wygrał całą partię.
	
	7. Przycisk "Zagraj ponownie" czyści sesję i zaczyna grę od nowa.
