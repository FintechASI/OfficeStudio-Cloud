<?php
/**
 * SPDX-FileCopyrightText: 2019 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */
?>
<div class="section development-notice">
	<p>
		<?php print_unescaped(str_replace(
			[
				'{repoopen}',
				'{communityopen}',
				'{githubopen}',
				'{licenseopen}',
				'{linkclose}',
			],
			[
				'<a href="https://github.com/FintechASI/OfficeStudio-Cloud" target="_blank" rel="noreferrer noopener">',
				'<a href="https://nextcloud.com/contribute" target="_blank" rel="noreferrer noopener">',
				'<a href="https://github.com/nextcloud" target="_blank" rel="noreferrer noopener">',
				'<a href="https://www.gnu.org/licenses/agpl-3.0.html" target="_blank" rel="noreferrer noopener">',
				'</a>',
			],
			$l->t('OfficeStudio Cloud ({repoopen}source code{linkclose}) is built on open-source software by the {communityopen}Nextcloud community{linkclose} ({githubopen}upstream repository{linkclose}) and is licensed under the {licenseopen}AGPL-3.0{linkclose}.')
		)); ?>
	</p>
</div>
