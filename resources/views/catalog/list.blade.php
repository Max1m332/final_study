@extends('layouts.default')

@section('title-block')Каталог@endsection

@section('content')
<h1>Каталог</h1>

<table>
  <tr>
    <th>id</th>
    <th>Название товара</th>
    <th>цена товара</th>
    <th>оставшееся количество</th>
  </tr>
  @foreach ($all_products as $item)
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->title}}</td>
    <td>{{$item->price}}</td>
    <td>{{$item->quantity}}</td>
    <td>
      <a href="catalog/{{ $item->id }}/edit" class="btn btn-primary">Редактировать</a>
  </td>
  <td>
    <a href="catalog/{{ $item->id }}/delete" class="btn btn-danger" onclick="return confirm('Хотите удалить товар')">Удалить</a>
  </td>
  </tr>
  @endforeach
  

</table>


<a class="btn btn-primary" href="/catalog/add" role="button">Добавить Товар</a>



@endsection