from typing import Text
from pydantic import BaseModel


class Product(BaseModel):
    id: int
    sku: str
    name: str
    description: Text

    class Config:
        orm_mode = True
