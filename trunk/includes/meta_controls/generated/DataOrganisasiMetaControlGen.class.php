<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataOrganisasi class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataOrganisasi object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataOrganisasiMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataOrganisasi $DataOrganisasi the actual DataOrganisasi data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $NamaOrgControl
	 * @property-read QLabel $NamaOrgLabel
	 * @property QTextBox $JenisControl
	 * @property-read QLabel $JenisLabel
	 * @property QTextBox $AlamatControl
	 * @property-read QLabel $AlamatLabel
	 * @property QIntegerTextBox $ThnMasukControl
	 * @property-read QLabel $ThnMasukLabel
	 * @property QIntegerTextBox $ThnKeluarControl
	 * @property-read QLabel $ThnKeluarLabel
	 * @property QIntegerTextBox $HonorControl
	 * @property-read QLabel $HonorLabel
	 * @property QTextBox $JabatanControl
	 * @property-read QLabel $JabatanLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataOrganisasiMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataOrganisasi objDataOrganisasi
		 * @access protected
		 */
		protected $objDataOrganisasi;
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

		// Controls that allow the editing of DataOrganisasi's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
		/**
		 * @var QTextBox txtNamaOrg
		 * @access protected
		 */
		protected $txtNamaOrg;
		/**
		 * @var QTextBox txtJenis
		 * @access protected
		 */
		protected $txtJenis;
		/**
		 * @var QTextBox txtAlamat
		 * @access protected
		 */
		protected $txtAlamat;
		/**
		 * @var QIntegerTextBox txtThnMasuk
		 * @access protected
		 */
		protected $txtThnMasuk;
		/**
		 * @var QIntegerTextBox txtThnKeluar
		 * @access protected
		 */
		protected $txtThnKeluar;
		/**
		 * @var QIntegerTextBox txtHonor
		 * @access protected
		 */
		protected $txtHonor;
		/**
		 * @var QTextBox txtJabatan
		 * @access protected
		 */
		protected $txtJabatan;

		// Controls that allow the viewing of DataOrganisasi's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblNamaOrg
		 * @access protected
		 */
		protected $lblNamaOrg;
		/**
		 * @var QLabel lblJenis
		 * @access protected
		 */
		protected $lblJenis;
		/**
		 * @var QLabel lblAlamat
		 * @access protected
		 */
		protected $lblAlamat;
		/**
		 * @var QLabel lblThnMasuk
		 * @access protected
		 */
		protected $lblThnMasuk;
		/**
		 * @var QLabel lblThnKeluar
		 * @access protected
		 */
		protected $lblThnKeluar;
		/**
		 * @var QLabel lblHonor
		 * @access protected
		 */
		protected $lblHonor;
		/**
		 * @var QLabel lblJabatan
		 * @access protected
		 */
		protected $lblJabatan;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataOrganisasiMetaControl to edit a single DataOrganisasi object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataOrganisasi object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataOrganisasiMetaControl
		 * @param DataOrganisasi $objDataOrganisasi new or existing DataOrganisasi object
		 */
		 public function __construct($objParentObject, DataOrganisasi $objDataOrganisasi) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataOrganisasiMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataOrganisasi object
			$this->objDataOrganisasi = $objDataOrganisasi;

			// Figure out if we're Editing or Creating New
			if ($this->objDataOrganisasi->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataOrganisasiMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataOrganisasi object creation - defaults to CreateOrEdit
 		 * @return DataOrganisasiMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataOrganisasi = DataOrganisasi::Load($strNip);

				// DataOrganisasi was found -- return it!
				if ($objDataOrganisasi)
					return new DataOrganisasiMetaControl($objParentObject, $objDataOrganisasi);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataOrganisasi object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataOrganisasiMetaControl($objParentObject, new DataOrganisasi());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataOrganisasiMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataOrganisasi object creation - defaults to CreateOrEdit
		 * @return DataOrganisasiMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataOrganisasiMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataOrganisasiMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataOrganisasi object creation - defaults to CreateOrEdit
		 * @return DataOrganisasiMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataOrganisasiMetaControl::Create($objParentObject, $strNip, $intCreateType);
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
				if (($this->objDataOrganisasi->NipObject) && ($this->objDataOrganisasi->NipObject->Nip == $objNipObject->Nip))
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
			$this->lblNip->Text = ($this->objDataOrganisasi->NipObject) ? $this->objDataOrganisasi->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtNamaOrg
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNamaOrg_Create($strControlId = null) {
			$this->txtNamaOrg = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNamaOrg->Name = QApplication::Translate('Nama Org');
			$this->txtNamaOrg->Text = $this->objDataOrganisasi->NamaOrg;
			$this->txtNamaOrg->MaxLength = DataOrganisasi::NamaOrgMaxLength;
			return $this->txtNamaOrg;
		}

		/**
		 * Create and setup QLabel lblNamaOrg
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNamaOrg_Create($strControlId = null) {
			$this->lblNamaOrg = new QLabel($this->objParentObject, $strControlId);
			$this->lblNamaOrg->Name = QApplication::Translate('Nama Org');
			$this->lblNamaOrg->Text = $this->objDataOrganisasi->NamaOrg;
			return $this->lblNamaOrg;
		}

		/**
		 * Create and setup QTextBox txtJenis
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtJenis_Create($strControlId = null) {
			$this->txtJenis = new QTextBox($this->objParentObject, $strControlId);
			$this->txtJenis->Name = QApplication::Translate('Jenis');
			$this->txtJenis->Text = $this->objDataOrganisasi->Jenis;
			$this->txtJenis->MaxLength = DataOrganisasi::JenisMaxLength;
			return $this->txtJenis;
		}

		/**
		 * Create and setup QLabel lblJenis
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblJenis_Create($strControlId = null) {
			$this->lblJenis = new QLabel($this->objParentObject, $strControlId);
			$this->lblJenis->Name = QApplication::Translate('Jenis');
			$this->lblJenis->Text = $this->objDataOrganisasi->Jenis;
			return $this->lblJenis;
		}

		/**
		 * Create and setup QTextBox txtAlamat
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAlamat_Create($strControlId = null) {
			$this->txtAlamat = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAlamat->Name = QApplication::Translate('Alamat');
			$this->txtAlamat->Text = $this->objDataOrganisasi->Alamat;
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
			$this->lblAlamat->Text = $this->objDataOrganisasi->Alamat;
			return $this->lblAlamat;
		}

		/**
		 * Create and setup QIntegerTextBox txtThnMasuk
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtThnMasuk_Create($strControlId = null) {
			$this->txtThnMasuk = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtThnMasuk->Name = QApplication::Translate('Thn Masuk');
			$this->txtThnMasuk->Text = $this->objDataOrganisasi->ThnMasuk;
			return $this->txtThnMasuk;
		}

		/**
		 * Create and setup QLabel lblThnMasuk
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblThnMasuk_Create($strControlId = null, $strFormat = null) {
			$this->lblThnMasuk = new QLabel($this->objParentObject, $strControlId);
			$this->lblThnMasuk->Name = QApplication::Translate('Thn Masuk');
			$this->lblThnMasuk->Text = $this->objDataOrganisasi->ThnMasuk;
			$this->lblThnMasuk->Format = $strFormat;
			return $this->lblThnMasuk;
		}

		/**
		 * Create and setup QIntegerTextBox txtThnKeluar
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtThnKeluar_Create($strControlId = null) {
			$this->txtThnKeluar = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtThnKeluar->Name = QApplication::Translate('Thn Keluar');
			$this->txtThnKeluar->Text = $this->objDataOrganisasi->ThnKeluar;
			return $this->txtThnKeluar;
		}

		/**
		 * Create and setup QLabel lblThnKeluar
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblThnKeluar_Create($strControlId = null, $strFormat = null) {
			$this->lblThnKeluar = new QLabel($this->objParentObject, $strControlId);
			$this->lblThnKeluar->Name = QApplication::Translate('Thn Keluar');
			$this->lblThnKeluar->Text = $this->objDataOrganisasi->ThnKeluar;
			$this->lblThnKeluar->Format = $strFormat;
			return $this->lblThnKeluar;
		}

		/**
		 * Create and setup QIntegerTextBox txtHonor
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtHonor_Create($strControlId = null) {
			$this->txtHonor = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtHonor->Name = QApplication::Translate('Honor');
			$this->txtHonor->Text = $this->objDataOrganisasi->Honor;
			return $this->txtHonor;
		}

		/**
		 * Create and setup QLabel lblHonor
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblHonor_Create($strControlId = null, $strFormat = null) {
			$this->lblHonor = new QLabel($this->objParentObject, $strControlId);
			$this->lblHonor->Name = QApplication::Translate('Honor');
			$this->lblHonor->Text = $this->objDataOrganisasi->Honor;
			$this->lblHonor->Format = $strFormat;
			return $this->lblHonor;
		}

		/**
		 * Create and setup QTextBox txtJabatan
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtJabatan_Create($strControlId = null) {
			$this->txtJabatan = new QTextBox($this->objParentObject, $strControlId);
			$this->txtJabatan->Name = QApplication::Translate('Jabatan');
			$this->txtJabatan->Text = $this->objDataOrganisasi->Jabatan;
			$this->txtJabatan->MaxLength = DataOrganisasi::JabatanMaxLength;
			return $this->txtJabatan;
		}

		/**
		 * Create and setup QLabel lblJabatan
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblJabatan_Create($strControlId = null) {
			$this->lblJabatan = new QLabel($this->objParentObject, $strControlId);
			$this->lblJabatan->Name = QApplication::Translate('Jabatan');
			$this->lblJabatan->Text = $this->objDataOrganisasi->Jabatan;
			return $this->lblJabatan;
		}



		/**
		 * Refresh this MetaControl with Data from the local DataOrganisasi object.
		 * @param boolean $blnReload reload DataOrganisasi from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataOrganisasi->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataOrganisasi->NipObject) && ($this->objDataOrganisasi->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataOrganisasi->NipObject) ? $this->objDataOrganisasi->NipObject->__toString() : null;

			if ($this->txtNamaOrg) $this->txtNamaOrg->Text = $this->objDataOrganisasi->NamaOrg;
			if ($this->lblNamaOrg) $this->lblNamaOrg->Text = $this->objDataOrganisasi->NamaOrg;

			if ($this->txtJenis) $this->txtJenis->Text = $this->objDataOrganisasi->Jenis;
			if ($this->lblJenis) $this->lblJenis->Text = $this->objDataOrganisasi->Jenis;

			if ($this->txtAlamat) $this->txtAlamat->Text = $this->objDataOrganisasi->Alamat;
			if ($this->lblAlamat) $this->lblAlamat->Text = $this->objDataOrganisasi->Alamat;

			if ($this->txtThnMasuk) $this->txtThnMasuk->Text = $this->objDataOrganisasi->ThnMasuk;
			if ($this->lblThnMasuk) $this->lblThnMasuk->Text = $this->objDataOrganisasi->ThnMasuk;

			if ($this->txtThnKeluar) $this->txtThnKeluar->Text = $this->objDataOrganisasi->ThnKeluar;
			if ($this->lblThnKeluar) $this->lblThnKeluar->Text = $this->objDataOrganisasi->ThnKeluar;

			if ($this->txtHonor) $this->txtHonor->Text = $this->objDataOrganisasi->Honor;
			if ($this->lblHonor) $this->lblHonor->Text = $this->objDataOrganisasi->Honor;

			if ($this->txtJabatan) $this->txtJabatan->Text = $this->objDataOrganisasi->Jabatan;
			if ($this->lblJabatan) $this->lblJabatan->Text = $this->objDataOrganisasi->Jabatan;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATAORGANISASI OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataOrganisasi instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataOrganisasi() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataOrganisasi->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtNamaOrg) $this->objDataOrganisasi->NamaOrg = $this->txtNamaOrg->Text;
				if ($this->txtJenis) $this->objDataOrganisasi->Jenis = $this->txtJenis->Text;
				if ($this->txtAlamat) $this->objDataOrganisasi->Alamat = $this->txtAlamat->Text;
				if ($this->txtThnMasuk) $this->objDataOrganisasi->ThnMasuk = $this->txtThnMasuk->Text;
				if ($this->txtThnKeluar) $this->objDataOrganisasi->ThnKeluar = $this->txtThnKeluar->Text;
				if ($this->txtHonor) $this->objDataOrganisasi->Honor = $this->txtHonor->Text;
				if ($this->txtJabatan) $this->objDataOrganisasi->Jabatan = $this->txtJabatan->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataOrganisasi object
				$this->objDataOrganisasi->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataOrganisasi instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataOrganisasi() {
			$this->objDataOrganisasi->Delete();
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
				case 'DataOrganisasi': return $this->objDataOrganisasi;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataOrganisasi fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'NamaOrgControl':
					if (!$this->txtNamaOrg) return $this->txtNamaOrg_Create();
					return $this->txtNamaOrg;
				case 'NamaOrgLabel':
					if (!$this->lblNamaOrg) return $this->lblNamaOrg_Create();
					return $this->lblNamaOrg;
				case 'JenisControl':
					if (!$this->txtJenis) return $this->txtJenis_Create();
					return $this->txtJenis;
				case 'JenisLabel':
					if (!$this->lblJenis) return $this->lblJenis_Create();
					return $this->lblJenis;
				case 'AlamatControl':
					if (!$this->txtAlamat) return $this->txtAlamat_Create();
					return $this->txtAlamat;
				case 'AlamatLabel':
					if (!$this->lblAlamat) return $this->lblAlamat_Create();
					return $this->lblAlamat;
				case 'ThnMasukControl':
					if (!$this->txtThnMasuk) return $this->txtThnMasuk_Create();
					return $this->txtThnMasuk;
				case 'ThnMasukLabel':
					if (!$this->lblThnMasuk) return $this->lblThnMasuk_Create();
					return $this->lblThnMasuk;
				case 'ThnKeluarControl':
					if (!$this->txtThnKeluar) return $this->txtThnKeluar_Create();
					return $this->txtThnKeluar;
				case 'ThnKeluarLabel':
					if (!$this->lblThnKeluar) return $this->lblThnKeluar_Create();
					return $this->lblThnKeluar;
				case 'HonorControl':
					if (!$this->txtHonor) return $this->txtHonor_Create();
					return $this->txtHonor;
				case 'HonorLabel':
					if (!$this->lblHonor) return $this->lblHonor_Create();
					return $this->lblHonor;
				case 'JabatanControl':
					if (!$this->txtJabatan) return $this->txtJabatan_Create();
					return $this->txtJabatan;
				case 'JabatanLabel':
					if (!$this->lblJabatan) return $this->lblJabatan_Create();
					return $this->lblJabatan;
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
					// Controls that point to DataOrganisasi fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
					case 'NamaOrgControl':
						return ($this->txtNamaOrg = QType::Cast($mixValue, 'QControl'));
					case 'JenisControl':
						return ($this->txtJenis = QType::Cast($mixValue, 'QControl'));
					case 'AlamatControl':
						return ($this->txtAlamat = QType::Cast($mixValue, 'QControl'));
					case 'ThnMasukControl':
						return ($this->txtThnMasuk = QType::Cast($mixValue, 'QControl'));
					case 'ThnKeluarControl':
						return ($this->txtThnKeluar = QType::Cast($mixValue, 'QControl'));
					case 'HonorControl':
						return ($this->txtHonor = QType::Cast($mixValue, 'QControl'));
					case 'JabatanControl':
						return ($this->txtJabatan = QType::Cast($mixValue, 'QControl'));
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