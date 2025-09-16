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
- ☕ Java JDK 8+
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


## 🛠️ **Tech Stack**
- **Backend:** ☕ Java, 🗄️ MySQL
- **Frontend:** 🌐 HTML5, 🎨 CSS3, 📜 JavaScript
- **Framework:** ⚡ / Java Swing
- **Database:** 🗄️ MySQL

## 🖼️ **Gallery**


## 📱 **Modules**
- **Customer:**  Browse,  Order,  Track,  History
- **Admin:**  Menu/Order/Customer management,  Analytics, 🖼 Gallery
- **Orders:** Real-time tracking,  Invoices

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
- **Gallery:**  Dynamic images, Responsive
- **Ordering:**  Cart, Real-time pricing
- **Analytics:** Sales reports, Insights

## 🤝 **Contributing**
1. 🍴 Fork repo
2. 🌿 Branch: `git checkout -b feature/new`
3. 💾 Commit: `git commit -m 'New feature'`
4. 📤 Push: `git push origin feature/new`
5. 🔄 Open PR


⭐ **Star if helpful!** ❤️ Built for foodies & cafe owners!
