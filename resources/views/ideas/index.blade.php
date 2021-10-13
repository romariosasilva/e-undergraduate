@extends('layout.app')

@section('title', 'Mural de Ideias')

@section('header_page')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-12">
    <h2>Mural de Ideias</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('home.index') }}">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ route('ideas.index') }}">Mural de Ideias</a>
      </li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="container">
      <ul class="notes">
        <li>
          <div>
            <small>08/10/2021 09:12:28</small>
            <h4>The standard chunk of Lorem</h4>
            <p>Ipsum used since the 1500s is reproduced below for those interested.</p>
          </div>
        </li>
        <li>
          <div>
            <small>08/10/2021 10:15:26</small>
            <h4>Ipsum used standard chunk of Lorem</h4>
            <p>Standard chunk is reproduced below for those.</p>
          </div>
        </li>
        <li>
          <div>
            <small>08/10/2021 11:08:33</small>
            <h4>Latin professor at Hampden-Sydney </h4>
            <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
          </div>
        </li><li>
          <div>
            <small>08/10/2021 12:03:28</small>
            <h4>Long established fact</h4>
            <p>The years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
          </div>
        </li>
        <li>
          <div>
            <small>08/10/2021 12:10:12</small>
            <h4>There are many variations</h4>
            <p>All the Lorem Ipsum generators on the Internet .</p>
          </div>
        </li>
        <li>
          <div>
            <small>08/10/2021 15:20:11</small>
            <h4>Contrary to popular belief</h4>
            <p>Hampden-Sydney College in Virginia, looked up one.</p>
          </div>
        </li>
        <li>
          <div>
            <small>08/10/2021 15:33:12</small>
            <h4>The generated Lorem Ipsum </h4>
            <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection