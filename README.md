# PHP PRICE CALCULATOR
## THE GOAL
Creating a price calculator in PHP with OOP, using the MVC Model and using it alongside a database.
### The Contributors
Ilias and Lawrence (aka the Aaantwaarpeeuh Gang)
## Plan of Attack
- Importing the import.sql file
- Setup a connection with the database
- Setting up the directories using the MVC design pattern

## DOUBTS, WORRIES, QUESTIONS

## Tasks
- [x] Establish connection to database
- [ ] Display DB content on page
- [ ] Use MVC model
- [x] Create 7 classes
- [x] Do not butcher boilerplate code

## TASKS FOR 17/06/2021
- Price calculation
- Create env.local file to use in project
- MVC
- Display database content on page (try catch, testing)
- Class loaders
- Have Fun

PRICE CALCULATION NOTES
- highest var disc
- count up fix disc for user (groups they belong to)
- var = %, fixed

- check cust disc
- compare highest var disc vs cust disc
- substract fixed amount, then %
- Never negative

properties:
- customer
- customer groups [] (all groups user belongs to)
- chosen product
- sum of fixed disc for group
- group with highest var disc
- customer most value (or return method)
- Solution

Methods:
- compare highest var group disc vs cust var disc-> take highest
- sum of total fixed amount
- public getters

Calculations:
1) customer group % vs customer % -> use highest of two
2) Substract fixed amounts, the apply %
3) NO NEGATIVE PRICE

Fill up properties.