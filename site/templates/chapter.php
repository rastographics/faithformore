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


  <style>
    /* Custom styles for the native HTML5 audio player using Tailwind utilities */

    /* Styling the main player container */
    audio {
        @apply w-full bg-gray-700 text-white rounded-lg;
    }

    /* Remove default native styling (optional, customize as needed) */
    audio::-webkit-media-controls-panel,
    audio::-webkit-media-controls-play-button,
    audio::-webkit-media-controls-timeline,
    audio::-webkit-media-controls-volume-slider {
      /*     background-color: #4a5568;  Tailwind's gray-700 */
    }

    audio::-webkit-media-controls-current-time,
    audio::-webkit-media-controls-time-remaining {
       /* color: white;  Text color */
    }

    /* Optional: Adjust control sizes for mobile */
    @media (max-width: 640px) {
        audio {
            @apply text-sm;
        }
    }
</style>



    <script>
    !function(t,e){var o,n,p,r;e.__SV||(window.posthog=e,e._i=[],e.init=function(i,s,a){function g(t,e){var o=e.split(".");2==o.length&&(t=t[o[0]],e=o[1]),t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}}(p=t.createElement("script")).type="text/javascript",p.async=!0,p.src=s.api_host.replace(".i.posthog.com","-assets.i.posthog.com")+"/static/array.js",(r=t.getElementsByTagName("script")[0]).parentNode.insertBefore(p,r);var u=e;for(void 0!==a?u=e[a]=[]:a="posthog",u.people=u.people||[],u.toString=function(t){var e="posthog";return"posthog"!==a&&(e+="."+a),t||(e+=" (stub)"),e},u.people.toString=function(){return u.toString(1)+".people (stub)"},o="init capture register register_once register_for_session unregister unregister_for_session getFeatureFlag getFeatureFlagPayload isFeatureEnabled reloadFeatureFlags updateEarlyAccessFeatureEnrollment getEarlyAccessFeatures on onFeatureFlags onSessionId getSurveys getActiveMatchingSurveys renderSurvey canRenderSurvey getNextSurveyStep identify setPersonProperties group resetGroups setPersonPropertiesForFlags resetPersonPropertiesForFlags setGroupPropertiesForFlags resetGroupPropertiesForFlags reset get_distinct_id getGroups get_session_id get_session_replay_url alias set_config startSessionRecording stopSessionRecording sessionRecordingStarted captureException loadToolbar get_property getSessionProperty createPersonProfile opt_in_capturing opt_out_capturing has_opted_in_capturing has_opted_out_capturing clear_opt_in_out_capturing debug".split(" "),n=0;n<o.length;n++)g(u,o[n]);e._i.push([i,s,a])},e.__SV=1)}(document,window.posthog||[]);
    posthog.init('phc_BbniMdzfp4Gk7yMp4lZcl2Ep3iI1fT6rrVcErf5OfYp',{api_host:'https://us.i.posthog.com', person_profiles: 'identified_only' // or 'always' to create profiles for anonymous users as well
        })
</script>

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
                <div class="aspect-w-16 aspect-h-9">
                <img src="<?= $image->width(1000)->url ?>" alt="<?= $item->title ?>" class="w-full h-full object-cover">
                </div>
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
        <!-- Audio.js player -->
     <audio controls class="w-full">
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
