☕ Gallery Cafe
A modern cafe system featuring a food gallery, online ordering and management tools for an enhanced dining experience.
✨ Features

🖼️ Stunning Food Gallery: Visually appealing display of menu items with dynamic image loading.
🛒 Online Ordering: Seamless cart functionality with real-time pricing updates.
👥 Customer Management: Track customer details and order history.
📋 Menu Management: Admins can easily update and manage menu items.
🧾 Order Tracking & Billing: Real-time order tracking and invoice generation.
📊 Sales Analytics: Insightful reports and sales data for business growth.
🔐 Admin Login: Secure admin panel for managing operations.
📱 Responsive Design: Optimized for both desktop and mobile devices.

📋 Prerequisites

🗄️ MySQL (via WAMP and phpMyAdmin for database management)
🌐 Web Browser (Chrome)
🔧 IDE (VS Code or any preferred IDE)
🖥️ WAMP Server (for running PHP and MySQL)

🚀 Installation
Backend Setup (Java)

Clone the Repository:
git clone https://github.com/AmashaUdugama/Gallery-Cafe.git
cd Gallery-Cafe


Set Up MySQL Database:

Start WAMP server and ensure phpMyAdmin is accessible.
Create the database:CREATE DATABASE gallery_cafe;


Import the SQL file:SOURCE database/gallery_cafe.sql;




Configure Database Connection:

Update the database configuration in the Java code:String url = "jdbc:mysql://localhost:3306/gallery_cafe";
String username = "root";
String password = "";



Run the Java Application:
javac *.java
java Main


Frontend Setup (PHP/HTML)

Set Up WAMP Server:

Install WAMP and ensure it’s running.
Place the project folder in the www directory of WAMP (C:\wamp64\www\Gallery-Cafe).


Configure PHP and phpMyAdmin:

Access phpMyAdmin via http://localhost/phpmyadmin.
Ensure the gallery_cafe database is set up as described above.

Run the Website:

Open http://localhost/Gallery-Cafe in your browser.

🛠️ Tech Stack

Backend:  🗄️ MySQL, 🐘 PHP
Frontend: 🌐 HTML5, 🎨 CSS3, 📜 JavaScript, 🎨 Bootstrap
Framework: ⚡ PHP (for web)
Database: 🗄️ MySQL (via phpMyAdmin)
Server: 🖥️ WAMP Server

📱 Modules

Customer Module: Browse menu, place orders, track orders, view order history.
Admin Module: Manage menu, orders, customers, gallery and view analytics.
Orders Module: Real-time order tracking and invoice generation.


📊 Key Features

Gallery: Dynamic, responsive image display for menu items.
Ordering: User-friendly cart system with real-time pricing.
Analytics: Sales reports and business insights for admins.

🤝 Contributing

🍴 Fork the repository.
🌿 Create a new branch: git checkout -b feature/new.
💾 Commit your changes: git commit -m 'Add new feature'.
📤 Push to the branch: git push origin feature/new.
🔄 Submit a Pull Request.

⭐ Star the repo if you find it helpful! ❤️ Built for foodies and cafe owners!
