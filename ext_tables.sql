
CREATE TABLE static_countries (
  cn_short_da varchar(50) DEFAULT '' NOT NULL
);

CREATE TABLE static_currencies (
  cu_name_da varchar(50) DEFAULT '' NOT NULL,
  cu_sub_name_da varchar(20) DEFAULT '' NOT NULL
);

CREATE TABLE static_languages (
  lg_name_da varchar(50) DEFAULT '' NOT NULL
);

CREATE TABLE static_territories (
  tr_name_da varchar(50) DEFAULT '' NOT NULL
);

CREATE TABLE static_country_zones (
  zn_name_da varchar(50) DEFAULT '' NOT NULL
);

