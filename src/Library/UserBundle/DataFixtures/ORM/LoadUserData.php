<?php
    namespace Library\UserBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\FixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use Library\UserBundle\Entity\User;

    class LoadUserData implements FixtureInterface
    {
        public function load(ObjectManager $manager)
        {
            $userAdmin = new User();
            $userAdmin->setUsername('admin');
            $userAdmin->setPlainPassword('admin');
            $userAdmin->setEmail('admin@mail.com');
            $userAdmin->setFirstName('Admin');
            $userAdmin->setLastName('Administrator');
            $userAdmin->setSuperAdmin(true);
            $userAdmin->setEnabled(true);

            $user1 = new User();
            $user1->setUsername('John');
            $user1->setPlainPassword('user');
            $user1->setEmail('johndoe@mail.com');
            $user1->setFirstName('John');
            $user1->setLastName('Doe');
            $user1->setEnabled(true);

            $user2 = new User();
            $user2->setUsername('Jane');
            $user2->setPlainPassword('user');
            $user2->setEmail('janeroe@mail.com');
            $user2->setFirstName('Jane');
            $user2->setLastName('Roe');
            $user2->setEnabled(true);



            $manager->persist($userAdmin);
            $manager->persist($user1);
            $manager->persist($user2);

            $manager->flush();
        }
    }