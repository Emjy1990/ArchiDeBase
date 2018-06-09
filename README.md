# ETAPE DE L'ARBORESCENCE

+ creation des dossiers
+ fichier .htacces dans Public permettant de rerouter l'url
+ .keep à tous les fichiers que l'on veut versionner
+ config.conf qui permet de definir BDD et BASEPATH
+ .htacces dans app avec deny from all pour interdire l'acces de l'exterieur
+ .keep à Utils et Models (je sais plus pourquoi)
+ gitignore pour eviter de push app/config.conf
+ on install composer avec composer init -> on genere le composer .json
+ on met en place altorouter / l'autoload pour les namespaces / plates
+ composer install pour installer les dependances
+ il faut rajouter vendor et composer.lock dans le gitignore

+ pour le parcours de la route on va démarrer par index.php

1. on require autoload de composer , on use notre application , on lance l'application.
2. on crée application.php dans /app et on met de suite le namespace avant d'oublier puis on declare notre class Application
3. A la construction Altorouter est déclarer et la fonction defineRoutes est défini
4. La fonction Run fait le match et appelle le bon controller

+ Maintenant que cela est fait on fait appel à 2 nouveaux fichiers -> le CoreController et le MainController
+ démarrons dans le MainController

1. on place le namespace qui va bien
2. le extend CoreController! et des datas pour test plates

+ Maintenant direction le CoreController

+ c'est dans le core controllers que l'on instancie plate et la fonction show
