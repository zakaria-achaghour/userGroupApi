# About the App

This is a APIs for managing users & groups using api platfomrs.

## 1. Clone the repository
`https://github.com/zakaria-achaghour/userGroupApi.git`

## 2. CD to the new directory
`cd userGroupApi`

## 3. Build the containers
`docker-compose up -d --build`

## 4. Run Command
`docker exec -it php-container bash`

## 5. Run Command
`composer install`

## 6. Run doctrine migrations
`php bin/console doctrine:migrations:migrate`


## 7. Load doctrine fixtures
`php bin/console doctrine:fixtures:load`

## 8. Generate jwt keypair
`php bin/console lexik:jwt:generate-keypair`

## 9. Link to the app
`http://localhost:8080/api`

# Getting started with the Api

## Get paginated users
`GET http://localhost:8080/api/users?page=1&&itemsPerPage=20`

## Get user details
`GET http://localhost:8080/api/users/{id}`

## Get paginated groups
`GET http://localhost:8080/api/groups`

## Get group details
`GET http://localhost:8080/api/groups/{id}`

## Authentication

To login please send json in the body of this uri. A fresh token will be generated for you to use in the endpoints that need authentication.
`POST http://localhost:8080/auth`

The json body:

`{
"username": "admin",
"password": "password"
}`

Response body:

{

  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE3Mjk5NTg2NjEsImV4cCI6MTcyOTk2MjI2MSwicm9sZXMiOlsiUk9MRV9BRE1JTiJdLCJ1c2VybmFtZSI6ImFkbWluIn0.aY2g2KZbG6b8NQiut1iF2BnMujvfemvOyAwT6QB9cAKgduuQAk6Ns9r6ogcfBS4VOfPODpNSAaAjFihMPLa3INLr4UrSGJPmkWUu8YWzL7Ak5e3UfrQCbymxoQ0CNw6rXyvFQsdjyR1rMFtsT5oRQS3tncqQdqgjR8qI-hW7QdJOVQeIAcc47a350mLoCNE5URvAJWHMzUeYsZS7ysPFIELwMEXVFV7QgU0E-mlFPAXz18BQw-l8Yro6pguirj1wFQ9RlmVgkgsAPDJC65h7ySFxaHvCqZee8W2kvcrUQWS_DePOfbNLJL7yIQDhUOn_xvz7pZxaDXo0-iX7K6DD_g"
}

Add the new generated token to the headers of the rest of the endpoints like this:

`-H 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE3Mjk5NTg2NjEsImV4cCI6MTcyOTk2MjI2MSwicm9sZXMiOlsiUk9MRV9BRE1JTiJdLCJ1c2VybmFtZSI6ImFkbWluIn0.aY2g2KZbG6b8NQiut1iF2BnMujvfemvOyAwT6QB9cAKgduuQAk6Ns9r6ogcfBS4VOfPODpNSAaAjFihMPLa3INLr4UrSGJPmkWUu8YWzL7Ak5e3UfrQCbymxoQ0CNw6rXyvFQsdjyR1rMFtsT5oRQS3tncqQdqgjR8qI-hW7QdJOVQeIAcc47a350mLoCNE5URvAJWHMzUeYsZS7ysPFIELwMEXVFV7QgU0E-mlFPAXz18BQw-l8Yro6pguirj1wFQ9RlmVgkgsAPDJC65h7ySFxaHvCqZee8W2kvcrUQWS_DePOfbNLJL7yIQDhUOn_xvz7pZxaDXo0-iX7K6DD_g'`

## To create a new user
`POST http://localhost:8080/api/users`

The json body:

`{
    "firstName": "John",
    "lastName": "Doe",
    "email": "john.doe@example.com",
    "phone": "+4711980758",
    "age": 25,
    "type": "admin",
    "groups": ["api/groups/1","api/groups/2"]
}`

## To update a user
`PATCH http://localhost:8080/api/users/{id}`

The json body:

`{
"firstName": "John Edited",
"lastName": "Doe",
    "email": "john.doe@example.com",
    "phone": "+4711980758",
    "age": 25,
    "type": "admin",
    "groups": ["api/groups/1","api/groups/2"]
}`

## To delete a user
`DELETE http://localhost:8080/api/users/{id}`

## To create a new group
`POST http://localhost:8080/api/groups`

The json body:

`{
"name": "Group C",
"description": "Lorem ipsum dolor sit amet "
}`

## To update a group
`PATCH http://localhost:8080/api/groups/{id}`

The json body:

`{
	"name": "Group A",
	"description": "Lorem ipsum dolor sit amet "
}`

## To delete a group
`DELETE http://localhost:8080/api/groups/{id}`

## images
![2](https://github.com/user-attachments/assets/96c0fb2b-1583-4738-9bb3-90583e44f70a)
![3](https://github.com/user-attachments/assets/cc8e86ec-344f-4900-87ff-a49020e57b2f)
![1](https://github.com/user-attachments/assets/925e2fb7-1c02-4636-a69f-bdf6ec3cf80d)



# ------------------------------------------------------------------------------------------
![4](https://github.com/user-attachments/assets/52ec7a9a-65b7-4c55-87c0-ef1dab7c4cfa)

![5](https://github.com/user-attachments/assets/43bbbd39-bca7-464e-b2d6-894cde97b5a7)


# ------------------------------------------------------------------------------------------
![6](https://github.com/user-attachments/assets/9ee192d1-0f91-4c16-9283-13075d7ace2b)

![7](https://github.com/user-attachments/assets/4aa6ee26-811e-4f74-93d9-a9fcc25b89ca)

![8](https://github.com/user-attachments/assets/7891a1e3-4303-4c5e-8650-faf4d4b350e5)

# ------------------------------------------------------------------------------------------

<img width="616" alt="dockerCOntainers" src="https://github.com/user-attachments/assets/25e9019a-00ce-4bb0-a470-dae9fe83a967">


# ------------------- Note  --------------------------------------------
I had an issue with behat with versions so its' not functionl for the moment.
