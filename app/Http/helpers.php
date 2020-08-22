<?php

/**
 * set status of users
 *
 * @param $userName
 *
 * @param $newStatus
 *
 * @return array
 */
function setStatus($userName = [], $newStatus = [])
{
	$status = ['active', 'rejected', 'deactive']; #default status.
	$status = array_merge($status, $newStatus); #merge two status.

    $names = ['Aman', 'Rahul', 'Raju', 'Chaman', 'Sohel', 'Rahu']; #default users.
    $names = array_merge($names, $userName); #merge two arrays.
    $count = sizeof($names); #size of names.

    $arr = []; #null array

    #using loof random status array manage.
    for ($i=0; $i <= $count; $i++) {
        foreach ($status as $key => $v) {
            $arr[] = $v;
        }
    }


    #slice status as size of name.
    $status = array_slice($arr, 0, $count);
    return array_combine($names,$status);
}