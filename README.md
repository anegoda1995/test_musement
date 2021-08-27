# Set up
cp .env.example .env
composer install
vendor/bin/phpunit tests/

# Some explanation of my app
In app we have *src/* folder that contain all needed files to work with API of "Weather Api" resource. Also we have *tests/* folder where we can see how you can use this code base.
We need to use ***ApiFactory*** to create our ***WeatherApi*** class instance and use it to get needed data. Then we just need to use ***ConsoleData*** to complete our task. If we need to render data in future in extra variety, we can add new class and implement ***IData*** interface.
Used **Psalm** code static analyzer.
Used tests by PHPUnit for testing and demonstrate how to work with this *library*


# API design

POST /api/v3/cities/{id}/weather/get

Request body: {"date": "2021-08-27"}

Response body (plain text): Partly cloud
Response status: 200


Description about behavior:
Client just send post request with "date" param in body with value of date as "Y-m-d" in JSON encode.Server validate that client sending: valid json, only param "date", date have valid string with date type.
Server get data from data storage and response it as a plain text.





POST /api/v3/cities/{id}/weather/set

Request body: {"date": "2021-08-27"}

Response body: empty
Response status: 200

Description about behavior:
Client just send post request with "date" param in body with value of date as "Y-m-d" in JSON encode. Server validate that client sending: valid json, only param "date", date have valid string with date type, date not in past time.
Server set data for city and response only status code and nothing in body.

#VERY IMPORTANT
I am Andrew Negoda.
Recruiter company SQRD Tech.