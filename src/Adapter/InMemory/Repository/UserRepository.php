<?php

namespace App\Adapter\InMemory\Repository;

use App\Entity\JobSeeker;
use App\Entity\Recruiter;
use App\Entity\User;
use App\Gateway\UserGateway;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class UserRepository
 * @package App\Adapter\InMemory\Repository
 */
class UserRepository implements UserGateway
{
    /**
     * @var User[]
     */
    public array $users = [];

    /**
     * UserRepository constructor.
     * @param UserPasswordEncoderInterface $userPasswordEncoder
     */
    public function __construct()
    {
        $jobSeeker = (new JobSeeker())
            ->setFirstName("John")
            ->setLastName("Doe")
            ->setEmail("job.seeker@email.com")
        ;

        $reflectionClass = new \ReflectionClass($jobSeeker);
        $reflectionProperty = $reflectionClass->getProperty("id");
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($jobSeeker, 1);



        $recruiter = (new Recruiter())
            ->setFirstName("Jane")
            ->setLastName("Doe")
            ->setEmail("recruiter@email.com")
        ;


        $this->users = [
            "job.seeker@email.com" => $jobSeeker,
            1 => $jobSeeker,
            "recruiter@email.com" => $recruiter
        ];
    }

    /**
     * @inheritDoc
     */
    public function findByEmail(string $email): ?UserInterface
    {
    

        return $this->users[$email];
    }
}
