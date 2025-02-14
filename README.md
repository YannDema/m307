# Modul 307 Challange

## Einleitung

### Tagebuch

13.12.2024: Heute habe ich mit der anleitung von Joki den forms-Lernjob gemacht. Der Lernjob half mir beim wider reinkommen ins Coden.

20.12.2024: Heute habe ich mein Github Repository mit meinem Projekt verbunden, und Joki zu meinem Reopsitory eingeladen. 

10.01.2025: Heute habe ich geplant, wass ich machen will, und habe begonnen, mir eine grundstruktur aufzubauen. ich habe auch die erste paar zeilen php und html geschriben, mit unterstüzung von KI. Heute wollte ich meine änderungen mit Github synchrinsieren, aber es kam nur eine Error meldung.

17.01.2025: Heute habe ich den php code leicht ausgebaut, und auch den html angepasst. Ich habe auch begonnen das ganze mit css einbischen zu stylen, ich werde das design aber am schluss, falls ich noch Zeit habe, nochmals überarbeiten. Wie beim letzten mal wollte ich heute meine änderungen mit Github synchrinsieren, aber es kam auch heute nur eine Error meldung. Notiz an mich (Nächstesmal Joki fragen)

24.01.2025: Heute habe ich eine funktion mit hilfe von KI eingebaut, welche es mir erlaubt, einige Felder als Plichtfelder zu machen, und einige als obzionale Felder zu lassen. Ich brauchte mehrere aläufe, bis das ganze funktionirte da das einbinden des neuen Codes ziemlich anspruchsvoll war, da er immer im zusammenhang mit dem allten Code funktioniren muss. Auch heute wollte ich meine änderungen mit Github synchrinsieren, aber zum drittenmal kam nur eine Error meldung. Da ich diesen eintrag erst nach dem PLC schreibe, kann ich Joki nicht mehr fragen, ich muss ihn nächstesmal fragen.

07.02.2025: Heute habe ich aus einigen Feldern auswahlfelder gemacht. Ich hatte wieder ein bischen die gleichen schwirigkeiten mit dem einbinden des neuen Codes, da ich nicht alles selbst gemacht habe, verstand ich nicht den ganzen Code und musste deshalb viel versuchen, bis ch die richtigen stellen des alten Codes, mit neuen stellen ersezen konnte. Heute hatte ich wieder die gleiche Errormeldung bei der Github synchronisation. Ich gehe heute nachmittag zu Joki, denn heute morgen, war er mit anderen Beschäftigt.

14.02.2025 

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