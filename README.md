# ✅ Laravel Task Manager

A simple **Task Management Web Application** built with Laravel 10 and PHP 8, submitted as part of a practical Laravel exam.

---

## 🔗 Live Demo

🌐 [https://task-manager-uac5.onrender.com/tasks](https://task-manager-uac5.onrender.com/tasks)

> ⚠️ **Note:**  
> You may see a browser warning (e.g., “Not Secure” or “Deceptive Site”) because this is deployed on Render’s free Docker tier without HTTPS.  
> This is a **false flag**, and all form submissions are protected using **Laravel’s CSRF**.  
> The source code is 100% clean and safe.  
> For full functionality, clone and run locally (see steps below 👇).

---

## 📌 Features

- ✅ Add a task with title, description, and due date
- ✅ Edit or delete tasks
- ✅ Mark tasks as **Completed** or **Pending**
- ✅ Paginated task list (5 tasks per page)
- ✅ Input validation:
  - Title is **required**
  - Description is **optional**
  - Due date is **required**
- ✅ Uses **Eloquent Models** for DB access
- ✅ **Blade Templates** for all UI views
- ✅ **CSRF Protection** in all forms
- ✅ Bootstrap 5 styling for clean UI

---

## 🛠 Tech Stack

| Component       | Tech                     |
|----------------|--------------------------|
| Framework      | Laravel 10               |
| Language       | PHP 8.2                  |
| Database       | SQLite                   |
| UI Styling     | Blade + Bootstrap 5      |
| Deployment     | Docker via Render.com    |

---

## 🧑‍💻 Local Setup Instructions

Want to run the project locally? Here’s how:

### 1. Clone the repo

```bash
git clone https://github.com/Andoryukun27/task-manager.git
cd task-manager
2. Install dependencies
bash
Copy
Edit
composer install
3. Set up your .env file
bash
Copy
Edit
cp .env.example .env
php artisan key:generate
Edit .env and set:

env
Copy
Edit
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/project/database/database.sqlite
Or just create the SQLite file:

bash
Copy
Edit
touch database/database.sqlite
4. Run migrations
bash
Copy
Edit
php artisan migrate
5. Serve the app
bash
Copy
Edit
php artisan serve
Visit: http://localhost:8000/tasks

📁 Directory Structure
bash
Copy
Edit
app/
  Http/Controllers/TaskController.php
  Models/Task.php

resources/views/
  layouts/app.blade.php
  tasks/index.blade.php
  tasks/create.blade.php
  tasks/edit.blade.php

routes/web.php
👨‍🎓 Author
John Andrew Alviz
Laravel Practical Exam – July 2025
Bulacan State University – BSIT Student

✅ License
This project is open-source and licensed under the MIT License.
