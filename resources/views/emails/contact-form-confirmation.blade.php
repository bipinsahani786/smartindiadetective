<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #D4AF37; color: black; padding: 20px; text-align: center; border-radius: 5px; }
        .content { background-color: #f9f9f9; padding: 20px; margin-top: 20px; border-radius: 5px; }
        .footer { text-align: center; margin-top: 20px; color: #999; font-size: 12px; }
        .highlight { color: #D4AF37; font-weight: bold; }
        .button { display: inline-block; background-color: #D4AF37; color: black; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Thank You for Contacting Us!</h2>
            <p>SMART INDIA DETECTIVE</p>
        </div>

        <div class="content">
            <p>Dear <span class="highlight">{{ $form->name }}</span>,</p>

            <p>Thank you for submitting your inquiry to SMART INDIA DETECTIVE. We have received your message and will review it shortly.</p>

            <p>Our team will get back to you within 24 hours at the following contact details:</p>
            
            <ul>
                <li><strong>Email:</strong> {{ $form->email }}</li>
                <li><strong>Phone:</strong> {{ $form->phone ?? 'Not provided' }}</li>
            </ul>

            <p>In the meantime, if you have any urgent matters, please feel free to call us directly at <span class="highlight">+91 7982697272</span> (Available 24/7).</p>

            <p>We appreciate your trust in SMART INDIA DETECTIVE.</p>

            <p>Best regards,<br>
            <strong>SMART INDIA DETECTIVE Team</strong><br>
            Investigation Agency<br>
            Delhi, India</p>

            <a href="https://smartindiadetective.com" class="button">Visit Our Website</a>
        </div>

        <div class="footer">
            <p>This is an automated confirmation email. Please do not reply to this email.</p>
            <p>&copy; {{ date('Y') }} SMART INDIA DETECTIVE. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
