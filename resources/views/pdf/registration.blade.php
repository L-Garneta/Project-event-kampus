<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <style>

        body{
            font-family: DejaVu Sans, sans-serif;
            color:#222;
            font-size:13px;
        }

        .header{
            background:#2563EB;
            color:white;
            padding:20px;
        }

        .header h1{
            margin:0;
            font-size:26px;
        }

        .subtitle{
            margin-top:5px;
            font-size:14px;
        }

        .section{
            padding:25px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        td{
            padding:8px 0;
        }

        .label{
            width:170px;
            font-weight:bold;
            color:#555;
        }

        .status{

            display:inline-block;
            padding:6px 15px;
            background:#16A34A;
            color:white;
            border-radius:20px;
            font-size:12px;

        }

        .poster{

            width:180px;
            border-radius:10px;

        }

        .box{

            border:1px solid #ddd;
            padding:15px;
            border-radius:8px;
            margin-top:20px;

        }

        .footer{

            margin-top:40px;
            text-align:center;
            font-size:11px;
            color:#888;

        }

    </style>

</head>

<body>

<div class="header">

    <h1>Campus Event</h1>

    <div class="subtitle">

        Bukti Registrasi Event

    </div>

</div>

<div class="section">

    <table>

        <tr>

            <td style="width:65%">

                <table>

                    <tr>

                        <td class="label">Nomor Registrasi</td>

                        <td>
                            REG-{{ $registration->created_at->format('Ymd') }}-{{ str_pad($registration->id,6,'0',STR_PAD_LEFT) }}
                        </td>

                    </tr>

                    <tr>

                        <td class="label">Nama</td>

                        <td>{{ $registration->nama_peserta }}</td>

                    </tr>

                    <tr>

                        <td class="label">Email</td>

                        <td>{{ $registration->email }}</td>

                    </tr>

                    <tr>

                        <td class="label">No HP</td>

                        <td>{{ $registration->no_hp }}</td>

                    </tr>

                    <tr>

                        <td class="label">Instansi</td>

                        <td>{{ $registration->instansi }}</td>

                    </tr>

                </table>

            </td>

            <td align="right">

                @if($registration->event->poster)

                    <img class="poster"
                    src="{{ public_path('storage/'.$registration->event->poster) }}">

                @endif

            </td>

        </tr>

    </table>

    <div class="box">

        <h3 style="margin-top:0">

            Informasi Event

        </h3>

        <table>

            <tr>

                <td class="label">Judul Event</td>

                <td>{{ $registration->event->judul }}</td>

            </tr>

            <tr>

                <td class="label">Kategori</td>

                <td>{{ $registration->event->category->nama_kategori }}</td>

            </tr>

            <tr>

                <td class="label">Tanggal</td>

                <td>{{ $registration->event->tanggal->format('d F Y') }}</td>

            </tr>

            <tr>

                <td class="label">Jam</td>

                <td>{{ $registration->event->waktu }}</td>

            </tr>

            <tr>

                <td class="label">Lokasi</td>

                <td>{{ $registration->event->lokasi }}</td>

            </tr>

            <tr>

                <td class="label">Status</td>

                <td>

                    <span class="status">

                        {{ $registration->status }}

                    </span>

                </td>

            </tr>

        </table>

    </div>

    <div class="footer">

        Campus Event Management System<br>

        Universitas Dian Nuswantoro

    </div>

</div>

</body>

</html>