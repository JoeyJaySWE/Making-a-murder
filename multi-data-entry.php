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
$query = "insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (55, '1/31/2020', '6331106484979739', 62, '2.199.203.28', 'Goat - Whole Cut');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (79, '5/24/2020', '30416327447571', 54, '214.118.205.195', 'Danishes - Mini Raspberry');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (11, '9/22/2020', '3548128021407392', 22, '244.91.9.230', 'Placemat - Scallop, White');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (85, '1/21/2020', '3587552928837918', 7, '50.122.211.246', 'Bagel - Plain');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (86, '2/21/2020', '374014845869303', 39, '195.112.120.195', 'Beans - Kidney, Red Dry');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (39, '8/26/2020', '670638723605399002', 61, '88.230.243.24', 'Sauce - Gravy, Au Jus, Mix');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (82, '9/16/2020', '6762358133311915306', 30, '106.175.34.135', 'Fish - Halibut, Cold Smoked');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (3, '1/11/2020', '3571142794336423', 21, '5.70.188.189', 'Coffee Cup 16oz Foam');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (12, '5/10/2020', '5436468458240662', 41, '30.134.108.139', 'Juice - Clamato, 341 Ml');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (77, '10/8/2020', '3578498805115666', 96, '133.164.251.171', 'Napkin - Cocktail,beige 2 - Ply');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (95, '2/21/2020', '3538341125472475', 5, '174.142.59.195', 'Wine - Red, Concha Y Toro');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (29, '7/10/2020', '3538436480408450', 6, '206.133.74.63', 'Cinnamon Buns Sticky');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (96, '12/12/2019', '3585229232206054', 62, '234.36.49.86', 'Juice - Ocean Spray Cranberry');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (76, '5/25/2020', '4844523682780906', 53, '100.35.111.163', 'Sesame Seed Black');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (70, '6/5/2020', '4508983189194703', 91, '242.166.39.228', 'Irish Cream - Butterscotch');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (10, '11/11/2019', '3535384571719166', 81, '199.45.100.188', 'Tomatillo');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (15, '6/16/2020', '6767364626864951637', 16, '248.40.115.222', 'Mushroom Morel Fresh');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (23, '2/1/2020', '201489868858335', 73, '223.223.159.237', 'Juice Peach Nectar');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (91, '3/5/2020', '3546166819694468', 97, '194.115.115.51', 'Sausage - Meat');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (46, '12/28/2019', '30463162172658', 40, '29.97.190.194', 'Pike - Frozen Fillet');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (18, '9/29/2020', '3579933288501023', 31, '116.108.160.214', 'Juice - Apple Cider');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (87, '12/8/2019', '201992199240511', 44, '240.8.194.203', 'Pork - Loin, Bone - In');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (43, '9/26/2020', '3574216379878079', 9, '153.201.190.120', 'Shrimp - 100 / 200 Cold Water');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (58, '8/13/2020', '5100141323813311', 57, '117.198.65.4', 'Port - 74 Brights');
insert into receipt_cafeteria (id, date_of_transaction, bank_card_number, total_cost, sales_id, items) values (64, '5/4/2020', '5108757004953357', 26, '12.46.176.153', 'Wine - Zinfandel California 2002');
";

$stmt = db()->exec($query);
