<?php
    namespace Library\BookshelfBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\FixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use Library\BookshelfBundle\Entity\User;

    class LoadUserData implements FixtureInterface
    {
        public function load(ObjectManager $manager)
        {
            $userAdmin = new User();
            $userAdmin->setUsername('admin');
            $userAdmin->setPassword('admin');
            $userAdmin->setEmail('admin@mail.com');
            $userAdmin->setFirstName('Admin');
            $userAdmin->setLastName('Administrator');

            $user1 = new User();
            $user1->setUsername('John');
            $user1->setPassword('user');
            $user1->setEmail('johndoe@mail.com');
            $user1->setFirstName('John');
            $user1->setLastName('Doe');

            $user2 = new User();
            $user2->setUsername('Jane');
            $user2->setPassword('user');
            $user2->setEmail('janeroe@mail.com');
            $user2->setFirstName('Jane');
            $user2->setLastName('Roe');



            $manager->persist($userAdmin);
            $manager->persist($user1);
            $manager->persist($user2);

            $manager->flush();
        }
    }