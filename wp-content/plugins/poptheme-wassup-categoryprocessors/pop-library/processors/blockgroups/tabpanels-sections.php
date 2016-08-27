<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS00', PoP_ServerUtils::get_template_definition('blockgroup-categoryposts00-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS01', PoP_ServerUtils::get_template_definition('blockgroup-categoryposts01-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS02', PoP_ServerUtils::get_template_definition('blockgroup-categoryposts02-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS03', PoP_ServerUtils::get_template_definition('blockgroup-categoryposts03-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS04', PoP_ServerUtils::get_template_definition('blockgroup-categoryposts04-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS05', PoP_ServerUtils::get_template_definition('blockgroup-categoryposts05-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS06', PoP_ServerUtils::get_template_definition('blockgroup-categoryposts06-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS07', PoP_ServerUtils::get_template_definition('blockgroup-categoryposts07-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS08', PoP_ServerUtils::get_template_definition('blockgroup-categoryposts08-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS09', PoP_ServerUtils::get_template_definition('blockgroup-categoryposts09-tabpanel'));

define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS00', PoP_ServerUtils::get_template_definition('blockgroup-mycategoryposts00-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS01', PoP_ServerUtils::get_template_definition('blockgroup-mycategoryposts01-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS02', PoP_ServerUtils::get_template_definition('blockgroup-mycategoryposts02-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS03', PoP_ServerUtils::get_template_definition('blockgroup-mycategoryposts03-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS04', PoP_ServerUtils::get_template_definition('blockgroup-mycategoryposts04-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS05', PoP_ServerUtils::get_template_definition('blockgroup-mycategoryposts05-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS06', PoP_ServerUtils::get_template_definition('blockgroup-mycategoryposts06-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS07', PoP_ServerUtils::get_template_definition('blockgroup-mycategoryposts07-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS08', PoP_ServerUtils::get_template_definition('blockgroup-mycategoryposts08-tabpanel'));
define ('GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS09', PoP_ServerUtils::get_template_definition('blockgroup-mycategoryposts09-tabpanel'));

