<?php


class getProductsCest
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
        $I->wantToTest("Get products List");
        $I->sendGET('products');
        $response = $I->grabResponse();
        $response_string = (string)$response;
        print PHP_EOL.$response_string.PHP_EOL;
    }
}
