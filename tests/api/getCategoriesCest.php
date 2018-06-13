<?php


class getCategoriesCest
{
    public function _before(ApiTester $I)
    {
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->wantToTest("Get Categories List");
        $I->sendGET('categories');
        $response = $I->grabResponse();
        $response_string = (string)$response;
        print PHP_EOL.$response_string.PHP_EOL;
    }
}
