<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{

    /** @var \Acme\Crazy */
    protected $application;

    /** @var string */
    protected $string;

    public function __construct()
    {
        $this->application = new \Acme\Crazy;
    }

    /**
     * @Given :arg1 を数えた時
     */
    public function stepDefinition1($string)
    {
        $this->string = $string;
    }

    /**
     * @Then :arg1 を数える
     */
    public function tangXiaoNaiTian($output)
    {
        expect($this->application->call($this->string))->toBe($output);
    }

    /**
     * @Then :arg1 になる
     */
    public function stepDefinition2($output)
    {
        expect($this->application->call($this->string))->toBe($output);
    }
}
