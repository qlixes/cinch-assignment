from pydantic import BaseModel


class Attribute(BaseModel):
    id: int
    name: str

    class Config:
        ormm_mode = True
