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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/audiojs/1.0.1/audio.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/audiojs/1.0.1/audio.min.js"></script>

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
            <a href="<?= $image->url ?>" data-lightbox="portfolio" data-title="<?= $item->title ?>">
                <img src="<?= $image->width(1000)->url ?>" alt="<?= $item->title ?>" class="w-full h-full object-cover">
            </a>
            <div class="p-4">
                <h3 class="text-xl font-semibold"><?= $item->title ?></h3>
                <p class="text-sm mt-2"><?= $item->summary ?></p>
            </div>
        </div>
       <?php  endif;

             if($item->vimeo_id):
            ?>
           <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <iframe src="https://player.vimeo.com/video/<?= $item->vimeo_id ?>" class="w-full h-64" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <div class="p-4">
                <h3 class="text-xl font-semibold"><?= $item->title?></h3>
                <p class="text-sm mt-2"><?= $item->summary?></p>
            </div>
        </div>
       <?php  endif;

            if($item->audio): ?>

            <!-- Portfolio Item 3: Embedded Audio from SoundCloud -->
       <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                <div class="p-4">
                    <audio id="<?=$item->name?>" preload="auto" controls>
                        <source src="<?=$item->audio->url?>" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold"><?=$item->title?></h3>
                    <p class="text-sm mt-2"><?= $item->summary?></p>
                </div>
            </div>


                <?php endif;

            
                endforeach;?>
        

     

    

<script>
    audiojs.events.ready(function() {
        var as = audiojs.createAll();
    });
</script>

        <!-- Additional Portfolio Items can go here -->

    </main>

</body>
</html>
