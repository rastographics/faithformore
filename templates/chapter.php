<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faith For More</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lightbox2 CSS and JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
</head>
<body class="bg-gray-900 text-white">

    <header class="text-center py-10">
        <h1 class="text-4xl font-bold"><?= $page->title?></h1>
        <p class="text-lg mt-2"><?= $page->summary?></p>
    </header>

    <main class="container mx-auto px-4 py-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        
        <!-- Portfolio Item 1: Image from the Internet with Lightbox -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <a href="https://images.unsplash.com/photo-1521747116042-5a810fda9664?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&q=80&w=1080" data-lightbox="portfolio" data-title="Beautiful Landscape">
                <img src="https://images.unsplash.com/photo-1521747116042-5a810fda9664?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&q=80&w=1080" alt="Beautiful Landscape" class="w-full h-full object-cover">
            </a>
            <div class="p-4">
                <h3 class="text-xl font-semibold">Beautiful Landscape</h3>
                <p class="text-sm mt-2">A stunning sunset landscape photo from Unsplash.</p>
            </div>
        </div>

        <!-- Portfolio Item 2: Embedded Vimeo Video -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <iframe src="https://player.vimeo.com/video/76979871" class="w-full h-64" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <div class="p-4">
                <h3 class="text-xl font-semibold">Creative Short Film</h3>
                <p class="text-sm mt-2">A short film embedded from Vimeo showcasing creative storytelling.</p>
            </div>
        </div>

        <!-- Portfolio Item 3: Embedded Audio from SoundCloud -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <div class="p-4">
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/340195339&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold">Relaxing Music</h3>
                <p class="text-sm mt-2">An embedded audio track from SoundCloud with relaxing music.</p>
            </div>
        </div>

        <!-- Additional Portfolio Items can go here -->

    </main>

</body>
</html>
