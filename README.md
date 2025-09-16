
# ☕ Gallery Cafe  

A modern cafe management system featuring a food gallery, online ordering and powerful admin tools for an enhanced dining experience.  

---

## ✨ Features  

- 🖼️ **Stunning Food Gallery** – Dynamic, visually appealing display of menu items.  
- 🛒 **Online Ordering** – Seamless cart functionality with real-time pricing updates.  
- 👥 **Customer Management** – Track customer details and order history.  
- 📋 **Menu Management** – Admins can easily update and manage menu items.  
- 🧾 **Order Tracking & Billing** – Real-time order tracking and invoice generation.  
- 📊 **Sales Analytics** – Insightful reports and sales data for business growth.  
- 🔐 **Admin Login** – Secure admin panel for managing operations.  
- 📱 **Responsive Design** – Optimized for desktop and mobile devices.  

---

## 📋 Prerequisites  

- 🗄️ **MySQL** (via WAMP & phpMyAdmin for database management)  
- 🌐 **Web Browser** (Chrome recommended)  
- 🔧 **IDE** (VS Code or any preferred IDE)  
- 🖥️ **WAMP Server** (for running PHP and MySQL)  

---

## 🚀 Installation  

### 🔹 Backend Setup (Java)  

1. **Clone the Repository**  
   ```bash
   git clone https://github.com/AmashaUdugama/Gallery-Cafe.git
   cd Gallery-Cafe
````

2. **Set Up MySQL Database**

   * Start **WAMP server** and ensure phpMyAdmin is accessible.
   * Create the database:

     ```sql
     CREATE DATABASE gallery_cafe;
     ```
   * Import SQL file:

     ```sql
     SOURCE database/gallery_cafe.sql;
     ```

3. **Configure Database Connection**
   Update database configuration in Java code:

   ```java
   String url = "jdbc:mysql://localhost:3306/gallery_cafe";
   String username = "root";
   String password = "";
   ```

4. **Run Java Application**

   ```bash
   javac *.java
   java Main
   ```

---

### 🔹 Frontend Setup (PHP/HTML)

1. **Set Up WAMP Server**

   * Install **WAMP** and ensure it’s running.
   * Place the project folder in:

     ```
     C:\wamp64\www\Gallery-Cafe
     ```

2. **Configure PHP & phpMyAdmin**

   * Access via: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   * Ensure `gallery_cafe` database is set up as described above.

3. **Run the Website**

   * Open in browser:
     [http://localhost/Gallery-Cafe](http://localhost/Gallery-Cafe)

---

## 🛠️ Tech Stack

* **Backend:** 🐘 PHP, 🗄️ MySQL
* **Frontend:** 🌐 HTML5, 🎨 CSS3, 📜 JavaScript, 🎨 Bootstrap
* **Framework:** ⚡ PHP (for web)
* **Database:** 🗄️ MySQL (via phpMyAdmin)
* **Server:** 🖥️ WAMP Server

---

## 📱 Modules

* **Customer Module:** Browse menu, place orders, track orders, view history.
* **Admin Module:** Manage menu, orders, customers, gallery and view analytics.
* **Orders Module:** Real-time tracking and invoice generation.

---

## 📊 Key Features

* 🖼️ **Gallery** – Dynamic & responsive image display.
* 🛒 **Ordering** – User-friendly cart with live pricing.
* 📈 **Analytics** – Sales reports & insights for admins.

---

## 🤝 Contributing

1. 🍴 Fork the repository.
2. 🌿 Create a new branch:

   ```bash
   git checkout -b feature/new
   ```
3. 💾 Commit changes:

   ```bash
   git commit -m "Add new feature"
   ```
4. 📤 Push branch:

   ```bash
   git push origin feature/new
   ```
5. 🔄 Submit a Pull Request.

---

⭐ If you find this project helpful, give it a **star**!
❤️ Built for **foodies and cafe owners**.
