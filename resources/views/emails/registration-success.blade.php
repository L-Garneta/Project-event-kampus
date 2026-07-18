<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<h2>Terima kasih telah mendaftar.</h2>

<p>Halo <strong>{{ $registration->nama_peserta }}</strong>,</p>

<p>Pendaftaran Anda berhasil.</p>

<hr>

<h3>{{ $event->judul }}</h3>

<p>
Tanggal :
{{ $event->tanggal->format('d F Y') }}
</p>

<p>
Jam :
{{ $event->waktu->format('H:i') }}
WIB
</p>

<p>
Lokasi :
{{ $event->lokasi }}
</p>

<p>
Penyelenggara :
{{ $event->organization->nama_organisasi }}
</p>

<hr>

<p>
Sampai bertemu di acara.
</p>

</body>
</html>