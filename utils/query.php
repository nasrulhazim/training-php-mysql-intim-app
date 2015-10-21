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

function query($query) {
	global $conn;
	return $conn->exec($query);
}

function execute($sql, $bind) {
	global $conn;
	$sth = $conn->prepare($sql);
	if(!empty($bind)) {
		foreach ($bind as $key => $value) {
			$sth->bindParam(':'.$key, $value);
		}
	}
	// if it's insert statement, 
	// 		return inserted id if successfully insert record
	// else
	// 		just execute the query
	if( (strtoupper(substr($sql, 0, 6))) == 'INSERT' ) {
		if($sth->execute()) {
			return $conn->lastInsertId();
		} else {
			return false;
		}	
	} else {
		return $sth->execute();
	}
}