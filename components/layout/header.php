<!DOCTYPE html>
<html lang="es" class="antialiased font-inter">
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
</head>

<body class="bg-white min-h-screen flex flex-col overflow-x-hidden">
    <header class="w-full bg-white sticky top-0 z-10">
        <nav class="w-full max-w-[1280px] mx-auto px-4 py-[14px] flex items-center justify-between font-raleway font-bold text-base text-[#3F3F47]">
            <!-- Logo -->
            <a href="/">
                <img src="assets/images/Hunter-Pet-Logo.webp" alt="Logo Hunter Pet" class="h-auto" width="114" height="64">
            </a>

            <!-- Menu -->
            <div class="hidden md:flex gap-8">
                <a href="#product"vclass="hover:text-primary transition">Producto</a>
                <a href="#benefits" class="hover:text-primary transition">Beneficios</a>
                <a href="#contact" class="hover:text-primary transition">Contacto</a>
            </div>

            <!-- CTA -->
            <a href="#contact" class="hidden md:block px-6 py-3 rounded-full shadow-[0px_4px_7px_-4px_#ED1C3F] bg-[#ED1C3F] text-white text-base hover:opacity-80 transition">Cotizar</a>
        </nav>
    </header>