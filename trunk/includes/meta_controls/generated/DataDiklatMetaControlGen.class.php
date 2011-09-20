<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataDiklat class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataDiklat object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataDiklatMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataDiklat $DataDiklat the actual DataDiklat data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $NamaPelatihanControl
	 * @property-read QLabel $NamaPelatihanLabel
	 * @property QTextBox $JenisPelatihanControl
	 * @property-read QLabel $JenisPelatihanLabel
	 * @property QDateTimePicker $TglMulaiControl
	 * @property-read QLabel $TglMulaiLabel
	 * @property QDateTimePicker $TglSelesaiControl
	 * @property-read QLabel $TglSelesaiLabel
	 * @property QTextBox $StatusLulusControl
	 * @property-read QLabel $StatusLulusLabel
	 * @property QTextBox $PredikatControl
	 * @property-read QLabel $PredikatLabel
	 * @property QIntegerTextBox $RangkingControl
	 * @property-read QLabel $RangkingLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataDiklatMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataDiklat objDataDiklat
		 * @access protected
		 */
		protected $objDataDiklat;
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

		// Controls that allow the editing of DataDiklat's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
		/**
		 * @var QTextBox txtNamaPelatihan
		 * @access protected
		 */
		protected $txtNamaPelatihan;
		/**
		 * @var QTextBox txtJenisPelatihan
		 * @access protected
		 */
		protected $txtJenisPelatihan;
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
		 * @var QTextBox txtStatusLulus
		 * @access protected
		 */
		protected $txtStatusLulus;
		/**
		 * @var QTextBox txtPredikat
		 * @access protected
		 */
		protected $txtPredikat;
		/**
		 * @var QIntegerTextBox txtRangking
		 * @access protected
		 */
		protected $txtRangking;

		// Controls that allow the viewing of DataDiklat's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblNamaPelatihan
		 * @access protected
		 */
		protected $lblNamaPelatihan;
		/**
		 * @var QLabel lblJenisPelatihan
		 * @access protected
		 */
		protected $lblJenisPelatihan;
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
		 * @var QLabel lblStatusLulus
		 * @access protected
		 */
		protected $lblStatusLulus;
		/**
		 * @var QLabel lblPredikat
		 * @access protected
		 */
		protected $lblPredikat;
		/**
		 * @var QLabel lblRangking
		 * @access protected
		 */
		protected $lblRangking;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataDiklatMetaControl to edit a single DataDiklat object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataDiklat object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataDiklatMetaControl
		 * @param DataDiklat $objDataDiklat new or existing DataDiklat object
		 */
		 public function __construct($objParentObject, DataDiklat $objDataDiklat) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataDiklatMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataDiklat object
			$this->objDataDiklat = $objDataDiklat;

			// Figure out if we're Editing or Creating New
			if ($this->objDataDiklat->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataDiklatMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataDiklat object creation - defaults to CreateOrEdit
 		 * @return DataDiklatMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataDiklat = DataDiklat::Load($strNip);

				// DataDiklat was found -- return it!
				if ($objDataDiklat)
					return new DataDiklatMetaControl($objParentObject, $objDataDiklat);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataDiklat object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataDiklatMetaControl($objParentObject, new DataDiklat());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataDiklatMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataDiklat object creation - defaults to CreateOrEdit
		 * @return DataDiklatMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataDiklatMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataDiklatMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataDiklat object creation - defaults to CreateOrEdit
		 * @return DataDiklatMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataDiklatMetaControl::Create($objParentObject, $strNip, $intCreateType);
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
				if (($this->objDataDiklat->NipObject) && ($this->objDataDiklat->NipObject->Nip == $objNipObject->Nip))
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
			$this->lblNip->Text = ($this->objDataDiklat->NipObject) ? $this->objDataDiklat->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtNamaPelatihan
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNamaPelatihan_Create($strControlId = null) {
			$this->txtNamaPelatihan = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNamaPelatihan->Name = QApplication::Translate('Nama Pelatihan');
			$this->txtNamaPelatihan->Text = $this->objDataDiklat->NamaPelatihan;
			$this->txtNamaPelatihan->MaxLength = DataDiklat::NamaPelatihanMaxLength;
			return $this->txtNamaPelatihan;
		}

		/**
		 * Create and setup QLabel lblNamaPelatihan
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNamaPelatihan_Create($strControlId = null) {
			$this->lblNamaPelatihan = new QLabel($this->objParentObject, $strControlId);
			$this->lblNamaPelatihan->Name = QApplication::Translate('Nama Pelatihan');
			$this->lblNamaPelatihan->Text = $this->objDataDiklat->NamaPelatihan;
			return $this->lblNamaPelatihan;
		}

		/**
		 * Create and setup QTextBox txtJenisPelatihan
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtJenisPelatihan_Create($strControlId = null) {
			$this->txtJenisPelatihan = new QTextBox($this->objParentObject, $strControlId);
			$this->txtJenisPelatihan->Name = QApplication::Translate('Jenis Pelatihan');
			$this->txtJenisPelatihan->Text = $this->objDataDiklat->JenisPelatihan;
			$this->txtJenisPelatihan->MaxLength = DataDiklat::JenisPelatihanMaxLength;
			return $this->txtJenisPelatihan;
		}

		/**
		 * Create and setup QLabel lblJenisPelatihan
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblJenisPelatihan_Create($strControlId = null) {
			$this->lblJenisPelatihan = new QLabel($this->objParentObject, $strControlId);
			$this->lblJenisPelatihan->Name = QApplication::Translate('Jenis Pelatihan');
			$this->lblJenisPelatihan->Text = $this->objDataDiklat->JenisPelatihan;
			return $this->lblJenisPelatihan;
		}

		/**
		 * Create and setup QDateTimePicker calTglMulai
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTglMulai_Create($strControlId = null) {
			$this->calTglMulai = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTglMulai->Name = QApplication::Translate('Tgl Mulai');
			$this->calTglMulai->DateTime = $this->objDataDiklat->TglMulai;
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
			$this->lblTglMulai->Text = sprintf($this->objDataDiklat->TglMulai) ? $this->objDataDiklat->TglMulai->qFormat($this->strTglMulaiDateTimeFormat) : null;
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
			$this->calTglSelesai->DateTime = $this->objDataDiklat->TglSelesai;
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
			$this->lblTglSelesai->Text = sprintf($this->objDataDiklat->TglSelesai) ? $this->objDataDiklat->TglSelesai->qFormat($this->strTglSelesaiDateTimeFormat) : null;
			return $this->lblTglSelesai;
		}

		protected $strTglSelesaiDateTimeFormat;


		/**
		 * Create and setup QTextBox txtStatusLulus
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtStatusLulus_Create($strControlId = null) {
			$this->txtStatusLulus = new QTextBox($this->objParentObject, $strControlId);
			$this->txtStatusLulus->Name = QApplication::Translate('Status Lulus');
			$this->txtStatusLulus->Text = $this->objDataDiklat->StatusLulus;
			return $this->txtStatusLulus;
		}

		/**
		 * Create and setup QLabel lblStatusLulus
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblStatusLulus_Create($strControlId = null) {
			$this->lblStatusLulus = new QLabel($this->objParentObject, $strControlId);
			$this->lblStatusLulus->Name = QApplication::Translate('Status Lulus');
			$this->lblStatusLulus->Text = $this->objDataDiklat->StatusLulus;
			return $this->lblStatusLulus;
		}

		/**
		 * Create and setup QTextBox txtPredikat
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPredikat_Create($strControlId = null) {
			$this->txtPredikat = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPredikat->Name = QApplication::Translate('Predikat');
			$this->txtPredikat->Text = $this->objDataDiklat->Predikat;
			$this->txtPredikat->MaxLength = DataDiklat::PredikatMaxLength;
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
			$this->lblPredikat->Text = $this->objDataDiklat->Predikat;
			return $this->lblPredikat;
		}

		/**
		 * Create and setup QIntegerTextBox txtRangking
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtRangking_Create($strControlId = null) {
			$this->txtRangking = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtRangking->Name = QApplication::Translate('Rangking');
			$this->txtRangking->Text = $this->objDataDiklat->Rangking;
			return $this->txtRangking;
		}

		/**
		 * Create and setup QLabel lblRangking
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblRangking_Create($strControlId = null, $strFormat = null) {
			$this->lblRangking = new QLabel($this->objParentObject, $strControlId);
			$this->lblRangking->Name = QApplication::Translate('Rangking');
			$this->lblRangking->Text = $this->objDataDiklat->Rangking;
			$this->lblRangking->Format = $strFormat;
			return $this->lblRangking;
		}



		/**
		 * Refresh this MetaControl with Data from the local DataDiklat object.
		 * @param boolean $blnReload reload DataDiklat from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataDiklat->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataDiklat->NipObject) && ($this->objDataDiklat->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataDiklat->NipObject) ? $this->objDataDiklat->NipObject->__toString() : null;

			if ($this->txtNamaPelatihan) $this->txtNamaPelatihan->Text = $this->objDataDiklat->NamaPelatihan;
			if ($this->lblNamaPelatihan) $this->lblNamaPelatihan->Text = $this->objDataDiklat->NamaPelatihan;

			if ($this->txtJenisPelatihan) $this->txtJenisPelatihan->Text = $this->objDataDiklat->JenisPelatihan;
			if ($this->lblJenisPelatihan) $this->lblJenisPelatihan->Text = $this->objDataDiklat->JenisPelatihan;

			if ($this->calTglMulai) $this->calTglMulai->DateTime = $this->objDataDiklat->TglMulai;
			if ($this->lblTglMulai) $this->lblTglMulai->Text = sprintf($this->objDataDiklat->TglMulai) ? $this->objDataDiklat->TglMulai->qFormat($this->strTglMulaiDateTimeFormat) : null;

			if ($this->calTglSelesai) $this->calTglSelesai->DateTime = $this->objDataDiklat->TglSelesai;
			if ($this->lblTglSelesai) $this->lblTglSelesai->Text = sprintf($this->objDataDiklat->TglSelesai) ? $this->objDataDiklat->TglSelesai->qFormat($this->strTglSelesaiDateTimeFormat) : null;

			if ($this->txtStatusLulus) $this->txtStatusLulus->Text = $this->objDataDiklat->StatusLulus;
			if ($this->lblStatusLulus) $this->lblStatusLulus->Text = $this->objDataDiklat->StatusLulus;

			if ($this->txtPredikat) $this->txtPredikat->Text = $this->objDataDiklat->Predikat;
			if ($this->lblPredikat) $this->lblPredikat->Text = $this->objDataDiklat->Predikat;

			if ($this->txtRangking) $this->txtRangking->Text = $this->objDataDiklat->Rangking;
			if ($this->lblRangking) $this->lblRangking->Text = $this->objDataDiklat->Rangking;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATADIKLAT OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataDiklat instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataDiklat() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataDiklat->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtNamaPelatihan) $this->objDataDiklat->NamaPelatihan = $this->txtNamaPelatihan->Text;
				if ($this->txtJenisPelatihan) $this->objDataDiklat->JenisPelatihan = $this->txtJenisPelatihan->Text;
				if ($this->calTglMulai) $this->objDataDiklat->TglMulai = $this->calTglMulai->DateTime;
				if ($this->calTglSelesai) $this->objDataDiklat->TglSelesai = $this->calTglSelesai->DateTime;
				if ($this->txtStatusLulus) $this->objDataDiklat->StatusLulus = $this->txtStatusLulus->Text;
				if ($this->txtPredikat) $this->objDataDiklat->Predikat = $this->txtPredikat->Text;
				if ($this->txtRangking) $this->objDataDiklat->Rangking = $this->txtRangking->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataDiklat object
				$this->objDataDiklat->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataDiklat instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataDiklat() {
			$this->objDataDiklat->Delete();
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
				case 'DataDiklat': return $this->objDataDiklat;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataDiklat fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'NamaPelatihanControl':
					if (!$this->txtNamaPelatihan) return $this->txtNamaPelatihan_Create();
					return $this->txtNamaPelatihan;
				case 'NamaPelatihanLabel':
					if (!$this->lblNamaPelatihan) return $this->lblNamaPelatihan_Create();
					return $this->lblNamaPelatihan;
				case 'JenisPelatihanControl':
					if (!$this->txtJenisPelatihan) return $this->txtJenisPelatihan_Create();
					return $this->txtJenisPelatihan;
				case 'JenisPelatihanLabel':
					if (!$this->lblJenisPelatihan) return $this->lblJenisPelatihan_Create();
					return $this->lblJenisPelatihan;
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
				case 'StatusLulusControl':
					if (!$this->txtStatusLulus) return $this->txtStatusLulus_Create();
					return $this->txtStatusLulus;
				case 'StatusLulusLabel':
					if (!$this->lblStatusLulus) return $this->lblStatusLulus_Create();
					return $this->lblStatusLulus;
				case 'PredikatControl':
					if (!$this->txtPredikat) return $this->txtPredikat_Create();
					return $this->txtPredikat;
				case 'PredikatLabel':
					if (!$this->lblPredikat) return $this->lblPredikat_Create();
					return $this->lblPredikat;
				case 'RangkingControl':
					if (!$this->txtRangking) return $this->txtRangking_Create();
					return $this->txtRangking;
				case 'RangkingLabel':
					if (!$this->lblRangking) return $this->lblRangking_Create();
					return $this->lblRangking;
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
					// Controls that point to DataDiklat fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
					case 'NamaPelatihanControl':
						return ($this->txtNamaPelatihan = QType::Cast($mixValue, 'QControl'));
					case 'JenisPelatihanControl':
						return ($this->txtJenisPelatihan = QType::Cast($mixValue, 'QControl'));
					case 'TglMulaiControl':
						return ($this->calTglMulai = QType::Cast($mixValue, 'QControl'));
					case 'TglSelesaiControl':
						return ($this->calTglSelesai = QType::Cast($mixValue, 'QControl'));
					case 'StatusLulusControl':
						return ($this->txtStatusLulus = QType::Cast($mixValue, 'QControl'));
					case 'PredikatControl':
						return ($this->txtPredikat = QType::Cast($mixValue, 'QControl'));
					case 'RangkingControl':
						return ($this->txtRangking = QType::Cast($mixValue, 'QControl'));
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