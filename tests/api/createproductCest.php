<?php


class createproductCest
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
        $I->wantToTest("Create a product");
        $I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
        $values = ["catId"=>"1", "prodName" => "test 7", "SKU" => "1111", "price"=>"21.98"];
        $I->sendPOST('products', $values);
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::CREATED); 
        $I->seeResponseIsJson();
        $I->seeResponseContains('{"response":"OK"}');
        $response = $I->grabResponse();
        $response_string = (string)$response;
        print PHP_EOL.$response_string.PHP_EOL;
    }
}