class CPP_Template_Processor_SectionTabPanelBlockGroups extends GD_Template_Processor_SectionTabPanelBlockGroupsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS00,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS01,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS02,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS03,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS04,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS05,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS06,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS07,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS08,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS09,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS00,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS01,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS02,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS03,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS04,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS05,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS06,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS07,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS08,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS09,
		);
	}

	function get_block_jsmethod($template_id, $atts) {

		$ret = parent::get_block_jsmethod($template_id, $atts);
		
		switch ($template_id) {
			
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS00:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS01:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS02:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS03:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS04:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS05:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS06:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS07:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS08:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS09:

				// Only reload/destroy if these are main blocks
				if ($this->get_att($template_id, $atts, 'is-mainblock')) {
					$this->add_jsmethod($ret, 'destroyPageOnUserLoggedOut');
					$this->add_jsmethod($ret, 'refetchBlockGroupOnUserLoggedIn');
				}
				break;
		}

		return $ret;
	}

	function get_blockgroup_blocks($template_id) {

		$ret = parent::get_blockgroup_blocks($template_id);

		switch ($template_id) {

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS00:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_LIST,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLLMAP,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS01:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_LIST,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLLMAP,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS02:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_LIST,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLLMAP,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS03:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_LIST,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLLMAP,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS04:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_LIST,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLLMAP,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS05:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_LIST,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLLMAP,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS06:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_LIST,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLLMAP,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS07:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_LIST,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLLMAP,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS08:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_LIST,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLLMAP,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS09:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_FULLVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_LIST,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLLMAP,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS00:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_TABLE_EDIT,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_SCROLL_FULLVIEWPREVIEW,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS01:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_TABLE_EDIT,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_SCROLL_FULLVIEWPREVIEW,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS02:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_TABLE_EDIT,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_SCROLL_FULLVIEWPREVIEW,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS03:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_TABLE_EDIT,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_SCROLL_FULLVIEWPREVIEW,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS04:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_TABLE_EDIT,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_SCROLL_FULLVIEWPREVIEW,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS05:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_TABLE_EDIT,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_SCROLL_FULLVIEWPREVIEW,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS06:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_TABLE_EDIT,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_SCROLL_FULLVIEWPREVIEW,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS07:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_TABLE_EDIT,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_SCROLL_FULLVIEWPREVIEW,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS08:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_TABLE_EDIT,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_SCROLL_FULLVIEWPREVIEW,
					)
				);
				break;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS09:

				$ret = array_merge(
					$ret,
					array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_TABLE_EDIT,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_SCROLL_FULLVIEWPREVIEW,
					)
				);
				break;
		}

		return $ret;
	}

	function get_panel_headers($template_id, $atts) {

		switch ($template_id) {

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS00:

				return array(
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_LIST,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS01:

				return array(
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_LIST,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS02:

				return array(
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_LIST,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS03:

				return array(
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_LIST,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS04:

				return array(
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_LIST,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS05:

				return array(
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_LIST,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS06:

				return array(
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_LIST,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS07:

				return array(
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_LIST,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS08:

				return array(
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_LIST,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS09:

				return array(
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_SIMPLEVIEW => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_SIMPLEVIEW,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_FULLVIEW,
					),
					GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_LIST => array(
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_DETAILS,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_THUMBNAIL,
						GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_LIST,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS00:

				return array(
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_TABLE_EDIT => array(),
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_SCROLL_SIMPLEVIEWPREVIEW => array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_SCROLL_FULLVIEWPREVIEW,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS01:

				return array(
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_TABLE_EDIT => array(),
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_SCROLL_SIMPLEVIEWPREVIEW => array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_SCROLL_FULLVIEWPREVIEW,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS02:

				return array(
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_TABLE_EDIT => array(),
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_SCROLL_SIMPLEVIEWPREVIEW => array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_SCROLL_FULLVIEWPREVIEW,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS03:

				return array(
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_TABLE_EDIT => array(),
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_SCROLL_SIMPLEVIEWPREVIEW => array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_SCROLL_FULLVIEWPREVIEW,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS04:

				return array(
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_TABLE_EDIT => array(),
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_SCROLL_SIMPLEVIEWPREVIEW => array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_SCROLL_FULLVIEWPREVIEW,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS05:

				return array(
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_TABLE_EDIT => array(),
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_SCROLL_SIMPLEVIEWPREVIEW => array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_SCROLL_FULLVIEWPREVIEW,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS06:

				return array(
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_TABLE_EDIT => array(),
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_SCROLL_SIMPLEVIEWPREVIEW => array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_SCROLL_FULLVIEWPREVIEW,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS07:

				return array(
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_TABLE_EDIT => array(),
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_SCROLL_SIMPLEVIEWPREVIEW => array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_SCROLL_FULLVIEWPREVIEW,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS08:

				return array(
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_TABLE_EDIT => array(),
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_SCROLL_SIMPLEVIEWPREVIEW => array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_SCROLL_FULLVIEWPREVIEW,
					),
				);

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS09:

				return array(
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_TABLE_EDIT => array(),
					GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_SCROLL_SIMPLEVIEWPREVIEW => array(
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_SCROLL_SIMPLEVIEWPREVIEW,
						GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_SCROLL_FULLVIEWPREVIEW,
					),
				);
		}

		return parent::get_panel_headers($template_id, $atts);
	}

	protected function get_controlgroup_top($template_id) {

		// Do not add for the quickview, since it is a modal and can't open a new modal (eg: Embed) on top
		$vars = GD_TemplateManager_Utils::get_vars();
		if (!$vars['fetching-json-quickview']) {

			switch ($template_id) {

				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS00:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS01:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS02:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS03:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS04:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS05:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS06:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS07:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS08:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS09:

					return GD_TEMPLATE_CONTROLGROUP_POSTLIST;
				
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS00:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS01:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS02:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS03:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS04:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS05:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS06:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS07:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS08:
				case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS09:

					return GD_TEMPLATE_CONTROLGROUP_MYPOSTLIST;
			}
		}

		return parent::get_controlgroup_top($template_id);
	}

	function get_filter_template($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS00:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS01:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS02:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS03:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS04:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS05:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS06:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS07:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS08:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS09:

				return GD_TEMPLATE_FILTER_WILDCARDPOSTS;

			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS00:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS01:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS02:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS03:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS04:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS05:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS06:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS07:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS08:
			case GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS09:

				return GD_TEMPLATE_FILTER_WILDCARDMYPOSTS;
		}
		
		return parent::get_filter_template($template_id);
	}

	function get_panel_header_fontawesome($blockgroup, $blockunit) {

		$details = array(
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_DETAILS,
		);
		$simpleviews = array(
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_SIMPLEVIEW,
		);
		$fullviews = array(
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_FULLVIEW,
		);
		$thumbnails = array(
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_THUMBNAIL,
		);
		$lists = array(
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_LIST,
		);
		$edits = array(
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_TABLE_EDIT,
		);
		$simpleviewpreviews = array(
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_SCROLL_SIMPLEVIEWPREVIEW,
		);
		$fullviewpreviews = array(
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_SCROLL_FULLVIEWPREVIEW,
		);

		if (in_array($blockunit, $details)) {

			return 'fa-th-list';
		}
		elseif (in_array($blockunit, $simpleviews) || in_array($blockunit, $simpleviewpreviews)) {
			
			return 'fa-angle-right';
		}
		elseif (in_array($blockunit, $fullviews) || in_array($blockunit, $fullviewpreviews)) {
			
			return 'fa-angle-double-right';
		}
		elseif (in_array($blockunit, $thumbnails)) {
			
			return 'fa-th';
		}
		elseif (in_array($blockunit, $lists)) {
			
			return 'fa-list';
		}
		elseif (in_array($blockunit, $edits)) {
			
			return 'fa-edit';
		}
		// elseif (in_array($blockunit, $fullviewpreviews)) {
			
		// 	return 'fa-eye';
		// }

		return parent::get_panel_header_fontawesome($blockgroup, $blockunit);
	}
	function get_panel_header_title($blockgroup, $blockunit) {

		$details = array(
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_DETAILS,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_DETAILS,
		);
		$simpleviews = array(
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_SIMPLEVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_SIMPLEVIEW,
		);
		$fullviews = array(
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_FULLVIEW,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_FULLVIEW,
		);
		$thumbnails = array(
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_THUMBNAIL,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_THUMBNAIL,
		);
		$lists = array(
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_LIST,
			GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_LIST,
		);
		$edits = array(
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_TABLE_EDIT,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_TABLE_EDIT,
		);
		$simpleviewpreviews = array(
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_SCROLL_SIMPLEVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_SCROLL_SIMPLEVIEWPREVIEW,
		);
		$fullviewpreviews = array(
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_SCROLL_FULLVIEWPREVIEW,
			GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_SCROLL_FULLVIEWPREVIEW,
		);

		if (in_array($blockunit, $details)) {

			return __('Details', 'poptheme-wassup-categoryprocessors');
		}
		elseif (in_array($blockunit, $simpleviews) || in_array($blockunit, $simpleviewpreviews)) {
			
			return __('Feed', 'poptheme-wassup-sectionprocessors');
		}
		elseif (in_array($blockunit, $fullviews) || in_array($blockunit, $fullviewpreviews)) {
			
			return __('Extended', 'poptheme-wassup-sectionprocessors');
		}
		elseif (in_array($blockunit, $thumbnails)) {
			
			return __('Thumbnail', 'poptheme-wassup-categoryprocessors');
		}
		elseif (in_array($blockunit, $lists)) {
			
			return __('List', 'poptheme-wassup-categoryprocessors');
		}
		elseif (in_array($blockunit, $edits)) {
			
			return __('Edit', 'poptheme-wassup-categoryprocessors');
		}
		// elseif (in_array($blockunit, $fullviewpreviews)) {
			
		// 	return __('View/Preview', 'poptheme-wassup-categoryprocessors');
		// }

		return parent::get_panel_header_title($blockgroup, $blockunit);
	}

	function init_atts($template_id, &$atts) {

		$class = '';
		$feeds = array(
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS00,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS01,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS02,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS03,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS04,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS05,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS06,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS07,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS08,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS09,
		);
		$tables = array(
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS00,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS01,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS02,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS03,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS04,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS05,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS06,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS07,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS08,
			GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS09,
		);
		if (in_array($template_id, $feeds)) {
			$class = 'feed';
		}
		elseif (in_array($template_id, $tables)) {
			$class = 'tableblock';
		}
		if ($class) {
			$this->append_att($template_id, $atts, 'class', $class);
		}
		
		return parent::init_atts($template_id, $atts);
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new CPP_Template_Processor_SectionTabPanelBlockGroups();