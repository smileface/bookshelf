<?php
    namespace Library\BookshelfBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\FixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use Library\BookshelfBundle\Entity\Author;

    class LoadAuthorData implements FixtureInterface
    {
        public function load(ObjectManager $manager)
        {
            $author1 = new Author();
            $author1->setFirstName('Good News Publishing');
            $author1->setBirthDate(new \DateTime("01.01.1938"));
            $author1->setBiography('Good News Publishers is a not-for-profit Christian ministry that publishes and distributes gospel tracts.');

            $author2 = new Author();
            $author2->setFirstName('Oscar');
            $author2->setLastName('Wilde');
            $author2->setMiddleName('Fingal');
            $author2->setBirthDate(new \DateTime('16.10.1854'));
            $author2->setDeathDate(new \DateTime('30.11.1900'));
            $author2->setBiography('Oscar Wilde was born at 21 Westland Row, Dublin (now home of the Oscar Wilde Centre, Trinity College), the second of three children born to Sir William Wilde and Jane Wilde, two years behind William ("Willie").');

            $author3 = new Author();
            $author3->setFirstName('Veronica');
            $author3->setLastName('Roth');
            $author3->setMiddleName('Anne');
            $author3->setBirthDate(new \DateTime('19.08.1988'));
            $author3->setBiography('Roth was born in New York City and was raised primarily in Barrington, Illinois.');



            $manager->persist($author1);
            $manager->persist($author2);
            $manager->persist($author3);

            $manager->flush();
        }
    }