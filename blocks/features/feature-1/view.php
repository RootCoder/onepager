<?php
	$media_grid = 'uk-' . $settings['media_grid'] . '@m';
	// Animation
	$animation_media = ( $settings['animation_media'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_media'] . '"' : '';
	$animation_content = ( $settings['animation_content'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';"' : '';
	// Alignment
	$content_position = ( $settings['media_alignment'] == 'right' ) ? 'uk-flex-first@m uk-first-column' : '';
	// Text transformation class
	$heading_class = ( $settings['title_transformation'] ) ? 'uk-text-' . $settings['title_transformation'] : '';
?>
<section id="<?php echo $id; ?>" class="fp-section features feature-1 uk-padding-small">
	<div class="uk-section-large">
		<div class="uk-container">
			<article class="uk-grid-large" uk-grid>
				<div class="<?php echo $media_grid; ?> uk-grid-item-match uk-flex-middle">
					<div class="uk-panel" <?php echo $animation_media; ?>>
						<?php if ( $contents['image'] ) : ?>
							<img src="<?php echo $contents['image']; ?>" alt="<?php echo $contents['title']; ?>" uk-image>
						<?php endif; ?>
					</div>
				</div>
				<div class="uk-width-expand@m uk-grid-item-match uk-flex-middle <?php echo $content_position; ?>">
					<div class="uk-panel">
						<!-- Title -->
						<?php if ( $contents['title'] ) : ?>
						<?php 
							echo op_heading(
								$contents['title'],
								$settings['heading_type'],
								'uk-heading-primary uk-text-'.$settings['title_transformation'],
								$animation_content
							); 
						?>
						<?php endif; ?>
						<!-- Description -->
						<?php if ( $contents['description'] ) : ?>
							<div class="uk-text-lead"<?php echo ( $settings['animation_content'] ? $animation_content . 'delay:300"' : '' ); ?>><?php echo $contents['description']; ?></div>
						<?php endif; ?>	
						<p <?php echo ( $settings['animation_content'] ? $animation_content . 'delay:400"' : '' ); ?>>
							<!-- Link -->
							<?php echo op_link( $contents['link'], 'uk-button-large uk-margin-medium-top uk-button uk-button-primary' ); ?>
						</p>
					</div><!-- uk-panel -->
				</div> <!-- uk-width-expand -->
			</article> <!-- uk-article -->
		</div><!-- uk-container -->
	</div><!-- uk-section -->
</section><!-- end-section -->
