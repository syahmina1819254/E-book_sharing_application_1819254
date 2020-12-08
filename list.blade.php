@extends('subview.master')
@section('title','List of e-book')

@section('content')
<h1>List of e-book</h1>


            @foreach($data as $datas)
            <table>
            <tr>
            <td>Title: {{{ $datas['Title'] }}}</td>
            
            </tr>

            <tr>
            <td>Author: {{{ $datas['Author'] }}}</td>
            </tr>

            <tr>
            <td>ISBN: {{{ $datas['ISBN'] }}}</td>
            </tr>

            <tr>
            <td>Category: {{{ $datas['Category'] }}}</td>
            </tr>

            <tr>
            <td>No. of Page: {{{ $datas['Pages'] }}}</td>
            </tr>
            </table>

            <button>View</button>
            <p>------------------------------------------------------------------------------</p>
            <br>

            
            @endforeach
           

        

@endsection