<?php
	/**
	 * The abstract DataPegawaiGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DataPegawai subclass which
	 * extends this DataPegawaiGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DataPegawai class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $Nip the value for strNip (PK)
	 * @property string $Nama the value for strNama 
	 * @property QDateTime $TglAngkatCapeg the value for dttTglAngkatCapeg 
	 * @property QDateTime $TglAngkatPeg the value for dttTglAngkatPeg 
	 * @property QDateTime $TglMenjabat the value for dttTglMenjabat 
	 * @property string $Status the value for strStatus 
	 * @property string $Golongan the value for strGolongan 
	 * @property DataAnak $DataAnak the value for the DataAnak object that uniquely references this DataPegawai
	 * @property DataDevMandiri $DataDevMandiri the value for the DataDevMandiri object that uniquely references this DataPegawai
	 * @property DataDiklat $DataDiklat the value for the DataDiklat object that uniquely references this DataPegawai
	 * @property DataOrganisasi $DataOrganisasi the value for the DataOrganisasi object that uniquely references this DataPegawai
	 * @property DataPasangan $DataPasangan the value for the DataPasangan object that uniquely references this DataPegawai
	 * @property DataPendidikan $DataPendidikan the value for the DataPendidikan object that uniquely references this DataPegawai
	 * @property DataPengalaman $DataPengalaman the value for the DataPengalaman object that uniquely references this DataPegawai
	 * @property DataPengalamanKerja $DataPengalamanKerja the value for the DataPengalamanKerja object that uniquely references this DataPegawai
	 * @property DataPenghargaanEks $DataPenghargaanEks the value for the DataPenghargaanEks object that uniquely references this DataPegawai
	 * @property DataPenghargaanIn $DataPenghargaanIn the value for the DataPenghargaanIn object that uniquely references this DataPegawai
	 * @property DataPribadi $DataPribadi the value for the DataPribadi object that uniquely references this DataPegawai
	 * @property DataRiwayatKerja $DataRiwayatKerja the value for the DataRiwayatKerja object that uniquely references this DataPegawai
	 * @property DataSanksi $DataSanksi the value for the DataSanksi object that uniquely references this DataPegawai
	 * @property DataSkLain $DataSkLain the value for the DataSkLain object that uniquely references this DataPegawai
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DataPegawaiGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column data_pegawai.nip
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
		 * Protected member variable that maps to the database column data_pegawai.nama
		 * @var string strNama
		 */
		protected $strNama;
		const NamaMaxLength = 45;
		const NamaDefault = null;


		/**
		 * Protected member variable that maps to the database column data_pegawai.tgl_angkat_capeg
		 * @var QDateTime dttTglAngkatCapeg
		 */
		protected $dttTglAngkatCapeg;
		const TglAngkatCapegDefault = null;


		/**
		 * Protected member variable that maps to the database column data_pegawai.tgl_angkat_peg
		 * @var QDateTime dttTglAngkatPeg
		 */
		protected $dttTglAngkatPeg;
		const TglAngkatPegDefault = null;


		/**
		 * Protected member variable that maps to the database column data_pegawai.tgl_menjabat
		 * @var QDateTime dttTglMenjabat
		 */
		protected $dttTglMenjabat;
		const TglMenjabatDefault = null;


		/**
		 * Protected member variable that maps to the database column data_pegawai.status
		 * @var string strStatus
		 */
		protected $strStatus;
		const StatusMaxLength = 45;
		const StatusDefault = null;


		/**
		 * Protected member variable that maps to the database column data_pegawai.golongan
		 * @var string strGolongan
		 */
		protected $strGolongan;
		const GolonganMaxLength = 45;
		const GolonganDefault = null;


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
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_anak.nip.
		 *
		 * NOTE: Always use the DataAnak property getter to correctly retrieve this DataAnak object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataAnak objDataAnak
		 */
		protected $objDataAnak;

		/**
		 * Used internally to manage whether the adjoined DataAnak object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataAnak;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_dev_mandiri.nip.
		 *
		 * NOTE: Always use the DataDevMandiri property getter to correctly retrieve this DataDevMandiri object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataDevMandiri objDataDevMandiri
		 */
		protected $objDataDevMandiri;

		/**
		 * Used internally to manage whether the adjoined DataDevMandiri object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataDevMandiri;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_diklat.nip.
		 *
		 * NOTE: Always use the DataDiklat property getter to correctly retrieve this DataDiklat object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataDiklat objDataDiklat
		 */
		protected $objDataDiklat;

		/**
		 * Used internally to manage whether the adjoined DataDiklat object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataDiklat;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_organisasi.nip.
		 *
		 * NOTE: Always use the DataOrganisasi property getter to correctly retrieve this DataOrganisasi object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataOrganisasi objDataOrganisasi
		 */
		protected $objDataOrganisasi;

		/**
		 * Used internally to manage whether the adjoined DataOrganisasi object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataOrganisasi;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_pasangan.nip.
		 *
		 * NOTE: Always use the DataPasangan property getter to correctly retrieve this DataPasangan object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataPasangan objDataPasangan
		 */
		protected $objDataPasangan;

		/**
		 * Used internally to manage whether the adjoined DataPasangan object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataPasangan;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_pendidikan.nip.
		 *
		 * NOTE: Always use the DataPendidikan property getter to correctly retrieve this DataPendidikan object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataPendidikan objDataPendidikan
		 */
		protected $objDataPendidikan;

		/**
		 * Used internally to manage whether the adjoined DataPendidikan object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataPendidikan;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_pengalaman.nip.
		 *
		 * NOTE: Always use the DataPengalaman property getter to correctly retrieve this DataPengalaman object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataPengalaman objDataPengalaman
		 */
		protected $objDataPengalaman;

		/**
		 * Used internally to manage whether the adjoined DataPengalaman object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataPengalaman;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_pengalaman_kerja.nip.
		 *
		 * NOTE: Always use the DataPengalamanKerja property getter to correctly retrieve this DataPengalamanKerja object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataPengalamanKerja objDataPengalamanKerja
		 */
		protected $objDataPengalamanKerja;

		/**
		 * Used internally to manage whether the adjoined DataPengalamanKerja object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataPengalamanKerja;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_penghargaan_eks.nip.
		 *
		 * NOTE: Always use the DataPenghargaanEks property getter to correctly retrieve this DataPenghargaanEks object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataPenghargaanEks objDataPenghargaanEks
		 */
		protected $objDataPenghargaanEks;

		/**
		 * Used internally to manage whether the adjoined DataPenghargaanEks object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataPenghargaanEks;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_penghargaan_in.nip.
		 *
		 * NOTE: Always use the DataPenghargaanIn property getter to correctly retrieve this DataPenghargaanIn object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataPenghargaanIn objDataPenghargaanIn
		 */
		protected $objDataPenghargaanIn;

		/**
		 * Used internally to manage whether the adjoined DataPenghargaanIn object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataPenghargaanIn;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_pribadi.nip.
		 *
		 * NOTE: Always use the DataPribadi property getter to correctly retrieve this DataPribadi object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataPribadi objDataPribadi
		 */
		protected $objDataPribadi;

		/**
		 * Used internally to manage whether the adjoined DataPribadi object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataPribadi;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_riwayat_kerja.nip.
		 *
		 * NOTE: Always use the DataRiwayatKerja property getter to correctly retrieve this DataRiwayatKerja object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataRiwayatKerja objDataRiwayatKerja
		 */
		protected $objDataRiwayatKerja;

		/**
		 * Used internally to manage whether the adjoined DataRiwayatKerja object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataRiwayatKerja;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_sanksi.nip.
		 *
		 * NOTE: Always use the DataSanksi property getter to correctly retrieve this DataSanksi object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataSanksi objDataSanksi
		 */
		protected $objDataSanksi;

		/**
		 * Used internally to manage whether the adjoined DataSanksi object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataSanksi;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column data_sk_lain.nip.
		 *
		 * NOTE: Always use the DataSkLain property getter to correctly retrieve this DataSkLain object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataSkLain objDataSkLain
		 */
		protected $objDataSkLain;

		/**
		 * Used internally to manage whether the adjoined DataSkLain object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyDataSkLain;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->strNip = DataPegawai::NipDefault;
			$this->strNama = DataPegawai::NamaDefault;
			$this->dttTglAngkatCapeg = (DataPegawai::TglAngkatCapegDefault === null)?null:new QDateTime(DataPegawai::TglAngkatCapegDefault);
			$this->dttTglAngkatPeg = (DataPegawai::TglAngkatPegDefault === null)?null:new QDateTime(DataPegawai::TglAngkatPegDefault);
			$this->dttTglMenjabat = (DataPegawai::TglMenjabatDefault === null)?null:new QDateTime(DataPegawai::TglMenjabatDefault);
			$this->strStatus = DataPegawai::StatusDefault;
			$this->strGolongan = DataPegawai::GolonganDefault;
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
		 * Load a DataPegawai from PK Info
		 * @param string $strNip
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPegawai
		 */
		public static function Load($strNip, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return DataPegawai::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DataPegawai()->Nip, $strNip)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all DataPegawais
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPegawai[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DataPegawai::QueryArray to perform the LoadAll query
			try {
				return DataPegawai::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DataPegawais
		 * @return int
		 */
		public static function CountAll() {
			// Call DataPegawai::QueryCount to perform the CountAll query
			return DataPegawai::QueryCount(QQ::All());
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
			$objDatabase = DataPegawai::GetDatabase();

			// Create/Build out the QueryBuilder object with DataPegawai-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'data_pegawai');
			DataPegawai::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('data_pegawai');

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
		 * Static Qcubed Query method to query for a single DataPegawai object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DataPegawai the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPegawai::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DataPegawai object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DataPegawai::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DataPegawai::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DataPegawai objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DataPegawai[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPegawai::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DataPegawai::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of DataPegawai objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPegawai::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DataPegawai::GetDatabase();

			$strQuery = DataPegawai::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/datapegawai', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DataPegawai::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DataPegawai
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'data_pegawai';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'nip', $strAliasPrefix . 'nip');
			$objBuilder->AddSelectItem($strTableName, 'nama', $strAliasPrefix . 'nama');
			$objBuilder->AddSelectItem($strTableName, 'tgl_angkat_capeg', $strAliasPrefix . 'tgl_angkat_capeg');
			$objBuilder->AddSelectItem($strTableName, 'tgl_angkat_peg', $strAliasPrefix . 'tgl_angkat_peg');
			$objBuilder->AddSelectItem($strTableName, 'tgl_menjabat', $strAliasPrefix . 'tgl_menjabat');
			$objBuilder->AddSelectItem($strTableName, 'status', $strAliasPrefix . 'status');
			$objBuilder->AddSelectItem($strTableName, 'golongan', $strAliasPrefix . 'golongan');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DataPegawai from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DataPegawai::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DataPegawai
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the DataPegawai object
			$objToReturn = new DataPegawai();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'nip', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nip'] : $strAliasPrefix . 'nip';
			$objToReturn->strNip = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$objToReturn->__strNip = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'nama', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nama'] : $strAliasPrefix . 'nama';
			$objToReturn->strNama = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tgl_angkat_capeg', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tgl_angkat_capeg'] : $strAliasPrefix . 'tgl_angkat_capeg';
			$objToReturn->dttTglAngkatCapeg = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'tgl_angkat_peg', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tgl_angkat_peg'] : $strAliasPrefix . 'tgl_angkat_peg';
			$objToReturn->dttTglAngkatPeg = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'tgl_menjabat', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tgl_menjabat'] : $strAliasPrefix . 'tgl_menjabat';
			$objToReturn->dttTglMenjabat = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'status', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'status'] : $strAliasPrefix . 'status';
			$objToReturn->strStatus = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'golongan', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'golongan'] : $strAliasPrefix . 'golongan';
			$objToReturn->strGolongan = $objDbRow->GetColumn($strAliasName, 'VarChar');

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
				$strAliasPrefix = 'data_pegawai__';


			// Check for DataAnak Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'dataanak__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataAnak = DataAnak::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dataanak__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataAnak = false;
			}

			// Check for DataDevMandiri Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datadevmandiri__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataDevMandiri = DataDevMandiri::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datadevmandiri__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataDevMandiri = false;
			}

			// Check for DataDiklat Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datadiklat__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataDiklat = DataDiklat::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datadiklat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataDiklat = false;
			}

			// Check for DataOrganisasi Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'dataorganisasi__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataOrganisasi = DataOrganisasi::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dataorganisasi__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataOrganisasi = false;
			}

			// Check for DataPasangan Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datapasangan__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataPasangan = DataPasangan::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datapasangan__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataPasangan = false;
			}

			// Check for DataPendidikan Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datapendidikan__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataPendidikan = DataPendidikan::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datapendidikan__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataPendidikan = false;
			}

			// Check for DataPengalaman Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datapengalaman__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataPengalaman = DataPengalaman::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datapengalaman__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataPengalaman = false;
			}

			// Check for DataPengalamanKerja Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datapengalamankerja__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataPengalamanKerja = DataPengalamanKerja::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datapengalamankerja__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataPengalamanKerja = false;
			}

			// Check for DataPenghargaanEks Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datapenghargaaneks__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataPenghargaanEks = DataPenghargaanEks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datapenghargaaneks__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataPenghargaanEks = false;
			}

			// Check for DataPenghargaanIn Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datapenghargaanin__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataPenghargaanIn = DataPenghargaanIn::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datapenghargaanin__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataPenghargaanIn = false;
			}

			// Check for DataPribadi Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datapribadi__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataPribadi = DataPribadi::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datapribadi__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataPribadi = false;
			}

			// Check for DataRiwayatKerja Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datariwayatkerja__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataRiwayatKerja = DataRiwayatKerja::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datariwayatkerja__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataRiwayatKerja = false;
			}

			// Check for DataSanksi Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datasanksi__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataSanksi = DataSanksi::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datasanksi__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataSanksi = false;
			}

			// Check for DataSkLain Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'datasklain__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDataSkLain = DataSkLain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'datasklain__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDataSkLain = false;
			}



			return $objToReturn;
		}

		/**
		 * Instantiate an array of DataPegawais from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DataPegawai[]
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
					$objItem = DataPegawai::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DataPegawai::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single DataPegawai object,
		 * by Nip Index(es)
		 * @param string $strNip
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPegawai
		*/
		public static function LoadByNip($strNip, $objOptionalClauses = null) {
			return DataPegawai::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DataPegawai()->Nip, $strNip)
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
		 * Save this DataPegawai
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DataPegawai::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `data_pegawai` (
							`nip`,
							`nama`,
							`tgl_angkat_capeg`,
							`tgl_angkat_peg`,
							`tgl_menjabat`,
							`status`,
							`golongan`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNip) . ',
							' . $objDatabase->SqlVariable($this->strNama) . ',
							' . $objDatabase->SqlVariable($this->dttTglAngkatCapeg) . ',
							' . $objDatabase->SqlVariable($this->dttTglAngkatPeg) . ',
							' . $objDatabase->SqlVariable($this->dttTglMenjabat) . ',
							' . $objDatabase->SqlVariable($this->strStatus) . ',
							' . $objDatabase->SqlVariable($this->strGolongan) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`data_pegawai`
						SET
							`nip` = ' . $objDatabase->SqlVariable($this->strNip) . ',
							`nama` = ' . $objDatabase->SqlVariable($this->strNama) . ',
							`tgl_angkat_capeg` = ' . $objDatabase->SqlVariable($this->dttTglAngkatCapeg) . ',
							`tgl_angkat_peg` = ' . $objDatabase->SqlVariable($this->dttTglAngkatPeg) . ',
							`tgl_menjabat` = ' . $objDatabase->SqlVariable($this->dttTglMenjabat) . ',
							`status` = ' . $objDatabase->SqlVariable($this->strStatus) . ',
							`golongan` = ' . $objDatabase->SqlVariable($this->strGolongan) . '
						WHERE
							`nip` = ' . $objDatabase->SqlVariable($this->__strNip) . '
					');
				}

		
		
				// Update the adjoined DataAnak object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataAnak) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataAnak::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataAnak) {
						$this->objDataAnak->Nip = $this->strNip;
						$this->objDataAnak->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataAnak = false;
				}
		
		
				// Update the adjoined DataDevMandiri object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataDevMandiri) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataDevMandiri::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataDevMandiri) {
						$this->objDataDevMandiri->Nip = $this->strNip;
						$this->objDataDevMandiri->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataDevMandiri = false;
				}
		
		
				// Update the adjoined DataDiklat object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataDiklat) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataDiklat::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataDiklat) {
						$this->objDataDiklat->Nip = $this->strNip;
						$this->objDataDiklat->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataDiklat = false;
				}
		
		
				// Update the adjoined DataOrganisasi object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataOrganisasi) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataOrganisasi::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataOrganisasi) {
						$this->objDataOrganisasi->Nip = $this->strNip;
						$this->objDataOrganisasi->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataOrganisasi = false;
				}
		
		
				// Update the adjoined DataPasangan object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataPasangan) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataPasangan::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataPasangan) {
						$this->objDataPasangan->Nip = $this->strNip;
						$this->objDataPasangan->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataPasangan = false;
				}
		
		
				// Update the adjoined DataPendidikan object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataPendidikan) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataPendidikan::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataPendidikan) {
						$this->objDataPendidikan->Nip = $this->strNip;
						$this->objDataPendidikan->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataPendidikan = false;
				}
		
		
				// Update the adjoined DataPengalaman object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataPengalaman) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataPengalaman::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataPengalaman) {
						$this->objDataPengalaman->Nip = $this->strNip;
						$this->objDataPengalaman->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataPengalaman = false;
				}
		
		
				// Update the adjoined DataPengalamanKerja object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataPengalamanKerja) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataPengalamanKerja::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataPengalamanKerja) {
						$this->objDataPengalamanKerja->Nip = $this->strNip;
						$this->objDataPengalamanKerja->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataPengalamanKerja = false;
				}
		
		
				// Update the adjoined DataPenghargaanEks object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataPenghargaanEks) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataPenghargaanEks::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataPenghargaanEks) {
						$this->objDataPenghargaanEks->Nip = $this->strNip;
						$this->objDataPenghargaanEks->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataPenghargaanEks = false;
				}
		
		
				// Update the adjoined DataPenghargaanIn object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataPenghargaanIn) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataPenghargaanIn::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataPenghargaanIn) {
						$this->objDataPenghargaanIn->Nip = $this->strNip;
						$this->objDataPenghargaanIn->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataPenghargaanIn = false;
				}
		
		
				// Update the adjoined DataPribadi object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataPribadi) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataPribadi::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataPribadi) {
						$this->objDataPribadi->Nip = $this->strNip;
						$this->objDataPribadi->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataPribadi = false;
				}
		
		
				// Update the adjoined DataRiwayatKerja object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataRiwayatKerja) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataRiwayatKerja::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataRiwayatKerja) {
						$this->objDataRiwayatKerja->Nip = $this->strNip;
						$this->objDataRiwayatKerja->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataRiwayatKerja = false;
				}
		
		
				// Update the adjoined DataSanksi object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataSanksi) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataSanksi::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataSanksi) {
						$this->objDataSanksi->Nip = $this->strNip;
						$this->objDataSanksi->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataSanksi = false;
				}
		
		
				// Update the adjoined DataSkLain object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDataSkLain) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DataSkLain::LoadByNip($this->strNip)) {
						$objAssociated->Nip = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDataSkLain) {
						$this->objDataSkLain->Nip = $this->strNip;
						$this->objDataSkLain->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDataSkLain = false;
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
		 * Delete this DataPegawai
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strNip)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DataPegawai with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DataPegawai::GetDatabase();

			
			
			// Update the adjoined DataAnak object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataAnak::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataDevMandiri object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataDevMandiri::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataDiklat object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataDiklat::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataOrganisasi object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataOrganisasi::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataPasangan object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataPasangan::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataPendidikan object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataPendidikan::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataPengalaman object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataPengalaman::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataPengalamanKerja object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataPengalamanKerja::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataPenghargaanEks object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataPenghargaanEks::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataPenghargaanIn object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataPenghargaanIn::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataPribadi object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataPribadi::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataRiwayatKerja object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataRiwayatKerja::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataSanksi object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataSanksi::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}
			
			
			// Update the adjoined DataSkLain object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DataSkLain::LoadByNip($this->strNip)) {
				$objAssociated->Delete();
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`data_pegawai`
				WHERE
					`nip` = ' . $objDatabase->SqlVariable($this->strNip) . '');
		}

		/**
		 * Delete all DataPegawais
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DataPegawai::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`data_pegawai`');
		}

		/**
		 * Truncate data_pegawai table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DataPegawai::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `data_pegawai`');
		}

		/**
		 * Reload this DataPegawai from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DataPegawai object.');

			// Reload the Object
			$objReloaded = DataPegawai::Load($this->strNip);

			// Update $this's local variables to match
			$this->strNip = $objReloaded->strNip;
			$this->__strNip = $this->strNip;
			$this->strNama = $objReloaded->strNama;
			$this->dttTglAngkatCapeg = $objReloaded->dttTglAngkatCapeg;
			$this->dttTglAngkatPeg = $objReloaded->dttTglAngkatPeg;
			$this->dttTglMenjabat = $objReloaded->dttTglMenjabat;
			$this->strStatus = $objReloaded->strStatus;
			$this->strGolongan = $objReloaded->strGolongan;
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

				case 'Nama':
					/**
					 * Gets the value for strNama 
					 * @return string
					 */
					return $this->strNama;

				case 'TglAngkatCapeg':
					/**
					 * Gets the value for dttTglAngkatCapeg 
					 * @return QDateTime
					 */
					return $this->dttTglAngkatCapeg;

				case 'TglAngkatPeg':
					/**
					 * Gets the value for dttTglAngkatPeg 
					 * @return QDateTime
					 */
					return $this->dttTglAngkatPeg;

				case 'TglMenjabat':
					/**
					 * Gets the value for dttTglMenjabat 
					 * @return QDateTime
					 */
					return $this->dttTglMenjabat;

				case 'Status':
					/**
					 * Gets the value for strStatus 
					 * @return string
					 */
					return $this->strStatus;

				case 'Golongan':
					/**
					 * Gets the value for strGolongan 
					 * @return string
					 */
					return $this->strGolongan;


				///////////////////
				// Member Objects
				///////////////////
		
		
				case 'DataAnak':
					/**
					 * Gets the value for the DataAnak object that uniquely references this DataPegawai
					 * by objDataAnak (Unique)
					 * @return DataAnak
					 */
					try {
						if ($this->objDataAnak === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataAnak)
							$this->objDataAnak = DataAnak::LoadByNip($this->strNip);
						return $this->objDataAnak;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataDevMandiri':
					/**
					 * Gets the value for the DataDevMandiri object that uniquely references this DataPegawai
					 * by objDataDevMandiri (Unique)
					 * @return DataDevMandiri
					 */
					try {
						if ($this->objDataDevMandiri === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataDevMandiri)
							$this->objDataDevMandiri = DataDevMandiri::LoadByNip($this->strNip);
						return $this->objDataDevMandiri;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataDiklat':
					/**
					 * Gets the value for the DataDiklat object that uniquely references this DataPegawai
					 * by objDataDiklat (Unique)
					 * @return DataDiklat
					 */
					try {
						if ($this->objDataDiklat === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataDiklat)
							$this->objDataDiklat = DataDiklat::LoadByNip($this->strNip);
						return $this->objDataDiklat;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataOrganisasi':
					/**
					 * Gets the value for the DataOrganisasi object that uniquely references this DataPegawai
					 * by objDataOrganisasi (Unique)
					 * @return DataOrganisasi
					 */
					try {
						if ($this->objDataOrganisasi === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataOrganisasi)
							$this->objDataOrganisasi = DataOrganisasi::LoadByNip($this->strNip);
						return $this->objDataOrganisasi;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataPasangan':
					/**
					 * Gets the value for the DataPasangan object that uniquely references this DataPegawai
					 * by objDataPasangan (Unique)
					 * @return DataPasangan
					 */
					try {
						if ($this->objDataPasangan === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataPasangan)
							$this->objDataPasangan = DataPasangan::LoadByNip($this->strNip);
						return $this->objDataPasangan;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataPendidikan':
					/**
					 * Gets the value for the DataPendidikan object that uniquely references this DataPegawai
					 * by objDataPendidikan (Unique)
					 * @return DataPendidikan
					 */
					try {
						if ($this->objDataPendidikan === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataPendidikan)
							$this->objDataPendidikan = DataPendidikan::LoadByNip($this->strNip);
						return $this->objDataPendidikan;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataPengalaman':
					/**
					 * Gets the value for the DataPengalaman object that uniquely references this DataPegawai
					 * by objDataPengalaman (Unique)
					 * @return DataPengalaman
					 */
					try {
						if ($this->objDataPengalaman === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataPengalaman)
							$this->objDataPengalaman = DataPengalaman::LoadByNip($this->strNip);
						return $this->objDataPengalaman;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataPengalamanKerja':
					/**
					 * Gets the value for the DataPengalamanKerja object that uniquely references this DataPegawai
					 * by objDataPengalamanKerja (Unique)
					 * @return DataPengalamanKerja
					 */
					try {
						if ($this->objDataPengalamanKerja === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataPengalamanKerja)
							$this->objDataPengalamanKerja = DataPengalamanKerja::LoadByNip($this->strNip);
						return $this->objDataPengalamanKerja;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataPenghargaanEks':
					/**
					 * Gets the value for the DataPenghargaanEks object that uniquely references this DataPegawai
					 * by objDataPenghargaanEks (Unique)
					 * @return DataPenghargaanEks
					 */
					try {
						if ($this->objDataPenghargaanEks === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataPenghargaanEks)
							$this->objDataPenghargaanEks = DataPenghargaanEks::LoadByNip($this->strNip);
						return $this->objDataPenghargaanEks;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataPenghargaanIn':
					/**
					 * Gets the value for the DataPenghargaanIn object that uniquely references this DataPegawai
					 * by objDataPenghargaanIn (Unique)
					 * @return DataPenghargaanIn
					 */
					try {
						if ($this->objDataPenghargaanIn === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataPenghargaanIn)
							$this->objDataPenghargaanIn = DataPenghargaanIn::LoadByNip($this->strNip);
						return $this->objDataPenghargaanIn;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataPribadi':
					/**
					 * Gets the value for the DataPribadi object that uniquely references this DataPegawai
					 * by objDataPribadi (Unique)
					 * @return DataPribadi
					 */
					try {
						if ($this->objDataPribadi === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataPribadi)
							$this->objDataPribadi = DataPribadi::LoadByNip($this->strNip);
						return $this->objDataPribadi;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataRiwayatKerja':
					/**
					 * Gets the value for the DataRiwayatKerja object that uniquely references this DataPegawai
					 * by objDataRiwayatKerja (Unique)
					 * @return DataRiwayatKerja
					 */
					try {
						if ($this->objDataRiwayatKerja === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataRiwayatKerja)
							$this->objDataRiwayatKerja = DataRiwayatKerja::LoadByNip($this->strNip);
						return $this->objDataRiwayatKerja;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataSanksi':
					/**
					 * Gets the value for the DataSanksi object that uniquely references this DataPegawai
					 * by objDataSanksi (Unique)
					 * @return DataSanksi
					 */
					try {
						if ($this->objDataSanksi === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataSanksi)
							$this->objDataSanksi = DataSanksi::LoadByNip($this->strNip);
						return $this->objDataSanksi;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'DataSkLain':
					/**
					 * Gets the value for the DataSkLain object that uniquely references this DataPegawai
					 * by objDataSkLain (Unique)
					 * @return DataSkLain
					 */
					try {
						if ($this->objDataSkLain === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDataSkLain)
							$this->objDataSkLain = DataSkLain::LoadByNip($this->strNip);
						return $this->objDataSkLain;
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
						return ($this->strNip = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Nama':
					/**
					 * Sets the value for strNama 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNama = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TglAngkatCapeg':
					/**
					 * Sets the value for dttTglAngkatCapeg 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttTglAngkatCapeg = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TglAngkatPeg':
					/**
					 * Sets the value for dttTglAngkatPeg 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttTglAngkatPeg = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TglMenjabat':
					/**
					 * Sets the value for dttTglMenjabat 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttTglMenjabat = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Status':
					/**
					 * Sets the value for strStatus 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strStatus = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Golongan':
					/**
					 * Sets the value for strGolongan 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGolongan = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'DataAnak':
					/**
					 * Sets the value for the DataAnak object referenced by objDataAnak (Unique)
					 * @param DataAnak $mixValue
					 * @return DataAnak
					 */
					if (is_null($mixValue)) {
						$this->objDataAnak = null;

						// Make sure we update the adjoined DataAnak object the next time we call Save()
						$this->blnDirtyDataAnak = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataAnak object
						try {
							$mixValue = QType::Cast($mixValue, 'DataAnak');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataAnak to a DIFFERENT $mixValue?
						if ((!$this->DataAnak) || ($this->DataAnak->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataAnak object the next time we call Save()
							$this->blnDirtyDataAnak = true;

							// Update Local Member Variable
							$this->objDataAnak = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataDevMandiri':
					/**
					 * Sets the value for the DataDevMandiri object referenced by objDataDevMandiri (Unique)
					 * @param DataDevMandiri $mixValue
					 * @return DataDevMandiri
					 */
					if (is_null($mixValue)) {
						$this->objDataDevMandiri = null;

						// Make sure we update the adjoined DataDevMandiri object the next time we call Save()
						$this->blnDirtyDataDevMandiri = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataDevMandiri object
						try {
							$mixValue = QType::Cast($mixValue, 'DataDevMandiri');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataDevMandiri to a DIFFERENT $mixValue?
						if ((!$this->DataDevMandiri) || ($this->DataDevMandiri->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataDevMandiri object the next time we call Save()
							$this->blnDirtyDataDevMandiri = true;

							// Update Local Member Variable
							$this->objDataDevMandiri = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataDiklat':
					/**
					 * Sets the value for the DataDiklat object referenced by objDataDiklat (Unique)
					 * @param DataDiklat $mixValue
					 * @return DataDiklat
					 */
					if (is_null($mixValue)) {
						$this->objDataDiklat = null;

						// Make sure we update the adjoined DataDiklat object the next time we call Save()
						$this->blnDirtyDataDiklat = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataDiklat object
						try {
							$mixValue = QType::Cast($mixValue, 'DataDiklat');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataDiklat to a DIFFERENT $mixValue?
						if ((!$this->DataDiklat) || ($this->DataDiklat->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataDiklat object the next time we call Save()
							$this->blnDirtyDataDiklat = true;

							// Update Local Member Variable
							$this->objDataDiklat = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataOrganisasi':
					/**
					 * Sets the value for the DataOrganisasi object referenced by objDataOrganisasi (Unique)
					 * @param DataOrganisasi $mixValue
					 * @return DataOrganisasi
					 */
					if (is_null($mixValue)) {
						$this->objDataOrganisasi = null;

						// Make sure we update the adjoined DataOrganisasi object the next time we call Save()
						$this->blnDirtyDataOrganisasi = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataOrganisasi object
						try {
							$mixValue = QType::Cast($mixValue, 'DataOrganisasi');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataOrganisasi to a DIFFERENT $mixValue?
						if ((!$this->DataOrganisasi) || ($this->DataOrganisasi->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataOrganisasi object the next time we call Save()
							$this->blnDirtyDataOrganisasi = true;

							// Update Local Member Variable
							$this->objDataOrganisasi = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataPasangan':
					/**
					 * Sets the value for the DataPasangan object referenced by objDataPasangan (Unique)
					 * @param DataPasangan $mixValue
					 * @return DataPasangan
					 */
					if (is_null($mixValue)) {
						$this->objDataPasangan = null;

						// Make sure we update the adjoined DataPasangan object the next time we call Save()
						$this->blnDirtyDataPasangan = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataPasangan object
						try {
							$mixValue = QType::Cast($mixValue, 'DataPasangan');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataPasangan to a DIFFERENT $mixValue?
						if ((!$this->DataPasangan) || ($this->DataPasangan->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataPasangan object the next time we call Save()
							$this->blnDirtyDataPasangan = true;

							// Update Local Member Variable
							$this->objDataPasangan = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataPendidikan':
					/**
					 * Sets the value for the DataPendidikan object referenced by objDataPendidikan (Unique)
					 * @param DataPendidikan $mixValue
					 * @return DataPendidikan
					 */
					if (is_null($mixValue)) {
						$this->objDataPendidikan = null;

						// Make sure we update the adjoined DataPendidikan object the next time we call Save()
						$this->blnDirtyDataPendidikan = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataPendidikan object
						try {
							$mixValue = QType::Cast($mixValue, 'DataPendidikan');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataPendidikan to a DIFFERENT $mixValue?
						if ((!$this->DataPendidikan) || ($this->DataPendidikan->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataPendidikan object the next time we call Save()
							$this->blnDirtyDataPendidikan = true;

							// Update Local Member Variable
							$this->objDataPendidikan = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataPengalaman':
					/**
					 * Sets the value for the DataPengalaman object referenced by objDataPengalaman (Unique)
					 * @param DataPengalaman $mixValue
					 * @return DataPengalaman
					 */
					if (is_null($mixValue)) {
						$this->objDataPengalaman = null;

						// Make sure we update the adjoined DataPengalaman object the next time we call Save()
						$this->blnDirtyDataPengalaman = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataPengalaman object
						try {
							$mixValue = QType::Cast($mixValue, 'DataPengalaman');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataPengalaman to a DIFFERENT $mixValue?
						if ((!$this->DataPengalaman) || ($this->DataPengalaman->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataPengalaman object the next time we call Save()
							$this->blnDirtyDataPengalaman = true;

							// Update Local Member Variable
							$this->objDataPengalaman = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataPengalamanKerja':
					/**
					 * Sets the value for the DataPengalamanKerja object referenced by objDataPengalamanKerja (Unique)
					 * @param DataPengalamanKerja $mixValue
					 * @return DataPengalamanKerja
					 */
					if (is_null($mixValue)) {
						$this->objDataPengalamanKerja = null;

						// Make sure we update the adjoined DataPengalamanKerja object the next time we call Save()
						$this->blnDirtyDataPengalamanKerja = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataPengalamanKerja object
						try {
							$mixValue = QType::Cast($mixValue, 'DataPengalamanKerja');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataPengalamanKerja to a DIFFERENT $mixValue?
						if ((!$this->DataPengalamanKerja) || ($this->DataPengalamanKerja->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataPengalamanKerja object the next time we call Save()
							$this->blnDirtyDataPengalamanKerja = true;

							// Update Local Member Variable
							$this->objDataPengalamanKerja = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataPenghargaanEks':
					/**
					 * Sets the value for the DataPenghargaanEks object referenced by objDataPenghargaanEks (Unique)
					 * @param DataPenghargaanEks $mixValue
					 * @return DataPenghargaanEks
					 */
					if (is_null($mixValue)) {
						$this->objDataPenghargaanEks = null;

						// Make sure we update the adjoined DataPenghargaanEks object the next time we call Save()
						$this->blnDirtyDataPenghargaanEks = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataPenghargaanEks object
						try {
							$mixValue = QType::Cast($mixValue, 'DataPenghargaanEks');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataPenghargaanEks to a DIFFERENT $mixValue?
						if ((!$this->DataPenghargaanEks) || ($this->DataPenghargaanEks->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataPenghargaanEks object the next time we call Save()
							$this->blnDirtyDataPenghargaanEks = true;

							// Update Local Member Variable
							$this->objDataPenghargaanEks = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataPenghargaanIn':
					/**
					 * Sets the value for the DataPenghargaanIn object referenced by objDataPenghargaanIn (Unique)
					 * @param DataPenghargaanIn $mixValue
					 * @return DataPenghargaanIn
					 */
					if (is_null($mixValue)) {
						$this->objDataPenghargaanIn = null;

						// Make sure we update the adjoined DataPenghargaanIn object the next time we call Save()
						$this->blnDirtyDataPenghargaanIn = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataPenghargaanIn object
						try {
							$mixValue = QType::Cast($mixValue, 'DataPenghargaanIn');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataPenghargaanIn to a DIFFERENT $mixValue?
						if ((!$this->DataPenghargaanIn) || ($this->DataPenghargaanIn->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataPenghargaanIn object the next time we call Save()
							$this->blnDirtyDataPenghargaanIn = true;

							// Update Local Member Variable
							$this->objDataPenghargaanIn = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataPribadi':
					/**
					 * Sets the value for the DataPribadi object referenced by objDataPribadi (Unique)
					 * @param DataPribadi $mixValue
					 * @return DataPribadi
					 */
					if (is_null($mixValue)) {
						$this->objDataPribadi = null;

						// Make sure we update the adjoined DataPribadi object the next time we call Save()
						$this->blnDirtyDataPribadi = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataPribadi object
						try {
							$mixValue = QType::Cast($mixValue, 'DataPribadi');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataPribadi to a DIFFERENT $mixValue?
						if ((!$this->DataPribadi) || ($this->DataPribadi->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataPribadi object the next time we call Save()
							$this->blnDirtyDataPribadi = true;

							// Update Local Member Variable
							$this->objDataPribadi = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataRiwayatKerja':
					/**
					 * Sets the value for the DataRiwayatKerja object referenced by objDataRiwayatKerja (Unique)
					 * @param DataRiwayatKerja $mixValue
					 * @return DataRiwayatKerja
					 */
					if (is_null($mixValue)) {
						$this->objDataRiwayatKerja = null;

						// Make sure we update the adjoined DataRiwayatKerja object the next time we call Save()
						$this->blnDirtyDataRiwayatKerja = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataRiwayatKerja object
						try {
							$mixValue = QType::Cast($mixValue, 'DataRiwayatKerja');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataRiwayatKerja to a DIFFERENT $mixValue?
						if ((!$this->DataRiwayatKerja) || ($this->DataRiwayatKerja->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataRiwayatKerja object the next time we call Save()
							$this->blnDirtyDataRiwayatKerja = true;

							// Update Local Member Variable
							$this->objDataRiwayatKerja = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataSanksi':
					/**
					 * Sets the value for the DataSanksi object referenced by objDataSanksi (Unique)
					 * @param DataSanksi $mixValue
					 * @return DataSanksi
					 */
					if (is_null($mixValue)) {
						$this->objDataSanksi = null;

						// Make sure we update the adjoined DataSanksi object the next time we call Save()
						$this->blnDirtyDataSanksi = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataSanksi object
						try {
							$mixValue = QType::Cast($mixValue, 'DataSanksi');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataSanksi to a DIFFERENT $mixValue?
						if ((!$this->DataSanksi) || ($this->DataSanksi->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataSanksi object the next time we call Save()
							$this->blnDirtyDataSanksi = true;

							// Update Local Member Variable
							$this->objDataSanksi = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataSkLain':
					/**
					 * Sets the value for the DataSkLain object referenced by objDataSkLain (Unique)
					 * @param DataSkLain $mixValue
					 * @return DataSkLain
					 */
					if (is_null($mixValue)) {
						$this->objDataSkLain = null;

						// Make sure we update the adjoined DataSkLain object the next time we call Save()
						$this->blnDirtyDataSkLain = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DataSkLain object
						try {
							$mixValue = QType::Cast($mixValue, 'DataSkLain');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDataSkLain to a DIFFERENT $mixValue?
						if ((!$this->DataSkLain) || ($this->DataSkLain->Nip != $mixValue->Nip)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DataSkLain object the next time we call Save()
							$this->blnDirtyDataSkLain = true;

							// Update Local Member Variable
							$this->objDataSkLain = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

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
			$strToReturn = '<complexType name="DataPegawai"><sequence>';
			$strToReturn .= '<element name="Nip" type="xsd:string"/>';
			$strToReturn .= '<element name="Nama" type="xsd:string"/>';
			$strToReturn .= '<element name="TglAngkatCapeg" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="TglAngkatPeg" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="TglMenjabat" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Status" type="xsd:string"/>';
			$strToReturn .= '<element name="Golongan" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DataPegawai', $strComplexTypeArray)) {
				$strComplexTypeArray['DataPegawai'] = DataPegawai::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DataPegawai::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DataPegawai();
			if (property_exists($objSoapObject, 'Nip'))
				$objToReturn->strNip = $objSoapObject->Nip;
			if (property_exists($objSoapObject, 'Nama'))
				$objToReturn->strNama = $objSoapObject->Nama;
			if (property_exists($objSoapObject, 'TglAngkatCapeg'))
				$objToReturn->dttTglAngkatCapeg = new QDateTime($objSoapObject->TglAngkatCapeg);
			if (property_exists($objSoapObject, 'TglAngkatPeg'))
				$objToReturn->dttTglAngkatPeg = new QDateTime($objSoapObject->TglAngkatPeg);
			if (property_exists($objSoapObject, 'TglMenjabat'))
				$objToReturn->dttTglMenjabat = new QDateTime($objSoapObject->TglMenjabat);
			if (property_exists($objSoapObject, 'Status'))
				$objToReturn->strStatus = $objSoapObject->Status;
			if (property_exists($objSoapObject, 'Golongan'))
				$objToReturn->strGolongan = $objSoapObject->Golongan;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DataPegawai::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttTglAngkatCapeg)
				$objObject->dttTglAngkatCapeg = $objObject->dttTglAngkatCapeg->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttTglAngkatPeg)
				$objObject->dttTglAngkatPeg = $objObject->dttTglAngkatPeg->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttTglMenjabat)
				$objObject->dttTglMenjabat = $objObject->dttTglMenjabat->qFormat(QDateTime::FormatSoap);
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
			$iArray['Nama'] = $this->strNama;
			$iArray['TglAngkatCapeg'] = $this->dttTglAngkatCapeg;
			$iArray['TglAngkatPeg'] = $this->dttTglAngkatPeg;
			$iArray['TglMenjabat'] = $this->dttTglMenjabat;
			$iArray['Status'] = $this->strStatus;
			$iArray['Golongan'] = $this->strGolongan;
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
     * @property-read QQNode $Nama
     * @property-read QQNode $TglAngkatCapeg
     * @property-read QQNode $TglAngkatPeg
     * @property-read QQNode $TglMenjabat
     * @property-read QQNode $Status
     * @property-read QQNode $Golongan
     *
     *
     * @property-read QQReverseReferenceNodeDataAnak $DataAnak
     * @property-read QQReverseReferenceNodeDataDevMandiri $DataDevMandiri
     * @property-read QQReverseReferenceNodeDataDiklat $DataDiklat
     * @property-read QQReverseReferenceNodeDataOrganisasi $DataOrganisasi
     * @property-read QQReverseReferenceNodeDataPasangan $DataPasangan
     * @property-read QQReverseReferenceNodeDataPendidikan $DataPendidikan
     * @property-read QQReverseReferenceNodeDataPengalaman $DataPengalaman
     * @property-read QQReverseReferenceNodeDataPengalamanKerja $DataPengalamanKerja
     * @property-read QQReverseReferenceNodeDataPenghargaanEks $DataPenghargaanEks
     * @property-read QQReverseReferenceNodeDataPenghargaanIn $DataPenghargaanIn
     * @property-read QQReverseReferenceNodeDataPribadi $DataPribadi
     * @property-read QQReverseReferenceNodeDataRiwayatKerja $DataRiwayatKerja
     * @property-read QQReverseReferenceNodeDataSanksi $DataSanksi
     * @property-read QQReverseReferenceNodeDataSkLain $DataSkLain

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDataPegawai extends QQNode {
		protected $strTableName = 'data_pegawai';
		protected $strPrimaryKey = 'nip';
		protected $strClassName = 'DataPegawai';
		public function __get($strName) {
			switch ($strName) {
				case 'Nip':
					return new QQNode('nip', 'Nip', 'VarChar', $this);
				case 'Nama':
					return new QQNode('nama', 'Nama', 'VarChar', $this);
				case 'TglAngkatCapeg':
					return new QQNode('tgl_angkat_capeg', 'TglAngkatCapeg', 'Date', $this);
				case 'TglAngkatPeg':
					return new QQNode('tgl_angkat_peg', 'TglAngkatPeg', 'Date', $this);
				case 'TglMenjabat':
					return new QQNode('tgl_menjabat', 'TglMenjabat', 'Date', $this);
				case 'Status':
					return new QQNode('status', 'Status', 'VarChar', $this);
				case 'Golongan':
					return new QQNode('golongan', 'Golongan', 'VarChar', $this);
				case 'DataAnak':
					return new QQReverseReferenceNodeDataAnak($this, 'dataanak', 'reverse_reference', 'nip', 'DataAnak');
				case 'DataDevMandiri':
					return new QQReverseReferenceNodeDataDevMandiri($this, 'datadevmandiri', 'reverse_reference', 'nip', 'DataDevMandiri');
				case 'DataDiklat':
					return new QQReverseReferenceNodeDataDiklat($this, 'datadiklat', 'reverse_reference', 'nip', 'DataDiklat');
				case 'DataOrganisasi':
					return new QQReverseReferenceNodeDataOrganisasi($this, 'dataorganisasi', 'reverse_reference', 'nip', 'DataOrganisasi');
				case 'DataPasangan':
					return new QQReverseReferenceNodeDataPasangan($this, 'datapasangan', 'reverse_reference', 'nip', 'DataPasangan');
				case 'DataPendidikan':
					return new QQReverseReferenceNodeDataPendidikan($this, 'datapendidikan', 'reverse_reference', 'nip', 'DataPendidikan');
				case 'DataPengalaman':
					return new QQReverseReferenceNodeDataPengalaman($this, 'datapengalaman', 'reverse_reference', 'nip', 'DataPengalaman');
				case 'DataPengalamanKerja':
					return new QQReverseReferenceNodeDataPengalamanKerja($this, 'datapengalamankerja', 'reverse_reference', 'nip', 'DataPengalamanKerja');
				case 'DataPenghargaanEks':
					return new QQReverseReferenceNodeDataPenghargaanEks($this, 'datapenghargaaneks', 'reverse_reference', 'nip', 'DataPenghargaanEks');
				case 'DataPenghargaanIn':
					return new QQReverseReferenceNodeDataPenghargaanIn($this, 'datapenghargaanin', 'reverse_reference', 'nip', 'DataPenghargaanIn');
				case 'DataPribadi':
					return new QQReverseReferenceNodeDataPribadi($this, 'datapribadi', 'reverse_reference', 'nip', 'DataPribadi');
				case 'DataRiwayatKerja':
					return new QQReverseReferenceNodeDataRiwayatKerja($this, 'datariwayatkerja', 'reverse_reference', 'nip', 'DataRiwayatKerja');
				case 'DataSanksi':
					return new QQReverseReferenceNodeDataSanksi($this, 'datasanksi', 'reverse_reference', 'nip', 'DataSanksi');
				case 'DataSkLain':
					return new QQReverseReferenceNodeDataSkLain($this, 'datasklain', 'reverse_reference', 'nip', 'DataSkLain');

				case '_PrimaryKeyNode':
					return new QQNode('nip', 'Nip', 'VarChar', $this);
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
     * @property-read QQNode $Nama
     * @property-read QQNode $TglAngkatCapeg
     * @property-read QQNode $TglAngkatPeg
     * @property-read QQNode $TglMenjabat
     * @property-read QQNode $Status
     * @property-read QQNode $Golongan
     *
     *
     * @property-read QQReverseReferenceNodeDataAnak $DataAnak
     * @property-read QQReverseReferenceNodeDataDevMandiri $DataDevMandiri
     * @property-read QQReverseReferenceNodeDataDiklat $DataDiklat
     * @property-read QQReverseReferenceNodeDataOrganisasi $DataOrganisasi
     * @property-read QQReverseReferenceNodeDataPasangan $DataPasangan
     * @property-read QQReverseReferenceNodeDataPendidikan $DataPendidikan
     * @property-read QQReverseReferenceNodeDataPengalaman $DataPengalaman
     * @property-read QQReverseReferenceNodeDataPengalamanKerja $DataPengalamanKerja
     * @property-read QQReverseReferenceNodeDataPenghargaanEks $DataPenghargaanEks
     * @property-read QQReverseReferenceNodeDataPenghargaanIn $DataPenghargaanIn
     * @property-read QQReverseReferenceNodeDataPribadi $DataPribadi
     * @property-read QQReverseReferenceNodeDataRiwayatKerja $DataRiwayatKerja
     * @property-read QQReverseReferenceNodeDataSanksi $DataSanksi
     * @property-read QQReverseReferenceNodeDataSkLain $DataSkLain

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDataPegawai extends QQReverseReferenceNode {
		protected $strTableName = 'data_pegawai';
		protected $strPrimaryKey = 'nip';
		protected $strClassName = 'DataPegawai';
		public function __get($strName) {
			switch ($strName) {
				case 'Nip':
					return new QQNode('nip', 'Nip', 'string', $this);
				case 'Nama':
					return new QQNode('nama', 'Nama', 'string', $this);
				case 'TglAngkatCapeg':
					return new QQNode('tgl_angkat_capeg', 'TglAngkatCapeg', 'QDateTime', $this);
				case 'TglAngkatPeg':
					return new QQNode('tgl_angkat_peg', 'TglAngkatPeg', 'QDateTime', $this);
				case 'TglMenjabat':
					return new QQNode('tgl_menjabat', 'TglMenjabat', 'QDateTime', $this);
				case 'Status':
					return new QQNode('status', 'Status', 'string', $this);
				case 'Golongan':
					return new QQNode('golongan', 'Golongan', 'string', $this);
				case 'DataAnak':
					return new QQReverseReferenceNodeDataAnak($this, 'dataanak', 'reverse_reference', 'nip', 'DataAnak');
				case 'DataDevMandiri':
					return new QQReverseReferenceNodeDataDevMandiri($this, 'datadevmandiri', 'reverse_reference', 'nip', 'DataDevMandiri');
				case 'DataDiklat':
					return new QQReverseReferenceNodeDataDiklat($this, 'datadiklat', 'reverse_reference', 'nip', 'DataDiklat');
				case 'DataOrganisasi':
					return new QQReverseReferenceNodeDataOrganisasi($this, 'dataorganisasi', 'reverse_reference', 'nip', 'DataOrganisasi');
				case 'DataPasangan':
					return new QQReverseReferenceNodeDataPasangan($this, 'datapasangan', 'reverse_reference', 'nip', 'DataPasangan');
				case 'DataPendidikan':
					return new QQReverseReferenceNodeDataPendidikan($this, 'datapendidikan', 'reverse_reference', 'nip', 'DataPendidikan');
				case 'DataPengalaman':
					return new QQReverseReferenceNodeDataPengalaman($this, 'datapengalaman', 'reverse_reference', 'nip', 'DataPengalaman');
				case 'DataPengalamanKerja':
					return new QQReverseReferenceNodeDataPengalamanKerja($this, 'datapengalamankerja', 'reverse_reference', 'nip', 'DataPengalamanKerja');
				case 'DataPenghargaanEks':
					return new QQReverseReferenceNodeDataPenghargaanEks($this, 'datapenghargaaneks', 'reverse_reference', 'nip', 'DataPenghargaanEks');
				case 'DataPenghargaanIn':
					return new QQReverseReferenceNodeDataPenghargaanIn($this, 'datapenghargaanin', 'reverse_reference', 'nip', 'DataPenghargaanIn');
				case 'DataPribadi':
					return new QQReverseReferenceNodeDataPribadi($this, 'datapribadi', 'reverse_reference', 'nip', 'DataPribadi');
				case 'DataRiwayatKerja':
					return new QQReverseReferenceNodeDataRiwayatKerja($this, 'datariwayatkerja', 'reverse_reference', 'nip', 'DataRiwayatKerja');
				case 'DataSanksi':
					return new QQReverseReferenceNodeDataSanksi($this, 'datasanksi', 'reverse_reference', 'nip', 'DataSanksi');
				case 'DataSkLain':
					return new QQReverseReferenceNodeDataSkLain($this, 'datasklain', 'reverse_reference', 'nip', 'DataSkLain');

				case '_PrimaryKeyNode':
					return new QQNode('nip', 'Nip', 'string', $this);
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
