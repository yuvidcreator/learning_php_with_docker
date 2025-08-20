<?php
require __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$jsonFile  = __DIR__ . '/../data/EDAPPGS025.json';
$excelFile = __DIR__ . '/../data/EDAPPGS025.xlsx';

$data   = json_decode(file_get_contents($jsonFile), true);
$labels = json_decode($data['OrderInfo']['inspection_item'], true);
$codes  = $data['EDAPPGS025']['Summary']['inspection_item'];

$spreadsheet = IOFactory::load($excelFile);
$sheet = $spreadsheet->getActiveSheet();

// Build a quick lookup of all known labels (English text only)
$allLabels = [];
foreach ($labels as $cat => $arr) {
    foreach ($arr as $raw) {
        $allLabels[] = trim(explode('|', $raw)[0]);
    }
}

$result = [];

foreach ($codes as $category => $list) {
    foreach ($list as $idx => $code) {
        if (!isset($labels[$category][$idx])) continue;

        $label = trim(explode('|', $labels[$category][$idx])[0]);

        $foundRow = null;
        $foundP   = null;

        // Find label row
        foreach ($sheet->getRowIterator() as $row) {
            $r  = $row->getRowIndex();
            $P  = (string)$sheet->getCell("A$r")->getValue();
            $EN = (string)$sheet->getCell("C$r")->getValue();

            if ($EN === $label) {
                $foundRow = $r;
                $foundP   = $P;
                break;
            }
        }

        $links = [];
        if ($foundRow && $foundP) {
            $r = $foundRow + 1;
            while (true) {
                $P  = (string)$sheet->getCell("A$r")->getValue();
                $S  = (string)$sheet->getCell("B$r")->getValue();
                $EN = (string)$sheet->getCell("C$r")->getValue();

                if ($P !== $foundP || $S === '') break;

                // stop if EN matches another label name (means next test starts)
                if (in_array($EN, $allLabels, true)) {
                    break;
                }

                // 📌 Just take value “as is”
                if ($EN !== '') {
                    $links[] = $EN;
                }

                $r++;
            }
        }

        $result[$category][$code] = [
            'label' => $label,
            'links' => $links,
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);


?>