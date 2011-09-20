<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataPendidikan class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataPendidikan object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataPendidikanMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataPendidikan $DataPendidikan the actual DataPendidikan data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $JenjangControl
	 * @property-read QLabel $JenjangLabel
	 * @property QTextBox $NamaTempatControl
	 * @property-read QLabel $NamaTempatLabel
	 * @property QIntegerTextBox $TahunMasukControl
	 * @property-read QLabel $TahunMasukLabel
	 * @property QIntegerTextBox $TahunLulusControl
	 * @property-read QLabel $TahunLulusLabel
	 * @property QTextBox $GelarControl
	 * @property-read QLabel $GelarLabel
	 * @property QTextBox $NoIjasahControl
	 * @property-read QLabel $NoIjasahLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataPendidikanMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataPendidikan objDataPendidikan
		 * @access protected
		 */
		protected $objDataPendidikan;
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

		// Controls that allow the editing of DataPendidikan's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
		/**
		 * @var QTextBox txtJenjang
		 * @access protected
		 */
		protected $txtJenjang;
		/**
		 * @var QTextBox txtNamaTempat
		 * @access protected
		 */
		protected $txtNamaTempat;
		/**
		 * @var QIntegerTextBox txtTahunMasuk
		 * @access protected
		 */
		protected $txtTahunMasuk;
		/**
		 * @var QIntegerTextBox txtTahunLulus
		 * @access protected
		 */
		protected $txtTahunLulus;
		/**
		 * @var QTextBox txtGelar
		 * @access protected
		 */
		protected $txtGelar;
		/**
		 * @var QTextBox txtNoIjasah
		 * @access protected
		 */
		protected $txtNoIjasah;

		// Controls that allow the viewing of DataPendidikan's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblJenjang
		 * @access protected
		 */
		protected $lblJenjang;
		/**
		 * @var QLabel lblNamaTempat
		 * @access protected
		 */
		protected $lblNamaTempat;
		/**
		 * @var QLabel lblTahunMasuk
		 * @access protected
		 */
		protected $lblTahunMasuk;
		/**
		 * @var QLabel lblTahunLulus
		 * @access protected
		 */
		protected $lblTahunLulus;
		/**
		 * @var QLabel lblGelar
		 * @access protected
		 */
		protected $lblGelar;
		/**
		 * @var QLabel lblNoIjasah
		 * @access protected
		 */
		protected $lblNoIjasah;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataPendidikanMetaControl to edit a single DataPendidikan object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataPendidikan object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPendidikanMetaControl
		 * @param DataPendidikan $objDataPendidikan new or existing DataPendidikan object
		 */
		 public function __construct($objParentObject, DataPendidikan $objDataPendidikan) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataPendidikanMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataPendidikan object
			$this->objDataPendidikan = $objDataPendidikan;

			// Figure out if we're Editing or Creating New
			if ($this->objDataPendidikan->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPendidikanMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataPendidikan object creation - defaults to CreateOrEdit
 		 * @return DataPendidikanMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataPendidikan = DataPendidikan::Load($strNip);

				// DataPendidikan was found -- return it!
				if ($objDataPendidikan)
					return new DataPendidikanMetaControl($objParentObject, $objDataPendidikan);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataPendidikan object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataPendidikanMetaControl($objParentObject, new DataPendidikan());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPendidikanMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPendidikan object creation - defaults to CreateOrEdit
		 * @return DataPendidikanMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataPendidikanMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPendidikanMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPendidikan object creation - defaults to CreateOrEdit
		 * @return DataPendidikanMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataPendidikanMetaControl::Create($objParentObject, $strNip, $intCreateType);
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
				if (($this->objDataPendidikan->NipObject) && ($this->objDataPendidikan->NipObject->Nip == $objNipObject->Nip))
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
			$this->lblNip->Text = ($this->objDataPendidikan->NipObject) ? $this->objDataPendidikan->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtJenjang
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtJenjang_Create($strControlId = null) {
			$this->txtJenjang = new QTextBox($this->objParentObject, $strControlId);
			$this->txtJenjang->Name = QApplication::Translate('Jenjang');
			$this->txtJenjang->Text = $this->objDataPendidikan->Jenjang;
			$this->txtJenjang->MaxLength = DataPendidikan::JenjangMaxLength;
			return $this->txtJenjang;
		}

		/**
		 * Create and setup QLabel lblJenjang
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblJenjang_Create($strControlId = null) {
			$this->lblJenjang = new QLabel($this->objParentObject, $strControlId);
			$this->lblJenjang->Name = QApplication::Translate('Jenjang');
			$this->lblJenjang->Text = $this->objDataPendidikan->Jenjang;
			return $this->lblJenjang;
		}

		/**
		 * Create and setup QTextBox txtNamaTempat
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNamaTempat_Create($strControlId = null) {
			$this->txtNamaTempat = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNamaTempat->Name = QApplication::Translate('Nama Tempat');
			$this->txtNamaTempat->Text = $this->objDataPendidikan->NamaTempat;
			$this->txtNamaTempat->MaxLength = DataPendidikan::NamaTempatMaxLength;
			return $this->txtNamaTempat;
		}

		/**
		 * Create and setup QLabel lblNamaTempat
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNamaTempat_Create($strControlId = null) {
			$this->lblNamaTempat = new QLabel($this->objParentObject, $strControlId);
			$this->lblNamaTempat->Name = QApplication::Translate('Nama Tempat');
			$this->lblNamaTempat->Text = $this->objDataPendidikan->NamaTempat;
			return $this->lblNamaTempat;
		}

		/**
		 * Create and setup QIntegerTextBox txtTahunMasuk
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTahunMasuk_Create($strControlId = null) {
			$this->txtTahunMasuk = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTahunMasuk->Name = QApplication::Translate('Tahun Masuk');
			$this->txtTahunMasuk->Text = $this->objDataPendidikan->TahunMasuk;
			return $this->txtTahunMasuk;
		}

		/**
		 * Create and setup QLabel lblTahunMasuk
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTahunMasuk_Create($strControlId = null, $strFormat = null) {
			$this->lblTahunMasuk = new QLabel($this->objParentObject, $strControlId);
			$this->lblTahunMasuk->Name = QApplication::Translate('Tahun Masuk');
			$this->lblTahunMasuk->Text = $this->objDataPendidikan->TahunMasuk;
			$this->lblTahunMasuk->Format = $strFormat;
			return $this->lblTahunMasuk;
		}

		/**
		 * Create and setup QIntegerTextBox txtTahunLulus
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTahunLulus_Create($strControlId = null) {
			$this->txtTahunLulus = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTahunLulus->Name = QApplication::Translate('Tahun Lulus');
			$this->txtTahunLulus->Text = $this->objDataPendidikan->TahunLulus;
			return $this->txtTahunLulus;
		}

		/**
		 * Create and setup QLabel lblTahunLulus
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblTahunLulus_Create($strControlId = null, $strFormat = null) {
			$this->lblTahunLulus = new QLabel($this->objParentObject, $strControlId);
			$this->lblTahunLulus->Name = QApplication::Translate('Tahun Lulus');
			$this->lblTahunLulus->Text = $this->objDataPendidikan->TahunLulus;
			$this->lblTahunLulus->Format = $strFormat;
			return $this->lblTahunLulus;
		}

		/**
		 * Create and setup QTextBox txtGelar
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtGelar_Create($strControlId = null) {
			$this->txtGelar = new QTextBox($this->objParentObject, $strControlId);
			$this->txtGelar->Name = QApplication::Translate('Gelar');
			$this->txtGelar->Text = $this->objDataPendidikan->Gelar;
			$this->txtGelar->MaxLength = DataPendidikan::GelarMaxLength;
			return $this->txtGelar;
		}

		/**
		 * Create and setup QLabel lblGelar
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblGelar_Create($strControlId = null) {
			$this->lblGelar = new QLabel($this->objParentObject, $strControlId);
			$this->lblGelar->Name = QApplication::Translate('Gelar');
			$this->lblGelar->Text = $this->objDataPendidikan->Gelar;
			return $this->lblGelar;
		}

		/**
		 * Create and setup QTextBox txtNoIjasah
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNoIjasah_Create($strControlId = null) {
			$this->txtNoIjasah = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNoIjasah->Name = QApplication::Translate('No Ijasah');
			$this->txtNoIjasah->Text = $this->objDataPendidikan->NoIjasah;
			$this->txtNoIjasah->MaxLength = DataPendidikan::NoIjasahMaxLength;
			return $this->txtNoIjasah;
		}

		/**
		 * Create and setup QLabel lblNoIjasah
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNoIjasah_Create($strControlId = null) {
			$this->lblNoIjasah = new QLabel($this->objParentObject, $strControlId);
			$this->lblNoIjasah->Name = QApplication::Translate('No Ijasah');
			$this->lblNoIjasah->Text = $this->objDataPendidikan->NoIjasah;
			return $this->lblNoIjasah;
		}



		/**
		 * Refresh this MetaControl with Data from the local DataPendidikan object.
		 * @param boolean $blnReload reload DataPendidikan from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataPendidikan->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataPendidikan->NipObject) && ($this->objDataPendidikan->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataPendidikan->NipObject) ? $this->objDataPendidikan->NipObject->__toString() : null;

			if ($this->txtJenjang) $this->txtJenjang->Text = $this->objDataPendidikan->Jenjang;
			if ($this->lblJenjang) $this->lblJenjang->Text = $this->objDataPendidikan->Jenjang;

			if ($this->txtNamaTempat) $this->txtNamaTempat->Text = $this->objDataPendidikan->NamaTempat;
			if ($this->lblNamaTempat) $this->lblNamaTempat->Text = $this->objDataPendidikan->NamaTempat;

			if ($this->txtTahunMasuk) $this->txtTahunMasuk->Text = $this->objDataPendidikan->TahunMasuk;
			if ($this->lblTahunMasuk) $this->lblTahunMasuk->Text = $this->objDataPendidikan->TahunMasuk;

			if ($this->txtTahunLulus) $this->txtTahunLulus->Text = $this->objDataPendidikan->TahunLulus;
			if ($this->lblTahunLulus) $this->lblTahunLulus->Text = $this->objDataPendidikan->TahunLulus;

			if ($this->txtGelar) $this->txtGelar->Text = $this->objDataPendidikan->Gelar;
			if ($this->lblGelar) $this->lblGelar->Text = $this->objDataPendidikan->Gelar;

			if ($this->txtNoIjasah) $this->txtNoIjasah->Text = $this->objDataPendidikan->NoIjasah;
			if ($this->lblNoIjasah) $this->lblNoIjasah->Text = $this->objDataPendidikan->NoIjasah;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATAPENDIDIKAN OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataPendidikan instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataPendidikan() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataPendidikan->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtJenjang) $this->objDataPendidikan->Jenjang = $this->txtJenjang->Text;
				if ($this->txtNamaTempat) $this->objDataPendidikan->NamaTempat = $this->txtNamaTempat->Text;
				if ($this->txtTahunMasuk) $this->objDataPendidikan->TahunMasuk = $this->txtTahunMasuk->Text;
				if ($this->txtTahunLulus) $this->objDataPendidikan->TahunLulus = $this->txtTahunLulus->Text;
				if ($this->txtGelar) $this->objDataPendidikan->Gelar = $this->txtGelar->Text;
				if ($this->txtNoIjasah) $this->objDataPendidikan->NoIjasah = $this->txtNoIjasah->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataPendidikan object
				$this->objDataPendidikan->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataPendidikan instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataPendidikan() {
			$this->objDataPendidikan->Delete();
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
				case 'DataPendidikan': return $this->objDataPendidikan;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataPendidikan fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'JenjangControl':
					if (!$this->txtJenjang) return $this->txtJenjang_Create();
					return $this->txtJenjang;
				case 'JenjangLabel':
					if (!$this->lblJenjang) return $this->lblJenjang_Create();
					return $this->lblJenjang;
				case 'NamaTempatControl':
					if (!$this->txtNamaTempat) return $this->txtNamaTempat_Create();
					return $this->txtNamaTempat;
				case 'NamaTempatLabel':
					if (!$this->lblNamaTempat) return $this->lblNamaTempat_Create();
					return $this->lblNamaTempat;
				case 'TahunMasukControl':
					if (!$this->txtTahunMasuk) return $this->txtTahunMasuk_Create();
					return $this->txtTahunMasuk;
				case 'TahunMasukLabel':
					if (!$this->lblTahunMasuk) return $this->lblTahunMasuk_Create();
					return $this->lblTahunMasuk;
				case 'TahunLulusControl':
					if (!$this->txtTahunLulus) return $this->txtTahunLulus_Create();
					return $this->txtTahunLulus;
				case 'TahunLulusLabel':
					if (!$this->lblTahunLulus) return $this->lblTahunLulus_Create();
					return $this->lblTahunLulus;
				case 'GelarControl':
					if (!$this->txtGelar) return $this->txtGelar_Create();
					return $this->txtGelar;
				case 'GelarLabel':
					if (!$this->lblGelar) return $this->lblGelar_Create();
					return $this->lblGelar;
				case 'NoIjasahControl':
					if (!$this->txtNoIjasah) return $this->txtNoIjasah_Create();
					return $this->txtNoIjasah;
				case 'NoIjasahLabel':
					if (!$this->lblNoIjasah) return $this->lblNoIjasah_Create();
					return $this->lblNoIjasah;
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
					// Controls that point to DataPendidikan fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
					case 'JenjangControl':
						return ($this->txtJenjang = QType::Cast($mixValue, 'QControl'));
					case 'NamaTempatControl':
						return ($this->txtNamaTempat = QType::Cast($mixValue, 'QControl'));
					case 'TahunMasukControl':
						return ($this->txtTahunMasuk = QType::Cast($mixValue, 'QControl'));
					case 'TahunLulusControl':
						return ($this->txtTahunLulus = QType::Cast($mixValue, 'QControl'));
					case 'GelarControl':
						return ($this->txtGelar = QType::Cast($mixValue, 'QControl'));
					case 'NoIjasahControl':
						return ($this->txtNoIjasah = QType::Cast($mixValue, 'QControl'));
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