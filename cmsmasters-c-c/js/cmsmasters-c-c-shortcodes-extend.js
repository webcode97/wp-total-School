/**
 * @package 	WordPress
 * @subpackage 	Total School
 * @version		1.0.5
 * 
 * Visual Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */
 

/* 
// For Change Fields in Shortcodes

var sc_name_new_fields = {};


for (var id in cmsmastersShortcodes.sc_name.fields) {
	if (id === 'field_name') { // Delete Field
		delete cmsmastersShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Delete Field Attribute
		delete cmsmastersShortcodes.sc_name.fields[id]['field_attribute'];  
		
		
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Add/Change Field Attribute
		cmsmastersShortcodes.sc_name.fields[id]['field_attribute'] = 'value';
		
		
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Add Field (before the field as found, add new field)
		sc_name_new_fields['field_name'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.sc_name_field_custom_bg_color, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		};
		
		
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	} else { // Allways add this in the bottom
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	}
}


cmsmastersShortcodes.sc_name.fields = sc_name_new_fields; 
*/



/**
 * Heading Extend
 */

var heading_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_heading.fields) {
	if (id === 'font_weight') {
		heading_new_fields['tablet_check'] = { 
			type : 		'checkbox', 
			title : 	composer_shortcodes_extend.heading_tablet_check, 
			descr : 	'', 
			def : 		'false', 
			required : 	false, 
			width : 	'half',  
			choises : { 
				'true' : cmsmasters_shortcodes.choice_enable 
			} 
		};
		heading_new_fields['tablet_font_size'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.heading_tablet_font_size, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'tablet_check:true' 
		};
		heading_new_fields['tablet_line_height'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.heading_tablet_line_height, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'tablet_check:true' 
		};
		
		heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	} else {
		heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_heading.fields = heading_new_fields;



/**
 * Posts Slider Extend
 */

var posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	if (id === 'amount') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'columns') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['depend'];
		
		
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else {
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = posts_slider_new_fields;



/**
 * Portfolio Extend
 */

var portfolio_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {

	if (id === 'gap') {
		portfolio_new_fields['hover_icon'] = { 
			type : 		'icon', 
			title : 	composer_shortcodes_extend.portfolio_hover_icon, 
			descr : 	composer_shortcodes_extend.portfolio_hover_icon_descr, 
			def : 		'cmsmasters-icon-leaf-1', 
			required : 	true, 
			width : 	'full', 
			choises : 	cmsmasters_composer_icons() 
		};


		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else {
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = portfolio_new_fields;


/**
 * Profiles Extend
 */

var profiles_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_profiles.fields) {

	if (id === 'animation') {
		profiles_new_fields['hover_icon'] = { 
			type : 		'icon', 
			title : 	composer_shortcodes_extend.profiles_hover_icon, 
			descr : 	composer_shortcodes_extend.profiles_hover_icon_descr, 
			def : 		'cmsmasters-icon-leaf-1', 
			required : 	true, 
			width : 	'full', 
			choises : 	cmsmasters_composer_icons() 
		};


		profiles_new_fields[id] = cmsmastersShortcodes.cmsmasters_profiles.fields[id];
	} else {
		profiles_new_fields[id] = cmsmastersShortcodes.cmsmasters_profiles.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_profiles.fields = profiles_new_fields;


/**
 * Quote Extend
 */

var quote_new_fields = {};


for (var id in cmsmastersMultipleShortcodes.cmsmasters_quote.fields) {

	if (id === 'subtitle') {
		quote_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_quote.fields[id];
		
		
		quote_new_fields['color'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.quote_field_color_title, 
			descr : 	composer_shortcodes_extend.quote_field_color_descr, 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		};
	} else {
		quote_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_quote.fields[id];
	}
}


cmsmastersMultipleShortcodes.cmsmasters_quote.fields = quote_new_fields;


/**
 * Timetable Extend
 */

if (cmsmasters_composer_timetable() === 'true') {
	var timetable_new_fields = {};


	for (var id in cmsmastersShortcodes.cmsmasters_timetable.fields) {
		if (id === 'box_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'box_hover_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hover_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'box_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_txt_color;
			
			timetable_new_fields['box_bd_color'] = { 
				type : 		'rgba', 
				title : 	composer_shortcodes_extend.timetable_field_box_bd_color_title, 
				descr : 	'', 
				def : 		composer_shortcodes_extend.box_bd_color, 
				required : 	false, 
				width : 	'half' 
			};
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'box_hover_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hover_txt_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'box_hours_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hours_txt_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'box_hours_hover_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hours_hover_txt_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'row1_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.row1_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'row1_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.row1_txt_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'row2_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.row2_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'row2_txt_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.row2_txt_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'booking_text_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.booking_text_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'booking_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.booking_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'booking_hover_text_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.booking_hover_text_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'booking_hover_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.booking_hover_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'booked_text_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.booked_text_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'booked_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.booked_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'unavailable_text_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.unavailable_text_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'unavailable_bg_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.unavailable_bg_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else if (id === 'available_slots_color') {
			cmsmastersShortcodes.cmsmasters_timetable.fields[id]['def'] = composer_shortcodes_extend.available_slots_color;
			
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		} else {
			timetable_new_fields[id] = cmsmastersShortcodes.cmsmasters_timetable.fields[id];
		}
	}


	cmsmastersShortcodes.cmsmasters_timetable.fields = timetable_new_fields;
}



/**
 * LearnPress
 */

if (cmsmasters_composer_learnpress() === 'true') {
	var cmsmastersShortcodes_new_shortcode = {};
	
	
	for (var id in cmsmastersShortcodes) {
		if (id === 'cmsmasters_divider') {
			cmsmastersShortcodes_new_shortcode['cmsmasters_learnpress'] = { 
				title : 	composer_shortcodes_extend.learnpress_title, 
				icon : 		'admin-icon-sitemap', 
				pair : 		false, 
				content : 	false, 
				visual : 	false, 
				multiple : 	false, 
				def : 		'', 
				fields : { 
					// Order By
					orderby : { 
						type : 		'select', 
						title : 	cmsmasters_shortcodes.orderby_title, 
						descr : 	composer_shortcodes_extend.course_field_orderby_descr, 
						def : 		'date', 
						required : 	true, 
						width : 	'half', 
						choises : { 
									'date' : 		cmsmasters_shortcodes.choice_date, 
									'name' : 		cmsmasters_shortcodes.name, 
									'id' : 			cmsmasters_shortcodes.choice_id, 
									'menu_order' : 	cmsmasters_shortcodes.choice_menu
						} 
					}, 
					// Order
					order : { 
						type : 		'radio', 
						title : 	cmsmasters_shortcodes.order_title, 
						descr : 	cmsmasters_shortcodes.order_descr, 
						def : 		'DESC', 
						required : 	true, 
						width : 	'half', 
						choises : { 
									'ASC' : 	cmsmasters_shortcodes.choice_asc, 
									'DESC' : 	cmsmasters_shortcodes.choice_desc
						} 
					}, 
					// Categories
					categories : { 
						type : 		'select_multiple', 
						title : 	cmsmasters_shortcodes.categories, 
						descr : 	composer_shortcodes_extend.course_field_categories_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + composer_shortcodes_extend.course_field_categories_descr_note + "</span>", 
						def : 		'', 
						required : 	false, 
						width : 	'half', 
						choises : 	cmsmasters_composer_lpr_course_categories() 
					}, 
					// Courses Number
					count : { 
						type : 		'input', 
						title : 	composer_shortcodes_extend.course_field_postsnumber_title, 
						descr : 	composer_shortcodes_extend.course_field_postsnumber_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + composer_shortcodes_extend.course_field_postsnumber_descr_note + "</span>", 
						def : 		'12', 
						required : 	false, 
						width : 	'number', 
						min : 		'1' 
					}, 
					// Columns Count
					columns : { 
						type : 		'select', 
						title : 	cmsmasters_shortcodes.columns_count, 
						descr : 	composer_shortcodes_extend.course_field_col_count_descr, 
						def : 		'4', 
						required : 	false, 
						width : 	'half', 
						choises : { 
									'1' : 	'1', 
									'2' : 	'2', 
									'3' : 	'3', 
									'4' : 	'4', 
									'5' : 	'5' 
						} 
					}, 
					// Additional Classes
					classes : { 
						type : 		'input', 
						title : 	cmsmasters_shortcodes.classes_title, 
						descr : 	cmsmasters_shortcodes.classes_descr, 
						def : 		'', 
						required : 	false, 
						width : 	'half' 
					}, 
				} 
			};
			
			
			cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
		} else {
			cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
		}
	}
	
	cmsmastersShortcodes = cmsmastersShortcodes_new_shortcode;
}
