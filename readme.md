![Screenshot](https://raw.githubusercontent.com/jaycee0610/Philippine-Number-Validator/refs/heads/main/image.png)

# 📱 Philippine Number Validator

Philippine Number Validator is a web-based tool that helps you identify the network operator of a mobile number in the Philippines. It can determine whether the number belongs to Smart, TNT, Globe, TM, or DITO. Additionally, it can check the activity status of a mobile number using API and an online database.

- 🌐 https://phnumber.rootscratch.com/
- 🌐 https://gxchange-verify.rootscratch.com/ - (/{mobile_number}/{api_key}/)

## ✨ Features

- ✅ Validate the network operator of a mobile number.
- 🔢 Generate random mobile numbers.
- 📊 Check the activity status of a mobile number.
- 📋 Copy validated numbers to the clipboard.
- 📜 View request logs.

## 🛠️ Installation

1. Clone the repository to your local machine.
    ```bash
    git clone https://github.com/jaycee0610/Philippine-Number-Validator.git
    ```
2. Navigate to the project directory.
    ```bash
    cd Philippine-Number-Validator
    ```
3. Ensure you have a local server environment like XAMPP or WAMP installed.
4. Place the project folder in the `htdocs` directory of your XAMPP installation.
5. Start the Apache server from the XAMPP control panel.
6. Open your web browser and navigate to `http://localhost/Philippine-Number-Validator`.

## 🚀 Usage

1. **Verify Mobile Network Operator:**
    - Enter a list of mobile numbers in the provided textarea.
    - Click the "Validate" button to identify the network operator of each number.
    - The results will be displayed in separate textareas for Smart/TNT, Globe/TM, and DITO numbers.
    - You can copy the validated numbers to the clipboard using the "Copy Clipboard" button.

2. **Generate Random Numbers:**
    - Click the "Generate Random" button to generate a list of random mobile numbers.
    - The generated numbers will be displayed in the textarea.

3. **Check Mobile Number Activity:**
    - Enter your API key (optional) in the provided input field.
    - Enter a list of mobile numbers in the provided textarea.
    - Click the "Validate" button to check the activity status of each number.
    - The results will be displayed in the "Live Mobile Number" textarea.
    - The request logs will be displayed in the "Request Logs" section.
    - This feature checks if the mobile number is registered online.

## 📝 Code Explanation

The main functionality is implemented in the `index.php` file. The JavaScript code handles the validation and activity checking processes.

### Validate Mobile Network Operator

The `form` element with the ID `form` handles the submission of mobile numbers for validation. The JavaScript code processes the numbers and categorizes them based on their prefixes.

### Generate Random Numbers

The `generateRandom` button generates a list of random mobile numbers and displays them in the textarea.

### Check Mobile Number Activity

The `validateActivity` button triggers the activity checking process. The JavaScript code sends requests to the provided URL and handles the responses accordingly. 

## 🙏 Acknowledgements

- [Bootstrap](https://getbootstrap.com/)
- [Font Awesome](https://fontawesome.com/)
- [jQuery](https://jquery.com/)

## 📧 Contact

For any inquiries or issues, please contact [jaycee@rootscratch.com](mailto:jaycee@rootscratch.com).
