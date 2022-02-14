<?php

namespace App\Entity;

use App\Repository\JobSeekerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JobSeekerRepository::class)]
class JobSeeker extends User
{
    public function getRoles()
    {
        return ["ROLE_USER", 'ROLE_JOB_SEEKER'];
    }
   
}
