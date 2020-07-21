# Player Scorecard

### Live link: https://playerscorecard.herokuapp.com/

# Project Description

This application is a personal golf scorecard. The purpose is to have a place to store all your scores digitally so you don't lose them ever again. It allows the player to look back at previous scores and see how they have improved over time.

# More Ideas

-   Allow a user to take a picture of their scorecard so it uploads automatically.
-   Allow users to follow their friends so they can see each others scores.
-   More functionality allowing users to track their shots and which club they use for better stats and tracking.
-   Add a my bag for each users so they can decide which club to hit for different distances to the pin.
-   Learn Vue which comes with Laravel to make the app better.

# Built With

-   PHP
-   Laravel
-   PostgreSQL
-   HTML
-   SASS
-   Bootstrap

# Issues and Resolutions

## Roadblocks

-   When I deployed to Heroku, my authentication was not working. I spent 4 days trying to solve the problem and it ended up being a CSRF token error with Laravel which I had to pass bypass by adding the paths into the except property of the app/Http/Middleware/VerifyCsrfToken.php file.
-   Understanding Laravel and it's quirks which I have not encountered previously.
-   The file structure of Laravel took me a few days to figure out were to put my controllers, routes, etc..

## Wins

-   Getting full CRUD on the scorecards with using Laravel, something I have never used before.
-   How easy it is to setup authentication with Laravel. It's a great tool and I would like to improve with it.
