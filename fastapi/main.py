from typing import Annotated, final
from fastapi import Depends, FastAPI
from sqlalchemy.orm import Session

import model
from model import Product
from database import SessionLocal, engine
import uvicorn

from sqlalchemy import select
from sqlalchemy.orm import lazyload

app = FastAPI()

model.Base.metadata.create_all(bind=engine)


def get_db():
    db = SessionLocal()
    try:
        yield db
    finally:
        db.close()


db_dependency = Annotated[Session, Depends(get_db)]


@app.post("/api/products")
async def products():
    products = select(Product).options(lazyload(Product.ProductAttributes))
    return {"data": products}


@app.post("/api/product_attributes")
async def product_attributes():
    return


@app.post("/api/product_prices")
async def product_prices():
    return


@app.post("/api/region_product_prices")
async def region_product_prices():
    return


@app.post("/api/period_product_price")
async def period_product_price():
    return


if __name__ == "__main__":
    uvicorn.run("main:app", host="0.0.0.0", reload=True, port=8000)
