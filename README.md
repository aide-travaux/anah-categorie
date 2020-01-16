# Anah Categorie

## Description

```
AnahCategorie::get(int $income, int $household, string $codeRegion): ?string
```

Retourne la catégorie de ressource selon l'Agence nationale de l'habitat (ANAH).

## Liste des paramètres

**income**

Ressources financières du foyer

**household**

Composition du foyer

**codeRegion**

Code région

## Valeurs de retour

Retourne la catégorie de ressource, ou NULL en cas de dépassement des plafonds.

## Exemples

```
<?php>

use Anah\Categorie\AnahCategorie;

AnahCategorie::get(
  2, 20000, "11"
);

// "Très modeste"

```

## Sources

- [Plafonds de ressources](https://www.anah.fr/proprietaires/proprietaires-occupants/les-conditions-de-ressources/)
- [Codes région](https://www.insee.fr/fr/information/2114819)
