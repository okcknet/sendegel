<?php
	$lang = $_GET["lang"];

	if ($lang == "en") {
		$data = file_get_contents("projects-en.json");
	} else {
		$data = file_get_contents("projects.json");
	}

	$jsonData = json_decode($data, true);

	$category = $_POST["category"];
	$status = $_POST["status"];
	$page = $_POST["page"];
	$page = is_numeric($page) ? $page : 1;

	$results = array();

	if (!empty($category)) {
		foreach ($jsonData["data"] as $index => $item){
			if ($item["category"] == $category){
				$results[] = $item;
			}
		}
	} else if (!empty($status)) {
		foreach ($jsonData["data"] as $index => $item){
			if ($item["status"] == $status){
				$results[] = $item;
			}
		}
	} else {
		$results = $jsonData["data"];
	}

	// filter non-dated items
	$resultsWithDate = array();
	$resultsWithoutDate = array();
	$resultsAll = array();

	foreach ($results as $index => $item){
		if ($item["date"] == "-"){
			if ($lang == "en") {
				$item["date"] = "Under Construction";
			} else {
				$item["date"] = "Yapım Aşamasında";
			}

			array_push($resultsWithoutDate, $item);
		} else {
			array_push($resultsWithDate, $item);
		}
	}

	// sort by date
	usort($resultsWithDate, function($a, $b) {
		$dateA = $a["date"];
		$dateB = $b["date"];

		if (strlen($dateA) == 4) {
			$dateA = "01.01." . $dateA;
		}

		if (strlen($dateB) == 4) {
			$dateB = "01.01." . $dateB;
		}

		$timeA = strtotime($dateA);
		$timeB = strtotime($dateB);

		return $timeB - $timeA;
	});

	// merge both
	$resultsAll = array_merge($resultsWithoutDate, $resultsWithDate);

	// pagination
	$limit = 10;
	$offset = ($page - 1) * $limit;
	$totalItems = count($resultsAll);
	$totalPages = ceil($totalItems / $limit);
	$finalResults = array_splice($resultsAll, $offset, $limit);

	$response;

	$response = array(
		"errorText" => $jsonData["errorText"],
		"pages" => $totalPages,
		"data" => $finalResults
	);

	header("Content-Type: application/json");
	echo json_encode($response);
?>