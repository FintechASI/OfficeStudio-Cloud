<?php
/**
 * SPDX-FileCopyrightText: 2016-2024 Nextcloud GmbH and Nextcloud contributors
 * SPDX-FileCopyrightText: 2011-2016 ownCloud, Inc.
 * SPDX-FileCopyrightText: 2026 OfficeStudio Cloud contributors
 * SPDX-License-Identifier: AGPL-3.0-only
 */
?>
<!DOCTYPE html>
<html class="ng-csp" data-placeholder-focus="false" lang="<?php p($_['language']); ?>" data-locale="<?php p($_['locale']); ?>" translate="no" >
	<head
<?php if ($_['user_uid']) { ?>
	data-user="<?php p($_['user_uid']); ?>" data-user-displayname="<?php p($_['user_displayname']); ?>"
<?php } ?>
 data-requesttoken="<?php p($_['requesttoken']); ?>">
		<meta charset="utf-8">
		<title>
			<?php
				p(!empty($_['pageTitle']) ? $_['pageTitle'] . ' – ' : '');
p($theme->getTitle());
?>
		</title>
		<meta name="csp-nonce" nonce="<?php p($_['cspNonce']); /* Do not pass into "content" to prevent exfiltration */ ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0<?php if (isset($_['viewport_maximum_scale'])) {
			p(', maximum-scale=' . $_['viewport_maximum_scale']);
		} ?>">
		<?php if ($theme->getiTunesAppId() !== '') { ?>
		<meta name="apple-itunes-app" content="app-id=<?php p($theme->getiTunesAppId()); ?>">
		<?php } ?>
		<meta name="theme-color" content="<?php p($theme->getColorPrimary()); ?>">
		<link rel="icon" href="<?php print_unescaped(image_path('core', 'favicon.ico')); /* IE11+ supports png */ ?>">
		<link rel="apple-touch-icon" href="<?php print_unescaped(image_path('core', 'favicon-touch.png')); ?>">
		<link rel="mask-icon" sizes="any" href="<?php print_unescaped(image_path('core', 'favicon-mask.svg')); ?>" color="<?php p($theme->getColorPrimary()); ?>">
		<link rel="manifest" href="<?php print_unescaped(image_path('core', 'manifest.json')); ?>" crossorigin="use-credentials">
		<?php emit_css_loading_tags($_); ?>
		<?php emit_script_loading_tags($_); ?>
		<?php print_unescaped($_['headers']); ?>
	</head>
	<body id="<?php p($_['bodyid']);?>" <?php foreach ($_['enabledThemes'] as $themeId) {
		p("data-theme-$themeId ");
	}?> data-themes="<?php p(join(',', $_['enabledThemes'])) ?>">
		<?php include 'layout.noscript.warning.php'; ?>
		<?php include 'layout.initial-state.php'; ?>
		<?php
		$longFooter = $theme->getLongFooter();
		$isOscLoginLanding = $_['bodyid'] === 'body-login' && str_contains($_['content'], 'osc-login-stage');
		?>
		<div class="wrapper">
			<div class="v-align">
				<?php if ($_['bodyid'] === 'body-login'): ?>
					<header>
						<div id="header" class="header-guest">
							<div class="logo"></div>
						</div>
					</header>
				<?php endif; ?>
				<div class="guest-content">
					<h1 class="hidden-visually">
						<?php p($theme->getName()); ?>
					</h1>
					<?php print_unescaped($_['content']); ?>
				</div>
			</div>
		</div>
		<?php if ($isOscLoginLanding): ?>
			<div class="osc-login-footer-band">
				<svg class="osc-login-waves" viewBox="0 0 1440 165" preserveAspectRatio="none" aria-hidden="true">
					<defs>
						<linearGradient id="osc-wave-back" x1="0%" y1="0%" x2="100%" y2="0%">
							<stop offset="0%" stop-color="#1E8EE8"/>
							<stop offset="50%" stop-color="#37A4F5"/>
							<stop offset="100%" stop-color="#1982DC"/>
						</linearGradient>
						<linearGradient id="osc-wave-mid" x1="0%" y1="0%" x2="100%" y2="0%">
							<stop offset="0%" stop-color="#0B61BF"/>
							<stop offset="55%" stop-color="#1479D6"/>
							<stop offset="100%" stop-color="#1F91EC"/>
						</linearGradient>
						<linearGradient id="osc-wave-front" x1="0%" y1="0%" x2="100%" y2="0%">
							<stop offset="0%" stop-color="#063063"/>
							<stop offset="48%" stop-color="#08407F"/>
							<stop offset="100%" stop-color="#073468"/>
						</linearGradient>
					</defs>
					<path fill="url(#osc-wave-back)" d="M0,14 C230,96 470,128 740,104 C1015,78 1220,28 1440,56 L1440,165 L0,165 Z"/>
					<path fill="url(#osc-wave-mid)" d="M0,48 C290,118 570,122 860,82 C1110,48 1285,32 1440,52 L1440,165 L0,165 Z"/>
					<path fill="url(#osc-wave-front)" d="M0,88 C280,120 560,72 860,64 C1120,58 1300,92 1440,118 L1440,165 L0,165 Z"/>
				</svg>
				<div class="osc-login-footer-inner">
					<footer class="guest-box <?php if ($longFooter === '') {
						p('hidden');
					} ?>">
						<p class="info">
							<?php print_unescaped($longFooter); ?>
						</p>
					</footer>
					<ul class="osc-login-footer-pillars" aria-label="<?php p($l->t('OfficeStudio Cloud capabilities')); ?>">
						<li>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
								<path d="M3.5 6.5A2 2 0 0 1 5.5 4.5H9.4l1.8 2H18.5a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-13a2 2 0 0 1-2-2v-10Z"/>
							</svg>
							<span><?php p($l->t('Files')); ?></span>
						</li>
						<li>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
								<path d="M18.5 9A6.8 6.8 0 0 0 6.2 7.7"/>
								<path d="M6 5v3h3"/>
								<path d="M5.5 15a6.8 6.8 0 0 0 12.3 1.3"/>
								<path d="M18 19v-3h-3"/>
							</svg>
							<span><?php p($l->t('Sync')); ?></span>
						</li>
						<li>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
								<circle cx="17" cy="6.2" r="2.2"/>
								<circle cx="6.5" cy="12" r="2.2"/>
								<circle cx="17" cy="17.8" r="2.2"/>
								<path d="M8.5 10.9 15 7.3"/>
								<path d="M8.5 13.1 15 16.7"/>
							</svg>
							<span><?php p($l->t('Share')); ?></span>
						</li>
						<li>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
								<circle cx="12" cy="8.2" r="2.5"/>
								<path d="M7.5 18.5a4.5 4.5 0 0 1 9 0"/>
								<circle cx="6.3" cy="10.2" r="1.9"/>
								<path d="M3 18.5a3.5 3.5 0 0 1 4-3.4"/>
								<circle cx="17.7" cy="10.2" r="1.9"/>
								<path d="M21 18.5a3.5 3.5 0 0 0-4-3.4"/>
							</svg>
							<span><?php p($l->t('Collaborate')); ?></span>
						</li>
						<li>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
								<path d="M12 3.8 18.5 6.5v5c0 4.4-2.8 7.7-6.5 9.1-3.7-1.4-6.5-4.7-6.5-9.1v-5L12 3.8Z"/>
								<path d="m9.2 12.2 2 2 3.8-4"/>
							</svg>
							<span><?php p($l->t('Secure')); ?></span>
						</li>
					</ul>
				</div>
			</div>
		<?php else: ?>
			<footer class="guest-box <?php if ($longFooter === '') {
				p('hidden');
			} ?>">
				<p class="info">
					<?php print_unescaped($longFooter); ?>
				</p>
			</footer>
		<?php endif; ?>
	</body>
</html>
