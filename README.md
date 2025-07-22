# 💳 Razorpay Payment Integration Demo

This project demonstrates how to integrate Razorpay payment gateway into a simple HTML + PHP application. It supports test mode payments with fake card details and securely creates Razorpay orders from the backend.

---

## 🚀 Features

🔒 Secure order creation using PHP backend
🧾 Razorpay Checkout form with pre-filled user data
💡 Works with Razorpay **Test Mode**
✅ Simple and responsive design
📩 Can be extended to send OTP/email after payment

---

## 📸 Demo Preview

<img src="https://github.com/user-attachments/assets/e802a931-8750-46cd-8813-0f636c86d057" alt="🧾 Payment Form UI" height="400" width="400"/>
<br><br>
<img src="https://github.com/user-attachments/assets/13c086cf-09e0-47a4-8933-8ebcc643f153" alt="💰 Razorpay Checkout" height="300" width="400"/>
<br><br>
<img src="https://github.com/user-attachments/assets/6e47ba38-ef9a-4979-815b-b4fba8952f86" alt="✅ Successful Payment Alert" height="300" width="400"/>

---

## 🛠️ Technologies Used

- HTML
- JavaScript (for Razorpay Checkout)
- PHP (for backend order creation)
- Razorpay API

---

## 🧪 Razorpay Test Card Details

Use this card for testing successful payments:

Card Number: 4111 1111 1111 1111
Expiry Date: 12/28
CVV: 123
OTP: 123456

## ⚙️ How to Run

1. Clone the repo:

```bash
git clone https://github.com/Shreya1364/PaymentIntegration.git
cd PaymentIntegration

2. Install dependencies (PHP + Composer required):

bash

composer install
Replace your Razorpay Test Key ID & Secret in order.php

php

$keyId = "rzp_test_YourKeyID";
$keySecret = "YourKeySecret";

📌 Notes
This is a test integration. Don’t use it for production payments.

Make sure PHP is installed and running on your local machine.

