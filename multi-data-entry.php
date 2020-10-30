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
$query = "insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('18-738-8654', '3558771083932794', '04', 'Tennessee', 35);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('28-935-7973', '3569670998489394', '911', 'Kingsford', 93);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('17-799-6045', '201861666169448', '3871', 'Saint Paul', 90);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('54-015-5523', '5602249171413754', '3', 'Acker', 85);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('14-439-4768', '3544343070170874', '4267', 'Kim', 73);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('29-574-9719', '3542360779216149', '119', 'Mendota', 60);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('36-491-6048', '3560398242196180', '2125', 'Quincy', 21);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('74-901-6360', '201594434704739', '990', 'Thompson', 64);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('76-564-4353', '6706958238785755', '10', 'Raven', 19);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('81-750-2320', '501828363855286687', '837', 'Waywood', 56);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('20-641-4175', '67711989804031170', '0', 'Rockefeller', 20);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('50-856-8056', '374288307456722', '5411', 'Moland', 28);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('91-074-9815', '201686383241133', '7027', 'Daystar', 59);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('91-448-4553', '4041371414632', '63', 'Meadow Valley', 39);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('52-492-3465', '3584654735318661', '0526', 'Emmet', 53);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('24-553-7485', '201962827377076', '8422', 'Linden', 50);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('27-712-7939', '5317294051735641', '8626', 'Tony', 67);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('82-218-4620', '3584490652625360', '923', 'Sunnyside', 92);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('78-589-1027', '3588422759307036', '329', 'Longview', 51);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('68-674-6478', '374288330289629', '93248', 'Farragut', 74);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('46-155-0589', '3551614226608664', '3', 'East', 64);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('02-820-6831', '5602253348471778', '2360', 'Oxford', 26);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('48-004-3295', '5100142008383893', '33727', 'Wayridge', 82);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('90-623-1244', '3528812695344692', '7', 'Miller', 61);
insert into bank (person_id, bank_card_number, address_number, address_street_name, card_pin) values ('28-745-2571', '3583485590287910', '4', 'Scoville', 68);

";

$stmt = db()->exec($query);
