@extends('Layout.layout')
@section('title', 'Contact Page')




@section('content')
    <div>
        <h1>{{'The Contact Page you requested for'}}</h1>
        <p>{{
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat est, officiis 
            facilis ad suscipit sit asperiores esse Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Quia, magnamillo corrupti sed iure deserunt molestiae in soluta illum blanditiis autem aliquid.'}}
        </p>
        <p>{{
            'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum magnam incidunt minus ad 
            minima voluptatibus nisi culpa, ab, eaque id molestiae explicabo cumque sint eligendi et, 
            distinctio voluptates officia natus a sapiente veritatis neque. Vel voluptates pariatur voluptas 
            mollitia numquam.'}}
        </p>
    </div>
   {{-- @include('Home.index') --}}
   {{-- @php
        print_r(compact(explode(' ', 'count acw cols coldepth')));
   @endphp --}}
@endsection















































































































{{-- <?php
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

global $Student;
$grouped = [];
$locaTions = array_map(fn($each) => $each['location'], $Student);
foreach($locaTions as $value){

    $exist = array_filter($grouped, fn($l) => $l['location'] == $value);
    if (!count($exist)) {
    
        $toPush = ['location' => "$value", 'total' => count(array_filter($locaTions, fn($l) => $l == $value)), ];
        echo "This is the total number of students in <b>" .$toPush['location']."</b> and it appeared <b>" .$toPush['total']. "</b><br/>";
        array_push($grouped, $toPush);
    }
}
print_r($grouped);
?> --}}
