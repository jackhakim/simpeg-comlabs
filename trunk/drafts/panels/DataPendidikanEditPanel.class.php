<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the DataPendidikan class.  It uses the code-generated
	 * DataPendidikanMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a DataPendidikan columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_pendidikan_edit.php AND
	 * data_pendidikan_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class DataPendidikanEditPanel extends QPanel {
		// Local instance of the DataPendidikanMetaControl
		/**
		 * @var DataPendidikanMetaControl
		 */
		protected $mctDataPendidikan;

		// Controls for DataPendidikan's Data Fields
		public $lstNipObject;
		public $txtJenjang;
		public $txtNamaTempat;
		public $txtTahunMasuk;
		public $txtTahunLulus;
		public $txtGelar;
		public $txtNoIjasah;

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
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/DataPendidikanEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the DataPendidikanMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctDataPendidikan = DataPendidikanMetaControl::Create($this, $strNip);

			// Call MetaControl's methods to create qcontrols based on DataPendidikan's data fields
			$this->lstNipObject = $this->mctDataPendidikan->lstNipObject_Create();
			$this->txtJenjang = $this->mctDataPendidikan->txtJenjang_Create();
			$this->txtNamaTempat = $this->mctDataPendidikan->txtNamaTempat_Create();
			$this->txtTahunMasuk = $this->mctDataPendidikan->txtTahunMasuk_Create();
			$this->txtTahunLulus = $this->mctDataPendidikan->txtTahunLulus_Create();
			$this->txtGelar = $this->mctDataPendidikan->txtGelar_Create();
			$this->txtNoIjasah = $this->mctDataPendidikan->txtNoIjasah_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('DataPendidikan'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctDataPendidikan->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the DataPendidikanMetaControl
			$this->mctDataPendidikan->SaveDataPendidikan();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the DataPendidikanMetaControl
			$this->mctDataPendidikan->DeleteDataPendidikan();
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