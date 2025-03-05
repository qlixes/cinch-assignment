import decimal
from pydantic import BaseModel


class ProductPrice(BaseModel):
    id: int
    region_id: int
    rental_id: int
    product_id: int
    price: decimal.Decimal

    class Config:
        orm_mode = True
