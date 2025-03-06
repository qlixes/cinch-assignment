from typing import List
from sqlalchemy import ForeignKey, UniqueConstraint
from sqlalchemy.orm import Mapped, mapped_column, relationship
from database import Base
from decimal import Decimal


class AttributeValue(Base):
    __tablename__ = "attribute_values"
    id: Mapped[int] = mapped_column(primary_key=True, autoincrement=True)
    attribute_id: Mapped[int] = mapped_column(ForeignKey("attributes.id"))
    value: Mapped[str] = mapped_column()

    __table_args__ = (UniqueConstraint("attribute_id", "value"),)


class Attribute(Base):
    __tablename__ = "attributes"
    id: Mapped[int] = mapped_column(primary_key=True, autoincrement=True)
    name: Mapped[str] = mapped_column(index=True)
    AttributeValues: Mapped[List[AttributeValue]] = relationship()

    __table_args__ = (UniqueConstraint("name"),)


class ProductAttribute(Base):
    __tablename__ = "product_attributes"
    id: Mapped[int] = mapped_column(primary_key=True, autoincrement=True)
    product_id: Mapped[int] = mapped_column(ForeignKey("products.id"))
    color_id: Mapped[int] = mapped_column(
        ForeignKey("attribute_values.id"))
    size_id: Mapped[int] = mapped_column(ForeignKey("attribute_values.id"))

    __table_args__ = (UniqueConstraint("product_id", "color_id", "size_id"),)


class ProductPrice(Base):
    __tablename__ = "product_prices"
    id: Mapped[int] = mapped_column(primary_key=True, autoincrement=True)
    region_id: Mapped[int] = mapped_column(ForeignKey("regions.id"))
    rental_period_id: Mapped[int] = mapped_column(
        ForeignKey("rental_periods.id"))
    product_id: Mapped[int] = mapped_column(ForeignKey("products.id"))
    price: Mapped[Decimal] = mapped_column()

    __table_args__ = (UniqueConstraint(
        "region_id", "rental_period_id", "product_id"),)


class Product(Base):
    __tablename__ = "products"
    id: Mapped[int] = mapped_column(primary_key=True, autoincrement=True)
    sku: Mapped[str] = mapped_column(index=True)
    name: Mapped[str] = mapped_column()
    description: Mapped[str] = mapped_column()
    ProductAttributes: Mapped[List[ProductAttribute]] = relationship()
    ProductPrices: Mapped[List[ProductPrice]] = relationship()

    __table_args__ = (UniqueConstraint("sku"),)


class Region(Base):
    __tablename__ = "regions"
    id: Mapped[int] = mapped_column(primary_key=True, autoincrement=True)
    name: Mapped[str] = mapped_column(index=True)
    ProductAttributes: Mapped[List[ProductAttribute]] = relationship()

    __table_args__ = (UniqueConstraint("name"),)


class RentalPeriod(Base):
    __tablename__ = "rental_periods"
    id: Mapped[int] = mapped_column(primary_key=True, autoincrement=True)
    name: Mapped[str] = mapped_column(index=True)
    value: Mapped[int] = mapped_column()
    ProductAttributes: Mapped[List[ProductAttribute]] = relationship()

    __table_args__ = (UniqueConstraint("name"),)
