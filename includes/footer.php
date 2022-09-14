    <?php
        $path = $_SESSION['path'];
        $page = $_SESSION['page'];
        $link = ($path === '' ? "assets/" : "../assets/");
    ?>

    <script src=<?= $link."js/jquery-3.3.1.min.js?v=3.3.1" ?>></script>
    <script src=<?= $link."js/jquery.visible.js?v=1.3.0" ?>></script>
    <script src=<?= $link."js/bootstrap.min.js?v=4.0.0" ?> ></script>
    <script src=<?= $link."js/owl.carousel.min.js?v=2.0.0" ?>></script>
    <script src=<?= $link."js/wow.min.js" ?>></script>
    <script src=<?= $link."js/main.js?v=1.2.0" ?>></script>
    
    <?php if ($path === '') {?>
        <script>
            Site.init();
            Site.homepageCarousel();
            Site.timeLine();
        </script>
            
        <script  type="text/javascript" charset="UTF-8" >
            /**
            * Moves the map to display over Berlin
            *
            * @param  {H.Map} map      A HERE Map instance within the application
            */
            function moveMap(map){
                var location = {lat: 14.425645, lng: 121.022835};
                map.setCenter(location);
                var locationCenter = new H.map.Marker(location);
                map.addObject(locationCenter);
                
                var locationMain = {lat: 14.425645, lng: 121.022835};
                var locationBaguio = {lat: 10.3455962, lng: 123.9345082};
                var locationCebu = {lat: 16.4204406, lng: 120.5872337};
                map.setZoom(5);
                
                map.setCenter(locationMain);
                map.setCenter(locationBaguio);
                map.setCenter(locationCebu);

                var locationCenterMain = new H.map.Marker(locationMain);
                var locationCenterBaguio = new H.map.Marker(locationBaguio);
                var locationCenterCebu = new H.map.Marker(locationCebu);

                map.addObject(locationCenterMain);
                map.addObject(locationCenterBaguio);
                map.addObject(locationCenterCebu);

            }

            //Step 1: initialize communication with the platform
            var platform = new H.service.Platform({
                app_id: 'SurGbGvmBiEBExNNe4p6',
                app_code: 'PRg0t5XXebHTm9mTvqdyPQ',
                useHTTPS: true
            });
            
            var pixelRatio = window.devicePixelRatio || 1;
            var defaultLayers = platform.createDefaultLayers({
                tileSize: pixelRatio === 1 ? 256 : 512,
                ppi: pixelRatio === 1 ? undefined : 320
            });

            //Step 2: initialize a map  - not specificing a location will give a whole world view.
            var map = new H.Map(document.getElementById('googleMap'),
            defaultLayers.normal.map, {pixelRatio: pixelRatio});

            //Step 3: make the map interactive
            // MapEvents enables the event system
            // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
            var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

            // Create the default UI components
            var ui = H.ui.UI.createDefault(map, defaultLayers);

            // Now use the map as required...
            moveMap(map);
        </script>
    <?php }else {?>
        <script>
            Site.init();
            Site.productCarousel();
        </script>
        
    <?php }?>
</body>
</html>

