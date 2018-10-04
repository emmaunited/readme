<?php
/**
 * Created by PhpStorm.
 * User: emmanuel
 * Date: 10/4/18
 * Time: 4:40 AM
 */
main::start( "example.csv");

class main {

    static public function start($filename) {

        $records = csv::getRecords($filename);

        print_r($records);

    }

}

class csv {

    static public function getRecords($filename) {

        $file = fopen( filename: "example.csv", mode: "r");

        while(! feof($file));

        {
            $record = fgetcsv($file);

            $records[] = $record;

        }

        fclose($file);
        return $records;

    }
}