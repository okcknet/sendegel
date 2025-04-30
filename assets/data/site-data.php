<?php
$affectedPeople = "535.000";

# membership fees
$membershipFees = array(
	"entry_fee" => 500,
	"annual_dues" => 500,
	"legal_entity_entry_fee" => 5000,
	"legal_entity_annual_dues" => 5000
);

/*
# membership fees - backup
$membershipFees = array(
	"entry_fee" => 250,
	"annual_dues" => 200,
	"legal_entity_entry_fee" => 1000,
	"legal_entity_annual_dues" => 5000,
	"student_entry_fee" => 75,
	"student_annual_dues" => 75
);
*/

$membershipForms = array(
	"individual" => "https://drive.google.com/file/d/1iopbhscuPqtW_-V34Ew3e3Ld3fxNRqY_/view",
	"legal_entity" => "https://drive.google.com/file/d/1XH4F5uWvh4fpLK6-lKMAenw9-kHVlIj0/view"
);


# reports
$reports = array(
	"independent_auditors_reports" => array(
		"2023" => array(
			"tr" => array(
				"title" => "2023 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/1MIxmLxZMquqNlxN4-aW7SAnxIWdILP23/view"
			),
			"en" => array(
				"title" => "2023 Independent Auditors' Report",
				"file" => "https://drive.google.com/file/d/19S-mdWqnA4TBYzWkqxKmOqdld3kcSdqT/view"
			)
		),
		"2022" => array(
			"tr" => array(
				"title" => "2022 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/1tQFt8liEWopYK8qf4PKCyUTv5WgTHJLt/view"
			),
			"en" => array(
				"title" => "2022 Independent Auditors' Report",
				"file" => "https://drive.google.com/file/d/1oPCG5dz1rQSXChpR7B-SH9BC8QgSzZ3G/view"
			)
		),
		"2021" => array(
			"tr" => array(
				"title" => "2021 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/17FQbrhc39Wpkp3iyszAwWbviu5I65ofE/view"
			),
			"en" => array(
				"title" => "2021 Independent Auditors' Report",
				"file" => "https://drive.google.com/file/d/1ibnTRNzzLPzCwj9FqfwYeYgUK6djdygt/view"
			)
		),
		"2020" => array(
			"tr" => array(
				"title" => "2020 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/1iUSS5JI-ZSZQWH5j6GSYYJ8aAZS1VGlu/view"
			),
			"en" => array(
				"title" => "2020 Independent Auditors' Report",
				"file" => "https://drive.google.com/file/d/1Y0ACoKUU9MTCwHhDy8MUGcKtxyVQcMw-/view"
			)
		),
		"2019" => array(
			"tr" => array(
				"title" => "2019 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/1jdGkYolQL4SY7Zj4yQ9-ielLcpOD1fgC/view"
			),
			"en" => array(
				"title" => "2019 Independent Auditors' Report",
				"file" => "https://drive.google.com/file/d/1Joxn6Ni0J2Rv91d2F4LrrdYqoqblDMz-/view"
			)
		),
		"2018" => array(
			"tr" => array(
				"title" => "2018 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/1yGGAB4nbjmytcVrr4s6HDW46A3bSa227/view"
			),
			"en" => array(
				"title" => "2018 Independent Auditors' Report",
				"file" => "https://drive.google.com/file/d/14fxQW6QsxQ6pWBvNzRgnGVmmsAZhkKUe/view"
			)
		),
		"2017" => array(
			"tr" => array(
				"title" => "2017 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/1m4YSD8vWK3BjnwGoK6CqFuiPlCLMtrtR/view"
			),
			"en" => array(
				"title" => "2017 Independent Auditors' Report",
				"file" => "https://drive.google.com/file/d/1PdMhXShVr1GKUp7EpKUITU8kSlDPoxIu/view"
			)
		),
		"2016" => array(
			"tr" => array(
				"title" => "2016 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/1DgjowjgTVAqMdRcWUVKzGUW6AJykKK7u/view"
			),
			"en" => array(
				"title" => "2016 Independent Auditors' Report",
				"file" => "https://drive.google.com/file/d/11zKJCXMy69Cy9dMnvKcleirww5UUqKlG/view"
			)
		),
		"2015" => array(
			"tr" => array(
				"title" => "2015 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/11U5m2g2prD11fc3p-cKg9fsY2hvCQixH/view"
			),
			"en" => array(
				"title" => "2015 Independent Auditors' Report",
				"file" => "https://drive.google.com/file/d/1jhIngZNtSm5XnDpyEVN5Qa320ajDUhN7/viev"
			)
		),
		"2014" => array(
			"tr" => array(
				"title" => "2014 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/1Ai2B7fwDQZrVw5YaIMkoHa1ntP6CbU0A/view"
			),
			"en" => array(
				"title" => "2014 Independent Auditors' Report",
				"file" => "https://drive.google.com/file/d/1yDqHYsDja8dct4SLiTVuEH8iiZ7Vy90Q/view"
			)
		),
		"2013" => array(
			"tr" => array(
				"title" => "2013 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/1XCT4XFb8UXkDHRKGq8vWl4xuh0DaIsAe/view"
			)
		),
		"2012" => array(
			"tr" => array(
				"title" => "2012 Yılı Bağımsız Denetim Raporu",
				"file" => "https://drive.google.com/file/d/1YPDPA2dY-OoRKOCvLlipA77OedgdEWdn/view"
			)
		)
	),
	"annual_reports" => array(
		"current" => array(
			"tr" => array(
				"title" => "Güncel Faaliyet Raporumuz",
				"file" => "https://drive.google.com/file/d/1o8DRoDyn1rfHPbbxA5BfAWVDIT7JW-5i/view"
			),
			"en" => array(
				"title" => "Current Annual Report",
				"file" => "https://drive.google.com/file/d/1o8DRoDyn1rfHPbbxA5BfAWVDIT7JW-5i/view"
			)
		),
		"2023" => array(
			"tr" => array(
				"title" => "2023 Yılı Faaliyet Raporumuz",
				"file" => "https://drive.google.com/file/d/1jAMyn3rUX3feI93f65qh2u7XjGGGX4_z/view"
			),
			"en" => array(
				"title" => "2023 Annual Report",
				"file" => "https://drive.google.com/file/d/1znGUwubWzWMLA4vqBGT5mMVE1sDi0AaB/view"
			)
		),
		"2022" => array(
			"tr" => array(
				"title" => "2022 Yılı Faaliyet Raporumuz",
				"file" => "https://drive.google.com/file/d/1Lv3WBgkXU4rwbN1fcSlYEFAUO4577RBY/view"
			),
			"en" => array(
				"title" => "2022 Annual Report",
				"file" => "https://drive.google.com/file/d/1zN804opknViFnbMqchRz-r6KIYzkRzbR/view"
			)
		),
		"2021" => array(
			"tr" => array(
				"title" => "2021 Yılı Faaliyet Raporumuz",
				"file" => "https://drive.google.com/file/d/1BIYB0EnhIH6hYUPUwR5_oM8uaPz8xCdc/view"
			),
			"en" => array(
				"title" => "2021 Annual Report",
				"file" => "https://drive.google.com/file/d/1ZQpXlhGVTyj9bkOmJ0KUqywJDsarePKp/view"
			)
		),
		"2020" => array(
			"tr" => array(
				"title" => "2020 Yılı Faaliyet Raporumuz",
				"file" => "https://drive.google.com/file/d/1KOEKwM_8cXq2ZspVQUDy4OPxAysUCYjR/view"
			),
			"en" => array(
				"title" => "2020 Annual Report",
				"file" => "https://drive.google.com/file/d/1phlNW4D7OBn3yi3fws7JhOpC7IKCiQy7/view"
			)
		),
		"2019" => array(
			"tr" => array(
				"title" => "2019 Yılı Faaliyet Raporumuz",
				"file" => "https://drive.google.com/file/d/1YYmCYDz2pOGnQ0T-cSkbw3TsQmzHh94Q/view"
			),
			"en" => array(
				"title" => "2019 Annual Report",
				"file" => "https://drive.google.com/file/d/113oqcVgAg_gl0dnk8wjX26v9pPL7D9fl/view"
			)
		),
		"2018" => array(
			"tr" => array(
				"title" => "2018 Yılı Faaliyet Raporumuz",
				"file" => "https://drive.google.com/file/d/1u3-jfLlMh4JDZjqeFJb06ru_i_q16ocG/view"
			),
			"en" => array(
				"title" => "2018 Annual Report",
				"file" => "https://drive.google.com/file/d/1JdJ8VYeNMGZWJSEfICvIBDMHUG6xliS8/view"
			)
		),
		"2017" => array(
			"tr" => array(
				"title" => "2017 Yılı Faaliyet Raporumuz",
				"file" => "https://drive.google.com/file/d/1VYrB7luDji0ELrNl2gri-2ZuL2yKYub9/view"
			),
			"en" => array(
				"title" => "2017 Annual Report",
				"file" => "https://drive.google.com/file/d/1PNS6DDPnZDzDIzx7S3sHw6AGpYmQ0gty/view"
			)
		),
		"2016" => array(
			"tr" => array(
				"title" => "2016 Yılı Faaliyet Raporumuz",
				"file" => "https://drive.google.com/file/d/1YJcoT6R0z9q0bjx3o6Db_M3dZSbyOe5R/view"
			),
			"en" => array(
				"title" => "2016 Annual Report",
				"file" => "https://drive.google.com/file/d/1eIQUItQszdFD2jWleAd5M7l0b7JjA-pI/view"
			)
		),
		"2015" => array(
			"tr" => array(
				"title" => "2015 Yılı Faaliyet Raporumuz",
				"file" => "https://drive.google.com/file/d/1eTo0BpnKcbayO8x7_w7KTOdpP6FspdYH/view"
			),
			"en" => array(
				"title" => "2015 Annual Report",
				"file" => "https://drive.google.com/file/d/1Fi7-8vH5-uXSOy93anI8P6wxo3uhNEkH/view"
			)
		)
	),
	/* other reports - diger raporlar */
	"other_reports" => array(
		"tr" => array(
			array(
				"title" => "SenDeGel Mart 2021 - Haziran 2021 Dönemsel Bilgilendirme Raporu",
				"file" => "https://drive.google.com/file/d/1zEPpwZTxaVkuPsir77TVp-f2GooZ1Ozg/view"
			),
			array(
				"title" => "SenDeGel Ekim 2020 - Şubat 2021 Dönemsel Bilgilendirme Raporu",
				"file" => "https://drive.google.com/file/d/1kHP6tKvJg2PvGenD_mRG5oa-9QR57On7/view"
			),
			array(
				"title" => "SenDeGel Mayıs 2020 - Eylül 2020 Dönemsel Bilgilendirme Raporu",
				"file" => "https://drive.google.com/file/d/1LdL0Inf54wgQs4h1Hf1p9dVhZE4ajZWl/view"
			),
			array(
				"title" => "SenDeGel Ocak 2020 - Nisan 2020 Dönemsel Bilgilendirme Raporu",
				"file" => "https://drive.google.com/file/d/1HazvNTqj320x3MGIbOel208SyoqiPfcH/view"
			),
			array(
				"title" => "SenDeGel Ağustos 2019 - Kasım 2019 Dönemsel Bilgilendirme Raporu",
				"file" => "https://drive.google.com/file/d/1J7ge2NThZQQw40WpQoNssEACJeeX4Jot/viev"
			),
			array(
				"title" => "SenDeGel Ocak 2019 - Temmuz 2019 Dönemsel Bilgilendirme Raporu",
				"file" => "https://drive.google.com/file/d/17cza548lt2B0dISIO967DCIq0j-SBwwc/view"
			),
			array(
				"title" => "SenDeGel Temmuz 2018 - Kasım 2018 Dönemsel Bilgilendirme Raporu",
				"file" => "https://drive.google.com/file/d/1Oi2QNhyc6u7esWXVer9L5cvoDLEl45IH/view"
			),
			array(
				"title" => "SenDeGel Mart 2018 - Haziran 2018 Dönemsel Bilgilendirme Raporu",
				"file" => "https://drive.google.com/file/d/1OxrkRlfh2cnC_UjJhFLvUrQPFD63LuZl/view"
			),
			array(
				"title" => "SenDeGel Aralık 2017 - Mart 2018 Dönemsel Bilgilendirme Raporu",
				"file" => "https://drive.google.com/file/d/17CB8fsEOV21dWivdAWcjFCHH5WyiFa5J/view"
			),
			array(
				"title" => "SenDeGel Haziran 2016 - Ekim 2016 Dönemsel Bilgilendirme Raporu",
				"file" => "https://drive.google.com/file/d/1QSfmFtPPKNf_fu1VFE13jVJqZVieEC9a/view"
			)
		)
	),
	/* statements - beyannameler */
	"statements" => array(
		"tr" => array(
			array(
				"title" => "SenDeGel 2023 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1Ldaw7OQgn2eJYrijw_4vSXgnxZBpkMHf/view"
			),
			array(
				"title" => "SenDeGel 2022 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1OoIkZtOepv3Gqr4dygu5h0yF-m03yFvt/view"
			),
			array(
				"title" => "SenDeGel 2021 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1NlDH4bpS9oBm21Rcp-ZiJemjOSDkQSMY/view"
			),
			array(
				"title" => "SenDeGel 2020 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1P_qP_SsRi9bNs4JAjYwt-a8XdwpX-FFl/view"
			),
			array(
				"title" => "SenDeGel 2019 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1PfbH-dfMPlQT7zedqnBp_4opmrIeZlb8/view"
			),
			array(
				"title" => "SenDeGel 2018 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1Z8ZUIKfZzSQGY7ontQUZGLSrWujVT1zT/view"
			),
			array(
				"title" => "SenDeGel 2017 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1wk1WlQoy4FeOvA_D-em16byJYjTzLUjC/view"
			),
			array(
				"title" => "SenDeGel 2016 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1kdRJNZbje5veQ28c_bU7oZ_1bDDJ91l_/view"
			),
			array(
				"title" => "SenDeGel 2015 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1AhKt2kJifL32Ti0KUl4BTOcv3QoYTB8O/view"
			),
			array(
				"title" => "SenDeGel 2014 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1oLWXxUpEvrnNiv8tZL6Z4Td26gaoJ8M-/view"
			),
			array(
				"title" => "SenDeGel 2013 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1Z_uI-dS6dHD7936jAXhi_0XrKJWjUcIp/view"
			),
			array(
				"title" => "SenDeGel 2012 Beyannamesi",
				"file" => "https://drive.google.com/file/d/1dnBeFaeH-8eG7o_ksMb6Z99SU4l_jVeE/view"
			),
			array(
				"title" => "Bağışçı Hakları Beyannamesi",
				"file" => "https://drive.google.com/file/d/1YiXlaGUHEnW9uUuNSD2YDW9Uk8F6ggMI/view"
			)
		)
	)
);

#projects
$projects = array(
	"all_projects" => array(
		"update_date" => "2024-05-20",
		"title" => "Tüm Projeler",
		"title-en" => "All Projects",
		"our-title" => "Projelerimiz",
		"our-title-en" => "Our All Projects",
		"file" => "https://drive.google.com/file/d/1AhnS6hhp-DrwTenKOxZWNyHnTGMKLA2W/preview",
		"file-en" => "https://drive.google.com/file/d/1wxCHdIpm9VFyMLd9xtY07TxqVQOaSyHJ/preview"
	),
	"livestock_projects" => array(
		"update_date" => "2024-05-20",
		"title" => "Hayvancılık Projeleri",
		"title-en" => "Livestock Projects",
		"our-title" => "Hayvancılık Projelerimiz",
		"our-title-en" => "Our Livestock Projects",
		"file" => "https://drive.google.com/file/d/1sMfveLzHSU85ThwKHoFoQvY7t4nERQCO/preview",
		"file-en" => "https://drive.google.com/file/d/1t5deIvSWoATGcSTMscdQZuF7iPFUIN2c/preview"
	),
	"solar_panel_projects" => array(
		"update_date" => "2024-05-20",
		"title" => "Güneş Enerjisi Projeleri",
		"title-en" => "Solar Energy Projects",
		"our-title" => "Güneş Enerjisi Projelerimiz",
		"our-title-en" => "Our Solar Energy Projects",
		"file" => "https://drive.google.com/file/d/1_irV1xYHk1duPddfifsP6-d8Ajpp9WjX/preview",
		"file-en" => "https://drive.google.com/file/d/1dLuXeoesiR99xkrODSEGRRIhMkX6Kjw0/preview"
	),
	"water_well_projects" => array(
		"update_date" => "2024-05-20",
		"title" => "Su Kuyusu Projeleri",
		"title-en" => "Water Well Projects",
		"our-title" => "Su Kuyusu Projelerimiz",
		"our-title-en" => "Our Water Well Projects",
		"file" => "https://drive.google.com/file/d/1UJNe1ccL8xBDQN_9w3KAbzPb7TG5zk8v/preview",
		"file-en" => "https://drive.google.com/file/d/12yUmgcrW9j3slTjuj_uGhReh-fnxvD-a/preview"
	),
	"mill_projects" => array(
		"update_date" => "2024-05-20",
		"title" => "Değirmen Projeleri",
		"title-en" => "Mill Projects",
		"our-title" => "Değirmen Projelerimiz",
		"our-title-en" => "Our Mill Projects",
		"file" => "https://drive.google.com/file/d/1PXCzh_7JRy0NKcyQNXFhgwzNMT2rGZUA/preview",
		"file-en" => "https://drive.google.com/file/d/1lmU0mMGpGoorHQYkIBfL1A4NCuQFB8u7/preview"
	),
	"women_garden_projects" => array(
		"update_date" => "2024-05-20",
		"title" => "Kadın Bahçeleri Projeleri",
		"title-en" => "Women's Garden Projects",
		"our-title" => "Kadın Bahçeleri Projelerimiz",
		"our-title-en" => "Our Women's Garden Projects",
		"file" => "https://drive.google.com/file/d/1PmbmaT6g_vPw9EQTlbW4Nmwu3WUnU94m/preview",
		"file-en" => "https://drive.google.com/file/d/13q_IdOy5iHy93IZ-swg22nAiyNqK8XVc/preview"
	),
	"other_projects" => array(
		"update_date" => "2024-05-20",
		"title" => "Diğer Projeler",
		"title-en" => "Other Projects",
		"our-title" => "Diğer Projelerimiz",
		"our-title-en" => "Our Other Projects",
		"file" => "https://drive.google.com/file/d/1kVkvVxR5YygT3BaH7nen1ZH2I4Wa359O/preview",
		"file-en" => "https://drive.google.com/file/d/18RvObQYVDXUOeKnQR5yrMxRsOeaZMqwd/preview"
	),
	"waiting_for_support" => array(
		"update_date" => "2023-09-10",
		"title" => "Destek Bekleyen Projeler",
		"title-en" => "Projects Waiting for Support",
		"our-title" => "Destek Bekleyen Projelerimiz",
		"our-title-en" => "Our Projects That Need Support",
		"file" => "https://drive.google.com/file/d/1xEWHs9elg2egCbm77fsUm0nndjzE2BAD/preview",
		"file-en" => "https://drive.google.com/file/d/1HjGY5pQvtKYV_ENGFhjINWc_UMYXH6Gp/preview"
	)
);



