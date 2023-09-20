<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
/////////////////////
        $categoriePs5 = new Categorie();
        $categoriePs5->setCatNom("PS5");
        $categoriePs5->setCatImage("ps5Logo.jpg");
        $manager->persist($categoriePs5);

        $sousCatPs5Jeux = new Categorie();
        $sousCatPs5Jeux->setCatNom("JEUX PS5");
        $sousCatPs5Jeux->setCatImage("ps5Jeux2.jpg");
        $sousCatPs5Jeux->setCatParent($categoriePs5);
        $manager->persist($sousCatPs5Jeux);


        $sousCatPs5Console = new Categorie();
        $sousCatPs5Console->setCatNom("Consoles PS5");
        $sousCatPs5Console->setCatImage("ps5Console.jpg");
        $sousCatPs5Console->setCatParent($categoriePs5);
        $manager->persist($sousCatPs5Console);

        $sousCatPs5Accessoires = new Categorie();
        $sousCatPs5Accessoires->setCatNom("Accessoires PS5");
        $sousCatPs5Accessoires->setCatImage("ps5Accessoire.jpg");
        $sousCatPs5Accessoires->setCatParent($categoriePs5);
        $manager->persist($sousCatPs5Accessoires);
////////////////////////////////////////////

        $categorieXboxSeries = new Categorie();
        $categorieXboxSeries->setCatNom("XBOX SERIES");
        $categorieXboxSeries->setCatImage("xboxSeriesLogo.svg.png");
        $manager->persist($categorieXboxSeries);

        $sousCategorieXboxSeriesJeux = new Categorie();
        $sousCategorieXboxSeriesJeux->setCatNom("JEUX XBOX SERIES");
        $sousCategorieXboxSeriesJeux->setCatImage("xboxSeriesJeux.jpg");
        $sousCategorieXboxSeriesJeux->setCatParent($categorieXboxSeries);
        $manager->persist($sousCategorieXboxSeriesJeux);

        $sousCategorieXboxSeriesConsole = new Categorie();
        $sousCategorieXboxSeriesConsole->setCatNom("Consoles XBOX SERIES");
        $sousCategorieXboxSeriesConsole->setCatImage("xboxOneSeriesConsole.jpg");
        $sousCategorieXboxSeriesConsole->setCatParent($categorieXboxSeries);
        $manager->persist($sousCategorieXboxSeriesConsole);

        $sousCategorieXboxSeriesAccessoires = new Categorie();
        $sousCategorieXboxSeriesAccessoires->setCatNom("Accessoires XBOX SERIES");
        $sousCategorieXboxSeriesAccessoires->setCatImage("xboxSeriesAccessoire.jpg");
        $sousCategorieXboxSeriesAccessoires->setCatParent($categorieXboxSeries);
        $manager->persist($sousCategorieXboxSeriesAccessoires);
////////////////////////////////////


        $categorieSwitch = new Categorie();
        $categorieSwitch->setCatNom("Switch");
        $categorieSwitch->setCatImage("switchLogo.png");
        $manager->persist($categorieSwitch);

        $categorieSwitchJeux = new Categorie();
        $categorieSwitchJeux->setCatNom("JEUX Switch");
        $categorieSwitchJeux->setCatImage("switchJeux.jpg");
        $categorieSwitchJeux->setCatParent($categorieSwitch);
        $manager->persist($categorieSwitchJeux);

        $categorieSwitchConsole = new Categorie();
        $categorieSwitchConsole->setCatNom("Consoles Switch");
        $categorieSwitchConsole->setCatImage("switchConsole.jpg");
        $categorieSwitchConsole->setCatParent($categorieSwitch);
        $manager->persist($categorieSwitchConsole);

        $categorieSwitchAccesoires = new Categorie();
        $categorieSwitchAccesoires->setCatNom("Accessoires Switch");
        $categorieSwitchAccesoires->setCatImage("switchAccessoire.png");
        $categorieSwitchAccesoires->setCatParent($categorieSwitch);
        $manager->persist($categorieSwitchAccesoires);
////////////////////////////////////////////

        $categoriePs4 = new Categorie();
        $categoriePs4->setCatNom("PS4");
        $categoriePs4->setCatImage("ps4Logo.jpg");
        $manager->persist($categoriePs4);

        $categoriePs4Jeux = new Categorie();
        $categoriePs4Jeux->setCatNom("JEUX PS4");
        $categoriePs4Jeux->setCatImage("ps4Jeux.jpg");
        $categoriePs4Jeux->setCatParent($categoriePs4);
        $manager->persist($categoriePs4Jeux);

        $categoriePs4Console = new Categorie();
        $categoriePs4Console->setCatNom("Consoles PS4");
        $categoriePs4Console->setCatImage("ps4Console.jpg");
        $categoriePs4Console->setCatParent($categoriePs4);
        $manager->persist($categoriePs4Console);

        $categoriePs4Accessoires = new Categorie();
        $categoriePs4Accessoires->setCatNom("Accessoires PS4");
        $categoriePs4Accessoires->setCatImage("ps4Accessoire.jpg");
        $categoriePs4Accessoires->setCatParent($categoriePs4);
        $manager->persist($categoriePs4Accessoires);
///////////////////////////////////////////////////

        $categorieXboxOne = new Categorie();
        $categorieXboxOne->setCatNom("XBOX ONE");
        $categorieXboxOne->setCatImage("xboxOneLogo.jpg");
        $manager->persist($categorieXboxOne);

        $categorieXboxOneJeux = new Categorie();
        $categorieXboxOneJeux->setCatNom("JEUX XBOX ONE");
        $categorieXboxOneJeux->setCatImage("xboxOneJeux.jpg");
        $categorieXboxOneJeux->setCatParent($categorieXboxOne);
        $manager->persist($categorieXboxOneJeux);

        $categorieXboxOneConsole = new Categorie();
        $categorieXboxOneConsole->setCatNom("Consoles XBOX ONE");
        $categorieXboxOneConsole->setCatImage("xboxOneConsole.jpg");
        $categorieXboxOneConsole->setCatParent($categorieXboxOne);
        $manager->persist($categorieXboxOneConsole);

        $categorieXboxOneAccesoires = new Categorie();
        $categorieXboxOneAccesoires->setCatNom("Accessoires XBOX ONE");
        $categorieXboxOneAccesoires->setCatImage("xboxOneaccessoire.jpg");
        $categorieXboxOneAccesoires->setCatParent($categorieXboxOne);
        $manager->persist($categorieXboxOneAccesoires);
//////////////////////////////////////////////////

        $categoriePc = new Categorie();
        $categoriePc->setCatNom("PC");
        $categoriePc->setCatImage("PcLogo.png");
        $manager->persist($categoriePc);

        $categoriePcJeux = new Categorie();
        $categoriePcJeux->setCatNom("JEUX PC");
        $categoriePcJeux->setCatImage("pcJeux.jpg");
        $categoriePcJeux->setCatParent($categoriePc);
        $manager->persist($categoriePcJeux);

        $categoriePcConsole = new Categorie();
        $categoriePcConsole->setCatNom("PC Gaming");
        $categoriePcConsole->setCatImage("pcGaming.jpg");
        $categoriePcConsole->setCatParent($categoriePc);
        $manager->persist($categoriePcConsole);

        $categoriePcAccesoires = new Categorie();
        $categoriePcAccesoires->setCatNom("Accessoires PC");
        $categoriePcAccesoires->setCatImage("pcAccessoire.png");
        $categoriePcAccesoires->setCatParent($categoriePc);
        $manager->persist($categoriePcAccesoires);

        $manager->flush();
    }
}
