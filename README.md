## Cinch Home-Test-Assignment

### Flowchart
![Flow system](assets/assignment.png "Assignment")
###  How to install
#### 1. rename .env.example into .env
```bash
cp .env.example .env
```
#### 2. Setup mandatory property
```env
APP_URL=

DB_CONNECTION=
DB_HOST=localhost
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

#### 3. Install dependencies
```bash
composer install
```

#### 4. Create schema database
```bash
php artisan migrate
```
##### Note : Create schema database and dummy data
```bash
php artisan migrate:fresh --seed
```
---
### Feature
- **Show product details**
> /api/products

##### Parameter
```json
{
  "region": "Singapore",
  "period": "3 Months"
}
```
##### Response :
```json
{
  "code": "000",
  "message": "Successfully",
  "data": [
    {
      "id": 1,
      "sku": "A2178",
      "name": "Macbook Pro i5",
      "description": "Macbook Pro",
      "product_attributes": [
        {
          "id": 1,
          "color": "grey",
          "size": "13"
        },
        {
          "id": 2,
          "color": "silver",
          "size": "13"
        }
      ],
      "product_prices": [
        {
          "id": 1,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 4,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i5"
        }
      ]
    },
    {
      "id": 2,
      "sku": "A2289",
      "name": "Macbook Pro i7",
      "description": "Macbook Pro",
      "product_attributes": [
        {
          "id": 3,
          "color": "silver",
          "size": "13"
        },
        {
          "id": 4,
          "color": "silver",
          "size": "15"
        }
      ],
      "product_prices": [
        {
          "id": 7,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 10,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i7"
        }
      ]
    },
    {
      "id": 3,
      "sku": "A2338",
      "name": "Macbook Pro M1",
      "description": "Macbook Pro",
      "product_attributes": [
        {
          "id": 5,
          "color": "grey",
          "size": "13"
        },
        {
          "id": 6,
          "color": "silver",
          "size": "13"
        },
        {
          "id": 7,
          "color": "black",
          "size": "13"
        },
        {
          "id": 8,
          "color": "grey",
          "size": "14"
        },
        {
          "id": 9,
          "color": "silver",
          "size": "14"
        },
        {
          "id": 10,
          "color": "black",
          "size": "14"
        },
        {
          "id": 11,
          "color": "grey",
          "size": "16"
        },
        {
          "id": 12,
          "color": "silver",
          "size": "16"
        },
        {
          "id": 13,
          "color": "black",
          "size": "16"
        }
      ],
      "product_prices": [
        {
          "id": 13,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 16,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro M1"
        }
      ]
    },
    {
      "id": 4,
      "sku": "A2779",
      "name": "Macbook Pro M2",
      "description": "Macbook Pro",
      "product_attributes": [
        {
          "id": 14,
          "color": "grey",
          "size": "13"
        },
        {
          "id": 15,
          "color": "silver",
          "size": "13"
        },
        {
          "id": 16,
          "color": "black",
          "size": "13"
        }
      ],
      "product_prices": []
    }
  ],
  "links": {
    "first": "http://localhost:8000/api/products?page=1",
    "last": "http://localhost:8000/api/products?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http://localhost:8000/api/products?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "path": "http://localhost:8000/api/products",
    "per_page": 15,
    "to": 4,
    "total": 4
  }
}
```
- **Show product attributes**
> /api/product_attributes

##### Response :
```json
{
  "code": "000",
  "message": "Successfully",
  "data": [
    {
      "id": 1,
      "sku": "A2178",
      "name": "Macbook Pro i5",
      "description": "Macbook Pro",
      "product_attributes": [
        {
          "id": 1,
          "color": "grey",
          "size": "13"
        },
        {
          "id": 2,
          "color": "silver",
          "size": "13"
        }
      ]
    },
    {
      "id": 2,
      "sku": "A2289",
      "name": "Macbook Pro i7",
      "description": "Macbook Pro",
      "product_attributes": [
        {
          "id": 3,
          "color": "silver",
          "size": "13"
        },
        {
          "id": 4,
          "color": "silver",
          "size": "15"
        }
      ]
    },
    {
      "id": 3,
      "sku": "A2338",
      "name": "Macbook Pro M1",
      "description": "Macbook Pro",
      "product_attributes": [
        {
          "id": 5,
          "color": "grey",
          "size": "13"
        },
        {
          "id": 6,
          "color": "silver",
          "size": "13"
        },
        {
          "id": 7,
          "color": "black",
          "size": "13"
        },
        {
          "id": 8,
          "color": "grey",
          "size": "14"
        },
        {
          "id": 9,
          "color": "silver",
          "size": "14"
        },
        {
          "id": 10,
          "color": "black",
          "size": "14"
        },
        {
          "id": 11,
          "color": "grey",
          "size": "16"
        },
        {
          "id": 12,
          "color": "silver",
          "size": "16"
        },
        {
          "id": 13,
          "color": "black",
          "size": "16"
        }
      ]
    },
    {
      "id": 4,
      "sku": "A2779",
      "name": "Macbook Pro M2",
      "description": "Macbook Pro",
      "product_attributes": [
        {
          "id": 14,
          "color": "grey",
          "size": "13"
        },
        {
          "id": 15,
          "color": "silver",
          "size": "13"
        },
        {
          "id": 16,
          "color": "black",
          "size": "13"
        }
      ]
    }
  ],
  "links": {
    "first": "http://localhost:8000/api/product_attributes?page=1",
    "last": "http://localhost:8000/api/product_attributes?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http://localhost:8000/api/product_attributes?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "path": "http://localhost:8000/api/product_attributes",
    "per_page": 15,
    "to": 4,
    "total": 4
  }
}
```
- **Show product prices**
> /api/product_prices

##### Response :
```json
{
  "code": "000",
  "message": "Successfully",
  "data": [
    {
      "id": 1,
      "sku": "A2178",
      "name": "Macbook Pro i5",
      "description": "Macbook Pro",
      "product_prices": [
        {
          "id": 1,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months"
        },
        {
          "id": 2,
          "price": "2700.00",
          "region_name": "Singapore",
          "rental_period_name": "6 Months"
        },
        {
          "id": 3,
          "price": "5400.00",
          "region_name": "Singapore",
          "rental_period_name": "12 Months"
        },
        {
          "id": 4,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months"
        },
        {
          "id": 5,
          "price": "3000.00",
          "region_name": "Malaysia",
          "rental_period_name": "6 Months"
        },
        {
          "id": 6,
          "price": "8700.00",
          "region_name": "Malaysia",
          "rental_period_name": "12 Months"
        }
      ]
    },
    {
      "id": 2,
      "sku": "A2289",
      "name": "Macbook Pro i7",
      "description": "Macbook Pro",
      "product_prices": [
        {
          "id": 7,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months"
        },
        {
          "id": 8,
          "price": "2700.00",
          "region_name": "Singapore",
          "rental_period_name": "6 Months"
        },
        {
          "id": 9,
          "price": "5400.00",
          "region_name": "Singapore",
          "rental_period_name": "12 Months"
        },
        {
          "id": 10,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months"
        },
        {
          "id": 11,
          "price": "3000.00",
          "region_name": "Malaysia",
          "rental_period_name": "6 Months"
        },
        {
          "id": 12,
          "price": "8700.00",
          "region_name": "Malaysia",
          "rental_period_name": "12 Months"
        }
      ]
    },
    {
      "id": 3,
      "sku": "A2338",
      "name": "Macbook Pro M1",
      "description": "Macbook Pro",
      "product_prices": [
        {
          "id": 13,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months"
        },
        {
          "id": 14,
          "price": "2700.00",
          "region_name": "Singapore",
          "rental_period_name": "6 Months"
        },
        {
          "id": 15,
          "price": "5400.00",
          "region_name": "Singapore",
          "rental_period_name": "12 Months"
        },
        {
          "id": 16,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months"
        },
        {
          "id": 17,
          "price": "3000.00",
          "region_name": "Malaysia",
          "rental_period_name": "6 Months"
        },
        {
          "id": 18,
          "price": "8700.00",
          "region_name": "Malaysia",
          "rental_period_name": "12 Months"
        }
      ]
    },
    {
      "id": 4,
      "sku": "A2779",
      "name": "Macbook Pro M2",
      "description": "Macbook Pro",
      "product_prices": []
    }
  ],
  "links": {
    "first": "http://localhost:8000/api/product_prices?page=1",
    "last": "http://localhost:8000/api/product_prices?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http://localhost:8000/api/product_prices?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "path": "http://localhost:8000/api/product_prices",
    "per_page": 15,
    "to": 4,
    "total": 4
  }
}
```
- **Show region product prices**
> /api/region_product_price

##### Response :
```json
{
  "code": "000",
  "message": "Successfully",
  "data": [
    {
      "id": 1,
      "name": "Singapore",
      "pricelist": [
        {
          "id": 1,
          "price": "1000.00",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 2,
          "price": "2700.00",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 3,
          "price": "5400.00",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 7,
          "price": "1000.00",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 8,
          "price": "2700.00",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 9,
          "price": "5400.00",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 13,
          "price": "1000.00",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 14,
          "price": "2700.00",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 15,
          "price": "5400.00",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro M1"
        }
      ],
      "product_prices": [
        {
          "id": 1,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 2,
          "price": "2700.00",
          "region_name": "Singapore",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 3,
          "price": "5400.00",
          "region_name": "Singapore",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 7,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 8,
          "price": "2700.00",
          "region_name": "Singapore",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 9,
          "price": "5400.00",
          "region_name": "Singapore",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 13,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 14,
          "price": "2700.00",
          "region_name": "Singapore",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 15,
          "price": "5400.00",
          "region_name": "Singapore",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro M1"
        }
      ]
    },
    {
      "id": 2,
      "name": "Malaysia",
      "pricelist": [
        {
          "id": 4,
          "price": "1100.00",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 5,
          "price": "3000.00",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 6,
          "price": "8700.00",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 10,
          "price": "1100.00",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 11,
          "price": "3000.00",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 12,
          "price": "8700.00",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 16,
          "price": "1100.00",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 17,
          "price": "3000.00",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 18,
          "price": "8700.00",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro M1"
        }
      ],
      "product_prices": [
        {
          "id": 4,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 5,
          "price": "3000.00",
          "region_name": "Malaysia",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 6,
          "price": "8700.00",
          "region_name": "Malaysia",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 10,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 11,
          "price": "3000.00",
          "region_name": "Malaysia",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 12,
          "price": "8700.00",
          "region_name": "Malaysia",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 16,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 17,
          "price": "3000.00",
          "region_name": "Malaysia",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 18,
          "price": "8700.00",
          "region_name": "Malaysia",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro M1"
        }
      ]
    },
    {
      "id": 3,
      "name": "Indonesia",
      "pricelist": [],
      "product_prices": []
    }
  ],
  "links": {
    "first": "http://localhost:8000/api/region_product_price?page=1",
    "last": "http://localhost:8000/api/region_product_price?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http://localhost:8000/api/region_product_price?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "path": "http://localhost:8000/api/region_product_price",
    "per_page": 15,
    "to": 3,
    "total": 3
  }
}
```
- **Show period product prices**
> /api/period_product_price

##### Response :
```json
{
  "code": "000",
  "message": "Successfully",
  "data": [
    {
      "id": 1,
      "name": "3 Months",
      "value": 3,
      "pricelist": [
        {
          "id": 1,
          "price": "1000.00",
          "region_name": "Singapore",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 4,
          "price": "1100.00",
          "region_name": "Malaysia",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 7,
          "price": "1000.00",
          "region_name": "Singapore",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 10,
          "price": "1100.00",
          "region_name": "Malaysia",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 13,
          "price": "1000.00",
          "region_name": "Singapore",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 16,
          "price": "1100.00",
          "region_name": "Malaysia",
          "product_name": "Macbook Pro M1"
        }
      ],
      "product_prices": [
        {
          "id": 1,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 4,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 7,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 10,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 13,
          "price": "1000.00",
          "region_name": "Singapore",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 16,
          "price": "1100.00",
          "region_name": "Malaysia",
          "rental_period_name": "3 Months",
          "product_name": "Macbook Pro M1"
        }
      ]
    },
    {
      "id": 2,
      "name": "6 Months",
      "value": 6,
      "pricelist": [
        {
          "id": 2,
          "price": "2700.00",
          "region_name": "Singapore",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 5,
          "price": "3000.00",
          "region_name": "Malaysia",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 8,
          "price": "2700.00",
          "region_name": "Singapore",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 11,
          "price": "3000.00",
          "region_name": "Malaysia",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 14,
          "price": "2700.00",
          "region_name": "Singapore",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 17,
          "price": "3000.00",
          "region_name": "Malaysia",
          "product_name": "Macbook Pro M1"
        }
      ],
      "product_prices": [
        {
          "id": 2,
          "price": "2700.00",
          "region_name": "Singapore",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 5,
          "price": "3000.00",
          "region_name": "Malaysia",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 8,
          "price": "2700.00",
          "region_name": "Singapore",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 11,
          "price": "3000.00",
          "region_name": "Malaysia",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 14,
          "price": "2700.00",
          "region_name": "Singapore",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 17,
          "price": "3000.00",
          "region_name": "Malaysia",
          "rental_period_name": "6 Months",
          "product_name": "Macbook Pro M1"
        }
      ]
    },
    {
      "id": 3,
      "name": "12 Months",
      "value": 12,
      "pricelist": [
        {
          "id": 3,
          "price": "5400.00",
          "region_name": "Singapore",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 6,
          "price": "8700.00",
          "region_name": "Malaysia",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 9,
          "price": "5400.00",
          "region_name": "Singapore",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 12,
          "price": "8700.00",
          "region_name": "Malaysia",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 15,
          "price": "5400.00",
          "region_name": "Singapore",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 18,
          "price": "8700.00",
          "region_name": "Malaysia",
          "product_name": "Macbook Pro M1"
        }
      ],
      "product_prices": [
        {
          "id": 3,
          "price": "5400.00",
          "region_name": "Singapore",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 6,
          "price": "8700.00",
          "region_name": "Malaysia",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i5"
        },
        {
          "id": 9,
          "price": "5400.00",
          "region_name": "Singapore",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 12,
          "price": "8700.00",
          "region_name": "Malaysia",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro i7"
        },
        {
          "id": 15,
          "price": "5400.00",
          "region_name": "Singapore",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro M1"
        },
        {
          "id": 18,
          "price": "8700.00",
          "region_name": "Malaysia",
          "rental_period_name": "12 Months",
          "product_name": "Macbook Pro M1"
        }
      ]
    }
  ],
  "links": {
    "first": "http://localhost:8000/api/period_product_price?page=1",
    "last": "http://localhost:8000/api/period_product_price?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http://localhost:8000/api/period_product_price?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "path": "http://localhost:8000/api/period_product_price",
    "per_page": 15,
    "to": 3,
    "total": 3
  }
}
```

