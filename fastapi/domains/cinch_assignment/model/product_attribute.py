from pydantic import BaseModel


class ProductAttribute(BaseModel):
    id: int
    product_id: int
    color_id: int
    size_id: int

    class Config:
        orm_mode = True
