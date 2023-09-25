# MedicalApp

L'application de suivi des patients à l'hôpital est un outil conçu pour améliorer l'expérience des patients et de leurs accompagnateurs en fournissant des informations en temps réel sur les services de l'hôpital et le temps d'attente. Cependant, en raison de la nature des informations sensibles qui sont traitées, la sécurité de l'application doit être prise en compte. Ce rapport présente une analyse de la fonctionnalité de l'application de suivi des patients à l'hôpital ainsi que les mesures de cybersécurité prises pour protéger les informations des patients.

1) Interface figma de l’application

  * Interface utilisateur

L'interface utilisateur de l'application est conçue pour être simple et intuitive. Elle est divisée en plusieurs pages qui facilitent la navigation et la compréhension des informations. Voici les différentes pages de l'interface :

* Page d'accueil de l'application

La page d'accueil de l'application permet à l'utilisateur de saisir le code unique fourni par l'infirmière à l'accueil de l'hôpital pour accéder à l'interface de l'application.

* Page d'informations de base du patient

La page d'informations de base du patient affiche les informations de base du patient, telles que son nom, son âge, sa date d'admission, etc., pour confirmer que l'utilisateur a accès aux informations du patient.

* Page de sélection de service

La page de sélection de service affiche une liste de services et de départements de l'hôpital. L'accompagnateur doit pouvoir sélectionner le service dans lequel le patient a été admis.

* Page d'estimation du temps d'attente

La page d'estimation du temps d'attente affiche une estimation du temps d'attente avant que le patient ne soit vu par le personnel médical, en fonction du service sélectionné.

* Page de notification

Cette page doit envoyer une notification à l'accompagnateur pour l'en informer et pour lui indiquer le temps d'attente estimé


2) Fonctionnalités de l'application :

L'application de suivi des patients à l'hôpital est conçue pour fournir une expérience sans stress aux patients et à leurs accompagnateurs. Les principales fonctionnalités de l'application sont les suivantes :

* Enregistrement du patient et création d'un code unique pour accéder à l'application mobile.

* Affichage des informations de base du patient pour confirmer l'accès.

* Affichage de la liste des services et départements de l'hôpital avec une estimation du temps d'attente.

* Envoi de notifications pour informer l'accompagnateur de tout changement dans l'état du patient ou les temps d'attente.

* Fourniture d'informations sur les services d'aide à la maison, les médicaments et les soins de suivi après la sortie de l'hôpital.

* L'application peut également inclure une fonctionnalité de géolocalisation pour montrer la position actuelle du patient dans l'hôpital 

* Outils de communication pour permettre une communication facile avec le personnel soignant.


3) Sécurité de l’application:

La sécurité des informations des patients est primordiale dans l'application de suivi des patients à l'hôpital. Les mesures suivantes ont été prises pour garantir la cybersécurité de l'application :

* Analyse des risques pour identifier les menaces potentielles et évaluer leur probabilité et leur impact.

* Mise en place de mécanismes de sécurité tels que l'authentification, le contrôle d'accès, le chiffrement, la détection d'intrusion, la surveillance de sécurité et la protection contre les logiciels malveillants.

* Surveillance continue de la sécurité de l'application en utilisant des outils de surveillance et en analysant les journaux d'événements pour détecter les activités suspectes.

* Éducation des utilisateurs sur les risques de sécurité et fourniture de conseils pour minimiser les risques de sécurité.
Élaboration de politiques de sécurité conformes aux normes et réglementations de sécurité pertinentes.

* Tests de sécurité réguliers pour identifier les vulnérabilités de l'application et recommander des mesures pour y remédier.

* Coordination des activités de réponse aux incidents en cas d'incident de sécurité, en travaillant avec les équipes de sécurité de l'organisation pour enquêter sur l'incident, contenir les dommages et prévenir de futures attaques.


4) Analyse des données de l’application

Garantir que l'application dispose des données nécessaires pour fonctionner efficacement. Voici un aperçu des tâches typiques qu'elle peut effectuer :

* Collecte des données : En étroite collaboration avec l'équipe de développement pour identifier les données importantes à collecter pour alimenter l'application, telles que les informations médicales et personnels du patients ,les différents services de l'hôpital,  les temps d'attente, les traitements, etc.

* Mise en place du modèle de données : Le modèle de données est le cœur de l'application, elle a été implémentée et alimentée dans une base de données MySQL 

* Modélisation de données :  À partir de la modélisation des données on pourra fournir des visualisations et des tableaux de bord pour aider à surveiller les performances de l'application. Cela peut inclure des graphiques en temps réel pour les temps d'attente

* Gestion des données :  S’assurera de la gestion des données, telles que le stockage des données, la sauvegarde et la récupération, et la sécurité des données pour s'assurer que les données sont protégées contre les violations de sécurité.
