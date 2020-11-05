<?php

// makes our database connection into an esier managebale function
function db(): PDO
{

    // path to our db file
    $dir = 'sqlite:/' . __DIR__ . '/murder_mystery.sqlite3';
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dir, '', '',  $options); //tries to connect to our databse using $path, $username, $passowrd, $options 
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode()); //sends out an error message if it fails to connect.
    }

    return $pdo;
}
$query = "insert into person (person_id, full_name, address_number, address_street_name, gender) values ('61-288-3709', 'Nevile Lockner', '66', 'Longview', 'Male');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('49-871-3081', 'Kris Girardin', '98', 'Buena Vista', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('30-571-2876', 'Nowell Conibeer', '473', 'Thackeray', 'Male');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('51-039-4118', 'Chaunce Braisted', '56451', 'Talisman', 'Male');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('65-164-3035', 'Rasla Kintzel', '3', 'Sycamore', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('34-580-0449', 'Benoite Maryon', '88861', 'Tomscot', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('43-966-2119', 'Heinrick Stallebrass', '397', 'Montana', 'Male');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('84-904-0358', 'Matty Pattingson', '0', 'Valley Edge', 'Male');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('65-969-2419', 'Ulrica Willett', '19', 'Sloan', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('81-365-9615', 'Claiborn Putton', '83', 'Schmedeman', 'Male');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('40-055-5863', 'Etan Faber', '66', 'Packers', 'Male');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('01-308-8387', 'Xever MacNamara', '068', 'Becker', 'Male');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('69-951-2052', 'Winnah Sorrel', '56676', 'Bunker Hill', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('91-620-2768', 'Miller Backhurst', '48330', 'Nobel', 'Male');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('69-979-2765', 'Reggie Wharin', '9828', 'Mosinee', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('97-906-8731', 'Jackie Le Franc', '29', 'Sage', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('10-312-8826', 'Lari Brissenden', '3', 'Trailsway', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('69-127-2856', 'Roda Winnister', '758', 'Katie', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('86-931-3754', 'Orin Breche', '567', 'Lillian', 'Male');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('26-223-9291', 'Danice McMichell', '3', 'School', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('48-794-5113', 'Orlando Shoard', '2', 'Cottonwood', 'Male');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('16-529-8112', 'Lil McGriele', '8', 'Waubesa', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('54-908-5536', 'Merlina Sambrook', '98119', 'Almo', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('30-092-0364', 'Arlen Mattingley', '31', 'Kensington', 'Female');
insert into person (person_id, full_name, address_number, address_street_name, gender) values ('85-548-7721', 'Silvano Todd', '63', 'Corscot', 'Male');

";

$stmt = db()->exec($query);
