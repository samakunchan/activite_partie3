<?php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\Image;

class LoadAdvert implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $titles = array(
            'Développeur web Symfony',
            'Développeur mobile Angular',
            'Graphiste',
            'Intégrateur web',
            'Développeur Front End',
            'Développeur Back End Laravel',
            'Développeur wordpress',
            'Développeur full stack'
        );
        $authors = array(
            'Moi',
            'Jean Neymar',
            'Justin Greedoo',
            'Open classroom',
            'Jean-michel Bruitage',
            'Stromoyen',
            'Bertrand FilsDeup',
            'Dark Vador'
        );
        $contents = array(
            'Je cherche à réaliser cette activité.',
            'Je cherche à réaliser cette activité.',
            'Je cherche à réaliser cette activité.',
            'Je cherche à réaliser cette activité.',
            'Je cherche à réaliser cette activité.',
            'Je cherche à réaliser cette activité.',
            'Je cherche à réaliser cette activité.',
            'Je cherche la force'
        );
        $slugs = array(
            'developpeur-web-Symfony',
            'developpeur-mobile-angular',
            'graphiste',
            'integrateur-web',
            'developpeur-front-end',
            'developpeur-back-end-laravel',
            'developpeur-wordpress',
            'developpeur-full-stack'
        );
        for ($i = 0 ; $i < 7 ; $i++){
            $advert = new Advert();
            $image = new Image();
            $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
            $image->setAlt('Job de rêve');
            $advert->setTitle($titles[$i]);
            $advert->setAuthor($authors[$i]);
            $advert->setContent($contents[$i]);
            $advert->setImage($image);
            $advert->setSlug($slugs[$i]);
            $manager->persist($advert);
        }
        $manager->flush();
    }
}
