<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataPenghargaanEks class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataPenghargaanEks object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataPenghargaanEksMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataPenghargaanEks $DataPenghargaanEks the actual DataPenghargaanEks data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $NamaPenghargaanControl
	 * @property-read QLabel $NamaPenghargaanLabel
	 * @property QDateTimePicker $TglDapatControl
	 * @property-read QLabel $TglDapatLabel
	 * @property QTextBox $PemberiControl
	 * @property-read QLabel $PemberiLabel
	 * @property QTextBox $AlamatControl
	 * @property-read QLabel $AlamatLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataPenghargaanEksMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataPenghargaanEks objDataPenghargaanEks
		 * @access protected
		 */
		protected $objDataPenghargaanEks;
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

		// Controls that allow the editing of DataPenghargaanEks's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
		/**
		 * @var QTextBox txtNamaPenghargaan
		 * @access protected
		 */
		protected $txtNamaPenghargaan;
		/**
		 * @var QDateTimePicker calTglDapat
		 * @access protected
		 */
		protected $calTglDapat;
		/**
		 * @var QTextBox txtPemberi
		 * @access protected
		 */
		protected $txtPemberi;
		/**
		 * @var QTextBox txtAlamat
		 * @access protected
		 */
		protected $txtAlamat;

		// Controls that allow the viewing of DataPenghargaanEks's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblNamaPenghargaan
		 * @access protected
		 */
		protected $lblNamaPenghargaan;
		/**
		 * @var QLabel lblTglDapat
		 * @access protected
		 */
		protected $lblTglDapat;
		/**
		 * @var QLabel lblPemberi
		 * @access protected
		 */
		protected $lblPemberi;
		/**
		 * @var QLabel lblAlamat
		 * @access protected
		 */
		protected $lblAlamat;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataPenghargaanEksMetaControl to edit a single DataPenghargaanEks object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataPenghargaanEks object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPenghargaanEksMetaControl
		 * @param DataPenghargaanEks $objDataPenghargaanEks new or existing DataPenghargaanEks object
		 */
		 public function __construct($objParentObject, DataPenghargaanEks $objDataPenghargaanEks) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataPenghargaanEksMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataPenghargaanEks object
			$this->objDataPenghargaanEks = $objDataPenghargaanEks;

			// Figure out if we're Editing or Creating New
			if ($this->objDataPenghargaanEks->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPenghargaanEksMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataPenghargaanEks object creation - defaults to CreateOrEdit
 		 * @return DataPenghargaanEksMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataPenghargaanEks = DataPenghargaanEks::Load($strNip);

				// DataPenghargaanEks was found -- return it!
				if ($objDataPenghargaanEks)
					return new DataPenghargaanEksMetaControl($objParentObject, $objDataPenghargaanEks);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataPenghargaanEks object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataPenghargaanEksMetaControl($objParentObject, new DataPenghargaanEks());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPenghargaanEksMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPenghargaanEks object creation - defaults to CreateOrEdit
		 * @return DataPenghargaanEksMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataPenghargaanEksMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPenghargaanEksMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPenghargaanEks object creation - defaults to CreateOrEdit
		 * @return DataPenghargaanEksMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataPenghargaanEksMetaControl::Create($objParentObject, $strNip, $intCreateType);
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
				if (($this->objDataPenghargaanEks->NipObject) && ($this->objDataPenghargaanEks->NipObject->Nip == $objNipObject->Nip))
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
			$this->lblNip->Text = ($this->objDataPenghargaanEks->NipObject) ? $this->objDataPenghargaanEks->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtNamaPenghargaan
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNamaPenghargaan_Create($strControlId = null) {
			$this->txtNamaPenghargaan = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNamaPenghargaan->Name = QApplication::Translate('Nama Penghargaan');
			$this->txtNamaPenghargaan->Text = $this->objDataPenghargaanEks->NamaPenghargaan;
			$this->txtNamaPenghargaan->MaxLength = DataPenghargaanEks::NamaPenghargaanMaxLength;
			return $this->txtNamaPenghargaan;
		}

		/**
		 * Create and setup QLabel lblNamaPenghargaan
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNamaPenghargaan_Create($strControlId = null) {
			$this->lblNamaPenghargaan = new QLabel($this->objParentObject, $strControlId);
			$this->lblNamaPenghargaan->Name = QApplication::Translate('Nama Penghargaan');
			$this->lblNamaPenghargaan->Text = $this->objDataPenghargaanEks->NamaPenghargaan;
			return $this->lblNamaPenghargaan;
		}

		/**
		 * Create and setup QDateTimePicker calTglDapat
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTglDapat_Create($strControlId = null) {
			$this->calTglDapat = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTglDapat->Name = QApplication::Translate('Tgl Dapat');
			$this->calTglDapat->DateTime = $this->objDataPenghargaanEks->TglDapat;
			$this->calTglDapat->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calTglDapat;
		}

		/**
		 * Create and setup QLabel lblTglDapat
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTglDapat_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTglDapat = new QLabel($this->objParentObject, $strControlId);
			$this->lblTglDapat->Name = QApplication::Translate('Tgl Dapat');
			$this->strTglDapatDateTimeFormat = $strDateTimeFormat;
			$this->lblTglDapat->Text = sprintf($this->objDataPenghargaanEks->TglDapat) ? $this->objDataPenghargaanEks->TglDapat->qFormat($this->strTglDapatDateTimeFormat) : null;
			return $this->lblTglDapat;
		}

		protected $strTglDapatDateTimeFormat;


		/**
		 * Create and setup QTextBox txtPemberi
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPemberi_Create($strControlId = null) {
			$this->txtPemberi = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPemberi->Name = QApplication::Translate('Pemberi');
			$this->txtPemberi->Text = $this->objDataPenghargaanEks->Pemberi;
			$this->txtPemberi->MaxLength = DataPenghargaanEks::PemberiMaxLength;
			return $this->txtPemberi;
		}

		/**
		 * Create and setup QLabel lblPemberi
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPemberi_Create($strControlId = null) {
			$this->lblPemberi = new QLabel($this->objParentObject, $strControlId);
			$this->lblPemberi->Name = QApplication::Translate('Pemberi');
			$this->lblPemberi->Text = $this->objDataPenghargaanEks->Pemberi;
			return $this->lblPemberi;
		}

		/**
		 * Create and setup QTextBox txtAlamat
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAlamat_Create($strControlId = null) {
			$this->txtAlamat = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAlamat->Name = QApplication::Translate('Alamat');
			$this->txtAlamat->Text = $this->objDataPenghargaanEks->Alamat;
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
			$this->lblAlamat->Text = $this->objDataPenghargaanEks->Alamat;
			return $this->lblAlamat;
		}



		/**
		 * Refresh this MetaControl with Data from the local DataPenghargaanEks object.
		 * @param boolean $blnReload reload DataPenghargaanEks from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataPenghargaanEks->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataPenghargaanEks->NipObject) && ($this->objDataPenghargaanEks->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataPenghargaanEks->NipObject) ? $this->objDataPenghargaanEks->NipObject->__toString() : null;

			if ($this->txtNamaPenghargaan) $this->txtNamaPenghargaan->Text = $this->objDataPenghargaanEks->NamaPenghargaan;
			if ($this->lblNamaPenghargaan) $this->lblNamaPenghargaan->Text = $this->objDataPenghargaanEks->NamaPenghargaan;

			if ($this->calTglDapat) $this->calTglDapat->DateTime = $this->objDataPenghargaanEks->TglDapat;
			if ($this->lblTglDapat) $this->lblTglDapat->Text = sprintf($this->objDataPenghargaanEks->TglDapat) ? $this->objDataPenghargaanEks->TglDapat->qFormat($this->strTglDapatDateTimeFormat) : null;

			if ($this->txtPemberi) $this->txtPemberi->Text = $this->objDataPenghargaanEks->Pemberi;
			if ($this->lblPemberi) $this->lblPemberi->Text = $this->objDataPenghargaanEks->Pemberi;

			if ($this->txtAlamat) $this->txtAlamat->Text = $this->objDataPenghargaanEks->Alamat;
			if ($this->lblAlamat) $this->lblAlamat->Text = $this->objDataPenghargaanEks->Alamat;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATAPENGHARGAANEKS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataPenghargaanEks instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataPenghargaanEks() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataPenghargaanEks->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtNamaPenghargaan) $this->objDataPenghargaanEks->NamaPenghargaan = $this->txtNamaPenghargaan->Text;
				if ($this->calTglDapat) $this->objDataPenghargaanEks->TglDapat = $this->calTglDapat->DateTime;
				if ($this->txtPemberi) $this->objDataPenghargaanEks->Pemberi = $this->txtPemberi->Text;
				if ($this->txtAlamat) $this->objDataPenghargaanEks->Alamat = $this->txtAlamat->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataPenghargaanEks object
				$this->objDataPenghargaanEks->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataPenghargaanEks instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataPenghargaanEks() {
			$this->objDataPenghargaanEks->Delete();
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
				case 'DataPenghargaanEks': return $this->objDataPenghargaanEks;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataPenghargaanEks fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'NamaPenghargaanControl':
					if (!$this->txtNamaPenghargaan) return $this->txtNamaPenghargaan_Create();
					return $this->txtNamaPenghargaan;
				case 'NamaPenghargaanLabel':
					if (!$this->lblNamaPenghargaan) return $this->lblNamaPenghargaan_Create();
					return $this->lblNamaPenghargaan;
				case 'TglDapatControl':
					if (!$this->calTglDapat) return $this->calTglDapat_Create();
					return $this->calTglDapat;
				case 'TglDapatLabel':
					if (!$this->lblTglDapat) return $this->lblTglDapat_Create();
					return $this->lblTglDapat;
				case 'PemberiControl':
					if (!$this->txtPemberi) return $this->txtPemberi_Create();
					return $this->txtPemberi;
				case 'PemberiLabel':
					if (!$this->lblPemberi) return $this->lblPemberi_Create();
					return $this->lblPemberi;
				case 'AlamatControl':
					if (!$this->txtAlamat) return $this->txtAlamat_Create();
					return $this->txtAlamat;
				case 'AlamatLabel':
					if (!$this->lblAlamat) return $this->lblAlamat_Create();
					return $this->lblAlamat;
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
					// Controls that point to DataPenghargaanEks fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
					case 'NamaPenghargaanControl':
						return ($this->txtNamaPenghargaan = QType::Cast($mixValue, 'QControl'));
					case 'TglDapatControl':
						return ($this->calTglDapat = QType::Cast($mixValue, 'QControl'));
					case 'PemberiControl':
						return ($this->txtPemberi = QType::Cast($mixValue, 'QControl'));
					case 'AlamatControl':
						return ($this->txtAlamat = QType::Cast($mixValue, 'QControl'));
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