#
# Table structure for table 'tx_bfbnberufe_domain_model_berufe'
#
CREATE TABLE tx_bfbnberufe_domain_model_berufe (

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	ausb_abu smallint(5) unsigned DEFAULT '0' NOT NULL,
	ausb_gh smallint(5) unsigned DEFAULT '0' NOT NULL,
	ausb_s smallint(5) unsigned DEFAULT '0' NOT NULL,
	ausb_t smallint(5) unsigned DEFAULT '0' NOT NULL,
	ausb_w smallint(5) unsigned DEFAULT '0' NOT NULL,
	ausb_gh_stern smallint(5) unsigned DEFAULT '0' NOT NULL,
	ausb_s_stern smallint(5) unsigned DEFAULT '0' NOT NULL,
	ausb_w_stern smallint(5) unsigned DEFAULT '0' NOT NULL,

);