# team members
function getTeamTitleTranslation($key, $language)
{
	$teamTitleTranslations = [
		'chairman_of_the_board' => [
			'tr' => 'Yönetim Kurulu Başkanı',
			'en' => 'Chairman of the Board'
		],
		'chairman_of_the_board_of_auditor' => [
			'tr' => 'Denetim Kurulu Başkanı',
			'en' => 'Chairman of the Board of Audit'
		],
		'vice_chairman_of_the_board' => [
			'tr' => 'Yönetim Kurulu Başkan Yardımcısı',
			'en' => 'Vice Chairman of the Board'
		],
		'secretary' => [
			'tr' => 'Sekreter',
			'en' => 'Secretary'
		],
		'accountant' => [
			'tr' => 'Sayman',
			'en' => 'Accountant'
		],
		'member' => [
			'tr' => 'Üye',
			'en' => 'Member'
		],
		'substitute_member' => [
			'tr' => 'Yedek Üye',
			'en' => 'Substitute Member'
		],
		'general_coordinator' => [
			'tr' => 'Genel Koordinatör',
			'en' => 'General Coordinator'
		],
		'general_secretary_and_donor_relations' => [
			'tr' => 'Genel Sekreter ve Bağışçı İlişkileri',
			'en' => 'General Secretary and Donor Relations'
		],
		'founder' => [
			'tr' => 'Kurucu',
			'en' => 'Founder'
		],
		'board' => [
			'tr' => 'Yönetim Kurulu',
			'en' => 'Board'
		],
		'advisor' => [
			'tr' => 'Danışman',
			'en' => 'Advisor'
		],
		'employee' => [
			'tr' => 'Çalışan',
			'en' => 'Employee'
		],
		'auditor' => [
			'tr' => 'Denetçi',
			'en' => 'Auditor'
		]
	];

	return $teamTitleTranslations[$key][$language];
}

