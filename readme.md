Laravel API Example.


This application build on Laravel framework with MYSQL as database.

Following are API calls added on this project. 

Products

List Categories (GET)
- http://<ip>/api/categories

List Products (GET)
- http://<ip>/api/products

Product detail (GET)
- http://<ip>/api/products/{id}

Add new product (POST)
- http://<ip>/api/products

Update product (PUT)
- http://<ip>/api/products/{id}

Delete product (DELETE)
- http://<ip>/api/products/{id}

Testing (CLI)
- codecept run api createproductCest (Create product)
- codecept run api getproductsCest (List products)
- codecept run api getCategoriesCest (List categories)
