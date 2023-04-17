<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    function getRequest($name = null) {
        echo "Hi {$name}";
    }

    function getJSON() {
        $singleUser = array(
            'name' => 'john doe',
            'email' => 'john@doe.com'
        );

        return $singleUser;
    }

    function getHeader(Request $request) {
        return array(
            'message'=> 'ok',
            'header'=> $request->header('customheader'),
            'myPersonalValue'=> $request->header('myPersonalValue')
        );
    }

    function errorCheck($id) {
        if($id == 1) {
            return array(
                'message'=> 'ok',
                'status'=> 200
            );
        }

        if($id == 2) {
            return response(
                array(
                'message' => 'not ok'),
                400
            );
        }
    }

    function postRequest(Request $request) {
        $name = $request->get('name');
        $age = $request->get('age');

        return array(
            'name' => $name,
            'age' => $age,
            'request-check' => $request
        );
    }

    function putRequest(Request $request, $id) {
        $name = $request->get('name');
        $age = $request->get('age');
        

        return array(
            'id' => $id,
            'name' => $name,
            'age' => $age
        );
    }

    function patchRequest(Request $request, $id) {
        $name = $request->get('name');
        $age = $request->get('age');
        

        return array(
            'id' => $id,
            'name' => $name,
            'age' => $age
        );
    }

    function deleteRequest(Request $request, $id) {
        return array(
            'id' => $id,
        );
    }
}
