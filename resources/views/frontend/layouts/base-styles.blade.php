<script src="https://cdn.tailwindcss.com"></script>

<link
    href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700;800&family=Cinzel:wght@400;600;700;900&display=swap"
    rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    html,
    body {
        width: 100%;
        overflow-x: hidden !important;
        /* Horizontal Scroll को जबरदस्ती बंद करेगा */
        position: relative;
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #050505;
    }

    ::-webkit-scrollbar-thumb {
        background: #333;
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #d4af37;
    }

    /* Glassmorphism */
    .glass {
        background: rgba(24, 25, 30, 0.7);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    /* Gold Text */
    .text-gold-gradient {
        background: linear-gradient(to right, #d4af37, #fff, #d4af37);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-size: 200% auto;
        animation: shine 3s linear infinite;
    }

    @keyframes shine {
        to {
            background-position: 200% center;
        }
    }

    /* Map Filter (Dark Mode Map) */
    .map-container iframe {
        filter: grayscale(100%) invert(92%) contrast(83%);
        border-radius: 0.75rem;
    }
</style>
