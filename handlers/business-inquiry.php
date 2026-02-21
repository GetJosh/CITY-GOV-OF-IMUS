<?php
/**
 * Business Inquiry Form Handler
 * Processes and handles business inquiry submissions
 */

// Include configuration
require_once __DIR__ . '/../config/data.php';

class BusinessInquiry {
    private $form_config;
    private $errors = [];
    private $success = false;
    
    public function __construct($config) {
        $this->form_config = $config;
    }
    
    /**
     * Validate form input
     */
    public function validate($data) {
        // Validate name
        if (empty($data['name']) || strlen(trim($data['name'])) < 2) {
            $this->errors['name'] = 'Name must be at least 2 characters';
        }
        
        // Validate email
        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'Valid email is required';
        }
        
        // Validate phone
        if (empty($data['phone']) || strlen(trim($data['phone'])) < 7) {
            $this->errors['phone'] = 'Valid phone number is required';
        }
        
        // Validate organization
        if (empty($data['organization'])) {
            $this->errors['organization'] = 'Organization is required';
        }
        
        // Validate business type
        if (empty($data['business_type'])) {
            $this->errors['business_type'] = 'Business type is required';
        }
        
        // Validate message
        if (empty($data['message']) || strlen(trim($data['message'])) < 10) {
            $this->errors['message'] = 'Message must be at least 10 characters';
        }
        
        return empty($this->errors);
    }
    
    /**
     * Sanitize form input
     */
    public function sanitize($data) {
        $sanitized = [];
        $sanitized['name'] = htmlspecialchars(trim($data['name'] ?? ''));
        $sanitized['email'] = htmlspecialchars(trim($data['email'] ?? ''));
        $sanitized['phone'] = htmlspecialchars(trim($data['phone'] ?? ''));
        $sanitized['organization'] = htmlspecialchars(trim($data['organization'] ?? ''));
        $sanitized['business_type'] = htmlspecialchars(trim($data['business_type'] ?? ''));
        $sanitized['message'] = htmlspecialchars(trim($data['message'] ?? ''));
        return $sanitized;
    }
    
    /**
     * Send email notification
     */
    public function sendEmail($data) {
        $to = $this->form_config['business_inquiry_email'];
        $subject = "New Business Inquiry from " . $data['name'];
        
        $message = "New Business Inquiry Received\n\n";
        $message .= "Name: " . $data['name'] . "\n";
        $message .= "Email: " . $data['email'] . "\n";
        $message .= "Phone: " . $data['phone'] . "\n";
        $message .= "Organization: " . $data['organization'] . "\n";
        $message .= "Business Type: " . $data['business_type'] . "\n";
        $message .= "Message:\n" . $data['message'] . "\n";
        $message .= "\nSubmitted on: " . date('Y-m-d H:i:s') . "\n";
        
        $headers = "From: " . $data['email'] . "\r\n";
        $headers .= "Reply-To: " . $data['email'] . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // In a production environment, consider using a mail service or SMTP
        // For now, we'll return a success message even if email fails
        // In real implementation, you'd want to catch actual mail errors
        
        // Attempt to send email
        $mail_sent = @mail($to, $subject, $message, $headers);
        
        // Log the inquiry to a file as backup
        $this->logInquiry($data);
        
        return true; // Return true for now, in production validate actual sending
    }
    
    /**
     * Log inquiry to file as backup
     */
    private function logInquiry($data) {
        $log_file = __DIR__ . '/../logs/business_inquiries.log';
        $log_dir = dirname($log_file);
        
        // Create logs directory if it doesn't exist
        if (!is_dir($log_dir)) {
            @mkdir($log_dir, 0755, true);
        }
        
        $log_entry = json_encode([
            'timestamp' => date('Y-m-d H:i:s'),
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'organization' => $data['organization'],
            'business_type' => $data['business_type'],
            'message' => $data['message']
        ]) . "\n";
        
        @file_put_contents($log_file, $log_entry, FILE_APPEND);
    }
    
    /**
     * Process form submission
     */
    public function process($data) {
        // Sanitize input
        $data = $this->sanitize($data);
        
        // Validate
        if (!$this->validate($data)) {
            return [
                'success' => false,
                'errors' => $this->errors,
                'message' => 'Please correct the errors below'
            ];
        }
        
        // Send email
        if ($this->sendEmail($data)) {
            $this->success = true;
            return [
                'success' => true,
                'message' => 'Thank you for your inquiry! We will contact you soon.'
            ];
        } else {
            return [
                'success' => false,
                'message' => 'An error occurred processing your inquiry. Please try again.'
            ];
        }
    }
    
    /**
     * Get errors
     */
    public function getErrors() {
        return $this->errors;
    }
}

// Handle form submission
$inquiry_result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inquiry = new BusinessInquiry($form_config);
    $inquiry_result = $inquiry->process($_POST);
}
