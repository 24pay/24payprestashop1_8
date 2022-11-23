<?php

function convert_country_code_from_isoa2_to_isoa3($iso_s2) {
	$country_codes_map = array(
		"AF" => "AFG", // 004 Afghanistan
		"AX" => "ALA", // 248 Aland Islands
		"AL" => "ALB", // 008 Albania
		"DZ" => "DZA", // 012 Algeria
		"AS" => "ASM", // 016 American Samoa
		"AD" => "AND", // 020 Andorra
		"AO" => "AGO", // 024 Angola
		"AI" => "AIA", // 660 Anguilla
		"AQ" => "ATA", // 010 Antarctica
		"AG" => "ATG", // 028 Antigua and Barbuda
		"AR" => "ARG", // 032 Argentina
		"AM" => "ARM", // 051 Armenia
		"AW" => "ABW", // 533 Aruba
		"AU" => "AUS", // 036 Australia
		"AT" => "AUT", // 040 Austria
		"AZ" => "AZE", // 031 Azerbaijan
		"BS" => "BHS", // 044 Bahamas
		"BH" => "BHR", // 048 Bahrain
		"BD" => "BGD", // 050 Bangladesh
		"BB" => "BRB", // 052 Barbados
		"BY" => "BLR", // 112 Belarus
		"BE" => "BEL", // 056 Belgium
		"BZ" => "BLZ", // 084 Belize
		"BJ" => "BEN", // 204 Benin
		"BM" => "BMU", // 060 Bermuda
		"BT" => "BTN", // 064 Bhutan
		"BO" => "BOL", // 068 Bolivia
		"BA" => "BIH", // 070 Bosnia and Herzegovina
		"BW" => "BWA", // 072 Botswana
		"BV" => "BVT", // 074 Bouvet Island
		"BR" => "BRA", // 076 Brazil
		"VG" => "VGB", // 092 British Virgin Islands
		"IO" => "IOT", // 086 British Indian Ocean Territory
		"BN" => "BRN", // 096 Brunei Darussalam
		"BG" => "BGR", // 100 Bulgaria
		"BF" => "BFA", // 854 Burkina Faso
		"BI" => "BDI", // 108 Burundi
		"KH" => "KHM", // 116 Cambodia
		"CM" => "CMR", // 120 Cameroon
		"CA" => "CAN", // 124 Canada
		"CV" => "CPV", // 132 Cape Verde
		"KY" => "CYM", // 136 Cayman Islands
		"CF" => "CAF", // 140 Central African Republic
		"TD" => "TCD", // 148 Chad
		"CL" => "CHL", // 152 Chile
		"CN" => "CHN", // 156 China
		"HK" => "HKG", // 344 Hong Kong, Special Administrative Region of China
		"MO" => "MAC", // 446 Macao, Special Administrative Region of China
		"CX" => "CXR", // 162 Christmas Island
		"CC" => "CCK", // 166 Cocos (Keeling) Islands
		"CO" => "COL", // 170 Colombia
		"KM" => "COM", // 174 Comoros
		"CG" => "COG", // 178 Congo (Brazzaville)
		"CD" => "COD", // 180 Congo, Democratic Republic of the
		"CK" => "COK", // 184 Cook Islands
		"CR" => "CRI", // 188 Costa Rica
		"CI" => "CIV", // 384 Côte d'Ivoire
		"HR" => "HRV", // 191 Croatia
		"CU" => "CUB", // 192 Cuba
		"CY" => "CYP", // 196 Cyprus
		"CZ" => "CZE", // 203 Czech Republic
		"DK" => "DNK", // 208 Denmark
		"DJ" => "DJI", // 262 Djibouti
		"DM" => "DMA", // 212 Dominica
		"DO" => "DOM", // 214 Dominican Republic
		"EC" => "ECU", // 218 Ecuador
		"EG" => "EGY", // 818 Egypt
		"SV" => "SLV", // 222 El Salvador
		"GQ" => "GNQ", // 226 Equatorial Guinea
		"ER" => "ERI", // 232 Eritrea
		"EE" => "EST", // 233 Estonia
		"ET" => "ETH", // 231 Ethiopia
		"FK" => "FLK", // 238 Falkland Islands (Malvinas)
		"FO" => "FRO", // 234 Faroe Islands
		"FJ" => "FJI", // 242 Fiji
		"FI" => "FIN", // 246 Finland
		"FR" => "FRA", // 250 France
		"GF" => "GUF", // 254 French Guiana
		"PF" => "PYF", // 258 French Polynesia
		"TF" => "ATF", // 260 French Southern Territories
		"GA" => "GAB", // 266 Gabon
		"GM" => "GMB", // 270 Gambia
		"GE" => "GEO", // 268 Georgia
		"DE" => "DEU", // 276 Germany
		"GH" => "GHA", // 288 Ghana
		"GI" => "GIB", // 292 Gibraltar
		"GR" => "GRC", // 300 Greece
		"GL" => "GRL", // 304 Greenland
		"GD" => "GRD", // 308 Grenada
		"GP" => "GLP", // 312 Guadeloupe
		"GU" => "GUM", // 316 Guam
		"GT" => "GTM", // 320 Guatemala
		"GG" => "GGY", // 831 Guernsey
		"GN" => "GIN", // 324 Guinea
		"GW" => "GNB", // 624 Guinea-Bissau
		"GY" => "GUY", // 328 Guyana
		"HT" => "HTI", // 332 Haiti
		"HM" => "HMD", // 334 Heard Island and Mcdonald Islands
		"VA" => "VAT", // 336 Holy See (Vatican City State)
		"HN" => "HND", // 340 Honduras
		"HU" => "HUN", // 348 Hungary
		"IS" => "ISL", // 352 Iceland
		"IN" => "IND", // 356 India
		"ID" => "IDN", // 360 Indonesia
		"IR" => "IRN", // 364 Iran, Islamic Republic of
		"IQ" => "IRQ", // 368 Iraq
		"IE" => "IRL", // 372 Ireland
		"IM" => "IMN", // 833 Isle of Man
		"IL" => "ISR", // 376 Israel
		"IT" => "ITA", // 380 Italy
		"JM" => "JAM", // 388 Jamaica
		"JP" => "JPN", // 392 Japan
		"JE" => "JEY", // 832 Jersey
		"JO" => "JOR", // 400 Jordan
		"KZ" => "KAZ", // 398 Kazakhstan
		"KE" => "KEN", // 404 Kenya
		"KI" => "KIR", // 296 Kiribati
		"KP" => "PRK", // 408 Korea, Democratic People's Republic of
		"KR" => "KOR", // 410 Korea, Republic of
		"KW" => "KWT", // 414 Kuwait
		"KG" => "KGZ", // 417 Kyrgyzstan
		"LA" => "LAO", // 418 Lao PDR
		"LV" => "LVA", // 428 Latvia
		"LB" => "LBN", // 422 Lebanon
		"LS" => "LSO", // 426 Lesotho
		"LR" => "LBR", // 430 Liberia
		"LY" => "LBY", // 434 Libya
		"LI" => "LIE", // 438 Liechtenstein
		"LT" => "LTU", // 440 Lithuania
		"LU" => "LUX", // 442 Luxembourg
		"MK" => "MKD", // 807 Macedonia, Republic of
		"MG" => "MDG", // 450 Madagascar
		"MW" => "MWI", // 454 Malawi
		"MY" => "MYS", // 458 Malaysia
		"MV" => "MDV", // 462 Maldives
		"ML" => "MLI", // 466 Mali
		"MT" => "MLT", // 470 Malta
		"MH" => "MHL", // 584 Marshall Islands
		"MQ" => "MTQ", // 474 Martinique
		"MR" => "MRT", // 478 Mauritania
		"MU" => "MUS", // 480 Mauritius
		"YT" => "MYT", // 175 Mayotte
		"MX" => "MEX", // 484 Mexico
		"FM" => "FSM", // 583 Micronesia, Federated States of
		"MD" => "MDA", // 498 Moldova
		"MC" => "MCO", // 492 Monaco
		"MN" => "MNG", // 496 Mongolia
		"ME" => "MNE", // 499 Montenegro
		"MS" => "MSR", // 500 Montserrat
		"MA" => "MAR", // 504 Morocco
		"MZ" => "MOZ", // 508 Mozambique
		"MM" => "MMR", // 104 Myanmar
		"NA" => "NAM", // 516 Namibia
		"NR" => "NRU", // 520 Nauru
		"NP" => "NPL", // 524 Nepal
		"NL" => "NLD", // 528 Netherlands
		"AN" => "ANT", // 530 Netherlands Antilles
		"NC" => "NCL", // 540 New Caledonia
		"NZ" => "NZL", // 554 New Zealand
		"NI" => "NIC", // 558 Nicaragua
		"NE" => "NER", // 562 Niger
		"NG" => "NGA", // 566 Nigeria
		"NU" => "NIU", // 570 Niue
		"NF" => "NFK", // 574 Norfolk Island
		"MP" => "MNP", // 580 Northern Mariana Islands
		"NO" => "NOR", // 578 Norway
		"OM" => "OMN", // 512 Oman
		"PK" => "PAK", // 586 Pakistan
		"PW" => "PLW", // 585 Palau
		"PS" => "PSE", // 275 Palestinian Territory, Occupied
		"PA" => "PAN", // 591 Panama
		"PG" => "PNG", // 598 Papua New Guinea
		"PY" => "PRY", // 600 Paraguay
		"PE" => "PER", // 604 Peru
		"PH" => "PHL", // 608 Philippines
		"PN" => "PCN", // 612 Pitcairn
		"PL" => "POL", // 616 Poland
		"PT" => "PRT", // 620 Portugal
		"PR" => "PRI", // 630 Puerto Rico
		"QA" => "QAT", // 634 Qatar
		"RE" => "REU", // 638 Réunion
		"RO" => "ROU", // 642 Romania
		"RU" => "RUS", // 643 Russian Federation
		"RW" => "RWA", // 646 Rwanda
		"BL" => "BLM", // 652 Saint-Barthélemy
		"SH" => "SHN", // 654 Saint Helena
		"KN" => "KNA", // 659 Saint Kitts and Nevis
		"LC" => "LCA", // 662 Saint Lucia
		"MF" => "MAF", // 663 Saint-Martin (French part)
		"PM" => "SPM", // 666 Saint Pierre and Miquelon
		"VC" => "VCT", // 670 Saint Vincent and Grenadines
		"WS" => "WSM", // 882 Samoa
		"SM" => "SMR", // 674 San Marino
		"ST" => "STP", // 678 Sao Tome and Principe
		"SA" => "SAU", // 682 Saudi Arabia
		"SN" => "SEN", // 686 Senegal
		"RS" => "SRB", // 688 Serbia
		"SC" => "SYC", // 690 Seychelles
		"SL" => "SLE", // 694 Sierra Leone
		"SG" => "SGP", // 702 Singapore
		"SK" => "SVK", // 703 Slovakia
		"SI" => "SVN", // 705 Slovenia
		"SB" => "SLB", // 090 Solomon Islands
		"SO" => "SOM", // 706 Somalia
		"ZA" => "ZAF", // 710 South Africa
		"GS" => "SGS", // 239 South Georgia and the South Sandwich Islands
		"SS" => "SSD", // 728 South Sudan
		"ES" => "ESP", // 724 Spain
		"LK" => "LKA", // 144 Sri Lanka
		"SD" => "SDN", // 736 Sudan
		"SR" => "SUR", // 740 Suriname *
		"SJ" => "SJM", // 744 Svalbard and Jan Mayen Islands
		"SZ" => "SWZ", // 748 Swaziland
		"SE" => "SWE", // 752 Sweden
		"CH" => "CHE", // 756 Switzerland
		"SY" => "SYR", // 760 Syrian Arab Republic (Syria)
		"TW" => "TWN", // 158 Taiwan, Republic of China
		"TJ" => "TJK", // 762 Tajikistan
		"TZ" => "TZA", // 834 Tanzania *, United Republic of
		"TH" => "THA", // 764 Thailand
		"TL" => "TLS", // 626 Timor-Leste
		"TG" => "TGO", // 768 Togo
		"TK" => "TKL", // 772 Tokelau
		"TO" => "TON", // 776 Tonga
		"TT" => "TTO", // 780 Trinidad and Tobago
		"TN" => "TUN", // 788 Tunisia
		"TR" => "TUR", // 792 Turkey
		"TM" => "TKM", // 795 Turkmenistan
		"TC" => "TCA", // 796 Turks and Caicos Islands
		"TV" => "TUV", // 798 Tuvalu
		"UG" => "UGA", // 800 Uganda
		"UA" => "UKR", // 804 Ukraine
		"AE" => "ARE", // 784 United Arab Emirates
		"GB" => "GBR", // 826 United Kingdom
		"US" => "USA", // 840 United States of America
		"UM" => "UMI", // 581 United States Minor Outlying Islands
		"UY" => "URY", // 858 Uruguay
		"UZ" => "UZB", // 860 Uzbekistan
		"VU" => "VUT", // 548 Vanuatu
		"VE" => "VEN", // 862 Venezuela (Bolivarian Republic of)
		"VN" => "VNM", // 704 Viet Nam
		"VI" => "VIR", // 850 Virgin Islands, US
		"WF" => "WLF", // 876 Wallis and Futuna Islands
		"EH" => "ESH", // 732 Western Sahara
		"YE" => "YEM", // 887 Yemen
		"ZM" => "ZMB", // 894 Zambia
		"ZW" => "ZWE", // 716 Zimbabwe
		);

	return isset($country_codes_map[$iso_s2]) ?
		$country_codes_map[$iso_s2] : false;
}