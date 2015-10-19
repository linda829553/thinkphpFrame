<?php 
	function addTaskState($results)
	{
		// row is i  col is j
		for ($i=0; $i < count($results); $i++) { 
			foreach ($results[$i] as $key => $value) {
				$arr_results[$i][$key] = $results[$i][$key];
			}
		}
		return $arr_results;
	}
 ?>