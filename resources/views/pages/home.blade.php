@extends('layouts.app')
@section('title', '首页')

@section('content')
  <h1>这里是首页</h1>
  
  <!-- 引入cpi_ppi -->
  <!-- @include('charts._cpi_ppi') -->

  <!-- 引入index -->
  <!-- @include('charts._index') -->

  <!-- 引入test -->
  @include('charts._test')

@stop