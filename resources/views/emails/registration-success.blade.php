<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<style>
body{
    margin:0;
    padding:30px;
    background:#f4f6f9;
    font-family:Arial,Helvetica,sans-serif;
}

.container{
    max-width:650px;
    margin:auto;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

.header{
    background:#0d6efd;
    color:white;
    text-align:center;
    padding:35px;
}

.header h1{
    margin:0;
}

.poster img{
    width:100%;
    display:block;
}

.content{
    padding:30px;
}

.info{
    background:#f8f9fa;
    border-radius:10px;
    padding:20px;
    margin:25px 0;
}

.info table{
    width:100%;
}

.info td{
    padding:8px 0;
}

.button{
    display:inline-block;
    background:#0d6efd;
    color:white!important;
    text-decoration:none;
    padding:15px 30px;
    border-radius:8px;
    margin-top:20px;
}

.footer{
    background:#f8f9fa;
    text-align:center;
    color:#777;
    padding:20px;
    font-size:13px;
}
</style>

</head>

<body>

<div class="container">

<div class="header">

<h1>🎉 Pendaftaran Berhasil</h1>

<p>Campus Event Management System</p>

</div>

@if($event->poster)

<div class="poster">

<img src="{{ asset('storage/'.$event->poster) }}">

</div>

@endif

<div class="content">

<h2>Halo, {{ $registration->nama_peserta }} 👋</h2>

<p>
Terima kasih telah melakukan pendaftaran.
Kami senang Anda akan bergabung pada event berikut.
</p>

<div class="info">

<table>

<tr>
<td><strong>📚 Event</strong></td>
<td>{{ $event->judul }}</td>
</tr>

<tr>
<td><strong>📅 Tanggal</strong></td>
<td>{{ $event->tanggal->format('d F Y') }}</td>
</tr>

<tr>
<td><strong>🕒 Waktu</strong></td>
<td>{{ $event->waktu->format('H:i') }} WIB</td>
</tr>

<tr>
<td><strong>📍 Lokasi</strong></td>
<td>{{ $event->lokasi }}</td>
</tr>

<tr>
<td><strong>🏢 Penyelenggara</strong></td>
<td>{{ $event->organization->nama_organisasi }}</td>
</tr>

<tr>
<td><strong>👤 Peserta</strong></td>
<td>{{ $registration->nama_peserta }}</td>
</tr>

</table>

</div>

<h3>📌 Sebelum Datang</h3>

<ul>
<li>Datang minimal 30 menit sebelum acara.</li>
<li>Bawa KTM/KTP jika diperlukan.</li>
<li>Simpan email ini sebagai bukti pendaftaran.</li>
</ul>

<a href="{{ url('/') }}" class="button">
Lihat Event Lainnya
</a>

</div>

<div class="footer">

© {{ date('Y') }} Campus Event Management System

</div>

</div>

</body>

</html>