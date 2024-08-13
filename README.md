**Real Estate Property Bidding System**

This project is a Real Estate Property Bidding System built using PHP and the Laravel framework. It allows users to register, sign in, and bid on properties listed by an admin. The system displays the highest bid for each property, and the highest bidder wins the property.



Table of Contents

    *Features
    *Installation
    *Usage
    *User Registration and Authentication
    *Property Management
    *Bidding Process
    *Displaying the Highest Bid
    *Database Structure
    *Routes
    *Models
    *Controllers
    *Views
    *License



Features

    *User registration and authentication
    *Admin can create, update, and delete properties
    *Users can place bids on properties
    *Display the highest bid for each property
    *Secure bidding process with validation
    *Responsive design using Bootstrap


Installation:

  1. Clone the Repository:
     git clone https:https://github.com/sksabbir121/Heritage_Backend/tree/master
     cd real-estate-bidding

  2. Install Dependencies:
     composer install
     npm install

  3.  Setup Environment:
      Database Name: biddb

  4. Generate Application Key:
     php artisan key: generate
     
  5. Run Migrations:
     php artisan migrate

  6. Start the Development Server:
     php artisan serve


Usage :

    User Registration and Authentication
    Registration: Users can register by providing their details through the registration form.
    Login: After registration, users can log in using their email and password.
        
    Property Management
    Admin Role: The admin can add, update, and delete properties. Each property contains details such as ID, description, location, price, and an image.
    Property Listings: All properties are listed on a dedicated page accessible by the admin.
    
    Bidding Process
    Placing a Bid: Logged-in users can place bids on any property. The bid amount must be higher than the current highest bid.
    Bid Validation: The system validates the bid amount to ensure it is higher than the previous highest bid.

    Displaying the Highest Bid
    Highest Bid Display: The highest bid for each property is displayed on the property details page, along with the bidder's name.

    
Database Structure:

The application uses the following tables:

users: Stores user information.
properties: Stores property details including ID, description, location, price, and image.
bids: Stores bids with references to the 'properties' and 'users' tables.


Routes:
The main routes used in this application are:

// User Authentication Routes
Auth::routes();

// Property Routes
Route::resource('properties', PropertyController::class);

// Bid Routes
Route::post('/properties/{id}/bid', [BidController::class, 'placeBid'])->middleware('auth');

Models

*The primary models in this application are:
    1. User: Represents the users of the system.
    2. Property: Represents the properties listed by the admin.
    3. Bid: Represents the bids placed by users on properties.

Controllers

*Key controllers include:
    1. PropertyController: Manages the CRUD operations for properties.
    2. BidController: Handles the bidding process and validation.

Views

*The views include:
    1. auth: Contains registration and login forms.
    2. properties: Displays property listings and details.
    3. bids: Displays the bidding interface and highest bid.




