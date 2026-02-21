# City of Imus Website - PHP Architecture

This document provides an overview of the PHP improvements applied to the Business page and the overall architecture.

## Project Structure

```
CITY-GOV-OF-IMUS/
├── Business.php              # Main business page (refactored with PHP)
├── AboutImus.php            # About Imus page (refactored)
├── index.php                # Home page
├── CSS/                     # Stylesheets
├── IMG/                     # Images
├── JS/                      # JavaScript files
├── config/                  # Configuration files
│   ├── data.php            # Business data arrays (rates, services, etc.)
│   ├── database.php        # Database connection config (for future use)
│   └── database.sql        # Database schema & structure
├── includes/                # Reusable PHP components
│   ├── header.navbar.php   # Header and navigation (included in all pages)
│   └── footer.php          # Footer (included in all pages)
├── handlers/                # Form and request handlers
│   └── business-inquiry.php # Business inquiry form handler
└── logs/                    # Log files
    ├── business_inquiries.log # Business inquiry submissions
    └── php_errors.log        # PHP error log
```

## Key PHP Improvements

### 1. **Modular Components (DRY Principle)**

The header and footer are now separate include files, reducing code duplication:

```php
// In Business.php
require_once __DIR__ . '/includes/header.navbar.php';
require_once __DIR__ . '/includes/footer.php';
```

**Benefits:**
- Update header/footer once, affects all pages
- Reduced file size and maintenance overhead

### 2. **Centralized Configuration**

All static data is in `config/data.php`:

```php
$accommodation_rates = [
    'rooms' => [
        [
            'type' => 'Standard Room (2 pax)',
            'rate_php_min' => 1500.00,
            ...
        ]
    ]
];
```

**Benefits:**
- Easy to update pricing and information
- Single source of truth for data
- Faster to modify without touching page logic

### 3. **Dynamic Content Generation**

Tables and lists now use PHP loops instead of hardcoded HTML:

```php
<?php foreach ($accommodation_rates['rooms'] as $room): ?>
<tr>
    <td><?php echo htmlspecialchars($room['type']); ?></td>
    <td><?php echo number_format($room['rate_php_min'], 2); ?></td>
    ...
</tr>
<?php endforeach; ?>
```

**Benefits:**
- Adding/removing items is simple
- Consistent formatting
- Data and presentation are separated

### 4. **Form Handling**

Business inquiry form with validation and error handling:

```php
// In handlers/business-inquiry.php
class BusinessInquiry {
    public function validate($data) { ... }
    public function sanitize($data) { ... }
    public function sendEmail($data) { ... }
    public function process($data) { ... }
}
```

**Features:**
- Input validation (email, phone, message length)
- Data sanitization to prevent XSS
- Email notification to admin
- Data logging as backup
- User-friendly error messages

### 5. **Database Ready**

Configuration and schema provided for future database integration:

**Files:**
- `config/database.php` - Connection class and configuration
- `config/database.sql` - Complete database schema

**Tables:**
- `business_inquiries` - Business inquiry submissions
- `users` - Admin user management
- `business_opportunities` - Dynamic business content
- `service_rates` - Dynamic pricing information
- `audit_logs` - Security and activity tracking

## How to Use

### Update Business Information

Edit `config/data.php`:

```php
$accommodation_rates['rooms'][0]['rate_php_max'] = 3000.00; // Update rate
$transportation_rates['PROVINCIAL BUSES'][0]['rate_php'] = 45; // Update fare
```

The page will automatically reflect changes.

### Extend to Other Pages

To apply the same structure to other pages:

1. Create a PHP file instead of HTML
2. Add at the top:
```php
<?php
$pageTitle = 'Page Title';
require_once __DIR__ . '/config/data.php';
require_once __DIR__ . '/includes/header.navbar.php';
?>
```

3. Add at the bottom:
```php
<?php
require_once __DIR__ . '/includes/footer.php';
?>
```

### Handle Form Submissions

The form will:
1. Validate all required fields
2. Sanitize input to prevent XSS
3. Send email to: `business@cityofimus.gov.ph`
4. Log submission to `logs/business_inquiries.log`
5. Display success/error messages

Email configuration is in `config/data.php`:
```php
$form_config = [
    'business_inquiry_email' => 'business@cityofimus.gov.ph',
    ...
];
```

### Enable Database (Optional)

When ready to use a database:

1. Create the database using `config/database.sql`
2. Update credentials in `config/database.php`
3. Uncomment the connection code
4. Update form handlers to save to database

## Security Features

✓ **Input Sanitization** - All user input is sanitized with `htmlspecialchars()`
✓ **Email Validation** - Email addresses are validated before processing
✓ **Error Logging** - PHP errors logged to file, not displayed to users
✓ **File Permissions** - Log files should have restricted access
✓ **No SQL Queries Yet** - Uses file-based logging for safety during setup

## Performance Notes

- **Modular Includes** - Slightly slower than single file (minimal impact)
- **Data Arrays** - In-memory, very fast
- **File Logging** - Asynchronous, doesn't block page load
- **Future DB** - Will improve search and filtering capabilities

## Next Steps

1. **Database Integration** - Connect to MySQL for dynamic content
2. **Admin Panel** - User dashboard for managing inquiries
3. **Advanced Forms** - Multi-page forms with file uploads
4. **Analytics** - Track visitor data and inquiries
5. **Email Templates** - Professional HTML emails for notifications
6. **Cache Layer** - Cache frequently accessed data

## Support Files

- `logs/` directory - Create it manually or it will be created on first form submission
- File permissions - Ensure PHP can write to `logs/` directory (typically 755)

## Troubleshooting

**Form not sending emails?**
- Check `config/data.php` for correct email address
- Review `logs/business_inquiries.log` for submission logs
- Check PHP error log: `logs/php_errors.log`

**Styles not showing?**
- Verify CSS paths in `header.navbar.php`
- Check image paths in footer

**Data not updating?**
- Clear browser cache (Ctrl+F5)
- Check `config/data.php` for correct values

---

**Last Updated:** February 22, 2026
**PHP Version:** 7.4+
**Configuration:** Modular, Production-Ready
