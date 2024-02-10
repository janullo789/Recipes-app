
# Diet Managment Aplication - thesis

The thesis centers on creating a diet management application that integrates advanced technology with the practical requirements of users. Its purpose is to make recipe discovery easier, manage household food stocks effectively, and aid users in making knowledgeable dietary choices. Key features include recipe searches using available ingredients to minimize food wastage and aid in daily meal organization. The app was developed using web-based technology, ensuring easy access, update, and maintenance. The document delves into the technological choices made and the detailed process of developing the app. It thoroughly examines crucial technical elements like optimizing database queries and enhancing app performance. The user interface is designed for simplicity and ease, ensuring fluid navigation. Additionally, the paper proposes ideas for the app's future enhancement.

## Features

- management of the diet based on the food products owned by the user
- efficient use of food stocks
- location of grocery shops
- monitoring diet status
- optimisation of database queries


## Screenshots

- Main page

![image](https://github.com/janullo789/Recipes-app/assets/100961127/28ea801f-f403-438a-b90a-1bf3fd74f365)

- Recipe page

![image](https://github.com/janullo789/Recipes-app/assets/100961127/fdfac593-23b2-4044-917f-4b4f7808adff)

- User's ingredients page

![image](https://github.com/janullo789/Recipes-app/assets/100961127/a78f5ff8-2569-47c0-921e-ed7c47cde68b)

- Maps of shops

![image](https://github.com/janullo789/Recipes-app/assets/100961127/e8a85fed-0d18-4676-a459-eeb5495b5173)
![image](https://github.com/janullo789/Recipes-app/assets/100961127/669f740c-0fc1-4089-b154-57fb40d2e743)

- Statistic

![image](https://github.com/janullo789/Recipes-app/assets/100961127/d32aad7c-fcf0-4ec1-a30d-d6fcfc706d7a)

- Login/SignUp

![image](https://github.com/janullo789/Recipes-app/assets/100961127/7bec8aed-6849-4356-ab82-29a55729661c)
![image](https://github.com/janullo789/Recipes-app/assets/100961127/1d26efae-def5-4d68-84d3-5814eec23f90)

- Account settings

![image](https://github.com/janullo789/Recipes-app/assets/100961127/1303dea7-13eb-4d67-bae0-9c386f1d09be)

- Adminstration's page
  
![image](https://github.com/janullo789/Recipes-app/assets/100961127/a0278623-22bc-423b-b1c4-469cee2815e5)
![image](https://github.com/janullo789/Recipes-app/assets/100961127/ff0e0769-1c43-4fbf-bc8c-835e7289da23)


## Tech Stack

- **PHP** 8.1
- **Laravel** 10
- **Livewire** 3
- **MySQL** 5.7
- Library
     - **Leaflet** 1.9.4
     - **SweetAlert2** 11.6.13
     - **Chart.js** 4.4.0

The program was written in accordance with the assumptions of object-oriented programming and MVC model.




## Installation

1. Clone the repository:
```
git clone https://github.com/janullo789/Recipes-app.git
```
2. Go to the new folder:
```
cd recipes-app
```
3. Build and Run the Docker Containers
```
docker-compose up -d
```
4. Install Composer Dependencies
```
docker-compose exec app composer install
```
5. Run Database Migrations (Optional)
```
docker-compose exec app php artisan migrate
```
5. Accessing the Application
The application should now be up and running on your local machine. By default, you can access it at http://localhost:8000.
