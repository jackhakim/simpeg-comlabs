<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the DataPenghargaanIn class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of DataPenghargaanIn objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this DataPenghargaanInListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 *
	 */
	class DataPenghargaanInListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list DataPenghargaanIns
		/**
		 * @var DataPenghargaanInDataGrid
		 */
		public $dtgDataPenghargaanIns;

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
			$this->Template = __DOCROOT__ . __PANEL_DRAFTS__ . '/DataPenghargaanInListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgDataPenghargaanIns = new DataPenghargaanInDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataPenghargaanIns->CssClass = 'datagrid';
			$this->dtgDataPenghargaanIns->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataPenghargaanIns->Paginator = new QPaginator($this->dtgDataPenghargaanIns);
			$this->dtgDataPenghargaanIns->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgDataPenghargaanIns->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_penghargaan_in's properties, or you
			// can traverse down QQN::data_penghargaan_in() to display fields that are down the hierarchy)
			$this->dtgDataPenghargaanIns->MetaAddColumn(QQN::DataPenghargaanIn()->NipObject);
			$this->dtgDataPenghargaanIns->MetaAddColumn('JenisPenghargaan');
			$this->dtgDataPenghargaanIns->MetaAddColumn('NoSk');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('DataPenghargaanIn');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new DataPenghargaanInEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new DataPenghargaanInEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>