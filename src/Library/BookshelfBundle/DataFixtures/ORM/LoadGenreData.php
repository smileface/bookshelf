<?php
    namespace Library\BookshelfBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\FixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use Library\BookshelfBundle\Entity\Genre;

    class LoadGenreData implements FixtureInterface
    {
        public function load(ObjectManager $manager)
        {
            $genre1 = new Genre();
            $genre1->setName('Religion');
            $genre1->setDescription('Religion is a set of variously organized beliefs about the relationship between natural and supernatural aspects of reality, and the role of humans in this relationship.');

            $genre2 = new Genre();
            $genre2->setName('Philosophical fiction');
            $genre2->setDescription('Philosophical fiction refers to works of fiction in which a significant proportion of the work is devoted to a discussion of the sort of questions normally addressed in discursive philosophy.');

            $genre3 = new Genre();
            $genre3->setName('Dystopia');
            $genre3->setDescription('A dystopia is a community or society that is in some important way undesirable or frightening. It is the opposite of a utopia.');



            $manager->persist($genre1);
            $manager->persist($genre2);
            $manager->persist($genre3);

            $manager->flush();
        }
    }