<?php

namespace App\Features;

use App\Adapter\InMemory\Repository\InterestRepository;
use App\Adapter\InMemory\Repository\JobSeekerRepository;
use App\Adapter\InMemory\Repository\OfferRepository;
use App\Entity\Interest;
use App\UseCase\ShowInterest;
use Assert\Assertion;
use Behat\Behat\Context\Context;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class ShowInterestContext implements Context
{

    private int $offer;

    private int $jobSeeker;

    /**
     * @Given /^I want to show interest for a job seeker$/
     */
    public function iWantToShowInterestForAJobSeeker()
    {
       
    }

    /**
     * @When /^I send my interest to the job seeker$/
     */
    

    /**
     * @Then /^the job seeker is aware of our interest$/
     */
    public function theJobSeekerIsAwareOfOurInterest()
    {
    }
}
