<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setTitle('Walking dead');
        $program->setSynopsis('Un virus zombie décime la terre');
        $program->setCategory($this->getReference('category_Horreur'));
        $program->setPoster('poster');
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Hunter X Hunter');
        $program->setSynopsis('Suivez les aventures de Gon le jeune hunter');
        $program->setCategory($this->getReference('category_Animation'));
        $program->setPoster('poster');
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('The shield');
        $program->setSynopsis('Vic Mackey, inspecteur de police à Los Angeles dans le quartier fictif et malfamé de Farmington');
        $program->setCategory($this->getReference('category_Action'));
        $program->setPoster('poster');
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Oz');
        $program->setSynopsis('Oz est le surnom de la prison de haute sécurité de niveau 4 ');
        $program->setCategory($this->getReference('category_Action'));
        $program->setPoster('poster');
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('The last of us');
        $program->setSynopsis('Quand le monde tel que vous le connaissiez n\'existe plus');
        $program->setCategory($this->getReference('category_Horreur'));
        $program->setPoster('poster');
        $manager->persist($program);

        $manager->flush();

       
    }
        

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            CategoryFixtures::class,
        ];
    }
}
