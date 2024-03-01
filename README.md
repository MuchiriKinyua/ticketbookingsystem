# Ticket Booking System
![furahia1](https://github.com/MuchiriKinyua/ticketbookingsystem/assets/113877377/78e685a6-1ab0-4c27-b91d-296b891c012f)

## Overview
Application made by Cytonn investments on behalf of Furahia cinema It offers a wide variety of services such as registration and login for both the user and the administrators, checking available events and ordering for tickets. It uses an application called mailtrap.io to deliver messages to the user who happened to purchase a ticket. The frontend is done purely with laravel (HTML, CSS, PHP) while the backend is implemented using Xampp; Apache and MySQL (https://localhost/phpmyadmin). Testing the implementation of the web app locally, ngrok was used. The app was also connected to Mpesa Daraja 2.0 to enable users to pay directly through the app for a ticket.

## Table of Contents
[1. Problem Statement](#1.-Problem-Statement) </br>
[2. Tools](2.-Tools) </br>
[3. Objectives](3.-Objectives) </br>
[4. Methodology](4.-Methdology) </br>
[5. Conclusions](5.-Conclusions) </br>
[6. Recommendations](6.-Recommendations)

## 1. Problem Statement
Furahia cinema wants to take their services online. They want to have a ticket booking system. The application is designed to allow administrators to manage events. This includes adding new events, editing existing event details, and removing events from the system. </br>
For each event, the administrator can set specific details such as ticket prices, ticket types (e.g., VIP and regular), and the maximum number of attendees allowed. </br>
Users of the application can view details about the events available, including information about ticket types, prices, and the maximum number of available tickets. </br>
Users can reserve tickets for the events they are interested in. They can choose between VIP and regular tickets and are limited to reserving up to 5 tickets per transaction. </br>
Upon successful reservation, users should receive email notifications confirming their reservation.

## 2. Tools
Laravel </br>
Composer </br>
Mpesa daraja 2.0 api </br>
HTML </br>
CSS </br>
PHP </br>
Ngrok </br>
Xampp </br>
Phpmyadmin </br>
Git </br>
Mailtrap
## 3. Objectives
The administrator should be able to add/ edit or remove events. </br>
- For each event, the admin should be able to specify the ticket price specifying ticket type (VIP and regular). </br>
- Admin should also be able to specify the maximum number of attendees. </br>
- Users should be able to view events details and reserve tickets (VIP or regular) NB: One user can reserve up to 5 tickets. </br>
- The user should then be able to get an email notification for the successful reservation.
## 4. Methodology
Waterfall methodology </br>
This were the steps followed: </br>
Planning </br>
Analysis </br>
Prototyping (Testing) </br>
Implementation </br>
Mainatainance
## 5. Conclusions
i. System Development: The development of the ticket booking system has progressed through various phases i.e planning, analysis, testing, implementation and maintainance. </br>
ii. Administrator Functionality: The system provides robust functionality for administrators, allowing them to add, edit, or remove events. Administrators can specify ticket prices, types, and set maximum attendee limits for each event. </br>
iii. User Interaction: Users can easily view event details and reserve tickets, with the flexibility to choose between VIP and regular tickets. The system enforces a maximum limit of 5 tickets per user. </br>
iv. Notification System: The successful reservation triggers an email notification to users, enhancing communication and providing a confirmation of the reserved tickets. </br>
v. Tools and Technologies: The project utilizes Laravel, a PHP web application framework, for backend development. Laravel's features, such as Blade templating, contribute to efficient and maintainable code. </br>
vi. External Tools: Mpesa daraja api is used to enable users to pay directly via the app (lipa na Mpesa). Ngrok is employed for exposing a local server to the internet, facilitating testing and demonstration. Additionally, Composer is used for package management and autoloading. </br?
## 6. Recommendations
i. Improve more on the Mpesa part to ensure the appropriate security measures are in place. </br>
ii. Make the app dynamic to include new movies purchased automatically. </br>
iii. Utilize machine learning models to ensure the app is optimized to handle user needs more efficiently. </br>
iv. Continue testing and maintaining the application to identify loopholes which may be used by "black-hackers".

