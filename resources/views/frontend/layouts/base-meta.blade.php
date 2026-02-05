<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="@yield('meta_description', 'SMART INDIA DETECTIVE - Private Investigation Agency')">
<meta name="keywords" content="@yield('meta_keywords', 'detective, investigation, matrimonial')">
<meta name="author" content="SMART INDIA DETECTIVE">
<meta name="robots" content="@yield('robots', 'index, follow')">
<meta name="theme-color" content="#D4AF37">
<link rel="canonical" href="{{ request()->url() }}">

<!-- Favicon -->
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
<link rel="apple-touch-icon" href="{{ asset('favicon.svg') }}">

<meta property="og:type" content="website">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:title" content="@yield('og_title', 'SMART INDIA DETECTIVE')">
<meta property="og:description" content="@yield('og_description', 'Professional investigation services')">
<meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
<meta property="og:site_name" content="SMART INDIA DETECTIVE">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('twitter_title', 'SMART INDIA DETECTIVE')">
<meta name="twitter:description" content="@yield('twitter_description', 'Professional investigation services')">
<meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">

<!-- Schema.org LocalBusiness -->

<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "LocalBusiness",
  "name": "SMART INDIA DETECTIVE",
  "url": "{{ url('/') }}", 
  "telephone": "+91-7982697272",
  "email": "indiasmart89@gmail.com",
  "address": {
    "@@type": "PostalAddress",
    "streetAddress": "A19S Pandav Nagar",
    "addressLocality": "Delhi",
    "addressRegion": "DL",
    "postalCode": "110092",
    "addressCountry": "IN"
  },
  "openingHoursSpecification": {
    "@@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
    "opens": "00:00",
    "closes": "23:59"
  }
}
</script>