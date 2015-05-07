#Proiect-Web-Design
####Cerința proiectului:
Să se realizeze o aplicaţie pentru testare online bazat pe grile. Aceste teste sunt asemănătoare cu chestionarele auto ce se dau la proba teoretică pentru obținerea permisului de conducere. Se va ţine evidenţa persoanelor  testate şi a rezultatelor obţinute. Persoanele testate se vor autentifica prin nume şi parolă. 

Aplicația am realizat-o folosind HTML, CSS, Javascript, PHP și MySQL. Ea poate fi rulată accesând site-ul www.budaadrian.uphero.com/Proiect/homepage.php.

####Utilizarea aplicației:
Pagina principală a aplicației (intitulată homepage.php) afisează un mesaj care transmite persoanei ce a accesat site-ul că trebuie să se logheze pentru a avea acces la chestionare folosind butonul din dreapta sus denumit Login. Dacă persoana nu are cont ea se poate înregistra apăsând butonul Înregistrare. Odată logată în bara de meniu vor apărea mai multe opțiuni cum ar fi alegerea chestionarelor (5 la număr), accesarea setărilor contului pentru a șterge scorurile de la un chestionar anume sau de la toate chestionarele sau dacă se dorește schimbarea parolei și în locul butoanelor de Înregistrare și Login va apărea butonul de Logout. În pagină se găsesc scorurile pentru fiecare chestionar, cel mai mare scor și chestionarul la care s-a obținut acel scor.

La înregistrare se verifică dacă câmpurile nume utilizator, parolă și confirmă parola sunt completate corect, dacă nu se va afișa unul sau mai multe mesaje. Dacă nu s-au detectat erori în cele trei câmpuri se va înregistra numele utilizatorului și parola acestuia, parola fiind încriptată cu funcția criptografică MD5. 

La pagina de Login și de schimbare a parolei se folosesc aceleași tehnici. La pagina de Login am ales ca dacă utilizatorul își greșește numele de utilizator sau parola să nu îi fie atrasă atenția ce a greșit, numele sau parola, pentru ca un atacator să nu știe exact ce a inserat corect și ce nu. 

Cele 5 chestionare au fiecare câte 10 întrebări a câte 3 variante fiecare, unele dintre ele având și poze. Punctajul maxim este de 20 de puncte, câte 2 pentru fiecare răspuns corect. Ele sunt centrate în pagină. Doar o singură întrebare se afișează în pagină, ele putând fi derulate cu ajutorul butoanelor ”Întrebarea precedentă” și ”Întrebarea următoare”. Când s-a răspuns la toate cele 10 întrebări va apărea sub butoanele de derulare butonul de verificare care va trimite rezultatele în pagina check.php unde se va face corectarea chestionarului. Afișarea unei singure întrebări pe pagină se face cu ajutorul unei funcții Javascript care ascunde sau afișează întrebarea. Când este încărcată pagina toate întrebările sunt ascunse cu ajutorul unui stil CSS, prima întrebare apare la executarea funcției init() care se execută atunci când are loc evenimentul onLoad din cadrul tagului HTML <body>. Am ales să fac corectarea cu ajutorul unui script PHP deoarece dacă foloseam Javascript era simplu ca un utilizator să afle rezultatele prin vizualizarea codului paginii.

Odată terminată corectarea se va actualiza punctajul stocat în baza de date pentru acel chestionar și se va afișa un mesaj cu scorul obținut și numărul de întrebări la care s-a răspuns corect. Utilizatorul poate folosi meniul din partea de sus a paginii pentru a reveni la pagina principală, pentru a încerca un alt chestionar sau se poate deloga.

Când se apasă pe butonul de Logout cookie-ul în care sunt stocate datele sesiunii este șters iar bara de meniu revine la starea inițială. Datele sesiunii se mai pot șterge și prin închiderea browser-ului.

Bara de meniu este primul element ce este inclus în fiecare pagină din cadrul acestei aplicații. Se face cu ajutorul comenzii PHP include(). Opțiunile din meniu sunt formate dintr-o listă neordonată, cu opțiunile ordonate unele după celelalte folosind stilul display: block. Unele opțiuni precum Login, Înregistrare și Logout le-am pus în dreapta paginii pentru că, în opinia mea, acolo sunt mai vizibile deoarece nu sunt puse la grămadă cu celelalte opțiuni. Pentru a alege un chestionar am mai făcut o listă neordonată care conține link-uri către ele.

Fiecare pagină are o iconiță, aceasta fiind o mașină. De asemenea fiecare pagină este modificată pentru a afișa literele cu diacritice. Am realizat acest lucru folosind tag-ul <meta charset = ”utf-8”>. 
