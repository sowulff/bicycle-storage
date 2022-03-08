@extends('layouts.basic')
@section('content')

<?php
if (isset($array)) {
    print_r($array);
} else {
    $array = [];
    echo "it wasnt set";
}
?>

@endsection
