<div class="search-content">
    <div class="search-bar-content">
        <div class="form-group">
            <input type="text" onkeyup='searchContent(event)'
                placeholder='Ingresa tu búsqueda..' class="form-control" id='header_search_input'>
        </div>
        <div class="search-btn" onclick="showSearchInput()">
            <i class="fa fa-search" id='header_search_icon'></i>
        </div>
    </div>
   
    <div class="results">
        <ul>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Velit sint ratione qui facere!</li>
            <li>Sequi, sapiente labore. Vel, dolore.</li>
        </ul>
    </div>

</div>

<script>

    if(!siteUrl) {
        var searchLogicUrl= "<?php echo $assets_url ?>/shared/search-logic.php";
        var siteUrl= "<?php echo $url ?>";
    }

</script>