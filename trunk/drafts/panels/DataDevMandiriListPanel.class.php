<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the DataDevMandiri class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of DataDevMandiri objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this DataDevMandiriListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 *
	 */
	class DataDevMandiriListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list DataDevMandiris
		/**
		 * @var DataDevMandiriDataGrid
		 */
		public $dtgDataDevMandiris;

		// Other public QControls in this panel
		/**
		 * @var QButton CreateNew
		 */
		public $btnCreateNew;
		/**
		 * @var QControlProxy ProxyEdit
		 */
		public $pxyEdit;

		// Callback Method Names
		/**
		 * @var string SetEditPanelMethod
		 */
		protected $strSetEditPanelMethod;
		/**
		 * @var string CloseEditPanelMethod
		 */
		protected $strCloseEditPanelMethod;

		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Record Method Callbacks
			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			// Setup the Template
			$this->Template = __DOCROOT__ . __PANEL_DRAFTS__ . '/DataDevMandiriListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgDataDevMandiris = new DataDevMandiriDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataDevMandiris->CssClass = 'datagrid';
			$this->dtgDataDevMandiris->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataDevMandiris->Paginator = new QPaginator($this->dtgDataDevMandiris);
			$this->dtgDataDevMandiris->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgDataDevMandiris->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_dev_mandiri's properties, or you
			// can traverse down QQN::data_dev_mandiri() to display fields that are down the hierarchy)
			$this->dtgDataDevMandiris->MetaAddColumn(QQN::DataDevMandiri()->NipObject);
			$this->dtgDataDevMandiris->MetaAddColumn('NamaKursus');
			$this->dtgDataDevMandiris->MetaAddColumn('JenisKursus');
			$this->dtgDataDevMandiris->MetaAddColumn('Penyelenggara');
			$this->dtgDataDevMandiris->MetaAddColumn('Alamat');
			$this->dtgDataDevMandiris->MetaAddColumn('TglMulai');
			$this->dtgDataDevMandiris->MetaAddColumn('TglSelesai');
			$this->dtgDataDevMandiris->MetaAddColumn('NoSertifikat');
			$this->dtgDataDevMandiris->MetaAddColumn('Predikat');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('DataDevMandiri');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new DataDevMandiriEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new DataDevMandiriEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>