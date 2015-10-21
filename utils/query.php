<?php

function fetchAll($query) {
	global $conn;
	$sth = $conn->prepare($query);
	$sth->execute();

	return $sth->fetchAll();
}

function fetch($query) {
	global $conn;
	$sth = $conn->prepare($query);
	$sth->execute();

	return $sth->fetch(PDO::FETCH_ASSOC);
}