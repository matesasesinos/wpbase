</main>
<div id="footer" class="bg-dark text-white pt-5 pb-5 mt-5 py-3">
    <footer class="footer-common container">
        <div class="row text-center">
            <div class="col-12 pt-3 pb-3">
                <?php if(get_theme_mod('marca')){ echo get_theme_mod('marca');}?>
            </div>
            <div class="col-md-3 col-12"><?php if(get_theme_mod('direccion_text')){ echo get_theme_mod('direccion_text');}?></div>
            <div class="col-md-3 col-12"><?php if(get_theme_mod('tel_text')){ echo get_theme_mod('tel_text');}?></div>
            <div class="col-md-3 col-12"><?php if(get_theme_mod('fax_text')){ echo get_theme_mod('fax_text');}?></div>
            <div class="col-md-3 col-12"><?php if(get_theme_mod('email_text')){ echo '<a href="'.get_theme_mod('email_text').'">'.get_theme_mod('email_text').'</a>';}?></div>
        </div>
    </footer>
</div>