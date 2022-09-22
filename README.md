# Basic-PHP-Eshop
Samostatná práce v PHP.
Vytvořte jednoduchý e-shopu, který se bude skládat ze dvou části.
1.	Webové rozhraní pro zákazníky
2.	Webové rozhraní pro administraci
Část 1 –Web pro zákazníky
Web bude obsahovat základní nabídka boží, kterou si bude moci zákazník objednat Nabídku můžete vytvořit jako jednoduchou tabulku, kde u jednotlivých  položek zboží bude checkbox pro objednání daného zboží.  Seznam zboží bude uložen v textovém souboru. Data (nabídku zboží) načtěte z tohoto textového souboru a tabulku vygenerujete dynamicky kódem PHP. Počet položek zboží 5 až 10, počet položek bude dynamický. To znamená, že počet položek se může změnit.
Na konci seznamu zboží bude  formulář pro zadání kontaktních údajů.
Obě tabulky budou součástí jednoho formuláře
Nabídka zboží
Název 	Popis nebo obrázek	cena	Objednávka (zaškrtávací pole)
Položka 1	info	20	☒

Položka 2	info	50	☐

Položka 3	info	40	☒

Položka 4	info	15	☐

Položka 5	info	80	☐


Celkem cena 
(celková cena (funkce JavaScript) – mění se podle počtu zaškrtnutého zboží) 
Zadání kontaktních údajů
Oslovení (přepínač)	   

Jméno Vstupní pole	Klikněte nebo klepněte sem a zadejte text.

Příjmení Vstupní pole	Klikněte nebo klepněte sem a zadejte text.

Město Vstupní pole 	Klikněte nebo klepněte sem a zadejte text.

Kraj Výběrové  pole	Zvolte položku.

Telefon Vstupní pole	Klikněte nebo klepněte sem a zadejte text.

Email Vstupní pole	Klikněte nebo klepněte sem a zadejte text.



Kontaktní údaje zákazníka uložte do souboru txt pod jedinečným identifikátorem (pořadové číslo zákazníka).
Objednávky uložte do textového souboru. U každé objednávky bude uloženo pořadové číslo objednávky, identifikační číslo zákazníka, datum objednávky a seznam zboží, které si zákazník objednal.
Po odeslání a zpracování objednávky zobrazit souhrn objednávky (potvrzení) včetně údajů zákazníka.

Příklad  souboru se seznamem zboží 
(id / název / popis / cena)
n1/Lenovo Legion/herní notebook/28900
n2/Acer Nitro 5/Pracovní notebook/18500
Příklad  souboru s daty zákazníků
(id / osloveni / jmeno / prijmeni / město / kraj / telefon / email)
1/pan/Pavel/Novák/Pardubice/k2 /745745745/novak@seznam.cz
2/paní/Jana/Černá/Jihlav /k3/656656656/cerna@gmail.con

Příklad  souboru objednávek
(id objednávky/ datum / id zákazníka / seznam objednaného zboží – jednotlivé položky oddělené čárkou)
1/2021-12-3/1/n1,n5

Část 2 –Web administrace
Vstupem bude stránky kde administrátor zadá jméno a heslo. To se ověří ve vtahu k  datům v souboru, kde budou jména a hesla adminstrátora/ů. V případě neúspěšného přihlášení se zobrazí info o zadání nesprávných přihlašovacích údajů.
Po úspěšné přihlášení se zobrazí stránky, kde budou 5 funkcí. (5. funkce dobrovolně) 
1)	Zobrazení posledních 5 objednávek.
2)	Zobrazení objednávek z aktuálního dne.
3)	Zobrazení objednávek ze zadaného dne, (vstupní prvek datum)
Příklad zobrazení objednávek
Id objednávky	Datum	Id zboží	Jméno zákazníka	Adresa 
				
				


4)	Zobrazení statistiky, což bude tabulka, kde bude počet objednávek za x posledních dnů rozdělených podle snů. Počet dnů zadá administrátor.
Objednávky od   …  do ….
Den	Počet objednávek
1.12.2021	10
2.12.2021	15
3.12.2021	11
atd	




