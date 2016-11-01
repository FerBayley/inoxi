<?php 

	function carga_css(){

		wp_enqueue_style("opensans", "https://fonts.googleapis.com/css?family=Open+Sans");
		wp_enqueue_style("lorabiryani", "https://fonts.googleapis.com/css?family=Biryani|Lora");
		wp_enqueue_style("Yellowtail", "https://fonts.googleapis.com/css?family=Courgette");
		wp_enqueue_style("normalize", get_stylesheet_directory_uri()."/assets/css/normalize.css");
		wp_enqueue_style("main", get_stylesheet_directory_uri()."/assets/css/main.css");
		//wp_enqueue_style("480", get_stylesheet_directory_uri()."/assets/css/1024.css");
		//wp_enqueue_style("480", get_stylesheet_directory_uri()."/assets/css/425.css");
		//wp_enqueue_style("480", get_stylesheet_directory_uri()."/assets/css/375.css");
		//wp_enqueue_style("480", get_stylesheet_directory_uri()."/assets/css/480.css");
		//wp_enqueue_style("640", get_stylesheet_directory_uri()."/assets/css/640.css");
		//wp_enqueue_style("768", get_stylesheet_directory_uri()."/assets/css/768.css");
		//wp_enqueue_style("360", get_stylesheet_directory_uri()."/assets/css/360.css");
		//wp_enqueue_style("412", get_stylesheet_directory_uri()."/assets/css/412.css");
		//wp_enqueue_style("414", get_stylesheet_directory_uri()."/assets/css/414.css");
	}


	add_action("wp_enqueue_scripts", "carga_css");


	function cargas_js(){

		wp_enqueue_script("images", get_stylesheet_directory_uri()."/assets/js/images.js");
		wp_enqueue_script("jquery", get_stylesheet_directory_uri()."/assets/js/jquery.js");
		wp_enqueue_script("responsiveslider", get_stylesheet_directory_uri()."/assets/js/responsiveslides.min.js");

	}

	add_action("wp_enqueue_scripts", "cargas_js");


?>