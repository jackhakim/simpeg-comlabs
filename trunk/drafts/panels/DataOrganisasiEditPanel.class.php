<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the DataOrganisasi class.  It uses the code-generated
	 * DataOrganisasiMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a DataOrganisasi columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_organisasi_edit.php AND
	 * data_organisasi_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class DataOrganisasiEditPanel extends QPanel {
		// Local instance of the DataOrganisasiMetaControl
		/**
		 * @var DataOrganisasiMetaControl
		 */
		protected $mctDataOrganisasi;

		// Controls for DataOrganisasi's Data Fields
		public $lstNipObject;
		public $txtNamaOrg;
		public $txtJenis;
		public $txtAlamat;
		public $txtThnMasuk;
		public $txtThnKeluar;
		public $txtHonor;
		public $txtJabatan;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		/**
		 * @var QButton Save
		 */
		public $btnSave;
		/**
		 * @var QButton Delete
		 */
		public $btnDelete;
		/**
		 * @var QButton Cancel
		 */
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $strNip = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/DataOrganisasiEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the DataOrganisasiMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctDataOrganisasi = DataOrganisasiMetaControl::Create($this, $strNip);

			// Call MetaControl's methods to create qcontrols based on DataOrganisasi's data fields
			$this->lstNipObject = $this->mctDataOrganisasi->lstNipObject_Create();
			$this->txtNamaOrg = $this->mctDataOrganisasi->txtNamaOrg_Create();
			$this->txtJenis = $this->mctDataOrganisasi->txtJenis_Create();
			$this->txtAlamat = $this->mctDataOrganisasi->txtAlamat_Create();
			$this->txtThnMasuk = $this->mctDataOrganisasi->txtThnMasuk_Create();
			$this->txtThnKeluar = $this->mctDataOrganisasi->txtThnKeluar_Create();
			$this->txtHonor = $this->mctDataOrganisasi->txtHonor_Create();
			$this->txtJabatan = $this->mctDataOrganisasi->txtJabatan_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('DataOrganisasi'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctDataOrganisasi->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the DataOrganisasiMetaControl
			$this->mctDataOrganisasi->SaveDataOrganisasi();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the DataOrganisasiMetaControl
			$this->mctDataOrganisasi->DeleteDataOrganisasi();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}

		
	}
?>