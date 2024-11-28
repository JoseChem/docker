version: '3.8'

services:
  app:
    build:
      context: .
      dockerfile: Dockerfile
    container_name: mi-aplicacion
    ports:
      - "8080:80"
    volumes:
      - .:/var/www/html
    environment:
      DB_HOST: localhost
      DB_NAME: hacer4
      DB_USER: root
      DB_PASSWORD: ""
    depends_on:
      - db

  db:
    image: mysql:5.7
    container_name: mysql-database
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: ""
      MYSQL_DATABASE: hacer4
    ports:
      - "3306:3306"
    volumes:
      - db_data:/var/lib/mysql

volumes:
  db_data:
