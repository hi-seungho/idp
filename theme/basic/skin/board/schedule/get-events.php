<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/common.php');
//--------------------------------------------------------------------------------------------------
// This script reads event data from a JSON file and outputs those events which are within the range
// supplied by the "start" and "end" GET parameters.
//
// An optional "timezone" GET parameter will force all ISO8601 date stings to a given timezone.
//
// Requires PHP 5.2.0 or higher.
//--------------------------------------------------------------------------------------------------

// Require our Event class and datetime utilities
require G5_PLUGIN_PATH . '/fullcalendar/demos/php/utils.php';
function get_project($wr_id) {
	$row = sql_fetch("select * from g5_write_project where wr_id = '{$wr_id}'");

	return $row;
}

// Short-circuit if the client did not give us a date range.
if (!isset($_GET['start']) || !isset($_GET['end'])) {
	die("Please provide a date range.");
}

// Parse the start/end parameters.
// These are assumed to be ISO8601 strings with no time nor timezone, like "2013-12-29".
// Since no timezone will be present, they will parsed as UTC.
$range_start = date("Y-m-d", strtotime($_GET['start']));
$range_end = date("Y-m-d", strtotime($_GET['end']));

// Parse the timezone parameter if it is present.
$timezone = null;
if (isset($_GET['timezone'])) {
	$timezone = new DateTimeZone($_GET['timezone']);
}

$where = "wr_is_comment = 0";
if($_GET['sca']) $where = "ca_name = '{$_GET['sca']}'";

if($_GET['sfl'] && $_GET['stx']) $where .= " and {$_GET['sfl']} like '%{$_GET['stx']}%' ";

$input_arrays = array();

$result = sql_query("select * from g5_write_{$_GET['bo_table']} where {$where} and wr_2 >= '{$range_start}' and wr_1 <= '{$range_end}' order by wr_num, wr_reply");

while ($row = sql_fetch_array($result)) {
	$url = G5_BBS_URL.'/board.php?bo_table='.$_GET['bo_table'].'&wr_id='.$row['wr_id'];
    $color = '#1197C1';

	$input_arrays[] = array(
		'title' => $row['wr_subject'],
		'start' => $row['wr_1'],
		'end' => date("Y-m-d", strtotime($row['wr_2']) + 86400),
		'url' => $url,
		'color' => $color
	);
}
/*
// Accumulate an output array of event data arrays.
$output_arrays = array();
foreach ($input_arrays as $array) {

	// Convert the input array into a useful Event object
	$event = new Event($array, $timezone);

	// If the event is in-bounds, add it to the output
	if ($event->isWithinDayRange($range_start, $range_end)) {
		$output_arrays[] = $event->toArray();
	}
}*/

// Send JSON to the client.
echo json_encode($input_arrays);