// https://www.sendegel.org.tr/en/our-team.php
$urlPath = $_SERVER['REQUEST_URI'];
$language = 'tr';
if (strpos($urlPath, '/en/') !== false) {
	$language = 'en';
}



$teamMembers = [
	'abdullah-hardura' => [
		'name' => 'Abdullah Hardura',
		'file' => 'abdullah-hardura.php',
		'types' => ['board'],
		'order' => [
			'board' => 22,
		],
		'title' => [
			'board' => getTeamTitleTranslation('substitute_member', $language),
		],
	],
	'asli-aysen-aydin' => [
		'name' => 'Aslı Ayşen Aydın',
		'file' => 'asli-aysen-aydin.php',
		'types' => ['founder'],
		'order' => [
			'founder' => 6,
		],
	],
	'aytul-tulay-balci' => [
		'name' => 'Aytül Tülay Balcı',
		'file' => 'aytul-tulay-balci.php',
		'types' => ['board'],
		'order' => [
			'board' => 4,
		],
		'title' => [
			'board' => getTeamTitleTranslation('accountant', $language),
		],
	],
	'aziz-akgul' => [
		'name' => 'Aziz Akgül',
		'file' => 'aziz-akgul.php',
		'types' => ['founder'],
		'order' => [
			'founder' => 1,
		],
	],
	'bilge-ogun-bassani' => [
		'name' => 'Bilge Öğün Bassani',
		'file' => 'bilge-ogun-bassani.php',
		'types' => ['advisor'],
		'order' => [
			'advisor' => 1,
		],
	],
	'cem-aksehirlioglu' => [
		'name' => 'Cem Akşehirlioğlu',
		'file' => 'cem-aksehirlioglu.php',
		'types' => ['board'],
		'order' => [
			'board' => 12,
		],
		'title' => [
			'board' => getTeamTitleTranslation('member', $language),
		],
	],
	'ceren-kali' => [
		'name' => 'Ceren Kalı',
		'file' => 'ceren-kali.php',
		'types' => ['founder'],
		'order' => [
			'founder' => 11,
		],
	],
	'charlotte-sabbah' => [
		'name' => 'Charlotte Sabbah',
		'file' => 'charlotte-sabbah.php',
		'types' => ['advisor'],
		'order' => [
			'advisor' => 4,
		],
	],
	'dara-aslan' => [
		'name' => 'Dara Aslan',
		'file' => 'dara-aslan.php',
		'types' => ['board'],
		'order' => [
			'board' => 23,
		],
		'title' => [
			'board' => getTeamTitleTranslation('substitute_member', $language),
		],
	],
	'derya-sel-bozkurt' => [
		'name' => 'Derya Sel Bozkurt',
		'file' => 'derya-sel-bozkurt.php',
		'types' => ['founder', 'auditor'],
		'order' => [
			'founder' => 5,
			'auditor' => 22,
		],
		'title' => [
			'auditor' => getTeamTitleTranslation('substitute_member', $language),
		],
	],
	// 'didem-unsur' => [
	// 	'name' => 'Didem Ünsür',
	// 	'file' => 'didem-unsur.php',
	// 	'types' => ['board'],
	// 	'order' => [
	// 		'board' => 4,
	// 	],
	// 	'title' => [
	// 		'board' => getTeamTitleTranslation('accountant', $language),
	// 	],
	// ],
	'ebru-celebi' => [
		'name' => 'Ebru Çelebi',
		'file' => 'ebru-celebi.php',
		'types' => ['employee'],
		'order' => [
			'employee' => 1,
		],
		'title' => [
			'employee' => getTeamTitleTranslation('general_secretary_and_donor_relations', $language),
		],
	],
	'ecehan-bike-geckinli' => [
		'name' => 'Ecehan Bike Geçkinli',
		'file' => 'ecehan-bike-geckinli.php',
		'types' => ['auditor'],
		'order' => [
			'auditor' => 11,
		],
		'title' => [
			'auditor' => getTeamTitleTranslation('member', $language),
		],
	],
	'ibrahim-betil' => [
		'name' => 'İbrahim Betil',
		'file' => 'ibrahim-betil.php',
		'types' => ['founder', 'board'],
		'order' => [
			'founder' => 3, // Set the order number for founder type
			'board' => 1, // Set the order number for board type
		],
		'title' => [
			'board' => getTeamTitleTranslation('chairman_of_the_board', $language),
		]
	],
	'jak-jabes' => [
		'name' => 'Jak Jabes',
		'file' => 'jak-jabes.php',
		'types' => ['advisor'],
		'order' => [
			'advisor' => 2,
		],
	],
	'kaddafi-bozkurt' => [
		'name' => 'Kaddafi Bozkurt',
		'file' => 'kaddafi-bozkurt.php',
		'types' => ['founder', 'auditor'],
		'order' => [
			'founder' => 7,
			'auditor' => 22,
		],
		'title' => [
			'auditor' => getTeamTitleTranslation('substitute_member', $language),
		],
	],
	'kerim-uralli' => [
		'name' => 'Kerim Urallı',
		'file' => 'kerim-uralli.php',
		'types' => ['founder'],
		'order' => [
			'founder' => 4,
		],
	],
	'mehmet-arda' => [
		'name' => 'Mehmet Arda',
		'file' => 'mehmet-arda.php',
		'types' => ['founder'],
		'order' => [
			'founder' => 2,
		],
	],
	'mehmet-bahadir-teke' => [
		'name' => 'Mehmet Bahadır Teke',
		'file' => 'mehmet-bahadir-teke.php',
		'types' => ['auditor'],
		'order' => [
			'auditor' => 1,
		],
		'title' => [
			'auditor' => getTeamTitleTranslation('chairman_of_the_board_of_auditor', $language),
		],
	],
	'mustafa-ciper' => [
		'name' => 'Mustafa Çiper',
		'file' => 'mustafa-ciper.php',
		'types' => ['board'],
		'order' => [
			'board' => 24,
		],
		'title' => [
			'board' => getTeamTitleTranslation('substitute_member', $language),
		],
	],
	'mutlu-sen' => [
		'name' => 'Mutlu Şen',
		'file' => 'mutlu-sen.php',
		'types' => ['auditor'],
		'order' => [
			'auditor' => 21,
		],
		'title' => [
			'auditor' => getTeamTitleTranslation('substitute_member', $language),
		],
	],
	'nuh-hakan-oflazer' => [
		'name' => 'Nuh Hakan Oflazer',
		'file' => 'nuh-hakan-oflazer.php',
		'types' => ['board'],
		'order' => [
			'board' => 21,
		],
		'title' => [
			'board' => getTeamTitleTranslation('substitute_member', $language),
		],
	],
	'samir-bayraktar' => [
		'name' => 'Samir Bayraktar',
		'file' => 'samir-bayraktar.php',
		'types' => ['founder'],
		'order' => [
			'founder' => 9,
		],
	],
	'sema-sezer' => [
		'name' => 'Sema Sezer',
		'file' => 'sema-sezer.php',
		'types' => ['board'],
		'order' => [
			'board' => 11,
		],
		'title' => [
			'board' => getTeamTitleTranslation('member', $language),
		],
	],
	// 'sema-gumus' => [
	// 	'name' => 'Sema Gümüş',
	// 	'file' => 'sema-gumus.php',
	// 	'types' => ['board'],
	// 	'order' => [
	// 		'board' => 29,
	// 	],
	// 	'title' => [
	// 		'board' => getTeamTitleTranslation('substitute_member', $language),
	// 	],
	// ],
	'tayyibe-gulek-domac' => [
		'name' => 'Tayyibe Gülek Domaç',
		'file' => 'tayyibe-gulek-domac.php',
		'types' => ['advisor'],
		'order' => [
			'advisor' => 3,
		],
	],
	'tugba-jabban' => [
		'name' => 'Tuğba Jabban',
		'file' => 'tugba-jabban.php',
		'types' => ['founder'],
		'order' => [
			'founder' => 10,
		],
	],
	'tuncay-bozkurt' => [
		'name' => 'Tuncay Bozkurt',
		'file' => 'tuncay-bozkurt.php',
		'types' => ['employee'],
		'order' => [
			'employee' => 2,
		],
		'title' => [
			'employee' => getTeamTitleTranslation('general_coordinator', $language),
		],
	],
	'turgut-derman' => [
		'name' => 'Turgut Derman',
		'file' => 'turgut-derman.php',
		'types' => ['founder'],
		'order' => [
			'founder' => 8,
		],
	],
	'zeynel-senan' => [
		'name' => 'Zeynel Senan',
		'file' => 'zeynel-senan.php',
		'types' => ['auditor'],
		'order' => [
			'auditor' => 13,
		],
		'title' => [
			'auditor' => getTeamTitleTranslation('member', $language),
		],
	],
	'can-senem-gurun' => [
		'name' => 'Can Senem Gürün',
		'file' => 'can-senem-gurun.php',
		'types' => ['board'],
		'order' => [
			'board' => 3,
		],
		'title' => [
			'board' => getTeamTitleTranslation('secretary', $language),
		],
	],
	'yasemin-vargi-emirdag' => [
		'name' => 'Yasemin Vargı Emirdağ',
		'file' => 'yasemin-vargi-emirdag.php',
		'types' => ['board'],
		'order' => [
			'board' => 2,
		],
		'title' => [
			'board' => getTeamTitleTranslation('vice_chairman_of_the_board', $language),
		],
	],
	'neslihan-kahyaoglu' => [
		'name' => 'Neslihan Kahyaoğlu',
		'file' => 'neslihan-kahyaoglu.php',
		'types' => ['board'],
		'order' => [
			'board' => 25,
		],
		'title' => [
			'board' => getTeamTitleTranslation('substitute_member', $language),
		],
	],
];
