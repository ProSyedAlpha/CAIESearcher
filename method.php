<?php
include 'vendor/autoload.php';
$parser = new \Smalot\PdfParser\Parser();
if (isset($_POST['search'])) {
    
        $count = 0;
		$path = 'papers/' . $_POST['programmes'] . '/' . $_POST['subjects'] . '/';
        $files = array_values(array_diff(scandir($path . "QP/") , array('.','..')));
		for ($i = 0;$i < count($files);$i++) {
			$files[$i] = $path . 'QP/' . $files[$i];
		}
		if (isset($_POST['msIn'])) {
			$ms = array_values(array_diff(scandir($path . "MS/") , array('.','..')));
			for ($i = 0;$i < count($ms);$i++) {
				$ms[$i] = $path . 'MS/' . $ms[$i];
			}
			$files = array_merge($files, $ms);
		}
		$files = array_values($files);
        $keyword = $_POST['query'];
        if ($keyword !== '' and $keyword !== null) {
            for ($j = 0;$j < count($files);$j++) {
                if (pathinfo($files[$j], PATHINFO_EXTENSION) == "pdf") {
                    $pdf = $parser->parseFile($files[$j]);
                    $pages = $pdf->getPages();
                    for ($i = 0;$i < count($pages);$i++) {
                        $text = $pages[$i]->getText();
                        if (strpos($text, $keyword) !== false) {
                            $page = $i + 1;
                            echo '<div class="result">';
                            echo '<a href="' . $files[$j] . '" target="_blank" class="resultFile">' . basename($files[$j], ".pdf") . '</a>';
                            echo '<span class="resultPage">Page ' . $page . '</span>';
                            echo '</div>';
                            $count = $count + 1;
				        }
                    }
                }
                
            }
            if ($count == 0) {
                echo 'No search results!';
            }
        }
}
?>
