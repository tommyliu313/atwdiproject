# ATWDI Project

## Overview

This is the Advanced Technology Web Development I project. This website provides a full RESTful service Public Market

## Website

Index.html is the main page of the project.

## What user can do?

User can modify (add, delete, update) the market record.

1) They should install xampp (https://www.apachefriends.org/download.html) to build up a local php server.
2) When the installation is completed, user should open the application to start the Apache and MySQL server. Please notice that you have entered http://localhost/phpmyadmin/ in the browser.
3) Please select import database/data/marketpublic.sql from database folder.
4) Please input the url (http://localhost/atwdiproject/database/data/filecontent.php) to insert the data from government.

## Postman API Testing

### Predefined Uri

### Defined Route


| Method | Route                    | Uri |   | Result  |
|--------|--------------------------|-----|---|---------|
| GET    | /district/[districtname] |     |   | SUCCESS |
| GET    | /market/[marketname]     |     |   | FAILURE |
| POST   |                          |     |   | SUCCESS |
| POST   |                          |     |   | FAILURE |
| DELETE |                          |     |   | FAILURE |
| DELETE |                          |     |   |         |
