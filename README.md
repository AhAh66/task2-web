# task2-web
# Functional Robot Control Interface

## Objective

The aim of this project is to create a simple robot control interface using PHP, HTML, and CSS. The application allows the user to send commands to a robot (Forward, Backward, Left, Right, and Stop) and store these commands in a MySQL database for processing.

---

## Tools and Technologies Used

- **PHP:** Backend logic to process and store commands.
- **HTML:** To create the structure of the web interface.
- **CSS:** For styling and layout of the control interface.
- **MySQL:** Database to store the commands.
- **XAMPP:** Local development environment to run the PHP server and MySQL database.

---

## Steps to Create the Project

### 1. Database Setup

1. **Create the database:**
   ```sql
   CREATE DATABASE robot_control;
   ```
2. **Create the table:**
   ```sql
   CREATE TABLE commands (
       id INT AUTO_INCREMENT PRIMARY KEY,
       command VARCHAR(10) NOT NULL,
       timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

### 2. PHP Script

1. **Connect to the database:** Use PHP's `mysqli` to connect to the `robot_control` database.
2. **Process user input:** Capture the commands sent by the buttons using the `POST` method.
3. **Store commands in the database:** Insert the command into the `commands` table for future retrieval.

### 3. HTML Structure

1. Create a form with buttons for each command:
   - Left
   - Right
   - Forward
   - Backward
   - Stop
2. Use the `POST` method to send the selected command to the PHP backend.

### 4. CSS Styling

1. Center the control panel.
2. Position the buttons around the central "Stop" button for an intuitive layout.
3. Style the buttons for better usability and aesthetics.

---

## Code Overview

### PHP Script

The main PHP script performs the following tasks:

- Establishes a connection to the database.
- Handles the `POST` request when a button is clicked.
- Inserts the selected command into the database.

### HTML Structure

- A `<form>` is used to group buttons and send data to the server.
- Buttons are positioned around a central point for intuitive control.

### CSS Design

- The layout ensures the central button is surrounded by directional buttons (Up, Down, Left, Right).
- Styling is minimal, using colors and spacing to enhance usability.

---

## Example Command Flow

1. User clicks the "Forward" button.
2. The form sends a `POST` request to the PHP script.
3. The PHP script saves the "F" command to the database.
4. The system confirms the command was received and stored successfully.



---

## Future Improvements

- Add real-time feedback to display the last command sent.
- Include user authentication to restrict access.
- Enhance the UI with modern libraries like Bootstrap.

---

## Conclusion

This project demonstrates the integration of PHP, HTML, CSS, and MySQL to create a functional robot control interface. The application can be expanded further to add more advanced features like real-time robot movement tracking and advanced control mechanisms.

