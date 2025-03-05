from pydantic import BaseModel


class RentalPeriod(BaseModel):
    id: int
    name: str
    value: int

    class Config:
        orm_mode = True
