<div>
    <a href="#modal" class="modal-open-button">
        <!-- <li class="centered"> -->
        <li>
            <div class="menu-container hoverchange">
                <div class="indextab">
                    <img src="<?php echo get_theme_file_uri('images/Magnifying_glass.png'); ?>" alt="Searchbutton"
                        class="search-button" />
                </div>
            </div>
        </li>
    </a>
    <div class="modal" id="modal">
        <div class="modal-wrapper">
            <a href="#" class="close">
                <img src="<?php echo get_theme_file_uri('images/Cancel-button.png'); ?>" alt="" class="cancel-button">
            </a>
            <div class="modal-content">
                <form action="<?php echo home_url(); ?>" method="get" id="searchForm">
                    <div class="form-container">
                        <input type="search" name="s" placeholder="キーワードを入力" class="search-bar" id="searchInput">
                    </div>
                    <input type="submit" class="title box" value="search">
                </form>
            </div>
        </div>
        <div class="popup-image hidden" id="popupImage">
            <img src="<?php echo get_theme_file_uri('images/Pop-up.png'); ?>" alt="Popupimage">
        </div>
    </div>
</div>

<?php
// get_footer(); 
?>