ZF2_REST_OAuth2_Postgres_Backend
=======================

Introduction
------------
This backend has been designed to adapt dynamically to any DataBase, it has specific services to generate the new classes and required objects on any configured DB

###Based on REST architecture
###OAuth2, Security
This example is connecting to a Postgres DB; but ZF2 has several adapters to connect to a lot of different DBs

Inside of Modules directory we can find each DB connected. The auto generator creates a new module per DB found, so it can be easily to indentify for the developer.

##The generator creates Controller, Form, Model and Table based on the DB properties of each object found.
The only module that doesn't belong to a DB is Base. Which contains the parent Classes for all the objects.
