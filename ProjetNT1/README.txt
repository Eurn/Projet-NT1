
PROJET: Musée de Paris

Le projet a pour but de regrouper sur le site tout les musées situé dans Paris à l'aide de requêtes sparql et Dbpedia.
Ce projet devrait normalement servir aux touristes voulant visiter Paris et en savoir plus sur ses musées.
Il leur fournira donc un tableau contenant les musées de Paris avec une map pour voir où ils sont situés.
On a aussi la possibilité de se créer un compte et de se connecter au site mais il n'y a encore aucun interet en cela (sauf avoir son prénom écrit).
La liste des musées sur le site est assez voir très réduite à cause de différents filtres que j'ai mis sur la requête sparql.
Par exemple le fait que je rajoute le liens des sites web dans la requête divise par 2 la taille de la liste, pareil pour la latitude et longitude.
Le site ne comporte normalement aucune faille de sécurité que je connais (injection SQL, et failles XSS).
Tous les champs des formulaires sont tester par des expressions régulières et les mots de passes sont Hasher.
Le site est bien responsive grâce à l'utilisation de bootstrap.
J'ai essayer de découper le projet en différents modules dans les fichiers, un pour la connexion, un pour l'inscription etc...

