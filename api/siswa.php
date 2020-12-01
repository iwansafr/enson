<?php
include_once('db.php');
if (!empty($_GET['kelas'])) {
  $result = $db->prepare('SELECT * FROM siswa WHERE kelas = ?');
  $result->bind_param('s', $_GET['kelas']);
  $result->execute();
  $result = $result->get_result();
} else if (!empty($_GET['nis'])) {
  $result = $db->prepare('SELECT * FROM siswa WHERE nis = ?');
  $result->bind_param('s', $_GET['nis']);
  $result->execute();
  $result = $result->get_result();
} else {
  $result = $db->query('SELECT * FROM siswa');
}

$data;
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}
if(empty($data))
{
  $data[] = ['id'=>'0','nama'=>'Tidak Ada Data Siswa','nis'=>'0'];
}
echo json_encode($data);
