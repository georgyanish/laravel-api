---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_51e581cc9a1f9ee73cc207ec4e67e8d4 -->
## api/categories

> Example request:

```bash
curl -X GET "http://localhost/api/categories" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/categories",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "categoryId": 1,
            "categoryName": "test category",
            "created_at": "2018-06-12 20:03:23",
            "updated_at": "2018-06-12 20:03:23"
        }
    ]
}
```

### HTTP Request
`GET api/categories`

`HEAD api/categories`


<!-- END_51e581cc9a1f9ee73cc207ec4e67e8d4 -->

<!-- START_d6315c0f80fdc5b8b5cafcb7768d054e -->
## api/products

> Example request:

```bash
curl -X GET "http://localhost/api/products" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": [
        {
            "prodId": 1,
            "catId": 1,
            "prodName": "Test Product",
            "SKU": "SKU001",
            "price": "21.00",
            "created_at": "2018-06-12 20:04:46",
            "updated_at": "2018-06-12 20:04:46"
        },
        {
            "prodId": 2,
            "catId": 1,
            "prodName": "Test Product 2",
            "SKU": "SKU002",
            "price": "20.00",
            "created_at": "2018-06-12 21:17:01",
            "updated_at": "2018-06-12 21:17:01"
        },
        {
            "prodId": 3,
            "catId": 1,
            "prodName": "Test 3",
            "SKU": "1234",
            "price": "2.00",
            "created_at": "2018-06-12 23:00:21",
            "updated_at": "2018-06-12 23:00:21"
        },
        {
            "prodId": 15,
            "catId": 1,
            "prodName": "Test 5",
            "SKU": "SKU344",
            "price": "2.00",
            "created_at": "2018-06-13 02:21:05",
            "updated_at": "2018-06-13 02:21:05"
        },
        {
            "prodId": 23,
            "catId": 1,
            "prodName": "Test 21",
            "SKU": "SKU3445",
            "price": "2.00",
            "created_at": "2018-06-13 02:30:22",
            "updated_at": "2018-06-13 02:30:22"
        },
        {
            "prodId": 25,
            "catId": 1,
            "prodName": "Test 25",
            "SKU": "SK990",
            "price": "2.00",
            "created_at": "2018-06-13 02:56:02",
            "updated_at": "2018-06-13 02:56:02"
        },
        {
            "prodId": 26,
            "catId": 1,
            "prodName": "Test 25",
            "SKU": "SssK990",
            "price": "2.00",
            "created_at": "2018-06-13 03:00:36",
            "updated_at": "2018-06-13 03:00:36"
        },
        {
            "prodId": 31,
            "catId": 1,
            "prodName": "Test 30",
            "SKU": "AAAK990",
            "price": "2.00",
            "created_at": "2018-06-13 03:03:37",
            "updated_at": "2018-06-13 03:03:37"
        }
    ]
}
```

### HTTP Request
`GET api/products`

`HEAD api/products`


<!-- END_d6315c0f80fdc5b8b5cafcb7768d054e -->

<!-- START_6245d3ecb58f4c84624b92c5cefa6a05 -->
## api/products/{id}

> Example request:

```bash
curl -X GET "http://localhost/api/products/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "data": {
        "prodId": 1,
        "catId": 1,
        "prodName": "Test Product",
        "SKU": "SKU001",
        "price": "21.00",
        "created_at": "2018-06-12 20:04:46",
        "updated_at": "2018-06-12 20:04:46"
    }
}
```

### HTTP Request
`GET api/products/{id}`

`HEAD api/products/{id}`


<!-- END_6245d3ecb58f4c84624b92c5cefa6a05 -->

<!-- START_05b4383f00fd57c4828a831e7057e920 -->
## api/products

> Example request:

```bash
curl -X POST "http://localhost/api/products" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/products`


<!-- END_05b4383f00fd57c4828a831e7057e920 -->

<!-- START_241fd2204f9f5b65c7aa7c9618dcca22 -->
## api/products/{id}

> Example request:

```bash
curl -X PUT "http://localhost/api/products/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products/{id}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/products/{id}`


<!-- END_241fd2204f9f5b65c7aa7c9618dcca22 -->

<!-- START_160dac2b00e86335715987c6d1c1f3eb -->
## api/products/{id}

> Example request:

```bash
curl -X DELETE "http://localhost/api/products/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/products/{id}`


<!-- END_160dac2b00e86335715987c6d1c1f3eb -->

