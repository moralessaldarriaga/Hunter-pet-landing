<!DOCTYPE html>
<html lang="es" class="font-inter antialiased scroll-smooth" data-scroll-behavior="smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hunter Pet</title>
    <!-- Google Fonts: Inter + Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Tailwind -->
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="assets/js/index.js" defer></script>

    <link rel="icon" type="image/png" href="assets/images/favicon/256.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon/72.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon/57.png">
</head>

<body class="bg-white min-h-screen flex flex-col overflow-x-hidden">
    <header class="w-full bg-white sticky top-0 z-10 transition-all duration-300 header-scroll-shadow">
        <nav class="w-full max-w-7xl mx-auto px-8 xl:px-4 py-3.5 flex items-center justify-between font-raleway font-bold text-base text-[#3F3F47]">
            <!-- Logo -->
            <a href="https://www.hunter.com.pe/HunterPet/" class="animate-fade-in animate-delay-100">
                <picture>
                    <source 
                        media="(max-width:639px)"
                        srcset="assets/images/Hunter-Pet-Logo@2x.webp" width="90" height="51">
                    <img src="assets/images/Hunter-Pet-Logo.webp" alt="Logo Hunter Pet" class="h-auto" width="114" height="64" fetchpriority="high"
                        loading="eager"
                        decoding="async" >
                </picture>
            </a>

            <!-- Menu -->
            <div class="hidden md:flex gap-8 animate-fade-in animate-delay-100">
                <a href="#product" class="hover:text-primary transition" data-enlace>Producto</a>
                <a href="#benefits" class="hover:text-primary transition" data-enlace>Beneficios</a>
                <a href="#contact" class="hover:text-primary transition" data-enlace>Contacto</a>
            </div>

            <!-- CTA -->
            <div class="animate-fade-in animate-delay-100 hidden md:flex">
                <a href="#contact" class="px-6 py-3 rounded-full shadow-[0px_4px_7px_-4px_#ED1C3F] bg-[#ED1C3F] text-white text-base hover:opacity-80 transition" data-enlace>Cotizar</a>
            </div>

            <!-- Burger Menu -->
            <button id="openMenu" class="md:hidden relative w-8 h-8 flex items-center justify-center" aria-label="Toggle menu">
                <span class="absolute w-6 h-[3px] bg-[#F0163E] rounded-md transition-all duration-300 -translate-y-2"></span>
                <span class="absolute w-6 h-[3px] bg-[#F0163E] rounded-md transition-all duration-300 "></span>
                <span class="absolute w-6 h-[3px] bg-[#F0163E] rounded-md transition-all duration-300 translate-y-2"></span>
            </button>
        </nav>
        <div id="menuMobile" class="hidden md:hidden bg-white px-6 pb-6 shadow-md">
            <nav aria-label="Navegación móvil">
                <ul class="flex flex-col gap-4">
                    <li><a data-enlace href="#product" class="font-raleway font-bold text-base text-[#3F3F47]">Producto</a></li>
                    <li><a data-enlace href="#benefits" class="font-raleway font-bold text-base text-[#3F3F47]">Beneficios</a></li>
                    <li><a data-enlace class="flex items-center justify-center font-raleway font-bold text-base text-[#3F3F47] px-6 py-3 rounded-full shadow-[0px_4px_7px_-4px_#ED1C3F] bg-[#ED1C3F] text-white text-base hover:opacity-80 transition" href="#contact">Cotizar</a></li>
                </ul>
            </nav>
        </div>
    </header>