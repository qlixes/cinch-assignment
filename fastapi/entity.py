from typing import List, Optional
from pydantic import BaseModel, ConfigDict


class ProductAttribute(BaseModel):
    id: int
    product_id: int
    color_name: str
    size_name: str


class ProductPrice(BaseModel):
    id: int
    product_id: int
    region_name: str
    rental_period_name: str


class Product(BaseModel):
    region: Optional[str]
    period: Optional[str]
