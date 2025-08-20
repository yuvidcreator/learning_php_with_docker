<?php
// phpinfo();
file_put_contents('/var/www/logs/php_errors.log', "[".date("Y-m-d H:i:s")."] Hello from PHP\n", FILE_APPEND);

// $env = parse_ini_file(__DIR__ . '/.env');
// echo $env['APP_NAME'].'<br />' ?? 'Default App';

// echo "Hello, PHP is working!\n <br />";

// function loopThroughNestedArray($array) {
//     foreach ($array as $key => $value) {
//         if (is_array($value)) {
//             echo "$key: (array)\n <br />";
//             loopThroughNestedArray($value); // Recursive call
//         } else {
//             echo "$key: $value\n <br />";
//         }
//     }
// }

// function loopWithDepth($array, $depth = 0) {
//     foreach ($array as $key => $value) {
//         echo str_repeat('  ', $depth) . "$key: ";
        
//         if (is_array($value)) {
//             echo "(array)\n";
//             loopWithDepth($value, $depth + 1);
//         } else {
//             echo "$value\n";
//         }
//     }
// }




//  ============================================================================







// // Example usage:
// $input_json = '{
//     "OrderInfo": {
//         "id": "597",
//         "order_id": "OAT250300005",
//         "assign_type": "product",
//         "product_code": "EDAPPGS006",
//         "product_category": "GSA",
//         "product_sub_category": "GSA",
//         "product_name_en": "AptitudePlus",
//         "product_name_kr": "AptitudePlus",
//         "package_code": "",
//         "package_name_en": "",
//         "package_name_kr": "",
//         "report_provider": "reportlab",
//         "patient_name": "aptitude_ED01_EN",
//         "patient_dob": "1993-05-10",
//         "patient_gender": "M",
//         "patient_address": "",
//         "patient_height": "",
//         "patient_weight": "",
//         "patient_email": "",
//         "patient_contact": "",
//         "patient_nationality": "",
//         "guardian_name": "",
//         "guardian_relation": "",
//         "guardian_contact": "",
//         "order_category": "domestic",
//         "sample_collection_date": "2025-03-03",
//         "sample_collection_time": "",
//         "sample_receipt_date": "2025-03-04",
//         "sample_receipt_by": "system",
//         "sample_specimen_type": "BLOOD",
//         "sample_barcode": [
//             {
//                 "sample_barcode": "jhgbvfdc",
//                 "no_of_tubes": "1"
//             }
//         ],
//         "barcode_receive_status": "True",
//         "sample_barcode_receive": "{\"jhgbvfdc\": 1}",
//         "sample_resampling": "",
//         "previous_order_id": "",
//         "sample_resampling_date": "",
//         "sample_resampling_time": "",
//         "sample_report_id": "",
//         "provider_order_id": "",
//         "available_for_research_purpose": "",
//         "name_anonymised": "",
//         "confirmatory_test": "",
//         "vip_test": "",
//         "trf_consent": "True",
//         "trf_form": "",
//         "trf_form_received": "",
//         "gen_test_consent": "True",
//         "guardian_consent_form": "",
//         "guardian_consent_form_received": "",
//         "human_material_rnd_consent": "",
//         "diagnomics_irb_rnd_consent": "",
//         "process_notification_consent": "",
//         "marketing_info_rec_consent": "",
//         "sharing_3party_consent": "",
//         "sample_tag": "",
//         "sample_suitability": "True",
//         "dna_quality": "True",
//         "data_quality": "True",
//         "ref_material_test": "True",
//         "data_file": "[\"OAT250300005_data_file_2025_03_04_17_44_08_60184_208740500032_R08C02_25-00458_gsa_report.txt.gz\"]",
//         "order_type": "raw_data",
//         "lab_qc_flag": "",
//         "lab_qc_comment": "",
//         "lab_status": "",
//         "report_version": "ED_01",
//         "report_language": "KR",
//         "report_type": "original",
//         "report_file": "",
//         "report_date": "",
//         "storage_provider_id": "C0001",
//         "storage_provider_name": "EDGC_client",
//         "report_email_receiver_id": "P0001",
//         "report_email_receiver_name": "Payal garg",
//         "order_status": "ST204",
//         "order_status_message": "Data analysis completed",
//         "result": "",
//         "report_server_json_response": "",
//         "reg_date": "2025-03-04 17:44:18",
//         "update_date": "2025-03-04 17:48:54",
//         "reg_by": "admin",
//         "operator": "system",
//         "printout_required": "",
//         "show_fetus_gender": "",
//         "flag": "",
//         "review_flag": "",
//         "review_comment": "",
//         "paid_unpaid": "paid",
//         "collection_kit": "",
//         "chart_number": "",
//         "hospital_sample_number": "",
//         "chip_type": "",
//         "gestational_age": "",
//         "measurement_date": "",
//         "measurement_method": "",
//         "inspection_type": "",
//         "inspection_item": "",
//         "clinical_findings": "",
//         "additional_information": "",
//         "order_log": "[[\"2025-03-04 17:44:57\", \"system\"], [\"2025-03-04 17:45:47\", \"system\"], [\"2025-03-04 17:46:29\", \"system\"], [\"2025-03-04 17:48:50\", \"system\"], [\"2025-03-04 17:48:54\", \"system\"]]",
//         "client_id": "C0001",
//         "client_comp_short_name": "EDGC_client",
//         "client_comp_full_name": "EDGC_client",
//         "client_comp_phone": "3898989898989",
//         "client_comp_address": "EDGC_clientEDGC_clientEDGC_clientEDGC_clientEDGC_client",
//         "partner_id": "P0001",
//         "partner_comp_short_name": "EDGC_partner",
//         "partner_comp_full_name": "Payal garg",
//         "partner_comp_phone": "07877766268",
//         "partner_comp_address": "32/33 MAMTA NIWAS ADARSH NAGAR, KHUNADI KOTA\nKHUNADI KOTA",
//         "hospital_id": "H0003",
//         "hospital_short_name": "hospital3",
//         "assign_product_reference": "12",
//         "hospital_full_name": "hospital3",
//         "hospital_phone": "13256645465446",
//         "hospital_address": "hospital3hospital3hospital3hospital3hospital4",
//         "doctor_id": "",
//         "doctor_short_name": "",
//         "doctor_full_name": "",
//         "doctor_phone": "",
//         "doctor_address": "",
//         "upload_option_req": "",
//         "batch_id": "",
//         "is_control_sample": "",
//         "lab_out_sourcing": "",
//         "lab_provider_id": "",
//         "lab_provider_short_name": "",
//         "lab_provider_data_folder": "",
//         "is_Family": "",
//         "family_detail": "",
//         "shipping_company_name": "",
//         "tracking_number": "",
//         "test_result": "",
//         "client_report_registor_response": "",
//         "clinical_confirmatory_test": "",
//         "clinical_confirmatory_test_result": "",
//         "clinical_confirmatory_test_result_file": "",
//         "invoice_completed": "",
//         "lab_provider_api_status": "",
//         "lab_provider_api_response": "",
//         "logo": "https://for-hsflow.s3.amazonaws.com/dev/users/partner_logo/P0001_partner_logo.jpg?response-content-type=image%2Fjpeg&AWSAccessKeyId=AKIAQEO6MCRPTS6WYCHU&Signature=zAy3BXvJpGawkFZHSS7yCWw6NUo%3D&Expires=1743670139&ResponseContentDisposition=inline"
//     },
//     "EDAPPGS006": {
//         "Summary": {
//             "report_version": "ED_01",
//             "report_type": "original"
//         },
//         "ResultInfo": {
//             "genetic_results": {
//                 "A_results": {
//                     "item_code": "A",
//                     "holland_code": "Artistic",
//                     "feature_name": "Novelty Seeking",
//                     "GENE": "DBH",
//                     "RSID": "rs7040170",
//                     "genotype": "AA",
//                     "result": "30",
//                     "comment": "Adventurous but has the average sentimentality."
//                 },
//                 "C_results": {
//                     "item_code": "C",
//                     "holland_code": "Conventional",
//                     "feature_name": "Avoidance of Errors",
//                     "GENE": "DRD2",
//                     "RSID": "rs1800497",
//                     "genotype": "AG",
//                     "result": "50",
//                     "comment": "Relatively good at learning from one’s own mistake."
//                 },
//                 "E_results": {
//                     "item_code": "E",
//                     "holland_code": "Enterprising",
//                     "feature_name": "Warrier vs. Worrier",
//                     "GENE": "COMT",
//                     "RSID": "rs4680",
//                     "genotype": "GG",
//                     "result": "90",
//                     "comment": "Extrovert. Strong-minded and optimistic. Resilient to pain, courageous and loyal to people. Has strong people skills."
//                 },
//                 "I_results": {
//                     "item_code": "I",
//                     "holland_code": "Investigative",
//                     "feature_name": "Recognize Faces",
//                     "GENE": "MET",
//                     "RSID": "rs2237717",
//                     "genotype": "CC",
//                     "result": "90",
//                     "comment": "Has high neurocognition ability and face recognition skill."
//                 },
//                 "R_results": {
//                     "item_code": "R",
//                     "holland_code": "Realistic",
//                     "feature_name": "Performance IQ",
//                     "GENE": "SNAP25",
//                     "RSID": "rs363050",
//                     "genotype": "AG",
//                     "result": "50",
//                     "comment": "Has average performance IQ and spatial ability."
//                 },
//                 "S_results": {
//                     "item_code": "S",
//                     "holland_code": "Social",
//                     "feature_name": "Socio-Emotional Sensitivity",
//                     "GENE": "OXTR",
//                     "RSID": "rs53576",
//                     "genotype": "AA",
//                     "result": "30",
//                     "comment": "Less empathetic. Prefers to spend time alone."
//                 }
//             },
//             "result_type": [
//                 "E",
//                 "I",
//                 "C"
//             ],
//             "result_type_full": [
//                 "Enterprising",
//                 "Investigative",
//                 "Conventional"
//             ],
//             "result_percentage": [
//                 90,
//                 90,
//                 50
//             ],
//             "interest_1_title": "A man of leadership",
//             "interest_1_comment": "You are extroverted, competitive and confident. You are very well spoken, optimistic and have great leadership skills. As a goal oriented person, you are talented in performing operational and sales work. You are at once sociable and responsible.",
//             "personality_1_title": "Leading, Persuading and Performing",
//             "personality_1_comment": "You are someone who has strong desire for winning and seeks to be a leader. Likely to function most effectively in a competitive environment with great confidence and presentation skills, but may need further effort in developing detail-oriented mindset.",
//             "interest_2_title": "A man of thought",
//             "interest_2_comment": "Scholastic, analyzing and exploratory. You like to explore and investigate scientific and social phenomenon. You have an exceptional math and science ability and highly inquisitive personality.",
//             "personality_2_title": "Observing, Analyzing, and Scientific",
//             "personality_2_comment": "You are someone who is very logical, intelligent and academically motivated. However, you may require more effort in making independent decisions and in understanding our community as a whole.",
//             "interest_3_title": "A man of convention",
//             "interest_3_comment": "You are a strategic, responsible person who loves to have things in order. You find yourself organizing and recording often, and you have strong office and mathematical skills.",
//             "personality_3_title": "Planning, Organizing and Analyzing",
//             "personality_3_comment": "You are someone who prefers strategic planning and who are good at managing different variables in the most productive configuration possible. However, you have a low tendency to explore something new and seek for adventures. Constantly push yourself to acquire diverse experiences in life.",
//             "combination_1": [
//                 "E",
//                 "I"
//             ],
//             "combination_1_majors": [
//                 "Biology",
//                 "Business",
//                 "Business Administration",
//                 "Chemistry",
//                 "Commerce and Trade",
//                 "Hotel Management",
//                 "Law",
//                 "Marine Science",
//                 "Mass Communication",
//                 "Math",
//                 "Medicine",
//                 "Patent Law",
//                 "Physics",
//                 "Political Science"
//             ],
//             "combination_1_careers": [
//                 "Actuary",
//                 "Advertising Executive",
//                 "Advertising Sales Rep",
//                 "Agronomist",
//                 "Anesthesiologist",
//                 "Anthropologist",
//                 "Archaeologist",
//                 "Banker/Financial Planner",
//                 "Biochemist",
//                 "Biologist",
//                 "Branch Manager",
//                 "Business Manager",
//                 "Buyer",
//                 "Chamber of Commerce Exec",
//                 "Chemical Engineer",
//                 "Chemist",
//                 "Computer Systerms Analyst",
//                 "Credit Analyst",
//                 "Customer Service Manage",
//                 "Dentist",
//                 "Ecologist",
//                 "Economist",
//                 "Education & Training Manager",
//                 "Electric Engineer",
//                 "Emergency Medical Technician",
//                 "Entrepreneur",
//                 "Foreign Service Officer",
//                 "Funeral Director",
//                 "Geologist",
//                 "Horticulturist",
//                 "Insurance Manager",
//                 "Interpreter",
//                 "Lawyer/Attorney",
//                 "Lobbyist",
//                 "Mathematician",
//                 "Medical Technologist",
//                 "Meteorologist",
//                 "Nurse Practitioner",
//                 "Office Manager",
//                 "Personnel Recruiter",
//                 "Pharmacist",
//                 "Politicain",
//                 "Psychologist",
//                 "Public Relations Rep",
//                 "Research Analyst",
//                 "Retail Store Manager",
//                 "Sales Manager",
//                 "Sales Representative",
//                 "Social Service Director",
//                 "Statisticain",
//                 "Stockbroker",
//                 "Surgeon",
//                 "Tax Accountant",
//                 "Technical Writer",
//                 "Veterinarian"
//             ],
//             "combination_2": [
//                 "I",
//                 "C"
//             ],
//             "combination_2_majors": [
//                 "Accounting",
//                 "Biology",
//                 "Chemistry",
//                 "Finance",
//                 "Information Processing",
//                 "Information Science",
//                 "Law",
//                 "Marine Science",
//                 "Math",
//                 "Medicine",
//                 "Patent Law",
//                 "Physics",
//                 "Public Administration",
//                 "Real Estate",
//                 "Statistics"
//             ],
//             "combination_2_careers": [
//                 "Accountant",
//                 "Actuary",
//                 "Administrative Assistant",
//                 "Agronomist",
//                 "Anesthesiologist",
//                 "Anthropologist",
//                 "Archaeologist",
//                 "Biochemist",
//                 "Biologist",
//                 "Budget Analyst",
//                 "Business Manager",
//                 "Business Programmer",
//                 "Business Teacher",
//                 "Catalog Librarian",
//                 "Chemical Engineer",
//                 "Chemist",
//                 "Claims Adjuster",
//                 "Computer Operator",
//                 "Computer Systerms Analyst",
//                 "Congressional-District Aide",
//                 "Cost Accountant",
//                 "Court Reporter",
//                 "Credit Manager",
//                 "Customs Inspector",
//                 "Dentist",
//                 "Ecologist",
//                 "Economist",
//                 "Editorial Assistant",
//                 "Electric Engineer",
//                 "Elementary School Teacher",
//                 "Financial Analyst",
//                 "Geologist",
//                 "Horticulturist",
//                 "Insurance Manager",
//                 "Insurance Underwriter",
//                 "Internal Auditor",
//                 "Kindergarten Teacher",
//                 "Mathematician",
//                 "Medical Records Technician",
//                 "Medical Technologist",
//                 "Meteorologist",
//                 "Museum Registrar",
//                 "Nurse Practitioner",
//                 "Paralegal",
//                 "Pharmacist",
//                 "Psychologist",
//                 "Research Analyst",
//                 "Safety Inspector",
//                 "Statisticain",
//                 "Surgeon",
//                 "Tax Accountant",
//                 "Tax Consultant",
//                 "Technical Writer",
//                 "Travel Agent",
//                 "Veterinarian"
//             ],
//             "combination_3": [
//                 "C",
//                 "E"
//             ],
//             "combination_3_majors": [
//                 "Accounting",
//                 "Business",
//                 "Business Administration",
//                 "Commerce and Trade",
//                 "Finance",
//                 "Hotel Management",
//                 "Information Processing",
//                 "Information Science",
//                 "Law",
//                 "Mass Communication",
//                 "Math",
//                 "Political Science",
//                 "Public Administration",
//                 "Real Estate",
//                 "Statistics"
//             ],
//             "combination_3_careers": [
//                 "Accountant",
//                 "Administrative Assistant",
//                 "Advertising Executive",
//                 "Advertising Sales Rep",
//                 "Banker/Financial Planner",
//                 "Branch Manager",
//                 "Budget Analyst",
//                 "Business Manager",
//                 "Business Programmer",
//                 "Business Teacher",
//                 "Buyer",
//                 "Catalog Librarian",
//                 "Chamber of Commerce Exec",
//                 "Claims Adjuster",
//                 "Computer Operator",
//                 "Congressional-District Aide",
//                 "Cost Accountant",
//                 "Court Reporter",
//                 "Credit Analyst",
//                 "Credit Manager",
//                 "Customer Service Manage",
//                 "Customs Inspector",
//                 "Editorial Assistant",
//                 "Education & Training Manager",
//                 "Elementary School Teacher",
//                 "Emergency Medical Technician",
//                 "Entrepreneur",
//                 "Financial Analyst",
//                 "Foreign Service Officer",
//                 "Funeral Director",
//                 "Insurance Manager",
//                 "Insurance Underwriter",
//                 "Internal Auditor",
//                 "Interpreter",
//                 "Kindergarten Teacher",
//                 "Lawyer/Attorney",
//                 "Lobbyist",
//                 "Medical Records Technician",
//                 "Museum Registrar",
//                 "Office Manager",
//                 "Paralegal",
//                 "Personnel Recruiter",
//                 "Politicain",
//                 "Public Relations Rep",
//                 "Retail Store Manager",
//                 "Safety Inspector",
//                 "Sales Manager",
//                 "Sales Representative",
//                 "Social Service Director",
//                 "Stockbroker",
//                 "Tax Accountant",
//                 "Tax Consultant",
//                 "Travel Agent"
//             ]
//         }
//     }
// }';

