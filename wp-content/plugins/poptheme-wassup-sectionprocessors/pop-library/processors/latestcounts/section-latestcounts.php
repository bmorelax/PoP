<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_LATESTCOUNT_PROJECTS', PoP_ServerUtils::get_template_definition('latestcount-projects'));
define ('GD_TEMPLATE_LATESTCOUNT_AUTHOR_PROJECTS', PoP_ServerUtils::get_template_definition('latestcount-author-projects'));
define ('GD_TEMPLATE_LATESTCOUNT_STORIES', PoP_ServerUtils::get_template_definition('latestcount-stories'));
define ('GD_TEMPLATE_LATESTCOUNT_AUTHOR_STORIES', PoP_ServerUtils::get_template_definition('latestcount-author-stories'));
define ('GD_TEMPLATE_LATESTCOUNT_ANNOUNCEMENTS', PoP_ServerUtils::get_template_definition('latestcount-announcements'));
define ('GD_TEMPLATE_LATESTCOUNT_AUTHOR_ANNOUNCEMENTS', PoP_ServerUtils::get_template_definition('latestcount-author-announcements'));
define ('GD_TEMPLATE_LATESTCOUNT_DISCUSSIONS', PoP_ServerUtils::get_template_definition('latestcount-discussions'));
define ('GD_TEMPLATE_LATESTCOUNT_AUTHOR_DISCUSSIONS', PoP_ServerUtils::get_template_definition('latestcount-author-discussions'));
define ('GD_TEMPLATE_LATESTCOUNT_FEATURED', PoP_ServerUtils::get_template_definition('latestcount-featured'));
define ('GD_TEMPLATE_LATESTCOUNT_AUTHOR_FEATURED', PoP_ServerUtils::get_template_definition('latestcount-author-featured'));

