<?php
	/**
	 * The abstract DataPendidikanGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DataPendidikan subclass which
	 * extends this DataPendidikanGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DataPendidikan class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $Nip the value for strNip (PK)
	 * @property string $Jenjang the value for strJenjang 
	 * @property string $NamaTempat the value for strNamaTempat 
	 * @property integer $TahunMasuk the value for intTahunMasuk 
	 * @property integer $TahunLulus the value for intTahunLulus 
	 * @property string $Gelar the value for strGelar 
	 * @property string $NoIjasah the value for strNoIjasah 
	 * @property DataPegawai $NipObject the value for the DataPegawai object referenced by strNip (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DataPendidikanGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column data_pendidikan.nip
		 * @var string strNip
		 */
		protected $strNip;
		const NipMaxLength = 45;
		const NipDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var string __strNip;
		 */
		protected $__strNip;

		/**
		 * Protected member variable that maps to the database column data_pendidikan.jenjang
		 * @var string strJenjang
		 */
		protected $strJenjang;
		const JenjangMaxLength = 45;
		const JenjangDefault = null;


		/**
		 * Protected member variable that maps to the database column data_pendidikan.nama_tempat
		 * @var string strNamaTempat
		 */
		protected $strNamaTempat;
		const NamaTempatMaxLength = 45;
		const NamaTempatDefault = null;


		/**
		 * Protected member variable that maps to the database column data_pendidikan.tahun_masuk
		 * @var integer intTahunMasuk
		 */
		protected $intTahunMasuk;
		const TahunMasukDefault = null;


		/**
		 * Protected member variable that maps to the database column data_pendidikan.tahun_lulus
		 * @var integer intTahunLulus
		 */
		protected $intTahunLulus;
		const TahunLulusDefault = null;


		/**
		 * Protected member variable that maps to the database column data_pendidikan.gelar
		 * @var string strGelar
		 */
		protected $strGelar;
		const GelarMaxLength = 45;
		const GelarDefault = null;


		/**
		 * Protected member variable that maps to the database column data_pendidikan.no_ijasah
		 * @var string strNoIjasah
		 */
		protected $strNoIjasah;
		const NoIjasahMaxLength = 45;
		const NoIjasahDefault = null;


		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column data_pendidikan.nip.
		 *
		 * NOTE: Always use the NipObject property getter to correctly retrieve this DataPegawai object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataPegawai objNipObject
		 */
		protected $objNipObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->strNip = DataPendidikan::NipDefault;
			$this->strJenjang = DataPendidikan::JenjangDefault;
			$this->strNamaTempat = DataPendidikan::NamaTempatDefault;
			$this->intTahunMasuk = DataPendidikan::TahunMasukDefault;
			$this->intTahunLulus = DataPendidikan::TahunLulusDefault;
			$this->strGelar = DataPendidikan::GelarDefault;
			$this->strNoIjasah = DataPendidikan::NoIjasahDefault;
		}


		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a DataPendidikan from PK Info
		 * @param string $strNip
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPendidikan
		 */
		public static function Load($strNip, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return DataPendidikan::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DataPendidikan()->Nip, $strNip)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all DataPendidikans
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPendidikan[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DataPendidikan::QueryArray to perform the LoadAll query
			try {
				return DataPendidikan::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DataPendidikans
		 * @return int
		 */
		public static function CountAll() {
			// Call DataPendidikan::QueryCount to perform the CountAll query
			return DataPendidikan::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCUBED QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcubed Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = DataPendidikan::GetDatabase();

			// Create/Build out the QueryBuilder object with DataPendidikan-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'data_pendidikan');
			DataPendidikan::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('data_pendidikan');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcubed Query method to query for a single DataPendidikan object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DataPendidikan the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPendidikan::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DataPendidikan object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DataPendidikan::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;
				}
				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if(null === $objDbRow)
					return null;
				return DataPendidikan::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DataPendidikan objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DataPendidikan[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPendidikan::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DataPendidikan::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of DataPendidikan objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPendidikan::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DataPendidikan::GetDatabase();

			$strQuery = DataPendidikan::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/datapendidikan', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DataPendidikan::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DataPendidikan
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'data_pendidikan';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'nip', $strAliasPrefix . 'nip');
			$objBuilder->AddSelectItem($strTableName, 'jenjang', $strAliasPrefix . 'jenjang');
			$objBuilder->AddSelectItem($strTableName, 'nama_tempat', $strAliasPrefix . 'nama_tempat');
			$objBuilder->AddSelectItem($strTableName, 'tahun_masuk', $strAliasPrefix . 'tahun_masuk');
			$objBuilder->AddSelectItem($strTableName, 'tahun_lulus', $strAliasPrefix . 'tahun_lulus');
			$objBuilder->AddSelectItem($strTableName, 'gelar', $strAliasPrefix . 'gelar');
			$objBuilder->AddSelectItem($strTableName, 'no_ijasah', $strAliasPrefix . 'no_ijasah');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DataPendidikan from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DataPendidikan::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DataPendidikan
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the DataPendidikan object
			$objToReturn = new DataPendidikan();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'nip', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nip'] : $strAliasPrefix . 'nip';
			$objToReturn->strNip = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$objToReturn->__strNip = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'jenjang', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'jenjang'] : $strAliasPrefix . 'jenjang';
			$objToReturn->strJenjang = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'nama_tempat', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nama_tempat'] : $strAliasPrefix . 'nama_tempat';
			$objToReturn->strNamaTempat = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tahun_masuk', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tahun_masuk'] : $strAliasPrefix . 'tahun_masuk';
			$objToReturn->intTahunMasuk = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'tahun_lulus', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tahun_lulus'] : $strAliasPrefix . 'tahun_lulus';
			$objToReturn->intTahunLulus = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'gelar', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'gelar'] : $strAliasPrefix . 'gelar';
			$objToReturn->strGelar = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'no_ijasah', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'no_ijasah'] : $strAliasPrefix . 'no_ijasah';
			$objToReturn->strNoIjasah = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Nip != $objPreviousItem->Nip) {
						continue;
					}

					// complete match - all primary key columns are the same
					return null;
				}
			}

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'data_pendidikan__';

			// Check for NipObject Early Binding
			$strAlias = $strAliasPrefix . 'nip__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objNipObject = DataPegawai::InstantiateDbRow($objDbRow, $strAliasPrefix . 'nip__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of DataPendidikans from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DataPendidikan[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();

			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DataPendidikan::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DataPendidikan::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single DataPendidikan object,
		 * by Nip Index(es)
		 * @param string $strNip
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPendidikan
		*/
		public static function LoadByNip($strNip, $objOptionalClauses = null) {
			return DataPendidikan::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DataPendidikan()->Nip, $strNip)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this DataPendidikan
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DataPendidikan::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `data_pendidikan` (
							`nip`,
							`jenjang`,
							`nama_tempat`,
							`tahun_masuk`,
							`tahun_lulus`,
							`gelar`,
							`no_ijasah`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNip) . ',
							' . $objDatabase->SqlVariable($this->strJenjang) . ',
							' . $objDatabase->SqlVariable($this->strNamaTempat) . ',
							' . $objDatabase->SqlVariable($this->intTahunMasuk) . ',
							' . $objDatabase->SqlVariable($this->intTahunLulus) . ',
							' . $objDatabase->SqlVariable($this->strGelar) . ',
							' . $objDatabase->SqlVariable($this->strNoIjasah) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`data_pendidikan`
						SET
							`nip` = ' . $objDatabase->SqlVariable($this->strNip) . ',
							`jenjang` = ' . $objDatabase->SqlVariable($this->strJenjang) . ',
							`nama_tempat` = ' . $objDatabase->SqlVariable($this->strNamaTempat) . ',
							`tahun_masuk` = ' . $objDatabase->SqlVariable($this->intTahunMasuk) . ',
							`tahun_lulus` = ' . $objDatabase->SqlVariable($this->intTahunLulus) . ',
							`gelar` = ' . $objDatabase->SqlVariable($this->strGelar) . ',
							`no_ijasah` = ' . $objDatabase->SqlVariable($this->strNoIjasah) . '
						WHERE
							`nip` = ' . $objDatabase->SqlVariable($this->__strNip) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__strNip = $this->strNip;


			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this DataPendidikan
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strNip)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DataPendidikan with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DataPendidikan::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`data_pendidikan`
				WHERE
					`nip` = ' . $objDatabase->SqlVariable($this->strNip) . '');
		}

		/**
		 * Delete all DataPendidikans
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DataPendidikan::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`data_pendidikan`');
		}

		/**
		 * Truncate data_pendidikan table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DataPendidikan::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `data_pendidikan`');
		}

		/**
		 * Reload this DataPendidikan from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DataPendidikan object.');

			// Reload the Object
			$objReloaded = DataPendidikan::Load($this->strNip);

			// Update $this's local variables to match
			$this->Nip = $objReloaded->Nip;
			$this->__strNip = $this->strNip;
			$this->strJenjang = $objReloaded->strJenjang;
			$this->strNamaTempat = $objReloaded->strNamaTempat;
			$this->intTahunMasuk = $objReloaded->intTahunMasuk;
			$this->intTahunLulus = $objReloaded->intTahunLulus;
			$this->strGelar = $objReloaded->strGelar;
			$this->strNoIjasah = $objReloaded->strNoIjasah;
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Nip':
					/**
					 * Gets the value for strNip (PK)
					 * @return string
					 */
					return $this->strNip;

				case 'Jenjang':
					/**
					 * Gets the value for strJenjang 
					 * @return string
					 */
					return $this->strJenjang;

				case 'NamaTempat':
					/**
					 * Gets the value for strNamaTempat 
					 * @return string
					 */
					return $this->strNamaTempat;

				case 'TahunMasuk':
					/**
					 * Gets the value for intTahunMasuk 
					 * @return integer
					 */
					return $this->intTahunMasuk;

				case 'TahunLulus':
					/**
					 * Gets the value for intTahunLulus 
					 * @return integer
					 */
					return $this->intTahunLulus;

				case 'Gelar':
					/**
					 * Gets the value for strGelar 
					 * @return string
					 */
					return $this->strGelar;

				case 'NoIjasah':
					/**
					 * Gets the value for strNoIjasah 
					 * @return string
					 */
					return $this->strNoIjasah;


				///////////////////
				// Member Objects
				///////////////////
				case 'NipObject':
					/**
					 * Gets the value for the DataPegawai object referenced by strNip (PK)
					 * @return DataPegawai
					 */
					try {
						if ((!$this->objNipObject) && (!is_null($this->strNip)))
							$this->objNipObject = DataPegawai::Load($this->strNip);
						return $this->objNipObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


				case '__Restored':
					return $this->__blnRestored;

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
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Nip':
					/**
					 * Sets the value for strNip (PK)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						$this->objNipObject = null;
						return ($this->strNip = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Jenjang':
					/**
					 * Sets the value for strJenjang 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strJenjang = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NamaTempat':
					/**
					 * Sets the value for strNamaTempat 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNamaTempat = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TahunMasuk':
					/**
					 * Sets the value for intTahunMasuk 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTahunMasuk = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TahunLulus':
					/**
					 * Sets the value for intTahunLulus 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTahunLulus = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Gelar':
					/**
					 * Sets the value for strGelar 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGelar = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NoIjasah':
					/**
					 * Sets the value for strNoIjasah 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNoIjasah = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'NipObject':
					/**
					 * Sets the value for the DataPegawai object referenced by strNip (PK)
					 * @param DataPegawai $mixValue
					 * @return DataPegawai
					 */
					if (is_null($mixValue)) {
						$this->strNip = null;
						$this->objNipObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a DataPegawai object
						try {
							$mixValue = QType::Cast($mixValue, 'DataPegawai');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED DataPegawai object
						if (is_null($mixValue->Nip))
							throw new QCallerException('Unable to set an unsaved NipObject for this DataPendidikan');

						// Update Local Member Variables
						$this->objNipObject = $mixValue;
						$this->strNip = $mixValue->Nip;

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="DataPendidikan"><sequence>';
			$strToReturn .= '<element name="NipObject" type="xsd1:DataPegawai"/>';
			$strToReturn .= '<element name="Jenjang" type="xsd:string"/>';
			$strToReturn .= '<element name="NamaTempat" type="xsd:string"/>';
			$strToReturn .= '<element name="TahunMasuk" type="xsd:int"/>';
			$strToReturn .= '<element name="TahunLulus" type="xsd:int"/>';
			$strToReturn .= '<element name="Gelar" type="xsd:string"/>';
			$strToReturn .= '<element name="NoIjasah" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DataPendidikan', $strComplexTypeArray)) {
				$strComplexTypeArray['DataPendidikan'] = DataPendidikan::GetSoapComplexTypeXml();
				DataPegawai::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DataPendidikan::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DataPendidikan();
			if ((property_exists($objSoapObject, 'NipObject')) &&
				($objSoapObject->NipObject))
				$objToReturn->NipObject = DataPegawai::GetObjectFromSoapObject($objSoapObject->NipObject);
			if (property_exists($objSoapObject, 'Jenjang'))
				$objToReturn->strJenjang = $objSoapObject->Jenjang;
			if (property_exists($objSoapObject, 'NamaTempat'))
				$objToReturn->strNamaTempat = $objSoapObject->NamaTempat;
			if (property_exists($objSoapObject, 'TahunMasuk'))
				$objToReturn->intTahunMasuk = $objSoapObject->TahunMasuk;
			if (property_exists($objSoapObject, 'TahunLulus'))
				$objToReturn->intTahunLulus = $objSoapObject->TahunLulus;
			if (property_exists($objSoapObject, 'Gelar'))
				$objToReturn->strGelar = $objSoapObject->Gelar;
			if (property_exists($objSoapObject, 'NoIjasah'))
				$objToReturn->strNoIjasah = $objSoapObject->NoIjasah;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DataPendidikan::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objNipObject)
				$objObject->objNipObject = DataPegawai::GetSoapObjectFromObject($objObject->objNipObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->strNip = null;
			return $objObject;
		}


		////////////////////////////////////////
		// METHODS for JSON Object Translation
		////////////////////////////////////////

		// this function is required for objects that implement the
		// IteratorAggregate interface
		public function getIterator() {
			///////////////////
			// Member Variables
			///////////////////
			$iArray['Nip'] = $this->strNip;
			$iArray['Jenjang'] = $this->strJenjang;
			$iArray['NamaTempat'] = $this->strNamaTempat;
			$iArray['TahunMasuk'] = $this->intTahunMasuk;
			$iArray['TahunLulus'] = $this->intTahunLulus;
			$iArray['Gelar'] = $this->strGelar;
			$iArray['NoIjasah'] = $this->strNoIjasah;
			return new ArrayIterator($iArray);
		}

		// this function returns a Json formatted string using the
		// IteratorAggregate interface
		public function getJson() {
			return json_encode($this->getIterator());
		}


	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Nip
     * @property-read QQNodeDataPegawai $NipObject
     * @property-read QQNode $Jenjang
     * @property-read QQNode $NamaTempat
     * @property-read QQNode $TahunMasuk
     * @property-read QQNode $TahunLulus
     * @property-read QQNode $Gelar
     * @property-read QQNode $NoIjasah
     *
     *

     * @property-read QQNodeDataPegawai $_PrimaryKeyNode
     **/
	class QQNodeDataPendidikan extends QQNode {
		protected $strTableName = 'data_pendidikan';
		protected $strPrimaryKey = 'nip';
		protected $strClassName = 'DataPendidikan';
		public function __get($strName) {
			switch ($strName) {
				case 'Nip':
					return new QQNode('nip', 'Nip', 'VarChar', $this);
				case 'NipObject':
					return new QQNodeDataPegawai('nip', 'NipObject', 'VarChar', $this);
				case 'Jenjang':
					return new QQNode('jenjang', 'Jenjang', 'VarChar', $this);
				case 'NamaTempat':
					return new QQNode('nama_tempat', 'NamaTempat', 'VarChar', $this);
				case 'TahunMasuk':
					return new QQNode('tahun_masuk', 'TahunMasuk', 'Integer', $this);
				case 'TahunLulus':
					return new QQNode('tahun_lulus', 'TahunLulus', 'Integer', $this);
				case 'Gelar':
					return new QQNode('gelar', 'Gelar', 'VarChar', $this);
				case 'NoIjasah':
					return new QQNode('no_ijasah', 'NoIjasah', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQNodeDataPegawai('nip', 'Nip', 'VarChar', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @property-read QQNode $Nip
     * @property-read QQNodeDataPegawai $NipObject
     * @property-read QQNode $Jenjang
     * @property-read QQNode $NamaTempat
     * @property-read QQNode $TahunMasuk
     * @property-read QQNode $TahunLulus
     * @property-read QQNode $Gelar
     * @property-read QQNode $NoIjasah
     *
     *

     * @property-read QQNodeDataPegawai $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDataPendidikan extends QQReverseReferenceNode {
		protected $strTableName = 'data_pendidikan';
		protected $strPrimaryKey = 'nip';
		protected $strClassName = 'DataPendidikan';
		public function __get($strName) {
			switch ($strName) {
				case 'Nip':
					return new QQNode('nip', 'Nip', 'string', $this);
				case 'NipObject':
					return new QQNodeDataPegawai('nip', 'NipObject', 'string', $this);
				case 'Jenjang':
					return new QQNode('jenjang', 'Jenjang', 'string', $this);
				case 'NamaTempat':
					return new QQNode('nama_tempat', 'NamaTempat', 'string', $this);
				case 'TahunMasuk':
					return new QQNode('tahun_masuk', 'TahunMasuk', 'integer', $this);
				case 'TahunLulus':
					return new QQNode('tahun_lulus', 'TahunLulus', 'integer', $this);
				case 'Gelar':
					return new QQNode('gelar', 'Gelar', 'string', $this);
				case 'NoIjasah':
					return new QQNode('no_ijasah', 'NoIjasah', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNodeDataPegawai('nip', 'Nip', 'string', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>
