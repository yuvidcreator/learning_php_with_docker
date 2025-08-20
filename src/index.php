<?php
require __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$jsonFile  = __DIR__ . '/../data/EDAPPGS025.json';
$excelFile = __DIR__ . '/../data/EDAPPGS025.xlsx';

$data   = json_decode(file_get_contents($jsonFile), true);
$labels = json_decode($data['OrderInfo']['inspection_item'], true);
$codes  = $data['EDAPPGS025']['Summary']['inspection_item'];
$lang = $data['OrderInfo']['report_language'];

$spreadsheet = IOFactory::load($excelFile);
$sheet = $spreadsheet->getActiveSheet();

// Initialize an array to store grouped data
$groupedData = [];

// loop through all rows of sheet
// foreach ($sheet->getRowIterator() as $row) {
//     $r  = $row->getRowIndex();
//     $P  = (string)$sheet->getCell("A$r")->getValue();
//     $S  = (string)$sheet->getCell("B$r")->getValue();
//     $EN = (string)$sheet->getCell("C$r")->getValue();

//     echo "$P: $S :$EN\n <br />";

//     // Only parse rows that contain these packed codes
//     if (strpos($EN, '#@#') !== false) {
//         // Split by "#1@" → separates each code block
//         $chunks = explode('#1@', $EN);
//         foreach ($chunks as $chunk) {
//             $chunk = trim($chunk);
//             if ($chunk === '') continue;

//             // Split by "#@#"
//             $parts = explode('@#', $chunk);

//             // First part = code
//             $code = trim(array_shift($parts));

//             // Remaining parts = links
//             $links = [];
//             foreach ($parts as $link) {
//                 $link = trim($link);
//                 if ($link !== '') {
//                     // normalize spacing and always https://
//                     $link = preg_replace('/\s+/', '', $link);
//                     if (stripos($link, 'http://') === 0) {
//                         $link = 'https://' . substr($link, 7);
//                     }
//                     if (!preg_match('~^https://~', $link)) {
//                         $link = 'https://' . $link;
//                     }
//                     $links[] = $link;
//                 }
//             }

//             // Find category for this code (from JSON Summary)
//             foreach ($codes as $category => $list) {
//                 if (in_array($code, $list, true)) {
//                     $label = null;
//                     foreach ($labels[$category] as $idx => $raw) {
//                         if ($list[$idx] === $code) {
//                             $label = trim(explode('|', $raw)[0]);
//                             break;
//                         }
//                     }
//                     $result[$category][$code] = [
//                         'label' => $label,
//                         'links' => $links
//                     ];
//                 }
//             }
//         }
//     }
// }

foreach ($sheet->getRowIterator() as $row) {
    $cellValue = $sheet->getCell("A".$row->getRowIndex())->getValue();
    
    if (!isset($groupedData[$cellValue])) {
        $groupedData[$cellValue] = [];
    }

    $groupedData[$cellValue][] = call_user_func_array(
        'array_merge',
        $row->getWorksheet()->rangeToArray(
            'A' . $row->getRowIndex() . ':' . $row->getWorksheet()->getHighestColumn() . $row->getRowIndex(),
            null, true, false, true
        )
    );

}

// Convert to Object and Find Language Position
$groupedData = (object)$groupedData;
$groupedData->position = array_search(strtoupper($lang) , $groupedData->Page[0]);

$data['exceldata'] = $groupedData;

// unset($groupedData);
// unset($sheet);

// echo "$result <br />";
// echo "<br />";
// echo "<br />";
// echo "$lang<br />";


// print_r("$data <br />");



// header('Content-Type: application/json');
// echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);



// Step 5: Build new array mapping code => English label
$combinedResult = [];
foreach ($codes as $category => $items) {
    foreach ($items as $index => $code) {
        if (!isset($labels[$category][$index])) continue;

        // Extract English only (before "|")
        $english = trim(explode('|', $labels[$category][$index])[0]);
        $combinedResult[$category][$code] = $english;
    }
}

echo "$lang <br />";
echo "<br />";
echo "<br />";
var_dump($combinedResult);

$d_var = explode("@#", $groupedData->P218[3][$groupedData->position]);

echo "<br />";
echo "<br />";

var_dump($d_var);
?>