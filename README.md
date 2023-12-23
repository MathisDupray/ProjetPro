# ProjetPro
1. Application web réalisée dans le cadre de l'AP PRO SLAM BTS SIO1 2023-2024
2. Globalement satisfait de ma réalisation, je me suis vu passé beaucoup de temps dessus, nottamment vers la fin du projet.
3. J'ai conscience de m'être compliqué la tâche, au niveau du competences.php et du formulaire de contact + captcha.
4. Le code et les fonctionnalités pourraient être (bcp) plus simple, mais cela fonctionne.

## Notes : 

1. Le PHPMailer et le reCaptcha fonctionnent correctement si je rentre mon mot de passe dans le contact.php
2. Quelques difficultés rencontrées lors de l'utilisation des librairies PHP.
3. Il manque quelques options de vérification dans la vérification du captcha dans contact.php (expectedHostName, setScoreThreshold) mais cela générait des erreurs et empêchait l'envoi du mail.

## TODO :

1. Inclure lien vers des repo de divers projets (probablement dans "A propos"
2. Rajouter les options manquantes(supprimées pour l'instant) du process de verification captcha (expectedHostName, setScoreThreshold, expectedAction)
3. php pour verifier le systeme d'exploitation pour faire un require_once de l'autoload au début du fichier (besoin pour du local sur windows, pas besoin sur linux ou composer est installé)
