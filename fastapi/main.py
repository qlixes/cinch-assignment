from fastapi import FastAPI

import json
from sqlmodel import SQLModel, Session, select
import uvicorn
from database import engine
from model import Product
from entity import Product as ProductEntity

app = FastAPI()


@app.on_event("startup")
async def startup():
    SQLModel.metadata.create_all(engine, checkfirst=True)
    print("Database connected")


@app.post("/api/products")
async def products(product: ProductEntity):
    with Session(engine) as session:
        products = session.exec(select(Product)).all()

        return {"code": "000", "message": "Successfully", "data": products}


@app.post("/api/product_attributes")
async def product_attributes():
    pass


@app.post("/api/product_prices")
async def product_prices():
    pass


@app.post("/api/region_product_prices")
async def region_product_prices():
    pass


@app.post("/api/period_product_price")
async def period_product_price():
    pass


if __name__ == "__main__":
    uvicorn.run("main:app", host="0.0.0.0", reload=True, port=8000)
