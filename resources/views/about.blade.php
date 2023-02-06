@extends('layouts.layout')
@php
   \Carbon\Carbon::setLocale('id');
@endphp

@section('content')
<div class="about">
    <section style="text-align:center; display:flex; flex-direction:column; align-items:center; justify-content:space-around;">
      <div style="margin-bottom:20px">
        <img src="{{asset('img/default.jpeg')}}" alt="" class="profile_img">
        @auth
        <h1>
            {{ auth()->user()->name }}
        </h1>
        <small>{{auth()->user()->username}}</small><br>
        @else
        <h1>Yasya Indra
            {{ 1 ? '✅' : ''}}
        </h1>
        @endauth
        <small>Bergabung Sejak {{ auth()->user()->created_at->diffForHumans()}}</small>
      </div>
        <div class="section_tabel">
          <h4 style="text-align: left; margin-bottom:6px">
            <a href="/dashboard">
              Dashboard
            </a>
          </h4>
            <table class="data_tabel">
                <tr>
                  <th>Pekerjaan</th>
                  <th>Email</th>
                  <th>Jumlah Post</th>
                </tr>
                <tr>
                  <td>{{auth()->user()->job}}</td>
                  <td>{{auth()->user()->email}}</td>
                  <td>
                    <a href="/posts?user={{auth()->user()->username}}">
                      {{$count}}
                    </a>
                  </td>
                </tr>
              </table>
        </div>
    </section>
</div>
@endsection