<?php
	/* ==================================================
		- Function loadLayout
	================================================== */
	//loadLayout("pages/index.php","layout.htm");
	//loadLayout("header","layout.htm");
	//loadLayout("footer","layout.htm",);
	function loadLayout($get_where="",$layoutPath="layout/layout.php") {
		global $__;
		
		$strArray = file ( $layoutPath );
		
		$is_load = false;
		foreach ($strArray as $key=>$order) {
			$tmp = strpos($order,"{%- body %}");
		
			if ($tmp === 0 || $tmp > 0) {
				$is_load = true;
				if ($get_where == "header") {
					return ;
				}
				if ($get_where != "header" && $get_where != "footer") {
					if (is_file($get_where)) {
						include $get_where;
					}
				}
			} else {
				if ($get_where != "footer" || $is_load==true) {
					$pattern = "{\{%- is_bbs_style:\"(.*)\" %\}}";
					$pattern_start = "{\{%- is_bbs_style:\"}";
					$pattern_end = "{\" %\}}";
					if (preg_match ( $pattern , $order )) {
						if ($__['is_bbs']) {
							$order = preg_replace($pattern_start,"style=\"",$order);
							$order = preg_replace($pattern_end,"\"",$order);
						} else {
							$order = preg_replace($pattern,"",$order);
						}
					}
					
					echo $order;
				}
			}
		}
	}
?>