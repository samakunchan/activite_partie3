<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadSkill.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\Skill;

class LoadApplication implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Liste des noms de compétences à ajouter
        $author = array('Jean', 'Paul', 'Marine');
        $content = array('Voici mon CV', 'Voici mon CV', 'J\'ai toute les qualités requises');

        for ($i = 0 ; $i < 2 ; $i++){
            $application = new Application();
            $application->setAuthor($author[$i]);
            $application->setContent($content[$i]);
            $advert1 = $manager->getRepository('OCPlatformBundle:Advert')->find(1);
            $application->setAdvert($advert1);
            $manager->persist($application);
        }
        for ($i = 0 ; $i < 2 ; $i++){
            $application = new Application();
            $application->setAuthor($author[$i]);
            $application->setContent($content[$i]);
            $advert6 = $manager->getRepository('OCPlatformBundle:Advert')->find(6);
            $application->setAdvert($advert6);
            $manager->persist($application);
        }
        for ($i = 0 ; $i < 1 ; $i++){
            $application = new Application();
            $application->setAuthor($author[$i]);
            $application->setContent($content[$i]);
            $advert2 = $manager->getRepository('OCPlatformBundle:Advert')->find(2);
            $application->setAdvert($advert2);
            $manager->persist($application);
        }
        for ($i = 0 ; $i < 1 ; $i++){
            $application = new Application();
            $application->setAuthor($author[$i]);
            $application->setContent($content[$i]);
            $advert5 = $manager->getRepository('OCPlatformBundle:Advert')->find(5);
            $application->setAdvert($advert5);
            $manager->persist($application);
        }
        for ($i = 0 ; $i < 3 ; $i++){
            $application = new Application();
            $application->setAuthor($author[$i]);
            $application->setContent($content[$i]);
            $advert7 = $manager->getRepository('OCPlatformBundle:Advert')->find(7);
            $application->setAdvert($advert7);
            $manager->persist($application);
        }
        // On déclenche l'enregistrement de toutes les compétences
        $manager->flush();
    }
}
