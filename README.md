# ✅ TaskTrack – PHP Task Manager

**TaskTrack** is a beginner-friendly web-based task management app built using core **PHP** and **MySQL**. It allows users to add tasks, mark them as complete, and delete them. The project includes a clean, responsive user interface and simple JavaScript interactivity for a better user experience.

---

## 🚀 Features

- ➕ Add new tasks  
- ✅ Mark tasks as completed  
- 🗑 Delete tasks with confirmation  
- 🖥 Responsive and clean UI  
- 🗄 Data stored in MySQL database  
- 🔐 Basic input validation and protection

---

## 🧠 Technologies Used

- **PHP** – Backend logic  
- **MySQL** – Data storage  
- **HTML & CSS** – UI and structure  
- **JavaScript** – Confirmation dialog  
- **XAMPP** – Local server environment

---

## 📁 Project Structure

TaskTrack/
├── index.php # Home page: displays, completes, deletes tasks
├── add.php # Handles adding tasks to the DB
├── db.php # Database connection script
├── style.css # Styles for layout and UI
├── script.js # JavaScript for delete confirmation


---

## 🗃️ Database Setup

To set up the database in phpMyAdmin or MySQL:

```sql
CREATE DATABASE TaskTrack;

USE TaskTrack;

CREATE TABLE tasks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  is_done TINYINT(1) DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

---

🧠 What I Learned

✅ Built complete CRUD functionality (Create, Read, Update, Delete) using PHP and MySQL

✅ Learned to structure a modular PHP project for better readability and maintainability

✅ Understood and applied GET and POST methods securely and effectively

✅ Designed a responsive and user-friendly layout using modern CSS

✅ Added JavaScript interactivity like delete confirmations to enhance user experience

---

🙋 Author
Gunwant Patil
📍 Pune, India
🎓 Computer Engineering Student

Passionate about building real-world web applications and learning full-stack development.

