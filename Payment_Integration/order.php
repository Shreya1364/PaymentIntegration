<?php
// Enable CORS for development (optional)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Load Razorpay PHP SDK via Composer autoload
require('vendor/autoload.php');

use Razorpay\Api\Api;

// 🛡️ Your Razorpay Test Credentials
$keyId = "KeyId";         // Replace with your Razorpay Test Key ID
$keySecret = "SecretKey";     // Replace with your Razorpay Test Key Secret

// Create Razorpay API instance
$api = new Api($keyId, $keySecret);

// 📦 Order details
$orderData = [
    'receipt'         => 'rcptid_' . uniqid(),
    'amount'          => 10000, // amount in paisa (₹100)
    'currency'        => 'INR',
    'payment_capture' => 1      // auto-capture
];

try {
    // 🧾 Create order
    $order = $api->order->create($orderData);

    // ✅ Send back order info to frontend
    echo json_encode([
        'order_id' => $order['id'],
        'amount' => $order['amount'],
        'currency' => $order['currency'],
        'key' => $keyId
    ]);

} catch (Exception $e) {
    echo json_encode([
        'error' => true,
        'message' => 'Error creating Razorpay order: ' . $e->getMessage()
    ]);
}
?>
