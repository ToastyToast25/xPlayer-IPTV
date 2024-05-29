<?php

// URL DNS
define('IP', 'http://domain.com:80'); 

// pink, aqua, orange or blue themes
$template = 'blue'; 

// WhatsApp Number
define("WHATSAPP", ''); // WhatsApp Number

// Website 
define("IPTV_NAME", 'WebPlayer'); 

// MercadoPago Integration
// Create payment links in your account and put them here

define("PAYMENT_LINK1", ''); // Link 1
define("PAYMENT_LINK2", ''); // Link 2
define("PAYMENT_LINK3", ''); // Link 3
define("PAYMENT_LINK4", ''); // Link 4

$name1 = "Monthly";
$value1 = "29.90"; // Monthly Value
$name2 = "Quarterly";
$value2 = "79.90"; // Quarterly Value
$name3 = "Semiannual";
$value3 = "129.90"; // Semiannual Value
$name4 = "Annual";
value4 = "199.90"; // Annual Value

// Xtream-Codes CMS Settings 

define("ENABLE_TEST", '0');  // 1 = YES / 0 = NO
define("HOURS", '2');  // Trial Duration in hours
define("XTREAM_URL", 'https://cms-eu.xtream-codes.com/'); // Xtream-Codes CMS URL
define("XTREAM_USER", ''); // Xtream-Codes User
define("XTREAM_PASSWORD", ''); // Xtream-Codes Password
define("XTREAM_PLAN", '1'); // Xtream-Codes Plan Number, contact support for details
define("ENABLE_TEST_BLOCK", '0'); // If Enabled (1) = Blocks new registrations from the user's computer for 30 days, preventing frequent tests

// SMTP Email Settings for Test Sending
define("SMTP_HOST", 'mail.provider.com');
define("SMTP_USER", '');
define("SMTP_PASSWORD", '');
define("SMTP_PORT", '587');
define("SMTP_SECURITY", 'tls');
define("EMAIL_SUBJECT", 'Welcome to ITV - WebPlayer');
define("EMAIL_PROVIDER", 'contact@provider.com');
define("PROVIDER_NAME", 'WebPlayer');

// Adults categories
define("WARNING_ADULT_CHANNEL", 'XXX: ADULTS'); // Should be the same as XC
define("WARNING_ADULT_MOVIE", 'MOVIES: ADULTS'); // Should be the same as XC
// You can see this name when the system generates the categories

// ATTENTION WHEN EDITING THE EMAIL BODY
// Don't change the variables
//
// %EXPIRATION%, %NAME%, %USERNAME%, %PASSWORD%
//
// Ask a developer for help if needed.

define("EMAIL_BODY", "Hello %NAME%, your test has been successfully created.<br><br>
    You can log in to our web player using the following details:<br>
    <br>
    Username: <b>%USERNAME%</b> <br>
    Password: <b>%PASSWORD%</b> <br><br><br>
    You can also test our list by downloading it below:<br><br>
    %LIST_URL%<br><br><br>
    Enjoy your test, it is valid until: %EXPIRATION%<br><br><br>
    
    Thank you<br>
    WebPlayer.
    
    ");
?>
