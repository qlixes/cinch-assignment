from pydantic import BaseModel


class AttributeValue(BaseModel):
    id: int
    attribute_id: int
    value: str

    class Config:
        orm_mode = True
