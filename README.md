# 💳 Razorpay Payment Integration Demo

This project demonstrates how to integrate Razorpay payment gateway into a simple HTML + PHP application. It supports test mode payments with fake card details and securely creates Razorpay orders from the backend.

---

## 🚀 Features

- 🔒 Secure order creation using PHP backend
- 🧾 Razorpay Checkout form with pre-filled user data
- 💡 Works with Razorpay **Test Mode**
- ✅ Simple and responsive design
- 📩 Can be extended to send OTP/email after payment

---

## 📸 Demo Preview

### 🧾 Payment Form UI  
![Form UI](https://your-image-url.com/form-ui.png) <!-- Replace with your form screenshot -->

### 💰 Razorpay Checkout Screen  
![Checkout Screen](https://your-image-url.com/checkout-ui.png) <!-- Replace with checkout screenshot -->

### ✅ Successful Payment Alert  
![Success Alert](https://your-image-url.com/success.png) <!-- Replace with success alert screenshot -->

---

## 🛠️ Technologies Used

- HTML, CSS
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

