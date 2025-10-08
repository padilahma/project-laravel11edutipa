<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f8f4ff, #fefcff, #f5ebff);
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .card {
            background-color: #ffffff;
            width: 85%;
            max-width: 900px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(160, 128, 255, 0.2);
            overflow: hidden;
            animation: fadeIn 0.8s ease;
        }

        .card-header {
            background: linear-gradient(90deg, #9b59b6, #be83f5, #d7b3ff);
            color: white;
            text-align: center;
            padding: 25px 15px;
            font-size: 26px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #f8f1ff;
        }

        th {
            color: #6c2fb8;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid #ede0ff;
        }

        td {
            padding: 14px 15px;
            border-bottom: 1px solid #f0e8ff;
        }

        tbody tr:nth-child(even) {
            background-color: #fbf8ff;
        }

        tbody tr:hover {
            background-color: #f3e8ff;
            transform: scale(1.002);
            transition: all 0.2s ease-in-out;
        }

        th:first-child, td:first-child {
            text-align: center;
        }

        .footer {
            background-color: #f8f1ff;
            text-align: center;
            padding: 18px;
            color: #7a5bbf;
            font-size: 15px;
        }

        .footer span {
            color: #9b59b6;
            font-weight: 600;
        }

        form {
            text-align: center;
            margin: 20px 0;
        }

        input[type="text"] {
            padding: 10px;
            width: 60%;
            border-radius: 8px;
            border: 1px solid #c9a7ff;
        }

        button {
            padding: 10px 20px;
            background-color: #9b59b6;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
        }

        button:hover {
            background-color: #8e44ad;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 600px) {
            .card {
                width: 95%;
            }
            th, td {
                font-size: 14px;
                padding: 10px;
            }
            .card-header {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            📚 Daftar Buku 
        </div>

        <!-- Form kirim pesan -->
        <form action="{{ url('/') }}" method="GET">
            <input type="text" name="message" placeholder="Ketik pesan di sini..." value="{{ request('message') }}">
            <button type="submit">Kirim</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $index => $book)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $book['judul'] }}</td>
                        <td>{{ $book['pengarang'] }}</td>
                        <td>{{ $book['tahun'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            {{ $dataMessage ?? 'Belum ada pesan dikirim 📨' }}
        </div>
    </div>
</body>
</html>
