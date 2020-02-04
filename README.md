# Anah Categorie

## Introduction

La classe AnahCategorie retourne toutes les informations relatives aux catégories de ressources de l'agence
nationale de l'habitat

## Méthodes

```
AnahCategorie::get(int $ressources, int $compositionFoyer, string $codeRegion): ?string
```
Retourne la catégorie de ressources selon l'agence nationale de l'habitat (ANAH)

```
AnahCategorie::getPlafond(int $compositionFoyer, string $codeRegion): ?string
```
Retourne le plafond de ressources de l'agence nationale de l'habitat (ANAH)

```
AnahCategorie::getPlafondTresModeste(int $compositionFoyer, string $codeRegion): ?string
```
Retourne le plafond de ressources de la catégorie "Très modeste"

## Liste des paramètres

**ressources**

Ressources financières du foyer

**compositionFoyer**

Composition du foyer

**codeRegion**

Code région


## Exemples

```
<?php>

use AideTravaux\Anah\Categorie\AnahCategorie;

AnahCategorie::get( 20000, 2, "11" );
// "Très modeste"

AnahCategorie::getPlafond( 2, "11" );
// 36792 

AnahCategorie::getPlafondTresModeste( 2, "11" );
// 30225
```

## Sources

- [Plafonds de ressources](https://www.anah.fr/proprietaires/proprietaires-occupants/les-conditions-de-ressources/)
- [Codes région](https://www.insee.fr/fr/information/2114819)
