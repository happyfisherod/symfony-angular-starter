
# Symfony-Angular Starter

Starter project for Symfony RESTful API and Angular SPA.

## Quick Start

````
cd symfony-angular-starter
cp docker-compose.yml.dist docker-compose.yml  
docker-compose up
````

### Client

[http://localhost:8000](http://localhost:8000)  

| Username | Password | Roles              |
|----------|----------|--------------------|
| user     | user     | `ROLE_USER`        |
| admin    | admin    | `ROLE_ADMIN`       |
| super    | super    | `ROLE_SUPER_ADMIN` |


### Server

[http://localhost:8001](http://localhost:8001)

Obtain a token for API access:  
`curl -X POST http://localhost:8001/login -d username=admin -d password=admin`

Swagger API Docs  
[http://localhost:8001/api/docs.json](http://localhost:8001/api/docs.json)
