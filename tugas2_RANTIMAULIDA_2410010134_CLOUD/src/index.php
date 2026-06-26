<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Cloud Computing - Ranti Maulida</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #090d16 0%, #111827 100%);
            color: #f8fafc;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        /* Ornamen Lampu Neon di Background */
        body::before {
            content: '';
            position: absolute;
            width: 350px;
            height: 350px;
            background: #a855f7;
            border-radius: 50%;
            filter: blur(130px);
            top: 15%;
            left: 20%;
            opacity: 0.25;
        }

        body::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: #06b6d4;
            border-radius: 50%;
            filter: blur(120px);
            bottom: 15%;
            right: 20%;
            opacity: 0.2;
        }

        /* Kartu Utama Ber-efek Glassmorphism */
        .container {
            background: rgba(30, 41, 59, 0.4);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            padding: 45px 40px;
            width: 90%;
            max-width: 480px;
            text-align: center;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 
                        0 0 40px rgba(168, 85, 247, 0.15);
            z-index: 10;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            border-color: rgba(168, 85, 247, 0.3);
        }

        /* Badge Tugas di Bagian Atas */
        .badge {
            background: linear-gradient(90deg, #a855f7, #06b6d4);
            color: #ffffff;
            padding: 6px 16px;
            border-radius: 100px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 25px;
            box-shadow: 0 4px 20px rgba(168, 85, 247, 0.3);
        }

        h1 {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 6px;
            background: linear-gradient(90deg, #ffffff, #cbd5e1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .subtitle {
            color: #94a3b8;
            font-size: 0.9rem;
            margin-bottom: 35px;
            font-weight: 400;
        }

        /* Box Informasi Detail Identitas */
        .profile-card {
            background: rgba(15, 23, 42, 0.6);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 30px;
            text-align: left;
            border-left: 4px solid #a855f7;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.2);
        }

        .info-group {
            margin-bottom: 16px;
        }

        .info-group:last-child {
            margin-bottom: 0;
        }

        .label {
            font-size: 0.7rem;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 4px;
            display: block;
        }

        .value {
            font-size: 1.05rem;
            color: #e2e8f0;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        /* Status Koneksi Docker dengan Animasi */
        .status-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: #34d399;
            font-weight: 600;
            font-size: 0.85rem;
            background: rgba(52, 211, 153, 0.06);
            padding: 10px 20px;
            border-radius: 12px;
            border: 1px solid rgba(52, 211, 153, 0.15);
            display: inline-flex;
        }

        .pulse-indicator {
            width: 8px;
            height: 8px;
            background-color: #34d399;
            border-radius: 50%;
            box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.7);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.5); }
            70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(52, 211, 153, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(52, 211, 153, 0); }
        }
    </style>
</head>
<body>

    <div class="container">
        <span class="badge">Tugas 2 Cloud Computing</span>
        <h1>Virtual Container</h1>
        <p class="subtitle">Environment: PHP 8.2 + Apache + MySQL Database</p>
        
        <div class="profile-card">
            <div class="info-group">
                <span class="label">Nama Lengkap</span>
                <span class="value" style="color: #f1f5f9; font-size: 1.15rem; font-weight: 700;">RANTI MAULIDA</span>
            </div>
            <div class="info-group" style="margin-top: 16px;">
                <span class="label">NPM</span>
                <span class="value" style="color: #06b6d4; font-family: monospace; font-size: 1.1rem;">2410010134</span>
            </div>
            <div class="info-group" style="margin-top: 16px;">
                <span class="label">Program Studi</span>
                <span class="value">Teknik Informatika</span>
            </div>
            <div class="info-group" style="margin-top: 16px;">
                <span class="label">Kelas & Kampus</span>
                <span class="value">4N Regular Pagi Banjarmasin</span>
            </div>
        </div>

        <div class="status-bar">
            <div class="pulse-indicator"></div>
            <span>Docker Stack Active & Connected</span>
        </div>
    </div>

</body>
</html>