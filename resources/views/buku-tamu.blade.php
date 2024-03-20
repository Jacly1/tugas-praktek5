@extends('layout.main')
@section('content')

<div style="margin: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    <h2 style="text-align: center; color: #333;">Buku Tamu</h2>
    <form action="/submit_guestbook" method="post">
        @csrf
        <label for="name" style="color: #666;">Nama:</label><br>
        <input type="text" id="name" name="name" style="width: 100%; padding: 5px; margin-bottom: 10px;"><br>
        
        <label for="message" style="color: #666;">Keperluan:</label><br>
        <textarea id="message" name="message" style="width: 100%; padding: 5px; margin-bottom: 10px;"></textarea><br>
        
        <button type="submit" style="background-color: #007bff; color: #fff; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;">Kirim</button>
    </form>
</div>



@endsection