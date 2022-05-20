<?php

namespace App\Helpers;

class Export
{
    /**
     *
     * @return array $result
     */
    public static function csv($data, $filename = 'export', $extraData = array())
    {
        if ($data) {
            // Tells to the browser that a file is returned, with its name : $filename.csv
            header("Content-disposition: attachment; filename=$filename.csv");

            // Tells to the browser that the content is a csv file
            header("Content-Type: text/csv");

            // I open PHP memory as a file
            $fp = fopen("php://output", 'w');

            // Insert the UTF-8 BOM in the file
            fputs($fp, $bom = (chr(0xEF) . chr(0xBB) . chr(0xBF)));

            if (!empty($extraData)) {
                foreach ($extraData as $file) {
                    $result = [];
                    array_walk_recursive($file, function ($item) use (&$result) {
                        $result[] = $item;
                    });
                    fputcsv($fp, $result, ',', '"');
                }
                fputcsv($fp, array(), ',', '"');
            }

            // I add the array keys as CSV headers

            fputcsv($fp, array_keys($data[array_key_first($data)]), ',', '"');

            // Add all the data in the file
            foreach ($data as $fields) {
                fputcsv($fp, $fields, ',', '"');
            }

            // Close the file
            fclose($fp);
            die();
        }
    }

    public static function pdf($data, $filename = 'export', $extraData = array())
    {
        if ($data) {
            // Tells to the browser that a file is returned, with its name : $filename.csv
            header("Content-disposition: attachment; filename=$filename.csv");

            // Tells to the browser that the content is a csv file
            header("Content-Type: text/csv");

            // I open PHP memory as a file
            $fp = fopen("php://output", 'w');

            // Insert the UTF-8 BOM in the file
            fputs($fp, $bom = (chr(0xEF) . chr(0xBB) . chr(0xBF)));

            if (!empty($extraData)) {
                foreach ($extraData as $file) {
                    $result = [];
                    array_walk_recursive($file, function ($item) use (&$result) {
                        $result[] = $item;
                    });
                    fputcsv($fp, $result, ',', '"');
                }
                fputcsv($fp, array(), ',', '"');
            }

            // I add the array keys as CSV headers

            fputcsv($fp, array_keys($data[array_key_first($data)]), ',', '"');

            // Add all the data in the file
            foreach ($data as $fields) {
                fputcsv($fp, $fields, ',', '"');
            }

            // Close the file
            fclose($fp);
            die();
        }
    }
}
