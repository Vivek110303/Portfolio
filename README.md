

# Vivek Madhak — Portfolio (PHP + MySQL)

A **modern web developer portfolio** featuring 3D tilt effects, dynamic sections, and a responsive contact form powered by PHP & MySQL.



##  Features

- **About Me**: Professional summary, education, and certifications.
- **Skills & Expertise**: Modern frontend and backend skill bars.
- **Projects Showcase**: Dynamic cards with project info and links.
- **Contact Section**: Interactive form and info box.  
- **3D UI & Effects**: Beautiful tilt, glass morphism & AOS animations.
- **Responsive Design**: Works great on desktop & mobile.

##  Tech Stack

- **Frontend:** HTML, CSS (Bootstrap 5, FontAwesome, custom styles), JS (AOS, Vanilla Tilt, jQuery).
- **Backend:** PHP (for dynamic content/processing), MySQL (for contact messages).
- **Extra:** Composer, PHPMailer (for email sending).

##  Project Structure

```
portfolio-3d-php/
├── assets/
│   ├── css/style.css
│   ├── js/app.js
│   └── img/
├── php/
│   ├── portfolio_db/
│   │   └── database.sql      # SQL for DB setup
│   ├── config.php            # DB connection
│   ├── contact.php           # Handles form submissions
│   ├── download_cv.php       # Download CV endpoint
├── index.php                 # Main portfolio file
├── vendor/                   # Composer dependencies (PHPMailer)
└── README.md
```

##  Quick Start

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Vivek110303/portfolio-3d-php.git
   cd portfolio-3d-php
   ```

2. **Install Composer Dependencies (for PHPMailer):**
   ```bash
   composer install
   ```

3. **Setup MySQL Database:**
   - Import `php/portfolio_db/database.sql` in your MySQL server.
     ```sql
     CREATE DATABASE IF NOT EXISTS portfolio_db;
     USE portfolio_db;
     CREATE TABLE IF NOT EXISTS messages (
       id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(200) NOT NULL,
       email VARCHAR(255) NOT NULL,
       subject VARCHAR(255) NOT NULL,
       message TEXT NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
     ```
   - Update `php/config.php` with your DB credentials.

4. **Run Locally:**
   - Serve via XAMPP/LAMP/any PHP + MySQL setup.
   - Visit `http://localhost/portfolio-3d-php/` in browser.


##  Customization

- **Projects:** Edit the `$projects` array in `index.php` to showcase your work.
- **Skills:** Update the `$frontend`, `$backend`, `$tools` arrays as your skills grow.
- **Contact:** Edit the info box and form as needed!

##  Contact

- **Email:** madhakvivek4301@gmail.com
- **LinkedIn:** [Vivekkumar Madhak](https://www.linkedin.com/in/vivekkumar-madhak/)
- **GitHub:** [Vivek110303](https://github.com/Vivek110303)

***

**Made with by Vivek Madhak**  
*Feel free to fork, star, or reach out for collaboration!*
