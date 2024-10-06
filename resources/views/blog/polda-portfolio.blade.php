<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polda Metro Jaya Crime Dashboard</title>
    <style>
        .tableauContainer {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            overflow: hidden;
            transition: transform 0.5s ease;
        }

        .tableauViz {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Rotate the Tableau embed by 90 degrees on small screens */
        @media (max-width: 768px) {
            .tableauContainer {
                aspect-ratio: 9 / 16; /* Change the aspect ratio to match the rotated view */
                transform: rotate(90deg);
                transform-origin: center;
            }
        }
    </style>
</head>
<body>

<div class="tableauContainer" id="tableauContainer">
    <div class='tableauPlaceholder' id='viz1727122190194'>
        <noscript>
            <a href='#'>
                <img alt=' ' src='https://public.tableau.com/static/images/Po/PoldaMetroJaya2023CrimeDashboard/PoldaMetroJaya2023CrimeDashboard/1_rss.png' style='border: none' />
            </a>
        </noscript>
        <object class='tableauViz' style='display: none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
            <param name='embed_code_version' value='3' /> 
            <param name='site_root' value='' />
            <param name='name' value='PoldaMetroJaya2023CrimeDashboard/PoldaMetroJaya2023CrimeDashboard' />
            <param name='tabs' value='yes' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https://public.tableau.com/static/images/Po/PoldaMetroJaya2023CrimeDashboard/PoldaMetroJaya2023CrimeDashboard/1.png' /> 
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-GB' />
        </object>
    </div>
</div>

<script type='text/javascript'>
    document.addEventListener('DOMContentLoaded', function() {
        // Scroll to Tableau container when the page loads
        document.getElementById('tableauContainer').scrollIntoView({ behavior: 'smooth' });

        var divElement = document.getElementById('viz1727122190194');
        var vizElement = divElement.getElementsByTagName('object')[0];
        vizElement.style.display = 'block';
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);

        // Check for screen orientation on load and show alert if in portrait mode
        checkOrientation();
        window.addEventListener('resize', checkOrientation);
    });

    function checkOrientation() {
        if (window.innerHeight > window.innerWidth) {
            alert('Untuk pengalaman terbaik, silakan putar layar perangkat Anda ke mode horizontal.');
        }
    }
</script>

</body>
</html>
