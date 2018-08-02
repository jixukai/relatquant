@extends('layouts.app')
@section('title', '首页')

@section('content')
  <h1>这里是首页</h1>
  
  <!-- 引入_cpi_ppi_chart -->
  @include('charts._cpi_ppi')

  <!-- 引入_index_chart -->
  @include('charts._index')

@stop