<?php
// Simple contact form processing

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    
    // Validate inputs
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // Process the form if no errors
    if (empty($errors)) {
        // In a real application, you would send an email here
        // For demonstration purposes, we'll just return a success message
        
        $response = [
            'status' => 'success',
            'message' => 'Your message has been sent successfully!'
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Please fix the following errors:',
            'errors' => $errors
        ];
    }
    
    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// If not a POST request, redirect to the homepage
header("Location: ../index.php");
exit;
?>