// $decoded_array = json_decode($input_json, true); // true for associative array

// loopThroughNestedArray($decoded_array);
// // loopWithDepth($decoded_array);



// abstract class Vehicle {
//     abstract public function startEngine();

//     public function horn() {
//         echo "Beep Beep\n";
//     }
// }


// class Car extends Vehicle {
//     public function startEngine() {
//         echo "Vroom <br />";
//     }
// }


// $audiCar = new Car();
// $audiCar->startEngine();
// $audiCar->horn();




// Step 1: Simulate your $request1 input
// $djson = '{
//     "OrderInfo": {
//         "id": "197",
//         "order_id": "DGM250800005",
//         "assign_type": "product",
//         "product_code": "EDAPPGS025",
//         "product_category": "GSA",
//         "product_sub_category": "GSA",
//         "product_name_en": "Gene2me (V3)",
//         "product_name_kr": "Gene2me (V3)",
//         "patient_name": "Test",
//         "patient_dob": "1986-09-19",
//         "report_version": "ED_01",
//         "report_language": "EN",
//         "report_type": "original",
//         "inspection_item": "{\"HealthCare\": [\"Obesity | 비만\", \"Body fat percentage | 체지방율\", \"Body mass index | 체질량지수\", \"Abdominal obesity (hip-to-waist ratio) | 복부비만(엉덩이허리비율) / 복부비만(허리/엉덩이비율)\", \"Weight loss effects of exercise | 운동에 의한 체중감량효과\", \"Possibility of regaining weight after losing weight (possibility of yo-yoing) | 체중감량후 체중회복가능성(요요가능성)\", \"Blood sugar | 혈당\", \"Blood Pressure | 혈압\", \"Triglyceride concentration | 중성지방농도\", \"Cholesterol | 콜레스테롤\", \"Uric acid level | 요산치\", \"Susceptiblity to degenerative arthritis | 퇴행성 관절염증 감수성\", \"Bone mass (bone density) | 골질량(골밀도)\", \"Motion sickness | 멀미\"], \"Dietary\": [\"Appetite | 식욕\", \"Satiety | 포만감\", \"Sweet taste sensitivity | 단맛 민감도\", \"Bitter taste sensitivity | 쓴맛 민감도\", \"Salty taste sensitivity | 짠맛 민감도\"], \"Nutrition\": [\"Vitamin C concentration | 비타민C 농도\", \"Vitamin D concentration | 비타민D 농도\", \"Magnesium concentration | 마그네슘 농도\", \"Zinc concentration | 아연 농도\", \"Iron storage and concentration | 철 저장 및 농도\", \"Potassium concentration | 칼륨 농도\", \"Calcium concentration | 칼슘 농도\", \"Arginine concentration | 아르기닌 농도\", \"Fatty acid concentration | 지방산 농도\", \"Vitamin A concentration | 비타민 A 농도\", \"Vitamin B6 concentration | 비타민 B6 농도\", \"Vitamin B12 concentration | 비타민 B12 농도\", \"Vitamin E concentration | 비타민 E 농도\", \"Vitamin K concentration | 비타민 K 농도\", \"Tyrosine concentration | 타이로신 농도\", \"Betaine concentration | 베타인 농도\", \"Selenium concentration | 셀레늄 농도\", \"Lutein & Zeaxanthin Concentration | 루테인&지아잔틴 농도\", \"Coenzyme Q10 concentration | 코엔자임Q10 농도\"], \"Fitness\": [\"Fitness for strength training | 근력 운동 적합성\", \"Aerobic exercise | 유산소 운동 적합성\", \"Endurance exercise fitness | 지구력운동 적합성\", \"Muscle development ability | 근육발달능력\", \"Sprint ability | 단거리 질주 능력\", \"Ankle Injury Risk | 발목 부상 위험도\", \"Grip strength | 악력\", \"Post-exercise recovery ability | 운동후 회복능력\"], \"Wellness\": [\"Alcohol metabolism | 알코올 대사\", \"Alcohol dependence | 알코올 의존성\", \"Alcohol flush | 알코올 홍조\", \"Wine preference | 와인선호도\", \"Nicotine metabolism | 니코틴 대사\", \"Nicotine dependence | 니코틴 의존성\", \"Caffeine metabolism | 카페인 대사\", \"Caffeine dependence | 카페인 의존성\", \"Insomnia | 불면증\", \"Sleep habits/Hours | 수면습관/시간\", \"Morning and Evening person | 아침형, 저녁형 인간\", \"Pain sensitivity | 통증 민감성\"], \"Beauty\": [\"Melasma/Freckle | 기미/주근깨\", \"Pigmentation | 색소침착\", \"Acne | 여드름 발생\", \"Skin inflammation | 피부염증\", \"Skin aging | 피부노화\", \"Tanning reaction after sun exposure | 태양 노출 후 태닝 반응\", \"Stretch marks/Keratin | 튼살/각질\", \"Male pattern baldness | 남성형 탈모\", \"Thickness of hair | 모발 굵기\", \"Alopecia areata | 원형 탈모\", \"Premature Gray Hair | 새치\"], \"Ancestry\": [\"Ancestry | 조상찾기\"]}",
//     },
//     "EDAPPGS025": {
//         "Summary": {
//             "report_version": "ED_01",
//             "report_type": "original",
//             "inspection_item": {
//                 "HealthCare": [
//                     "OB_TY",
//                     "HTH_CJ",
//                     "G2ME_BM",
//                     "HTH_BB",
//                     "CJG",
//                     "YOYO",
//                     "G2ME_BS",
//                     "G2ME_BP",
//                     "G2ME_TG",
//                     "G2ME_CL",
//                     "HTH_YS",
//                     "HTH_TH",
//                     "GJR",
//                     "HTH_MM"
//                 ],
//                 "Dietary": [
//                     "FOD_SK",
//                     "FOD_PM",
//                     "FOD_ST",
//                     "FOD_SM",
//                     "FOD_JM"
//                 ],
//                 "Nutrition": [
//                     "G2ME_VC",
//                     "NUT_VD",
//                     "NUT_MG",
//                     "NUT_AY",
//                     "NUT_FE",
//                     "NUT_KL",
//                     "NUT_CA",
//                     "NUT_ARG",
//                     "NUT_FA",
//                     "VITA",
//                     "VITB6",
//                     "VITB12",
//                     "VITE",
//                     "VITK",
//                     "TRS",
//                     "BTC",
//                     "SLN",
//                     "LT",
//                     "NUT_CZ"
//                 ],
//                 "Fitness": [
//                     "MU_STR",
//                     "EXT_DS",
//                     "EXT_JG",
//                     "EXT_GY",
//                     "EXT_DG",
//                     "EXT_BM",
//                     "EXT_AR",
//                     "EXT_HB"
//                 ],
//                 "Wellness": [
//                     "IND_AD",
//                     "IND_AY",
//                     "IND_AH",
//                     "IND_WINE",
//                     "IND_ND",
//                     "IND_NY",
//                     "G2ME_CM",
//                     "IND_CY",
//                     "IND_BJ",
//                     "IND_SS",
//                     "IND_MN",
//                     "IND_TJ"
//                 ],
//                 "Beauty": [
//                     "SK_SP2",
//                     "G2ME_SP",
//                     "SK_YD",
//                     "SK_YD2",
//                     "SK_SA",
//                     "SK_TY",
//                     "SK_TS",
//                     "G2ME_MB",
//                     "G2ME_HT",
//                     "G2ME_AA",
//                     "SK_SC"
//                 ],
//                 "Ancestry": [
//                     "Ancestry"
//                 ]
//             }
//         },
//     }
// }';

