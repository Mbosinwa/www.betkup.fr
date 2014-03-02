<div style="height: 15px;"></div>
<div class="count-down-title">
	<?php echo __('text_widget_count_down_title', array('%br%' => '<br />'))?>
</div>
<div style="height: 15px;"></div>
<div class="count-down-container">
	<div id="count-down-chrono">
		<div id="chrono">
			<table>
				<thead>
					<tr>
						<th id="chrono-count-down-1">00</th>
						<th id="chrono-count-down-2">00</th>
						<th id="chrono-count-down-3">00</th>
						<th id="chrono-count-down-4">00</th>
					</tr>
				</thead>
				<tbody>
					<tr class="line-infos">
						<td>jours</td>
						<td>h</td>
						<td>m</td>
						<td>s</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="before-start">
		<?php echo __('text_widget_count_down_before_start')?>
	</div>
</div>
<a id="widget-link-ranking" href="http://www.20minutes.fr/sport/football/euro/pronos" target="_blank">
	<span id="picto"></span>
	<span><?php echo __('text_widget_count_down_link')?></span>
</a>
<script type="text/javascript">
$(function() {
	var refreshId_1 = setInterval(function() {
	    var arrayResultat1 = returnChronoPART1('<?php echo $kupData['startDate']; ?>', '<?php echo $kupData['status'] ?>');
	    $('#chrono-count-down-1').html(arrayResultat1[0]);
	    $('#chrono-count-down-2').html(arrayResultat1[1]);
	    $('#chrono-count-down-3').html(arrayResultat1[2]);
	    $('#chrono-count-down-4').html(arrayResultat1[3]);
	}, 1000);
});
</script>