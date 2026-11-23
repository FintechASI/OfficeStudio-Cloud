<?php

/**
 * SPDX-FileCopyrightText: 2016-2024 Nextcloud GmbH and Nextcloud contributors
 * SPDX-FileCopyrightText: 2011-2016 ownCloud, Inc.
 * SPDX-FileCopyrightText: 2026 OfficeStudio Cloud contributors
 * SPDX-License-Identifier: AGPL-3.0-only
 *
 * @var \OCP\IL10N $l
 */
\OCP\Util::addScript('core', 'login', 'core');
\OCP\Util::addStyle('core', 'login');
\OCP\Util::addStyle('core', 'login-landing');
?>
<div class="osc-login-stage">
	<section class="osc-login-hero" aria-labelledby="osc-login-hero-heading">
		<h2 id="osc-login-hero-heading" class="osc-login-hero__title">
			<?php p($l->t('Your Secure')); ?><br><?php p($l->t('Business Cloud')); ?>
		</h2>
		<p class="osc-login-hero__subtitle">
			<?php p($l->t('Store, sync, share, and collaborate on your files from anywhere.')); ?>
		</p>
		<ul class="osc-login-features">
			<li class="osc-login-features__item">
				<span class="osc-login-features__icon" aria-hidden="true">
					<svg viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
						<path d="M8.5 21H20.5a4.5 4.5 0 0 0 .8-8.93A6.2 6.2 0 0 0 9.4 9.7 4.7 4.7 0 0 0 8.5 21Z"/>
						<path d="M14 18.5v-6"/>
						<path d="M11.3 15.2 14 12.5l2.7 2.7"/>
					</svg>
				</span>
				<span class="osc-login-features__label"><?php p($l->t('Cloud Storage')); ?></span>
			</li>
			<li class="osc-login-features__item">
				<span class="osc-login-features__icon" aria-hidden="true">
					<svg viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
						<path d="M21 10.5A8 8 0 0 0 6.8 9.2"/>
						<path d="M6.5 6.3v3.3h3.3"/>
						<path d="M7 17.5a8 8 0 0 0 14.2 1.3"/>
						<path d="M21.5 21.7v-3.3h-3.3"/>
					</svg>
				</span>
				<span class="osc-login-features__label"><?php p($l->t('File Sync Across Devices')); ?></span>
			</li>
			<li class="osc-login-features__item">
				<span class="osc-login-features__icon" aria-hidden="true">
					<svg viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
						<circle cx="19.5" cy="7.5" r="2.7"/>
						<circle cx="7.5" cy="14" r="2.7"/>
						<circle cx="19.5" cy="20.5" r="2.7"/>
						<path d="M10 12.6 17.1 8.8"/>
						<path d="M10 15.4 17.1 19.2"/>
					</svg>
				</span>
				<span class="osc-login-features__label"><?php p($l->t('Secure File Sharing')); ?></span>
			</li>
			<li class="osc-login-features__item">
				<span class="osc-login-features__icon" aria-hidden="true">
					<svg viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
						<circle cx="14" cy="9.5" r="3"/>
						<path d="M8.5 21.5a5.5 5.5 0 0 1 11 0"/>
						<circle cx="7.5" cy="12" r="2.2"/>
						<path d="M3.5 21.5a4.2 4.2 0 0 1 4.8-4.1"/>
						<circle cx="20.5" cy="12" r="2.2"/>
						<path d="M24.5 21.5a4.2 4.2 0 0 0-4.8-4.1"/>
					</svg>
				</span>
				<span class="osc-login-features__label"><?php p($l->t('Team Collaboration')); ?></span>
			</li>
			<li class="osc-login-features__item">
				<span class="osc-login-features__icon" aria-hidden="true">
					<svg viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
						<path d="M14 4.5 21.5 7.6v5.8c0 5.1-3.2 8.9-7.5 10.6-4.3-1.7-7.5-5.5-7.5-10.6V7.6L14 4.5Z"/>
						<path d="m10.7 14.3 2.3 2.3 4.5-4.7"/>
					</svg>
				</span>
				<span class="osc-login-features__label"><?php p($l->t('Your Data, Your Control')); ?></span>
			</li>
		</ul>
	</section>

	<main class="osc-login-card-col">
		<div id="login"></div>
	</main>

	<div class="osc-login-devices" aria-hidden="true">
		<img
			src="<?php print_unescaped(image_path('core', 'login/devices-illustration.svg')); ?>"
			alt=""
			decoding="async">
	</div>
</div>
