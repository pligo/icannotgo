<?php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadStageData extends AbstractFixture 
{
    public function load(ObjectManage $manager)
    {
        $stage = new Stage();
        $stage->setName('Le Bataclan');
        $stage->setAddress('50 boulevard Voltaire');
        $stage->setDistrict(11);
        $stage->setDescription('Salle de concert');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('La Bellevilloise');
        $stage->setAddress('21 rue Yves-Toudic');
        $stage->setDistrict(10);
        $stage->setDescription('Bar à tendance MusicHall');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('L\'Alhambra');
        $stage->setAddress('19-21 rue Boyer');
        $stage->setDistrict(10);
        $stage->setDescription('Bar et salle de spectacle');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Bobino');
        $stage->setAddress('20 rue de la Gaîté');
        $stage->setDistrict(14);
        $stage->setDescription('Salle de spectacle');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Les Bouffes Du Nord');
        $stage->setAddress('37 bis boulevard de la Chapelle');
        $stage->setDistrict(10);
        $stage->setDescription('Salle de théâtre');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Cabaret Sauvage');
        $stage->setAddress('211, avenue Jean-Jaurès');
        $stage->setDistrict(19);
        $stage->setDescription('Salle de spectacle dans le parc de la Vilette');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Café de la Danse');
        $stage->setAddress('5 passage Louis-Philippe');
        $stage->setDistrict(11);
        $stage->setDescription('Salle de spectacle');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Casino de Paris');
        $stage->setAddress('16, rue de Clichy');
        $stage->setDistrict(09);
        $stage->setDescription('Salle de spectacle');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('La Cigale');
        $stage->setAddress('120 boulevard de Rochechouart');
        $stage->setDistrict(18);
        $stage->setDescription('Salle de café-concert');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Cité De La Musique');
        $stage->setAddress('¨Parc de la Villette');
        $stage->setDistrict(19);
        $stage->setDescription('Salle de concert');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Divan Du Monde');
        $stage->setAddress('75 rue des Martyrs');
        $stage->setDistrict(18);
        $stage->setDescription('Salle de concert');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('L\'Européen');
        $stage->setAddress('5 rue Biot');
        $stage->setDistrict(17);
        $stage->setDescription('Salle de spectacle');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Olympia');
        $stage->setAddress('28 boulevard des Capucines');
        $stage->setDistrict(9);
        $stage->setDescription('Salle de music-hall');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Bercy');
        $stage->setAddress('8 boulevard de Bercy');
        $stage->setDistrict(12);
        $stage->setDescription('Salle de spectacle');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Zénith');
        $stage->setAddress('Parc de la Villette');
        $stage->setDistrict(19);
        $stage->setDescription('Salle de spectacle');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Palais Des Sports');
        $stage->setAddress('1 place de la Porte de Versailles');
        $stage->setDistrict(15);
        $stage->setDescription('Salle de spectacle');
        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setName('Trois Baudets');
        $stage->setAddress('64 boulevard de Clichy');
        $stage->setDistrict(14);
        $stage->setDescription('Bar restaurant et salle de concert');
        $manager->persist($stage);
        $manager->flush();
    }
}
