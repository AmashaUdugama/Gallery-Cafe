# ☕ **Gallery Cafe**

Modern cafe system with food gallery, online ordering and management tools.

## ✨ **Features**
- 🖼️ Stunning food gallery
- 🛒 Online ordering
- 👥 Customer management
- 📋 Menu management
- 🧾 Order tracking & billing
- 📊 Sales analytics
- 🔐 Admin login
- 📱 Responsive design

## 📋 **Prerequisites**
- ☕ Java JDK 8+ / Node.js
- 🗄️ MySQL
- 🌐 Web Browser
- 🔧 IDE (VS Code)

## 🚀 **Installation**

### **Java App**
1. Clone repo:
   ```bash
   git clone https://github.com/AmashaUdugama/Gallery-Cafe.git
   cd Gallery-Cafe
   ```
2. Setup MySQL:
   ```sql
   CREATE DATABASE gallery_cafe;
   SOURCE database/gallery_cafe.sql;
   ```
3. Configure DB:
   ```java
   String url = "jdbc:mysql://localhost:3306/gallery_cafe";
   String username = "root";
   String password = "your_password";
   ```
4. Run:
   ```bash
   javac *.java
   java Main
   ```

### **Web App**
1. Install dependencies:
   ```bash
   npm install
   ```
2. Setup `.env`:
   ```env
   DB_HOST=localhost
   DB_USER=root
   DB_PASSWORD=your_password
   DB_NAME=gallery_cafe
   PORT=3000
   ```
3. Start:
   ```bash
   npm start
   ```
   🌐 Visit `http://localhost:3000`

## 🛠️ **Tech Stack**
- **Backend:** ☕ Java / Node.js, 🗄️ MySQL
- **Frontend:** 🌐 HTML5, 🎨 CSS3, 📜 JavaScript
- **Framework:** ⚡ Express.js / Java Swing
- **Database:** 🗄️ MySQL

## 🗄️ **Database Schema**
- `menu_items`: 🆔 ID, 📛 Name, 📝 Description, 🗂️ Category, 💰 Price, 🖼️ Image, ✅ Availability
- `orders`: 🆔 ID, 👤 Customer ID, 💵 Total, 📊 Status, 📅 Date
- `customers`: 🆔 ID, 📛 Name, 📧 Email, 📞 Phone, 🏠 Address, 📅 Date

## 🖼️ **Gallery**
- 🖼️ High-quality images
- 🗂️ Category filters
- 🔍 Search
- 🔎 Image zoom
- 📱 Responsive grid

## 📱 **Modules**
- **Customer:** 🏠 Browse, 🛒 Order, 📍 Track, 📜 History
- **Admin:** 👨‍💼 Menu/Order/Customer management, 📊 Analytics, 🖼️ Gallery
- **Orders:** 🧾 Real-time tracking, 💳 Payments, 📄 Invoices

## 🔧 **Configuration**
- **DB Connection (Java):**
  ```java
  String URL = "jdbc:mysql://localhost:3306/gallery_cafe";
  String USERNAME = "root";
  String PASSWORD = "";
  ```
- **Image Upload (Node.js):**
  ```javascript
  const storage = multer.diskStorage({
      destination: './public/uploads/',
      filename: (req, file, cb) => cb(null, Date.now() + '-' + file.originalname)
  });
  ```

## 📊 **Features**
- **Gallery:** 🖼️ Dynamic images, 📱 Responsive
- **Ordering:** 🛒 Cart, 💰 Real-time pricing
- **Analytics:** 📈 Sales reports, 📊 Insights

## 🤝 **Contributing**
1. 🍴 Fork repo
2. 🌿 Branch: `git checkout -b feature/new`
3. 💾 Commit: `git commit -m 'New feature'`
4. 📤 Push: `git push origin feature/new`
5. 🔄 Open PR


⭐ **Star if helpful!** ❤️ Built for foodies & cafe owners!
