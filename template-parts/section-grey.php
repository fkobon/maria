<?php
/*
================================================================================================
Template part for displaying they grey section
================================================================================================
@package        Maria
@link           https://codex.wordpress.org/The_Loop
@copyright      Copyright (C) 2017. Samuel Guebo
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (http://samuelguebo.co/)
================================================================================================
*/
$expertise_section_title = Maria_Kirki::get_option( 'expertise_section_title');
$expertise_section_description = Maria_Kirki::get_option( 'expertise_section_description');
$expertises = Maria_Kirki::get_option( 'expertise_repeater');
?>
<section class="row main-row clearfix grey-section">
			<section class="columns main-column grey-section-intro">
				<h5 class="section-expertise-title"><?php iam_highlight_first_word($expertise_section_title); ?></h5>
				<p class="section-expertise-description"><?php echo $expertise_section_description; ?></p>
			</section><!--section description/-->
			<?php if(is_array($expertises)): //make sure array is not empty ?>
				<section class="columns main-column">
					<?php foreach ($expertises as $expertise): // loop through array?>
							<div class="small-6 medium-3 large-3 columns expertise">
								<a href="<?php the_permalink($expertise['expertise_page']);?>" title="<?php echo $expertise['expertise_title'];?>">
									<h2 class="expertise-icon">
										<i class="fa fa-<?php echo $expertise['expertise_icon'] ?>"></i>
									</h2>
									<h5 class="expertise-title"><?php echo $expertise['expertise_title'] ?></h5>
									<p class="expertise-description"><?php echo $expertise['expertise_description'] ?>
									</p>
								</a>
							</div>
					<?php endforeach;?>
				</section>
			<?php endif;?>
</section>