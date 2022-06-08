<?php 
include 'Aluno.php';
include 'Curso.php';
include 'Disciplina.php';
include 'Professor.php';

$aluno = new Aluno("Hitsugaya","03151487");
$professor = new Professor("yamammoto");
$curso = new Curso("DevStart");
$disciplina = new Disciplina("Programação Orientada a Objetos");

?> 