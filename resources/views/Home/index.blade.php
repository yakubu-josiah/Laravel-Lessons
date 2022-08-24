@extends('Layout.layout')
@section('title', 'Homepage')


@section('content')
    
    @php
        $Student =    array(
            array("name"=>"Akanegbu Favour", "location"=>"Delta", "age"=>"24"),
            array("name"=>"Micheal Zwalde", "location"=>"Ondo", "age"=>"41"),
            array("name"=>"Ajibade Ife", "location"=>"Kogi", "age"=>"22"), 
            array("name"=>"Alimi Samuel", "location"=>"Lagos", "age"=>"23"), 
            array("name"=>"Nwariene Ebuka", "location"=>"Gombe", "age"=>"19"), 

            array("name"=>"Tijani Daniel", "location"=>"Lagos", "age"=>"23"), 
            array("name"=>"Omolewa Yakqub", "location"=>"Yobe", "age"=>"19"),
            array("name"=>"Eunice Udoh", "location"=>"Abuja", "age"=>"37"), 
            array("name"=>"Aggrey Samson", "location"=>"Cross-River", "age"=>"30"), 
            array("name"=>"Adebayor Jonathan", "location"=>"Lagos", "age"=>"21"),

            array("name"=>"Isreal Ekoh", "location"=>"Osun", "age"=>"25"),
            array("name"=>"Joy Donatus", "location"=>"Ekiti", "age"=>"36"), 
            array("name"=>"Sandra Gbadebo", "location"=>"Ibadan", "age"=>"42"), 
            array("name"=>"Ernest Miracle", "location"=>"Ondo", "age"=>"22"),
            array("name"=>"Samson Precious", "location"=>"Ilorin", "age"=>"31"), 


            array("name"=>"Odusote Olayemi", "location"=>"Lagos", "age"=>"30"),
            array("name"=>"Micheal Ogunjobi", "location"=>"Kano", "age"=>"25"),
            array("name"=>"Kolade Oluwaseyi", "location"=>"Lagos", "age"=>"27"), 
            array("name"=>"Oyetobi Charles", "location"=>"Kebbi", "age"=>"28"), 
            array("name"=>"Stanley Patrick", "location"=>"Jos", "age"=>"32"),


            array("name"=>"Nnamani Tochukwu", "location"=>"Abuja", "age"=>"29"),
            array("name"=>"Okwuchukwu Chidera", "location"=>"Plateau", "age"=>"24"), 
            array("name"=>"Onyebueke Chika", "location"=>"Sokoto", "age"=>"26"), 
            array("name"=>"Bobby Udoh", "location"=>"Rivers", "age"=>"43"), 
            array("name"=>"Abba Bobby", "location"=>"Ondo", "age"=>"41"),


            array("name"=>"Kindness Udoh", "location"=>"Ibadan", "age"=>"39"), 
            array("name"=>"Obieke Chinaza", "location"=>"Lagos", "age"=>"27"),
            array("name"=>"James Chinwe", "location"=>"Taraba", "age"=>"30"), 
            array("name"=>"Azubuike Chigozie", "location"=>"Abia", "age"=>"36"),
            array("name"=>"Komolafe Kadijat", "location"=>"Lagos", "age"=>"31"), 

            array("name"=>"Amodu Tosin", "location"=>"Imo", "age"=>"32"),
            array("name"=>"Yekini Adeoye", "location"=>"Lagos", "age"=>"31"),
            array("name"=>"Samson Adewumi", "location"=>"Port-Harcourt", "age"=>"40"), 
            array("name"=>"Enahoro Paul", "location"=>"Kastina", "age"=>"35"), 
            array("name"=>"Ayilaran Mayowa", "location"=>"Abuja", "age"=>"31"), 

            array("name"=>"Ekundayo Vincente", "location"=>"Lagos", "age"=>"27"),
            array("name"=>"Abel Jonathan", "location"=>"Ebonyi", "age"=>"24"),
            array("name"=>"Adiatu Olalekan", "location"=>"Adamawa", "age"=>"29"), 
            array("name"=>"Uwakwe Chibuzor", "location"=>"Lagos", "age"=>"20"),
            array("name"=>"Quadri Lekan", "location"=>"Anambra", "age"=>"30"),

            array("name"=>"Idris Abdukareem", "location"=>"Maduguri", "age"=>"25"), 
            array("name"=>"Yaqub Janet", "location"=>"Lagos", "age"=>"21"), 
            array("name"=>"Bamiloye Oladapo", "location"=>"Abuja", "age"=>"36"), 
            array("name"=>"Adesanya Shade", "location"=>"Lagos", "age"=>"25"), 
            array("name"=>"Udoh Joshua", "location"=>"Borno", "age"=>"38"), 

            array("name"=>"Ogamba Oluchi", "location"=>"Rivers", "age"=>"41"),
            array("name"=>"Olaniyi Bolaji", "location"=>"Ibadan", "age"=>"32"), 
            array("name"=>"Stephen Mary", "location"=>"Ondo", "age"=>"38"),
            array("name"=>"Issac Anietie", "location"=>"Lagos", "age"=>"27"), 
            array("name"=>"Micheal Oke", "location"=>"Abuja", "age"=>"30"),
            );

            echo "<h2>Creative-Web Students Chart</h2><br/>";
            echo "<table>";
                echo "<tr>";
                echo "<th>Names</th>";
                echo "<th>Location</th>";
                echo "<th>Age</th>";
                echo "</tr>";   
                
                foreach($Student as $value => $output){
                        echo "<tr>";
                        echo "<td>" .$output['name']. "</td>";
                        echo "<td>" .$output['location']. "</td>";
                        echo "<td>" .$output['age']. "</td>";
                        echo "</tr>";
                }
            echo "</table>";

    @endphp  
        
    @endsection
