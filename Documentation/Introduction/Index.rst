﻿.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: /Includes.rst.txt


What does it do?
================

This extension provides Danish translations for the country, country subdivision, currency, language and territory records of static_info_tables.
For this purpose, it adds one or two fields to those tables and fills them with Danish data, if available.
The data is based on `World countries in JSON, CSV, XML and YAML (mledoze/countries) https://github.com/mledoze/countries#world-countries-in-json-csv-xml-and-yaml`__.
This is mostly the same as `Debian ISO Codes https://salsa.debian.org/iso-codes-team/iso-codes`__ which is used in TYPO3 since version 12.

See also: `TYPO3: List of countries in the world and their localized names https://docs.typo3.org/c/typo3/cms-core/main/en-us/Changelog/12.2/Feature-99618-ListOfCountriesInTheWorldAndTheirLocalizedNames.html`__

.. figure:: /Images/RecordView.png
	:width: 700px
	:alt: Record view of a country record

	Record view of the "Danish" country record with new field "Short name (DA)" filled with the Danish translation.
