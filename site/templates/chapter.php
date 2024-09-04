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
        <?php foreach($page->media_items as $item) :
            if($item->image):
                $image = $item->image;
            ?>
            <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <a href="<?= $image->url ?>" data-lightbox="portfolio" data-title="<? $item->title ?>">
                <img src="<?= $image->width(1000)->url ?>" alt="<? $item->title ?>" class="w-full h-full object-cover">
            </a>
            <div class="p-4">
                <h3 class="text-xl font-semibold"><? $item->title ?></h3>
                <p class="text-sm mt-2"><? $item->summary ?></p>
            </div>
        </div>
       <?php  endif;
                endforeach;?>
        

        <!-- Portfolio Item 2: Embedded Vimeo Video -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <iframe src="https://player.vimeo.com/video/613787666" class="w-full h-64" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <div class="p-4">
                <h3 class="text-xl font-semibold">40 Years: Keith Gomez/h3>
                <p class="text-sm mt-2">A description about this awesome video.</p>
            </div>
        </div>

        <!-- Portfolio Item 3: Embedded Audio from SoundCloud -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <div class="p-4">
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/310170773%3Fsecret_token%3Ds-7grdG&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/joel-szwarga-482717930" title="Joel Szwarga" target="_blank" style="color: #cccccc; text-decoration: none;">Joel Szwarga</a> · <a href="https://soundcloud.com/joel-szwarga-482717930/another-star-in-glory-dr-keith-gomez-feb-3-1982/s-7grdG" title="Another Star In Glory - Dr Keith Gomez - Feb 3 1982" target="_blank" style="color: #cccccc; text-decoration: none;">Another Star In Glory - Dr Keith Gomez - Feb 3 1982</a></div>
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold">Another Star In Glory</h3>
                <p class="text-sm mt-2">An embedded sermon that will be working.</p>
            </div>
        </div>

        <!-- Additional Portfolio Items can go here -->

    </main>

</body>
</html>
