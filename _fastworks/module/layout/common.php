<?php
	/* ==================================================
		- Function Load_layout
	================================================== */
	//load_layout("pages/index.php","layout.htm");
	//load_layout("header","layout.htm");
	//load_layout("footer","layout.htm",);
	function load_layout($get_where="",$layoutPath="layout.html") {
		global $__config;
		
		$strArray = file ( $__config['pathroot'].$layoutPath );
		
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
						if ($__config['is_bbs']) {
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