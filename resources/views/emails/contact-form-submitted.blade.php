<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #D4AF37; color: black; padding: 20px; text-align: center; border-radius: 5px; }
        .content { background-color: #f9f9f9; padding: 20px; margin-top: 20px; border-radius: 5px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #D4AF37; }
        .value { padding: 10px; background-color: white; border-left: 3px solid #D4AF37; margin-top: 5px; }
        .footer { text-align: center; margin-top: 20px; color: #999; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
            <p>SMART INDIA DETECTIVE</p>
        </div>

        <div class="content">
            <div class="field">
                <div class="label">Name:</div>
                <div class="value">{{ $form->name }}</div>
            </div>

            <div class="field">
                <div class="label">Email:</div>
                <div class="value"><a href="mailto:{{ $form->email }}">{{ $form->email }}</a></div>
            </div>

            <div class="field">
                <div class="label">Phone:</div>
                <div class="value">{{ $form->phone ?? 'N/A' }}</div>
            </div>

            @if($form->service)
            <div class="field">
                <div class="label">Service:</div>
                <div class="value">{{ ucfirst(str_replace('-', ' ', $form->service)) }}</div>
            </div>
            @endif

            @if($form->subject)
            <div class="field">
                <div class="label">Subject:</div>
                <div class="value">{{ $form->subject }}</div>
            </div>
            @endif

            <div class="field">
                <div class="label">Message:</div>
                <div class="value" style="white-space: pre-wrap;">{{ $form->message }}</div>
            </div>

            <div class="field">
                <div class="label">Submitted At:</div>
                <div class="value">{{ $form->created_at->format('d-m-Y H:i:s') }}</div>
            </div>

            <div class="field">
                <div class="label">IP Address:</div>
                <div class="value">{{ $form->ip_address ?? 'N/A' }}</div>
            </div>
        </div>

        <div class="footer">
            <p>This is an automated email. Please do not reply to this email.</p>
            <p>&copy; {{ date('Y') }} SMART INDIA DETECTIVE. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
