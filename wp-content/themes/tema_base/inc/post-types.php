<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// Proyectos
		$labels = array(
			'name'          => 'Proyectos',
			'singular_name' => 'Proyecto',
			'add_new'       => 'Nueva Proyecto',
			'add_new_item'  => 'Nueva Proyecto',
			'edit_item'     => 'Editar Proyecto',
			'new_item'      => 'Nueva Proyecto',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Proyecto',
			'search_items'  => 'Buscar Proyecto',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Proyectos'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'Proyectos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'Proyecto', $args );

		////////////////////////////////////////////////////////////////////////////////////

		

	});