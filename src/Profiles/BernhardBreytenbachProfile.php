<?php

namespace mostertb\PHPSA2018Profiles\Profiles;


class BernhardBreytenbachProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Bernhard Breytenbach';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return "Having started with web development back in 2005, Bernhard Breytenbach is a self-taught PHP developer/Linux DevOp. He currently works a lot with Cryptocurrencies, trying to simplify the process of receiving payments for merchants at GloBee.com. As someone who is very involved in the South African Dev community, attending and speaking at different conferences and meetups, he also runs the local Pretoria PHP usergroup and is one of the organisers of PHP South Africa. He has a heart for young students and enjoys sharing his knowledge with the community. As a strong believer in mentorship, he currently mentors a number of students from different backgrounds, through which he tries to inspire the new generation.";
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://secure.gravatar.com/avatar/ababbb20a39002f75cd9ac1b7a8ec2d4?s=250';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'xethron';
    }

    /**
     * Optional function that should return an array of OpenSource projects maintained by this person.
     * The index should contain the name of the project and the value should be a url to the project's homepage (typically
     * a GitHub page)
     *
     * @return array
     */
    public function getMaintainedProjects()
    {
        return array(
            'Laravel Migrations Generator' => 'https://github.com/Xethron/migrations-generator',
            'PHP Docker Dev Environment' => 'https://github.com/Xethron/php-docker'
        );
    }

    /**
     * Optional function that should return an array of OpenSource projects to which this person has contributed (or at least
     * recommends). The index should contain the name of the project and the value should be a url to the project's
     * homepage (typically a GitHub page)
     *
     * @return array
     */
    public function getInvolvedProjects()
    {
        return array();
    }

    public function getTwitterUsername()
    {
        return '@bbreyten';
    }
}