// $request = json_decode($json);

// echo "<br />";
// // Step 2: Before adding order_id
// // echo "Before:\n";
// echo "<br />";
// // print_r($request);
// echo "<br />";
// // echo "<br />";
// // echo "<br />";
// // echo "<br />";

// // Step 3: Copy nested value to root level
// // $request->order_id = $request->OrderInfo->order_id;

// // Step 4: After adding order_id
// // echo "\nAfter:\n";
// echo "<br />";
// // print_r($request);
// echo "<br />";
// echo "<br />";
// echo "<br />";
// echo "<br />";
// echo "<br />";



//  ============================================================================



// // Step 1: Your full JSON as string (make sure it is wrapped correctly)
// $json = <<<JSON
// {
//     "OrderInfo": {
//         "id": "197",
//         "order_id": "DGM250800005",
//         "assign_type": "product",
//         "product_code": "EDAPPGS025",
//         "product_category": "GSA",
//         "product_sub_category": "GSA",
//         "product_name_en": "Gene2me (V3)",
//         "product_name_kr": "Gene2me (V3)",
//         "package_code": "",
//         "package_name_en": "",
//         "package_name_kr": "",
//         "report_provider": "reportlab",
//         "patient_name": "Test",
//         "patient_dob": "1986-09-19",
//         "patient_gender": "M",
//         "patient_address": "",
//         "patient_height": "",
//         "patient_weight": "",
//         "patient_email": "",
//         "patient_contact": "",
//         "patient_nationality": "",
//         "guardian_name": "",
//         "guardian_relation": "",
//         "guardian_contact": "",
//         "order_category": "domestic",
//         "sample_collection_date": "2025-07-09",
//         "sample_collection_time": "",
//         "sample_receipt_date": "2025-08-13",
//         "sample_receipt_by": "system",
//         "sample_specimen_type": "BLOOD",
//         "sample_barcode": [
//             {
//                 "sample_barcode": "11111111",
//                 "no_of_tubes": "1"
//             }
//         ],
//         "barcode_receive_status": "True",
//         "sample_barcode_receive": "{\"11111111\": 1}",
//         "sample_resampling": "",
//         "previous_order_ids": {},
//         "sample_resampling_date": "",
//         "sample_resampling_time": "",
//         "sample_report_id": "",
//         "provider_order_id": "",
//         "available_for_research_purpose": "",
//         "name_anonymised": "",
//         "confirmatory_test": "",
//         "vip_test": "",
//         "trf_consent": "True",
//         "trf_form": "",
//         "trf_form_received": "",
//         "gen_test_consent": "",
//         "guardian_consent_form": "",
//         "guardian_consent_form_received": "",
//         "human_material_rnd_consent": "",
//         "diagnomics_irb_rnd_consent": "",
//         "process_notification_consent": "",
//         "marketing_info_rec_consent": "",
//         "sharing_3party_consent": "",
//         "sample_tag": "",
//         "sample_suitability": "True",
//         "dna_quality": "True",
//         "data_quality": "True",
//         "ref_material_test": "True",
//         "data_file": "[\"DGM250800005_data_file_2025_08_13_21_28_29_58200_Test.vcf.gz\"]",
//         "order_type": "raw_data",
//         "lab_qc_flag": "",
//         "lab_qc_comment": "",
//         "lab_status": "",
//         "report_version": "ED_01",
//         "report_language": "EN",
//         "report_type": "original",
//         "report_file": "",
//         "report_date": "",
//         "report_by": "",
//         "is_report_deliver": "",
//         "report_deliver_date": "",
//         "report_deliver_by": "",
//         "reports_history": "[{\"report_file_name\": \"DGM250800005_1.pdf\", \"report_date\": \"2025-08-13 00:00:00\", \"report_by\": \"reportlab\", \"update_date\": \"2025-08-18 18:53:12\", \"update_by\": \"admin\", \"update_reason\": null}, {\"report_file_name\": \"DGM250800005_2.pdf\", \"report_date\": \"2025-08-18 00:00:00\", \"report_by\": \"reportlab\", \"update_date\": \"2025-08-18 19:40:55\", \"update_by\": \"admin\", \"update_reason\": null}, {\"report_file_name\": \"DGM250800005_3.pdf\", \"report_date\": \"2025-08-18 00:00:00\", \"report_by\": \"reportlab\", \"update_date\": \"2025-08-18 20:10:54\", \"update_by\": \"admin\", \"update_reason\": null}]",
//         "storage_provider_id": "C0002",
//         "storage_provider_name": "edgc_client",
//         "report_email_receiver_id": "C0002",
//         "report_email_receiver_name": "edgc_client",
//         "order_status": "ST204",
//         "order_status_message": "Data analysis completed",
//         "result": "successfully",
//         "report_server_json_response": "",
//         "reg_date": "2025-08-13 21:28:34",
//         "update_date": "2025-08-18 20:13:25",
//         "reg_by": "admin",
//         "operator": "system",
//         "printout_required": "",
//         "show_fetus_gender": "",
//         "flag": "",
//         "review_flag": "",
//         "review_comment": "",
//         "paid_unpaid": "paid",
//         "collection_kit": "",
//         "chart_number": "NA",
//         "hospital_sample_number": "",
//         "chip_type": "",
//         "gestational_age": "",
//         "measurement_date": "",
//         "measurement_method": "",
//         "inspection_type": "V3",
//         "inspection_item": "{\"HealthCare\": [\"Obesity | 비만\", \"Body fat percentage | 체지방율\", \"Body mass index | 체질량지수\", \"Abdominal obesity (hip-to-waist ratio) | 복부비만(엉덩이허리비율) / 복부비만(허리/엉덩이비율)\", \"Weight loss effects of exercise | 운동에 의한 체중감량효과\", \"Possibility of regaining weight after losing weight (possibility of yo-yoing) | 체중감량후 체중회복가능성(요요가능성)\", \"Blood sugar | 혈당\", \"Blood Pressure | 혈압\", \"Triglyceride concentration | 중성지방농도\", \"Cholesterol | 콜레스테롤\", \"Uric acid level | 요산치\", \"Susceptiblity to degenerative arthritis | 퇴행성 관절염증 감수성\", \"Bone mass (bone density) | 골질량(골밀도)\", \"Motion sickness | 멀미\"], \"Dietary\": [\"Appetite | 식욕\", \"Satiety | 포만감\", \"Sweet taste sensitivity | 단맛 민감도\", \"Bitter taste sensitivity | 쓴맛 민감도\", \"Salty taste sensitivity | 짠맛 민감도\"], \"Nutrition\": [\"Vitamin C concentration | 비타민C 농도\", \"Vitamin D concentration | 비타민D 농도\", \"Magnesium concentration | 마그네슘 농도\", \"Zinc concentration | 아연 농도\", \"Iron storage and concentration | 철 저장 및 농도\", \"Potassium concentration | 칼륨 농도\", \"Calcium concentration | 칼슘 농도\", \"Arginine concentration | 아르기닌 농도\", \"Fatty acid concentration | 지방산 농도\", \"Vitamin A concentration | 비타민 A 농도\", \"Vitamin B6 concentration | 비타민 B6 농도\", \"Vitamin B12 concentration | 비타민 B12 농도\", \"Vitamin E concentration | 비타민 E 농도\", \"Vitamin K concentration | 비타민 K 농도\", \"Tyrosine concentration | 타이로신 농도\", \"Betaine concentration | 베타인 농도\", \"Selenium concentration | 셀레늄 농도\", \"Lutein & Zeaxanthin Concentration | 루테인&지아잔틴 농도\", \"Coenzyme Q10 concentration | 코엔자임Q10 농도\"], \"Fitness\": [\"Fitness for strength training | 근력 운동 적합성\", \"Aerobic exercise | 유산소 운동 적합성\", \"Endurance exercise fitness | 지구력운동 적합성\", \"Muscle development ability | 근육발달능력\", \"Sprint ability | 단거리 질주 능력\", \"Ankle Injury Risk | 발목 부상 위험도\", \"Grip strength | 악력\", \"Post-exercise recovery ability | 운동후 회복능력\"], \"Wellness\": [\"Alcohol metabolism | 알코올 대사\", \"Alcohol dependence | 알코올 의존성\", \"Alcohol flush | 알코올 홍조\", \"Wine preference | 와인선호도\", \"Nicotine metabolism | 니코틴 대사\", \"Nicotine dependence | 니코틴 의존성\", \"Caffeine metabolism | 카페인 대사\", \"Caffeine dependence | 카페인 의존성\", \"Insomnia | 불면증\", \"Sleep habits/Hours | 수면습관/시간\", \"Morning and Evening person | 아침형, 저녁형 인간\", \"Pain sensitivity | 통증 민감성\"], \"Beauty\": [\"Melasma/Freckle | 기미/주근깨\", \"Pigmentation | 색소침착\", \"Acne | 여드름 발생\", \"Skin inflammation | 피부염증\", \"Skin aging | 피부노화\", \"Tanning reaction after sun exposure | 태양 노출 후 태닝 반응\", \"Stretch marks/Keratin | 튼살/각질\", \"Male pattern baldness | 남성형 탈모\", \"Thickness of hair | 모발 굵기\", \"Alopecia areata | 원형 탈모\", \"Premature Gray Hair | 새치\"], \"Ancestry\": [\"Ancestry | 조상찾기\"]}",
//         "clinical_findings": "",
//         "additional_information": "",
//         "order_log": "[[\"2025-08-13 21:29:22\", \"system\"], [\"2025-08-13 21:30:26\", \"system\"], [\"2025-08-13 21:30:56\", \"system\"], [\"2025-08-13 21:33:12\", \"system\"], [\"2025-08-13 21:34:25\", \"system\"], [\"2025-08-13 21:34:28\", \"system\"], [\"2025-08-13 21:34:28\", \"system\"], [\"2025-08-18 18:55:08\", \"system\"], [\"2025-08-18 18:55:36\", \"system\"], [\"2025-08-18 18:57:12\", \"system\"], [\"2025-08-18 18:58:25\", \"system\"], [\"2025-08-18 18:59:16\", \"system\"], [\"2025-08-18 18:59:17\", \"system\"], [\"2025-08-18 19:41:35\", \"system\"], [\"2025-08-18 19:42:24\", \"system\"], [\"2025-08-18 19:45:12\", \"system\"], [\"2025-08-18 19:46:25\", \"system\"], [\"2025-08-18 19:48:02\", \"system\"], [\"2025-08-18 19:48:03\", \"system\"], [\"2025-08-18 20:11:52\", \"system\"], [\"2025-08-18 20:11:54\", \"system\"], [\"2025-08-18 20:12:12\", \"system\"], [\"2025-08-18 20:13:25\", \"system\"]]",
//         "client_id": "C0002",
//         "client_comp_short_name": "edgc_client",
//         "client_comp_full_name": "edgc_client",
//         "client_comp_phone": "1234567890",
//         "client_comp_address": "Incheon, Korea",
//         "partner_id": "",
//         "partner_comp_short_name": "",
//         "partner_comp_full_name": "",
//         "partner_comp_phone": "",
//         "partner_comp_address": "",
//         "hospital_id": "H0001",
//         "hospital_short_name": "edgc_client_hospital1",
//         "assign_product_reference": "1",
//         "hospital_full_name": "edgc_client_hospital1",
//         "hospital_phone": "1234567890",
//         "hospital_address": "edgc_client_hospital1edgc_client_hospital1",
//         "doctor_id": "",
//         "doctor_short_name": "",
//         "doctor_full_name": "",
//         "doctor_phone": "",
//         "doctor_address": "",
//         "upload_option_req": "",
//         "batch_id": "",
//         "is_control_sample": "",
//         "lab_out_sourcing": "",
//         "lab_provider_id": "",
//         "lab_provider_short_name": "",
//         "lab_provider_data_folder": "",
//         "is_Family": "",
//         "family_detail": "",
//         "shipping_company_name": "",
//         "tracking_number": "",
//         "test_result": "",
//         "client_report_registor_response": "",
//         "clinical_confirmatory_test": "",
//         "clinical_confirmatory_test_result": "",
//         "clinical_confirmatory_test_result_file": "",
//         "invoice_completed": "",
//         "lab_provider_api_status": "",
//         "lab_provider_api_response": "",
//         "telomere_length": "",
//         "epiclock_age": "",
//         "epiclock_actual_age": "",
//         "cancel_reason": "",
//         "cancel_date": "",
//         "cancel_by": "",
//         "sequencing_provider_id": "",
//         "sequencing_data_folder": "",
//         "logo": "https://for-hsflow.s3.amazonaws.com/staging/users/client_logo/C0002_client_logo.png?response-content-type=image%2Fpng&AWSAccessKeyId=AKIAQEO6MCRPZGSWBKB7&Signature=kPPiWVLBC6e7B23mfZFy2EPmI%2F0%3D&Expires=1758107688&ResponseContentDisposition=inline"
//     },
//     "EDAPPGS025": {
//         "Summary": {
//             "report_version": "ED_01",
//             "report_type": "original",
//             "inspection_item": {
//                 "HealthCare": [
//                     "OB_TY",
//                     "HTH_CJ",
//                     "G2ME_BM",
//                     "HTH_BB",
//                     "CJG",
//                     "YOYO",
//                     "G2ME_BS",
//                     "G2ME_BP",
//                     "G2ME_TG",
//                     "G2ME_CL",
//                     "HTH_YS",
//                     "HTH_TH",
//                     "GJR",
//                     "HTH_MM"
//                 ],
//                 "Dietary": [
//                     "FOD_SK",
//                     "FOD_PM",
//                     "FOD_ST",
//                     "FOD_SM",
//                     "FOD_JM"
//                 ],
//                 "Nutrition": [
//                     "G2ME_VC",
//                     "NUT_VD",
//                     "NUT_MG",
//                     "NUT_AY",
//                     "NUT_FE",
//                     "NUT_KL",
//                     "NUT_CA",
//                     "NUT_ARG",
//                     "NUT_FA",
//                     "VITA",
//                     "VITB6",
//                     "VITB12",
//                     "VITE",
//                     "VITK",
//                     "TRS",
//                     "BTC",
//                     "SLN",
//                     "LT",
//                     "NUT_CZ"
//                 ],
//                 "Fitness": [
//                     "MU_STR",
//                     "EXT_DS",
//                     "EXT_JG",
//                     "EXT_GY",
//                     "EXT_DG",
//                     "EXT_BM",
//                     "EXT_AR",
//                     "EXT_HB"
//                 ],
//                 "Wellness": [
//                     "IND_AD",
//                     "IND_AY",
//                     "IND_AH",
//                     "IND_WINE",
//                     "IND_ND",
//                     "IND_NY",
//                     "G2ME_CM",
//                     "IND_CY",
//                     "IND_BJ",
//                     "IND_SS",
//                     "IND_MN",
//                     "IND_TJ"
//                 ],
//                 "Beauty": [
//                     "SK_SP2",
//                     "G2ME_SP",
//                     "SK_YD",
//                     "SK_YD2",
//                     "SK_SA",
//                     "SK_TY",
//                     "SK_TS",
//                     "G2ME_MB",
//                     "G2ME_HT",
//                     "G2ME_AA",
//                     "SK_SC"
//                 ],
//                 "Ancestry": [
//                     "Ancestry"
//                 ]
//             }
//         },
//         "ResultInfo": {
//             "Nutrition": {
//                 "BTC": {
//                     "BTC": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-50%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>50% Lower risk of betaine deficiency </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "CBS",
//                                 "rsid": "rs2851391",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CPS1",
//                                 "rsid": "rs715",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "SLC6A12",
//                                 "rsid": "rs499368.1",
//                                 "allele": "A/T",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "TA",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "G2ME_VC": {
//                     "G2ME_VC": {
//                         "Result": "Moderate high",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>Moderately high risk of vitamin C deficiency</span> than avergae population.",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "SLC23A1",
//                             "rsid": "rs11950646",
//                             "allele": "G/A",
//                             "risk": "G",
//                             "ra_type": "R",
//                             "genotype": "GA",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "LT": {
//                     "LT": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-36%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>36% Lower lutein and zeaxanthin deficiency </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "BCMO1 (1)",
//                                 "rsid": "rs6564851",
//                                 "allele": "G/T",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "BCMO1 (2)",
//                                 "rsid": "rs8044334",
//                                 "allele": "G/T",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "BCMO1 (3)",
//                                 "rsid": "rs6420424",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "SCARB1",
//                                 "rsid": "rs11057841",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "CT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "NUT_ARG": {
//                     "NUT_ARG_01": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-49%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>49% Lower L-arginine level</span> than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "F12 (1)",
//                                 "rsid": "rs2545801",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "F12 (2)",
//                                 "rsid": "rs2731672",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "KLKB1",
//                                 "rsid": "rs1912826",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MED23",
//                                 "rsid": "rs2248551",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     },
//                     "NUT_ARG_02": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "-6%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>6% Lower SDMA/ADMA </span>concentrations than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "AGXT2",
//                                 "rsid": "rs37369",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "CT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "DDAH1",
//                                 "rsid": "rs1884139",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "DDAH1 (1)",
//                                 "rsid": "rs2268667",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "DDAH1 (2)",
//                                 "rsid": "rs233112",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "NUT_AY": {
//                     "NUT_AY": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "+17%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>17% Higher risk of zinc deficiency</span> than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "CA1",
//                                 "rsid": "rs1532423",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "PPCDC",
//                                 "rsid": "rs2120019",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "NUT_CA": {
//                     "NUT_CA": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "-2%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>2% Lower risk of Calcium deficiency</span> than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "CARS",
//                                 "rsid": "rs7481584",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CASR",
//                                 "rsid": "rs1801725",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CYP24A1",
//                                 "rsid": "rs1570669",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "DGKD",
//                                 "rsid": "rs1550532",
//                                 "allele": "C/G",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GCKR",
//                                 "rsid": "rs780094",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "NUT_CZ": {
//                     "NUT_CZ": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-24%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>24% Lower coenzyme Q10 deficiency </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "NRXN1",
//                                 "rsid": "rs933585",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "PIEZO2",
//                                 "rsid": "rs74939081",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "CT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "NUT_FA": {
//                     "NUT_FA_01": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "-13%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>13% Lower risk of omega-3 deficiency</span> than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "ELOVL2",
//                                 "rsid": "rs2236212",
//                                 "allele": "C/G",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FADS1",
//                                 "rsid": "rs174547",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FADS2",
//                                 "rsid": "rs2845573",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GCKR",
//                                 "rsid": "rs780094",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     },
//                     "NUT_FA_02": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-36%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>36% Lower risk of omega-6 deficiency</span> than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "FADS1",
//                                 "rsid": "rs174537",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FADS2",
//                                 "rsid": "rs2845573",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "NTAN1;PDXDC1",
//                                 "rsid": "rs1136001",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "GT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "NUT_FE": {
//                     "NUT_FE": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-37%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>37% Lower risk of iron deficiency</span> than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "TF",
//                                 "rsid": "rs8177240",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "TFR2",
//                                 "rsid": "rs7385804",
//                                 "allele": "A/C",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "CA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "TMPRSS6",
//                                 "rsid": "rs855791",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "NUT_KL": {
//                     "NUT_KL": {
//                         "Result": "Typical",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you are at <span style='font-family:notosanscjkjpmedium'>Typical risk of potassium deficiency.</span>",
//                         "img_text": "Typical:Moderate low:Low",
//                         "Info": {
//                             "gene": "PPARG",
//                             "rsid": "rs12629751",
//                             "allele": "T/C",
//                             "risk": "T",
//                             "ra_type": "A",
//                             "genotype": "CC",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "NUT_MG": {
//                     "NUT_MG": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-44%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>44% Lower risk of magnesium deficiency </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "ATP2B1",
//                                 "rsid": "rs7965584",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "DCDC5",
//                                 "rsid": "rs3925584",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MDS1",
//                                 "rsid": "rs448378",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MUC1",
//                                 "rsid": "rs4072037",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "SHROOM3",
//                                 "rsid": "rs13146355",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "NUT_VD": {
//                     "NUT_VD": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+36%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>36% Higher risk of vitamin D deficiency</span> than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "CYP2R1",
//                                 "rsid": "rs10741657",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GC",
//                                 "rsid": "rs2282679",
//                                 "allele": "G/T",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "TG",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "SLN": {
//                     "SLN": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "-11%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>11% Lower selenium deficiency </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "BHMT",
//                                 "rsid": "rs506500",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "DMGDH",
//                                 "rsid": "rs921943",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "TRS": {
//                     "TRS": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "+14%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>14% Higher tyrosine deficiency </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "AP1G1",
//                                 "rsid": "rs904763",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "GT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "LOC107986521",
//                                 "rsid": "rs411604",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "PHLPP2",
//                                 "rsid": "rs8203",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "SLC16A10",
//                                 "rsid": "rs6900341",
//                                 "allele": "G/T",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "TG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "TM6SF2",
//                                 "rsid": "rs58542926",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "VITA": {
//                     "VITA": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+21%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>21% Higher vitamin A deficiency </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "BCMO1 (1)",
//                                 "rsid": "rs6420424",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "BCMO1 (2)",
//                                 "rsid": "rs6564851",
//                                 "allele": "G/T",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "BCMO1 (3)",
//                                 "rsid": "rs8044334",
//                                 "allele": "G/T",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "RBP4",
//                                 "rsid": "rs10882272",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "VITB12": {
//                     "VITB12": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "+2%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>2% Higher vitamin B12 deficiency </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "MUT",
//                                 "rsid": "rs9473555",
//                                 "allele": "C/G",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "GC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "TCN1",
//                                 "rsid": "rs526934",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "VITB6": {
//                     "VITB6": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-25%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>25% Lower vitamin B6 deficiency </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "ALPL (1)",
//                                 "rsid": "rs1256341",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "ALPL (2)",
//                                 "rsid": "rs1780324",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "ALPL (3)",
//                                 "rsid": "rs4654748",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "VITE": {
//                     "VITE": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-45%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>45% Lower vitamin E deficiency </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "BUD13/ZNF259/APOA5",
//                                 "rsid": "rs964184",
//                                 "allele": "C/G",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "GC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CYP4F2",
//                                 "rsid": "rs2108622",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "SCARB1",
//                                 "rsid": "rs11057830",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "VITK": {
//                     "VITK": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-38%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>38% Lower vitamin K deficiency </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "CYP4F2",
//                                 "rsid": "rs2108622",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "VKORC1",
//                                 "rsid": "rs8050894",
//                                 "allele": "C/G",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "ZNF259",
//                                 "rsid": "rs964184",
//                                 "allele": "C/G",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "GC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 }
//             },
//             "HealthCare": {
//                 "CJG": {
//                     "CJG": {
//                         "Result": "High",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>High weight loss effect through exercise.</span>",
//                         "img_text": "Typical:High:High",
//                         "Info": {
//                             "gene": "FTO",
//                             "rsid": "rs8050136",
//                             "allele": "C/A",
//                             "risk": "C",
//                             "ra_type": "A",
//                             "genotype": "CC",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "G2ME_BM": {
//                     "G2ME_BM": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-32%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>32% Lower body mass index </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "BDNF",
//                                 "rsid": "rs6265",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FTO",
//                                 "rsid": "rs9939609",
//                                 "allele": "A/T",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FAIM2",
//                                 "rsid": "rs7138803",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GNPDA2",
//                                 "rsid": "rs10938397",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MC4R",
//                                 "rsid": "rs17782313",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "TMEM18",
//                                 "rsid": "rs6548238",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "G2ME_BP": {
//                     "G2ME_BP": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "-19%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>19% Lower risk of elevated blood pressure </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "ATP2B1",
//                                 "rsid": "rs17249754",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CSK",
//                                 "rsid": "rs1378942",
//                                 "allele": "C/A",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CYP17A1",
//                                 "rsid": "rs1004467",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FGF5",
//                                 "rsid": "rs1458038",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "CT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GUCY1A3",
//                                 "rsid": "rs13139571",
//                                 "allele": "C/A",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "NT5C2",
//                                 "rsid": "rs11191548",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "G2ME_BS": {
//                     "G2ME_BS": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-47%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>47% Lower risk of blood sugar rise</span> than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "CDKN2A/B",
//                                 "rsid": "rs10811661",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "DGKB-TMEM195",
//                                 "rsid": "rs2191349",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "G6PC2",
//                                 "rsid": "rs16856187",
//                                 "allele": "C/A",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "AC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GCK",
//                                 "rsid": "rs1799884",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GCKR",
//                                 "rsid": "rs780094",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GLIS3",
//                                 "rsid": "rs7034200",
//                                 "allele": "A/C",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "CA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MTNR1B",
//                                 "rsid": "rs10830963",
//                                 "allele": "G/C",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "SLC30A8",
//                                 "rsid": "rs13266634",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "G2ME_CL": {
//                     "G2ME_CL_01": {
//                         "Result": "Typical",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>Typical total cholesterol levels.",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "ABO",
//                             "rsid": "rs507666",
//                             "allele": "A/G",
//                             "risk": "A",
//                             "ra_type": "R",
//                             "genotype": "GG",
//                             "color": "BASIC"
//                         }
//                     },
//                     "G2ME_CL_02": {
//                         "Result": "Typical",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>Typical high-density cholesterol (HDL) levels.",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "CETP",
//                             "rsid": "rs3764261",
//                             "allele": "A/C",
//                             "risk": "A",
//                             "ra_type": "A",
//                             "genotype": "CC",
//                             "color": "BASIC"
//                         }
//                     },
//                     "G2ME_CL_03": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-39%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>39% Lower low-density cholesterol (LDL).</span>",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "ABO",
//                                 "rsid": "rs507666",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CELSR2",
//                                 "rsid": "rs646776",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "HMGCR",
//                                 "rsid": "rs12654264",
//                                 "allele": "T/A",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "G2ME_TG": {
//                     "G2ME_TG": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+38%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>38% Higher Triglyceride concentration </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "BAZ1B",
//                                 "rsid": "rs2240466",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "DOCK7",
//                                 "rsid": "rs2131925",
//                                 "allele": "G/T",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "GT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GCKR",
//                                 "rsid": "rs780094",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "LOC105375745",
//                                 "rsid": "rs6982636",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MLXIPL",
//                                 "rsid": "rs3812316",
//                                 "allele": "C/G",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "TBL2",
//                                 "rsid": "rs17145738",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "TRIB1",
//                                 "rsid": "rs2954029",
//                                 "allele": "T/A",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "AT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "GJR": {
//                     "GJR": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+45%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>45% Higher risk for loss of bone desnity </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "CPED1",
//                                 "rsid": "rs798943",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CTNNB1",
//                                 "rsid": "rs430727",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FAM3C",
//                                 "rsid": "rs7776725",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FUBP3",
//                                 "rsid": "rs7466269",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GALNT3",
//                                 "rsid": "rs6726821",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "LRP5",
//                                 "rsid": "rs3736228",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MBL2/DKK1",
//                                 "rsid": "rs1373004",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "RPS6KA5",
//                                 "rsid": "rs1286083",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "SOX9",
//                                 "rsid": "rs7217932",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "TNFSF11",
//                                 "rsid": "rs9525638",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "WNT4",
//                                 "rsid": "rs3765350",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "HTH_BB": {
//                     "HTH_BB": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-33%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>33% Lower risk of abdominal obesity </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "C12orf51",
//                                 "rsid": "rs2074356",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "EFEMP1",
//                                 "rsid": "rs3791679",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "LY86",
//                                 "rsid": "rs1294410",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MC4R (1)",
//                                 "rsid": "rs12970134",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MC4R (2)",
//                                 "rsid": "rs4450508",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "RREB1",
//                                 "rsid": "rs6931262",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "VEGFA",
//                                 "rsid": "rs998584",
//                                 "allele": "A/C",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "CA",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "HTH_CJ": {
//                     "HTH_CJ": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-21%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>21% Lower body fat percentage </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "FTO (1)",
//                                 "rsid": "rs55872725",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FTO (2)",
//                                 "rsid": "rs1558902",
//                                 "allele": "A/T",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "HTH_MM": {
//                     "HTH_MM": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+32%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>32% Higher probability to develop motion sickness</span> than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "ACO1",
//                                 "rsid": "rs10970305",
//                                 "allele": "C/A",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CPNE4",
//                                 "rsid": "rs9834560",
//                                 "allele": "C/A",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GPD2",
//                                 "rsid": "rs56051278",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "LINGO2",
//                                 "rsid": "rs2150864",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "NLGN1",
//                                 "rsid": "rs11713169",
//                                 "allele": "C/A",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "HTH_TH": {
//                     "HTH_TH": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-23%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>23% Lower susceptibility to degenerative arthritis </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "ALDH1A2",
//                                 "rsid": "rs4238326",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GDF5",
//                                 "rsid": "rs143384",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "RP11-95P13.2-ZC3H11B",
//                                 "rsid": "rs2820443",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "HTH_YS": {
//                     "HTH_YS": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+29%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>29% Higher uric acid level</span> than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "ABCG2",
//                                 "rsid": "rs2231142",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "GT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GCKR",
//                                 "rsid": "rs780094",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MAF",
//                                 "rsid": "rs889472",
//                                 "allele": "C/A",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "SLC22A12",
//                                 "rsid": "rs504915",
//                                 "allele": "T/A",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "SLC2A9",
//                                 "rsid": "rs3775948",
//                                 "allele": "C/G",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "GC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "OB_TY": {
//                     "OB_TY": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-38%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>38% Lower risk of obesity </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "BDNF",
//                                 "rsid": "rs6265",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FAIM2",
//                                 "rsid": "rs7138803",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FTO",
//                                 "rsid": "rs9939609",
//                                 "allele": "A/T",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MC4R",
//                                 "rsid": "rs17782313",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "YOYO": {
//                     "YOYO": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-32%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>32% Lower chance of being yo-yo </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "BDNF",
//                                 "rsid": "rs6265",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FTO",
//                                 "rsid": "rs9939609",
//                                 "allele": "A/T",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "KTCD15",
//                                 "rsid": "rs29941",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "..",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 }
//             },
//             "Fitness": {
//                 "EXT_AR": {
//                     "EXT_AR": {
//                         "Result": "Strong",
//                         "Pipeline": "PRS",
//                         "Percent": "+36%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>36% strong grip power </span>than average population.",
//                         "img_text": "Weak:Typical:Strong",
//                         "Info": [
//                             {
//                                 "gene": "BDNF",
//                                 "rsid": "rs6265",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FTO",
//                                 "rsid": "rs1421085",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MC4R",
//                                 "rsid": "rs34633411",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MGMT",
//                                 "rsid": "rs1556659",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "CT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "POC5",
//                                 "rsid": "rs2307111",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "ZC3H4",
//                                 "rsid": "rs3810291",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "EXT_BM": {
//                     "EXT_BM": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+34%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>34% Higher risk of ankle injury </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "ACTN3",
//                                 "rsid": "rs1815739",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MMP3",
//                                 "rsid": "rs679620",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "EXT_DG": {
//                     "EXT_DG": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+31%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>31% Higher sprint ability</span> than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "ACTN3",
//                                 "rsid": "rs1815739",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "AGT",
//                                 "rsid": "rs699",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "EXT_DS": {
//                     "EXT_DS": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-23%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>23% Lower maximum oxygen intake</span> than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "CRP",
//                                 "rsid": "rs1205",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "CT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "PGC-1α",
//                                 "rsid": "rs8192678",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "CC",
//                                 "color": "FULL"
//                             }
//                         ]
//                     }
//                 },
//                 "EXT_GY": {
//                     "EXT_GY": {
//                         "Result": "High",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you tend to have <span style='font-family:notosanscjkjpmedium'>High muscle development ability.</span>",
//                         "img_text": "Typical:High:High",
//                         "Info": {
//                             "gene": "ACTN3",
//                             "rsid": "rs1815739",
//                             "allele": "C/T",
//                             "risk": "C",
//                             "ra_type": "A",
//                             "genotype": "TC",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "EXT_HB": {
//                     "EXT_HB": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+37%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>37% Higher recovery ability after exercise </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "BCL11A",
//                                 "rsid": "rs1372876",
//                                 "allele": "A/C",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MED13L",
//                                 "rsid": "rs11067773",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "SCN10A",
//                                 "rsid": "rs6795970",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "EXT_JG": {
//                     "EXT_JG": {
//                         "Result": "High",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you tend to have <span style='font-family:notosanscjkjpmedium'>High fitness for endurance exercise.</span>",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "NFIA-AS2",
//                             "rsid": "rs1572312",
//                             "allele": "G/T",
//                             "risk": "G",
//                             "ra_type": "A",
//                             "genotype": "GG",
//                             "color": "FULL"
//                         }
//                     }
//                 },
//                 "MU_STR": {
//                     "MU_STR": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+26%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>26% Higher strength training fitness</span> than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "ACTN3",
//                                 "rsid": "rs1815739",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "AGT",
//                                 "rsid": "rs699",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "FULL"
//                             },
//                             {
//                                 "gene": "HIF1A",
//                                 "rsid": "rs11549465",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "NOS3",
//                                 "rsid": "rs2070744",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "FULL"
//                             }
//                         ]
//                     }
//                 }
//             },
//             "Dietary": {
//                 "FOD_JM": {
//                     "FOD_JM": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+31%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>31% High saltiness sensitivity </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "SCNN1B",
//                                 "rsid": "rs239345",
//                                 "allele": "A/T",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "TRPV1",
//                                 "rsid": "rs8065080",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "FOD_PM": {
//                     "FOD_PM": {
//                         "Result": "Typical",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with genotypes like you tend to feel <span style='font-family:notosanscjkjpmedium'>Typical Satiety.</span>",
//                         "img_text": "Typical:Moderate low:Low",
//                         "Info": {
//                             "gene": "FTO",
//                             "rsid": "rs9939609",
//                             "allele": "A/T",
//                             "risk": "A",
//                             "ra_type": "R",
//                             "genotype": "TT",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "FOD_SK": {
//                     "FOD_SK": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "-7%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>7% Lower appetite </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "FTO",
//                                 "rsid": "rs9939609",
//                                 "allele": "A/T",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GCKR",
//                                 "rsid": "rs780093",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "FOD_SM": {
//                     "FOD_SM": {
//                         "Result": "Moderate high",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with genotypes like you tend to have a <span style='font-family:notosanscjkjpmedium'>Moderately high level of bitterness sensitivity.</span>",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "TAS2R38",
//                             "rsid": "rs10246939",
//                             "allele": "C/T",
//                             "risk": "C",
//                             "ra_type": "A",
//                             "genotype": "TC",
//                             "color": "NON"
//                         }
//                     }
//                 },
//                 "FOD_ST": {
//                     "FOD_ST": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-41%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>41% Lower sweetness sensitivity </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "TAS1R2",
//                                 "rsid": "rs12033832",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "TAS1R3",
//                                 "rsid": "rs35744813",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 }
//             },
//             "Beauty": {
//                 "G2ME_AA": {
//                     "G2ME_AA": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "-1%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>1% Lower risk of developing Alopecia areata.</span>",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "HLA",
//                                 "rsid": "rs9268528",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "HLA-DQB1",
//                                 "rsid": "rs9275572",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "IL2RA",
//                                 "rsid": "rs3118470",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "G2ME_HT": {
//                     "G2ME_HT": {
//                         "Result": "Thick",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotypes like you tend to have a <span style='font-family:notosanscjkjpmedium'>Thick hair thickness.</span>",
//                         "img_text": "Typical:Moderate thick:Thick",
//                         "Info": {
//                             "gene": "EDAR",
//                             "rsid": "rs3827760",
//                             "allele": "G/A",
//                             "risk": "G",
//                             "ra_type": "A",
//                             "genotype": "GG",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "G2ME_MB": {
//                     "G2ME_MB": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+38%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>38% Higher risk of developing male hair loss.</span>",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "chr20p11 (1)",
//                                 "rsid": "rs1160312",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "chr20p11 (2)",
//                                 "rsid": "rs2180439",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "G2ME_SP": {
//                     "G2ME_SP": {
//                         "Result": "Typical",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you tend to have a <span style='font-family:notosanscjkjpmedium'>Typical risk of pigmentation.</span>",
//                         "img_text": "Typical:High:High",
//                         "Info": {
//                             "gene": "MC1R",
//                             "rsid": "rs2228479",
//                             "allele": "A/G",
//                             "risk": "A",
//                             "ra_type": "R",
//                             "genotype": "GG",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "SK_SA": {
//                     "SK_SA": {
//                         "Result": "Typical",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you have a<span style='font-family:notosanscjkjpmedium'> Typical risk of skin ageing.</span>",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "AGER",
//                             "rsid": "rs2070600",
//                             "allele": "T/C",
//                             "risk": "T",
//                             "ra_type": "R",
//                             "genotype": "CC",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "SK_SC": {
//                     "SK_SC": {
//                         "Result": "Typical",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>Typical risk of developing gray hair.</span>",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "IRF4",
//                             "rsid": "rs12203592",
//                             "allele": "T/C",
//                             "risk": "T",
//                             "ra_type": "R",
//                             "genotype": "CC",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "SK_SP2": {
//                     "SK_SP2": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-33%",
//                         "Comm": "People with the same genotype as you tend to have a<span style='font-family:notosanscjkjpmedium'> Typical risk of developing melasma/freckles.</span>",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "IRF4",
//                                 "rsid": "rs872071",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MC1R (1)",
//                                 "rsid": "rs2228479",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MC1R (2)",
//                                 "rsid": "rs12931267",
//                                 "allele": "G/C",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "SK_TS": {
//                     "SK_TS": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "+9%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>9% High risk of developing stretch marks</span> than average population",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "ELN",
//                                 "rsid": "rs2071307",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FAM150B-TMEM18",
//                                 "rsid": "rs13021737",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "HMCN1",
//                                 "rsid": "rs4651295",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "SK_TY": {
//                     "SK_TY": {
//                         "Result": "High",
//                         "Pipeline": "PRS",
//                         "Percent": "+22%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>22% Higher tanning response after sun exposure.</span>",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "GRM5",
//                                 "rsid": "rs10831496",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "LOC401937",
//                                 "rsid": "rs966321",
//                                 "allele": "G/T",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MATP",
//                                 "rsid": "rs35391",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MC1R (1)",
//                                 "rsid": "rs464349",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MC1R (2)",
//                                 "rsid": "rs11648785",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "SK_YD": {
//                     "SK_YD": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "+14%",
//                         "Comm": "People with the same genotype as you have a<span style='font-family:notosanscjkjpmedium'> 14% Higher risk of developing acne</span> than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "DDB2",
//                                 "rsid": "rs747650",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "FST",
//                                 "rsid": "rs38055",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "OVOL1",
//                                 "rsid": "rs537786",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "SELL",
//                                 "rsid": "rs7531806",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "TGFB2",
//                                 "rsid": "rs1159268",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "SK_YD2": {
//                     "SK_YD2_01": {
//                         "Result": "Typical",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>Typical risk of developing contact dermatitis.</span>",
//                         "img_text": "Typical:Typical:High",
//                         "Info": {
//                             "gene": "IL16",
//                             "rsid": "rs4778889",
//                             "allele": "C/T",
//                             "risk": "C",
//                             "ra_type": "R",
//                             "genotype": "TC",
//                             "color": "NON"
//                         }
//                     },
//                     "SK_YD2_02": {
//                         "Result": "Typical",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>Typical risk of developing psoriasis.</span>",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "MHC",
//                             "rsid": "rs10484554",
//                             "allele": "T/C",
//                             "risk": "T",
//                             "ra_type": "R",
//                             "genotype": "CC",
//                             "color": "BASIC"
//                         }
//                     },
//                     "SK_YD2_03": {
//                         "Result": "High",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>High risk of developing atopic dermatitis.</span>",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "OR10A3-NLRP10",
//                             "rsid": "rs878860",
//                             "allele": "C/T",
//                             "risk": "C",
//                             "ra_type": "R",
//                             "genotype": "CC",
//                             "color": "BASIC"
//                         }
//                     },
//                     "SK_YD2_04": {
//                         "Result": "High",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>High risk of developing inflammatory acne.</span>",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "OVOL1",
//                             "rsid": "rs537786",
//                             "allele": "T/G",
//                             "risk": "T",
//                             "ra_type": "R",
//                             "genotype": "TT",
//                             "color": "BASIC"
//                         }
//                     }
//                 }
//             },
//             "Wellness": {
//                 "G2ME_CM": {
//                     "G2ME_CM": {
//                         "Result": "Moderate slow",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you tend to have <span style='font-family:notosanscjkjpmedium'>Moderately slow</span> metabolism of caffeine.",
//                         "img_text": "Typical:Moderate slow:Slow",
//                         "Info": {
//                             "gene": "AHR",
//                             "rsid": "rs4410790",
//                             "allele": "T/C",
//                             "risk": "T",
//                             "ra_type": "R",
//                             "genotype": "TC",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "IND_AD": {
//                     "IND_AD": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-41%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>41% Lower ability to metabolize alcohol </span>than average population.",
//                         "img_text": "High:Typical:Low",
//                         "Info": [
//                             {
//                                 "gene": "ADH7",
//                                 "rsid": "rs284787",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "ALDH2",
//                                 "rsid": "rs671",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "IND_AH": {
//                     "IND_AH": {
//                         "Result": "Moderate high",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you are at <span style='font-family:notosanscjkjpmedium'>Moderately high risk of developing alcohol flush.</span>",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "ALDH2",
//                             "rsid": "rs671",
//                             "allele": "A/G",
//                             "risk": "A",
//                             "ra_type": "R",
//                             "genotype": "GA",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "IND_AY": {
//                     "IND_AY": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-26%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>26% Lower alcohol dependence</span> than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "DRD2",
//                                 "rsid": "rs1800497",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "OPRM1",
//                                 "rsid": "rs1799971",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "IND_BJ": {
//                     "IND_BJ": {
//                         "Result": "Typical",
//                         "Pipeline": "PRS",
//                         "Percent": "+3%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>3% Higher risk of insomnia </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "C5orf30",
//                                 "rsid": "rs12187443",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CNTN5",
//                                 "rsid": "rs6589988",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "GNAO1",
//                                 "rsid": "rs2398144",
//                                 "allele": "A/C",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "CA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "MICB",
//                                 "rsid": "rs3131638",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "PLCL1",
//                                 "rsid": "rs1064213",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "ZNF784",
//                                 "rsid": "rs908668",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "CT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "IND_CY": {
//                     "IND_CY": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-35%",
//                         "Comm": "People with the same genotype as you have <span style='font-family:notosanscjkjpmedium'>35% Lower caffeine dependance </span>than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "CPLX3/ULK3",
//                                 "rsid": "rs6495122",
//                                 "allele": "A/C",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "LAMB4/NRCAM",
//                                 "rsid": "rs382140",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "IND_MN": {
//                     "IND_MN": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-45%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>45% Lower chances to be morning person</span> than normal population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "AK5",
//                                 "rsid": "rs11806344",
//                                 "allele": "T/G",
//                                 "risk": "T",
//                                 "ra_type": "A",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "NOL4",
//                                 "rsid": "rs4273120",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "PER3(VAMP3)",
//                                 "rsid": "rs11121022",
//                                 "allele": "C/A",
//                                 "risk": "C",
//                                 "ra_type": "A",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "PLCL1 (1)",
//                                 "rsid": "rs6738825",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "PLCL1 (2)",
//                                 "rsid": "rs7604700",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "AG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "RASD1",
//                                 "rsid": "rs11545787",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "GA",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "IND_ND": {
//                     "IND_ND": {
//                         "Result": "Slow",
//                         "Pipeline": "PRS",
//                         "Percent": "-44%",
//                         "Comm": "People with the same genotype as you can metabolize nicotine <span style='font-family:notosanscjkjpmedium'>44% Slower</span> than average population.",
//                         "img_text": "Slow:Typical:Fast",
//                         "Info": [
//                             {
//                                 "gene": "CYP2A7, CYP2G1P",
//                                 "rsid": "rs5007415",
//                                 "allele": "A/C",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "CC",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CYP2G1P, CYP2B7P1",
//                                 "rsid": "rs3852872",
//                                 "allele": "T/C",
//                                 "risk": "T",
//                                 "ra_type": "R",
//                                 "genotype": "CT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "IND_NY": {
//                     "IND_NY": {
//                         "Result": "Low",
//                         "Pipeline": "PRS",
//                         "Percent": "-23%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>23% Lower nicotine dependence</span> than average population.",
//                         "img_text": "Low:Typical:High",
//                         "Info": [
//                             {
//                                 "gene": "CHRNA3",
//                                 "rsid": "rs1051730",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "R",
//                                 "genotype": "GG",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "CHRNA4",
//                                 "rsid": "rs2273500",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TT",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "IND_SS": {
//                     "IND_SS": {
//                         "Result": "Short",
//                         "Pipeline": "PRS",
//                         "Percent": "-26%",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>26% Shorter sleep duration</span> than average population.",
//                         "img_text": "Short:Typical:김",
//                         "Info": [
//                             {
//                                 "gene": "LOC101927400",
//                                 "rsid": "rs1823125",
//                                 "allele": "G/A",
//                                 "risk": "G",
//                                 "ra_type": "A",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "VRK2",
//                                 "rsid": "rs1380703",
//                                 "allele": "A/G",
//                                 "risk": "A",
//                                 "ra_type": "A",
//                                 "genotype": "AA",
//                                 "color": "BASIC"
//                             },
//                             {
//                                 "gene": "6p21.33",
//                                 "rsid": "rs4248149",
//                                 "allele": "C/T",
//                                 "risk": "C",
//                                 "ra_type": "R",
//                                 "genotype": "TC",
//                                 "color": "BASIC"
//                             }
//                         ]
//                     }
//                 },
//                 "IND_TJ": {
//                     "IND_TJ": {
//                         "Result": "Moderate high",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "People with the same genotype as you have a <span style='font-family:notosanscjkjpmedium'>Moderately high pain sensitivity.</span>",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "COMT",
//                             "rsid": "rs4680",
//                             "allele": "A/G",
//                             "risk": "A",
//                             "ra_type": "R",
//                             "genotype": "GA",
//                             "color": "BASIC"
//                         }
//                     }
//                 },
//                 "IND_WINE": {
//                     "IND_WINE_01": {
//                         "Result": "Typical",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "Typical.",
//                         "img_text": "Typical:Typical:Low",
//                         "Info": {
//                             "gene": "PKD1L3",
//                             "rsid": "rs4788587",
//                             "allele": "A/G",
//                             "risk": "A",
//                             "ra_type": "A",
//                             "genotype": "GG",
//                             "color": "BASIC"
//                         }
//                     },
//                     "IND_WINE_02": {
//                         "Result": "Medium body",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "Medium body.",
//                         "img_text": "Full body:Medium body:Light body",
//                         "Info": {
//                             "gene": "ALDH2",
//                             "rsid": "rs671",
//                             "allele": "A/G",
//                             "risk": "A",
//                             "ra_type": "A",
//                             "genotype": "GA",
//                             "color": "BASIC"
//                         }
//                     },
//                     "IND_WINE_03": {
//                         "Result": "Moderate high",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "Moderate high.",
//                         "img_text": "Typical:Moderate high:High",
//                         "Info": {
//                             "gene": "TAS2R38",
//                             "rsid": "rs10246939",
//                             "allele": "C/T",
//                             "risk": "C",
//                             "ra_type": "A",
//                             "genotype": "TC",
//                             "color": "BASIC"
//                         }
//                     },
//                     "IND_WINE_04": {
//                         "Result": "Fruity scent",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "Fruity scent.",
//                         "img_text": "Fragrant scent:Fruity scent:Fruity scent",
//                         "Info": {
//                             "gene": "OR4D6",
//                             "rsid": "rs7943953",
//                             "allele": "T/G",
//                             "risk": "T",
//                             "ra_type": "A",
//                             "genotype": "TG",
//                             "color": "BASIC"
//                         }
//                     },
//                     "IND_WINE_05": {
//                         "Result": "Dry",
//                         "Pipeline": "SINGLE_T",
//                         "Percent": "",
//                         "Comm": "Nocall",
//                         "img_text": "Sweet:Medium sweet:Dry",
//                         "Info": {
//                             "gene": "TAS1R3",
//                             "rsid": "rs35744813",
//                             "allele": "C/T",
//                             "risk": "C",
//                             "ra_type": "A",
//                             "genotype": "CC",
//                             "color": "BASIC"
//                         }
//                     }
//                 }
//             },
//             "ANCESTRY": {
//                 "first": {
//                     "region_origin": "EastAsia",
//                     "region_origin_name": "East Asia",
//                     "region_percent": "100.0",
//                     "region_origin_nationality": "East Asian",
//                     "info": [
//                         {
//                             "subregion_origin": "Japanese_Korean",
//                             "subregion_origin_name": "Korean & Japanese",
//                             "subregion_percent": "78.39",
//                             "country_origin": "Korea",
//                             "country_origin_name": "Korea",
//                             "country_percent": "53.46"
//                         },
//                         {
//                             "subregion_origin": "Japanese_Korean",
//                             "subregion_origin_name": "Korean & Japanese",
//                             "subregion_percent": "78.39",
//                             "country_origin": "Japan",
//                             "country_origin_name": "Japan",
//                             "country_percent": "24.93"
//                         },
//                         {
//                             "subregion_origin": "Chinese",
//                             "subregion_origin_name": "Chinese",
//                             "subregion_percent": "19.95",
//                             "country_origin": "China",
//                             "country_origin_name": "China",
//                             "country_percent": "19.95"
//                         },
//                         {
//                             "subregion_origin": "Mongolian",
//                             "subregion_origin_name": "Mongolian",
//                             "subregion_percent": "1.66",
//                             "country_origin": "Mongolia",
//                             "country_origin_name": "Mongolia",
//                             "country_percent": "1.14"
//                         },
//                         {
//                             "subregion_origin": "Mongolian",
//                             "subregion_origin_name": "Mongolian",
//                             "subregion_percent": "1.66",
//                             "country_origin": "Kyrgyzstan",
//                             "country_origin_name": "Kyrgyzstan",
//                             "country_percent": "0.33"
//                         },
//                         {
//                             "subregion_origin": "Mongolian",
//                             "subregion_origin_name": "Mongolian",
//                             "subregion_percent": "1.66",
//                             "country_origin": "Kazakhstan",
//                             "country_origin_name": "Kazakhstan",
//                             "country_percent": "0.19"
//                         }
//                     ]
//                 }
//             }
//         }
//     }
// }
// JSON;

// // Step 2: Decode JSON
// $data = json_decode($json, true);

// // Debug check
// if (json_last_error() !== JSON_ERROR_NONE) {
//     die("JSON decode error: " . json_last_error_msg());
// }

// // Step 3: Decode OrderInfo.inspection_item (labels)
// $labels = json_decode($data['OrderInfo']['inspection_item'], true);

// // Step 4: Get the codes
// $codes = $data['EDAPPGS025']['Summary']['inspection_item'];


// // Step 5: Build new array mapping code => English label
// $result = [];
// foreach ($codes as $category => $items) {
//     foreach ($items as $index => $code) {
//         if (!isset($labels[$category][$index])) continue;

//         // Extract English only (before "|")
//         $english = trim(explode('|', $labels[$category][$index])[0]);
//         $result[$category][$code] = $english;
//     }
// }

// // Step 6: Print result
// echo "<pre>";
// var_dump($labels);
// echo "<br />";
// echo "<br />";
// var_dump($codes);
// echo "<br />";
// echo "<br />";
// echo "<br />";
// var_dump($result);
// echo "</pre>";








?>