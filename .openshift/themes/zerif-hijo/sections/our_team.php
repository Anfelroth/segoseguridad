    <?
    echo '<section class="our-team" id="team">';

				echo '<div class="container">';

					echo '<div class="section-header">';

						$zerif_ourteam_title = get_theme_mod('zerif_ourteam_title',__(' NUESTROS PRODUCTOS','zerif-lite'));
					
						if( !empty($zerif_ourteam_title) ):
							echo '<h2 class="dark-text">'.$zerif_ourteam_title.'</h2>';
						endif;

						

					echo '</div>';

    php echo do_shortcode('[foogallery id="35"]'); 
    ?>