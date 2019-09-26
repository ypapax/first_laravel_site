@extends('layout')
@section('title')
    Welcome
@endsection
@section('content')
    <h1>Welcome {{$foo}} {{$name}}</h1>
    <ul>
			<?php foreach ($tasks as $task) : ?>
        <li><?= $task; ?></li>
			<?php endforeach; ?>
    </ul>
@endsection

