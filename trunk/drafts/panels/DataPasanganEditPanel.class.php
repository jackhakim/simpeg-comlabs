<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the DataPasangan class.  It uses the code-generated
	 * DataPasanganMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a DataPasangan columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_pasangan_edit.php AND
	 * data_pasangan_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class DataPasanganEditPanel extends QPanel {
		// Local instance of the DataPasanganMetaControl
		/**
		 * @var DataPasanganMetaControl
		 */
		protected $mctDataPasangan;

		// Controls for DataPasangan's Data Fields
		public $lstNipObject;
		public $txtNamaPasangan;
		public $txtTempatLahir;
		public $calTglLahir;
		public $txtAgama;
		public $txtStatusNikah;
		public $txtJumTanggungan;
		public $txtAlamat;
		public $txtNamaBapak;
		public $txtNamaIbu;
		public $txtPendidikanTerakhir;
		public $calTglNikah;
		public $calTglCerai;

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
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/DataPasanganEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the DataPasanganMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctDataPasangan = DataPasanganMetaControl::Create($this, $strNip);

			// Call MetaControl's methods to create qcontrols based on DataPasangan's data fields
			$this->lstNipObject = $this->mctDataPasangan->lstNipObject_Create();
			$this->txtNamaPasangan = $this->mctDataPasangan->txtNamaPasangan_Create();
			$this->txtTempatLahir = $this->mctDataPasangan->txtTempatLahir_Create();
			$this->calTglLahir = $this->mctDataPasangan->calTglLahir_Create();
			$this->txtAgama = $this->mctDataPasangan->txtAgama_Create();
			$this->txtStatusNikah = $this->mctDataPasangan->txtStatusNikah_Create();
			$this->txtJumTanggungan = $this->mctDataPasangan->txtJumTanggungan_Create();
			$this->txtAlamat = $this->mctDataPasangan->txtAlamat_Create();
			$this->txtNamaBapak = $this->mctDataPasangan->txtNamaBapak_Create();
			$this->txtNamaIbu = $this->mctDataPasangan->txtNamaIbu_Create();
			$this->txtPendidikanTerakhir = $this->mctDataPasangan->txtPendidikanTerakhir_Create();
			$this->calTglNikah = $this->mctDataPasangan->calTglNikah_Create();
			$this->calTglCerai = $this->mctDataPasangan->calTglCerai_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('DataPasangan'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctDataPasangan->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the DataPasanganMetaControl
			$this->mctDataPasangan->SaveDataPasangan();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the DataPasanganMetaControl
			$this->mctDataPasangan->DeleteDataPasangan();
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