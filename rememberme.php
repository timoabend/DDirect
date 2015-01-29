<?php
$filename = 'ipaddress.php';
$somecontent = '<?php $ipaddress = "' . $_SERVER["REMOTE_ADDR"] . '"; ?>';

// Sichergehen, dass die Datei existiert und beschreibbar ist
if (is_writable($filename)) {

    // Wir öffnen $filename im "Anhänge" - Modus.
    // Der Dateizeiger befindet sich am Ende der Datei, und
    // dort wird $somecontent später mit fwrite() geschrieben.
    if (!$handle = fopen($filename, "w")) {
         print "Kann die Datei $filename nicht öffnen";
         exit;
    }

    // Schreibe $somecontent in die geöffnete Datei.
    if (!fwrite($handle, $somecontent)) {
        print "Kann in die Datei $filename nicht schreiben";
        exit;
    }

    print "Fertig";

    fclose($handle);

} else {
    print "Die Datei $filename ist nicht schreibbar";
}
?>
