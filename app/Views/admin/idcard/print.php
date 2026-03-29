<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student ID Cards – Arun Computer Institute</title>
<style>
*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

body { font-family: Arial, Helvetica, sans-serif; background: #c8c8c8; }

/* ── SCREEN CONTROLS ── */
.controls { text-align: center; padding: 14px; background: #333; }
.btn-print {
    padding: 10px 36px; background: #1a73e8; color: #fff;
    border: none; border-radius: 4px; font-size: 15px;
    font-weight: bold; cursor: pointer; margin-right: 10px;
}
.btn-back {
    padding: 10px 24px; background: #555; color: #fff;
    border: none; border-radius: 4px; font-size: 14px;
    cursor: pointer; text-decoration: none; display: inline-block;
}
.btn-print:hover { background: #1558b0; }
.btn-back:hover  { background: #333; }

/* ── A4 PAGE ── */
.a4-page {
    width: 210mm;
    min-height: 297mm;
    background: #fff;
    margin: 18px auto;
    padding: 8mm;
    box-shadow: 0 4px 20px rgba(0,0,0,0.4);
    display: flex;
    flex-wrap: wrap;
    align-content: flex-start;
    gap: 4mm 5mm;
}

/* ══════════════════════════════════════════
   ID CARD  –  88.9 mm × 50.8 mm  (3.5"×2")
   ══════════════════════════════════════════ */
.id-card {
    width: 88.9mm;
    height: 50.8mm;
    border: 1.5px dashed #555;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    background: #fff;
    page-break-inside: avoid;
    break-inside: avoid;
}

/* ────────────── HEADER ────────────── */
.card-header {
    background: #1a5fa0;
    border-bottom: 1px solid #144d8a;
    height: 14.5mm;
    display: flex;
    align-items: stretch;        /* ① children stretch to full header height */
    padding: 0 2mm 0 0;          /* no top/bottom padding; right gap for text */
    flex-shrink: 0;
}

/* ① Logo – full header height */
.card-header .logo {
    height: 100%;                /* fills 14.5mm */
    width: auto;
    max-width: 20mm;
    object-fit: contain;
    flex-shrink: 0;
    margin-right: 2mm;
    display: block;
}

.card-header .logo-placeholder {
    height: 100%;
    width: 14mm;
    background: #144d8a;
    flex-shrink: 0;
    margin-right: 2mm;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 5pt;
    font-weight: bold;
    text-align: center;
}

/* ② Header text – vertically + horizontally centred */
.hdr-text {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;     /* vertical centre */
    align-items: center;         /* horizontal centre */
    text-align: center;
    min-width: 0;
}

.institute-name {
    font-size: 12pt;
    font-weight: bold;
    color: #ffffff;
    line-height: 1.1;
    letter-spacing: -0.01em;
    white-space: nowrap;
}

.institute-sub {
    font-size: 6pt;
    color: rgba(255,255,255,0.92);
    line-height: 1.2;
    margin-top: 1mm;
    white-space: nowrap;
}

/* ────────────── CARD MAIN (flex row) ────────────── */
.card-main {
    flex: 1;
    display: flex;
    overflow: hidden;
}

/* ── LEFT COLUMN: fields + footer ── */
.card-left {
    flex: 1;
    display: flex;
    flex-direction: column;
    min-width: 0;
}

.card-fields {
    flex: 1;
    padding: 1mm 1.5mm 0.5mm 2mm;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

/* Name row: name on left, ID badge on right (photo-aligned) */
.row-name {
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    line-height: 1.2;
}

.name-left {
    display: flex;
    align-items: baseline;
    flex: 1;
    min-width: 0;
}

.sid-badge {
    font-size: 5pt;
    color: #000;
    font-weight: bold;
    white-space: nowrap;
    flex-shrink: 0;
    margin-left: 1mm;
    align-self: flex-end;
}

/* Normal field rows */
.field-row {
    display: flex;
    align-items: baseline;
    line-height: 1.2;
}

.f-label {
    font-size: 6pt;
    font-weight: bold;
    color: #000;
    white-space: nowrap;
    min-width: 15mm;
    flex-shrink: 0;
}

.f-value {
    font-size: 6.5pt;
    font-weight: 600;
    color: #000;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.row-name .f-value   { font-size: 8pt;  font-weight: bold; }
.row-mobile .f-value { font-size: 8pt;  font-weight: bold; letter-spacing: 0.02em; }

/* ⑤ Footer – same blue as header, white text, left-aligned, max font */
.card-addr {
    background: #1a5fa0;
    border-top: 1px solid #144d8a;
    height: 6mm;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    padding: 0 2mm;
}

.card-addr span {
    font-size: 9.5pt;            /* as large as fits width + height */
    font-weight: bold;
    color: #fff;
    white-space: nowrap;
    line-height: 1;
}

/* ── RIGHT COLUMN: photo + signature ── */
.card-right {
    width: 21mm;
    flex-shrink: 0;
    border-left: 1px solid #ccc;
    display: flex;
    flex-direction: column;
}

.card-photo-wrap {
    flex: 1;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    padding: 1mm 1mm 0;
}

.card-photo-wrap img {
    width: 18.5mm;
    height: 23mm;
    object-fit: cover;
    border: 1px solid #aaa;
    display: block;
}

.no-photo {
    width: 18.5mm;
    height: 23mm;
    border: 1px dashed #999;
    background: #eee;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 4pt;
    color: #777;
    text-align: center;
}

/* ⑤ Signature block */
.card-sig {
    flex-shrink: 0;
    border-top: 1px solid #bbb;
    padding: 0.8mm 1mm;
    text-align: center;
    background: #fafafa;
}

/* Single line italic name – smaller font to fit */
.sig-name {
    font-size: 3.5pt;
    font-style: italic;
    font-weight: bold;
    color: #000;
    white-space: nowrap;
    line-height: 1.2;
}

.sig-label {
    font-size: 6pt;
    font-weight: bold;
    color: #000;
    margin-top: 0.5mm;
    letter-spacing: 0.03em;
}

/* ── PRINT ── */
@media print {
    *, *::before, *::after {
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
        color-adjust: exact !important;
    }
    body { background: white; }
    .controls { display: none !important; }

    @page { size: A4 portrait; margin: 8mm; }

    .a4-page {
        width: 100%; min-height: auto;
        margin: 0; padding: 0;
        box-shadow: none;
        gap: 3.5mm 5mm;
    }
    .id-card { page-break-inside: avoid; break-inside: avoid; }
}
</style>
</head>
<body>

<div class="controls">
    <button class="btn-print" onclick="window.print()">&#128438; Print ID Cards</button>
    <a class="btn-back" href="javascript:history.back()">&#8592; Back</a>
</div>

<div class="a4-page">

<?php foreach ($cards as $student):
    $photoSrc = !empty($student['photo'])
        ? base_url('uploads/' . $student['photo'])
        : null;

    $sid = !empty($student['student_id_display'])
        ? $student['student_id_display']
        : '#' . $student['id'];

    $admDate = '';
    if (!empty($student['admission_date'])) {
        $ts      = strtotime($student['admission_date']);
        $admDate = $ts ? date('d/m/Y', $ts) : $student['admission_date'];
    }

    $address = $student['address'] ?? '';
    $logoSrc = base_url('assets/images/logo.webp');
?>

<div class="id-card">

    <!-- ① HEADER: logo full height, text centred -->
    <div class="card-header">
        <img src="<?= $logoSrc ?>"
             class="logo"
             alt="Logo"
             onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
        <div class="logo-placeholder" style="display:none;">ACI</div>

        <div class="hdr-text">
            <div class="institute-name">Arun Computer Institute</div>
            <div class="institute-sub">Affiliated with : Makhanlal Univ. Bhopal (M.P.)</div>
        </div>
    </div>

    <div class="card-main">

        <!-- LEFT: fields + addr footer -->
        <div class="card-left">
            <div class="card-fields">

                <!-- ④ Name row: name left, ID right (aligned to photo edge) -->
                <div class="row-name">
                    <div class="name-left">
                        <span class="f-label">Name :</span>
                        <span class="f-value"><?= esc($student['name']) ?></span>
                    </div>
                    <span class="sid-badge"><?= esc($sid) ?></span>
                </div>

                <div class="field-row">
                    <span class="f-label">Course :</span>
                    <span class="f-value"><?= esc($student['course']) ?></span>
                </div>

                <div class="field-row">
                    <span class="f-label">Adm. Date :</span>
                    <span class="f-value"><?= esc($admDate) ?></span>
                </div>

                <!-- ③ Address below Adm. Date -->
                <div class="field-row">
                    <span class="f-label">Address :</span>
                    <span class="f-value"><?= esc($address) ?></span>
                </div>

                <div class="field-row row-mobile">
                    <span class="f-label">Mobile :</span>
                    <span class="f-value"><?= esc($student['phone']) ?></span>
                </div>

            </div>

            <!-- ⑥ Footer: header-blue bg, white text, left-aligned, max size -->
            <div class="card-addr">
                <span>Alld. Road, Urrhat, Rewa (M.P.)</span>
            </div>
        </div>

        <!-- RIGHT: photo + signature -->
        <div class="card-right">
            <div class="card-photo-wrap">
                <?php if ($photoSrc): ?>
                    <img src="<?= $photoSrc ?>" alt="Photo"
                         onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                    <div class="no-photo" style="display:none;">No Photo</div>
                <?php else: ?>
                    <div class="no-photo">No Photo</div>
                <?php endif; ?>
            </div>

            <!-- ⑤ Signature: single line italic name, bigger "Signature" label -->
            <div class="card-sig">
                <div class="sig-name">Om Prakash Shrivastava</div>
                <div class="sig-label">Signature</div>
            </div>
        </div>

    </div><!-- .card-main -->

</div><!-- .id-card -->

<?php endforeach; ?>

</div><!-- .a4-page -->

</body>
</html>