class PoPThemeWassup_SectionProcessors_Template_Processor_SectionLatestCounts extends GD_Template_Processor_SectionLatestCountsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_LATESTCOUNT_PROJECTS,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_PROJECTS,
			GD_TEMPLATE_LATESTCOUNT_STORIES,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_STORIES,
			GD_TEMPLATE_LATESTCOUNT_ANNOUNCEMENTS,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_ANNOUNCEMENTS,
			GD_TEMPLATE_LATESTCOUNT_DISCUSSIONS,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_DISCUSSIONS,
			GD_TEMPLATE_LATESTCOUNT_FEATURED,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_FEATURED,
		);
	}

	function get_object_name($template_id, $atts) {
	
		$cats = array(
			GD_TEMPLATE_LATESTCOUNT_PROJECTS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_PROJECTS,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_PROJECTS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_PROJECTS,
			GD_TEMPLATE_LATESTCOUNT_STORIES => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_STORIES,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_STORIES => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_STORIES,
			GD_TEMPLATE_LATESTCOUNT_ANNOUNCEMENTS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_ANNOUNCEMENTS,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_ANNOUNCEMENTS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_ANNOUNCEMENTS,
			GD_TEMPLATE_LATESTCOUNT_DISCUSSIONS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_DISCUSSIONS,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_DISCUSSIONS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_DISCUSSIONS,
			GD_TEMPLATE_LATESTCOUNT_FEATURED => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_FEATURED,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_FEATURED => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_FEATURED,
		);
		if ($cat = $cats[$template_id]) {
				
			return gd_get_categoryname($cat, 'lc');;
		}
	
		return parent::get_object_names($template_id, $atts);
	}

	function get_object_names($template_id, $atts) {
	
		$cats = array(
			GD_TEMPLATE_LATESTCOUNT_PROJECTS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_PROJECTS,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_PROJECTS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_PROJECTS,
			GD_TEMPLATE_LATESTCOUNT_STORIES => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_STORIES,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_STORIES => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_STORIES,
			GD_TEMPLATE_LATESTCOUNT_ANNOUNCEMENTS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_ANNOUNCEMENTS,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_ANNOUNCEMENTS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_ANNOUNCEMENTS,
			GD_TEMPLATE_LATESTCOUNT_DISCUSSIONS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_DISCUSSIONS,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_DISCUSSIONS => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_DISCUSSIONS,
			GD_TEMPLATE_LATESTCOUNT_FEATURED => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_FEATURED,
			GD_TEMPLATE_LATESTCOUNT_AUTHOR_FEATURED => POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_FEATURED,
		);
		if ($cat = $cats[$template_id]) {
				
			return gd_get_categoryname($cat, 'plural-lc');
		}
	
		return parent::get_object_names($template_id, $atts);
	}

	function get_section_classes($template_id, $atts) {

		$ret = parent::get_section_classes($template_id, $atts);

		// Because all these categories will be added together with "webpost" category,
		// then this one must also be added (the selector needs all categories from from the post to be present in the latestcount)
		switch ($template_id) {
			
			case GD_TEMPLATE_LATESTCOUNT_PROJECTS:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_PROJECTS:
			case GD_TEMPLATE_LATESTCOUNT_STORIES:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_STORIES:
			case GD_TEMPLATE_LATESTCOUNT_ANNOUNCEMENTS:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_ANNOUNCEMENTS:
			case GD_TEMPLATE_LATESTCOUNT_DISCUSSIONS:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_DISCUSSIONS:
			case GD_TEMPLATE_LATESTCOUNT_FEATURED:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_FEATURED:
				
				$ret[] = 'post-'.POPTHEME_WASSUP_CAT_WEBPOSTS;
				$ret[] = 'post-'.POPTHEME_WASSUP_CAT_WEBPOSTLINKS;
				break;
		}

		switch ($template_id) {
			
			case GD_TEMPLATE_LATESTCOUNT_PROJECTS:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_PROJECTS:

				$ret[] = 'post-'.POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_PROJECTS;
				// if (POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_PROJECTLINKS) {
				// 	$ret[] = 'post-'.POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_PROJECTLINKS;
				// }
				break;

			case GD_TEMPLATE_LATESTCOUNT_STORIES:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_STORIES:

				$ret[] = 'post-'.POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_STORIES;
				// if (POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_STORYLINKS) {
				// 	$ret[] = 'post-'.POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_STORYLINKS;
				// }
				break;

			case GD_TEMPLATE_LATESTCOUNT_ANNOUNCEMENTS:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_ANNOUNCEMENTS:

				$ret[] = 'post-'.POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_ANNOUNCEMENTS;
				// if (POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_ANNOUNCEMENTLINKS) {
				// 	$ret[] = 'post-'.POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_ANNOUNCEMENTLINKS;
				// }
				break;

			case GD_TEMPLATE_LATESTCOUNT_DISCUSSIONS:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_DISCUSSIONS:

				$ret[] = 'post-'.POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_DISCUSSIONS;
				// if (POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_DISCUSSIONLINKS) {
				// 	$ret[] = 'post-'.POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_DISCUSSIONLINKS;
				// }
				break;

			case GD_TEMPLATE_LATESTCOUNT_FEATURED:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_FEATURED:
				
				$ret[] = 'post-'.POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_FEATURED;
				// if (POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_FEATUREDLINKS) {
				// 	$ret[] = 'post-'.POPTHEME_WASSUP_SECTIONPROCESSORS_CAT_FEATUREDLINKS;
				// }
				break;
		}
	
		return $ret;
	}

	function is_author($template_id, $atts) {

		switch ($template_id) {
			
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_PROJECTS:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_STORIES:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_ANNOUNCEMENTS:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_DISCUSSIONS:
			case GD_TEMPLATE_LATESTCOUNT_AUTHOR_FEATURED:
				
				return true;
		}
	
		return parent::is_author($template_id, $atts);
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new PoPThemeWassup_SectionProcessors_Template_Processor_SectionLatestCounts();