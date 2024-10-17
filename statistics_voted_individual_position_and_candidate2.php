<?php

require 'core.php';
require 'dbconnect.php';

function voted_chairperson_total () {
	$query ='SELECT vote_id FROM voted_chairperson';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_vice_chairperson_total () {
	$query ='SELECT vote_id FROM voted_vice_chairperson';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_secretary_general_total () {
	$query ='SELECT vote_id FROM voted_secretary_general';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_deputy_secretary_general_total () {
	$query ='SELECT vote_id FROM voted_deputy_secretary_general';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_finance_director_total () {
	$query ='SELECT vote_id FROM voted_finance_director';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_academics_director_total () {
	$query ='SELECT vote_id FROM voted_academics_director';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_accommodation_director_resident_total () {
	$query ='SELECT vote_id FROM voted_accommodation_director_resident';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_accommodation_director_nonresident_total () {
	$query ='SELECT vote_id FROM voted_accommodation_director_nonresident';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_catering_director_total () {
	$query ='SELECT vote_id FROM voted_catering_director';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_entertainment_director_total () {
	$query ='SELECT vote_id FROM voted_entertainment_director';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_faculty_of_science_total () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_science';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_faculty_of_engineering_total () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_engineering';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_faculty_of_education_and_social_sciences_total () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_education_and_social_sciences';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_cdmha_total () {
	$query ='SELECT vote_id FROM voted_congress_cdmha';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_hall_1_total () {
	$query ='SELECT vote_id FROM voted_congress_hall_1';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_hall_2_total () {
	$query ='SELECT vote_id FROM voted_congress_hall_2';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_hall_3_total () {
	$query ='SELECT vote_id FROM voted_congress_hall_3';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_milimani_total () {
	$query ='SELECT vote_id FROM voted_congress_milimani';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_kotecha_total () {
	$query ='SELECT vote_id FROM voted_congress_kotecha';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_chairperson_Kaylee_Fridah () {
	$query ='SELECT vote_id FROM voted_chairperson WHERE first_name = "kaylee" AND sur_name = "fridah"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_chairperson_Catherine_Wavinya () {
	$query ='SELECT vote_id FROM voted_chairperson WHERE first_name = "catherine" AND sur_name = "wavinya"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_chairperson_Maurine_Obuya () {
	$query ='SELECT vote_id FROM voted_chairperson WHERE first_name = "maurine" AND sur_name = "obuya"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_chairperson_Olivia_Muthoni () {
	$query ='SELECT vote_id FROM voted_chairperson WHERE first_name = "olivia" AND sur_name = "muthoni"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_vice_chairperson_Cheboiwo_Felistus () {
	$query ='SELECT vote_id FROM voted_vice_chairperson WHERE first_name = "cheboiwo" AND sur_name = "felistus"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_vice_chairperson_Lucent_Kasera () {
	$query ='SELECT vote_id FROM voted_vice_chairperson WHERE first_name = "lucent" AND sur_name = "kasera"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_vice_chairperson_George_Miriam () {
	$query ='SELECT vote_id FROM voted_vice_chairperson WHERE first_name = "george" AND sur_name = "miriam"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_vice_chairperson_Ruth_Jumba () {
	$query ='SELECT vote_id FROM voted_vice_chairperson WHERE first_name = "ruth" AND sur_name = "jumba"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_secretary_general_Cynthia_Chelagat () {
	$query ='SELECT vote_id FROM voted_secretary_general WHERE first_name = "cynthia" AND sur_name = "chelagat"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_secretary_general_Chelangat_Vicky () {
	$query ='SELECT vote_id FROM voted_secretary_general WHERE first_name = "chelangat" AND sur_name = "vicky"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_secretary_general_Koitaba_Naomi () {
	$query ='SELECT vote_id FROM voted_secretary_general WHERE first_name = "koitaba" AND sur_name = "naomi"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_secretary_general_Winny_Chelangat () {
	$query ='SELECT vote_id FROM voted_secretary_general WHERE first_name = "winny" AND sur_name = "chelangat"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_deputy_secretary_general_Emmaculate_Otina () {
	$query ='SELECT vote_id FROM voted_deputy_secretary_general WHERE first_name = "emmaculate" AND sur_name = "otina"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_deputy_secretary_general_Gloria_Osano () {
	$query ='SELECT vote_id FROM voted_deputy_secretary_general WHERE first_name = "gloria" AND sur_name = "osano"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_deputy_secretary_general_Stella_Nabulindo () {
	$query ='SELECT vote_id FROM voted_deputy_secretary_general WHERE first_name = "stella" AND sur_name = "nabulindo"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_deputy_secretary_general_Euginiah_Mwaniki () {
	$query ='SELECT vote_id FROM voted_deputy_secretary_general WHERE first_name = "euginiah" AND sur_name = "mwaniki"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_finance_director_Juliet_Njoka () {
	$query ='SELECT vote_id FROM voted_finance_director WHERE first_name = "juliet" AND sur_name = "njoka"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_finance_director_Joy_Cherotich () {
	$query ='SELECT vote_id FROM voted_finance_director WHERE first_name = "joy" AND sur_name = "cherotich"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_finance_director_Lilian_Machira () {
	$query ='SELECT vote_id FROM voted_finance_director WHERE first_name = "lilian" AND sur_name = "machira"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_finance_director_Edith_Njoki () {
	$query ='SELECT vote_id FROM voted_finance_director WHERE first_name = "edith" AND sur_name = "njoki"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_academics_director_Magdaline_Njoroge () {
	$query ='SELECT vote_id FROM voted_academics_director WHERE first_name = "magdaline" AND sur_name = "njoroge"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_academics_director_Hilda_Chepkirui () {
	$query ='SELECT vote_id FROM voted_academics_director WHERE first_name = "hilda" AND sur_name = "chepkirui"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_academics_director_Carol_Mwende () {
	$query ='SELECT vote_id FROM voted_academics_director WHERE first_name = "carol" AND sur_name = "mwende"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_academics_director_Brian_Njoroge () {
	$query ='SELECT vote_id FROM voted_academics_director WHERE first_name = "brian" AND sur_name = "njoroge"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_accommodation_director_resident_Faraday_Chimoi () {
	$query ='SELECT vote_id FROM voted_accommodation_director_resident WHERE first_name = "faraday" AND sur_name = "chimoi"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_accommodation_director_resident_Elsebah_Elsebah () {
	$query ='SELECT vote_id FROM voted_accommodation_director_resident WHERE first_name = "elsebah" AND sur_name = "elsebah"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_accommodation_director_resident_Ruth_Wangari () {
	$query ='SELECT vote_id FROM voted_accommodation_director_resident WHERE first_name = "ruth" AND sur_name = "wangari"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_accommodation_director_resident_Carolyne_Nancy () {
	$query ='SELECT vote_id FROM voted_accommodation_director_resident WHERE first_name = "carolyne" AND sur_name = "nancy"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_accommodation_director_nonresident_Vivivan_Musimbi () {
	$query ='SELECT vote_id FROM voted_accommodation_director_nonresident WHERE first_name = "vivivan" AND sur_name = "musimbi"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_accommodation_director_nonresident_Lemarkat_Ann () {
	$query ='SELECT vote_id FROM voted_accommodation_director_nonresident WHERE first_name = "lemarkat" AND sur_name = "ann"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_accommodation_director_nonresident_Valentine_Valentine () {
	$query ='SELECT vote_id FROM voted_accommodation_director_nonresident WHERE first_name = "valentine" AND sur_name = "valentine"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_accommodation_director_nonresident_Lovine_Mboya () {
	$query ='SELECT vote_id FROM voted_accommodation_director_nonresident WHERE first_name = "lovine" AND sur_name = "mboya"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_catering_director_Beth_Muthoni () {
	$query ='SELECT vote_id FROM voted_catering_director WHERE first_name = "beth" AND sur_name = "muthoni"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_catering_director_Miriam_Kinyanjui () {
	$query ='SELECT vote_id FROM voted_catering_director WHERE first_name = "miriam" AND sur_name = "kinyanjui"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_catering_director_Bradley_Igunzah () {
	$query ='SELECT vote_id FROM voted_catering_director WHERE first_name = "bradley" AND sur_name = "igunzah"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_catering_director_Elizabeth_Ngigi () {
	$query ='SELECT vote_id FROM voted_catering_director WHERE first_name = "elizabeth" AND sur_name = "ngigi"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_entertainment_director_Newton_Ondori () {
	$query ='SELECT vote_id FROM voted_entertainment_director WHERE first_name = "newton" AND sur_name = "ondori"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_entertainment_director_Queen_Irene () {
	$query ='SELECT vote_id FROM voted_entertainment_director WHERE first_name = "queen" AND sur_name = "irene"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_entertainment_director_Deborah_Miroro () {
	$query ='SELECT vote_id FROM voted_entertainment_director WHERE first_name = "deborah" AND sur_name = "miroro"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_entertainment_director_Asnath_Mosoti () {
	$query ='SELECT vote_id FROM voted_entertainment_director WHERE first_name = "asnath" AND sur_name = "mosoti"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_faculty_of_science_Mutua_Judith () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_science WHERE first_name = "mutua" AND sur_name = "judith"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_faculty_of_science_Naomi_Mwangi () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_science WHERE first_name = "naomi" AND sur_name = "mwangi"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_faculty_of_science_Elvin_Ashibaka () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_science WHERE first_name = "elvin" AND sur_name = "ashibaka"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_faculty_of_science_Langat_Aron () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_science WHERE first_name = "langat" AND sur_name = "aron"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_faculty_of_engineering_Esther_Wangari () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_engineering WHERE first_name = "esther" AND sur_name = "wangari"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_faculty_of_engineering_Sandra_Nyongesa () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_engineering WHERE first_name = "sandra" AND sur_name = "nyongesa"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_faculty_of_engineering_Christocency_Okumu () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_engineering WHERE first_name = "christocency" AND sur_name = "okumu"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_faculty_of_engineering_Mildred_Nauria () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_engineering WHERE first_name = "mildred" AND sur_name = "nauria"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_faculty_of_education_and_social_sciences_Lydia_Muthoki () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_education_and_social_sciences WHERE first_name = "lydia" AND sur_name = "muthoki"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_faculty_of_education_and_social_sciences_Caroline_Mokaya () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_education_and_social_sciences WHERE first_name = "caroline" AND sur_name = "mokaya"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_faculty_of_education_and_social_sciences_Caroline_Mbithi () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_education_and_social_sciences WHERE first_name = "caroline" AND sur_name = "mbithi"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_faculty_of_education_and_social_sciences_Wanjau_Terry () {
	$query ='SELECT vote_id FROM voted_congress_faculty_of_education_and_social_sciences WHERE first_name = "wanjau" AND sur_name = "terry"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_cdmha_Patrick_Mutua () {
	$query ='SELECT vote_id FROM voted_congress_cdmha WHERE first_name = "patrick" AND sur_name = "mutua"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_cdmha_Kiprotich_Brian () {
	$query ='SELECT vote_id FROM voted_congress_cdmha WHERE first_name = "kiprotich" AND sur_name = "brian"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_cdmha_Mercy_Buigut () {
	$query ='SELECT vote_id FROM voted_congress_cdmha WHERE first_name = "mercy" AND sur_name = "buigut"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_cdmha_Gacheri_Mwobobia () {
	$query ='SELECT vote_id FROM voted_congress_cdmha WHERE first_name = "gacheri" AND sur_name = "mwobobia"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_hall_1_Chepkirui_Vivian () {
	$query ='SELECT vote_id FROM voted_congress_hall_1 WHERE first_name = "chepkirui" AND sur_name = "vivian"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_hall_1_Judith_Wambua () {
	$query ='SELECT vote_id FROM voted_congress_hall_1 WHERE first_name = "judith" AND sur_name = "wambua"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_hall_1_Peris_Wanjiku () {
	$query ='SELECT vote_id FROM voted_congress_hall_1 WHERE first_name = "peris" AND sur_name = "wanjiku"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_hall_1_Diana_Cherono () {
	$query ='SELECT vote_id FROM voted_congress_hall_1 WHERE first_name = "diana" AND sur_name = "cherono"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_hall_2_Lilian_Kerubo () {
	$query ='SELECT vote_id FROM voted_congress_hall_2 WHERE first_name = "lilian" AND sur_name = "kerubo"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_hall_2_Nasoro_Steve () {
	$query ='SELECT vote_id FROM voted_congress_hall_2 WHERE first_name = "nasoro" AND sur_name = "steve"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_hall_2_Portia_Elsy () {
	$query ='SELECT vote_id FROM voted_congress_hall_2 WHERE first_name = "portia" AND sur_name = "elsy"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_hall_2_Mueni_Christine () {
	$query ='SELECT vote_id FROM voted_congress_hall_2 WHERE first_name = "mueni" AND sur_name = "christine"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_hall_3_Yvonne_Mangoli () {
	$query ='SELECT vote_id FROM voted_congress_hall_3 WHERE first_name = "yvonne" AND sur_name = "mang\'oli"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_hall_3_Maryanne_Wambui () {
	$query ='SELECT vote_id FROM voted_congress_hall_3 WHERE first_name = "maryanne" AND sur_name = "wambui"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_hall_3_Charity_Manglara () {
	$query ='SELECT vote_id FROM voted_congress_hall_3 WHERE first_name = "charity" AND sur_name = "manglara"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_hall_3_Mercy_Manyasi () {
	$query ='SELECT vote_id FROM voted_congress_hall_3 WHERE first_name = "mercy" AND sur_name = "manyasi"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_milimani_Oyuga_Lilian () {
	$query ='SELECT vote_id FROM voted_congress_milimani WHERE first_name = "oyuga" AND sur_name = "lilian"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_milimani_Angoli_Celestine () {
	$query ='SELECT vote_id FROM voted_congress_milimani WHERE first_name = "angoli" AND sur_name = "celestine"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_milimani_Rotich_Joyline () {
	$query ='SELECT vote_id FROM voted_congress_milimani WHERE first_name = "rotich" AND sur_name = "joyline"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_milimani_Mary_Barongo () {
	$query ='SELECT vote_id FROM voted_congress_milimani WHERE first_name = "mary" AND sur_name = "barongo"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function voted_congress_kotecha_Anyoso_Peruce () {
	$query ='SELECT vote_id FROM voted_congress_kotecha WHERE first_name = "anyoso" AND sur_name = "peruce"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_kotecha_Sally_Gichana () {
	$query ='SELECT vote_id FROM voted_congress_kotecha WHERE first_name = "sally" AND sur_name = "gichana"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_kotecha_Cherono_Mercy () {
	$query ='SELECT vote_id FROM voted_congress_kotecha WHERE first_name = "cherono" AND sur_name = "mercy"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}

function voted_congress_kotecha_Peter_Mwangi () {
	$query ='SELECT vote_id FROM voted_congress_kotecha WHERE first_name = "peter" AND sur_name = "mwangi"';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


  if(loggedin()){
  
  
  
   if(isset($_SESSION['user_id'])) {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('sur_name');
$gender = getuserfield('gender');
$id_no = getuserfield('id_no');
$phone_no = getuserfield('phone_no');
$email_address = getuserfield('email_address');
$graduate_level = getuserfield('graduate_level');
$category = getuserfield('category');
$campus = getuserfield('campus');
$academic_division = getuserfield('academic_division');
$year_of_study = getuserfield('year_of_study');
$residence_area = getuserfield('residence_area');
$residence_hall = getuserfield('residence_hall');
$username = getuserfield('username');
$password = getuserfield('password');


	$query1 = "SELECT username FROM successful_voters WHERE reg_no = '".$reg_no."' OR id_no = '".$id_no."' OR username = '"            .$username."' ";			
	
	$query1_run = @mysql_query($query1);	

	if(@mysql_num_rows($query1_run) == 0){
					?>	
					
					<html>
					<head>
					<title>Untitled Document</title>
					</head>
					<body onLoad="confirmation()">
					
					<script type="text/javascript">
					<!--
					function confirmation() {
					var answer = alert("Sorry, you have to vote  first before you can view the current results")
					window.location = "logged_in_voter.php";
					 }
					 //-->
					 </script> 
					</body>
					</html>		
					
					<?php
	} else if(mysql_num_rows($query1_run) == 1){					  
			  
if(isset($_POST['view_category'])) {

$view_category = $_POST['view_category'];


	if($view_category != 'select a view category') {
	
	      if($view_category == "Chaireperson"){	
		  	header('Location: results_for_chairperson.php');
		  }
		  
		  else if($view_category == "Vice Chairperson"){		  
             header('Location: results_for_vice_chairperson.php');
		  }
		  
          else if($view_category == "Secretary General"){
		     header('Location: results_for_secretary_general.php');
		  }
		  
  		  else if($view_category == "Deputy Secretary General"){
		     header('Location: results_for_deputy_secretary_general.php');
		  }
		  
		  else if($view_category=="Finance Director"){
		     header('Location: results_for_finance_director.php');
		  }

		  else if($view_category == "Academics Director"){
		     header('Location: results_for_academics_director.php');
		  }
		  
		  else if($view_category == "Accommodation Director(Resident)"){
		     header('Location: results_for_accommodation_director_resident.php');
		  }
		  
		  else if($view_category=="Accommodation Director(Non-Resident)"){
		     header('Location: results_for_accommodation_director_nonresident.php');
		  }
		  
		  else if($view_category == "Catering Director"){
		     header('Location: results_for_catering_director.php');
		  }	  
		  
		  else if($view_category == "Entertainment Director"){
		     header('Location: results_for_entertainment_director.php');
		  }	  

		  
		  else if($view_category == "Congress-Faculty of Science"){		  
             header('Location: results_for_congress_faculty_of_science.php');
		  }
		  
          else if($view_category == "Congress-Faculty of Engineering"){
		     header('Location: results_for_congress_faculty_of_engineering.php');
		  }
		  
  		  else if($view_category == "Congress-Faculty of Education and Social Sciences"){
		     header('Location: results_for_congress_faculty_of_education_and_social_sciences.php');
		  }
		  
		  else if($view_category=="Congress-CDMHA"){
		     header('Location: results_for_congress_cdmha.php');
		  }

		  else if($view_category == "Congress-Hall 1"){
		     header('Location: results_for_congress_hall_1.php');
		  }
		  
		  else if($view_category == "Congress-Hall 2"){
		     header('Location: results_for_congress_hall_2.php');
		  }
		  
		  else if($view_category=="Congress-Hall 3"){
		     header('Location: results_for_congress_hall_3.php');
		  }
		  
		  else if($view_category == "Congress-Milimani"){
		     header('Location: results_for_congress_milimani.php');
		  }	  
		  
		  else if($view_category == "Congress-Kotecha"){
		     header('Location: results_for_congress_kotecha.php');
		  }	  
		  

	} else {
	
?>	
	
	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("Select a category from which to view statistics on candidates.")	
	 }
	 //-->
	 </script> 
	</body>
	</html>		

<?php	
	       }		
         }
	  }
   }
   
    
   else if(isset($_SESSION['RO']) || isset($_SESSION['admin'])) {
   
			  
if(isset($_POST['view_category'])) {

$view_category = $_POST['view_category'];


	if($view_category != 'select a view category') {
	
	      if($view_category == "Chaireperson"){	
		  	header('Location: results_for_chairperson.php');
		  }
		  
		  else if($view_category == "Vice Chairperson"){		  
             header('Location: results_for_vice_chairperson.php');
		  }
		  
          else if($view_category == "Secretary General"){
		     header('Location: results_for_secretary_general.php');
		  }
		  
  		  else if($view_category == "Deputy Secretary General"){
		     header('Location: results_for_deputy_secretary_general.php');
		  }
		  
		  else if($view_category=="Finance Director"){
		     header('Location: results_for_finance_director.php');
		  }

		  else if($view_category == "Academics Director"){
		     header('Location: results_for_academics_director.php');
		  }
		  
		  else if($view_category == "Accommodation Director(Resident)"){
		     header('Location: results_for_accommodation_director_resident.php');
		  }
		  
		  else if($view_category=="Accommodation Director(Non-Resident)"){
		     header('Location: results_for_accommodation_director_nonresident.php');
		  }
		  
		  else if($view_category == "Catering Director"){
		     header('Location: results_for_catering_director.php');
		  }	  
		  
		  else if($view_category == "Entertainment Director"){
		     header('Location: results_for_entertainment_director.php');
		  }	  

		  
		  else if($view_category == "Congress-Faculty of Science"){		  
             header('Location: results_for_congress_faculty_of_science.php');
		  }
		  
          else if($view_category == "Congress-Faculty of Engineering"){
		     header('Location: results_for_congress_faculty_of_engineering.php');
		  }
		  
  		  else if($view_category == "Congress-Faculty of Education and Social Sciences"){
		     header('Location: results_for_congress_faculty_of_education_and_social_sciences.php');
		  }
		  
		  else if($view_category=="Congress-CDMHA"){
		     header('Location: results_for_congress_cdmha.php');
		  }

		  else if($view_category == "Congress-Hall 1"){
		     header('Location: results_for_congress_hall_1.php');
		  }
		  
		  else if($view_category == "Congress-Hall 2"){
		     header('Location: results_for_congress_hall_2.php');
		  }
		  
		  else if($view_category=="Congress-Hall 3"){
		     header('Location: results_for_congress_hall_3.php');
		  }
		  
		  else if($view_category == "Congress-Milimani"){
		     header('Location: results_for_congress_milimani.php');
		  }	  
		  
		  else if($view_category == "Congress-Kotecha"){
		     header('Location: results_for_congress_kotecha.php');
		  }	  
		  

	} else {
	
?>	
	
	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("Select a category from which to view statistics on candidates.")	
	 }
	 //-->
	 </script> 
	</body>
	</html>		

<?php	
	       }		
         }
	  }
   
 } else if(!loggedin()){

?>

	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("Sorry, you have to log in first")
	window.location = "index.php";
	 }
	 //-->
	 </script> 
	</body>
	</html>		


<?php

}

 
?>

<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divWrap3">

<div id="divLine"></div>

<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="100%" border="0">
<tr>
<td width="80%">


<?php
include("results_pages.php");

echo '<br>';
?>

<form action="<?php $current_file = $_SERVER['SCRIPT_NAME']; echo $current_file; ?>" method="POST">
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
View results of the position of : &nbsp;&nbsp;&nbsp; <select name="view_category">
                        <option>select a view category</option>
						<option>Congress-Faculty of Science</option>
						<option>Congress-Faculty of Engineering</option>
						<option>Congress-Faculty of Education and Social Sciences</option>
						<option>Congress-CDMHA</option>
						<option>Congress-Hall 1</option>
						<option>Congress-Hall 2</option>
						<option>Congress-Hall 3</option>
						<option>Congress-Milimani</option>
						<option>Congress-Kotecha</option>				
              </select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="VIEW">
<br><br><br><br><br><br>

</form>
</div>
</div>
<div id="divLine"></div>
</td>
</tr>
</table>
</div>
</body>
</html>

