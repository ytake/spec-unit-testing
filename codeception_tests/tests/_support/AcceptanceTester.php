<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /** @var \Acme\Crazy  */
    protected $application;

    /** @var string */
    protected $number;

   /**
    * Define custom actions here
    */
    public function m($string)
    {
        $this->application = new \Acme\Crazy;
        $this->am($string);
    }

    /**
     * @param $number
     */
    public function amCalled($number)
    {
        $this->number = $number;
    }

    /**
     * @param $string
     * @throws Exception
     */
    public function answer($string)
    {
        PHPUnit_Framework_Assert::assertSame($string, $this->application->call($this->number));
    }
}
