<?php
    namespace App\Models;

    class Listing{
        public static function all(){
            return [
                [
                    'id'=> 1,
                    'title'=> 'Listing One',
                    'description'=> 'ciao a tutti questo è il mio sito'
                ],
                 [
                    'id'=> 2,
                    'title'=> 'Listing Two',
                    'description'=> 'ciao a tutti questo è il mio sito' 
                 ]
                 ];

        }

        public static function find($id){
            $listings =  self::all();
            foreach($listings as $listing){
                if($listing['id']==$id){
                    return $listing;
                }
            }
        }
    }