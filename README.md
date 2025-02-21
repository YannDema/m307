# Modul 307 Challange

## Einleitung
In diesem Modul, müssen wir eine Website mit Datanbank machen, und Userstorys Erfüllen. Ich habe mich Für die Storys des Workpackage 1 "Kunden & Adressen" entschiden. Dort hatte es 6 Userstories, wovon ich mich für 2 entscheiden musste. Ich entschide mich Für die Userstories 4&5 "Ich möchte sofort auf Kundendaten Zugriff haben, Anrede, Adresse, Firmen-, Direkt-, Mobiltelefon, E-Mail." & "Ich kann einen Kunden, einer Kundenklasse zuweisen.(Firmenkunde, Einzelperson, Partner, Betriebslehrjahrstelle). Ich Gedenke Für die Umsezung 2 Seiten zu machen und auf der ersten Seite ein Formular zu haben, bei dem man alles eingeben kann, und zuunterst mit einem select/option-Tag eine der Kundenklassen auswählen und zuweisen kann. Ich will danach noch einen Button auf eine 2te Seite auf der mir alle Angaben in Form einer Tabelle angezeigt werden.


### Tagebuch

13.12.2024: Heute habe ich mit der anleitung von Joki den forms-Lernjob gemacht. Der Lernjob half mir beim wider reinkommen ins Coden.

20.12.2024: Heute habe ich mein Github Repository mit meinem Projekt verbunden, und Joki zu meinem Reopsitory eingeladen. 

10.01.2025: Heute habe ich geplant, wass ich machen will, und habe begonnen, mir eine grundstruktur aufzubauen. ich habe auch die erste paar zeilen php und html geschriben, mit unterstüzung von KI. Heute wollte ich meine änderungen mit Github synchrinsieren, aber es kam nur eine Error meldung.

17.01.2025: Heute habe ich den php code leicht ausgebaut, und auch den html angepasst. Ich habe auch begonnen das ganze mit css einbischen zu stylen, ich werde das design aber am schluss, falls ich noch Zeit habe, nochmals überarbeiten. Wie beim letzten mal wollte ich heute meine änderungen mit Github synchrinsieren, aber es kam auch heute nur eine Error meldung. Notiz an mich (Nächstesmal Joki fragen)

24.01.2025: Heute habe ich eine funktion mit hilfe von KI eingebaut, welche es mir erlaubt, einige Felder als Plichtfelder zu machen, und einige als optionale Felder zu lassen. Ich brauchte mehrere Anläufe, bis das ganze funktionirte da das einbinden des neuen Codes ziemlich anspruchsvoll war, da er immer im Zusammenhang mit dem allten Code funktionieren muss. Auch heute wollte ich meine änderungen mit Github synchrinsieren, aber zum drittenmal kam nur eine Error meldung. Da ich diesen eintrag erst nach dem PLC schreibe, kann ich Joki nicht mehr fragen, ich muss ihn nächstesmal fragen.

07.02.2025: Heute habe ich aus einigen Feldern auswahlfelder gemacht. Ich hatte wieder ein bischen die gleichen schwirigkeiten mit dem einbinden des neuen Codes, da ich nicht alles selbst gemacht habe, verstand ich nicht den ganzen Code und musste deshalb viel versuchen, bis ch die richtigen stellen des alten Codes, mit neuen stellen ersezen konnte. Heute hatte ich wieder die gleiche Errormeldung bei der Github synchronisation. Ich gehe heute nachmittag zu Joki, denn heute morgen, war er mit anderen Beschäftigt.

14.02.2025: Heute habe ich zuerst mit hilfe von Joki eine Datenbank eingerichtet und danach, diese mit meinem Code verbunden. Danach habe ich Mir das BBK angeschaut, und mir alle Punkte rausgeschriben, welche ich noch erfüllen muss, und bei welchen ich fragen dazu habe. Gegen den Schluss habe ich noch mit den Lernjobs Begonnen.

```
CREATE TABLE IF NOT EXISTS kunden (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        anrede ENUM('Herr', 'Frau', 'Divers') NOT NULL,
        name VARCHAR(100) NOT NULL,
        adresse VARCHAR(255) NOT NULL,
        firmentelefon VARCHAR(20),
        mobiltelefon VARCHAR(20) NOT NULL,
        festnetztelefon VARCHAR(20),
        email VARCHAR(50) NOT NULL,
        kundenklasse ENUM('Firmenkunde', 'Einzelperson', 'Partner', 'Betriebslehrjahrstelle') NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )
    ```
21.02.2025: Heute habe ich zuerst meine Fragen mit Joki angeschaut und Geklährt. Danach habe ich mir eine To-Do liste erstellt. Danach hane ich mit hilfe von AI meinen Code so überarbeitet, dass die Datenübermittelung nach dem POST/REDIRECT/GET-Prinzip läuft. Ich habe auch noch eine Einleitung geschriben bzw. auch Teile meine Planung übernommen. Danach habe ich noch die 3 im BBK geforderten Test-Cases gemacht. 

Im Test 1. habe ich getestet ob die Pflichtfelder Funktionieren. Was natürlich auch so ist.
![Screenshot 2025-02-21 112741](https://github.com/user-attachments/assets/0bdc2772-9d04-41db-a7f0-6e8ad40d40e0)


Im Test 2 habe ich getestet, ob die Datenspeicherung und anzeige Funktioniert. was Ebenfalls so Ist.
![Screenshot 2025-02-21 114551](https://github.com/user-attachments/assets/63660d67-5949-40ed-9361-a1f2045db8cf)
![Screenshot 2025-02-21 114634](https://github.com/user-attachments/assets/a6bcd8b3-c89d-4d23-9190-71fbe9bbf613)


Und im Test 3 Hhabe ich getestet, ob die Validierung, und anforderung, bei der Telefonnummer nur Zahlen ein zugeben, ebenfalls Funktionirt. Und nicht überaschend... es Funktionierte bestens.
![Screenshot 2025-02-21 115132](https://github.com/user-attachments/assets/08428925-4af0-4152-8444-9471e0ac0f2c)


Heute Abend habe ich noch meinenen ganzen Code kommentiert, für manche sachen brauchte ich jedoch die hilfe von AI da ich nicht alles ganz selber verstand.
