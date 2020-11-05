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
$query = "insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('43-262-5120', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem. Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', 1, 'Cort Limeburner', '2/24/2020', 'Parang');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('13-258-8501', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat. Curabitur gravida nisi at nibh.', 2, 'Winnifred Ashbee', '7/20/2020', 'Shipunovo');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('74-532-4921', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci.', 3, 'Bastien Pelzer', '9/16/2020', 'Piltown');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('32-266-1140', 'Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis.', 4, 'Cindi Grieger', '12/5/2019', 'Linstead');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('91-212-0808', 'Proin at turpis a pede posuere nonummy.', 5, 'Zacharias Hanning', '3/10/2020', 'Hovd');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('87-169-8295', 'Ut tellus. Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 6, 'Kin Hebditch', '5/4/2020', 'Dek’emhāre');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('66-928-2386', 'Proin risus. Praesent lectus. Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.', 7, 'Colette Towlson', '3/13/2020', 'Yotsukaidō');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('94-439-2861', 'Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 8, 'Teressa Kinnerley', '5/25/2020', 'Hongtian');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('88-953-7406', 'In congue. Etiam justo. Etiam pretium iaculis justo.', 9, 'Cobby Currey', '8/5/2020', 'Cuozhou');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('92-992-4223', 'Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 10, 'Padraig Sennett', '7/28/2020', 'Tiaong');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('20-289-7882', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum. Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 11, 'Kayley McCarlie', '4/4/2020', 'Xinzheng');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('17-189-4098', 'Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus. Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat. Curabitur gravida nisi at nibh.', 12, 'Micheline Brooke', '1/3/2020', 'Gudang');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('95-182-4530', 'Nulla ac enim.', 13, 'Laryssa Quigg', '8/26/2020', 'Oranjestad');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('56-398-5503', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque. Duis bibendum.', 14, 'Raymond Shier', '3/2/2020', 'Mozhaysk');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('38-822-3544', 'Morbi non quam nec dui luctus rutrum. Nulla tellus. In sagittis dui vel nisl. Duis ac nibh.', 15, 'Curtice Derry', '1/10/2020', 'Renyi');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('97-891-2432', 'Nunc purus. Phasellus in felis. Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis.', 16, 'Meredithe Menlove', '8/11/2020', 'Jilong');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('06-161-6551', 'Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh. In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam.', 17, 'Bo Lestor', '10/25/2020', 'Farshūţ');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('13-710-7045', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum. Proin eu mi.', 18, 'Nessa Crux', '7/8/2020', 'Liuji');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('09-744-5275', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus. Pellentesque eget nunc.', 19, 'Danya McNish', '4/15/2020', 'Maniowy');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('58-999-7995', 'Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem. Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 20, 'Mariellen Gedling', '10/5/2020', 'Simnas');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('14-887-6768', 'Nulla justo. Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros.', 21, 'Jerrie Skipsey', '5/22/2020', 'Donostia-San Sebastian');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('31-832-6953', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 22, 'Beale Doudny', '12/26/2019', 'Sunnyvale');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('29-649-0192', 'In eleifend quam a odio. In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat. Curabitur gravida nisi at nibh. In hac habitasse platea dictumst.', 23, 'Hamlen Gierardi', '3/15/2020', 'Chlumčany');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('40-251-5749', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum. Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 24, 'Marnia Blackett', '7/7/2020', 'Las Vegas');
insert into interview (person_id, transcript, case_id , witness_name, date, city) values ('76-439-8625', 'Nullam molestie nibh in lectus. Pellentesque at nulla. Suspendisse potenti.', 25, 'Eileen Legan', '12/12/2019', 'Alannay');

";

$stmt = db()->exec($query);
