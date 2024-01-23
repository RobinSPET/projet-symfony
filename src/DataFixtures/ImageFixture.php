<?php

namespace App\DataFixtures;

use App\Entity\Images;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImageFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $urls = [
            '/img/tshirtBlanc.jpeg',
            '/img/tshirtNoir.jpeg',
            '/img/tshirtBlancTheK.jpeg',
            '/img/pullStussyBlanc.jpeg',
            '/img/pullStussy.jpeg',
            '/img/pullTheK.jpeg',
            '/img/sousPullBlanc.jpeg',
            '/img/sousPullChiné.jpeg',
            '/img/sousPullGris.jpeg',
            '/img/gilet.jpeg',
            '/img/giletBleu.jpeg',
            '/img/giletGris.jpeg',
            '/img/doudoune700.jpeg',
            '/img/manteauFemme.jpeg',
            '/img/parkaHelve.jpeg',
            '/img/vesteBeige.jpeg',
            '/img/vesteBleu.jpeg',
            '/img/vesteNoir.jpeg',
            '/img/jeanRegular.jpeg',
            '/img/jeanBaggy.jpeg',
            '/img/jeanBaggyNoir.jpeg',
            '/img/pantalonBleu.jpeg',
            '/img/pantalonNoir.jpeg',
            '/img/pantalonNoirQuadrillé.jpeg',
            '/img/joggingNikeTech.jpeg',
            '/img/joggingAdidas.jpeg',
            '/img/joggingVD.jpeg',
            '/img/jordanDior.jpeg',
            '/img/jordanOreo.jpeg',
            '/img/jordan4Red.jpeg',
            '/img/chaussetteNoir.jpeg',
            '/img/chaussettesBlancNike.jpeg',
            '/img/chaussetteNoirNike.jpeg',
            '/img/caleconblanc.jpeg',
            '/img/caleconsCalvin.jpeg',
            '/img/caleconsAmericains.jpeg',
        ];
        foreach ($urls as $key => $url) { // pour chaque catégorie
            $image = new Images();
            $image->setUrl($url);
            $manager->persist($image);
            $this->addReference("Image_" . $key+1, $image);
        }
        $manager->flush();
    }
}
