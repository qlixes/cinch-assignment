from decimal import Decimal
from sqlmodel import Field, Index, Session, SQLModel, UniqueConstraint, create_engine


class Product(SQLModel, table=True):
    __tablename__ = "products"

    id: int = Field(primary_key=True)
    sku: str
    name: str
    description: str

    __table_args__ = (UniqueConstraint("sku", name="uniq_products"),)


class Region(SQLModel, table=True):
    __tablename__ = "regions"

    id: int = Field(primary_key=True)
    name: str = Field(index=True)

    __table_args__ = (UniqueConstraint("name", name="uniq_regions"),)


class RentalPeriod(SQLModel, table=True):
    __tablename__ = "rental_periods"

    id: int = Field(primary_key=True)
    name: str = Field(index=True)
    value: int

    __table_args__ = (UniqueConstraint("name", name="uniq_rental_periods"),)


class AttributeValue(SQLModel, table=True):
    __tablename__ = "attribute_values"

    id: int = Field(primary_key=True)
    attribute_id: int = Field(foreign_key="attributes.id", index=True)
    value: str

    __table_args__ = (
        UniqueConstraint("attribute_id", "value",
                         name="uniq_attribute_values"),
    )


class Attribute(SQLModel, table=True):
    __tablename__ = "attributes"

    id: int = Field(primary_key=True)
    name: str = Field(index=True)

    __table_args__ = (
        UniqueConstraint("name", name="uniq_attributes"),
    )


class ProductAttribute(SQLModel, table=True):
    __tablename__ = "product_attributes"

    id: int = Field(primary_key=True)
    product_id: int = Field(foreign_key="products.id", index=True)
    color_id: int = Field(foreign_key="attribute_values.id")
    size_id: int = Field(foreign_key="attribute_values.id")

    __table_args__ = (UniqueConstraint(
        "product_id", "color_id", "size_id", name="unique_product_attributes"),)


class ProductPrice(SQLModel, table=True):
    __tablename__ = "product_prices"

    id: int = Field(primary_key=True)
    region_id: int = Field(foreign_key="regions.id", index=True)
    rental_period_id: int = Field(foreign_key="rental_periods.id", index=True)
    product_id: int = Field(foreign_key="products.id", index=True)
    price: Decimal

    __table_args__ = (UniqueConstraint(
        "region_id", "rental_period_id", "product_id", name="uniq_product_prices"),)
