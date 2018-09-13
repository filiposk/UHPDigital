<?php
    require_once 'dompdf/lib/html5lib/Parser.php';
    require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
    require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
    require_once 'dompdf/src/Autoloader.php';
    Dompdf\Autoloader::register();
    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $file = "cards.php";
    $dompdf->set_option('chroot', $_SERVER['DOCUMENT_ROOT']);
    $dompdf->loadHtmlFile($file);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();
?>
