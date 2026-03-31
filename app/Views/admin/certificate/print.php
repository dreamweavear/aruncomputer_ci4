<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificate – <?= esc($student['name']) ?></title>
    <style>
        *, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }

        /* ── Screen wrapper ── */
        body {
            background: #90a4ae;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px 20px 50px;
            font-family: 'Times New Roman', Times, serif;
        }

        /* ── Controls ── */
        .no-print { display:flex; gap:12px; margin-bottom:24px; }
        .btn-print {
            background:#1a237e; color:#fff; border:none;
            padding:11px 32px; font-size:14px; border-radius:6px;
            cursor:pointer; font-family:Arial,sans-serif; font-weight:600;
        }
        .btn-print:hover { background:#283593; }
        .btn-back {
            background:#455a64; color:#fff; border:none;
            padding:11px 32px; font-size:14px; border-radius:6px;
            cursor:pointer; text-decoration:none; font-family:Arial,sans-serif;
        }
        .badge-dup {
            background:#c62828; color:#fff;
            padding:11px 20px; border-radius:6px;
            font-family:Arial,sans-serif; font-size:13px; font-weight:600;
        }

        /* ════════════════════════════════════════════
           CERTIFICATE  —  A4 Landscape  297 × 210 mm
        ════════════════════════════════════════════ */
        .certificate {
            position: relative;
            width:  297mm;
            height: 210mm;      /* fixed A4 landscape height */
            background: #ffffff;
            box-shadow: 0 10px 40px rgba(0,0,0,.45);
            border: 5px solid #1a237e;
            overflow: hidden;
        }

        /* inner decorative border */
        .frame {
            position:absolute; inset:9px;
            border:1.5px solid #3949ab;
            pointer-events:none; z-index:1;
        }

        /* ── Corner ornaments ── */
        .orn { position:absolute; width:58px; height:58px; z-index:10; }
        .orn::before {
            content:''; position:absolute; inset:0;
            border-top:4px solid #1a237e; border-left:4px solid #1a237e;
            border-radius:5px 0 0 0;
        }
        .orn::after {
            content:''; position:absolute; top:11px; left:11px;
            width:32px; height:32px;
            border-top:2px solid #3949ab; border-left:2px solid #3949ab;
            border-radius:14px 0 0 0;
        }
        .orn .d1 { position:absolute; top:-2px; left:-2px; width:11px; height:11px; background:#1a237e; border-radius:50%; }
        .orn .d2 { position:absolute; top:10px; left:10px; width:7px; height:7px; background:#3949ab; border-radius:50%; }
        .orn.tl { top:5px;    left:5px; }
        .orn.tr { top:5px;    right:5px;  transform:scaleX(-1); }
        .orn.bl { bottom:5px; left:5px;   transform:scaleY(-1); }
        .orn.br { bottom:5px; right:5px;  transform:scale(-1,-1); }

        /* ── Duplicate watermark ── */
        <?php if (!empty($certificate['is_duplicate']) && $certificate['is_duplicate']): ?>
        .watermark {
            position:absolute; top:50%; left:50%;
            transform:translate(-50%,-50%) rotate(-35deg);
            font-size:110px; font-family:Arial,sans-serif;
            font-weight:900; color:rgba(220,53,69,.08);
            white-space:nowrap; pointer-events:none; z-index:0; letter-spacing:12px;
        }
        <?php endif; ?>

        /* ════════════════════════════════════════════
           PAGE LAYOUT  — space-between fills 210mm
        ════════════════════════════════════════════ */
        .cert-page {
            position: relative; z-index:3;
            width:100%; height:100%;
            padding: 10mm 14mm 8mm;   /* top / sides / bottom inside border */
            display: flex;
            flex-direction: column;
            justify-content: space-between;  /* ① header  ② meta  ③ body  ④ footer spread */
        }

        /* ══════════
           ① HEADER
        ══════════ */
        .header {
            display:flex; align-items:center; gap:14px;
            padding-bottom:5mm;
            border-bottom:2.5px solid #1a237e;
            flex-shrink:0;
        }
        .logo-ring {
            flex-shrink:0; width:70px; height:70px;
            border:2.5px solid #1a237e; border-radius:50%; overflow:hidden;
        }
        .logo-ring img { width:100%; height:100%; object-fit:cover; display:block; }
        .inst-center  { flex:1; text-align:center; line-height:1.35; }
        .inst-name    { font-size:23pt; font-weight:900; color:#1a237e; letter-spacing:3px; text-transform:uppercase; }
        .inst-sub     { font-size:9.5pt; color:#37474f; margin-top:3px; }
        .inst-addr    { font-size:9pt;   color:#546e7a; margin-top:2px; }
        .inst-tel     { font-size:9pt;   color:#546e7a; margin-top:1px; }
        .reg-no       { flex-shrink:0; font-size:10pt; font-family:Arial,sans-serif; color:#1a237e; font-weight:700; text-align:right; white-space:nowrap; }

        /* ══════════════════════════════
           ② CERT NO / ROLL NO + TITLE
        ══════════════════════════════ */
        .meta-title-row {
            display:flex;
            align-items:center;
            flex-shrink:0;
        }

        /* FIX P5 — clean two-line left block */
        .meta-left {
            width: 210px;
            font-family: Arial, sans-serif;
            color: #222;
            flex-shrink: 0;
        }
        .meta-left .meta-row {
            display: block;
            font-size: 11pt;
            line-height: 1.8;
        }
        .meta-left .lbl { font-weight:600; color:#444; }
        .meta-left .val {
            font-weight:700; color:#1a237e;
            border-bottom:1px dotted #666;
            padding: 0 6px;
            display: inline-block;
            min-width: 130px;
        }

        .title-center { flex:1; text-align:center; }
        .cert-title-word {
            font-size:20pt; font-weight:900; color:#1a237e;
            text-decoration:underline; text-underline-offset:5px;
            letter-spacing:2px; text-transform:uppercase; line-height:1.2;
        }
        .meta-right { width:210px; flex-shrink:0; }

        /* ══════════════════════════════
           ③ BODY TEXT
        ══════════════════════════════ */
        .body-text {
            flex:1;
            display:flex;
            flex-direction:column;
            justify-content: space-evenly;   /* spreads lines to fill available height */
            align-items:center;
            padding: 2mm 8mm;
            font-size:13pt;
            color:#111;
            text-align:center;
            line-height:1.3;
        }

        .body-text p { margin:0; }

        /* value styles */
        .b-name  { font-weight:900; font-size:15pt; color:#1a237e; text-transform:uppercase; }
        .b-fname { font-weight:700; font-size:14pt;  text-transform:uppercase; }
        .b-bold  { font-weight:700; font-size:13pt; }
        .b-grade { font-weight:900; font-size:17pt; color:#1a237e; }
        .b-date  { font-weight:700; }

        /* ── Marks table (FIX P1) ── */
        .marks-wrap {
            display:flex;
            justify-content:center;
            width:100%;
        }
        .marks-table {
            width: 70%;
            min-width: 400px;
            border-collapse: collapse;
            font-size: 10.5pt;
            font-family: Arial, sans-serif;
            table-layout: fixed;   /* equal column widths */
        }
        .marks-table th, .marks-table td {
            border: 1px solid #3949ab;
            padding: 7px 10px;     /* proper cell padding */
            text-align: center;
        }
        .marks-table thead tr {
            background: #dce4f5;   /* light blue header */
            color: #1a237e;
            font-weight: 700;
        }
        .marks-table tbody tr:last-child td {
            font-weight: 700;
            background: #f0f2ff;
        }
        .marks-table .lbl { text-align:left; font-weight:600; }

        /* ══════════════════════════════
           ④ FOOTER  (FIX P4)
        ══════════════════════════════ */
        .footer {
            flex-shrink:0;
            border-top:1.5px solid #7986cb;
            padding-top:5px;
        }
        .sig-row {
            display:flex;
            justify-content:space-between;
            align-items:flex-end;
        }
        .sig-block { text-align:center; }
        .sig-line  { width:130px; height:1.5px; background:#1a237e; margin:0 auto 5px; }
        .sig-lbl   { font-size:11.5pt; font-weight:700; font-family:Arial,sans-serif; color:#1a237e; letter-spacing:1px; }
        .sig-org   { font-size:9pt; font-family:Arial,sans-serif; color:#546e7a; margin-top:1px; }

        .grading {
            text-align:center;
            font-size:8pt; font-family:Arial,sans-serif;
            color:#37474f; line-height:1.75;
        }
        .grading strong { font-size:8.5pt; color:#1a237e; }

        /* ════════════════════
           PRINT
        ════════════════════ */
        @media print {
            .no-print { display:none !important; }
            body { background:none; margin:0; padding:0; }

            @page { size: A4 landscape; margin:0; }

            .certificate {
                box-shadow:none;
                width:297mm; height:210mm;
                border:5px solid #1a237e !important;
                -webkit-print-color-adjust:exact;
                print-color-adjust:exact;
            }
            .marks-table th, .marks-table td {
                border:1px solid #3949ab !important;
            }
            .marks-table thead tr { background:#dce4f5 !important; }
        }
    </style>
</head>
<body>

<!-- Controls -->
<div class="no-print">
    <button class="btn-print" onclick="window.print()">&#128438;&nbsp; Print / Save PDF</button>
    <a class="btn-back" href="javascript:history.back()">&#8592;&nbsp; Back</a>
    <?php if (!empty($certificate['is_duplicate']) && $certificate['is_duplicate']): ?>
        <span class="badge-dup">DUPLICATE &mdash; Copy #<?= (int)$certificate['duplicate_count'] ?></span>
    <?php endif; ?>
</div>

<!-- ═════════════════  CERTIFICATE  ═════════════════ -->
<div class="certificate">

    <div class="frame"></div>

    <div class="orn tl"><div class="d1"></div><div class="d2"></div></div>
    <div class="orn tr"><div class="d1"></div><div class="d2"></div></div>
    <div class="orn bl"><div class="d1"></div><div class="d2"></div></div>
    <div class="orn br"><div class="d1"></div><div class="d2"></div></div>

    <?php if (!empty($certificate['is_duplicate']) && $certificate['is_duplicate']): ?>
        <div class="watermark">DUPLICATE</div>
    <?php endif; ?>

    <div class="cert-page">

        <!-- ══ ① HEADER ══ -->
        <div class="header">
            <div class="logo-ring">
                <img src="<?= base_url('assets/images/logo.jpg') ?>"
                     alt="Logo"
                     onerror="this.src='<?= base_url('assets/images/logo.webp') ?>'">
            </div>
            <div class="inst-center">
                <div class="inst-name">Arun Computer Education Centre</div>
                <div class="inst-sub">Regd. under "MASES", Education Society, Govt. of Madhya Pradesh</div>
                <div class="inst-addr">Beside Badrika Motors, N.H.-7, Urrahat, Rewa 486 001 (M.P.)</div>
                <div class="inst-tel">Tel : 07662-253680 &nbsp;&nbsp;&nbsp; E-mail : aruncomputersrewa@yahoo.com</div>
            </div>
            <div class="reg-no">Registration No. RS 5854</div>
        </div>

        <!-- ══ ② CERT NO + TITLE  (FIX P5) ══ -->
        <div class="meta-title-row">

            <div class="meta-left">
                <div class="meta-row">
                    <span class="lbl">Certificate No. :</span>
                    <span class="val"><?= esc($certificate['certificate_no']) ?></span>
                </div>
                <div class="meta-row">
                    <span class="lbl">Roll No. :</span>
                    <span class="val"><?= esc($student['id']) ?></span>
                </div>
            </div>

            <div class="title-center">
                <div class="cert-title-word">Certificate of Completion</div>
            </div>

            <div class="meta-right"></div>
        </div>

        <!-- ══ ③ BODY TEXT  (FIX P2 + P3) ══ -->
        <div class="body-text">

            <p>This is to certify that Shri / Smt. / Ku.</p>

            <p><span class="b-name"><?= esc(strtoupper($student['name'])) ?></span></p>

            <p>Son / Daughter / Wife of</p>

            <p><span class="b-fname"><?= esc(strtoupper($student['father_name'])) ?></span></p>

            <p>
                has successfully completed&nbsp;
                <span class="b-bold"><?= (int)$duration ?> Month</span>
                &nbsp;<span class="b-bold"><?= esc(strtoupper($student['course'])) ?></span>&nbsp;course
                imparted by this institute from&nbsp;
                <span class="b-bold"><?= esc($start_date) ?></span>
                &nbsp;to&nbsp;
                <span class="b-bold"><?= esc($end_date) ?></span>
            </p>

            <!-- MARKS TABLE  (FIX P1) -->
            <div class="marks-wrap">
                <table class="marks-table">
                    <thead>
                        <tr>
                            <th class="lbl">Subject</th>
                            <th>Max Marks</th>
                            <th>Marks Obtained</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="lbl">Theory</td>
                            <td>50</td>
                            <td><?= esc($result['theory_marks']) ?></td>
                        </tr>
                        <tr>
                            <td class="lbl">Practical</td>
                            <td>50</td>
                            <td><?= esc($result['practical_marks']) ?></td>
                        </tr>
                        <tr>
                            <td class="lbl">Total</td>
                            <td>100</td>
                            <td><?= esc($result['total_marks']) ?></td>
                        </tr>
                        <tr>
                            <td class="lbl">Percentage</td>
                            <td>&mdash;</td>
                            <td><?= esc($result['percentage']) ?>%</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- FIX P3 — grade line with full sentence -->
            <p>
                he / she has completed the above mentioned course with Grade :&nbsp;
                <span class="b-grade"><?= esc($result['grade']) ?> &mdash; <?= esc($grade_label) ?></span>
            </p>

            <p>Date :&nbsp;<span class="b-date"><?= date('d M Y', strtotime($certificate['issue_date'])) ?></span></p>

        </div>

        <!-- ══ ④ FOOTER  (FIX P4) ══ -->
        <div class="footer">
            <div class="sig-row">

                <div class="sig-block">
                    <div class="sig-line"></div>
                    <div class="sig-lbl">PRINCIPAL</div>
                    <div class="sig-org">Arun Computer Education</div>
                </div>

                <div class="grading">
                    <strong>GRADING :</strong>&nbsp;
                    A+ &ndash; Excellent (75% &amp; Above)&nbsp;&nbsp;
                    A &ndash; Very Good (65% to 74.9%)&nbsp;&nbsp;
                    B &ndash; Good (55% to 64.9%)<br>
                    C &ndash; Fair (45% to 54.9%)&nbsp;&nbsp;
                    D &ndash; Satisfactory (35% to 44.9%)&nbsp;&nbsp;
                    F &ndash; Fail (Below 35%)
                </div>

                <div class="sig-block">
                    <div class="sig-line"></div>
                    <div class="sig-lbl">DIRECTOR</div>
                    <div class="sig-org">Arun Computer Education</div>
                </div>

            </div>
        </div>

    </div><!-- /cert-page -->
</div><!-- /certificate -->

</body>
</html>
