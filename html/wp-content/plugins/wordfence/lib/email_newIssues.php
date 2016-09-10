<p>This email was sent from your website "<?php echo get_bloginfo('name', 'raw'); ?>" by the Wordfence plugin.</p>

<p>Wordfence found the following new issues on "<?php echo get_bloginfo('name', 'raw'); ?>".</p>

<p>Alert generated at <?php echo wfUtils::localHumanDate(); ?></p>
	

<?php if (wfConfig::get('scansEnabled_highSense')): ?>
	<div style="margin: 12px 0;padding: 8px; background-color: #ffffe0; border: 1px solid #ffd975; border-width: 1px 1px 1px 10px;">
		<em>HIGH SENSITIVITY scanning is enabled, it may produce false positives</em>
	</div>
<?php endif ?>

<?php if($totalCriticalIssues > 0){ ?>
<p>Critical Problems:</p>

<?php foreach($issues as $i){ if($i['severity'] == 1){ ?>
<p>* <?php echo htmlspecialchars($i['shortMsg']) ?></p>
<?php if (isset($i['tmplData']['wpURL'])): ?>
<p><?php if ($i['tmplData']['vulnerabilityPatched']) { ?><strong>Update includes security-related fixes.</strong> <?php } echo $i['tmplData']['wpURL']; ?>/changelog</p>
<?php endif ?>
<?php if (!empty($i['tmplData']['badURL'])): ?>
<p><img src="<?php echo WORDFENCE_API_URL_BASE_NONSEC . "?" . http_build_query(array(
		'v' => wfUtils::getWPVersion(), 
		's' => home_url(),
		'k' => wfConfig::get('apiKey'),
		'action' => 'image',
		'txt' => base64_encode($i['tmplData']['badURL'])
	), '', '&') ?>" alt="" /></p>
<?php endif ?>

<?php } } } ?>

<?php if($level == 2 && $totalWarningIssues > 0){ ?>
<p>Warnings:</p>

<?php foreach($issues as $i){ if($i['severity'] == 2){  ?>
<p>* <?php echo htmlspecialchars($i['shortMsg']) ?></p>
		<?php if (isset($i['tmplData']['wpURL'])): ?>
			<p><?php echo $i['tmplData']['wpURL']; ?>/changelog</p>
		<?php endif ?>

<?php } } } ?>


<?php if(! $isPaid){ ?>
	<p>NOTE: You are using the free version of Wordfence. Upgrade to Premium today for just $8.25 per month!</p>

	<ul>
		<li>Receive real-time Firewall and Scan engine rule updates for protection as threats emerge</li>
		<li>Other advanced features like IP reputation monitoring, country blocking, an advanced comment spam filter and cell phone sign-in give you the best protection available</li>
		<li>Remote, frequent and scheduled scans</li>
		<li>Access to Premium Support</li>
		<li>Discounts of up to 75% for multiyear and multi-license purchases</li>
	</ul>

	<p>
		Click here to upgrade to Wordfence Premium:<br>
		<a href="https://www.wordfence.com/zz2/wordfence-signup/">https://www.wordfence.com/zz2/wordfence-signup/</a>
	</p>
<?php } ?>



