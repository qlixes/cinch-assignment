from typing import List
from pydantic import BaseModel, ConfigDict


class ProductAttribute(BaseModel):
    model_config = ConfigDict(from_attributes=True)
    id: int
    product_id: int
    color_name: str
    size_name: str


class ProductPrice(BaseModel):
    model_config = ConfigDict(from_attributes=True)

    id: int
    product_id: int
    region_name: str
    rental_period_name: str


class Product(BaseModel):
    mmodel_config = ConfigDict(from_attributes=True)

    id: int
    sku: str
    name: str
    description: str
    product_attributes: List[ProductAttribute]
    product_prices: List[ProductPrice]
