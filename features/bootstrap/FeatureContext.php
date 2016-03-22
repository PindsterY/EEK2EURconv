<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;


require_once __DIR__ . '/../../classes/Calculator/Calculator.php';

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $first_value;
    private $result;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I have a value :arg1
     */
    public function iHaveAValue($arg1)
    {
        $this->first_value = $arg1;

    }

    /**
     * @When I use EEK2EUR function
     */
    public function iUseEEK2EURFunction()
    {
        $calc = new Calculator();

        $this->result = $calc->EEK2EUR($this->first_value);


    }

    /**
     * @When I use EUR2EEK function
     */
    public function iUseEUR2EEKFunction()
    {
        $calc = new Calculator();

        $this->result = $calc->EUR2EEK($this->first_value);


    }

    /**
     * @Then I should get :arg1
     */
    public function iShouldGet($arg1)
    {
        if ($this->result != $arg1) {
            throw new Exception("Converting {$this->first_value} to other currency did not equal ".
             "to {$arg1} but instead returned '{$this->result}'");
        }
    }
}
