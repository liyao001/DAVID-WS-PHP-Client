<?php
/**
 * Data structures for DAVID WebService
 * @author Li Yao
 * @version 1.0
 * @see https://david.ncifcrf.gov/content.jsp?file=DAVID_WebService.html
 */
class authenticate {
	public $args0;
	function __construct($user) {
		$this->args0 = $user;
	}
}
class addList{
	public $args0;
	public $args1;
	public $args2;
	public $args3;
	function __construct($inputIds, $idType, $listName, $listType) {
		$this->args0 = $inputIds;
		$this->args1 = $idType;
		$this->args2 = $listName;
		$this->args3 = intval($listType);
	}
}
class getAllAnnotationCategoryNames{}
class getAllListNames{}
class getAllPopulationNames{}
class getChartReport {
	public $args0;
	public $args1;
	function __construct($threshold, $count) {
		$this->args0 = $threshold;
		$this->args1 = $count;
	}
}
class getConversionTypes{}
class getCurrentList {}
class getCurrentSpecies {}
class getCurrentPopulation {}
class getDefaultCategoryNames {}
class getGeneClusterReport {
	public $args0;
	public $args1;
	public $args2;
	public $args3;
	public $args4;
	function __construct($overlap, $initalSeed, $finalSeed, $linkage, $kappa) {
		$this->args0 = $overlap;
		$this->args1 = $initalSeed;
		$this->args2 = $finalSeed;
		$this->args3 = $linkage;
		$this->args4 = $kappa;
	}
}
class getGeneReportCategories {}
class getListName {
	public $args0;
	public $args1;
	function __construct($a1, $a2) {
		$this->args0 = $a1;
		$this->args1 = $a2;
	}
}

class getListReport  {}
class getSpecies {}
class getSummaryReport  {}
class getTableReport  {}
class getTermClusterReport {
	public $args0;
	public $args1;
	public $args2;
	public $args3;
	public $args4;
	function __construct($overlap, $initialSeed, $finalSeed, $linkage, $kappa) {
		$this->args0 = $overlap;
		$this->args1 = $initalSeed;
		$this->args2 = $finalSeed;
		$this->args3 = $linkage;
		$this->args4 = $kappa;
	}
}
class setCurrentList {
	public $args0;
	function __construct($a1) {
		$this->args0 = $a1;
	}
}
class setCurrentPopulation {
	public $args0;
	function __construct($a1) {
		$this->args0 = $a1;
	}
}
class setCurrentSpecies {
	public $args0;
	function __construct($a1) {
		$this->args0 = $a1;
	}
}
class setCategories {
	public $args0;
	function __construct($a1) {
		$this->args0 = $a1;
	}
}
class loadTesting {
	public $args0;
	public $args1;
	public $args2;
	public $args3;
	public $args4;
	public $args5;
	function __construct($userName, $reportTypes, $listName, $listType, $idType, $inputIds) {
		$this->args0 = $userName;
		$this->args1 = $reportTypes;
		$this->args2 = $listName;
		$this->args3 = $listType;
		$this->args4 = $idType;
		$this->args5 = $inputIds;
		
	}
}
?>
