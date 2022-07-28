<?php 
// $notes = [10, 20];
// echo $notes[0];

// $notes = [10, 20, 10, 9, 8,'eleve'];
// echo $notes[5];

// $eleve = ['Moufida','Jlassi', [10, 20, 40]];
// echo $eleve[2][2];

// $sameh =['fatma', 'jlassi', [10, 20, 30, 50]];
// echo $sameh[2][3];

$eleve = [
    'nom'=> 'Doe',
    'prenom'=> 'Marc',
    'notes' => [10, 20, 30]
];
// $eleve['prenom'] = 'john';
// echo $eleve['prenom'] . '  ' . $eleve['nom'] ;
 
$eleve['prenom'] = 'moufida';
$eleve['notes'][3] = 16;
$eleve['notes'][4] = 16;

print_r($eleve['notes']);

?>