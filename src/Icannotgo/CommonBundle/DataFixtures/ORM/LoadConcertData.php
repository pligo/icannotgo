<?php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadConcertData extends AbstractFixture 
{
    public function load(ObjectManage $manager)
    {
            $concert = new concert();
            $concert->setStage();
            $concert->setArtist();
            $concert->setBeginAt();
            $concert->setFinishAt();
            $concert->setMusicStyle1();
            $concert->setMusicStyle2();
    }
}