# Form Submission & Email System - Setup Guide

## ✅ Completed Setup

### 1. **Database Migration**
- ✓ `contact_forms` table created with fields:
  - `name` - User name
  - `email` - Email address
  - `phone` - Phone number (optional)
  - `subject` - Subject (optional)
  - `service` - Service type (matrimonial, corporate-fraud, surveillance, cyber, other)
  - `message` - Message content
  - `status` - Status (pending, read, replied)
  - `ip_address` - User IP
  - `created_at`, `updated_at` - Timestamps

### 2. **Models & Controllers**
- ✓ `ContactForm` Model - for database operations
- ✓ `HomeController::submitContactForm()` - handles form submission
- ✓ Form validation included
- ✓ IP address auto-captured

### 3. **Email System**
- ✓ `ContactFormSubmitted` Mail - sends admin notification
- ✓ `ContactFormConfirmation` Mail - sends user confirmation
- ✓ Email templates created with beautiful HTML design

### 4. **Routes**
- ✓ POST `/submit-contact-form` - form submission endpoint

## 📧 Email Configuration

**Update your `.env` file with email settings:**

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@smartindiadetective.com
MAIL_FROM_NAME="${APP_NAME}"
```

**For Gmail:**
1. Enable 2-factor authentication
2. Generate App Password: https://myaccount.google.com/apppasswords
3. Use App Password in `MAIL_PASSWORD`

## 🔗 Frontend Form Setup

### Contact Form Example:
```html
<form id="contactForm" method="POST" action="{{ route('submit.contact-form') }}">
    @csrf
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="tel" name="phone" placeholder="Phone Number">
    <input type="text" name="subject" placeholder="Subject">
    <select name="service">
        <option>Select Service</option>
        <option value="matrimonial">Matrimonial</option>
        <option value="corporate-fraud">Corporate Fraud</option>
        <option value="surveillance">Surveillance</option>
        <option value="cyber">Cyber</option>
        <option value="other">Other</option>
    </select>
    <textarea name="message" placeholder="Your Message" required></textarea>
    <button type="submit">Submit</button>
</form>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    fetch('{{ route("submit.contact-form") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            name: this.name.value,
            email: this.email.value,
            phone: this.phone.value,
            subject: this.subject.value,
            service: this.service.value,
            message: this.message.value,
        })
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            alert(data.message);
            this.reset();
        }
    })
    .catch(error => console.error('Error:', error));
});
</script>
```

## 📨 What Happens After Form Submission:

1. **Form validation** - Server validates all fields
2. **Database save** - Form data saved to `contact_forms` table
3. **Admin email** - Email sent to `indiasmart89@gmail.com` with full details
4. **User confirmation** - Confirmation email sent to user
5. **Success response** - JSON response returned to frontend

## 🔐 Database Access

View all submissions in database:
```bash
php artisan tinker
>>> App\Models\ContactForm::all();
```

## 📊 Admin Dashboard (Optional)

To view submissions, create an admin panel:
```bash
php artisan make:controller AdminController
php artisan make:migration create_admin_users_table
```

## ⚠️ Important Notes

1. **Email Configuration** - Must be set in `.env` for emails to work
2. **Admin Email** - Currently set to `indiasmart89@gmail.com` (can be changed)
3. **CSRF Protection** - Enabled by default
4. **Validation** - Email, name, and message are required
5. **IP Logging** - User IP is automatically captured

## ✨ Features Included

- ✅ Form validation
- ✅ Database storage
- ✅ Email notifications (admin + user)
- ✅ Beautiful email templates
- ✅ IP address logging
- ✅ Status tracking (pending/read/replied)
- ✅ CSRF protection
- ✅ Responsive design

---

**Status:** ✅ READY TO USE

Connect your forms to `{{ route('submit.contact-form') }}` and everything will work!
