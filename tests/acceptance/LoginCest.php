<?php


class LoginCest
{
    public function _before(AcceptanceTester $I)
    {

    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
          $I->am('user'); // actor's role
          $I->wantTo('login to website'); // feature to test
          $I->lookForwardTo('access all website features'); // result to achieve
          $I->amOnPage('/login');
    }
}
