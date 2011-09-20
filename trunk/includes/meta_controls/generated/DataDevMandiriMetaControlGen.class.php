<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataDevMandiri class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataDevMandiri object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataDevMandiriMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataDevMandiri $DataDevMandiri the actual DataDevMandiri data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $NamaKursusControl
	 * @property-read QLabel $NamaKursusLabel
	 * @property QTextBox $JenisKursusControl
	 * @property-read QLabel $JenisKursusLabel
	 * @property QTextBox $PenyelenggaraControl
	 * @property-read QLabel $PenyelenggaraLabel
	 * @property QTextBox $AlamatControl
	 * @property-read QLabel $AlamatLabel
	 * @property QDateTimePicker $TglMulaiControl
	 * @property-read QLabel $TglMulaiLabel
	 * @property QDateTimePicker $TglSelesaiControl
	 * @property-read QLabel $TglSelesaiLabel
	 * @property QTextBox $NoSertifikatControl
	 * @property-read QLabel $NoSertifikatLabel
	 * @property QTextBox $PredikatControl
	 * @property-read QLabel $PredikatLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataDevMandiriMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataDevMandiri objDataDevMandiri
		 * @access protected
		 */
		protected $objDataDevMandiri;
		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;
		/**
		 * @var string strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that allow the editing of DataDevMandiri's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
		/**
		 * @var QTextBox txtNamaKursus
		 * @access protected
		 */
		protected $txtNamaKursus;
		/**
		 * @var QTextBox txtJenisKursus
		 * @access protected
		 */
		protected $txtJenisKursus;
		/**
		 * @var QTextBox txtPenyelenggara
		 * @access protected
		 */
		protected $txtPenyelenggara;
		/**
		 * @var QTextBox txtAlamat
		 * @access protected
		 */
		protected $txtAlamat;
		/**
		 * @var QDateTimePicker calTglMulai
		 * @access protected
		 */
		protected $calTglMulai;
		/**
		 * @var QDateTimePicker calTglSelesai
		 * @access protected
		 */
		protected $calTglSelesai;
		/**
		 * @var QTextBox txtNoSertifikat
		 * @access protected
		 */
		protected $txtNoSertifikat;
		/**
		 * @var QTextBox txtPredikat
		 * @access protected
		 */
		protected $txtPredikat;

		// Controls that allow the viewing of DataDevMandiri's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblNamaKursus
		 * @access protected
		 */
		protected $lblNamaKursus;
		/**
		 * @var QLabel lblJenisKursus
		 * @access protected
		 */
		protected $lblJenisKursus;
		/**
		 * @var QLabel lblPenyelenggara
		 * @access protected
		 */
		protected $lblPenyelenggara;
		/**
		 * @var QLabel lblAlamat
		 * @access protected
		 */
		protected $lblAlamat;
		/**
		 * @var QLabel lblTglMulai
		 * @access protected
		 */
		protected $lblTglMulai;
		/**
		 * @var QLabel lblTglSelesai
		 * @access protected
		 */
		protected $lblTglSelesai;
		/**
		 * @var QLabel lblNoSertifikat
		 * @access protected
		 */
		protected $lblNoSertifikat;
		/**
		 * @var QLabel lblPredikat
		 * @access protected
		 */
		protected $lblPredikat;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataDevMandiriMetaControl to edit a single DataDevMandiri object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataDevMandiri object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataDevMandiriMetaControl
		 * @param DataDevMandiri $objDataDevMandiri new or existing DataDevMandiri object
		 */
		 public function __construct($objParentObject, DataDevMandiri $objDataDevMandiri) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataDevMandiriMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataDevMandiri object
			$this->objDataDevMandiri = $objDataDevMandiri;

			// Figure out if we're Editing or Creating New
			if ($this->objDataDevMandiri->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to
		 * edit, or if we are also allowed to create a new one, etc.
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataDevMandiriMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataDevMandiri object creation - defaults to CreateOrEdit
 		 * @return DataDevMandiriMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataDevMandiri = DataDevMandiri::Load($strNip);

				// DataDevMandiri was found -- return it!
				if ($objDataDevMandiri)
					return new DataDevMandiriMetaControl($objParentObject, $objDataDevMandiri);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataDevMandiri object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataDevMandiriMetaControl($objParentObject, new DataDevMandiri());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataDevMandiriMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataDevMandiri object creation - defaults to CreateOrEdit
		 * @return DataDevMandiriMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataDevMandiriMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataDevMandiriMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataDevMandiri object creation - defaults to CreateOrEdit
		 * @return DataDevMandiriMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataDevMandiriMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstNipObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstNipObject_Create($strControlId = null) {
			$this->lstNipObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstNipObject->Name = QApplication::Translate('Nip Object');
			$this->lstNipObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objNipObjectArray = DataPegawai::LoadAll();
			if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
				$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
				if (($this->objDataDevMandiri->NipObject) && ($this->objDataDevMandiri->NipObject->Nip == $objNipObject->Nip))
					$objListItem->Selected = true;
				$this->lstNipObject->AddItem($objListItem);
			}
			return $this->lstNipObject;
		}

		/**
		 * Create and setup QLabel lblNip
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNip_Create($strControlId = null) {
			$this->lblNip = new QLabel($this->objParentObject, $strControlId);
			$this->lblNip->Name = QApplication::Translate('Nip Object');
			$this->lblNip->Text = ($this->objDataDevMandiri->NipObject) ? $this->objDataDevMandiri->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtNamaKursus
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNamaKursus_Create($strControlId = null) {
			$this->txtNamaKursus = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNamaKursus->Name = QApplication::Translate('Nama Kursus');
			$this->txtNamaKursus->Text = $this->objDataDevMandiri->NamaKursus;
			$this->txtNamaKursus->MaxLength = DataDevMandiri::NamaKursusMaxLength;
			return $this->txtNamaKursus;
		}

		/**
		 * Create and setup QLabel lblNamaKursus
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNamaKursus_Create($strControlId = null) {
			$this->lblNamaKursus = new QLabel($this->objParentObject, $strControlId);
			$this->lblNamaKursus->Name = QApplication::Translate('Nama Kursus');
			$this->lblNamaKursus->Text = $this->objDataDevMandiri->NamaKursus;
			return $this->lblNamaKursus;
		}

		/**
		 * Create and setup QTextBox txtJenisKursus
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtJenisKursus_Create($strControlId = null) {
			$this->txtJenisKursus = new QTextBox($this->objParentObject, $strControlId);
			$this->txtJenisKursus->Name = QApplication::Translate('Jenis Kursus');
			$this->txtJenisKursus->Text = $this->objDataDevMandiri->JenisKursus;
			$this->txtJenisKursus->MaxLength = DataDevMandiri::JenisKursusMaxLength;
			return $this->txtJenisKursus;
		}

		/**
		 * Create and setup QLabel lblJenisKursus
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblJenisKursus_Create($strControlId = null) {
			$this->lblJenisKursus = new QLabel($this->objParentObject, $strControlId);
			$this->lblJenisKursus->Name = QApplication::Translate('Jenis Kursus');
			$this->lblJenisKursus->Text = $this->objDataDevMandiri->JenisKursus;
			return $this->lblJenisKursus;
		}

		/**
		 * Create and setup QTextBox txtPenyelenggara
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPenyelenggara_Create($strControlId = null) {
			$this->txtPenyelenggara = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPenyelenggara->Name = QApplication::Translate('Penyelenggara');
			$this->txtPenyelenggara->Text = $this->objDataDevMandiri->Penyelenggara;
			$this->txtPenyelenggara->MaxLength = DataDevMandiri::PenyelenggaraMaxLength;
			return $this->txtPenyelenggara;
		}

		/**
		 * Create and setup QLabel lblPenyelenggara
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPenyelenggara_Create($strControlId = null) {
			$this->lblPenyelenggara = new QLabel($this->objParentObject, $strControlId);
			$this->lblPenyelenggara->Name = QApplication::Translate('Penyelenggara');
			$this->lblPenyelenggara->Text = $this->objDataDevMandiri->Penyelenggara;
			return $this->lblPenyelenggara;
		}

		/**
		 * Create and setup QTextBox txtAlamat
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAlamat_Create($strControlId = null) {
			$this->txtAlamat = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAlamat->Name = QApplication::Translate('Alamat');
			$this->txtAlamat->Text = $this->objDataDevMandiri->Alamat;
			$this->txtAlamat->TextMode = QTextMode::MultiLine;
			return $this->txtAlamat;
		}

		/**
		 * Create and setup QLabel lblAlamat
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAlamat_Create($strControlId = null) {
			$this->lblAlamat = new QLabel($this->objParentObject, $strControlId);
			$this->lblAlamat->Name = QApplication::Translate('Alamat');
			$this->lblAlamat->Text = $this->objDataDevMandiri->Alamat;
			return $this->lblAlamat;
		}

		/**
		 * Create and setup QDateTimePicker calTglMulai
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTglMulai_Create($strControlId = null) {
			$this->calTglMulai = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTglMulai->Name = QApplication::Translate('Tgl Mulai');
			$this->calTglMulai->DateTime = $this->objDataDevMandiri->TglMulai;
			$this->calTglMulai->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calTglMulai;
		}

		/**
		 * Create and setup QLabel lblTglMulai
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTglMulai_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTglMulai = new QLabel($this->objParentObject, $strControlId);
			$this->lblTglMulai->Name = QApplication::Translate('Tgl Mulai');
			$this->strTglMulaiDateTimeFormat = $strDateTimeFormat;
			$this->lblTglMulai->Text = sprintf($this->objDataDevMandiri->TglMulai) ? $this->objDataDevMandiri->TglMulai->qFormat($this->strTglMulaiDateTimeFormat) : null;
			return $this->lblTglMulai;
		}

		protected $strTglMulaiDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calTglSelesai
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTglSelesai_Create($strControlId = null) {
			$this->calTglSelesai = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTglSelesai->Name = QApplication::Translate('Tgl Selesai');
			$this->calTglSelesai->DateTime = $this->objDataDevMandiri->TglSelesai;
			$this->calTglSelesai->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calTglSelesai;
		}

		/**
		 * Create and setup QLabel lblTglSelesai
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTglSelesai_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTglSelesai = new QLabel($this->objParentObject, $strControlId);
			$this->lblTglSelesai->Name = QApplication::Translate('Tgl Selesai');
			$this->strTglSelesaiDateTimeFormat = $strDateTimeFormat;
			$this->lblTglSelesai->Text = sprintf($this->objDataDevMandiri->TglSelesai) ? $this->objDataDevMandiri->TglSelesai->qFormat($this->strTglSelesaiDateTimeFormat) : null;
			return $this->lblTglSelesai;
		}

		protected $strTglSelesaiDateTimeFormat;


		/**
		 * Create and setup QTextBox txtNoSertifikat
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNoSertifikat_Create($strControlId = null) {
			$this->txtNoSertifikat = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNoSertifikat->Name = QApplication::Translate('No Sertifikat');
			$this->txtNoSertifikat->Text = $this->objDataDevMandiri->NoSertifikat;
			$this->txtNoSertifikat->MaxLength = DataDevMandiri::NoSertifikatMaxLength;
			return $this->txtNoSertifikat;
		}

		/**
		 * Create and setup QLabel lblNoSertifikat
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNoSertifikat_Create($strControlId = null) {
			$this->lblNoSertifikat = new QLabel($this->objParentObject, $strControlId);
			$this->lblNoSertifikat->Name = QApplication::Translate('No Sertifikat');
			$this->lblNoSertifikat->Text = $this->objDataDevMandiri->NoSertifikat;
			return $this->lblNoSertifikat;
		}

		/**
		 * Create and setup QTextBox txtPredikat
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPredikat_Create($strControlId = null) {
			$this->txtPredikat = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPredikat->Name = QApplication::Translate('Predikat');
			$this->txtPredikat->Text = $this->objDataDevMandiri->Predikat;
			$this->txtPredikat->MaxLength = DataDevMandiri::PredikatMaxLength;
			return $this->txtPredikat;
		}

		/**
		 * Create and setup QLabel lblPredikat
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPredikat_Create($strControlId = null) {
			$this->lblPredikat = new QLabel($this->objParentObject, $strControlId);
			$this->lblPredikat->Name = QApplication::Translate('Predikat');
			$this->lblPredikat->Text = $this->objDataDevMandiri->Predikat;
			return $this->lblPredikat;
		}



		/**
		 * Refresh this MetaControl with Data from the local DataDevMandiri object.
		 * @param boolean $blnReload reload DataDevMandiri from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataDevMandiri->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataDevMandiri->NipObject) && ($this->objDataDevMandiri->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataDevMandiri->NipObject) ? $this->objDataDevMandiri->NipObject->__toString() : null;

			if ($this->txtNamaKursus) $this->txtNamaKursus->Text = $this->objDataDevMandiri->NamaKursus;
			if ($this->lblNamaKursus) $this->lblNamaKursus->Text = $this->objDataDevMandiri->NamaKursus;

			if ($this->txtJenisKursus) $this->txtJenisKursus->Text = $this->objDataDevMandiri->JenisKursus;
			if ($this->lblJenisKursus) $this->lblJenisKursus->Text = $this->objDataDevMandiri->JenisKursus;

			if ($this->txtPenyelenggara) $this->txtPenyelenggara->Text = $this->objDataDevMandiri->Penyelenggara;
			if ($this->lblPenyelenggara) $this->lblPenyelenggara->Text = $this->objDataDevMandiri->Penyelenggara;

			if ($this->txtAlamat) $this->txtAlamat->Text = $this->objDataDevMandiri->Alamat;
			if ($this->lblAlamat) $this->lblAlamat->Text = $this->objDataDevMandiri->Alamat;

			if ($this->calTglMulai) $this->calTglMulai->DateTime = $this->objDataDevMandiri->TglMulai;
			if ($this->lblTglMulai) $this->lblTglMulai->Text = sprintf($this->objDataDevMandiri->TglMulai) ? $this->objDataDevMandiri->TglMulai->qFormat($this->strTglMulaiDateTimeFormat) : null;

			if ($this->calTglSelesai) $this->calTglSelesai->DateTime = $this->objDataDevMandiri->TglSelesai;
			if ($this->lblTglSelesai) $this->lblTglSelesai->Text = sprintf($this->objDataDevMandiri->TglSelesai) ? $this->objDataDevMandiri->TglSelesai->qFormat($this->strTglSelesaiDateTimeFormat) : null;

			if ($this->txtNoSertifikat) $this->txtNoSertifikat->Text = $this->objDataDevMandiri->NoSertifikat;
			if ($this->lblNoSertifikat) $this->lblNoSertifikat->Text = $this->objDataDevMandiri->NoSertifikat;

			if ($this->txtPredikat) $this->txtPredikat->Text = $this->objDataDevMandiri->Predikat;
			if ($this->lblPredikat) $this->lblPredikat->Text = $this->objDataDevMandiri->Predikat;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATADEVMANDIRI OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataDevMandiri instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataDevMandiri() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataDevMandiri->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtNamaKursus) $this->objDataDevMandiri->NamaKursus = $this->txtNamaKursus->Text;
				if ($this->txtJenisKursus) $this->objDataDevMandiri->JenisKursus = $this->txtJenisKursus->Text;
				if ($this->txtPenyelenggara) $this->objDataDevMandiri->Penyelenggara = $this->txtPenyelenggara->Text;
				if ($this->txtAlamat) $this->objDataDevMandiri->Alamat = $this->txtAlamat->Text;
				if ($this->calTglMulai) $this->objDataDevMandiri->TglMulai = $this->calTglMulai->DateTime;
				if ($this->calTglSelesai) $this->objDataDevMandiri->TglSelesai = $this->calTglSelesai->DateTime;
				if ($this->txtNoSertifikat) $this->objDataDevMandiri->NoSertifikat = $this->txtNoSertifikat->Text;
				if ($this->txtPredikat) $this->objDataDevMandiri->Predikat = $this->txtPredikat->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataDevMandiri object
				$this->objDataDevMandiri->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataDevMandiri instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataDevMandiri() {
			$this->objDataDevMandiri->Delete();
		}



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'DataDevMandiri': return $this->objDataDevMandiri;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataDevMandiri fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'NamaKursusControl':
					if (!$this->txtNamaKursus) return $this->txtNamaKursus_Create();
					return $this->txtNamaKursus;
				case 'NamaKursusLabel':
					if (!$this->lblNamaKursus) return $this->lblNamaKursus_Create();
					return $this->lblNamaKursus;
				case 'JenisKursusControl':
					if (!$this->txtJenisKursus) return $this->txtJenisKursus_Create();
					return $this->txtJenisKursus;
				case 'JenisKursusLabel':
					if (!$this->lblJenisKursus) return $this->lblJenisKursus_Create();
					return $this->lblJenisKursus;
				case 'PenyelenggaraControl':
					if (!$this->txtPenyelenggara) return $this->txtPenyelenggara_Create();
					return $this->txtPenyelenggara;
				case 'PenyelenggaraLabel':
					if (!$this->lblPenyelenggara) return $this->lblPenyelenggara_Create();
					return $this->lblPenyelenggara;
				case 'AlamatControl':
					if (!$this->txtAlamat) return $this->txtAlamat_Create();
					return $this->txtAlamat;
				case 'AlamatLabel':
					if (!$this->lblAlamat) return $this->lblAlamat_Create();
					return $this->lblAlamat;
				case 'TglMulaiControl':
					if (!$this->calTglMulai) return $this->calTglMulai_Create();
					return $this->calTglMulai;
				case 'TglMulaiLabel':
					if (!$this->lblTglMulai) return $this->lblTglMulai_Create();
					return $this->lblTglMulai;
				case 'TglSelesaiControl':
					if (!$this->calTglSelesai) return $this->calTglSelesai_Create();
					return $this->calTglSelesai;
				case 'TglSelesaiLabel':
					if (!$this->lblTglSelesai) return $this->lblTglSelesai_Create();
					return $this->lblTglSelesai;
				case 'NoSertifikatControl':
					if (!$this->txtNoSertifikat) return $this->txtNoSertifikat_Create();
					return $this->txtNoSertifikat;
				case 'NoSertifikatLabel':
					if (!$this->lblNoSertifikat) return $this->lblNoSertifikat_Create();
					return $this->lblNoSertifikat;
				case 'PredikatControl':
					if (!$this->txtPredikat) return $this->txtPredikat_Create();
					return $this->txtPredikat;
				case 'PredikatLabel':
					if (!$this->lblPredikat) return $this->lblPredikat_Create();
					return $this->lblPredikat;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					// Controls that point to DataDevMandiri fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
					case 'NamaKursusControl':
						return ($this->txtNamaKursus = QType::Cast($mixValue, 'QControl'));
					case 'JenisKursusControl':
						return ($this->txtJenisKursus = QType::Cast($mixValue, 'QControl'));
					case 'PenyelenggaraControl':
						return ($this->txtPenyelenggara = QType::Cast($mixValue, 'QControl'));
					case 'AlamatControl':
						return ($this->txtAlamat = QType::Cast($mixValue, 'QControl'));
					case 'TglMulaiControl':
						return ($this->calTglMulai = QType::Cast($mixValue, 'QControl'));
					case 'TglSelesaiControl':
						return ($this->calTglSelesai = QType::Cast($mixValue, 'QControl'));
					case 'NoSertifikatControl':
						return ($this->txtNoSertifikat = QType::Cast($mixValue, 'QControl'));
					case 'PredikatControl':
						return ($this->txtPredikat = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>