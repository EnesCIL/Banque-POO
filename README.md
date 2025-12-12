💳 **Exercice POO en PHP – Compte Bancaire et Titulaire**

🎯 **Objectif**

Cet exercice a pour but de comprendre la programmation orientée objet (POO) en PHP, en créant des classes représentant des comptes bancaires et leurs titulaires.

**Il permet d’apprendre :**

- L’encapsulation avec les propriétés privées

- Les relations entre objets (association 1-à-plusieurs)

- Les constructeurs et méthodes magiques (__toString)

- La gestion de comportements financiers (crédit, débit, virement)

🏗️ **Contenu et explications**

✔️ **Classe Titulaire**

Représente une personne possédant un ou plusieurs comptes bancaires.

**Propriétés privées**

- _nom : nom du titulaire

- _prenom : prénom du titulaire

- _dateNaissance : date de naissance

- _ville : ville de résidence

- _comptes : tableau contenant les objets CompteBancaire associés

**Constructeur (__construct)**

- Initialise les informations personnelles et crée un tableau vide pour stocker les comptes.

**Méthodes principales**

- ajouterCompteBancaire(CompteBancaire $compte) → ajoute un compte au tableau _comptes.

- afficherComptes() → affiche les informations du titulaire et de tous ses comptes.

- calculerAge() → calcule l’âge du titulaire à partir de la date de naissance.

- __toString() → permet d’afficher le titulaire sous forme de texte (nom, prénom, date de naissance, ville).

✔️ **Classe CompteBancaire**

Représente un compte bancaire appartenant à un titulaire.

**Propriétés privées**

- _libelle : nom ou type du compte

- _soldeInitial : solde actuel du compte

- _devise : devise du compte

- _titulaire : objet Titulaire associé

**Constructeur (__construct)**

- Initialise toutes les propriétés et ajoute automatiquement le compte au titulaire via ajouterCompteBancaire().

**Getters / Setters**

- Permettent d’accéder et modifier chaque propriété de manière sécurisée.

**Méthode magique __toString()**

- Retourne une représentation textuelle du compte (libellé, solde, devise et titulaire).

**Méthodes principales pour la gestion financière**

- compteCrediter($montant) → ajoute un montant au solde du compte.

- compteDebiter($montant) → retire un montant si le solde est suffisant.

- compteVirement($montant, CompteBancaire $compteDestinataire) → transfère un montant d’un compte à un autre si le solde le permet.

🔗 **Relation entre les objets**

- Un titulaire peut posséder plusieurs comptes.

- Un compte appartient à un seul titulaire.

- Lors de la création d’un compte, celui-ci est automatiquement ajouté au titulaire associé.

📚 **Concepts POO abordés**

- Encapsulation avec propriétés privées

- Constructeurs et initialisation d’objets

- Association 1-à-plusieurs (Titulaire → CompteBancaire)

- Méthodes magiques (__toString)

- Gestion de comportements métiers (crédit, débit, virement)

- Utilisation de $this pour référencer l’objet courant
