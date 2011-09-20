<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DataPenghargaanIn class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DataPenghargaanIn object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DataPenghargaanInMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DataPenghargaanIn $DataPenghargaanIn the actual DataPenghargaanIn data class being edited
	 * @property QListBox $NipControl
	 * @property-read QLabel $NipLabel
	 * @property QTextBox $JenisPenghargaanControl
	 * @property-read QLabel $JenisPenghargaanLabel
	 * @property QTextBox $NoSkControl
	 * @property-read QLabel $NoSkLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DataPenghargaanInMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DataPenghargaanIn objDataPenghargaanIn
		 * @access protected
		 */
		protected $objDataPenghargaanIn;
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

		// Controls that allow the editing of DataPenghargaanIn's individual data fields
		/**
		 * @var QListBox lstNipObject
		 * @access protected
		 */
		protected $lstNipObject;
		/**
		 * @var QTextBox txtJenisPenghargaan
		 * @access protected
		 */
		protected $txtJenisPenghargaan;
		/**
		 * @var QTextBox txtNoSk
		 * @access protected
		 */
		protected $txtNoSk;

		// Controls that allow the viewing of DataPenghargaanIn's individual data fields
		/**
		 * @var QLabel lblNip
		 * @access protected
		 */
		protected $lblNip;
		/**
		 * @var QLabel lblJenisPenghargaan
		 * @access protected
		 */
		protected $lblJenisPenghargaan;
		/**
		 * @var QLabel lblNoSk
		 * @access protected
		 */
		protected $lblNoSk;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DataPenghargaanInMetaControl to edit a single DataPenghargaanIn object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DataPenghargaanIn object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPenghargaanInMetaControl
		 * @param DataPenghargaanIn $objDataPenghargaanIn new or existing DataPenghargaanIn object
		 */
		 public function __construct($objParentObject, DataPenghargaanIn $objDataPenghargaanIn) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DataPenghargaanInMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DataPenghargaanIn object
			$this->objDataPenghargaanIn = $objDataPenghargaanIn;

			// Figure out if we're Editing or Creating New
			if ($this->objDataPenghargaanIn->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPenghargaanInMetaControl
		 * @param string $strNip primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DataPenghargaanIn object creation - defaults to CreateOrEdit
 		 * @return DataPenghargaanInMetaControl
		 */
		public static function Create($objParentObject, $strNip = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strNip)) {
				$objDataPenghargaanIn = DataPenghargaanIn::Load($strNip);

				// DataPenghargaanIn was found -- return it!
				if ($objDataPenghargaanIn)
					return new DataPenghargaanInMetaControl($objParentObject, $objDataPenghargaanIn);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DataPenghargaanIn object with PK arguments: ' . $strNip);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DataPenghargaanInMetaControl($objParentObject, new DataPenghargaanIn());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPenghargaanInMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPenghargaanIn object creation - defaults to CreateOrEdit
		 * @return DataPenghargaanInMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::PathInfo(0);
			return DataPenghargaanInMetaControl::Create($objParentObject, $strNip, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DataPenghargaanInMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DataPenghargaanIn object creation - defaults to CreateOrEdit
		 * @return DataPenghargaanInMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$strNip = QApplication::QueryString('strNip');
			return DataPenghargaanInMetaControl::Create($objParentObject, $strNip, $intCreateType);
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
				if (($this->objDataPenghargaanIn->NipObject) && ($this->objDataPenghargaanIn->NipObject->Nip == $objNipObject->Nip))
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
			$this->lblNip->Text = ($this->objDataPenghargaanIn->NipObject) ? $this->objDataPenghargaanIn->NipObject->__toString() : null;
			$this->lblNip->Required = true;
			return $this->lblNip;
		}

		/**
		 * Create and setup QTextBox txtJenisPenghargaan
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtJenisPenghargaan_Create($strControlId = null) {
			$this->txtJenisPenghargaan = new QTextBox($this->objParentObject, $strControlId);
			$this->txtJenisPenghargaan->Name = QApplication::Translate('Jenis Penghargaan');
			$this->txtJenisPenghargaan->Text = $this->objDataPenghargaanIn->JenisPenghargaan;
			$this->txtJenisPenghargaan->MaxLength = DataPenghargaanIn::JenisPenghargaanMaxLength;
			return $this->txtJenisPenghargaan;
		}

		/**
		 * Create and setup QLabel lblJenisPenghargaan
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblJenisPenghargaan_Create($strControlId = null) {
			$this->lblJenisPenghargaan = new QLabel($this->objParentObject, $strControlId);
			$this->lblJenisPenghargaan->Name = QApplication::Translate('Jenis Penghargaan');
			$this->lblJenisPenghargaan->Text = $this->objDataPenghargaanIn->JenisPenghargaan;
			return $this->lblJenisPenghargaan;
		}

		/**
		 * Create and setup QTextBox txtNoSk
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNoSk_Create($strControlId = null) {
			$this->txtNoSk = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNoSk->Name = QApplication::Translate('No Sk');
			$this->txtNoSk->Text = $this->objDataPenghargaanIn->NoSk;
			$this->txtNoSk->MaxLength = DataPenghargaanIn::NoSkMaxLength;
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
			$this->lblNoSk->Text = $this->objDataPenghargaanIn->NoSk;
			return $this->lblNoSk;
		}



		/**
		 * Refresh this MetaControl with Data from the local DataPenghargaanIn object.
		 * @param boolean $blnReload reload DataPenghargaanIn from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDataPenghargaanIn->Reload();

			if ($this->lstNipObject) {
					$this->lstNipObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstNipObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objNipObjectArray = DataPegawai::LoadAll();
				if ($objNipObjectArray) foreach ($objNipObjectArray as $objNipObject) {
					$objListItem = new QListItem($objNipObject->__toString(), $objNipObject->Nip);
					if (($this->objDataPenghargaanIn->NipObject) && ($this->objDataPenghargaanIn->NipObject->Nip == $objNipObject->Nip))
						$objListItem->Selected = true;
					$this->lstNipObject->AddItem($objListItem);
				}
			}
			if ($this->lblNip) $this->lblNip->Text = ($this->objDataPenghargaanIn->NipObject) ? $this->objDataPenghargaanIn->NipObject->__toString() : null;

			if ($this->txtJenisPenghargaan) $this->txtJenisPenghargaan->Text = $this->objDataPenghargaanIn->JenisPenghargaan;
			if ($this->lblJenisPenghargaan) $this->lblJenisPenghargaan->Text = $this->objDataPenghargaanIn->JenisPenghargaan;

			if ($this->txtNoSk) $this->txtNoSk->Text = $this->objDataPenghargaanIn->NoSk;
			if ($this->lblNoSk) $this->lblNoSk->Text = $this->objDataPenghargaanIn->NoSk;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DATAPENGHARGAANIN OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DataPenghargaanIn instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDataPenghargaanIn() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstNipObject) $this->objDataPenghargaanIn->Nip = $this->lstNipObject->SelectedValue;
				if ($this->txtJenisPenghargaan) $this->objDataPenghargaanIn->JenisPenghargaan = $this->txtJenisPenghargaan->Text;
				if ($this->txtNoSk) $this->objDataPenghargaanIn->NoSk = $this->txtNoSk->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DataPenghargaanIn object
				$this->objDataPenghargaanIn->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DataPenghargaanIn instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDataPenghargaanIn() {
			$this->objDataPenghargaanIn->Delete();
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
				case 'DataPenghargaanIn': return $this->objDataPenghargaanIn;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DataPenghargaanIn fields -- will be created dynamically if not yet created
				case 'NipControl':
					if (!$this->lstNipObject) return $this->lstNipObject_Create();
					return $this->lstNipObject;
				case 'NipLabel':
					if (!$this->lblNip) return $this->lblNip_Create();
					return $this->lblNip;
				case 'JenisPenghargaanControl':
					if (!$this->txtJenisPenghargaan) return $this->txtJenisPenghargaan_Create();
					return $this->txtJenisPenghargaan;
				case 'JenisPenghargaanLabel':
					if (!$this->lblJenisPenghargaan) return $this->lblJenisPenghargaan_Create();
					return $this->lblJenisPenghargaan;
				case 'NoSkControl':
					if (!$this->txtNoSk) return $this->txtNoSk_Create();
					return $this->txtNoSk;
				case 'NoSkLabel':
					if (!$this->lblNoSk) return $this->lblNoSk_Create();
					return $this->lblNoSk;
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
					// Controls that point to DataPenghargaanIn fields
					case 'NipControl':
						return ($this->lstNipObject = QType::Cast($mixValue, 'QControl'));
					case 'JenisPenghargaanControl':
						return ($this->txtJenisPenghargaan = QType::Cast($mixValue, 'QControl'));
					case 'NoSkControl':
						return ($this->txtNoSk = QType::Cast($mixValue, 'QControl'));
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