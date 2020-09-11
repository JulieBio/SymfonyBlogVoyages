<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager){

        // ajout d'articles
        $articleA = new Article;
        $articleA->setTitre("Que faire sur la presqu'île de Crozon en Bretagne ?")
                ->setContenu("Avant de commencer à vous donner les lieux les plus cools à visiter, voici quelques infos à connaitre sur la presqu’île.
                    D’abord concernant le moyen de transport : la presqu’île de Crozon est relativement petite et les distances entre les points d’intérêt sont courtes. Etant donné l’absence de transports en commun, je vous conseille quand même de louer une voiture pour le temps de votre séjour. J’ai personnellement pris le train jusque Brest avant de louer une voiture via Europcar.
                    Ensuite je vous conseille de rester 3 à 4 jours minimum afin de profiter de votre séjour. En Bretagne la météo peut être capricieuse et il faut donc prévoir large afin d’être sûr de visiter les lieux dans les meilleures conditions. J’y suis allé en juin pendant 4 jours et il a fait beau durant 2 jours et très gris pendant les 2 jours restant")
                ->setImage("https://www.bretagne.bzh/app/uploads/grimpe_340_3-1-700x391.jpg")
                ->setDateCreation(new \DateTime('now'));

        $articleB = new Article;
        $articleB->setTitre("Que faire à New york ?")
                ->setContenu("Tout simplement l’endroit le plus visité au monde ! Egalement appelé « The Crossroads of the World ». La fameuse intersection New Yorkaise se situe en plein centre de Manhattan et est connue pour ses publicités animées gigantesques, ses buildings lumineux interminables, son naked cowboy, ses boutiques démesurées (M&M’s World, Toys’R’Us), comédies musicales… Ce quartier reste animé toute l’année, à toutes les heures et par tous les temps! Comme c’est un quartier central très bien desservi par plusieurs lignes de métro, bus, etc, il peut être intéressant pour se loger. Empire State Building & Top Of the Rock : Ces deux endroits vous offriront des vues incroyables sur la ville de New York. Pour environ 25$ vous surplomberez Manhattan (à moins d’acheter un CityPass et vous ferez des économies), et remplirez rapidement la carte mémoire de votre appareil photo. Je vous conseille d’y aller avant le coucher du soleil et d’attendre la tombée de la nuit afin de voir les buildings s’illuminer peu à peu.")
                ->setImage("https://a.cdn-hotels.com/gdcs/production101/d154/ee893f00-c31d-11e8-9739-0242ac110006.jpg")
                ->setDateCreation(new \DateTime('now'));

        $articleC = new Article;
        $articleC->setTitre("Faire le tour du monde en couple")
                ->setContenu("Un tour du monde est évidemment un grand voyage, un immense projet. Comme c’était le cas pour nous, c’est souvent le rêve d’une vie et cela demande une vraie préparation en amont.
                    Une fois que nous avons décidé de partir avec Jennifer, nous avons commencé à nous préparer 1 an avant le départ.
                    Nous avons dessiné les grandes lignes du parcours. Ça c’est la partie la plus sympa car nous nous projetions à fond dans ce qui nous attendait.
                    Il y a aussi eu toute une partie un peu moins excitante, mais indispensable, pour gérer l’administratif. Donner le préavis pour l’appart, gérer les impôts, organiser le transfert du courrier, trouver une assurance voyage, s’occuper de demander un congé sabbatique à nos employeurs, faire les vaccins nécessaires, vendre la voiture… Bref nous avons préféré nous y prendre assez longtemps à l’avance.")
                ->setImage("https://blog.lesoir.be/voyagevoyage/wp-content/uploads/sites/71/2016/08/shutterstock_249702325-e1472208343412.jpg")
                ->setDateCreation(new \DateTime('now'));

        $articleD = new Article;
        $articleD->setTitre("Une histoire de marché de Noël en Allemagne")
                ->setContenu("Heidelberg, une ville romantique pour débuter : 
                C’est donc à Heidelberg que notre petit séjour a commencé, à seulement 3h30 de train de Paris. Une ville d’environ 150.000 habitants qui ne manque pas d’atouts et de charme. A commencer par son université, qui est tout simplement la plus vieille d’Allemagne (créée en 1386, quand même) et dont je suis forcément tombé sous le charme. Elle est toujours très réputée et côtoyée, ce qui se ressent dans la ville : Plus d’une personne sur cinq qui vit à Heidelberg est étudiante!
                L’ancienneté de l’université est vraiment intéressante à analyser. Par exemple, auparavant, il y avait une prison pour étudiants! L’université gérait elle-même les soucis d’autorité liés aux membres de cette dernière… Je peux vous dire qu’Alex a presque eu peur qu’on le laisse ici.
                Stuttgart, un marché de noël : Après Heidelberg, nous avons décidé de partir en direction de Stuttgart, la capitale du Land Baden-Württemberg d’environ 650.000 habitants, connue pour ses voitures, son vin, ses fêtes et aussi son immense marché de noël! Et c’est d’ailleurs ce dernier point qui nous a intéressé. Le marché de noël de Stuttgart, c’est plus de 250 exposants pour un des plus grands marchés d’Europe… Qui existe depuis plus de 300 ans! C’est aussi plus de 3 millions de visiteurs, rien que ca.")
                ->setImage("https://lifestyle.boursorama.com/wp-content/uploads/57c42b6a0aed8/5367-le-marche-de-noel-d-annabergbuchholz-orig-1.jpg")
                ->setDateCreation(new \DateTime('now'));
                                                
        $manager->persist($articleA);
        $manager->persist($articleB);
        $manager->persist($articleC);
        $manager->persist($articleD);

        $manager->flush();
    }
}
