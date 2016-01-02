# LOGS-HISTORY ![alt tag](http://img15.hostingpics.net/pics/598700file94.png)
Créer un fichier contenant l'historique des connexion.

Importer le fichier "class.logs.1.php"
```PHP
require 'class.logs.1.php';
```
Inserer se code au début de page
```PHP
$class = new logs;
$class->initialise();
```
Lire le fichier "logs.txt"
```
[26/10/15][13:33:53] 127.0.0.1 connect to 127.0.0.1/tuto/2/index.php
[26/10/15][13:34:17] 127.0.0.1 connect to 127.0.0.1/tuto/2/index.php
[26/10/15][13:34:18] 127.0.0.1 connect to 127.0.0.1/tuto/2/page1.php
[26/10/15][13:34:21] 127.0.0.1 connect to 127.0.0.1/tuto/2/page2.php
[26/10/15][13:34:23] 127.0.0.1 connect to 127.0.0.1/tuto/2/page3.php
[26/10/15][13:34:24] 127.0.0.1 connect to 127.0.0.1/tuto/2/index.php
[26/10/15][13:34:33] 127.0.0.1 connect to 127.0.0.1/tuto/2/page1.php
[26/10/15][13:34:35] 127.0.0.1 connect to 127.0.0.1/tuto/2/page1.php
[26/10/15][13:34:44] 127.0.0.1 connect to 127.0.0.1/tuto/2/page3.php
[26/10/15][13:34:50] 127.0.0.1 connect to 127.0.0.1/tuto/2/page1.php
[26/10/15][13:34:55] 127.0.0.1 connect to 127.0.0.1/tuto/2/page3.php
[27/10/15][16:11:36] 127.0.0.1 connect to 127.0.0.1/tuto/2/index.php
[27/10/15][19:48:01] 127.0.0.1 connect to 127.0.0.1/tuto/2/index.php
```