import os
from dotenv import load_dotenv
from sqlmodel import create_engine

load_dotenv()

connection_string = os.getenv("DB_URL")
SQLALCHEMY_URL = f"{connection_string}"


engine = create_engine(SQLALCHEMY_URL, echo=True)
