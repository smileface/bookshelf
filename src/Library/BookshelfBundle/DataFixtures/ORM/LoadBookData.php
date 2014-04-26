<?php
    namespace Library\BookshelfBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\FixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use Library\BookshelfBundle\Entity\Book;

    class LoadBookData implements FixtureInterface
    {
        public function load(ObjectManager $manager)
        {
            $book1 = new Book();
            $book1->setTitle('ESV New Classic Reference Bible');
            $book1->setDescription('The ESV New Classic Reference Bible is a new edition of the first ESV Bible edition ever published in 2001—the ESV Classic Reference Bible.');
            $book1->setAuthorId(1);
            $book1->setGenreId(1);
            $book1->setDate(new \DateTime("07.04.2011"));
            $book1->setIsbn(9781433524769);

            $book2 = new Book();
            $book2->setTitle('The Picture of Dorian Gray');
            $book2->setDescription('Moral fantasy novel by Oscar Wilde, published in an early form in Lippincott\'s Magazine in 1890.');
            $book2->setAuthorId(2);
            $book2->setGenreId(2);
            $book2->setDate(new \DateTime("17.05.2012"));
            $book2->setIsbn(1450522475);

            $book3 = new Book();
            $book3->setTitle('Divergent');
            $book3->setDescription('In Beatrice Prior’s dystopian Chicago world, society is divided into five factions, each dedicated to the cultivation of a particular virtue—Candor (the honest), Abnegation (the selfless), Dauntless (the brave), Amity (the peaceful), and Erudite (the intelligent).');
            $book3->setAuthorId(3);
            $book3->setGenreId(3);
            $book3->setDate(new \DateTime("28.02.2012"));
            $book3->setIsbn(9780062024039);

            $book4 = new Book();
            $book4->setTitle('Insurgent');
            $book4->setDescription('One choice can transform you—or it can destroy you.');
            $book4->setAuthorId(3);
            $book4->setGenreId(3);
            $book4->setDate(new \DateTime("01.05.2012"));
            $book4->setIsbn(9780062024046);

            $book5 = new Book();
            $book5->setTitle('Allegiant');
            $book5->setDescription('What if your whole world was a lie?');
            $book5->setAuthorId(3);
            $book5->setGenreId(3);
            $book5->setDate(new \DateTime("22.10.2013"));
            $book5->setIsbn(9780062024060);



            $manager->persist($book1);
            $manager->persist($book2);
            $manager->persist($book3);
            $manager->persist($book4);
            $manager->persist($book5);

            $manager->flush();
        }
    }