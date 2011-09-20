<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataRiwayatKerja class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataRiwayatKerja object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataRiwayatKerjaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataRiwayatKerja $DataRiwayatKerja the actual DataRiwayatKerja data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $NoSkControl
	 * @property-read QLabel $NoSkLabel
	 * @property QTextBox $JenisSkControl
	 * @property-read QLabel $JenisSkLabel
	 * @property QDateTimePicker $TglKeluarControl
	 * @property-read QLabel $TglKeluarLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataRiwayatKerjaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataRiwayatKerja objDataRiwayatKerja
		 * @access protected
		 */
		protected $objDataRiwayatKerja;
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

		// Controls that allow the editing of DataRiwayatKerja's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
		/**
		 * @var QTextBox txtNoSk
		 * @access protected
		 */
		protected $txtNoSk;
		/**
		 * @var QTextBox txtJenisSk
		 * @access protected
		 */
		protected $txtJenisSk;
		/**
		 * @var QDateTimePicker calTglKeluar
		 * @access protected
		 */
		protected $calTglKeluar;

		// Controls that allow the viewing of DataRiwayatKerja's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblNoSk
		 * @access protected
		 */
		protected $lblNoSk;
		/**
		 * @var QLabel lblJenisSk
		 * @access protected
		 */
		protected $lblJenisSk;
		/**
		 * @var QLabel lblTglKeluar
		 * @access protected
		 */
		protected $lblTglKeluar;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataRiwayatKerjaMetaControl to edit a single DataRiwayatKerja object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataRiwayatKerja object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataRiwayatKerjaMetaControl
		 * @param DataRiwayatKerja $objDataRiwayatKerja new or existing DataRiwayatKerja object
		 */
		 public function __construct($objParentObject, DataRiwayatKerja $objDataRiwayatKerja) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataRiwayatKerjaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataRiwayatKerja object
			$this->objDataRiwayatKerja = $objDataRiwayatKerja;

			// Figure out if we're Editing or Creating New
			if ($this->objDataRiwayatKerja->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataRiwayatKerjaMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataRiwayatKerja object creation - defaults to CreateOrEdit
 		 * @return DataRiwayatKerjaMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataRiwayatKerja = DataRiwayatKerja::Load($strNip);

				// DataRiwayatKerja was found -- return it!
				if ($objDataRiwayatKerja)
					return new DataRiwayatKerjaMetaControl($objParentObject, $objDataRiwayatKerja);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataRiwayatKerja object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataRiwayatKerjaMetaControl($objParentObject, new DataRiwayatKerja());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataRiwayatKerjaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataRiwayatKerja object creation - defaults to CreateOrEdit
		 * @return DataRiwayatKerjaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataRiwayatKerjaMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataRiwayatKerjaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataRiwayatKerja object creation - defaults to CreateOrEdit
		 * @return DataRiwayatKerjaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataRiwayatKerjaMetaControl::Create($objParentObject, $strNip, $intCreateType);
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
				if (($this->objDataRiwayatKerja->NipObject) && ($this->objDataRiwayatKerja->NipObject->Nip == $objNipObject->Nip))
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
			$this->lblNip->Text = ($this->objDataRiwayatKerja->NipObject) ? $this->objDataRiwayatKerja->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtNoSk
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNoSk_Create($strControlId = null) {
			$this->txtNoSk = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNoSk->Name = QApplication::Translate('No Sk');
			$this->txtNoSk->Text = $this->objDataRiwayatKerja->NoSk;
			$this->txtNoSk->MaxLength = DataRiwayatKerja::NoSkMaxLength;
			return $this->txtNoSk;
		}

		/**
		 * Create and setup QLabel lblNoSk
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNoSk_Create($strControlId = null) {
			$this->lblNoSk = new QLabel($this->objParentObject, $strControlId);
			$this->lblNoSk->Name = QApplication::Translate('No Sk');
			$this->lblNoSk->Text = $this->objDataRiwayatKerja->NoSk;
			return $this->lblNoSk;
		}

		/**
		 * Create and setup QTextBox txtJenisSk
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtJenisSk_Create($strControlId = null) {
			$this->txtJenisSk = new QTextBox($this->objParentObject, $strControlId);
			$this->txtJenisSk->Name = QApplication::Translate('Jenis Sk');
			$this->txtJenisSk->Text = $this->objDataRiwayatKerja->JenisSk;
			return $this->txtJenisSk;
		}

		/**
		 * Create and setup QLabel lblJenisSk
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblJenisSk_Create($strControlId = null) {
			$this->lblJenisSk = new QLabel($this->objParentObject, $strControlId);
			$this->lblJenisSk->Name = QApplication::Translate('Jenis Sk');
			$this->lblJenisSk->Text = $this->objDataRiwayatKerja->JenisSk;
			return $this->lblJenisSk;
		}

		/**
		 * Create and setup QDateTimePicker calTglKeluar
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTglKeluar_Create($strControlId = null) {
			$this->calTglKeluar = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTglKeluar->Name = QApplication::Translate('Tgl Keluar');
			$this->calTglKeluar->DateTime = $this->objDataRiwayatKerja->TglKeluar;
			$this->calTglKeluar->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calTglKeluar;
		}

		/**
		 * Create and setup QLabel lblTglKeluar
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblTglKeluar_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTglKeluar = new QLabel($this->objParentObject, $strControlId);
			$this->lblTglKeluar->Name = QApplication::Translate('Tgl Keluar');
			$this->strTglKeluarDateTimeFormat = $strDateTimeFormat;
			$this->lblTglKeluar->Text = sprintf($this->objDataRiwayatKerja->TglKeluar) ? $this->objDataRiwayatKerja->TglKeluar->qFormat($this->strTglKeluarDateTimeFormat) : null;
			return $this->lblTglKeluar;
		}

		protected $strTglKeluarDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local DataRiwayatKerja object.
		 * @param boolean $blnReload reload DataRiwayatKerja from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataRiwayatKerja->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataRiwayatKerja->NipObject) && ($this->objDataRiwayatKerja->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataRiwayatKerja->NipObject) ? $this->objDataRiwayatKerja->NipObject->__toString() : null;

			if ($this->txtNoSk) $this->txtNoSk->Text = $this->objDataRiwayatKerja->NoSk;
			if ($this->lblNoSk) $this->lblNoSk->Text = $this->objDataRiwayatKerja->NoSk;

			if ($this->txtJenisSk) $this->txtJenisSk->Text = $this->objDataRiwayatKerja->JenisSk;
			if ($this->lblJenisSk) $this->lblJenisSk->Text = $this->objDataRiwayatKerja->JenisSk;

			if ($this->calTglKeluar) $this->calTglKeluar->DateTime = $this->objDataRiwayatKerja->TglKeluar;
			if ($this->lblTglKeluar) $this->lblTglKeluar->Text = sprintf($this->objDataRiwayatKerja->TglKeluar) ? $this->objDataRiwayatKerja->TglKeluar->qFormat($this->strTglKeluarDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATARIWAYATKERJA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataRiwayatKerja instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataRiwayatKerja() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataRiwayatKerja->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtNoSk) $this->objDataRiwayatKerja->NoSk = $this->txtNoSk->Text;
				if ($this->txtJenisSk) $this->objDataRiwayatKerja->JenisSk = $this->txtJenisSk->Text;
				if ($this->calTglKeluar) $this->objDataRiwayatKerja->TglKeluar = $this->calTglKeluar->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataRiwayatKerja object
				$this->objDataRiwayatKerja->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataRiwayatKerja instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataRiwayatKerja() {
			$this->objDataRiwayatKerja->Delete();
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
				case 'DataRiwayatKerja': return $this->objDataRiwayatKerja;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataRiwayatKerja fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'NoSkControl':
					if (!$this->txtNoSk) return $this->txtNoSk_Create();
					return $this->txtNoSk;
				case 'NoSkLabel':
					if (!$this->lblNoSk) return $this->lblNoSk_Create();
					return $this->lblNoSk;
				case 'JenisSkControl':
					if (!$this->txtJenisSk) return $this->txtJenisSk_Create();
					return $this->txtJenisSk;
				case 'JenisSkLabel':
					if (!$this->lblJenisSk) return $this->lblJenisSk_Create();
					return $this->lblJenisSk;
				case 'TglKeluarControl':
					if (!$this->calTglKeluar) return $this->calTglKeluar_Create();
					return $this->calTglKeluar;
				case 'TglKeluarLabel':
					if (!$this->lblTglKeluar) return $this->lblTglKeluar_Create();
					return $this->lblTglKeluar;
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
					// Controls that point to DataRiwayatKerja fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
					case 'NoSkControl':
						return ($this->txtNoSk = QType::Cast($mixValue, 'QControl'));
					case 'JenisSkControl':
						return ($this->txtJenisSk = QType::Cast($mixValue, 'QControl'));
					case 'TglKeluarControl':
						return ($this->calTglKeluar = QType::Cast($mixValue, 'QControl'));
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