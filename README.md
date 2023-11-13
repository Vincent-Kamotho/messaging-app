Installation
Clone the repository to your local machine: https://github.com/Vincent-Kamotho/messaging-app.git
Navigate to the project directory:
 cd messaging-app
Install the dependencies using Composer:
composer install
Create a new MySQL database for the application. The name of the database will be messaging-app
Open the .env file and update the following configurations:
DB_DATABASE: massaging-app.
TWILIO_SID = VincentWambugu, 
TWILIO_AUTH_TOKEN = Vincentwambugu@0708683439
TWILIO_PHONE_NUMBER: 0708683439.
Run the database migrations to create the necessary tables by running php artisan migrate
Usage
To run the application, use the following command:
php artisan serve
The application will be accessible at http://localhost:8000.
API Endpoints
The following API endpoints are available:
PUT /api/user/{id}/update: Update the details of the authenticated user.
PUT /api/user/{id}/delete: Delete the details of the authenticated user.

