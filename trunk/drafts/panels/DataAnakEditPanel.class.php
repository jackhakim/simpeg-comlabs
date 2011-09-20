<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the DataAnak class.  It uses the code-generated
	 * DataAnakMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a DataAnak columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_anak_edit.php AND
	 * data_anak_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class DataAnakEditPanel extends QPanel {
		// Local instance of the DataAnakMetaControl
		/**
		 * @var DataAnakMetaControl
		 */
		protected $mctDataAnak;

		// Controls for DataAnak's Data Fields
		public $lstNipObject;
		public $txtNamaAnak;
		public $txtTempatLahir;
		public $calTglLahir;
		public $txtStatusAnak;
		public $txtAgama;
		public $txtPendidikan;

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
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/DataAnakEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the DataAnakMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctDataAnak = DataAnakMetaControl::Create($this, $strNip);

			// Call MetaControl's methods to create qcontrols based on DataAnak's data fields
			$this->lstNipObject = $this->mctDataAnak->lstNipObject_Create();
			$this->txtNamaAnak = $this->mctDataAnak->txtNamaAnak_Create();
			$this->txtTempatLahir = $this->mctDataAnak->txtTempatLahir_Create();
			$this->calTglLahir = $this->mctDataAnak->calTglLahir_Create();
			$this->txtStatusAnak = $this->mctDataAnak->txtStatusAnak_Create();
			$this->txtAgama = $this->mctDataAnak->txtAgama_Create();
			$this->txtPendidikan = $this->mctDataAnak->txtPendidikan_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('DataAnak'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctDataAnak->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the DataAnakMetaControl
			$this->mctDataAnak->SaveDataAnak();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the DataAnakMetaControl
			$this->mctDataAnak->DeleteDataAnak();
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