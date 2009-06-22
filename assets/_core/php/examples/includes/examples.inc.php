<?php
	class Examples {
		public static $Categories = array();
		public static $AdditionalCode = array();
		public static $PluginExamples = array();

		public static function Init() {
			$intIndex = -1;

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'Basic CodeGen';
			Examples::$Categories[$intIndex]['description'] = 'An introduction to the QCubed Code Generator';
 			self::AddCoreExampleFile($intIndex, '/code_generator/about.php (About Sections 1 - 3)');
			self::AddCoreExampleFile($intIndex, '/code_generator/intro.php About the Database');
			self::AddCoreExampleFile($intIndex, '/code_generator/objects.php * Object Relational Model');
			self::AddCoreExampleFile($intIndex, '/code_generator/indexes.php * Loading Objects');
			self::AddCoreExampleFile($intIndex, '/code_generator/save_delete.php * Saving and Deleting');
			self::AddCoreExampleFile($intIndex, '/code_generator/relationships.php * Relationships (Foreign Keys)');
			self::AddCoreExampleFile($intIndex, '/code_generator/reverse_relationships.php * Reverse Relationships (One-to-One and One-to-Many)');
			self::AddCoreExampleFile($intIndex, '/code_generator/relationships_many.php * Many-to-Many Relationships');
			self::AddCoreExampleFile($intIndex, '/code_generator/script_path.php Defining Relationships without Foreign Keys');
			self::AddCoreExampleFile($intIndex, '/code_generator/primary_keys.php Explanation of QCubed Primary Key Requirement');
			Examples::$AdditionalCode[__EXAMPLES__ . '/code_generator/intro.php'] = array('mysql_innodb.sql','sql_server.sql');
			Examples::$AdditionalCode[__EXAMPLES__ . '/code_generator/script_path.php'] = array('mysql_myisam.sql', 'relationships.txt');

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'More About the Object Relational Model';
			Examples::$Categories[$intIndex]['description'] = 'Looking more in depth at the functionality of the generated ORM';
			self::AddCoreExampleFile($intIndex, '/more_codegen/sort_limit.php * Sorting and Limiting Array Results');
			self::AddCoreExampleFile($intIndex, '/more_codegen/late_bind.php * Late Binding of Related Objects');
			self::AddCoreExampleFile($intIndex, '/more_codegen/early_bind.php * Early Binding of Related Objects');
			self::AddCoreExampleFile($intIndex, '/more_codegen/virtual_attributes.php * Virtual Attributes');
			self::AddCoreExampleFile($intIndex, '/more_codegen/type_tables.php * Type Tables');
			self::AddCoreExampleFile($intIndex, '/more_codegen/custom.php * Customized Business Logic');
			self::AddCoreExampleFile($intIndex, '/more_codegen/custom_load.php * Customized Load Methods');
			self::AddCoreExampleFile($intIndex, '/more_codegen/optimistic_locking.php * Optimistic Locking');

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'Querying in QCubed';
			Examples::$Categories[$intIndex]['description'] = 'Ad Hoc Queries, Custom Load Methods, and QCubed Query';
			self::AddCoreExampleFile($intIndex, '/qcodo_query/qq.php * QCubed Query: Object Oriented Database Querying');
			self::AddCoreExampleFile($intIndex, '/qcodo_query/qqnode.php * QCubed Query: The QQ Node Classes');
			self::AddCoreExampleFile($intIndex, '/qcodo_query/qqcondition.php * QCubed Query: The QQ Condition Classes');
			self::AddCoreExampleFile($intIndex, '/qcodo_query/qqclause.php * QCubed Query: The QQ Clause Classes');
			self::AddCoreExampleFile($intIndex, '/qcodo_query/conditional_expand.php * QCubed Query: Conditional Joins');
			self::AddCoreExampleFile($intIndex, '/qcodo_query/association.php * QCubed Query: Handling Association Tables');
			self::AddCoreExampleFile($intIndex, '/qcodo_query/reverse.php * QCubed Query: Handling Reverse Relationships');
			self::AddCoreExampleFile($intIndex, '/qcodo_query/expandasarray.php * ExpandAsArray: Multiple related tables in one swift query');
			self::AddCoreExampleFile($intIndex, '/qcodo_query/subsql.php * Custom SQL Subqueries for QQuery');
			self::AddCoreExampleFile($intIndex, '/qcodo_query/intro.php * Performing Custom SQL Queries');
			self::AddCoreExampleFile($intIndex, '/qcodo_query/qcache.php * Caching Query Results with QueryArrayCached');

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'Basic QForms';
			Examples::$Categories[$intIndex]['description'] = 'An introduction to QForms and QControls';
			self::AddCoreExampleFile($intIndex, '/basic_qform/about.php (About Sections 4 - 10)');
			self::AddCoreExampleFile($intIndex, '/basic_qform/intro.php Hello World Example');
			self::AddCoreExampleFile($intIndex, '/basic_qform/state.php QForms: Stateful, Event-Driven Objects');
			self::AddCoreExampleFile($intIndex, '/basic_qform/process_flow.php Understanding Process Flow');
			self::AddCoreExampleFile($intIndex, '/basic_qform/calculator.php Calculator Example');
			self::AddCoreExampleFile($intIndex, '/basic_qform/calculator_2.php Calculator Example with Validation');
			self::AddCoreExampleFile($intIndex, '/basic_qform/calculator_3.php Calculator Example with &quot;Design&quot;');
			self::AddCoreExampleFile($intIndex, '/basic_qform/listbox.php * Introduction to QListControl');

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'Basic AJAX in QForms';
			Examples::$Categories[$intIndex]['description'] = 'A look at how to AJAX-enable your QForms';
			self::AddCoreExampleFile($intIndex, '/basic_ajax/intro.php Hello World Example using AJAX');
			self::AddCoreExampleFile($intIndex, '/basic_ajax/calculator_2.php Calculator Example using AJAX');
			self::AddCoreExampleFile($intIndex, '/basic_ajax/wait_icon.php Adding a Wait Icon');

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'More About Events and Actions';
			Examples::$Categories[$intIndex]['description'] = 'Looking more in depth at the capabilities of the QEvent and QAction libraries';
			self::AddCoreExampleFile($intIndex, '/events_actions/editable_listbox.php Editable ListBox');
			self::AddCoreExampleFile($intIndex, '/events_actions/editable_listbox_2.php Conditional Events');
			self::AddCoreExampleFile($intIndex, '/events_actions/delayed.php Trigger-Delayed Events');
			self::AddCoreExampleFile($intIndex, '/events_actions/javascript_alerts.php Javascript Actions, Alerts and Confirmations');
			self::AddCoreExampleFile($intIndex, '/events_actions/other_actions.php Other Client-Side QActions');

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'Paginated Controls';
			Examples::$Categories[$intIndex]['description'] = 'The QDataGrid and QDataRepeater controls';
			self::AddCoreExampleFile($intIndex, '/datagrid/intro.php * Basic QDataGrid');
			self::AddCoreExampleFile($intIndex, '/datagrid/variables.php * The QDataGrid Variables');
			self::AddCoreExampleFile($intIndex, '/datagrid/rowactions.php * Making entire QDataGrid rows clickable');
			self::AddCoreExampleFile($intIndex, '/datagrid/sorting.php * QDataGrid Sorting');
			self::AddCoreExampleFile($intIndex, '/datagrid/pagination.php * QDataGrid Pagination');
			self::AddCoreExampleFile($intIndex, '/datagrid/ajax.php * Enabling AJAX on the QDataGrid');
			self::AddCoreExampleFile($intIndex, '/datarepeater/ajax.php * Simple QDataRepeater using AJAX-triggered Pagination');
			self::AddCoreExampleFile($intIndex, '/datagrid/extend.php * Creating Your Own Custom QDataGrid Subclass');
			Examples::$AdditionalCode[__EXAMPLES__  . '/datarepeater/ajax.php'] = array('dtr_persons.tpl.php');
			Examples::$AdditionalCode[__EXAMPLES__  . '/datagrid/extend.php'] = array('QDataGrid.class.php');

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'Advanced Controls Manipulation';
			Examples::$Categories[$intIndex]['description'] = 'Dynamically creating controls, Implementing custom controls';
			self::AddCoreExampleFile($intIndex, '/dynamic/select.php * Creating Checkboxes in a Datagrid');
			self::AddCoreExampleFile($intIndex, '/dynamic/inline_editing.php * Datagrid with Inline Editing');
			self::AddCoreExampleFile($intIndex, '/dynamic/qpanel.php Introduction to QBlockControls');
			self::AddCoreExampleFile($intIndex, '/dynamic/qpanel_2.php Dynamically Changing a Control\'s Parent');
			self::AddCoreExampleFile($intIndex, '/other_controls/persist.php Persistent Controls: Performance for Reusable Components');
			self::AddCoreExampleFile($intIndex, '/other_controls/sample.php Creating Your Own Control');
			self::AddCoreExampleFile($intIndex, '/composite/intro.php Creating a Composite Control');
			self::AddCoreExampleFile($intIndex, '/multiple_qform/intro.php "Multiple QForms" Functionality via Custom QPanels');
			self::AddCoreExampleFile($intIndex, '/dynamic/control_proxy.php Using QControlProxies to have Non-QControls Trigger Events');
			self::AddCoreReferencedFile('/dynamic/qpanel.php', 'pnl_panel.tpl.php');
			self::AddCoreReferencedFile('/other_controls/sample.php', '__CORE_CONTROL__QSampleControl.class.php');
			self::AddCoreReferencedFile('/composite/intro.php', 'SampleComposite.class.php');
			self::AddCoreReferencedFile('/multiple_qform/intro.php', array(
				'ProjectViewPanel.class.php', 'ProjectViewPanel.tpl.php',
				'ProjectEditPanel.class.php', 'ProjectEditPanel.tpl.php',
				'PersonEditPanel.class.php', 'PersonEditPanel.tpl.php'));

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'Advanced AJAX';
			Examples::$Categories[$intIndex]['description'] = 'Advanced AJAX functionality like drag and drop, selection and cinematic effects';
			self::AddCoreExampleFile($intIndex, '/advanced_ajax/renamer.php Renameable Labels');
			self::AddCoreExampleFile($intIndex, '/advanced_ajax/renamer_2.php Porting Code to the Client Side');
			self::AddCoreExampleFile($intIndex, '/advanced_ajax/move.php Moveable Controls (a.k.a. Drag and Drop)');
			self::AddCoreExampleFile($intIndex, '/advanced_ajax/scrolling.php Automatic Scrolling');
			self::AddCoreExampleFile($intIndex, '/advanced_ajax/move_target.php Move Handle: Specifying Which Controls to Move');
			self::AddCoreExampleFile($intIndex, '/advanced_ajax/drop_zone.php Move Handle: Defining Drop Zones');
			self::AddCoreExampleFile($intIndex, '/advanced_ajax/resize.php Resizing Block Controls');
			self::AddCoreExampleFile($intIndex, '/advanced_ajax/dialog_box.php Modal "Dialog Boxes"');
			self::AddCoreExampleFile($intIndex, '/advanced_ajax/jquery_effects.php JQuery Effects');
			
			Examples::$AdditionalCode[__EXAMPLES__ . '/advanced_ajax/dialog_box.php'] = array('CalculatorWidget.class.php','CalculatorWidget.tpl.php');

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'Other Advanced Controls';
			Examples::$Categories[$intIndex]['description'] = 'A collection of examples for some of the more advanced/complex QControls';
			self::AddCoreExampleFile($intIndex, '/image_label/intro.php Introduction to QImageLabel');
			self::AddCoreExampleFile($intIndex, '/treenav/treenav.php Introduction to QTreeNav');
			self::AddCoreExampleFile($intIndex, '/other_controls/image.php Introduction to QImageControl');
			self::AddCoreExampleFile($intIndex, '/other_controls/datetime.php Date and DateTime-based QControls');
			self::AddCoreExampleFile($intIndex, '/other_controls/file_asset.php Combining Controls: A Better Way to Upload Files');
		
			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'MetaControls, Meta DataGrids, and the Drafts';
			Examples::$Categories[$intIndex]['description'] = 'Combining the Code Generator with the QForm Library';
			self::AddCoreExampleFile($intIndex, '/other/formgen.php QForm and CodeGen, a Winning Combination to RAD');
			self::AddCoreExampleFile($intIndex, '/other/metacontrols.php * Introduction to MetaControls');
			self::AddCoreExampleFile($intIndex, '/other/meta_datagrids.php * Introduction to Meta DataGrids');
			self::AddCoreExampleFile($intIndex, '/other/form_drafts.php * Introduction to the Drafts');

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'Beyond HTML';
			Examples::$Categories[$intIndex]['description'] = 'Other libraries in QCubed, including support for Email and RSS';
			self::AddCoreExampleFile($intIndex, '/communication/email.php Introduction to QEmailServer');
			self::AddCoreExampleFile($intIndex, '/communication/rss.php * Introduction to QRssFeed');
			self::AddCoreExampleFile($intIndex, '/other/parsing.php Introduction to parsing with QLexer and QRegex');
			self::AddCoreExampleFile($intIndex, '/communication/crypto.php Introduction to QCryptography');
			self::AddCoreExampleFile($intIndex, '/communication/i18n.php Introduction to QI18n (Internationalization)');
			self::AddCoreExampleFile($intIndex, '/communication/soap.php * Introduction to QSoapService');
			self::AddCoreReferencedFile('/communication/rss.php', 'rss_feed.php');
			self::AddCoreReferencedFile('/communication/i18n.php', array('en.po', 'es.po'));
			self::AddCoreReferencedFile('/communication/soap.php', 'example_service.php');
			self::AddCoreReferencedFile('/other/parsing.php', 'bb_parser.php');

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'Other Tidbits';
			Examples::$Categories[$intIndex]['description'] = 'Other random examples, samples and tutorials';
			self::AddCoreExampleFile($intIndex, '/other/optimistic_locking.php * Optimistic Locking and QForms');
			self::AddCoreExampleFile($intIndex, '/other/diff.php * QObjectDiff: What fields changed in my form?');
			self::AddCoreExampleFile($intIndex, '/other/attribute_overriding.php Attribute Overriding');
			self::AddCoreExampleFile($intIndex, '/other/alternate_template.php Specifying a Template Filepath');
			self::AddCoreExampleFile($intIndex, '/other/single.php Single File QForms');
			self::AddCoreExampleFile($intIndex, '/other/form_state.php Working with FormState Handlers');
			self::AddCoreExampleFile($intIndex, '/other/print.php PHP Print Command Shortcuts');
			self::AddCoreReferencedFile('/other/alternate_template.php', 'some_template_file.tpl.php');

			$intIndex++;
			Examples::$Categories[$intIndex] = array();
			Examples::$Categories[$intIndex]['name'] = 'Plugins';
			Examples::$Categories[$intIndex]['description'] = 'Extensions to QCubed functionality created by the community';
			self::AddCoreExampleFile($intIndex, '/plugins/about.php Plugin Ecosystem: Introduction');
			self::AddCoreExampleFile($intIndex, '/plugins/components.php Writing your own plugins, Part 1: components of a plugin');
			self::AddCoreExampleFile($intIndex, '/plugins/packaging.php Writing your own plugins, Part 2: packaging a plugin');
			self::AddCoreReferencedFile('/plugins/components.php', '__CORE_FRAMEWORK__QPluginInterface.class.php');

			foreach (Examples::$PluginExamples as $example) {
				array_push(Examples::$Categories[$intIndex], $example);
			}
		}
		
		public static function AddPluginExampleFile($strPluginName, $strExampleFileName) {
			array_push(Examples::$PluginExamples, __PLUGIN_ASSETS__ . '/' . $strPluginName . "/" . $strExampleFileName);
		}
		
		private static function AddCoreExampleFile($intIndex, $strExampleFileName) {
			array_push(Examples::$Categories[$intIndex], __EXAMPLES__ . $strExampleFileName);
		}
		
		private static function AddCoreReferencedFile($strExampleFileName, $mixReferencedFile) {
			if (!is_array($mixReferencedFile)) {
				$mixReferencedFile = array($mixReferencedFile);
			}
			Examples::$AdditionalCode[__EXAMPLES__ . $strExampleFileName] = $mixReferencedFile;
		}

		public static function GetCategoryId() {
			$numCategories = count(Examples::$Categories);
			$categories = Examples::$Categories;
			for ($intCategoryIndex = 0; $intCategoryIndex < count(Examples::$Categories); $intCategoryIndex++) {
				$objExampleCategory = Examples::$Categories[$intCategoryIndex];
				
				for ($intExampleIndex = 0; $intExampleIndex < count($objExampleCategory); $intExampleIndex++) {
					if (array_key_exists($intExampleIndex, $objExampleCategory)) {
						$strExample = $objExampleCategory[$intExampleIndex];
						$intPosition = strpos($strExample, ' ');
						$strScriptPath = substr($strExample, 0, $intPosition);
						$strName = substr($strExample, $intPosition + 1);
						
						$scriptName = QApplicationBase::$ScriptName;
						
						$count = substr_count($strScriptPath, QApplicationBase::$ScriptName);

						if (substr_count($strScriptPath, QApplicationBase::$ScriptName) > 0 || // for built-in examples
							substr_count(QApplicationBase::$ScriptName, $strScriptPath) > 0) { // for plugins
							return $intCategoryIndex;
						}
					}
				}
			}

			return null;
		}

		public static function GetExampleId() {
			for ($intCategoryIndex = 0; $intCategoryIndex < count(Examples::$Categories); $intCategoryIndex++) {
				$objExampleCategory = Examples::$Categories[$intCategoryIndex];
				
				for ($intExampleIndex = 0; $intExampleIndex < count($objExampleCategory); $intExampleIndex++) {
					if (array_key_exists($intExampleIndex, $objExampleCategory)) {
						$strExample = $objExampleCategory[$intExampleIndex];
						$intPosition = strpos($strExample, ' ');
						$strScriptPath = strtolower(substr($strExample, 0, $intPosition));
						$strName = substr($strExample, $intPosition + 1);
						
						$scriptName = QApplicationBase::$ScriptName;
						$portionOfScriptName = strtolower(substr($scriptName, strlen(QApplicationBase::$ScriptName) - strlen($strScriptPath)));

						if ($portionOfScriptName == $strScriptPath) {
							return $intExampleIndex;					
						}
					}
				}
			}

			return null;
		}
		
		public static function GetExampleName($intCategoryId, $intExampleId) {
			$strExample = Examples::$Categories[$intCategoryId][$intExampleId];
			$intPosition = strpos($strExample, ' ');
			$strScriptPath = substr($strExample, 0, $intPosition);
			$strName = substr($strExample, $intPosition + 1);
			return $strName;
		}
		
		public static function GetExampleScriptPath($intCategoryId, $intExampleId) {
			$strExample = Examples::$Categories[$intCategoryId][$intExampleId];
			$intPosition = strpos($strExample, ' ');
			$strScriptPath = substr($strExample, 0, $intPosition);
			$strName = substr($strExample, $intPosition + 1);
			return $strScriptPath;
		}

		public static function PageName($strReference = null) {
			if (is_null($strReference))
				$strReference = QApplication::$ScriptName;

			foreach (Examples::$Categories as $objExampleCategory)
				foreach ($objExampleCategory as $strKey => $strExample)
					if (is_numeric($strKey)) {
						// Pull out the URL fragment from the example tree
						$intPosition = strpos($strExample, ' ');
						$strScriptName = substr($strExample, 0, $intPosition);

						if (strpos($strReference, $strScriptName) !== false)
							return(substr($strExample, $intPosition + 1));
					}

			return 'Main Page';
		}
		
		public static function PageLinkName($strReference = null) {
			if (is_null($strReference))
				$strReference = QApplication::$ScriptName;

			foreach (Examples::$Categories as $objExampleCategory)
				foreach ($objExampleCategory as $strKey => $strExample)
					if (is_numeric($strKey)) {
						// Pull out the URL fragment from the example tree
						$intPosition = strpos($strExample, ' ');
						$strScriptName = substr($strExample, 0, $intPosition);

						if (strpos($strReference, $strScriptName) !== false)
							return($strScriptName);
					}
		}
		
		public static function CodeLinks($strReference, $strCurrentScript) {
			$blnIsScript = false;

			if ($strCurrentScript == 'header.inc.php') {
				$strToReturn = '<span class="headingLeftGray">header.inc.php</span>';
				$blnIsScript = true;
			} else {
				$strToReturn = sprintf('<a href="%s/../header.inc.php" class="headingLink">header.inc.php</a>', QApplication::$RequestUri);
			}

			$strToReturn .= ' &nbsp; | &nbsp; ';

			if ($strCurrentScript == 'footer.inc.php') {
				$strToReturn .= '<span class="headingLeftGray">footer.inc.php</span>';
				$blnIsScript = true;
			} else {
				$strToReturn .= sprintf('<a href="%s/../footer.inc.php" class="headingLink">footer.inc.php</a>', QApplication::$RequestUri);
			}
			
			$strToReturn .= ' &nbsp; | &nbsp; ';

			if ($strCurrentScript == 'examples.css') {
				$strToReturn .= '<span class="headingLeftGray">examples.css</span>';
				$blnIsScript = true;
			} else
				$strToReturn .= sprintf('<a href="%s/../examples.css" class="headingLink">examples.css</a>', QApplication::$RequestUri);

			$strToReturn .= ' &nbsp; | &nbsp; ';

			$strScriptname = substr($strReference, strrpos($strReference, '/') + 1);
			if ($strCurrentScript == $strScriptname) {
				$strToReturn .= sprintf('<span class="headingLeftGray">%s</span>', $strScriptname);
				$blnIsScript = true;
			} else
				$strToReturn .= sprintf('<a href="%s/../%s" class="headingLink">%s</a>', QApplication::$RequestUri, $strScriptname, $strScriptname);


			// Current Number of Code Links
			$intCount = 4;

			if (file_exists(substr(str_replace('.php', '.tpl.php', $strReference), 1))) {
				$strToReturn .= ' &nbsp; | &nbsp; ';

				$strScriptname = substr(str_replace('.php', '.tpl.php', $strReference), strrpos(str_replace('.php', '.tpl.php', $strReference), '/') + 1);
				if ($strCurrentScript == $strScriptname) {
					$strToReturn .= sprintf('<span class="headingLeftGray">%s</span>', $strScriptname);
					$blnIsScript = true;
				} else {
					$strToReturn .= sprintf('<a href="%s/../%s" class="headingLink">%s</a>', QApplication::$RequestUri, $strScriptname, $strScriptname);
				}
				
				$intCount++;
			}

			if(array_key_exists($strReference, Examples::$AdditionalCode))
				foreach (Examples::$AdditionalCode[$strReference] as $strCode) {
					if (($intCount % 7) == 0)
						$strToReturn .= '<br/>';
					else
						$strToReturn .= ' &nbsp; | &nbsp; ';
		
					$strScriptname = $strCode;
					if ($strCurrentScript == $strScriptname) {
						$strToReturn .= sprintf('<span class="headingLeftGray">%s</span>', preg_replace('/__.*__/', '', $strScriptname));
						$blnIsScript = true;
					} else {
						$strToReturn .= sprintf('<a href="%s/../%s" class="headingLink">%s</a>', QApplication::$RequestUri, $strScriptname, preg_replace('/__.*__/', '', $strScriptname));
					}

					$intCount++;
				}
				
			if ($blnIsScript)
				return $strToReturn;
			else
				QApplication::CloseWindow();
		}

		public static function PageLinks() {
			$strPrevious = null;
			$strNext = null;
			$blnFound = false;

			foreach (Examples::$Categories as $objExampleCategory) {
				if (!$blnFound) {
					$strPrevious = null;
					$strNext = null;

					foreach ($objExampleCategory as $strKey => $strExample) {
						if (is_numeric($strKey)) {
							// Pull out the URL fragment from the example tree
							$intPosition = strpos($strExample, ' ');
							$strScriptName = substr($strExample, 0, $intPosition);
							$strDescription = substr($strExample, $intPosition + 1);
							$qapp = QApplication::$ScriptName;

							if (!$blnFound) {
								if (strpos(QApplication::$ScriptName, $strScriptName) !== false || // for core examples
									strpos($strScriptName, QApplication::$ScriptName) !== false) { // for plugins examples
									$blnFound = true;
								} else {
									$strPrevious = sprintf('<b><a href="%s" class="headingLink">&lt;&lt; %s</a></b>',
										$strScriptName, $strDescription);
								}
							} else if (!$strNext) {
								$strNext = sprintf('<b><a href="%s" class="headingLink">%s &gt;&gt;</a></b>',
									$strScriptName, $strDescription);
							}
						}
					}
				}
			}
			
			$strToReturn = '';
			
			if ($strPrevious)
				$strToReturn = $strPrevious;
			else
				$strToReturn = '<span class="headingLeftGray">&lt;&lt; Previous</span>';

			$intCategoryId = Examples::GetCategoryId();
			if ($intCategoryId < 3)
				$intPartId = 1;
			else if ($intCategoryId < 10)
				$intPartId = 2;
			else
				$intPartId = 3;

			$strToReturn .= ' &nbsp; | &nbsp; ';
			$strToReturn .= sprintf('<b><a href="%s/index.php/%s" class="headingLink">Back to Main</a></b>',
				__VIRTUAL_DIRECTORY__ . __EXAMPLES__, $intPartId);
			$strToReturn .= ' &nbsp; | &nbsp; ';

			if ($strNext)
				$strToReturn .= $strNext;
			else
				$strToReturn .= '<span class="headingLeftGray">Next &gt;&gt;</span>';

			return $strToReturn;				
		}
	}
	
	require_once(__PLUGINS__ . "/plugin_examples.php");

	Examples::Init();
?>